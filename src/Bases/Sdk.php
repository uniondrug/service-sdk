<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

use Phalcon\Di;
use Uniondrug\Framework\Container;
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
     * 容器
     * @var Container
     */
    public static $container;
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
     * @param int $version
     * @throws NoNameException
     */
    public function __construct(int $version)
    {
        // 1. property
        $this->serviceClass = get_class($this);
        $this->serviceVersion = $version;
        // 2. framework container
        if (self::$container === null) {
            self::$container = Di::getDefault();
        }
        // 3. name checker
        if ($this->serviceName === null) {
            throw new NoNameException("sdk name not defined by property");
        }
    }

    final public function _class()
    {
        return $this->serviceClass;
    }

    final public function _name()
    {
        return $this->serviceName;
    }

    final public function _v1()
    {
        return $this->serviceVersion == self::VERSION_1X;
    }

    final public function _v2()
    {
        return $this->serviceVersion == self::VERSION_2X;
    }

    /**
     * 允许缓存
     * @param int $seconds
     * @return $this
     */
    final public function withCache(int $seconds = 300)
    {
        return $this;
    }

    /**
     * 允许重试
     * @param int $limit
     * @return $this
     */
    final public function withRetry(int $limit = 3)
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
     * @throws \Throwable
     */
    final protected function restful(string $method, string $path, $body = null, $query = null, $extra = null)
    {
        // 1. init Service address
        $url = Host::get($this, $path);
        // 2. init response
        $response = new Response($this);
        $response->setUrl($url);
        try {
            // 3. init request options
            $options = is_array($extra) ? $extra : [];
            // 4. query string
            if (is_array($query) || is_string($query)) {
                $options['query'] = $query;
            }
            // 5. body
            if (is_string($body)) {
                $options['body'] = $body;
            } else if (is_array($body)) {
                $options['json'] = $body;
            } else if (is_object($body)) {
                if (method_exists($body, 'toJson')) {
                    $options['body'] = $body->toJson();
                } else if (method_exists($body, 'toArray')) {
                    $options['json'] = $body->toArray();
                }
            }
            // 6. send response
            $response->setContents(self::$container->getShared('httpClient')->request($method, $url, $options));
        } catch(\Throwable $e) {
            // 7. error found
            throw $e;
        } finally {
            // 8. end response
            $response->end();
        }
        // 9. result
        return $response;
    }
}
