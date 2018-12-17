<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-22
 */
namespace Uniondrug\ServiceSdk\Responses;

/**
 * Class Response
 * @package Uniondrug\ServiceSdk\Responses
 */
class Response implements ResponseInterface
{
    const ERROR_NULL = 0;
    const ERROR_INVALID_URL = 1;
    const ERROR_STATUS_CODE = 2;
    const ERROR_STATUS_FAILURE = 3;
    const ERROR_EMPTY_CONTENTS = 4;
    const ERROR_NOT_JSON_STRING = 5;
    const ERROR_NOT_ACCEPTED_JSON = 6;
    private static $errorTexts = [
        self::ERROR_INVALID_URL => "请求URI地址无效",
        self::ERROR_STATUS_CODE => "HTTP返回状态码错误",
        self::ERROR_STATUS_FAILURE => "HTTP请求失败",
        self::ERROR_EMPTY_CONTENTS => "返回内容为空",
        self::ERROR_NOT_JSON_STRING => "不是合法的JSON内容",
        self::ERROR_NOT_ACCEPTED_JSON => "不接受的JSON数据格式",
    ];
    private $begin = 0.0;
    private $cached = false;
    private $contents;
    /**
     * @var \stdClass
     */
    private $data;
    private $duration = 0.0;
    private $errno = self::ERROR_NULL;
    private $error = '';
    private $url;

    public function __construct()
    {
        $this->begin = (double) microtime(true);
        $this->data = new \stdClass();
    }

    /**
     * 打印内容
     * @return string
     */
    public function __toString()
    {
        return $this->getContents();
    }

    /**
     * 结束Response处理
     * @return $this
     */
    public function end()
    {
        $this->parseContents();
        $this->duration = (double) sprintf("%.6f", (double) microtime(true) - $this->begin);
        return $this;
    }

    /**
     * 读取原文
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * 读取数据结构
     * @return \stdClass
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * 读取执行时长
     * @return double
     */
    public function getDuration()
    {
        return $this->duration;
    }

    public function getErrno()
    {
        return $this->errno;
    }

    public function getError()
    {
        return $this->error;
    }

    /**
     * 读取请求地址
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * 是否有错误¬
     * @return bool
     */
    public function hasError()
    {
        return $this->errno !== self::ERROR_NULL;
    }

    /**
     * 设置请求结果原文
     * @param string $contents
     * @param bool   $cached
     * @return $this
     */
    public function setContents(string $contents, bool $cached = false)
    {
        $this->cached = $cached;
        $this->contents = trim($contents);
        return $this;
    }

    /**
     * 设置错误
     * @param int         $errno
     * @param string|null $error
     * @return $this
     */
    public function setError(int $errno, string $error = null)
    {
        if ($error === null) {
            $error = isset(self::$errorTexts[$errno]) ? self::$errorTexts[$errno] : 'unknown error';
        }
        $this->errno = $errno;
        $this->error = $error;
        return $this;
    }

    /**
     * 设置请求地址
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * 待请求的URL无效
     * @return $this
     */
    public function setInvalidUrlError(string $error = null)
    {
        return $this->setError(self::ERROR_INVALID_URL, $error);
    }

    /**
     * HTTP状态码不合法
     * @return $this
     */
    public function setStatusCodeError(string $error = null)
    {
        return $this->setError(self::ERROR_STATUS_CODE, $error);
    }

    /**
     * HTTP请求失败
     * @return $this
     */
    public function setFailureError(string $error = null)
    {
        return $this->setError(self::ERROR_STATUS_FAILURE, $error);
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return json_decode(json_encode($this->data, JSON_UNESCAPED_UNICODE), true);
    }

    /**
     * 解析请求结果原文
     */
    private function parseContents()
    {
        // 1. empty
        if ($this->contents === '') {
            $this->hasError() || $this->setError(self::ERROR_EMPTY_CONTENTS, "服务返回了空内容");
            return;
        }
        // 2. json foratter
        try {
            $json = \GuzzleHttp\json_decode($this->contents);
        } catch(\Throwable $e) {
            $this->hasError() || $this->setError(self::ERROR_NOT_JSON_STRING, "服务返回的数据不是有效的JSON格式");
            return;
        }
        // 3. 标准模式
        //    {"errno":0,"error":"","data":{...}}
        if (isset($json->errno, $json->error, $json->data)) {
            $this->hasError() || $this->setError($json->errno, $json->error);
            $this->data = $json->data;
            return;
        }
        // 4. 兼容模式
        //    {"status":true,"message":"success","code":200,"data":{....}}
        if (isset($json->status, $json->message, $json->data)) {
            if ($json->status === true) {
                $this->setError(0, "");
            } else {
                $errno = isset($json->code) ? $json->code : 1;
                $errno || $errno = 1;
                $this->hasError() || $this->setError($errno, $json->message);
            }
            $this->data = $json->data;
            return;
        }
        // 5. required formatter
        $this->hasError() || $this->setError(self::ERROR_NOT_ACCEPTED_JSON, "服务返回了非标准化的JSON格式");
    }
}
