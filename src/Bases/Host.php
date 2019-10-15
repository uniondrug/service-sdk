<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

use Phalcon\Di;
use Uniondrug\ServiceSdk\Exceptions\NotRegisterException;
use Uniondrug\ServiceSdk\Exceptions\VersionException;

/**
 * 按名称读取HOST
 * @package Uniondrug\ServiceSdk\Bases
 */
class Host
{
    const CACHED_SECONDS = 300;
    /**
     * 历史请求
     * @var array
     */
    private static $_history = [];
    private static $_caches = [];

    /**
     * 按版本号读取URL
     * @param int    $version
     * @param string $class
     * @param string $name
     * @param string $path
     * @return string
     * @throws VersionException
     * @throws NotRegisterException
     */
    public static function get(int $version = 0, string $class, string $name, string $path)
    {
        // 1. full URL
        if (preg_match("/^https*:\/\//i", $path)) {
            return $path;
        }
        // 2. from history
        if (isset(self::$_history[$class])) {
            $time = self::$_caches[$class];
            if (time() <= $time) {
                return self::$_history[$class];
            }
        }
        // 3. version selector
        if ($version === Sdk::VERSION_2X) {
            $host = self::getConsul($name);
        } else if ($version === Sdk::VERSION_1X) {
            $host = self::getConfig($name);
        } else {
            throw new VersionException("unknown V{$version} sdk");
        }
        // 4. host check
        if ($host === false) {
            throw new NotRegisterException("service '{$name}' not registed");
        }
        self::$_history[$class] = $host;
        self::$_caches[$class] = time();
        return $host;
    }

    /**
     * 从Consul中读取
     * @param string $name
     * @return false|string
     */
    private static function getConsul(string $name)
    {
        //        $host = 'http://www.sina.com.cn';
        //        self::$_history[$class] = $host;
        //        self::$_caches[$class] = time();
        return false;
    }

    /**
     * 从Config文件中读取
     * @param string $name
     * @return false|string
     */
    private static function getConfig(string $name)
    {
        $hosts = Di::getDefault()->getConfig()->path('sdk.hosts');
        if (is_array($hosts) && isset($hosts[$name])) {
            return $hosts[$name];
        }
        return false;
    }
}
