<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Modules\UserSdk;

/**
 * SDK For Module
 * @property UserSdk $user
 * @package Uniondrug\ServiceSdk\Exports
 */
class Module extends Abstracts\Export
{
    protected $ns = 'Modules';
}
