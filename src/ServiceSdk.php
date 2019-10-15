<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk;

use Uniondrug\ServiceSdk\Exceptions\NoSdkException;

/**
 * SDK入口
 * <code>
 * // V1
 * $sdk->user->info();
 * </code>
 * <code>
 * // V2
 * $sdk->module->user->info();
 * </code>
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
     * @return object
     * @throws NoSdkException
     */
    public function __get($name)
    {
        if (!isset(self::$_getHistory[$name])) {
            try {
                // V2
                $class = "\\Uniondrug\\ServiceSdk\\Exports\\".ucfirst($name);
                $instance = new $class();
                self::$_getHistory[$name] = $instance;
            } catch(\Throwable $e) {
                try {
                    // V1
                    $class = "\\Uniondrug\\ServiceSdk\\Modules\\".ucfirst($name)."Sdk";
                    $instance = new $class();
                    self::$_getHistory[$name] = $instance;
                } catch(\Throwable $e) {
                    // Undefined
                    throw new NoSdkException("call undefined {$name} sdk");
                }
            }
        }
        return self::$_getHistory[$name];
    }
}
