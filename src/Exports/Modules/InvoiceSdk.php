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
 * InvoiceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InvoiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'invoice.module';

    /**
     * 推送发票订单信息
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/MqController/pushInvoiceOrdersAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/mq/pushInvoieOrders", $body);
    }

    /**
     * 添加快递单
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/ExpressController/editInBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInvoiceExpress($body)
    {
        return $this->restful("POST", "/express/add", $body);
    }

    /**
     * 发票认证
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/AsyncController/auditInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditInvoice($body)
    {
        return $this->restful("POST", "/async/auditInvoice", $body);
    }

    /**
     * 获取未寄出发票数量
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/countInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countInvoice($body)
    {
        return $this->restful("POST", "/invoice/countInvoice", $body);
    }

    /**
     * 删除一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delete($body)
    {
        return $this->restful("POST", "/invoice/delete", $body);
    }

    /**
     * 获取发票的详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/invoice/detail", $body);
    }

    /**
     * 编辑一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function edit($body)
    {
        return $this->restful("POST", "/invoice/edit", $body);
    }

    /**
     * 快递公司列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/ExpressController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function expressList($body)
    {
        return $this->restful("POST", "/express/list", $body);
    }

    /**
     * 根据发票单号获取发票的详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/invoice/getDetail", $body);
    }

    /**
     * 通过保司获取发票导出
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getExportByInsureAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceExportByInsure($body)
    {
        return $this->restful("POST", "/invoice/getExportByInsure", $body);
    }

    /**
     * 通过开票单号获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingByBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceListingByBillNo($body)
    {
        return $this->restful("POST", "/invoice/getListingByBillNo", $body);
    }

    /**
     * 通过理赔单号获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingByClaimNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceListingByClaimNo($body)
    {
        return $this->restful("POST", "/invoice/getListingByClaimNo", $body);
    }

    /**
     * 通过理赔单号获取连锁级发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingByClaimNoInMerchantAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceListingByClaimNoInMerchant($body)
    {
        return $this->restful("POST", "/invoice/getListingByClaimNoInMerchant", $body);
    }

    /**
     * 通过开票单号获取发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByBillNo($body)
    {
        return $this->restful("POST", "/invoice/getPagingByBillNo", $body);
    }

    /**
     * 通过理赔单号获取发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByClaimNo($body)
    {
        return $this->restful("POST", "/invoice/getPagingByClaimNo", $body);
    }

    /**
     * 通过保司获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getPagingByInsureAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByInsure($body)
    {
        return $this->restful("POST", "/invoice/getPagingByInsure", $body);
    }

    /**
     * 财税发票池
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingForTaxAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingForTax($body)
    {
        return $this->restful("POST", "/invoice/pagingForTax", $body);
    }

    /**
     * 根据开票单号或对账单号获取发票的总和
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getInvoiceSumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceSum($body)
    {
        return $this->restful("POST", "/invoice/getInvoiceSum", $body);
    }

    /**
     * 获取发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getList($body)
    {
        return $this->restful("POST", "/invoice/getList", $body);
    }

    /**
     * 获取快递页发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getListInExpressAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getListInExpress($body)
    {
        return $this->restful("POST", "/invoice/getListInExpress", $body);
    }

    /**
     * 今天第几条
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/countTodayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressCountToday($body)
    {
        return $this->restful("POST", "/invoiceExpress/countToday", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressCreate($body)
    {
        return $this->restful("POST", "/invoiceExpress/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDelete($body)
    {
        return $this->restful("POST", "/invoiceExpress/delete", $body);
    }

    /**
     * 批量删除
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/deleteInBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDeleteInBatch($body)
    {
        return $this->restful("POST", "/invoiceExpress/deleteInBatch", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDetail($body)
    {
        return $this->restful("POST", "/invoiceExpress/detail", $body);
    }

    /**
     * 批次列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressListing($body)
    {
        return $this->restful("POST", "/invoiceExpress/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressPaging($body)
    {
        return $this->restful("POST", "/invoiceExpress/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressUpdate($body)
    {
        return $this->restful("POST", "/invoiceExpress/update", $body);
    }

    /**
     * 发票上传
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/AsyncController/uploadInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadInvoice($body)
    {
        return $this->restful("POST", "/async/uploadInvoice", $body);
    }

    /**
     * 更新发票邮递状态
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/updateExpressStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceUpdateExpressStatus($body)
    {
        return $this->restful("POST", "/invoice/updateExpressStatus", $body);
    }

    /**
     * 在途发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingOnWayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceListingOnWay($body)
    {
        return $this->restful("POST", "/invoice/listingOnWay", $body);
    }

    /**
     * 在途发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingOnWayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoicePagingOnWay($body)
    {
        return $this->restful("POST", "/invoice/pagingOnWay", $body);
    }

    /**
     * 待确认收货列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingOnWayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceListingReturnable($body)
    {
        return $this->restful("POST", "/invoice/listingReturnable", $body);
    }

    /**
     * 待确认收货分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingOnWayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoicePagingReturnable($body)
    {
        return $this->restful("POST", "/invoice/pagingReturnable", $body);
    }

    /**
     * 通过billNo获取未签收的发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/listingNotReceivedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listingNotReceived($body)
    {
        return $this->restful("POST", "/invoice/listingNotReceived", $body);
    }

    /**
     * 待邮寄bill列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/billPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressBillListing($body)
    {
        return $this->restful("POST", "/invoiceExpress/billListing", $body);
    }

    /**
     * 保司批量签收
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/billPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressReceiveByClaimNo($body)
    {
        return $this->restful("POST", "/invoiceExpress/receiveByInsure", $body);
    }

    /**
     * 发票详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/billPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceDetail($body)
    {
        return $this->restful("POST", "/invoice/detail", $body);
    }

    /**
     * 根据保单号找对应开票单的发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/billPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function policyInvoicePaging($body)
    {
        return $this->restful("POST", "/invoice/policyInvoicePaging", $body);
    }

    /**
     * 根据保单号找,药联理赔单（PBM2.0）理赔款应收，对应开票单的发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/policyPBM2InvoicePagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyPBM2InvoicePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/policyPBM2InvoicePaging", $body, $query, $extra);
    }

    /**
     * 根据保单号找，保单费用应收，对应开票单的发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/policyHandleFeeInvoicePagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyHandleFeeInvoicePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/policyHandleFeeInvoicePaging", $body, $query, $extra);
    }
}
