<?php
/**
 * @name   JavaInvoiceSdk
 * @date   2019-12-03
 * @time   Tue, 03 Dec 2019 16:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JavaInvoiceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaInvoiceSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.invoice.module';
    /**
     * 发票详情
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceDetail($body)
    {
        return $this->restful("POST", "/invoice/detail", $body);
    }
}
