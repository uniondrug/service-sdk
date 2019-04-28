<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-11-12
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Unions\FinanceSdk;
use Uniondrug\ServiceSdk\Exports\Unions\ProjectSdk;

/**
 * 聚合类SDK入口
 * @property FinanceSdk $finance
 * @property ProjectSdk $project
 * @package Uniondrug\ServiceSdk\Exports
 */
class Union extends Abstracts\SdkEntrypoint
{
    protected $package = "Unions";
}
