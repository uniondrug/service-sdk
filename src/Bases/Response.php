<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Bases;

/**
 * Class Response
 * @package Uniondrug\ServiceSdk\Bases
 */
class Response implements ResponseInterface
{
    private $_errno = 0;
    private $_error = '';
    private $_url;
    /**
     * @var Sdk
     */
    private $sdk;
    private $contents;

    /**
     * Request constructor.
     * @param Sdk $sdk
     */
    public function __construct($sdk)
    {
        $this->sdk = $sdk;
    }

    public function end(){}

    /**
     * 是否有错误
     * @return bool
     */
    public function hasError()
    {
        return $this->_errno > 0;
    }

    /**
     * 读取错误编号
     * @return int
     */
    public function getErrno()
    {
        return $this->_errno;
    }

    /**
     * 读取错误原因
     * @return string
     */
    public function getError()
    {
        return $this->_error;
    }

    /**
     * 设置请求原文
     * @param $contents
     * @return $this
     */
    public function setContents($contents)
    {
        $this->_contents = $contents;
        return $this;
    }

    /**
     * 设置请求地址
     * @param string $url
     * @return $this
     */
    public function setUrl(string $url)
    {
        $this->_url = $url;
        return $this;
    }
}
