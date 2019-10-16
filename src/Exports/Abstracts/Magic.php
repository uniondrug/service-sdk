<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Uniondrug\ServiceSdk\Exceptions\NoSdkException;

/**
 * Magic
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Magic
{
    protected $ns;
    private static $_classes = [];

    /**
     * 读取SDK
     * @param $name
     * @return Sdk
     * @throws \Exception
     */
    public function __get($name)
    {
        // 1. from history
        $key = strtolower($this->ns.'-'.$name);
        if (isset(self::$_classes[$key])) {
            return self::$_classes[$key];
        }
        // 2. build
        $class = "\\Uniondrug\\ServiceSdk\\Exports\\{$this->ns}\\".ucfirst($name)."Sdk";
        if (class_exists($class)) {
            self::$_classes[$key] = new $class();
            return self::$_classes[$key];
        }
        // 3. not found
        throw new NoSdkException("sdk {$name} not found of v2");
    }
}
