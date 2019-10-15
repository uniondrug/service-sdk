<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NoNameException;

/**
 * Sdk基类
 * @package Uniondrug\ServiceSdk\Bases
 */
abstract class Sdk
{
    const VERSION_1X = 1;
    const VERSION_2X = 2;
    /**
     * SDK类名
     * @var string
     */
    private $serviceClass;
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName;
    /**
     * SDK版本号
     * @var int
     */
    protected $serviceVersion = 0;

    /**
     * Sdk constructor.
     */
    public function __construct(int $version)
    {
        $this->serviceClass = get_class($this);
        $this->serviceVersion = $version;
        if ($this->serviceName === null) {
            throw new NoNameException("sdk name not defined by 'serviceName' property.");
        }
    }

    /**
     * 允许缓存
     * @param int $seconds
     * @return $this
     */
    public function withCache(int $seconds = 300)
    {
        return $this;
    }

    /**
     * 允许重试
     * @param int $limit
     * @return $this
     */
    public function withRetry(int $limit = 3)
    {
        return $this;
    }

    /**
     * 发起Restful请求
     * @param string $method
     * @param string $path
     * @param null   $body
     * @param null   $query
     * @param null   $extra
     * @return Response
     */
    protected function restful(string $method, string $path, $body = null, $query = null, $extra = null)
    {
        $url = Host::get($this->serviceVersion, $this->serviceClass, $this->serviceName, $path);
    }
}
