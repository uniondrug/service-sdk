<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;
use Uniondrug\ServiceSdk\SdkException;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class SdkEntrypoint
{
    protected $package = null;
    private static $packageInstances = [];
    /**
     * 配置
     * @var Config
     */
    private $config;
    /**
     * 日志
     * @var AdapterInterface
     */
    private $logger;

    public function __construct($logger, Config $config)
    {
        $this->logger = $logger;
        $this->config = $config;
    }

    /**
     * @param string $name SDK类名
     * @return mixed
     * @throws SdkException
     */
    public function __get($name)
    {
        // 1. no package defined
        if ($this->package === null) {
            throw new SdkException("未定义SDK包名称");
        }
        // 2. history
        $name = ucfirst($name);
        if (isset(self::$packageInstances[$name])) {
            return self::$packageInstances[$name];
        }
        // 3. defined
        $class = "\\Uniondrug\\ServiceSdk\\Exports\\{$this->package}\\{$name}Sdk";
        try {
            $object = new $class($this->logger, $this->config);
            self::$packageInstances[$name] = $object;
            return self::$packageInstances[$name];
        } catch(\Throwable $e) {
            throw new SdkException("未定义{$class}");
        }
    }
}
