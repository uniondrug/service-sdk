<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NotRegisterException;
use Uniondrug\ServiceSdk\Exceptions\VersionException;

/**
 * 按名称读取HOST
 * @package Uniondrug\ServiceSdk\Bases
 */
class Host
{
    /**
     * 历史请求
     * @var array
     */
    private static $_history = [];

    /**
     * 按版本号读取URL
     * @param int    $version
     * @param string $name
     * @param string $path
     * @return string
     * @throws VersionException
     * @throws NotRegisterException
     */
    public static function get(int $version = 0, string $name, string $path)
    {
        // 1. full URL
        if (preg_match("/^https*:\/\//i", $path)) {
            return $path;
        }
        // 2. from Consul
        if ($version === Sdk::VERSION_2X) {
        }
        // 3. from Config
        if ($version === Sdk::VERSION_1X) {
        }
        // 4. failure
        throw new VersionException("unknown V{$version} sdk");
    }

    private static function getConsul()
    {
    }

    private static function getConfig()
    {
    }
}
