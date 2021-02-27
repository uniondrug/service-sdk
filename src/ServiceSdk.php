<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-28
 */
namespace Uniondrug\ServiceSdk;

use App\Service\LoggerService;
use GuzzleHttp\HandlerStack;
use Hyperf\Contract\ContainerInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\Guzzle\CoroutineHandler;
use Uniondrug\Framework\Container;
use Uniondrug\HttpClient\Client;
use Uniondrug\Phar\Server\Logs\Logger;
use Phalcon\Logger\Adapter as LoggerAdapter;
use Uniondrug\ServiceSdk\Bases\Host;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Bases\Restful;
use Uniondrug\ServiceSdk\Bases\Sdk as BootSdk;
use Uniondrug\ServiceSdk\Bases\Setting;
use Uniondrug\ServiceSdk\Bases\WithTrait;
use Uniondrug\ServiceSdk\Exceptions\UnknownRestfulException;
use Uniondrug\ServiceSdk\Exports\Abstracts\Export;
use Uniondrug\ServiceSdk\Traits\BootTrait;

/**
 * SDK入口
 * @package Uniondrug\ServiceSdk
 */
class ServiceSdk
{
    /**
     * IDEs
     */
    use BootTrait, WithTrait;
    /**
     * 容器
     * @var Container
     */
    private $container;
    /**
     * @Inject()
     * @var ClientFactory
     */
    private $clientFactory;
    /**
     * @var Host
     */
    private $host;
    /**
     * 日志
     * @Inject()
     * @var Logger|LoggerAdapter|LoggerService
     */
    private $logger;

    /**
     * @Inject()
     * @var \GuzzleHttp\Client
     */
    private $httpClient;

    /**
     * 设置
     * @var Setting
     */
    private $setting;

    /**
     * ServiceSdk constructor.
     * @param $container
     */
    public function __construct($container)
    {
        // 1. basic
        $this->container = $container;
        $this->setting = new Setting($this);
        $this->host = new Host();
        // 3. http client
        if ($this->container instanceof ContainerInterface){
            $this->httpClient = $this->container->get('Hyperf\Guzzle\ClientFactory')->create();
            $this->logger = $this->container->get('App\Service\LoggerService');
        }else{
            $this->httpClient = $this->container->getShared('httpClient');
            // 2. logger
            if ($this->container->hasSharedInstance('server')) {
                $this->logger = $this->container->getShared('server')->getLogger();
            } else {
                $this->logger = $this->container->getLogger();
            }
        }
    }

    /**
     * 按方法读
     * @param string $name
     * @param array  $arguments
     * @return ResponseInterface
     * @example $serviceSdk->get("http://www.example.com")
     */
    public function __call($name, $arguments)
    {
        throw new UnknownRestfulException($name);
    }

    /**
     * 按属性读
     * @param $name
     * @return Bases\Sdk|Exports\Abstracts\Export
     * @example $serviceSdk->user->get()
     * @example $serviceSdk->module->user->get()
     */
    public function __get($name)
    {
        return Restful::withNamed($this, $name);
    }

    /**
     * @param string $url
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    public function delete(string $url, $body = null, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_DELETE, $url, $body, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $extra
     * @return ResponseInterface
     */
    public function get(string $url, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_GET, $url, null, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $extra
     * @return ResponseInterface
     */
    public function head(string $url, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_HEAD, $url, null, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $extra
     * @return ResponseInterface
     */
    public function options(string $url, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_OPTIONS, $url, null, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    public function patch(string $url, $body = null, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_PATCH, $url, $body, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    public function post(string $url, $body = null, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_POST, $url, $body, null, $extra);
    }

    /**
     * @param string $url
     * @param null   $body
     * @param null   $extra
     * @return ResponseInterface
     */
    public function put(string $url, $body = null, $extra = null)
    {
        return Restful::withCall($this, BootSdk::METHOD_PUT, $url, $body, null, $extra);
    }

    /**
     * 读容器对象
     * @return Container
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @return Client
     */
    public function getHttpClient()
    {
        return $this->httpClient;
    }

    /**
     * 读日志对象
     * @return LoggerAdapter|Logger
     */
    public function getLogger()
    {
        return $this->logger;
    }

    /**
     * 读设置对象
     * @return Setting
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * 读取Host对象
     * @return Host
     */
    public function getHost()
    {
        return $this->host;
    }
}
