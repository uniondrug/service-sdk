<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-17
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NoNameException;
use Uniondrug\ServiceSdk\Exceptions\NoSdkException;
use Uniondrug\ServiceSdk\Exceptions\VersionException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Bases
 */
abstract class Service
{
    const VERSION_1 = 1;
    const VERSION_2 = 2;
    use EventsTrait;
    /**
     * @var ServiceSdk
     */
    protected $sdk;
    private $version = 0;
    /**
     * @var string
     */
    protected $serviceName;
    private $serviceHost;

    /**
     * SDK实例
     * @param ServiceSdk $sdk
     * @throws NoNameException
     */
    public function __construct(ServiceSdk $sdk, int $version)
    {
        $this->sdk = $sdk;
        $this->version = $version;
        if (!is_string($this->serviceName) || $this->serviceName === '') {
            throw new NoNameException("sdk {$this->serviceName} not defined by serviceName property");
        }
    }

    /**
     * 发起Restful请求
     * @param string $method
     * @param string $path
     * @param null   $body
     * @param null   $query
     * @param null   $extra
     * @return Response
     * @throws \Throwable
     */
    final protected function restful(string $method, string $path, $body = null, $query = null, $extra = null)
    {
        // 1. generate URL
        if ($this->sdk->getSettings()->isFullUrl($path)) {
            $url = $path;
        } else {
            switch ($this->version) {
                case self::VERSION_1 :
                    $host = $this->sdk->getSettings()->getHostFromConfig($this->serviceName);
                    if ($host === false) {
                        throw new NoSdkException("sdk {$this->serviceName} of version {$this->version} not found");
                    }
                    break;
                case self::VERSION_2 :
                    $host = $this->sdk->getSettings()->getHostFromConsul($this->sdk, $this->serviceName);
                    if ($host === false) {
                        throw new NoSdkException("sdk {$this->serviceName} of version {$this->version} not found");
                    }
                    break;
                default :
                    throw new VersionException("unknown version {$this->version} sdk");
                    break;
            }
            $url = $this->sdk->getSettings()->genUrl($host, $path, $query);
        }
        // 2. open response
        $response = new Response($this->sdk);
        return $response->send($method, $url, $body, $extra);
    }
}
