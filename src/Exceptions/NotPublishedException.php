<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exceptions;

/**
 * SDK未发布
 * 在Modules/Exports目录未找到文件
 * @package Uniondrug\ServiceSdk\Exceptions
 */
class NotPublishedException extends \RuntimeException
{
    /**
     * constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        parent::__construct("{$name} sdk was not published", 404);
    }
}
