<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * 服务未注册
 * 1. not found in Consul Serice
 * 2. not found in Consul KV
 * 3. not found in module.ns Server
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class ServiceNotRegisted extends \RuntimeException
{
    /**
     * constructor.
     * @param string $name
     * @param string $type
     */
    public function __construct(string $name, string $type)
    {
        parent::__construct("{$name} service for sdk was not registed in {$type}", 401);
    }
}
