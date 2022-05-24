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
     * 取消关联在开票单下的发票
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceCancelRelate($body)
    {
        return $this->restful("POST", "/invoice/cancelRelate", $body);
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
     * 关联发票到开票单下
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceRelatedInvoice($body)
    {
        return $this->restful("POST", "/invoice/relatedInvoice", $body);
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

    /**
     * 取消开票申请
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.7/doc/api/BillController/cancelBillApply.md
     * @param $body
     * @return ResponseInterface
     */
    public function cancelBillApply($body)
    {
        return $this->restful("POST", "/bill/cancelBillApply", $body);
    }

    /**
     * 应收开票单审批通过
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.7/doc/api/BillController/cancelBillApply.md
     * @param $body
     * @return ResponseInterface
     */
    public function billApproval($body)
    {
        return $this->restful("POST", "/bill/billApproval", $body);
    }

    /**
     * 根据理赔单号，查询保司对应购方（连锁）下的发票列表
     * @param $body
     * @return ResponseInterface
     */
    public function listMerchantInvoice($body)
    {
        return $this->restful("POST", "/invoice/listMerchantInvoice", $body);
    }

    /**
     * 根据理赔单号，按时间倒序排序的发票列表
     * @param $body
     * @return ResponseInterface
     */
    public function listInvoiceByIpackageNos($body)
    {
        return $this->restful("POST", "/invoice/listInvoiceByIpackageNos", $body);
    }

    /**
     * 商家服务平台（直付开票单） 协议 校验
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.1/doc/api/BillProtocolController/merchantProtocolCheck.md
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolCheck($body)
    {
        return $this->restful("POST", "/billProtocol/merchant/check", $body);
    }

    /**
     * 商家服务平台（直付开票单） 协议 创建
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.1/doc/api/BillProtocolController/merchantProtocolCheck.md
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolCreate($body)
    {
        return $this->restful("POST", "/billProtocol/merchant/singMerchantProtocol", $body);
    }

    /**
     * 发票明细票据中心-发票明细
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.1/doc/api/InvoiceController/pageInvoiceDetail.md
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceDetailPaging($body)
    {
        return $this->restful("POST", "/invoice/invoiceDetail/page", $body);
    }

    /**
     * 根据id查询发票
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.1/doc/api/InvoiceController/pageInvoiceDetail.md
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceGetById($body)
    {
        return $this->restful("POST", "/invoice/getById", $body);
    }

    /**
     * 获取销售清单列表导出sql
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.1/doc/api/BillSaleController/getSaleListSql.md
     * @param $body
     * @return ResponseInterface
     */
    public function billSaleExportSql($body)
    {
        return $this->restful("POST", "/billSale/export", $body);
    }

    /**
     * 上传开票单
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_1.2/doc/api/OnlineInvoicingController/invoicing.md
     * @param $body
     * @return ResponseInterface
     */
    public function uploadBill($body)
    {
        return $this->restful("POST", "/online/invoicing", $body);
    }

    /**
     * 在线开票校验发票类型
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.9/doc/api/OnlineInvoicingController/checkGeneralInvoice.md
     * @param $body
     * @return ResponseInterface
     */
    public function onlineInvoicingGeneralCheck($body)
    {
        return $this->restful("POST", "/online/invoicing/general/check", $body);
    }

    /**
     * 分页查询在线开票申请记录
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.8.1/doc/api/OnlineInvoicingController/pageApply.md
     * @param $body
     * @return ResponseInterface
     */
    public function onlineInvoiceApplyPage($body)
    {
        return $this->restful("POST", "/online/invoice/apply/page", $body);
    }

    /**
     * 作废在线开票申请单
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.8.1/doc/api/OnlineInvoicingController/invalidateApply.md
     * @param $body
     * @return ResponseInterface
     */
    public function onlineInvoiceApplyInvalidate($body)
    {
        return $this->restful("POST", "/online/invoice/apply/invalidate", $body);
    }

    /**
     * 校验快递单号正确性
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.3/doc/api/ExpressController/checkAndReturnExpressNoCode.md
     * @param $body
     * @return ResponseInterface
     */
    public function checkExpressNo($body)
    {
        return $this->restful("POST", "/invoiceExpress/checkExpressNo", $body);
    }

    /**
     * 更新快递单号
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.3/doc/api/ExpressController/updateExpressNo.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateExpressNo($body)
    {
        return $this->restful("POST", "/invoiceExpress/updateExpressNo", $body);
    }

    /**
     * 协议审核失效
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.3/doc/api/ExpressController/updateExpressNo.md
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolInvalid($body)
    {
        return $this->restful("POST", "/billProtocol/client/invalid", $body);
    }

    /**
     * 将ofd文件转成pdf
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.4/doc/api/ApiCompatibleController/ofdToPdf.md
     * @param $body
     * @return ResponseInterface
     */
    public function ofdToPdf($body)
    {
        return $this->restful("POST", "/api/compatible/ofdToPdf", $body);
    }

    /**
     * 将ofd文件转成pdf/img
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.4/doc/api/ApiCompatibleController/ofdToTargetFile.md
     * @param $body
     * @return ResponseInterface
     */
    public function ofdToTargetFile($body)
    {
        return $this->restful("POST", "/api/compatible/ofdToTargetFile", $body);
    }

    /**
     * 电子票 失败后补偿操作 接口
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.6/doc/api/BillController/electricOperate.md
     * @param $body
     * @return ResponseInterface
     */
    public function operate($body)
    {
        return $this->restful("POST", "/bill/electric/operate", $body);
    }

    /**
     * 将PDF转图片 接口
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_v1.4/doc/api/ApiCompatibleController/pdfToImg.md
     * @param $body
     * @return ResponseInterface
     */
    public function pdfToImg($body)
    {
        return $this->restful("POST", "/api/compatible/pdfToImg", $body);
    }

    /**
     * 电子发票打印
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.7/doc/api/PrintController/electronicPrint.md
     * @param $body
     * @return ResponseInterface
     */
    public function printElectronicPrint($body)
    {
        return $this->restful("POST", "/print/electronicPrint", $body);
    }

    /**
     * 获取打印结果
     * @link https://git.uniondrug.com/code/1/finance/shares/bill/blob/feature_V1.7/doc/api/PrintController/getTask.md
     * @param $body
     * @return ResponseInterface
     */
    public function printGetTask($body)
    {
        return $this->restful("POST", "/print/getTask", $body);
    }
}
