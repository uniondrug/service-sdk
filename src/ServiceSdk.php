<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk;

use Uniondrug\ServiceSdk\Bases\Sdk;
use Uniondrug\ServiceSdk\Exceptions\NoSdkException;
use Uniondrug\ServiceSdk\Exports\Backend;
use Uniondrug\ServiceSdk\Exports\Module;
use Uniondrug\ServiceSdk\Exports\Union;

/**
 * SDK入口
 * @property Backend $backend
 * @property Module  $module
 * @property Union   $union
 * @package Uniondrug\ServiceSdk
 */
class ServiceSdk
{
    use ServiceTrait;
    private static $_getHistory = [];

    /**
     * 调用入口
     * @param string $name
     * @param array  $arguments
     */
    public function __call($name, $arguments)
    {
    }

    /**
     * 读取SDK模块
     * @param string $name
     * @return Sdk
     * @throws NoSdkException
     * @throws \Throwable
     */
    public function __get($name)
    {
        // 1. history
        if (isset(self::$_getHistory[$name])) {
            return self::$_getHistory[$name];
        }
        // 2. v2: first
        $v2Class = "\\Uniondrug\\ServiceSdk\\Exports\\".ucfirst($name);
        if (class_exists($v2Class)) {
            try {
                self::$_getHistory[$name] = new $v2Class();
                return self::$_getHistory[$name];
            } catch(\Throwable $e) {
                throw $e;
            }
        }
        // 3. v1: compatiable
        $v1Class = "\\Uniondrug\\ServiceSdk\\Modules\\".ucfirst($name)."Sdk";
        if (class_exists($v1Class)) {
            try {
                self::$_getHistory[$name] = new $v1Class();
                return self::$_getHistory[$name];
            } catch(\Throwable $e) {
                throw $e;
            }
        }
        // 4. no sdk
        throw new NoSdkException("sdk {$name} not found of v1");
    }
}
