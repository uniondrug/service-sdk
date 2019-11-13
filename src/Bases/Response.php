<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * SDK请求结果
 * @package Uniondrug\ServiceSdk\Bases
 */
class Response implements ResponseInterface
{
    const ERROR_NULL = 0;
    const ERROR_DEFAULT = 1;
    const ERROR_EMPTY_CONTENTS = 2;
    const ERROR_INVALID_JSON_STRING = 3;
    const ERROR_COMPATIABLED = 4;
    /**
     * @var ServiceSdk
     */
    private $serviceSdk;
    /**
     * @var string
     */
    private $_contents = '';
    /**
     * @var \stdClass|array
     */
    private $_data;
    private $_duration = 0.0;
    private $_errno = 0;
    private $_error = '';
    private $_url = '';

    /**
     * Response constructor.
     * @param ServiceSdk $serviceSdk
     */
    public function __construct(ServiceSdk $serviceSdk)
    {
        $this->serviceSdk = $serviceSdk;
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
     * 原始内容
     * @return string
     */
    public function getContents()
    {
        return $this->_contents;
    }

    /**
     * 返回数据
     * @return \stdClass|array
     */
    public function getData()
    {
        return $this->_data;
    }

    /**
     * 执行时长
     * @return double
     */
    public function getDuration()
    {
        return $this->_duration;
    }

    /**
     * 错误编号
     * @return int
     */
    public function getErrno()
    {
        return $this->_errno;
    }

    /**
     * 错误原因
     * @return string
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * 请求URL
     * @return string
     */
    public function getUrl()
    {
        return $this->_url;
    }

    /**
     * 是否有错误
     * @return bool
     */
    public function hasError()
    {
        return $this->_errno !== self::ERROR_NULL;
    }

    /**
     * 发起CURL请求
     * @param string $method
     * @param string $url
     * @param null   $body
     * @param null   $query
     * @param null   $options
     */
    public function send(string $method, string $url, $body = null, $query = null, $options = null)
    {
        $this->_url = $url;
        // 1. init options
        $begin = microtime(true);
        $options = is_array($options) ? $options : [];
        // 1.0 headers
        $options['headers'] = isset($options['headers']) && is_array($options['headers']) ? $options['headers'] : [];
        $contentType = $this->serviceSdk->getSetting()->contentType();
        if ($contentType !== '') {
            $options['headers']['content-type'] = $contentType;
        }
        // 1.1 timeout
        if (!isset($options['timeout'])) {
            $options['timeout'] = $this->serviceSdk->getSetting()->timeout();
        }
        // 1.2 body
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
        // 1.3 query
        if (is_array($query)) {
            $options['query'] = $query;
        }
        // 2. send http request
        try {
            $this->_contents = $this->serviceSdk->getHttpClient()->request($method, $url, $options)->getBody()->getContents();
            $this->parseContents();
        } catch(\Throwable $e) {
            $this->setError($e->getCode(), $e->getMessage());
        } finally {
            $this->_duration = microtime(true) - $begin;
            $this->serviceSdk->getLogger()->info(sprintf("[d=%.06f]SDK以{%s}请求{%s}结果 - %s", $this->_duration, $method, $url, $this->_contents));
        }
    }

    /**
     * 结果转数组
     * @return array
     */
    public function toArray()
    {
        return json_decode(json_encode($this->_data, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), true);
    }

    /**
     * 结果转JSON
     * @return string
     */
    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * 解析SDK请求结果
     */
    private function parseContents()
    {
        // 1. is empty
        if ($this->_contents === '') {
            $this->setError(self::ERROR_EMPTY_CONTENTS, 'empty content responsed');
            return;
        }
        // 2. is JSON string
        try {
            $std = \GuzzleHttp\json_decode($this->_contents, false);
        } catch(\Throwable $e) {
            $this->setError(self::ERROR_INVALID_JSON_STRING, 'responsed string was not json string');
            return;
        }
        // 3. logic failure
        if (isset($std->errno) && isset($std->error)) {
            if ((int) $std->errno !== 0) {
                $this->setError($std->errno, $std->error);
                return;
            }
        } else {
            if (!isset($std->status) || $std->status !== true) {
                $this->setError(self::ERROR_COMPATIABLED, 'responsed json format was not validated');
                return;
            }
        }
        // 4. data
        if (isset($std->data) && (is_array($std->data) || is_object($std->data))) {
            $this->_data = $std->data;
        } else {
            $this->_data = new \stdClass();
        }
    }

    /**
     * 设置错误
     * @param int    $errno
     * @param string $error
     */
    private function setError(int $errno, string $error)
    {
        $this->_errno = $errno;
        $this->_errno || $this->_errno = self::ERROR_DEFAULT;
        $this->_error = $error;
    }
}
