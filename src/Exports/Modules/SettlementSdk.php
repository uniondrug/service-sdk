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
 * @date   2020-01-09
 * @time   Thu, 09 Jan 2020 10:44:18 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * SettlementSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'settlement.module';

    /**
     * 创建开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/addAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addBill($body)
    {
        return $this->restful("POST", "/bill/add", $body);
    }

    /**
     * 确认协议接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/addProtocolAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addBillProtocol($body)
    {
        return $this->restful("POST", "/bill/addProtocol", $body);
    }

    /**
     * 添加理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/addClaimAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addClaim($body)
    {
        return $this->restful("POST", "/claim/add", $body);
    }

    /**
     * 添加保司开票信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InsurerInvoiceInfoController/addAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addInsurerInvoiceInfo($body)
    {
        return $this->restful("POST", "/insurerInvoiceInfo/add", $body);
    }

    /**
     * 添加发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/addDistributionAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/addDistribution", $body);
    }

    /**
     * 添加连锁负责人
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DirectorController/addPartnerAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addPartnerDirector($body)
    {
        return $this->restful("POST", "/director/addPartner", $body);
    }

    /**
     * 添加获取对账单操作日志记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/addLogAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function addStatementLog($body)
    {
        return $this->restful("POST", "/statements/addLog", $body);
    }

    /**
     * 结算单订单数据统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/statisticsOrdersAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statementStatisticsOrders($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/statisticsOrders", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementDetail($body)
    {
        return $this->restful("POST", "/announcement/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementPartnerCreate($body)
    {
        return $this->restful("POST", "/announcementPartner/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementPartnerDetail($body)
    {
        return $this->restful("POST", "/announcementPartner/detail", $body);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementUpdate($body)
    {
        return $this->restful("POST", "/announcement/update", $body);
    }

    /**
     * 更新状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementUpdateStatus($body)
    {
        return $this->restful("POST", "/announcement/updateStatus", $body);
    }

    /**
     * 省份列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BankHouseController/citiesAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function bankHouseCities($body)
    {
        return $this->restful("POST", "/bankHouse/cities", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BankHouseController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function bankHouseDetail($body)
    {
        return $this->restful("POST", "/bankHouse/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BankHouseController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function bankHousePaging($body)
    {
        return $this->restful("POST", "/bankHouse/paging", $body);
    }

    /**
     * 省份列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BankHouseController/provincesAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function bankHouseProvinces($body)
    {
        return $this->restful("POST", "/bankHouse/provinces", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BankController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function bankPaging($body)
    {
        return $this->restful("POST", "/bank/paging", $body);
    }

    /**
     * 导出商品明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsDetailsExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billGoodsDetailExport($body)
    {
        return $this->restful("POST", "/bill/goodsDetailExport", $body);
    }

    /**
     * 开票信息商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billGoodsPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/billGoodsPaging", $body);
    }

    /**
     * 更具投保id查询开票单已用多少投保金额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billInsureAmount($body)
    {
        return $this->restful("POST", "/bill/billInsureAmount", $body);
    }

    /**
     * 开票单投保id分组信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureIdGroupAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billInsureIdGroup($body)
    {
        return $this->restful("POST", "/bill/billInsureIdGroup", $body);
    }

    /**
     * 开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billInsureList($body)
    {
        return $this->restful("POST", "/bill/billInsureList", $body);
    }

    /**
     * 开票单合并
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/mergeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billMerge($body)
    {
        return $this->restful("POST", "/bill/merge", $body);
    }

    /**
     * 导出关联订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billOrderExport($body)
    {
        return $this->restful("POST", "/bill/billOrderExport", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function billOrderPaging($body)
    {
        return $this->restful("POST", "/bill/billOrderPaging", $body);
    }

    /**
     * 上传开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/uploadBillAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function billUploadToPYT($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/uploadBill", $body, $query, $extra);
    }

    /**
     * 预生成对账单下的项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/buildAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function buildStatementProject($body)
    {
        return $this->restful("POST", "/project/build", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/listingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitListing($body)
    {
        return $this->restful("POST", "/businessSingleUnit/listing", $body);
    }

    /**
     * 撤销理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/cancelAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function cancelClaim($body)
    {
        return $this->restful("POST", "/claim/cancel", $body);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/auditAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentAudit($body)
    {
        return $this->restful("POST", "/capitalPayment/audit", $body);
    }

    /**
     * 批量同意审批
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/auditBatchSuccessAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentAuditBatchSuccess($body)
    {
        return $this->restful("POST", "/capitalPayment/auditBatchSuccess", $body);
    }

    /**
     * 资金付款审核分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/auditPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentAuditPaging($body)
    {
        return $this->restful("POST", "/capitalPayment/auditPaging", $body);
    }

    /**
     * 提交
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/commitAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentCommit($body)
    {
        return $this->restful("POST", "/capitalPayment/commit", $body);
    }

    /**
     * 批量提交
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/commitBatchSuccessAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentCommitBatchSuccess($body)
    {
        return $this->restful("POST", "/capitalPayment/commitBatchSuccess", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentCreate($body)
    {
        return $this->restful("POST", "/capitalPayment/create", $body);
    }

    /**
     * 执行
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/dealAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentDeal($body)
    {
        return $this->restful("POST", "/capitalPayment/deal", $body);
    }

    /**
     * 批量同意执行
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/dealBatchSuccessAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentDealBatchSuccess($body)
    {
        return $this->restful("POST", "/capitalPayment/dealBatchSuccess", $body);
    }

    /**
     * 资金付款执行分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/dealPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentDealPaging($body)
    {
        return $this->restful("POST", "/capitalPayment/dealPaging", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentDelete($body)
    {
        return $this->restful("POST", "/capitalPayment/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentDetail($body)
    {
        return $this->restful("POST", "/capitalPayment/detail", $body);
    }

    /**
     * 资金付款导入分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentPaging($body)
    {
        return $this->restful("POST", "/capitalPayment/paging", $body);
    }

    /**
     * 资金付款查询分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/searchPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentSearchPaging($body)
    {
        return $this->restful("POST", "/capitalPayment/searchPaging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentUpdate($body)
    {
        return $this->restful("POST", "/capitalPayment/update", $body);
    }

    /**
     * 检测理赔导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/checkClaimExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function checkClaimExport($body)
    {
        return $this->restful("POST", "/claim/checkClaimExport", $body);
    }

    /**
     * 理赔单理赔错误日志分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/errorLogPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimErrorLogPaging($body)
    {
        return $this->restful("POST", "/claim/errorLogPaging", $body);
    }

    /**
     * 订单理赔信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderClaimDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderDetail($body)
    {
        return $this->restful("POST", "/claim/order/claimDetail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsCreate($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsDelete($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsDetail($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/listingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsListing($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsPaging($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimOrderErrorRecordsController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOrderErrorRecordsUpdate($body)
    {
        return $this->restful("POST", "/claimOrderErrorRecords/update", $body);
    }

    /**
     * 理赔收款认领导入
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/paymentImportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimPaymentImport($body)
    {
        return $this->restful("POST", "/claim/paymentImport", $body);
    }

    /**
     * 理赔收款认领分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/paymentPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimPaymentPaging($body)
    {
        return $this->restful("POST", "/claim/paymentPaging", $body);
    }

    /**
     * 提交理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/commitAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function commitClaim($body)
    {
        return $this->restful("POST", "/claim/commit", $body);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/settlementTotalAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function compareSettlementTotal($body)
    {
        return $this->restful("POST", "/settlement/settlementTotal", $body);
    }

    /**
     * 赔付完成
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/completeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function completeClaim($body)
    {
        return $this->restful("POST", "/claim/complete", $body);
    }

    /**
     * 获取对比结果订单数
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/countCompareAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function countCompare($body)
    {
        return $this->restful("POST", "/settlement/countCompare", $body);
    }

    /**
     * 凯撒解密算法
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataSecureController/edcodeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function dataSecureDecode($body)
    {
        return $this->restful("POST", "/dataSecure/decode", $body);
    }

    /**
     * 凯撒加密算法
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataSecureController/encodeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function dataSecureEncode($body)
    {
        return $this->restful("POST", "/dataSecure/encode", $body);
    }

    /**
     * 删除发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/deleteDistributionAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function deleteInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/deleteDistribution", $body);
    }

    /**
     * 编辑开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/editAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function editBill($body)
    {
        return $this->restful("POST", "/bill/edit", $body);
    }

    /**
     * 修改理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/editClaimAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function editClaim($body)
    {
        return $this->restful("POST", "/claim/edit", $body);
    }

    /**
     * 编辑保司开票信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InsurerInvoiceInfoController/editAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function editInsurerInvoiceInfo($body)
    {
        return $this->restful("POST", "/insurerInvoiceInfo/edit", $body);
    }

    /**
     * 导出商品清单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillGoodsListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportBillGoodsList($body)
    {
        return $this->restful("POST", "/bill/exportBillGoodsList", $body);
    }

    /**
     * exportBillOrderListAction()
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillOrderListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportBillOrderList($body)
    {
        return $this->restful("POST", "/bill/exportBillOrderList", $body);
    }

    /**
     * 导出理赔商品
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportGoodsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportClaimGoods($body)
    {
        return $this->restful("POST", "/claim/exportGoods", $body);
    }

    /**
     * 导出理赔发票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportInvoiceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportClaimInvoice($body)
    {
        return $this->restful("POST", "/claim/exportInvoice", $body);
    }

    /**
     * 导出理赔订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportOrdersAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportClaimOrders($body)
    {
        return $this->restful("POST", "/claim/exportOrders", $body);
    }

    /**
     * 导出理赔汇总列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportReportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportClaimReport($body)
    {
        return $this->restful("POST", "/claim/exportReport", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportMemberPagingSqlAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportMemberPagingSql($body)
    {
        return $this->restful("POST", "/bill/exportMemberPagingSql", $body);
    }

    /**
     * 导出指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/exportStatementGoodsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function exportStatementGoods($body)
    {
        return $this->restful("POST", "/settlement/exportStatementGoods", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FrontendStatementLogController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function frontendStatementLogCreate($body)
    {
        return $this->restful("POST", "/frontendStatementLog/create", $body);
    }

    /**
     * 获取开票信息检测结果
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/checkAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillCheckResult($body)
    {
        return $this->restful("POST", "/bill/check", $body);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillDetail($body)
    {
        return $this->restful("POST", "/bill/detail", $body);
    }

    /**
     * 获取bill详情byInvoice
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/detailByInvoiceIdAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillDetailByInvoiceId($body)
    {
        return $this->restful("POST", "/bill/detailByInvoiceId", $body);
    }

    /**
     * 获取开票单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/listAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillList($body)
    {
        return $this->restful("POST", "/bill/list", $body);
    }

    /**
     * 开票单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillPaging($body)
    {
        return $this->restful("POST", "/bill/paging", $body);
    }

    /**
     * 智赔开票单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/pagingToAiAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillPagingToAi($body)
    {
        return $this->restful("POST", "/bill/pagingToAi", $body);
    }

    /**
     * 协议内容接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/protocolDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillProtocolDetail($body)
    {
        return $this->restful("POST", "/bill/protocolDetail", $body);
    }

    /**
     * 开票单列表汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/summaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getBillSummary($body)
    {
        return $this->restful("POST", "/bill/summary", $body);
    }

    /**
     * 理赔开票单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/billPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimBillPaging($body)
    {
        return $this->restful("POST", "/claim/billPaging", $body);
    }

    /**
     * 理赔单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimDetail($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/goodsPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimGoodsPaging($body)
    {
        return $this->restful("POST", "/claim/goodsPaging", $body);
    }

    /**
     * 理赔发票分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/invoicePagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimInvoicePaging($body)
    {
        return $this->restful("POST", "/claim/invoicePaging", $body);
    }

    /**
     * 理赔操作记录分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/logPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimLogPaging($body)
    {
        return $this->restful("POST", "/claim/logPaging", $body);
    }

    /**
     * 理赔关联订单商品汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderGoodsSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimOrderGoodsSummary($body)
    {
        return $this->restful("POST", "/claim/orderGoodsSummary", $body);
    }

    /**
     * 订单汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimOrderPaging($body)
    {
        return $this->restful("POST", "/claim/orderPaging", $body);
    }

    /**
     * 理赔单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimPaging($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 添加/编辑开票时的汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/relateSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimRelateSummary($body)
    {
        return $this->restful("POST", "/claim/relateSummary", $body);
    }

    /**
     * 理赔汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimReportPaging($body)
    {
        return $this->restful("POST", "/claim/reportPaging", $body);
    }

    /**
     * 理赔汇总统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getClaimReportSummary($body)
    {
        return $this->restful("POST", "/claim/reportSummary", $body);
    }

    /**
     * 数据中心订单明细导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDataOrdersExport($body)
    {
        return $this->restful("POST", "/data/ordersExport", $body);
    }

    /**
     * 订单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDataOrdersPaging($body)
    {
        return $this->restful("POST", "/data/ordersPaging", $body);
    }

    /**
     * 根据开票单号获取订单信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/getDetailByBillNoAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDetailByBillNo($body)
    {
        return $this->restful("POST", "/settlement/getDetailByBillNo", $body);
    }

    /**
     * 直付应结账期表导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDirectExport($body)
    {
        return $this->restful("POST", "/data/directExport", $body);
    }

    /**
     * 直付应结账期表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDirectPaging($body)
    {
        return $this->restful("POST", "/data/directPaging", $body);
    }

    /**
     * 连锁直付结算信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDirectSettlementExport($body)
    {
        return $this->restful("POST", "/data/directSettlementExport", $body);
    }

    /**
     * 连锁直付结算信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getDirectSettlementPaging($body)
    {
        return $this->restful("POST", "/data/directSettlementPaging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ExceptionController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getExceptionPaging($body)
    {
        return $this->restful("POST", "/exception/paging", $body);
    }

    /**
     * 商品明细汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsListSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getGoodsListSummary($body)
    {
        return $this->restful("POST", "/bill/goodsListSummary", $body);
    }

    /**
     * 通过订单No获取发票分配情况
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/getDistributionDetailByOrderNoAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getInvoiceDistributionDetailByOrderNo($body)
    {
        return $this->restful("POST", "/invoice/getDistributionDetailByOrderNo", $body);
    }

    /**
     * 获取连锁负责人
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DirectorController/partnerAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getPartnerDirector($body)
    {
        return $this->restful("POST", "/director/partner", $body);
    }

    /**
     * 获取核算单位今年未结算第一单payTime
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/timeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getPayTimeBegin($body)
    {
        return $this->restful("POST", "/settlement/time", $body);
    }

    /**
     * 获取对账单项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/listAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getProjectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 获取对账单项目分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 获取销售清单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSaleGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/saleGoodsPaging", $body);
    }

    /**
     * 销售清单汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleListSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSaleListSummary($body)
    {
        return $this->restful("POST", "/bill/saleListSummary", $body);
    }

    /**
     * 获取结算周期内的结算金额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/getSettlementAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSettlementAmount($body)
    {
        return $this->restful("POST", "/settlement/getSettlementAmount", $body);
    }

    /**
     * 获取未结算金额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/unSettledAmountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function settlementQueryUnSettledAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/settlement/unSettledAmount", $body, $query, $extra);
    }

    /**
     * 结算审核汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementAuditSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSettlementAuditSummary($body)
    {
        return $this->restful("POST", "/report/settlementAuditSummary", $body);
    }

    /**
     * 结算开票汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementInvoiceSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSettlementInvoiceSummary($body)
    {
        return $this->restful("POST", "/report/settlementInvoiceSummary", $body);
    }

    /**
     * 结算汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getSettlementSummary($body)
    {
        return $this->restful("POST", "/report/settlementSummary", $body);
    }

    /**
     * 获取对账单操作日志记录明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getStatementLogDetail($body)
    {
        return $this->restful("POST", "/statements/logDetail", $body);
    }

    /**
     * 获取对账单操作日志记录列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getStatementLogList($body)
    {
        return $this->restful("POST", "/statements/logList", $body);
    }

    /**
     * 获取结算单明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getStatementsDetail($body)
    {
        return $this->restful("POST", "/statements/detail", $body);
    }

    /**
     * 获取结算单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function getStatementsPaging($body)
    {
        return $this->restful("POST", "/statements/paging", $body);
    }

    /**
     * 获取指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function goods($body)
    {
        return $this->restful("POST", "/partner/goods", $body);
    }

    /**
     * 导出指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function goodsExport($body)
    {
        return $this->restful("POST", "/partner/goodsExport", $body);
    }

    /**
     * 初始化
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/GoodsSettlementDetailsController/initializeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function goodsSettlementDetailsInitialize($body)
    {
        return $this->restful("POST", "/goodsSettlementDetails/initialize", $body);
    }

    /**
     * 初始化对比后生成对账单订单数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/initCompareOrdersAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function initCompareOrders($body)
    {
        return $this->restful("POST", "/settlement/initCompareOrders", $body);
    }

    /**
     * 初始化生成对账单订单数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/initStatementOrdersAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function initStatementOrders($body)
    {
        return $this->restful("POST", "/settlement/initStatementOrders", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/memberPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function memberPaging($body)
    {
        return $this->restful("POST", "/bill/memberPaging", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful("POST", "/bill/orderDetail", $body);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderGoodsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderGoods($body)
    {
        return $this->restful("POST", "/settlement/orderGoods", $body);
    }

    /**
     * 订单信息商品列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderGoodsPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/orderGoodsPaging", $body);
    }

    /**
     * 初始化
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrderPayDetailsController/initializeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderPayDetailsInitialize($body)
    {
        return $this->restful("POST", "/orderPayDetails/initialize", $body);
    }

    /**
     * 获取订单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderPayMethodAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderPayMethod($body)
    {
        return $this->restful("POST", "/settlement/orderPayMethod", $body);
    }

    /**
     * 获取结算单订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/ordersAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orders($body)
    {
        return $this->restful("POST", "/settlement/orders", $body);
    }

    /**
     * 获取指定连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersCountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function ordersCount($body)
    {
        return $this->restful("POST", "/partner/ordersCount", $body);
    }

    /**
     * 导出指定连锁订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function ordersExport($body)
    {
        return $this->restful("POST", "/partner/ordersExport", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/autoCreateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountAutoCreate($body)
    {
        return $this->restful("POST", "/organizeAccount/autoCreate", $body);
    }

    /**
     * 收件人列表 - 财税
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/consigneeListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountConsigneeList($body)
    {
        return $this->restful("POST", "/organizeAccount/consigneeList", $body);
    }

    /**
     * 连锁人员数量
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/countAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountCountWorker($body)
    {
        return $this->restful("POST", "/organizeAccount/countWorker", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountCreate($body)
    {
        return $this->restful("POST", "/organizeAccount/create", $body);
    }

    /**
     * 批量新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/createInBatchAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeAccountCreateInBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeAccount/createInBatch", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountDetail($body)
    {
        return $this->restful("POST", "/organizeAccount/detail", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/existAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountExist($body)
    {
        return $this->restful("POST", "/organizeAccount/exist", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountPaging($body)
    {
        return $this->restful("POST", "/organizeAccount/paging", $body);
    }

    /**
     * 获取用户下连锁列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/memberAccountListingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeAccountMemberAccountListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeAccount/memberAccountListing", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountUpdate($body)
    {
        return $this->restful("POST", "/organizeAccount/update", $body);
    }

    /**
     * 启用停用
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAccountUpdateStatus($body)
    {
        return $this->restful("POST", "/organizeAccount/updateStatus", $body);
    }

    /**
     * 切换选中
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/updateCheckedAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeAccountUpdateChecked($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeAccount/updateChecked", $body, $query, $extra);
    }

    /**
     * 商家银行账号分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/businessPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountBusinessPaging($body)
    {
        return $this->restful("POST", "/organizeBankAccount/businessPaging", $body);
    }

    /**
     * 检查该连锁下是否有没设置账户的
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/checkIsExistAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountCheckIsExist($body)
    {
        return $this->restful("POST", "/organizeBankAccount/checkIsExist", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountCreate($body)
    {
        return $this->restful("POST", "/organizeBankAccount/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountDelete($body)
    {
        return $this->restful("POST", "/organizeBankAccount/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountDetail($body)
    {
        return $this->restful("POST", "/organizeBankAccount/detail", $body);
    }

    /**
     * 核算单位详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/unitDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeBankAccountUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeBankAccount/unitDetail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountPaging($body)
    {
        return $this->restful("POST", "/organizeBankAccount/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeBankAccountListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeBankAccount/listing", $body, $query, $extra);
    }

    /**
     * 设为默认
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/setIsDefaultAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountSetIsDefault($body)
    {
        return $this->restful("POST", "/organizeBankAccount/setIsDefault", $body);
    }

    /**
     * 设置状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/setStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountSetStatus($body)
    {
        return $this->restful("POST", "/organizeBankAccount/setStatus", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeBankAccountUpdate($body)
    {
        return $this->restful("POST", "/organizeBankAccount/update", $body);
    }

    /**
     * 更新审核状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBankAccountController/updateAuditStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeBankAccountUpdateAuditStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeBankAccount/updateAuditStatus", $body, $query, $extra);
    }

    /**
     * 获取连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/partnerCountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerCount($body)
    {
        return $this->restful("POST", "/partner/partnerCount", $body);
    }

    /**
     * 处理连锁全部订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerHandleAll($body)
    {
        return $this->restful("POST", "/partner/handleAll", $body);
    }

    /**
     * 处理所有异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllExceptionAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerHandleAllException($body)
    {
        return $this->restful("POST", "/partner/handleAllException", $body);
    }

    /**
     * 处理连锁异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleExceptionAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerHandleException($body)
    {
        return $this->restful("POST", "/partner/handleException", $body);
    }

    /**
     * 获取指定连锁订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerOrders($body)
    {
        return $this->restful("POST", "/partner/orders", $body);
    }

    /**
     * 连锁结算月月视图
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/periodSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerPeriodSummary($body)
    {
        return $this->restful("POST", "/partner/periodSummary", $body);
    }

    /**
     * 连锁期末余额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/finalFundAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerPoolDetailFinalFund($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/partnerFinalFund", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerSettingsController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettingsCreate($body)
    {
        return $this->restful("POST", "/partnerSettings/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerSettingsController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettingsDetail($body)
    {
        return $this->restful("POST", "/partnerSettings/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerSettingsController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettingsUpdate($body)
    {
        return $this->restful("POST", "/partnerSettings/update", $body);
    }

    /**
     * 连锁结算订单数量
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementCountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementCount($body)
    {
        return $this->restful("POST", "/partner/settlementCount", $body);
    }

    /**
     * 连锁结算商品信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementGoodsExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementGoodsExport($body)
    {
        return $this->restful("POST", "/partner/settlementGoodsExport", $body);
    }

    /**
     * 连锁结算订单信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementOrdersExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementOrdersExport($body)
    {
        return $this->restful("POST", "/partner/settlementOrdersExport", $body);
    }

    /**
     * 获取结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementPayMethodAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementPayMethod($body)
    {
        return $this->restful("POST", "/partner/settlementPayMethod", $body);
    }

    /**
     * 获取结算流程统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementStatisticsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementStatistics($body)
    {
        return $this->restful("POST", "/partner/settlementStatistics", $body);
    }

    /**
     * 连锁结算汇总统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/partnerSettlementSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementSummary($body)
    {
        return $this->restful("POST", "/report/partnerSettlementSummary", $body);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementTotalAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSettlementTotal($body)
    {
        return $this->restful("POST", "/partner/settlementTotal", $body);
    }

    /**
     * 直付数据处理分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSituationPaging($body)
    {
        return $this->restful("POST", "/partner/situationPaging", $body);
    }

    /**
     * 直付数据处理分页汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerSituationSummary($body)
    {
        return $this->restful("POST", "/partner/situationSummary", $body);
    }

    /**
     * settlementWhiteListAction()
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementWhiteListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function partnerUpdateSettlementStatus($body)
    {
        return $this->restful("POST", "/partner/updateSettlementStatus", $body);
    }

    /**
     * 添加付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/addAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function paymentAdd($body)
    {
        return $this->restful("POST", "/payment/add", $body);
    }

    /**
     * 删除付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function paymentDelete($body)
    {
        return $this->restful("POST", "/payment/delete", $body);
    }

    /**
     * 获取付款记录详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function paymentDetail($body)
    {
        return $this->restful("POST", "/payment/detail", $body);
    }

    /**
     * 修改付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/editAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function paymentEdit($body)
    {
        return $this->restful("POST", "/payment/edit", $body);
    }

    /**
     * 付款记录分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function paymentPaging($body)
    {
        return $this->restful("POST", "/payment/paging", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PayMethodController/listingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function payMethodListing($body)
    {
        return $this->restful("POST", "/payMethod/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolCutPartnersController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolCutPartnersCreate($body)
    {
        return $this->restful("POST", "/poolCutPartners/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolCutPartnersController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolCutPartnersDelete($body)
    {
        return $this->restful("POST", "/poolCutPartners/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolCutPartnersController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolCutPartnersDetail($body)
    {
        return $this->restful("POST", "/poolCutPartners/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolCutPartnersController/listingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolCutPartnersListing($body)
    {
        return $this->restful("POST", "/poolCutPartners/listing", $body);
    }

    /**
     * 导出资金池流水列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/exportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsExport($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/export", $body);
    }

    /**
     * 资金池流水列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsPaging($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/paging", $body);
    }

    /**
     * 期末余额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumFinalFundAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsSumFinalFund($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumFinalFund", $body);
    }

    /**
     * 收入金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumIncomeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsSumIncome($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumIncome", $body);
    }

    /**
     * 期初金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumOriginFundAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsSumOriginFund($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumOriginFund", $body);
    }

    /**
     * 支出金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumOutcomeAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function poolDetailStatisticsSumOutcome($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumOutcome", $body);
    }

    /**
     * 检查队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/checkAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function queueCheck($body)
    {
        return $this->restful("POST", "/queue/check", $body);
    }

    /**
     * 处理队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/handleAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function queueHandle($body)
    {
        return $this->restful("POST", "/queue/handle", $body);
    }

    /**
     * 重新处理理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/rehandleClaimAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function rehandleClaim($body)
    {
        return $this->restful("POST", "/claim/rehandleClaim", $body);
    }

    /**
     * 导出订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/goodsExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportGoodsExport($body)
    {
        return $this->restful("POST", "/report/goodsExport", $body);
    }

    /**
     * 导出直付订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/ordersExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportOrdersExport($body)
    {
        return $this->restful("POST", "/report/ordersExport", $body);
    }

    /**
     * 直付订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/ordersListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportOrdersList($body)
    {
        return $this->restful("POST", "/report/ordersList", $body);
    }

    /**
     * 统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/reportStatisticsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reportStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/statistics", $body, $query, $extra);
    }

    /**
     * 优惠金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumDiscountAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumDiscountAmount($body)
    {
        return $this->restful("POST", "/report/sumDiscountAmount", $body);
    }

    /**
     * 直付金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumEquityAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumEquityAmount($body)
    {
        return $this->restful("POST", "/report/sumEquityAmount", $body);
    }

    /**
     * 直付结算金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumEquityStatementAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumEquityStatementAmount($body)
    {
        return $this->restful("POST", "/report/sumEquityStatementAmount", $body);
    }

    /**
     * 商品数量统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumGoodsQuantityAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumGoodsQuantity($body)
    {
        return $this->restful("POST", "/report/sumGoodsQuantity", $body);
    }

    /**
     * 订单总额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumOrderAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumOrderAmount($body)
    {
        return $this->restful("POST", "/report/sumOrderAmount", $body);
    }

    /**
     * 药联代收统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumPayAmountToUnionDrugAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumPayAmountToUnionDrug($body)
    {
        return $this->restful("POST", "/report/sumPayAmountToUnionDrug", $body);
    }

    /**
     * 柜台收银统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumPayAmountToVendorAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumPayAmountToVendor($body)
    {
        return $this->restful("POST", "/report/sumPayAmountToVendor", $body);
    }

    /**
     * 本次结算金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumSettlementAmountAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function reportSumSettlementAmount($body)
    {
        return $this->restful("POST", "/report/sumSettlementAmount", $body);
    }

    /**
     * 根据对账单号把当指定账单下的订单重置为未绑定对账单的订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function resetSettlements($body)
    {
        return $this->restful("POST", "/settlement/resetSettlements", $body);
    }

    /**
     * 根据范围重新更新settlements归属的开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsBillNoAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function resetSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/resetSettlementsBillNo", $body);
    }

    /**
     * 导出销售清单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function saleGoodsExport($body)
    {
        return $this->restful("POST", "/bill/saleGoodsExport", $body);
    }

    /**
     * 导出增值服务明细列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/exportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsExport($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/export", $body);
    }

    /**
     * 增值服务明细列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsPaging($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/paging", $body);
    }

    /**
     * 优惠金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumFreePriceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsSumFreePrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumFreePrice", $body);
    }

    /**
     * 统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumFreePriceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsStatistics($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/statistics", $body);
    }

    /**
     * 资金池扣减金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumOpFundAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsSumOpFund($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumOpFund", $body);
    }

    /**
     * 商品数量统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumQuantityAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsSumQuantity($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumQuantity", $body);
    }

    /**
     * 实付金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumSalePriceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsSumSalePrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumSalePrice", $body);
    }

    /**
     * 商品总额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumTotalPriceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function serviceDetailStatisticsSumTotalPrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumTotalPrice", $body);
    }

    /**
     * 一键全部添加
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoAllAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function setClaimNoAll($body)
    {
        return $this->restful("POST", "/claim/setClaimNoAll", $body);
    }

    /**
     * 批量添加理赔单与开票单关联
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoByBillNosAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function setClaimNoByBillNos($body)
    {
        return $this->restful("POST", "/claim/setClaimNoByBillNos", $body);
    }

    /**
     * 读取配置
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/indexAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function settingIndex($body)
    {
        return $this->restful("POST", "/setting/index", $body);
    }

    /**
     * 保存配置接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function settingUpdate($body)
    {
        return $this->restful("POST", "/setting/update", $body);
    }

    /**
     * 对账订单快速比对导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/compareExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function settlementsCompareExport($body)
    {
        return $this->restful("POST", "/settlement/compareExport", $body);
    }

    /**
     * 对账订单快速比对分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/comparePagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function settlementsComparePaging($body)
    {
        return $this->restful("POST", "/settlement/comparePaging", $body);
    }

    /**
     * 继续理赔结算单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/claimContinueAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementClaimContinue($body)
    {
        return $this->restful("POST", "/statements/claimContinue", $body);
    }

    /**
     * 获取结算单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementComparePayMethodAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementComparePayMethod($body)
    {
        return $this->restful("POST", "/settlement/statementComparePayMethod", $body);
    }

    /**
     * 获取指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementGoodsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementGoods($body)
    {
        return $this->restful("POST", "/settlement/statementGoods", $body);
    }

    /**
     * 获取结算单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementPayMethodAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementPayMethod($body)
    {
        return $this->restful("POST", "/settlement/statementPayMethod", $body);
    }

    /**
     * 开始理赔结算单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/startClaimAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementStartClaim($body)
    {
        return $this->restful("POST", "/statements/startClaim", $body);
    }

    /**
     * 结算单统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/summaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function statementSummary($body)
    {
        return $this->restful("POST", "/statements/summary", $body);
    }

    /**
     * 提交开票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/submitBillAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function submitBill($body)
    {
        return $this->restful("POST", "/bill/submitBill", $body);
    }

    /**
     * 跑统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/createSettlementAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function taskCreateSettlement($body)
    {
        return $this->restful("POST", "/task/createSettlement", $body);
    }

    /**
     * 把问题订单重置执行状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/resetSettlementAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function taskResetSettlement($body)
    {
        return $this->restful("POST", "/task/resetSettlement", $body);
    }

    /**
     * 药联结算汇总统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/totalSettlementSummaryAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function totalSettlementSummary($body)
    {
        return $this->restful("POST", "/report/totalSettlementSummary", $body);
    }

    /**
     * 更新开票单信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/bill/update", $body);
    }

    /**
     * 更新开票单付款状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateDownloadNumAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateBillDownloadNum($body)
    {
        return $this->restful("POST", "/bill/updateDownloadNum", $body);
    }

    /**
     * 开发票时更新开票单状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateBillStatusToInvoice($body)
    {
        return $this->restful("POST", "/bill/updateBillStatusToInvoice", $body);
    }

    /**
     * 更新开票单状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateSingleBillStatus($body)
    {
        return $this->restful("POST", "/bill/updateSingleBillStatus", $body);
    }

    /**
     * 更新对账单下订单的属性接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateSettlement($body)
    {
        return $this->restful("POST", "/settlement/updateSettlement", $body);
    }

    /**
     * 更新对账单下订单的开票单号接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementsBillNoAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementsBillNo", $body);
    }

    /**
     * 更新对账单下订单的状态接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function updateSettlementStatus($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementStatus", $body);
    }

    /**
     * 获取用户下连锁列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAccountController/listByMemberAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function organizeAccountListByMember($body)
    {
        return $this->restful("POST", "/organizeAccount/listByMember", $body);
    }

    /**
     * 商家服务平台版本详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessCenterVersionController/detailAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function businessCenterVersionDetail($body)
    {
        return $this->restful("POST", "/businessCenterVersion/detail", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitCreate($body)
    {
        return $this->restful("POST", "/businessSingleUnit/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitDelete($body)
    {
        return $this->restful("POST", "/businessSingleUnit/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitDetail($body)
    {
        return $this->restful("POST", "/businessSingleUnit/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitPaging($body)
    {
        return $this->restful("POST", "/businessSingleUnit/paging", $body);
    }

    /**
     * 更新比例
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/updateRateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitUpdateRate($body)
    {
        return $this->restful("POST", "/businessSingleUnit/updateRate", $body);
    }

    /**
     * 更新状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BusinessSingleUnitController/updateStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function businessSingleUnitUpdateStatus($body)
    {
        return $this->restful("POST", "/businessSingleUnit/updateStatus", $body);
    }

    /**
     * 获取有效的公告
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/availableAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementAvailable($body)
    {
        return $this->restful("POST", "/announcement/available", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementCreate($body)
    {
        return $this->restful("POST", "/announcement/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function announcementPaging($body)
    {
        return $this->restful("POST", "/announcement/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityCreate($body)
    {
        return $this->restful("POST", "/organizeAuthority/create", $body);
    }

    /**
     * 商家详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/merchantDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityMerchantDetail($body)
    {
        return $this->restful("POST", "/organizeAuthority/merchantDetail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityPaging($body)
    {
        return $this->restful("POST", "/organizeAuthority/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/updateStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityUpdateStatus($body)
    {
        return $this->restful("POST", "/organizeAuthority/updateStatus", $body);
    }

    /**
     * 外部系统申请
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/applyAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptApply($body)
    {
        return $this->restful("POST", "/capitalReceipt/apply", $body);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/auditAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptAudit($body)
    {
        return $this->restful("POST", "/capitalReceipt/audit", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/deleteAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptDelete($body)
    {
        return $this->restful("POST", "/capitalReceipt/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptDetail($body)
    {
        return $this->restful("POST", "/capitalReceipt/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptPaging($body)
    {
        return $this->restful("POST", "/capitalReceipt/paging", $body);
    }

    /**
     * 资金付款查询分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/searchPagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptSearchPaging($body)
    {
        return $this->restful("POST", "/capitalReceipt/searchPaging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalReceiptController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalReceiptUpdate($body)
    {
        return $this->restful("POST", "/capitalReceipt/update", $body);
    }

    /**
     * 导出待理赔的数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportWaitClaimsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimExportWaitClaims($body)
    {
        return $this->restful("POST", "/claim/exportWaitClaims", $body);
    }

    /**
     * 获取连锁权益分组列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrderPayDetailsController/equityGroupsListAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderPayDetailsEquityGroupsList($body)
    {
        return $this->restful("POST", "/orderPayDetails/equityGroupsLis", $body);
    }

    /**
     * 检查该连锁下是否有没设置账户的
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/checkIsExistAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountCheckIsExist($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/checkIsExist", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountCreate($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/detailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountDetail($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/detail", $body);
    }

    /**
     * 核算单位级详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/unitDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeFinanceAccountUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeFinanceAccount/unitDetail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountPaging($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeFinanceAccountListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeFinanceAccount/listing", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountUpdate($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/update", $body);
    }

    /**
     * 更新状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/updateStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountUpdateStatus($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/updateStatus", $body);
    }

    /**
     * 更新审核状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/updateAuditStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeFinanceAccountUpdateAuditStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeFinanceAccount/updateAuditStatus", $body, $query, $extra);
    }

    /**
     * 商户开票信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/invoiceInfoExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeFinanceAccountInvoiceInfoExport($body)
    {
        return $this->restful("POST", "/organizeFinanceAccount/invoiceInfoExport", $body);
    }

    /**
     * 更新连锁在线开票状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeFinanceAccountController/updateOnlineInvoiceAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeFinanceAccountUpdateOnlineInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeFinanceAccount/updateOnlineInvoice", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DrugClearPartnersController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function drugClearPartnersCreate($body)
    {
        return $this->restful("POST", "/drugClearPartners/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DrugClearPartnersController/resetAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function drugClearPartnersReset($body)
    {
        return $this->restful("POST", "/drugClearPartners/reset", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DrugClearPartnersController/updateAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function drugClearPartnersUpdate($body)
    {
        return $this->restful("POST", "/drugClearPartners/update", $body);
    }

    /**
     * 节假日列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/HolidayController/listingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function holidayListing($body)
    {
        return $this->restful("POST", "/holiday/listing", $body);
    }

    /**
     * 检测付款单重复
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/checkRepeatAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentCheckRepeat($body)
    {
        return $this->restful("POST", "/capitalPayment/checkRepeat", $body);
    }

    /**
     * 资金付款查询导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/searchExportAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function capitalPaymentSearchExport($body)
    {
        return $this->restful("POST", "/capitalPayment/searchExport", $body);
    }

    /**
     * 吐槽
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FeedbackController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function feedbackCreate($body)
    {
        return $this->restful("POST", "/feedback/create", $body);
    }

    /**
     * 超期理赔分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/overdueClaimsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOverdueClaims($body)
    {
        return $this->restful("POST", "/claim/overdueClaims", $body);
    }

    /**
     * 超期理赔统计信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/overdueClaimsStatisticsAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOverdueClaimsStatistics($body)
    {
        return $this->restful("POST", "/claim/overdueClaimsStatistics", $body);
    }

    /**
     * 公函数据接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/officialLetterAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function claimOfficialLetter($body)
    {
        return $this->restful("POST", "/claim/officialLetter", $body);
    }

    /**
     * 理赔单列表查询
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/getClaimsTpaListAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaGetClaimsTpaList($body)
    {
        return $this->restful("POST", "/claimsTpa/getClaimsTpaList", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/detailAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaDetail($body)
    {
        return $this->restful("POST", "/claimsTpa/detail", $body);
    }

    /**
     * 订单汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/getTpaOrderPagingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaOrderPaging($body)
    {
        return $this->restful("POST", "/claimsTpa/getTpaOrderPaging", $body);
    }

    /**
     * 撤销理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/cancelAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaCancel($body)
    {
        return $this->restful("POST", "/claimsTpa/cancel", $body);
    }

    /**
     * 提交理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/commitClaimAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaCommitClaim($body)
    {
        return $this->restful("POST", "/claimsTpa/commitClaim", $body);
    }

    /**
     * 赔付完成
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/completeAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaCompletion($body)
    {
        return $this->restful("POST", "/claimsTpa/completion", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/createAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaCreate($body)
    {
        return $this->restful("POST", "/claimsTpa/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/deleteAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaDelete($body)
    {
        return $this->restful("POST", "/claimsTpa/delete", $body);
    }

    /**
     * 商品销售汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/getTpaGoodsSummaryAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaGetTpaGoodsSummary($body)
    {
        return $this->restful("POST", "/claimsTpa/getTpaGoodsSummary", $body);
    }

    /**
     * 商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/getTpaGoodsPagingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaGoodsPaging($body)
    {
        return $this->restful("POST", "/claimsTpa/getTpaGoodsPaging", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/listingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaListing($body)
    {
        return $this->restful("POST", "/claimsTpa/listing", $body);
    }

    /**
     * 订单销售汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/relateOrderPagingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaOrderSummary($body)
    {
        return $this->restful("POST", "/claimsTpa/relateOrderPaging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/pagingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaPaging($body)
    {
        return $this->restful("POST", "/claimsTpa/paging", $body);
    }

    /**
     * 理赔单己关联保单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/policyListAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaPolicyList($body)
    {
        return $this->restful("POST", "/claimsTpa/policyList", $body);
    }

    /**
     * 关联理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/relatePoliciesAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaRelatePolicies($body)
    {
        return $this->restful("POST", "/claimsTpa/relatePolicies", $body);
    }

    /**
     * 一键全部添加
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/relatePoliciesAllAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaRelatePoliciesAll($body)
    {
        return $this->restful("POST", "/claimsTpa/relatePoliciesAll", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/updateAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaUpdate($body)
    {
        return $this->restful("POST", "/claimsTpa/update", $body);
    }

    /**
     * 获取待理赔的保单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/waitClaimPolicyListAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaWaitClaimPolicyList($body)
    {
        return $this->restful("POST", "/claimsTpa/waitClaimPolicyList", $body);
    }

    /**
     * 订单销售汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/getTpaOrderSummaryAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaGetTpaOrderSummary($body)
    {
        return $this->restful("POST", "/claimsTpa/getTpaOrderSummary", $body);
    }

    /**
     * 导出理赔商品
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/claimsTpaExportGoodsAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaExportClaimGoods($body)
    {
        return $this->restful("POST", "/claimsTpa/exportGoods", $body);
    }

    /**
     * 导出理赔订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/claimsTpaExportOrdersAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsTpaExportClaimOrders($body)
    {
        return $this->restful("POST", "/claimsTpa/exportOrders", $body);
    }

    /**
     * 移除保单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimsTpaController/removeRelatePoliciesAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimsRemoveRelatePolicies($body)
    {
        return $this->restful("POST", "/claimsTpa/removeRelatePolicies", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimLogTpaController/pagingAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function claimLogTpaPaging($body)
    {
        return $this->restful("POST", "/claimLogTpa/paging", $body);
    }

    /**
     * 根据理赔单号查找详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/detailByClaimNoAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function billDetailByClaimNo($body)
    {
        return $this->restful("POST", "/bill/detailByClaimNo", $body);
    }

    /**
     * 连锁预计付款
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/chainPaymentAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function reportChainPayment($body)
    {
        return $this->restful("POST", "/report/chainPayment", $body);
    }

    /**
     * 保司预计付款
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/paymentByInsuranceAction.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function reportPaymentByInsurance($body)
    {
        return $this->restful("POST", "/report/paymentByInsurance", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/create", $body, $query, $extra);
    }

    /**
     * 通过手机号或姓名查询员工信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerAccountNameDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/accountNameDetail", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/FinanceWorkerController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function financeWorkerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financeWorker/update", $body, $query, $extra);
    }

    /**
     * 发票开票完成添加付款单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/statementCompleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statementComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/statementComplete", $body, $query, $extra);
    }

    /**
     * 新增对账单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/addAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statementsAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/add", $body, $query, $extra);
    }

    /**
     * 订单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementsAddedController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function settlementsAddedPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/settlementsAdded/paging", $body, $query, $extra);
    }

    /**
     * 订单分页导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementsAddedController/exportAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function settlementsAddedExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/settlementsAdded/export", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/RenewalSettingsController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalSettingsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalSettings/update", $body, $query, $extra);
    }

    /**
     * 审核列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DirectorController/auditListingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function auditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/director/auditListing", $body, $query, $extra);
    }

    /**
     * 在线开票协议
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OnlineInvoiceProtocolController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function onlineInvoiceProtocolCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/onlineInvoiceProtocol/create", $body, $query, $extra);
    }

    /**
     * 结算单订单扣率级汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/ordersSummaryAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statementOrdersSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/ordersSummary", $body, $query, $extra);
    }

    /**
     * 结算单柱状图
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/barGraphAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statementBarGraph($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/barGraph", $body, $query, $extra);
    }

    /**
     * 资金付款核算单位汇总查询
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/CapitalPaymentController/unitSummaryAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function capitalPaymentUnitSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/capitalPayment/unitSummary", $body, $query, $extra);
    }

    /**
     * 开票单发票分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/billPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function invoiceBillPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/billPaging", $body, $query, $extra);
    }

    /**
     * 申请
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeBillController/ApplyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeBillApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeBill/apply", $body, $query, $extra);
    }
}
