<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-22
 */
namespace Uniondrug\ServiceSdk;

use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkInterface;
use Uniondrug\ServiceSdk\Requests\Restful;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * SDK入口
 * @property Exports\Backend $backend 后端SDK入口
 * @property Exports\Module  $module  模块SDK入口
 * @property Exports\Union   $union   聚合SDK入口
 * @method Responses\Response delete(string $uri, array $body = null, array $extra = null)
 * @method Responses\Response get(string $uri, array $extra = null)
 * @method Responses\Response head(string $uri, array $extra = null)
 * @method Responses\Response options(string $uri, array $extra = null)
 * @method Responses\Response patch(string $uri, array $body = null, array $extra = null)
 * @method Responses\Response post(string $uri, array $body = null, array $extra = null)
 * @method Responses\Response put(string $uri, array $body = null, array $extra = null)
 * @package Uniondrug\ServiceSdk
 */
class Sdk
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
     * 历史Magic-Get
     * @var array
     */
    private static $magicGetHistory = [];
    /**
     * SDK兼容复用
     */
    use SdkTrait;

    /**
     * Sdk注入
     * @param        $logger
     * @param        $sdkConfig
     * @param        $redisConfig
     * @param string $environment
     */
    final public function __construct($logger, $sdkConfig = null, $redisConfig = null, $environment)
    {
        $this->logger = $logger;
        $this->config = new Config($sdkConfig, $redisConfig, $environment);
        $this->cacheDeadline = Config::DEFAULT_CACHE_DEADLINE;
        $this->retryTimes = Config::DEFAULT_RETRY_TIMES;
    }

    /**
     * 按方法读取SDK对象
     * @param $name
     * @param $arguments
     * @return ResponseInterface
     * @throws SdkException
     */
    final public function __call($name, $arguments)
    {
        try {
            $sdk = new Restful($this->logger, $this->config);
            $this->cacheDeadline === Config::DEFAULT_CACHE_DEADLINE || $sdk->withCache($this->cacheDeadline);
            $this->retryTimes === Config::DEFAULT_RETRY_TIMES || $sdk->withRetry($this->retryTimes);
            return call_user_func_array([
                $sdk,
                $name
            ], $arguments);
        } catch(SdkException $e) {
            throw $e;
        } catch(\Throwable $e) {
            throw new SdkException("can not run '{$name}' request by method call '\$this->serviceSdk->{$name}(...)' for {$e->getMessage()}.", $e->getCode(), $e->getPrevious());
        }
    }

    /**
     * 按属性读取SDK对象
     * @param string $name
     * @return SdkInterface
     * @throws SdkException
     */
    final public function __get($name)
    {
        // 1. 使用历史
        if (isset(self::$magicGetHistory[$name])) {
            return self::$magicGetHistory[$name];
        }
        // 2. 使用类别
        try {
            $class = '\\Uniondrug\\ServiceSdk\\Exports\\'.ucfirst($name);
            $object = new $class($this->logger, $this->config);
            self::$magicGetHistory[$name] = $object;
            return self::$magicGetHistory[$name];
        } catch(\Throwable $e) {
            // 3. 读兼容SDK
            if (method_exists($this, 'getCompatiable')) {
                $object = $this->getCompatiable($name);
                if ($object !== false) {
                    self::$magicGetHistory[$name] = $object;
                    return self::$magicGetHistory[$name];
                }
            }
            // 4. 出错
            throw new SdkException("can not load '{$name}' sdk by property call '\$this->serviceSdk->{$name}'.", $e->getCode(), $e->getPrevious());
        }
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
