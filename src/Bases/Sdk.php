<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NotExportException;
use Uniondrug\ServiceSdk\Exceptions\ServiceNameNotDefinedException;
use Uniondrug\ServiceSdk\Exceptions\ServiceNotRegisted;
use Uniondrug\ServiceSdk\Exceptions\UnknownVersionException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Engines
 */
abstract class Sdk
{
    const METHOD_DELETE = "DELETE";         // HTTP/1.1 DELETE /url
    const METHOD_GET = "GET";               // HTTP/1.1 GET /url
    const METHOD_HEAD = "HEAD";             // HTTP/1.1 HEAD /url
    const METHOD_OPTIONS = "OPTIONS";       // HTTP/1.1 OPTIONS /url
    const METHOD_PATCH = "PATCH";           // HTTP/1.1 PATCH /url
    const METHOD_POST = "POST";             // HTTP/1.1 POST /url
    const METHOD_PUT = "PUT";               // HTTP/1.1 PUT /url
    const VERSION_1 = 1;                    // SDK V1版本号
    const VERSION_2 = 2;                    // SDK V2版本号
    /**
     * @var ServiceSdk
     */
    private $serviceSdk;
    private $serviceVersion;
    private $serviceVersion1 = false;
    private $serviceVersion2 = false;
    /**
     * SDK名称
     * @var string
     */
    protected $serviceName;
    /**
     * 兼容With
     */
    use WithTrait;

    /**
     * @param string $name
     * @param array  $arguments
     */
    public function __call($name, $arguments)
    {
        throw new NotExportException($this->serviceName, $name);
    }

    /**
     * Sdk constructor.
     * @param ServiceSdk $serviceSdk
     * @param int        $version
     */
    public function __construct(ServiceSdk $serviceSdk, int $version)
    {
        if ($this->serviceName === null) {
            throw new ServiceNameNotDefinedException(get_class($this));
        }
        $this->serviceSdk = $serviceSdk;
        $this->serviceVersion = $version;
        $this->serviceVersion1 = $this->serviceVersion === self::VERSION_1;
        $this->serviceVersion2 = $this->serviceVersion === self::VERSION_2;
    }

    /**
     * SDK请求规划
     * @param string $method 请求方式
     * @param string $path   请求路径
     * @param null   $body   Post数据
     * @param null   $query  Query数据
     * @param null   $extra  请求头信息
     * @return ResponseInterface
     */
    final protected function restful(string $method, string $path, $body = null, $query = null, $extra = null)
    {
        // 1. 读取服务地址
        if ($this->serviceVersion1) {
            // 1.1 Version:1
            if ($this->serviceSdk->getSetting()->nsEnabled()) {
                // 1.1.1 从module.ns启动的项目读取
                $type = 'ns';
                $host = $this->serviceSdk->getHost()->fromNsServer($this->serviceSdk, $this->serviceName);
            } else {
                // 1.1.2 从ConsulKv
                $type = 'consul kv';
                $host = $this->serviceSdk->getHost()->fromConsulHost($this->serviceSdk, $this->serviceName);
            }
        } else if ($this->serviceVersion2) {
            // 1.2 Version:2
            $type = 'consul service';
            $host = $this->serviceSdk->getHost()->fromConsulService($this->serviceSdk, $this->serviceName);
        } else {
            // 1.3 版本号错误
            throw new UnknownVersionException($this->serviceName);
        }
        // 2. 读取到的服务地址错误
        if ($host === false) {
            throw new ServiceNotRegisted($this->serviceName, $type);
        }
        // 3. init request URL
        $url = $this->serviceSdk->getHost()->makeUrl($host, $path);
        $response = new Response($this->serviceSdk);
        $response->send($method, $url, $body, $query, $extra);
        return $response;
    }
}
