<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * V2版本SDK基类
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Sdk extends \Uniondrug\ServiceSdk\Bases\Sdk
{
    /**
     * V2构造
     * @param ServiceSdk $serviceSdk
     */
    public function __construct(ServiceSdk $serviceSdk)
    {
        parent::__construct($serviceSdk, parent::VERSION_2);
    }
}
