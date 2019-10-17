<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Uniondrug\ServiceSdk\Bases\EventsTrait;
use Uniondrug\ServiceSdk\Exceptions\NoNameException;
use Uniondrug\ServiceSdk\Exceptions\NoSdkException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Magic
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Magic
{
    /**
     * NameSpace
     * @var string
     */
    protected $ns;
    /**
     * @var ServiceSdk
     */
    private $sdk;
    /**
     * @var array
     */
    private static $properties = [];
    /**
     * Events
     */
    use EventsTrait;

    /**
     * @param $name
     * @return object
     * @throws NoSdkException
     */
    public function __get($name)
    {
        $key = strtolower($this->ns.'-'.$name);
        if (isset(self::$properties[$key])) {
            return self::$properties[$key];
        }
        $class = "\\Uniondrug\\ServiceSdk\\Exports\\{$this->ns}\\".ucfirst($name)."Sdk";
        if (class_exists($class)) {
            self::$properties[$key] = new $class($this->sdk);
            return self::$properties[$key];
        }
        throw new NoSdkException("sdk {$name} not found from v2");
    }

    /**
     * Magic constructor.
     * @param ServiceSdk $sdk
     * @throws NoNameException
     */
    public function __construct(ServiceSdk $sdk)
    {
        $this->sdk = $sdk;
        if ($this->ns === null) {
            throw new NoNameException("export name not defined by ns");
        }
    }
}
