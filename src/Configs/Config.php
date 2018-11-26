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
    public $environment;
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
    public $consulApiAddress = '';
    public $consulApiTimeout = 5;
    public $consulUrlProtocol = 'http';
    public $consulUrlSuffix = 'service';
    public $compatiables = [];

    private $sdkDomain = [
        'production' => 'uniondrug.cn',
        'release' => 'turboradio.cn',
        'testing' => 'test.dovecot.cn',
        'development' => 'dev.dovecot.cn',
    ];

    /**
     * @param PhalconConfig $sdkConfig
     * @param PhalconConfig $redisConfig
     */
    public function __construct(PhalconConfig $sdkConfig = null, PhalconConfig $redisConfig = null, $environment)
    {
        $this->environment = $environment;
        $host = isset($this->sdkDomain[$environment]) ? $this->sdkDomain[$environment] : 'sdk.consul';
        $this->consulApiAddress = "http://udsdk.{$host}/v1/catalog/service";
        // 0. 环境变量
        // 1. SDKs配置
        if ($sdkConfig instanceof PhalconConfig) {
            isset($sdkConfig->timeout) && $this->timeout = $sdkConfig->timeout;
            isset($sdkConfig->userAgent) && $this->userAgent = $sdkConfig->userAgent;
            isset($sdkConfig->consulApiEnable) && $this->consulApiEnable = $sdkConfig->consulApiEnable !== false;
            isset($sdkConfig->consulApiAddress) && $this->consulApiAddress = $sdkConfig->consulApiAddress;
            isset($sdkConfig->consulApiTimeout) && $this->consulApiTimeout = $sdkConfig->consulApiTimeout;
            isset($sdkConfig->consulUrlProtocol) && $this->consulUrlProtocol = $sdkConfig->consulUrlProtocol;
            isset($sdkConfig->consulUrlSuffix) && $this->consulUrlSuffix = $sdkConfig->consulUrlSuffix;
            isset($sdkConfig->compatiables) && is_array($sdkConfig->compatiables) && $this->compatiables = $redisConfig->compatiables;
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
