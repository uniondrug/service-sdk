<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Traits\BackendTrait;

/**
 * SDK For Backend
 * @package Uniondrug\ServiceSdk\Exports
 */
class Backend extends Abstracts\Export
{
    use BackendTrait;
    protected $ns = 'Backends';
}
