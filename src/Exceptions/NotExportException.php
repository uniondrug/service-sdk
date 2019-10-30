<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * SDK方法/接口未导出
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class NotExportException extends \RuntimeException
{
    /**
     * constructor.
     * @param string $service
     * @param string $api
     */
    public function __construct(string $service, string $api)
    {
        parent::__construct("{$api} api of {$service} sdk was not exported", 403);
    }
}
