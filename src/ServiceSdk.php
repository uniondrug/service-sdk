<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk;

use Uniondrug\Framework\Container;
use Uniondrug\ServiceSdk\Bases\EventsTrait;
use Uniondrug\ServiceSdk\Bases\Response;
use Uniondrug\ServiceSdk\Bases\Restful;
use Uniondrug\ServiceSdk\Bases\Settings;
use Uniondrug\ServiceSdk\Exceptions\NoSdkException;
use Uniondrug\ServiceSdk\Exports\Backend;
use Uniondrug\ServiceSdk\Exports\Module;
use Uniondrug\ServiceSdk\Exports\Union;

/**
 * SDK入口
 * @method Bases\ResponseInterface delete(string $uri, array $body = null, array $extra = null)
 * @method Bases\ResponseInterface get(string $uri, array $extra = null)
 * @method Bases\ResponseInterface head(string $uri, array $extra = null)
 * @method Bases\ResponseInterface options(string $uri, array $extra = null)
 * @method Bases\ResponseInterface patch(string $uri, array $body = null, array $extra = null)
 * @method Bases\ResponseInterface post(string $uri, array $body = null, array $extra = null)
 * @method Bases\ResponseInterface put(string $uri, array $body = null, array $extra = null)
 * @property Backend $backend
 * @property Module  $module
 * @property Union   $union
 * @package Uniondrug\ServiceSdk
 */
class ServiceSdk
{
    /**
     * @var Container
     */
    private $container;
    /**
     * @var Settings
     */
    private $settings;
    /**
     * 历史属性
     * @var array
     */
    private static $properties = [];
    /**
     * 注释与注解
     */
    use ServiceTrait, EventsTrait;

    /**
     * constructor.
     * @param Container $container
     */
    public function __construct(Container $container)
    {
        $this->container = $container;
        $this->settings = new Settings($container->getConfig()->path('sdk'));
    }

    /**
     * 调用Rest
     * @param $name
     * @param $arguments
     * @return Response
     */
    public function __call($name, $arguments)
    {
        return Restful::$name($this, ... $arguments);
    }

    /**
     * 读取SDKs
     * @param string $name
     * @return object
     * @throws NoSdkException
     */
    public function __get($name)
    {
        // 1. history
        if (isset(self::$properties[$name])) {
            return self::$properties[$name];
        }
        // 2. v2
        $v2 = "\\Uniondrug\\ServiceSdk\\Exports\\".ucfirst($name);
        if (class_exists($v2)) {
            self::$properties[$name] = new $v2($this);
            return self::$properties[$name];
        }
        // 3. v1
        $v1 = "\\Uniondrug\\ServiceSdk\\Modules\\".ucfirst($name)."Sdk";
        if (class_exists($v1)) {
            self::$properties[$name] = new $v1($this);
            return self::$properties[$name];
        }
        // 4. no
        throw new NoSdkException("sdk {$name} not found from v1");
    }

    /**
     * 读取容器
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * 读取配置
     * @return Settings
     */
    public function getSettings()
    {
        return $this->settings;
    }
}
