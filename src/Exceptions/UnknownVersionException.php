<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * SDK版本号正确
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class UnknownVersionException extends \RuntimeException
{
    /**
     * constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct("unknown version of {$name} sdk", 500);
    }
}
