<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Requests;

use GuzzleHttp\Client;
use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;
use Uniondrug\ServiceSdk\SdkException;

/**
 * 从Consul读服务
 * @package Uniondrug\ServiceSdk\Requests
 */
class RequestConsul
{
    /**
     * 配置
     * @var Config
     */
    public $config;
    /**
     * 日志
     * @var AdapterInterface
     */
    public $logger;
    private $requestId;
    private static $urlRegexp = "/^([_a-zA-Z0-9\-\.]+):[\/]+(.+)$/";
    private static $urlClient;

    /**
     * @param AdapterInterface $logger
     * @param Config           $config
     * @param string           $requestId
     */
    public function __construct($logger, Config $config, string $requestId)
    {
        $this->logger = $logger;
        $this->config = $config;
        $this->requestId = $requestId;
    }

    /**
     * 构建URL地址
     * @param string $uri
     * @return false|string
     */
    public function buildUrl(string $uri)
    {
        // 1. 格式错误
        //    ^([_a-zA-Z0-9\-\.]+)://(\S+)$
        if (preg_match(self::$urlRegexp, $uri, $m) === 0) {
            $this->logger->debug("请求URL{{$uri}}不合法,不可解析");
            return false;
        }
        // 2. 完整地址
        $scheme = strtolower($m[1]);
        $schemes = [
            'http',
            'https'
        ];
        if (in_array($scheme, $schemes)) {
            $this->logger->debug("已是完整URL");
            return $uri;
        }
        // 3. 构建client
        self::$urlClient || self::$urlClient = new Client(['timeout' => $this->config->consulApiTimeout]);
        // 4. 从ConsulApi提取
        if ($this->config->consulApiEnable) {
            $apiBegin = microtime(true);
            $apiAddress = "{$this->config->consulApiAddress}/{$m[1]}";
            try {
                // 4.1 request api
                $apiAddressText = self::$urlClient->get($apiAddress)->getBody()->getContents();
                $apiAddressData = \GuzzleHttp\json_decode($apiAddressText, true);
                // 4.2 fetch address
                $offset = 0;
                $limit = count($apiAddressData);
                if ($limit < 1) {
                    throw new SdkException("服务未注册");
                }
                $limit > 1 && $offset = mt_rand(0, $limit - 1);
                $url = "{$apiAddressData[$offset]['ServiceAddress']}:{$apiAddressData[$offset]['ServicePort']}";
                // 4.3 not found
                if ($url === '') {
                    throw new SdkException("注册服务不合法");
                }
                // 4.4 return
                //     http
                //     https
                //     ws
                //     wss
                //     tcp
                //     udp
                if (preg_match("/^([a-z]+):\/\//i", $url) === 0) {
                    $url = "http://{$url}";
                }
                $url = "{$url}/{$m[2]}";
                $duration = sprintf("%.06f", microtime(true) - $apiBegin);
                $this->logger->debug("用时{{$duration}}秒获得{{$url}}地址");
                return $url;
            } catch(\Throwable $e) {
                $this->logger->error("通过{{$apiAddress}}获取地址服务地址失败 - {$e->getMessage()}");
            }
            return false;
        }
        // 5. 返回DNS
        $host = "{$m[1]}.{$this->config->consulUrlSuffix}";
        $url = "{$this->config->consulUrlProtocol}://{$host}/{$m[2]}";
        $this->logger->debug("服务{{$host}}生成用于DNS解析的{{$url}}地址");
        return $url;
    }
}
