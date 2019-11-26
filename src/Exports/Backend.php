<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Traits\BackendTrait;
use Uniondrug\ServiceSdk\Exports\Backends\ReservationPhysicalSdk;

/**
 * SDK For Backend
 * @property ReservationPhysicalSdk $reservationPhysical
 * @package Uniondrug\ServiceSdk\Exports
 */
class Backend extends Abstracts\Export
{
    use BackendTrait;
    protected $ns = 'Backends';
}
