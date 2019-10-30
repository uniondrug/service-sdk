<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * 不支持的Restful请求
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class UnknownRestfulException extends \RuntimeException
{
    /**
     * constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct("bad request for sdk with ".strtoupper($name), 400);
    }
}
