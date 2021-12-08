<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JsFinBillSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JsFinBillSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js-fin-bill';

    /**
     * 创建开票协议
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolCreate($body)
    {
        return $this->restful("POST", "/bill/protocol/create", $body);
    }

    /**
     * 查询开票协议
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolDetail($body)
    {
        return $this->restful("POST", "/bill/protocol/detail", $body);
    }

    /**
     * 发票输入完整性检测
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceIntegrityCheck($body)
    {
        return $this->restful("POST", "/invoice/checkInvoiceData", $body);
    }

    /**
     * 发票商家录入
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceCreate($body)
    {
        return $this->restful("POST", "/invoice/merchantInputInvoice", $body);
    }

    /**
     * 发票编辑
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceUpdate($body)
    {
        return $this->restful("POST", "/invoice/edit", $body);
    }

    /**
     * 发票删除
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceDelete($body)
    {
        return $this->restful("POST", "/invoice/remove", $body);
    }

    /**
     * 待邮寄开票单列表
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressBillPaging($body)
    {
        return $this->restful("POST", "/invoiceExpress/bill/page", $body);
    }

    /**
     * 待邮寄开票单检查
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressBillCheck($body)
    {
        return $this->restful("POST", "/invoiceExpress/checkBill", $body);
    }

    /**
     * 票据邮寄
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressPost($body)
    {
        return $this->restful("POST", "/invoiceExpress/post", $body);
    }

    /**
     * 手动签收前的校验
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressCheckSign($body)
    {
        return $this->restful("POST", "/invoiceExpress/checkSign", $body);
    }

    /**
     * 扫码枪签收发票校验
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressScanCheckSign($body)
    {
        return $this->restful("POST", "/invoiceExpress/scan/sign/check", $body);
    }

    /**
     * 手动签收 物流走向 连锁——>药联
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressUnionDrugReceive($body)
    {
        return $this->restful("POST", "/invoiceExpress/invoice/sign", $body);
    }

    /**
     * 标记为退票
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceExpressMarkRefund($body)
    {
        return $this->restful("POST", "/invoiceExpress/refundInvoice", $body);
    }

    /**
     * 查询票据邮寄待邮寄数据列表
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceNeedSendPaging($body)
    {
        return $this->restful("POST", "/invoice/needPost/statistics/page", $body);
    }

    /**
     * 查询票据邮寄待邮寄数据详情列表
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceNeedSendDetailPaging($body)
    {
        return $this->restful("POST", "/invoice/needPost/detail/page", $body);
    }

    /**
     * 支付结算物流信息
     * @param $body
     * @return ResponseInterface
     */
    public function billExpressPaging($body)
    {
        return $this->restful("POST", "/bill/express/page", $body);
    }

    /**
     * 发票分页查询
     * @param $body
     * @return ResponseInterface
     */
    public function invoicePaging($body)
    {
        return $this->restful("POST", "/invoice/page", $body);
    }

    /**
     * 财务审核协议
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/development/doc/api/BillProtocolController/audit.md
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolAudit($body)
    {
        return $this->restful("POST", "/billProtocol/audit", $body);
    }

    /**
     * 分页查询C端开票单协议
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/development/doc/api/BillProtocolController/clientPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolClientPaging($body)
    {
        return $this->restful("POST", "/billProtocol/client/page", $body);
    }

    /**
     * 电子开票单 补开发票
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_elec_invoice/doc/api/BillController/electricBillRetry.md
     * @param $body
     * @return ResponseInterface
     */
    public function electricBillRetry($body)
    {
        return $this->restful("POST", "/bill/electricBillRetry", $body);
    }
}
