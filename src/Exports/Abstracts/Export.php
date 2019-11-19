<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Uniondrug\ServiceSdk\Bases\WithTrait;
use Uniondrug\ServiceSdk\Exceptions\NotPublishedException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Export分发
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Export
{
    private static $exports = [];
    private $serviceSdk;
    protected $ns;
    /**
     * 兼容With
     */
    use WithTrait;

    public function __construct(ServiceSdk $serviceSdk)
    {
        $this->serviceSdk = $serviceSdk;
    }

    /**
     * @param string $name
     * @return \Uniondrug\ServiceSdk\Bases\Sdk
     */
    public function __get($name)
    {
        $key = $this->ns.'_'.$name;
        if (isset(self::$exports[$key])) {
            return self::$exports[$key];
        }
        $class = "\\Uniondrug\\ServiceSdk\\Exports\\{$this->ns}\\".ucfirst($name)."Sdk";
        if (!class_exists($class, true)) {
            throw new NotPublishedException($name);
        }
        self::$exports[$key] = new $class($this->serviceSdk);
        return self::$exports[$key];
    }
}
