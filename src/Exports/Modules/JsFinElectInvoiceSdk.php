<?php
/**
 * @name   JsFinElectInvoiceSdk
 * @date   2021-09-18
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JsFinElectInvoiceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JsFinElectInvoiceSdk extends SdkBase
{
    /**
     * 新电票系统
     * @var string
     */
    protected $serviceName = 'js-fin-elec-invoice';

    /**
     * 诺E任务回调接口
     * @param $body
     * @return ResponseInterface
     */
    public function callbackNuoE($body)
    {
        return $this->restful("POST", "/callback/nuoE/receiveInvoice", $body);
    }

    /**
     * 诺诺任务回调接口
     * @param $body
     * @return ResponseInterface
     */
    public function callbackNuoNuo($body)
    {
        return $this->restful("POST", "/callback/nuonuo/receiveInvoice", $body);
    }
}
