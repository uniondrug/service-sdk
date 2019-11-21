<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * SDK未定义$serviceName属性
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class ServiceNameNotDefinedException extends \RuntimeException
{
    /**
     * constructor.
     * @param string $className
     */
    public function __construct(string $className)
    {
        parent::__construct("sdk name of {{$className}} was not defined", 400);
    }
}
