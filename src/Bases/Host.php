<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

use GuzzleHttp\Client;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Guzzle\HandlerStackFactory;
use Uniondrug\ServiceSdk\ServiceSdk;
use HyperfGuzzleHandlerStackFactory;
use GuzzleHttpClient;

/**
 * V1/Host管理器
 * @package Uniondrug\ServiceSdk\Bases
 */
class Host
{
    private static $_consulHosts = [];
    private static $_consulServiceHosts = [];
    private static $_consulServiceCache = [];
    private static $_nsCache = [];
    private static $_nsHosts = [];
    private static $_cacheSeconds = 180;

    /**
     * @Inject()
     * @var Hyperf\Guzzle\ClientFactory
     */
    private $clientFactory;

    /**
     * 从KV中读取
     * @param ServiceSdk $serviceSdk
     * @param string     $serviceName
     * @return bool|string
     */
    public function fromConsulHost(ServiceSdk $serviceSdk, string $serviceName)
    {
        if (!isset(self::$_consulHosts[$serviceName])) {
            self::$_consulHosts[$serviceName] = $serviceSdk->getSetting()->getConsulHost($serviceName);
            $serviceSdk->getLogger()->info("SDK从Config中使用{{$serviceName}}读到{".self::$_consulHosts[$serviceName]."}服务");
        }
        return self::$_consulHosts[$serviceName];
    }

    /**
     * 从Consul读取
     * 兼容V2版本, 从Consul的服务注册与发现中读取
     * @param ServiceSdk $serviceSdk
     * @param string     $serviceName
     * @return string|false
     */
    public function fromConsulService(ServiceSdk $serviceSdk, string $serviceName)
    {
        // 1. from cache
        if (isset(self::$_consulServiceHosts[$serviceName])) {
            $time = self::$_consulServiceCache[$serviceName];
            if ($time >= time()) {
                return self::$_consulServiceHosts[$serviceName];
            }
        }
        $json = $serviceSdk->getHttpClient()->get($serviceSdk->getSetting()->consulApi().'/'.$serviceName)->getBody()->getContents();
        $data = json_decode($json, true);
        if (is_array($data) && isset($data[0], $data[0]['ServiceAddress'], $data[0]['ServicePort'])) {
            self::$_consulServiceCache[$serviceName] = time() + self::$_cacheSeconds;
            self::$_consulServiceHosts[$serviceName] = $data[0]['ServiceAddress'].':'.$data[0]['ServicePort'];
            $serviceSdk->getLogger()->info("SDK从ConsulService中使用{{$serviceName}}读到{".self::$_consulServiceHosts[$serviceName]."}服务");
            return self::$_consulServiceHosts[$serviceName];
        }
        return false;
    }

    /**
     * 从NS读取
     * 兼容V1版本, 从module.ns启动的项目中读取
     * @param ServiceSdk $serviceSdk
     * @param string     $serviceName
     * @return string|false
     */
    public function fromNsServer(ServiceSdk $serviceSdk, string $serviceName)
    {
        // 1. from cache
        if (isset(self::$_nsHosts[$serviceName])) {
            $time = self::$_nsCache[$serviceName];
            if ($time >= time()) {
                return self::$_nsHosts[$serviceName];
            }
        }
        // 2. from server
        $json = $serviceSdk->getHttpClient()->post($serviceSdk->getSetting()->nsApi(), [
            'json' => ['serviceName' => $serviceName]
        ])->getBody()->getContents();
        $data = json_decode($json, true);
        if (is_array($data) && isset($data['data'], $data['data']['name'])) {
            self::$_nsCache[$serviceName] = time() + self::$_cacheSeconds;
            self::$_nsHosts[$serviceName] = $serviceSdk->getSetting()->parseDomain($data['data']['name']);
            $serviceSdk->getLogger()->info("SDK从NameService中使用{{$serviceName}}读到{".self::$_nsHosts[$serviceName]."}服务");
            return self::$_nsHosts[$serviceName];
        }
        return false;
    }

    /**
     * 生成URL
     * @param string $host
     * @param string $path
     * @param null   $query
     * @return string
     */
    public function makeUrl(string $host, string $path, $query = null)
    {
        $url = $host;
        if ($path !== '') {
            $url .= '/'.preg_replace("/^[\/]/", '', $path);
        }
        if (is_array($query)) {
            $url .= '?'.http_build_query($query);
        }
        if (preg_match("/^https*:\/\//", $url) === 0) {
            $url = "http://{$url}";
        }
        return $url;
    }
}
