<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\HttpClient\Client;
use Uniondrug\ServiceSdk\Exceptions\NotRegisterException;
use Uniondrug\ServiceSdk\Exceptions\VersionException;

/**
 * 按名称读取HOST
 * @package Uniondrug\ServiceSdk\Bases
 */
class Host
{
    const CACHE_SECONDS = 300;
    private static $_caches = [];
    private static $_hosts = [];
    /**
     * @var array|null
     */
    private static $_hostsKv;
    private static $consulApiAddress;

    /**
     * @param Sdk    $sdk
     * @param string $path
     * @return string
     * @throws NotRegisterException
     * @throws VersionException
     */
    public static function get($sdk, string $path)
    {
        // 1. 完整URL
        if (preg_match("/https*:\/\//i", $path) > 0) {
            return $path;
        }
        // 2. 缓存地址
        $class = $sdk->_class();
        if (isset(self::$_hosts[$class])) {
            $time = self::$_caches[$class];
            if ($time >= time()) {
                return self::getUrl(self::$_hosts[$class], $path);
            }
        }
        // 3. 计算主机
        $host = null;
        if ($sdk->_v2()) {
            $host = self::getV2($sdk);
        } else if ($sdk->_v1()) {
            $host = self::getV1($sdk);
        } else {
            throw new VersionException("unknown sdk version");
        }
        // 4. 格式化
        $host = preg_replace("/[\/]+$/", "", $host);
        if (preg_match("/^https*:\/\//i", $host) === 0) {
            $host = "http://{$host}";
        }
        // 5. 完成返回
        self::$_hosts[$class] = $host;
        self::$_caches[$class] = (int) (time() + self::CACHE_SECONDS);
        return self::getUrl($host, $path);
    }

    /**
     * @param string $host
     * @param string $path
     * @return string
     */
    private static function getUrl(string $host, string $path)
    {
        return $host.'/'.preg_replace("/^[\/]+/", "", $path);
    }

    /**
     * 按名称读取地址
     * 此前是通过服务名从NS读取域名, 修改为从KV配置文件里
     * 读取
     * @param Sdk $sdk
     * @return string
     * @throws NotRegisterException
     */
    private static function getV1($sdk)
    {
        // 1. 配置刷入内存
        if (self::$_hostsKv === null) {
            $hosts = $sdk::$container->getConfig()->path('sdk.hosts');
            self::$_hostsKv = is_array($hosts) ? $hosts : [];
        }
        // 2. 验证内存数据
        if (isset(self::$_hostsKv[$sdk->_name()])) {
            return (string) self::$_hostsKv[$sdk->_name()];
        }
        // 3. 服务未注册
        throw new NotRegisterException("service {$sdk->_name()} not registed by consul kv");
    }

    /**
     * 从Consul读取域名
     * @param Sdk $sdk
     * @return string
     * @throws NotRegisterException
     */
    private static function getV2($sdk)
    {
        /**
         * 1. 预置变量
         * @var string $url
         * @var Client $http
         * @var array  $options
         */
        $url = (string) $sdk::$container->getConfig()->path('sdk.consulApiAddress');
        $url .= '/'.$sdk->_name();
        $http = $sdk::$container->getShared('httpClient');
        $options = [
            'timeout' => (int) $sdk::$container->getConfig()->path('sdk.consulApiTimeout')
        ];
        // 2. 请求数据
        $json = $http->get($url, $options)->getBody()->getContents();
        $data = json_decode($json, true);
        if (is_array($data) && isset($data[0], $data[0]['ServiceAddress'], $data[0]['ServicePort'])) {
            return "http://{$data[0]['ServiceAddress']}:{$data[0]['ServicePort']}";
        }
        // 3. 无效服务
        throw new NotRegisterException("service2 {$sdk->_name()} not registed by consul service");
    }
}
