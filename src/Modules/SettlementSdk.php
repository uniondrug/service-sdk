<?php
/**
 * @author liyang
 * @date   2018-10-29
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 财务结算计算模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'settlement';

    /**
     * 创建开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addBill($body)
    {
        return $this->restful("POST", "/bill/add", $body);
    }

    /**
     * 导出商品明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsDetailsExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billGoodsDetailExport($body)
    {
        return $this->restful("POST", "/bill/goodsDetailExport", $body);
    }

    /**
     * 开票信息商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/billGoodsPaging", $body);
    }

    /**
     * 更具投保id查询开票单已用多少投保金额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billInsureAmount($body)
    {
        return $this->restful("POST", "/bill/billInsureAmount", $body);
    }

    /**
     * 开票单投保id分组信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureIdGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billInsureIdGroup($body)
    {
        return $this->restful("POST", "/bill/billInsureIdGroup", $body);
    }

    /**
     * 开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billInsureList($body)
    {
        return $this->restful("POST", "/bill/billInsureList", $body);
    }

    /**
     * 导出关联订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billOrderExport($body)
    {
        return $this->restful("POST", "/bill/billOrderExport", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function billOrderPaging($body)
    {
        return $this->restful("POST", "/bill/billOrderPaging", $body);
    }

    /**
     * 预生成对账单下的项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/buildAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function buildStatementProject($body)
    {
        return $this->restful("POST", "/project/build", $body);
    }

    /**
     * 编辑开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editBill($body)
    {
        return $this->restful("POST", "/bill/edit", $body);
    }

    /**
     * 导出商品清单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillGoodsListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportBillGoodsList($body)
    {
        return $this->restful("POST", "/bill/exportBillGoodsList", $body);
    }

    /**
     * exportBillOrderListAction()
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillOrderListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportBillOrderList($body)
    {
        return $this->restful("POST", "/bill/exportBillOrderList", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportMemberPagingSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportMemberPagingSql($body)
    {
        return $this->restful("POST", "/bill/exportMemberPagingSql", $body);
    }

    /**
     * 导出指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/exportStatementGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportStatementGoods($body)
    {
        return $this->restful("POST", "/settlement/exportStatementGoods", $body);
    }

    /**
     * 获取开票信息检测结果
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBillCheckResult($body)
    {
        return $this->restful("POST", "/bill/check", $body);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBillDetail($body)
    {
        return $this->restful("POST", "/bill/detail", $body);
    }

    /**
     * 获取开票单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBillList($body)
    {
        return $this->restful("POST", "/bill/list", $body);
    }

    /**
     * 开票单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBillPaging($body)
    {
        return $this->restful("POST", "/bill/paging", $body);
    }

    /**
     * 开票单列表汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/summaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBillSummary($body)
    {
        return $this->restful("POST", "/bill/summary", $body);
    }

    /**
     * 数据中心订单明细导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDataOrdersExport($body)
    {
        return $this->restful("POST", "/data/ordersExport", $body);
    }

    /**
     * 订单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDataOrdersPaging($body)
    {
        return $this->restful("POST", "/data/ordersPaging", $body);
    }

    /**
     * 直付应结账期表导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDirectExport($body)
    {
        return $this->restful("POST", "/data/directExport", $body);
    }

    /**
     * 直付应结账期表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDirectPaging($body)
    {
        return $this->restful("POST", "/data/directPaging", $body);
    }

    /**
     * 连锁直付结算信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDirectSettlementExport($body)
    {
        return $this->restful("POST", "/data/directSettlementExport", $body);
    }

    /**
     * 连锁直付结算信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDirectSettlementPaging($body)
    {
        return $this->restful("POST", "/data/directSettlementPaging", $body);
    }

    /**
     * 商品明细汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsListSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsListSummary($body)
    {
        return $this->restful("POST", "/bill/goodsListSummary", $body);
    }

    /**
     * 获取对账单项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 获取对账单项目分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 获取销售清单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSaleGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/saleGoodsPaging", $body);
    }

    /**
     * 销售清单汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleListSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSaleListSummary($body)
    {
        return $this->restful("POST", "/bill/saleListSummary", $body);
    }

    /**
     * 获取指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goods($body)
    {
        return $this->restful("POST", "/partner/goods", $body);
    }

    /**
     * 导出指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsExport($body)
    {
        return $this->restful("POST", "/partner/goodsExport", $body);
    }

    /**
     * 初始化生成对账单订单数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/initStatementOrdersAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function initStatementOrders($body)
    {
        return $this->restful("POST", "/settlement/initStatementOrders", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/memberPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberPaging($body)
    {
        return $this->restful("POST", "/bill/memberPaging", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful("POST", "/bill/orderDetail", $body);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGoods($body)
    {
        return $this->restful("POST", "/settlement/orderGoods", $body);
    }

    /**
     * 订单信息商品列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/orderGoodsPaging", $body);
    }

    /**
     * 获取订单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderPayMethodAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderPayMethod($body)
    {
        return $this->restful("POST", "/settlement/orderPayMethod", $body);
    }

    /**
     * 获取结算单订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/ordersAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orders($body)
    {
        return $this->restful("POST", "/settlement/orders", $body);
    }

    /**
     * 获取指定连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ordersCount($body)
    {
        return $this->restful("POST", "/partner/ordersCount", $body);
    }

    /**
     * 导出结算单订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/ordersExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ordersExport($body)
    {
        return $this->restful("POST", "/settlement/ordersExport", $body);
    }

    /**
     * 获取连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/partnerCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerCount($body)
    {
        return $this->restful("POST", "/partner/partnerCount", $body);
    }

    /**
     * 处理连锁全部订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerHandleAll($body)
    {
        return $this->restful("POST", "/partner/handleAll", $body);
    }

    /**
     * 处理所有异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllExceptionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerHandleAllException($body)
    {
        return $this->restful("POST", "/partner/handleAllException", $body);
    }

    /**
     * 处理连锁异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleExceptionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerHandleException($body)
    {
        return $this->restful("POST", "/partner/handleException", $body);
    }

    /**
     * 获取指定连锁订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerOrders($body)
    {
        return $this->restful("POST", "/partner/orders", $body);
    }

    /**
     * 直付数据处理分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSituationPaging($body)
    {
        return $this->restful("POST", "/partner/situationPaging", $body);
    }

    /**
     * 直付数据处理分页汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSituationSummary($body)
    {
        return $this->restful("POST", "/partner/situationSummary", $body);
    }

    /**
     * 检查队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queueCheck($body)
    {
        return $this->restful("POST", "/queue/check", $body);
    }

    /**
     * 处理队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/handleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queueHandle($body)
    {
        return $this->restful("POST", "/queue/handle", $body);
    }

    /**
     * 根据对账单号把当指定账单下的订单重置为未绑定对账单的订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resetSettlements($body)
    {
        return $this->restful("POST", "/settlement/resetSettlements", $body);
    }

    /**
     * 根据范围重新更新settlements归属的开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resetSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/resetSettlementsBillNo", $body);
    }

    /**
     * 导出销售清单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function saleGoodsExport($body)
    {
        return $this->restful("POST", "/bill/saleGoodsExport", $body);
    }

    /**
     * 读取配置
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingIndex($body)
    {
        return $this->restful("POST", "/setting/index", $body);
    }

    /**
     * 保存配置接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingUpdate($body)
    {
        return $this->restful("POST", "/setting/update", $body);
    }

    /**
     * 获取指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statementGoods($body)
    {
        return $this->restful("POST", "/settlement/statementGoods", $body);
    }

    /**
     * 获取结算单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementPayMethodAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statementPayMethod($body)
    {
        return $this->restful("POST", "/settlement/statementPayMethod", $body);
    }

    /**
     * 提交开票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/submitBillAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function submitBill($body)
    {
        return $this->restful("POST", "/bill/submitBill", $body);
    }

    /**
     * 更新开票单信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/bill/update", $body);
    }

    /**
     * 开发票时更新开票单状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateBillStatusToInvoice($body)
    {
        return $this->restful("POST", "/bill/updateBillStatusToInvoice", $body);
    }

    /**
     * 更新对账单下订单的属性接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateSettlement($body)
    {
        return $this->restful("POST", "/settlement/updateSettlement", $body);
    }

    /**
     * 更新对账单下订单的开票单号接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementsBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementsBillNo", $body);
    }

    /**
     * 更新对账单下订单的状态接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateSettlementStatus($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementStatus", $body);
    }

    /**
     * 添加理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/addClaimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addClaim($body)
    {
        return $this->restful("POST", "/claim/add", $body);
    }

    /**
     * 撤销理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelClaim($body)
    {
        return $this->restful("POST", "/claim/cancel", $body);
    }

    /**
     * 提交理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/commitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function commitClaim($body)
    {
        return $this->restful("POST", "/claim/commit", $body);
    }

    /**
     * 赔付完成
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/completeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function completeClaim($body)
    {
        return $this->restful("POST", "/claim/complete", $body);
    }

    /**
     * 理赔开票单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/billPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimBillPaging($body)
    {
        return $this->restful("POST", "/claim/billPaging", $body);
    }

    /**
     * 理赔单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimDetail($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/goodsPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimGoodsPaging($body)
    {
        return $this->restful("POST", "/claim/goodsPaging", $body);
    }

    /**
     * 理赔发票分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/invoicePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimInvoicePaging($body)
    {
        return $this->restful("POST", "/claim/invoicePaging", $body);
    }

    /**
     * 理赔操作记录分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/logPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimLogPaging($body)
    {
        return $this->restful("POST", "/claim/logPaging", $body);
    }

    /**
     * 理赔关联订单商品汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderGoodsSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimOrderGoodsSummary($body)
    {
        return $this->restful("POST", "/claim/orderGoodsSummary", $body);
    }

    /**
     * 订单汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimOrderPaging($body)
    {
        return $this->restful("POST", "/claim/orderPaging", $body);
    }

    /**
     * 理赔单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimPaging($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 添加/编辑开票时的汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/relateSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimRelateSummary($body)
    {
        return $this->restful("POST", "/claim/relateSummary", $body);
    }

    /**
     * 理赔汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimReportPaging($body)
    {
        return $this->restful("POST", "/claim/reportPaging", $body);
    }

    /**
     * 理赔汇总统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimReportSummary($body)
    {
        return $this->restful("POST", "/claim/reportSummary", $body);
    }

    /**
     * 一键全部添加
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setClaimNoAll($body)
    {
        return $this->restful("POST", "/claim/setClaimNoAll", $body);
    }

    /**
     * 批量添加理赔单与开票单关联
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoByBillNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setClaimNoByBillNos($body)
    {
        return $this->restful("POST", "/claim/setClaimNoByBillNos", $body);
    }

    /**
     * 导出理赔商品
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportClaimGoods($body)
    {
        return $this->restful("POST", "/claim/exportGoods", $body);
    }

    /**
     * 导出理赔发票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportClaimInvoice($body)
    {
        return $this->restful("POST", "/claim/exportInvoice", $body);
    }

    /**
     * 导出理赔订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportOrdersAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportClaimOrders($body)
    {
        return $this->restful("POST", "/claim/exportOrders", $body);
    }

    /**
     * 导出理赔汇总列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportClaimReport($body)
    {
        return $this->restful("POST", "/claim/exportReport", $body);
    }

    /**
     * 检测理赔导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/checkClaimExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkClaimExport($body)
    {
        return $this->restful("POST", "/claim/checkClaimExport", $body);
    }

    /**
     * 重新处理理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/rehandleClaimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rehandleClaim($body)
    {
        return $this->restful("POST", "/claim/rehandleClaim", $body);
    }

    /**
     * 理赔单理赔错误日志分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/errorLogPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimErrorLogPaging($body)
    {
        return $this->restful("POST", "/claim/errorLogPaging", $body);
    }

    /**
     * 获取结算单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStatementsPaging($body)
    {
        return $this->restful("POST", "/statements/paging", $body);
    }

    /**
     * 连锁结算月月视图
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/periodSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerPeriodSummary($body)
    {
        return $this->restful("POST", "/partner/periodSummary", $body);
    }

    /**
     * 获取结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementPayMethodAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementPayMethod($body)
    {
        return $this->restful("POST", "/partner/settlementPayMethod", $body);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementTotalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementTotal($body)
    {
        return $this->restful("POST", "/partner/settlementTotal", $body);
    }

    /**
     * 结算订单信息导出（含商品明细）
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementExport($body)
    {
        return $this->restful("POST", "/partner/settlementExport", $body);
    }

    /**
     * 获取结算流程统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementStatisticsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementStatistics($body)
    {
        return $this->restful("POST", "/partner/settlementStatistics", $body);
    }

    /**
     * 连锁更新订单的状态接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/updateSettlementStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerUpdateSettlementStatus($body)
    {
        return $this->restful("POST", "/partner/updateSettlementStatus", $body);
    }

    /**
     * 连锁结算订单数量
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementCount($body)
    {
        return $this->restful("POST", "/partner/settlementCount", $body);
    }

    /**
     * 添加获取对账单操作日志记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/addLogAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStatementLog($body)
    {
        return $this->restful("POST", "/statements/addLog", $body);
    }

    /**
     * 获取对账单操作日志记录明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStatementLogDetail($body)
    {
        return $this->restful("POST", "/statements/logDetail", $body);
    }

    /**
     * 获取对账单操作日志记录列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStatementLogList($body)
    {
        return $this->restful("POST", "/statements/logList", $body);
    }

    /**
     * 连锁结算商品信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementGoodsExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementGoodsExport($body)
    {
        return $this->restful("POST", "/partner/settlementGoodsExport", $body);
    }

    /**
     * 连锁结算订单信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementOrdersExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSettlementOrdersExport($body)
    {
        return $this->restful("POST", "/partner/settlementOrdersExport", $body);
    }

    /**
     * 获取连锁发起结算权限
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrganizeAuthorityDetail($body)
    {
        return $this->restful("POST", "/organizeAuthority/detail", $body);
    }

    /**
     * 添加发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/addDistributionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/addDistribution", $body);
    }

    /**
     * 根据开票单号获取订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/getDetailByBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetailByBillNo($body)
    {
        return $this->restful("POST", "/settlement/getDetailByBillNo", $body);
    }

    /**
     * 删除发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/deleteDistributionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/deleteDistribution", $body);
    }
}

