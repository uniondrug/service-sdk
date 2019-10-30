<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Traits\UnionTrait;

/**
 * SDK For Union
 * @package Uniondrug\ServiceSdk\Exports
 */
class Union extends Abstracts\Export
{
    use UnionTrait;
    protected $ns = 'Unions';
}
