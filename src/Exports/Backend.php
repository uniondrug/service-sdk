<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Backends\CaseSdk;
use Uniondrug\ServiceSdk\Traits\BackendTrait;
use Uniondrug\ServiceSdk\Exports\Backends\ReservationPhysicalSdk;

/**
 * SDK For Backend
 * @property ReservationPhysicalSdk $reservationPhysical
 * @property CaseSdk $case
 * @package Uniondrug\ServiceSdk\Exports
 */
class Backend extends Abstracts\Export
{
    use BackendTrait;
    protected $ns = 'Backends';
}
