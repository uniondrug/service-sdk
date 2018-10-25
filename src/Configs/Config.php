<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Configs;

use Phalcon\Config as PhalconConfig;

/**
 * SDK配置
 * @package Uniondrug\ServiceSdk\Configs
 */
class Config
{
    /**
     * 缓存定义
     */
    const CACHE_DEADLINE = 300;
    const DEFAULT_CACHE_DEADLINE = 0;
    /**
     * 重试定义
     */
    const RETRY_TIMES = 1;
    const DEFAULT_RETRY_TIMES = 1;
    /**
     * Header定义
     */
    const REQID_KEY = 'UDSDK-REQID';
    const REQID_NAME = 'HTTP_UDSDK_REQID';
    public $redisHost = '0.0.0.0';
    public $redisPort = 0;
    public $redisAuth = '';
    public $redisIndex = 0;
    /**
     * 请求超时时长
     * @var int
     */
    public $timeout = 25;
    public $userAgent = 'UDSDK/2.0';
    /**
     * Consul是否使用API模式
     * `true` : 使用API, 获取真实地址
     * `false` : 使用DNS, 自己解析以获取的IP
     * @var bool
     */
    public $consulApiEnable = true;
    public $consulApiAddress = 'http://127.0.0.1:8500/v1/catalog/service';
    public $consulApiTimeout = 3;
    public $consulUrlProtocol = 'http';
    public $consulUrlSuffix = 'service.consul';

    /**
     * @param PhalconConfig $sdkConfig
     * @param PhalconConfig $redisConfig
     */
    public function __construct(PhalconConfig $sdkConfig = null, PhalconConfig $redisConfig = null)
    {
        // 0. 环境变量
        // 1. SDKs配置
        if ($redisConfig instanceof PhalconConfig) {
            isset($redisConfig->timeout) && $this->timeout = $redisConfig->timeout;
            isset($redisConfig->userAgent) && $this->userAgent = $redisConfig->userAgent;
            isset($redisConfig->consulApiEnable) && $this->consulApiEnable = $redisConfig->consulApiEnable !== false;
            isset($redisConfig->consulApiAddress) && $this->consulApiAddress = $redisConfig->consulApiAddress;
            isset($redisConfig->consulApiTimeout) && $this->consulApiTimeout = $redisConfig->consulApiTimeout;
            isset($redisConfig->consulUrlProtocol) && $this->consulUrlProtocol = $redisConfig->consulUrlProtocol;
            isset($redisConfig->consulUrlSuffix) && $this->consulUrlSuffix = $redisConfig->consulUrlSuffix;
        }
        // 2. Redis配置
        if ($redisConfig instanceof PhalconConfig) {
            isset($redisConfig->host) && $this->redisHost = $redisConfig->host;
            isset($redisConfig->port) && $this->redisPort = $redisConfig->port;
            isset($redisConfig->auth) && $this->redisAuth = $redisConfig->auth;
            isset($redisConfig->password) && $this->redisAuth = $redisConfig->password;
            isset($redisConfig->index) && $this->redisIndex = $redisConfig->index;
        }
    }
}
