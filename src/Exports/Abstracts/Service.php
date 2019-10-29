<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-17
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Uniondrug\ServiceSdk\Bases\Service as BaseService;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * V2版基类
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Service extends BaseService
{
    public function __construct(ServiceSdk $sdk)
    {
        parent::__construct($sdk, parent::VERSION_2);
    }
}
