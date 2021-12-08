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
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/CallBackController/receviceNuoEInvoice.md
     * @param $body
     * @return ResponseInterface
     */
    public function callbackNuoE($body)
    {
        return $this->restful("POST", "/callback/nuoE/receiveInvoice", $body);
    }

    /**
     * 诺诺任务回调接口
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/CallBackController/receiveNuoNuoInvoice.md
     * @param $body
     * @return ResponseInterface
     */
    public function callbackNuoNuo($body)
    {
        return $this->restful("POST", "/callback/nuonuo/receiveInvoice", $body);
    }

    /**
     * 查询当前药联们公司的库存
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/UniondrugCompanyController/getInvoiceStock.md
     * @param $body
     * @return ResponseInterface
     */
    public function getInvoiceStock($body)
    {
        return $this->restful("POST", "/company/getInvoiceStock", $body);
    }

    /**
     * 查询开票主体列表
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/UniondrugCompanyController/pageInvoiceEntity.md
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceEntityPaging($body)
    {
        return $this->restful("POST", "/company/pageInvoiceEntity", $body);
    }

    /**
     * 发送邮件(通过业务的单号)
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/OperationController/sendEmail.md
     * @param $body
     * @return ResponseInterface
     */
    public function sendEmail($body)
    {
        return $this->restful("POST", "/mbs/operate/sendEmail", $body);
    }

    /**
     * 盖章
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/OperationController/sign.md
     * @param $body
     * @return ResponseInterface
     */
    public function sign($body)
    {
        return $this->restful("POST", "/mbs/operate/sign", $body);
    }

    /**
     * 合并PDF
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/OperationController/mergePdf.md
     * @param $body
     * @return ResponseInterface
     */
    public function mergePDF($body)
    {
        return $this->restful("POST", "/mbs/operate/mergePdf", $body);
    }

    /**
     * 生成服务明细
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/OperationController/createItem.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderItemCreate($body)
    {
        return $this->restful("POST", "/mbs/operate/createItem", $body);
    }

    /**
     * 查询服务明细财务共享服务平台-c端电子发票-详情-服务明细
     * @link https://git.uniondrug.com/code/1/finance/others/js-fin-elec-invoice/blob/development/doc/api/BillTaskInfoController/pageServiceDetail.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailPaging($body)
    {
        return $this->restful("POST", "/billtaskInfo/pageServiceDetail", $body);
    }

    /**
     * 电子开票单 补开发票
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_elec_invoice/doc/api/BillController/electricBillRetry.md
     * @param $body
     * @return ResponseInterface
     */
    public function electricBillRetry($body)
    {
        return $this->restful("POST", "//bill/electricBillRetry", $body);
    }
}
