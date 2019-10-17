<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Bases;

use Psr\Http\Message\StreamInterface;
use Uniondrug\HttpClient\Client as HttpClient;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Response
 * @package Uniondrug\ServiceSdk\Bases
 */
class Response implements ResponseInterface
{
    const ERROR_EMPTY = 1;
    /**
     * @var ServiceSdk
     */
    private $sdk;
    private $logger;
    private $errno = 0;
    private $error = '';
    private $contents = '';
    private $data;
    private $url;
    /**
     * @var HttpClient
     */
    private static $http;
    /**
     * 开始时间
     * @var double
     */
    private $begin = 0.0;
    /**
     * 执行时长
     * @var double
     */
    private $duration = 0.0;

    /**
     * Response constructor.
     * @param ServiceSdk $sdk
     */
    public function __construct(ServiceSdk $sdk)
    {
        $this->begin = (double) microtime(true);
        $this->sdk = $sdk;
        $this->logger = $sdk->getContainer()->getLogger();
        $this->data = new \stdClass();
        if (self::$http === null) {
            self::$http = $this->sdk->getContainer()->getShared('httpClient');
        }
    }

    /**
     * 原始内容
     * @return string
     */
    public function __toString()
    {
        return $this->getContents();
    }

    /**
     * 请求原始内容
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @return \stdClass
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 执行时间长
     * @return double
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * 错误编号
     * @return int
     */
    public function getErrno()
    {
        return $this->errno;
    }

    /**
     * 错误内容
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 是否有错误
     * @return bool
     */
    public function hasError()
    {
        return $this->errno !== 0;
    }

    /**
     * 发送请求
     * @param string $method
     * @param string $url
     * @param null   $body
     * @param null   $extra
     * @return $this
     */
    public function send(string $method, string $url, $body = null, $extra = null)
    {
        // 1. prepare
        $method = strtoupper($method);
        $this->url = $url;
        $this->logger->debug("请求{SDK}开始");
        // 2. begin send request
        try {
            // 2.0 options initialized
            $options = is_array($extra) ? $extra : [];
            // 2.1 timeout
            if (!isset($options['timeout'])) {
                $options['timeout'] = $this->sdk->getSettings()->timeout;
            }
            // 2.2 body
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
            // 2.3 send request
            $resp = self::$http->request($method, $url, $options);
            $stream = $resp->getBody();
            if ($stream instanceof StreamInterface) {
                $this->contents = $stream->getContents();
                $this->parseContents();
            }
        } catch(\Throwable $e) {
            $this->setError($e->getCode(), $e->getMessage());
        } finally {
            $this->duration = (double) sprintf("%.06f", microtime(true) - $this->begin);
            $this->logger->info(sprintf("[d=%.06f]请求{SDK}结果 - %s", $this->duration, $this->contents));
        }
        return $this;
    }

    /**
     * 数据Arr数据组
     * @return array
     */
    public function toArray()
    {
        return json_decode(json_encode($this->data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), true);
    }

    /**
     * 转JSON字符串
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * 打印对象
     */
    public function varDump()
    {
        unset($this->sdk);
        unset($this->logger);
        print_r($this);
    }

    /**
     * 解析SDK结果
     */
    private function parseContents()
    {
        // 1. empty contents
        if ($this->contents === '') {
            $this->setError(self::ERROR_EMPTY, "empty responsed");
            return;
        }
        // 2. parser json
        $std = json_decode($this->contents, false);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $this->setError(json_last_error(), json_last_error_msg());
            return;
        }
        // 3. keywords
        $std->errno = isset($std->errno) && is_numeric($std->errno) ? (int) $std->errno : 0;
        $std->error = isset($std->error) && is_string($std->error) ? $std->error : '';
        if ($std->errno !== 0) {
            $this->setError($std->errno, $std->error);
            return;
        }
        // 4. data
        if ($std->data) {
            $this->data = &$std->data;
        }
    }

    /**
     * 设置错误
     * @param int    $errno
     * @param string $error
     * @return $this
     */
    private function setError(int $errno, string $error)
    {
        $this->errno = (int) $errno;
        $this->errno === 0 && $this->errno = 2;
        $this->error = $error;
        return $this;
    }
}
