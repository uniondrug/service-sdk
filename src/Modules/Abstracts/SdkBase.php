<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Modules\Abstracts;

use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;
use Uniondrug\ServiceSdk\Requests\Request;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;
use Uniondrug\ServiceSdk\SdkException;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Modules\Abstracts
 */
abstract class SdkBase implements SdkInterface
{
    /**
     * HTTP请求类型定义
     */
    const METHOD_DELETE = "DELETE";     // HTTP/1.1 DELETE /
    const METHOD_GET = "GET";           // HTTP/1.1 GET /
    const METHOD_HEAD = "HEAD";         // HTTP/1.1 HEAD /
    const METHOD_OPTIONS = "OPTIONS";   // HTTP/1.1 OPTIONS /
    const METHOD_PATCH = "PATCH";       // HTTP/1.1 PATCH /
    const METHOD_POST = "POST";         // HTTP/1.1 POST /
    const METHOD_PUT = "PUT";           // HTTP/1.1 PUT /
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
    /**
     * 缓存时长
     * @var int
     */
    private $cacheDeadline;
    /**
     * 重试次数
     * @var int
     */
    private $retryTimes;
    /**
     * SDK/Service名称
     * @var string
     */
    protected $serviceName = null;
    private static $serviceFactories = [];

    /**
     * SdkBase constructor.
     * @param AdapterInterface $logger
     * @param Config           $config
     * @throws SdkException
     */
    final public function __construct(AdapterInterface $logger, Config $config)
    {
        if ($this->serviceName === null) {
            throw new SdkException("property of '".get_class($this)."::\$serviceName' not defined.");
        }
        $this->logger = $logger;
        $this->config = $config;
        $this->resetWith();
    }

    /**
     * @param AdapterInterface $logger
     * @param Config           $config
     * @return SdkInterface
     */
    final public static function factory(AdapterInterface $logger, Config $config)
    {
        $key = static::class;
        if (!isset(self::$serviceFactories[$key])) {
            self::$serviceFactories[$key] = new static($logger, $config);
        }
        $sdk = self::$serviceFactories[$key];
        $sdk->resetWith();
        return $sdk;
    }

    /**
     * @return $this
     */
    final public function resetWith()
    {
        $this->cacheDeadline = Config::DEFAULT_CACHE_DEADLINE;
        $this->retryTimes = Config::DEFAULT_RETRY_TIMES;
        return $this;
    }

    /**
     * 发起Restful请求
     * @param string $method
     * @param string $uri
     * @param null   $body
     * @param null   $query
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function restful(string $method, string $uri, $body = null, $query = null, $extra = null)
    {
        $request = new Request($this->logger, $this->config, $this->cacheDeadline, $this->retryTimes);
        $request->send($method, $this->serviceName.'://'.$uri, $extra, $body, $query);
        return $request->end();
    }

    /**
     * 指定缓存时长
     * @param int $cacheDeadline
     * @return $this
     */
    final public function withCache(int $cacheDeadline = Config::CACHE_DEADLINE)
    {
        $this->cacheDeadline = $cacheDeadline;
        return $this;
    }

    /**
     * 指定重试次数
     * @param int $retryTimes
     * @return $this
     */
    final public function withRetry(int $retryTimes = Config::RETRY_TIMES)
    {
        $this->retryTimes = $retryTimes;
        return $this;
    }
}
