<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Requests;

use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * 发起Restful请求
 * @package Uniondrug\ServiceSdk\Requests
 */
class Restful
{
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
     * Restful constructor.
     * @param AdapterInterface $logger
     * @param Config           $config
     */
    final public function __construct(AdapterInterface $logger, Config $config)
    {
        $this->logger = $logger;
        $this->config = $config;
        $this->cacheDeadline = Config::DEFAULT_CACHE_DEADLINE;
        $this->retryTimes = Config::DEFAULT_RETRY_TIMES;
    }

    /**
     * @param string $uri
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function delete(string $uri, $body = null, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_DELETE, $uri, $extra, $body, null);
    }

    /**
     * @param string $uri
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function get(string $uri, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_GET, $uri, $extra, null, null);
    }

    /**
     * @param string $uri
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function head(string $uri, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_HEAD, $uri, $extra, null, null);
    }

    /**
     * @param string $uri
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function options(string $uri, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_OPTIONS, $uri, $extra, null, null);
    }

    /**
     * @param string $uri
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function patch(string $uri, $body = null, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_PATCH, $uri, $extra, $body, null);
    }

    /**
     * @param string $uri
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function post(string $uri, $body = null, $extra = null)
    {

        print_r (func_get_args());
        exit;

        return $this->restful(SdkBase::METHOD_POST, $uri, $extra, $body, null);
    }

    /**
     * @param string $uri
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    final public function put(string $uri, $body = null, $extra = null)
    {
        return $this->restful(SdkBase::METHOD_PUT, $uri, $extra, $body, null);
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

    /**
     * @param string $method
     * @param string $uri
     * @param null   $extra
     * @param null   $body
     * @param null   $query
     * @return ResponseInterface
     */
    private function restful(string $method, string $uri, $extra = null, $body = null, $query = null)
    {
        $request = new Request($this->logger, $this->config, $this->cacheDeadline, $this->retryTimes);
        $request->send($method, $uri, $extra, $body, $query);
        return $request->end();
    }
}
