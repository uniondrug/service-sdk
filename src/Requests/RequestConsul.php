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
    public function __construct(AdapterInterface $logger, Config $config, string $requestId)
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
            $this->logger->error("[{$this->requestId}][uri={$uri}]请求地址不合法,不可解析服务地址");
            return false;
        }
        // 2. 完整地址
        $scheme = strtolower($m[1]);
        $schemes = [
            'http',
            'https'
        ];
        if (in_array($scheme, $schemes)) {
            $this->logger->info("[{$this->requestId}][uri={$uri}]已是完整URL地址");
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
                $limit > 1 && $offset = mt_rand(0, $limit-1);
                $url = "{$apiAddressData[$offset]['ServiceAddress']}:{$apiAddressData[$offset]['ServicePort']}";
                // 4.3 not found
                if ($url === '') {
                    throw new SdkException("服务未注册");
                }
                // 4.4 return
                $url = "http://{$url}/{$m[2]}";
                $duration = sprintf("%.06f", microtime(true) - $apiBegin);
                $this->logger->info("[{$this->requestId}][consul={$apiAddress}][duration={$duration}]读取到服务地址 - {$url}");
                return $url;
            } catch(\Throwable $e) {
                $this->logger->error("[{$this->requestId}][consul={$apiAddress}]读取服务失败 - {$e->getMessage()}");
            }
            return false;
        }
        // 5. 返回DNS
        $host = "{$m[1]}.{$this->config->consulUrlSuffix}";
        $url = "{$this->config->consulUrlProtocol}://{$host}/{$m[2]}";
        $this->logger->info("[{$this->requestId}][host={$host}]生成用于DNS解析的地址 - ".$url);
        return $url;
    }
}
