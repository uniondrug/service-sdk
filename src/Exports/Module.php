<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-11-12
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Modules\BillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;
use Uniondrug\ServiceSdk\Exports\Modules\TokenSdk;

/**
 * 基础模块SDK入口
 * @property Mbs2Sdk  $mbs2
 * @property BillSdk  $bill
 * @property TokenSdk $token
 * @package Uniondrug\ServiceSdk\Exports
 */
class Module extends Abstracts\SdkEntrypoint
{
    protected $package = "Modules";
}
