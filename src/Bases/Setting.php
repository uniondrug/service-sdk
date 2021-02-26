<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

use Hyperf\Config\Annotation\Value;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Di\Container;
use Phalcon\Config;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * SDK设置
 * @package Uniondrug\ServiceSdk
 */
class Setting
{
    const DEFAULT_CONTENT_TYPE = 'application/json';
    private $_domain;
    private $_timeout = 25;
    private $_consulApi = 3;
    private $_consulTimeout = 3;
    /**
     * @var Config|false
     */
    private $_consulHosts = false;
    private $_nsApi = '';
    private $_nsEnabled = false;
    /**
     *
     */
    private $_contentType;

    /**
     * @Inject()
     * @var ConfigInterface
     */
    public $hyperfConfig;

    /**
     * @Value("sdk")
     */
    private $sdkConfig;

    /**
     * constructor.
     * @param ServiceSdk $sdk
     */
    public function __construct(ServiceSdk $sdk)
    {
        if ($sdk->getContainer() instanceof Container){
            $config = $sdk->getContainer()->get(ConfigInterface::class);
            $arr = $config->get('sdk');
            $config = json_decode(json_encode($arr));
            $this->initBase($config);
            $this->initConsul($config);
            $this->initConsulHosts($config);
        }else{
            $config = $sdk->getContainer()->getConfig()->path('sdk');
            if ($config instanceof Config) {
                $this->initBase($config);
                $this->initConsul($config);
                $this->initConsulHosts($config);
                $this->initNs($config);
            }
        }
        $this->_contentType = self::DEFAULT_CONTENT_TYPE;

    }

    /**
     * Consul API
     * @return int
     */
    public function consulApi()
    {
        return $this->_consulApi;
    }

    /**
     * Consul Timeout
     * @return int
     */
    public function consulTimeout()
    {
        return $this->_consulTimeout;
    }

    /**
     * 文档类型
     * @return string
     */
    public function contentType()
    {
        return $this->_contentType;
    }

    /**
     * @param string $name
     * @return bool|string
     */
    public function getConsulHost(string $name)
    {
        if ($this->hasConsulHost($name)) {
            return $this->parseDomain($this->_consulHosts->{$name});
        }
        return false;
    }

    /**
     * @param string $name
     * @return bool
     */
    public function hasConsulHost(string $name)
    {
        if ($this->_consulHosts && isset($this->_consulHosts->{$name})) {
            return true;
        }
        return false;
    }

    /**
     * NS地址
     * @return string
     */
    public function nsApi()
    {
        return $this->_nsApi;
    }

    /**
     * NS状态
     * @return bool
     */
    public function nsEnabled()
    {
        return $this->_nsEnabled;
    }

    /**
     * 解析域名变更/后缀
     * @param string $host
     * @return mixed|string
     */
    public function parseDomain(string $host)
    {
        if ($this->_domain !== null) {
            $host = preg_replace("/\{\{domain\}\}/i", $this->_domain, $host);
        }
        return $host;
    }

    /**
     * @return int
     */
    public function timeout()
    {
        return $this->_timeout;
    }

    /**
     * 初始化基础
     * @param Config $config
     */
    private function initBase($config)
    {
        if (isset($config->domain) && is_string($config->domain) && $config->domain !== '') {
            $this->_domain = $config->domain;
        }
        if (isset($config->timeout) && is_numeric($config->timeout) && $config->timeout > 0) {
            $this->_timeout = $config->timeout;
        }
        if (isset($config->contentType) && is_string($config->contentType)) {
            $this->_contentType = $config->contentType;
        }
    }

    /**
     * 初始化基础
     * @param Config $config
     */
    private function initBase2($config)
    {
        if (isset($config->domain) && is_string($config->domain) && $config->domain !== '') {
            $this->_domain = $config->domain;
        }
        if (isset($config->timeout) && is_numeric($config->timeout) && $config->timeout > 0) {
            $this->_timeout = $config->timeout;
        }
        if (isset($config->contentType) && is_string($config->contentType)) {
            $this->_contentType = $config->contentType;
        }
    }

    /**
     * 初始化Consul配置
     * @param Config $config
     */
    private function initConsul($config)
    {
        if (isset($config->consulApiAddress) && is_string($config->consulApiAddress) && $config->consulApiAddress !== '') {
            $this->_consulApi = $this->parseDomain($config->consulApiAddress);
        }
        echo PHP_EOL.$this->_consulApi.PHP_EOL;
        if (isset($config->consulApiTimeout) && is_numeric($config->consulApiTimeout) && $config->consulApiTimeout > 0) {
            $this->_consulTimeout = $config->consulApiTimeout;
        }
    }

    /**
     * 初始化ConsulKV配置
     * @param Config $config
     */
    private function initConsulHosts($config)
    {
        if (isset($config->consulHosts) && $config->consulHosts instanceof Config) {
            $this->_consulHosts = $config->consulHosts;
        }
    }

    /**
     * 初始化NS配置
     * @param Config $config
     */
    private function initNs(Config $config)
    {
        if (isset($config->nsEnabled)) {
            if (is_bool($config->nsEnabled)) {
                $this->_nsEnabled = $config->nsEnabled;
            } else if (is_string($config->nsEnabled)) {
                $this->_nsEnabled = strtolower($config->nsEnabled) === 'true';
            }
        }
        if ($this->_nsEnabled && isset($config->nsApiAddress) && is_string($config->nsApiAddress)) {
            if ($this->_domain !== null) {
                $this->_nsApi = $this->parseDomain($config->nsApiAddress);
            } else {
                $this->_nsApi = $config->nsApiAddress;
            }
        }
    }
}
