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
     * @return ClientResponseInterface
     */
    public function addBill($body)
    {
        return $this->restful("POST", "/bill/add", $body);
    }

    /**
     * 导出商品明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsDetailsExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billGoodsDetailExport($body)
    {
        return $this->restful("POST", "/bill/goodsDetailExport", $body);
    }

    /**
     * 开票信息商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/billGoodsPaging", $body);
    }

    /**
     * 更具投保id查询开票单已用多少投保金额
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billInsureAmount($body)
    {
        return $this->restful("POST", "/bill/billInsureAmount", $body);
    }

    /**
     * 开票单投保id分组信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureIdGroupAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billInsureIdGroup($body)
    {
        return $this->restful("POST", "/bill/billInsureIdGroup", $body);
    }

    /**
     * 开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billInsureListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billInsureList($body)
    {
        return $this->restful("POST", "/bill/billInsureList", $body);
    }

    /**
     * 导出关联订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billOrderExport($body)
    {
        return $this->restful("POST", "/bill/billOrderExport", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/billOrderPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billOrderPaging($body)
    {
        return $this->restful("POST", "/bill/billOrderPaging", $body);
    }

    /**
     * 预生成对账单下的项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/buildAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function buildStatementProject($body)
    {
        return $this->restful("POST", "/project/build", $body);
    }

    /**
     * 编辑开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function editBill($body)
    {
        return $this->restful("POST", "/bill/edit", $body);
    }

    /**
     * 导出商品清单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillGoodsListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportBillGoodsList($body)
    {
        return $this->restful("POST", "/bill/exportBillGoodsList", $body);
    }

    /**
     * exportBillOrderListAction()
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportBillOrderListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportBillOrderList($body)
    {
        return $this->restful("POST", "/bill/exportBillOrderList", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/exportMemberPagingSqlAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportMemberPagingSql($body)
    {
        return $this->restful("POST", "/bill/exportMemberPagingSql", $body);
    }

    /**
     * 导出指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/exportStatementGoodsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportStatementGoods($body)
    {
        return $this->restful("POST", "/settlement/exportStatementGoods", $body);
    }

    /**
     * 获取开票信息检测结果
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/checkAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getBillCheckResult($body)
    {
        return $this->restful("POST", "/bill/check", $body);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getBillDetail($body)
    {
        return $this->restful("POST", "/bill/detail", $body);
    }

    /**
     * 获取开票单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getBillList($body)
    {
        return $this->restful("POST", "/bill/list", $body);
    }

    /**
     * 开票单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getBillPaging($body)
    {
        return $this->restful("POST", "/bill/paging", $body);
    }

    /**
     * 开票单列表汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/summaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getBillSummary($body)
    {
        return $this->restful("POST", "/bill/summary", $body);
    }

    /**
     * 数据中心订单明细导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDataOrdersExport($body)
    {
        return $this->restful("POST", "/data/ordersExport", $body);
    }

    /**
     * 订单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/ordersPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDataOrdersPaging($body)
    {
        return $this->restful("POST", "/data/ordersPaging", $body);
    }

    /**
     * 直付应结账期表导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDirectExport($body)
    {
        return $this->restful("POST", "/data/directExport", $body);
    }

    /**
     * 直付应结账期表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDirectPaging($body)
    {
        return $this->restful("POST", "/data/directPaging", $body);
    }

    /**
     * 连锁直付结算信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDirectSettlementExport($body)
    {
        return $this->restful("POST", "/data/directSettlementExport", $body);
    }

    /**
     * 连锁直付结算信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataController/directSettlementPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDirectSettlementPaging($body)
    {
        return $this->restful("POST", "/data/directSettlementPaging", $body);
    }

    /**
     * 商品明细汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/goodsListSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getGoodsListSummary($body)
    {
        return $this->restful("POST", "/bill/goodsListSummary", $body);
    }

    /**
     * 获取对账单项目列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getProjectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 获取对账单项目分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 获取销售清单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getSaleGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/saleGoodsPaging", $body);
    }

    /**
     * 销售清单汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleListSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getSaleListSummary($body)
    {
        return $this->restful("POST", "/bill/saleListSummary", $body);
    }

    /**
     * 获取指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function goods($body)
    {
        return $this->restful("POST", "/partner/goods", $body);
    }

    /**
     * 导出指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/goodsExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function goodsExport($body)
    {
        return $this->restful("POST", "/partner/goodsExport", $body);
    }

    /**
     * 初始化生成对账单订单数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/initStatementOrdersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function initStatementOrders($body)
    {
        return $this->restful("POST", "/settlement/initStatementOrders", $body);
    }

    /**
     * 初始化对比后生成对账单订单数据
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/initCompareOrdersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function initCompareOrders($body)
    {
        return $this->restful("POST", "/settlement/initCompareOrders", $body);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/memberPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberPaging($body)
    {
        return $this->restful("POST", "/bill/memberPaging", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful("POST", "/bill/orderDetail", $body);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderGoodsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderGoods($body)
    {
        return $this->restful("POST", "/settlement/orderGoods", $body);
    }

    /**
     * 订单信息商品列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/orderGoodsPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderGoodsPaging($body)
    {
        return $this->restful("POST", "/bill/orderGoodsPaging", $body);
    }

    /**
     * 获取订单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/orderPayMethodAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderPayMethod($body)
    {
        return $this->restful("POST", "/settlement/orderPayMethod", $body);
    }

    /**
     * 获取结算单订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/ordersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orders($body)
    {
        return $this->restful("POST", "/settlement/orders", $body);
    }

    /**
     * 获取指定连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersCountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function ordersCount($body)
    {
        return $this->restful("POST", "/partner/ordersCount", $body);
    }

    /**
     * 导出结算单订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/ordersExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function ordersExport($body)
    {
        return $this->restful("POST", "/settlement/ordersExport", $body);
    }

    /**
     * 获取连锁订单统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/partnerCountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerCount($body)
    {
        return $this->restful("POST", "/partner/partnerCount", $body);
    }

    /**
     * 处理连锁全部订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerHandleAll($body)
    {
        return $this->restful("POST", "/partner/handleAll", $body);
    }

    /**
     * 处理所有异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleAllExceptionAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerHandleAllException($body)
    {
        return $this->restful("POST", "/partner/handleAllException", $body);
    }

    /**
     * 处理连锁异常订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/handleExceptionAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerHandleException($body)
    {
        return $this->restful("POST", "/partner/handleException", $body);
    }

    /**
     * 获取指定连锁订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/ordersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerOrders($body)
    {
        return $this->restful("POST", "/partner/orders", $body);
    }

    /**
     * 直付数据处理分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSituationPaging($body)
    {
        return $this->restful("POST", "/partner/situationPaging", $body);
    }

    /**
     * 直付数据处理分页汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/situationSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSituationSummary($body)
    {
        return $this->restful("POST", "/partner/situationSummary", $body);
    }

    /**
     * 检查队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/checkAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function queueCheck($body)
    {
        return $this->restful("POST", "/queue/check", $body);
    }

    /**
     * 处理队列
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/QueueController/handleAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function queueHandle($body)
    {
        return $this->restful("POST", "/queue/handle", $body);
    }

    /**
     * 根据对账单号把当指定账单下的订单重置为未绑定对账单的订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function resetSettlements($body)
    {
        return $this->restful("POST", "/settlement/resetSettlements", $body);
    }

    /**
     * 根据范围重新更新settlements归属的开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/resetSettlementsBillNoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function resetSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/resetSettlementsBillNo", $body);
    }

    /**
     * 导出销售清单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/saleGoodsExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function saleGoodsExport($body)
    {
        return $this->restful("POST", "/bill/saleGoodsExport", $body);
    }

    /**
     * 读取配置
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/indexAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function settingIndex($body)
    {
        return $this->restful("POST", "/setting/index", $body);
    }

    /**
     * 保存配置接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettingController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function settingUpdate($body)
    {
        return $this->restful("POST", "/setting/update", $body);
    }

    /**
     * 获取指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementGoodsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statementGoods($body)
    {
        return $this->restful("POST", "/settlement/statementGoods", $body);
    }

    /**
     * 获取结算单结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/statementPayMethodAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statementPayMethod($body)
    {
        return $this->restful("POST", "/settlement/statementPayMethod", $body);
    }

    /**
     * 提交开票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/submitBillAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function submitBill($body)
    {
        return $this->restful("POST", "/bill/submitBill", $body);
    }

    /**
     * 更新开票单信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/bill/update", $body);
    }

    /**
     * 开发票时更新开票单状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateBillStatusToInvoice($body)
    {
        return $this->restful("POST", "/bill/updateBillStatusToInvoice", $body);
    }

    /**
     * 更新对账单下订单的属性接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateSettlement($body)
    {
        return $this->restful("POST", "/settlement/updateSettlement", $body);
    }

    /**
     * 更新对账单下订单的开票单号接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementsBillNoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateSettlementsBillNo($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementsBillNo", $body);
    }

    /**
     * 更新对账单下订单的状态接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/updateSettlementStatusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateSettlementStatus($body)
    {
        return $this->restful("POST", "/settlement/updateSettlementStatus", $body);
    }

    /**
     * 添加理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/addClaimAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addClaim($body)
    {
        return $this->restful("POST", "/claim/add", $body);
    }

    /**
     * 撤销理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/cancelAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cancelClaim($body)
    {
        return $this->restful("POST", "/claim/cancel", $body);
    }

    /**
     * 提交理赔
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/commitAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function commitClaim($body)
    {
        return $this->restful("POST", "/claim/commit", $body);
    }

    /**
     * 赔付完成
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/completeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function completeClaim($body)
    {
        return $this->restful("POST", "/claim/complete", $body);
    }

    /**
     * 理赔开票单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/billPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimBillPaging($body)
    {
        return $this->restful("POST", "/claim/billPaging", $body);
    }

    /**
     * 理赔单详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimDetail($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 商品明细分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/goodsPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimGoodsPaging($body)
    {
        return $this->restful("POST", "/claim/goodsPaging", $body);
    }

    /**
     * 理赔发票分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/invoicePagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimInvoicePaging($body)
    {
        return $this->restful("POST", "/claim/invoicePaging", $body);
    }

    /**
     * 理赔操作记录分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/logPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimLogPaging($body)
    {
        return $this->restful("POST", "/claim/logPaging", $body);
    }

    /**
     * 理赔关联订单商品汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderGoodsSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimOrderGoodsSummary($body)
    {
        return $this->restful("POST", "/claim/orderGoodsSummary", $body);
    }

    /**
     * 订单汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/orderPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimOrderPaging($body)
    {
        return $this->restful("POST", "/claim/orderPaging", $body);
    }

    /**
     * 理赔单分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimPaging($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 添加/编辑开票时的汇总信息
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/relateSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimRelateSummary($body)
    {
        return $this->restful("POST", "/claim/relateSummary", $body);
    }

    /**
     * 理赔汇总分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimReportPaging($body)
    {
        return $this->restful("POST", "/claim/reportPaging", $body);
    }

    /**
     * 理赔汇总统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/claimReportSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getClaimReportSummary($body)
    {
        return $this->restful("POST", "/claim/reportSummary", $body);
    }

    /**
     * 一键全部添加
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoAllAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function setClaimNoAll($body)
    {
        return $this->restful("POST", "/claim/setClaimNoAll", $body);
    }

    /**
     * 批量添加理赔单与开票单关联
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/setClaimNoByBillNosAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function setClaimNoByBillNos($body)
    {
        return $this->restful("POST", "/claim/setClaimNoByBillNos", $body);
    }

    /**
     * 导出理赔商品
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportGoodsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportClaimGoods($body)
    {
        return $this->restful("POST", "/claim/exportGoods", $body);
    }

    /**
     * 导出理赔发票
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportInvoiceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportClaimInvoice($body)
    {
        return $this->restful("POST", "/claim/exportInvoice", $body);
    }

    /**
     * 导出理赔订单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportOrdersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportClaimOrders($body)
    {
        return $this->restful("POST", "/claim/exportOrders", $body);
    }

    /**
     * 导出理赔汇总列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/exportReportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportClaimReport($body)
    {
        return $this->restful("POST", "/claim/exportReport", $body);
    }

    /**
     * 检测理赔导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/checkClaimExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function checkClaimExport($body)
    {
        return $this->restful("POST", "/claim/checkClaimExport", $body);
    }

    /**
     * 重新处理理赔单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/rehandleClaimAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function rehandleClaim($body)
    {
        return $this->restful("POST", "/claim/rehandleClaim", $body);
    }

    /**
     * 理赔单理赔错误日志分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ClaimController/errorLogPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function claimErrorLogPaging($body)
    {
        return $this->restful("POST", "/claim/errorLogPaging", $body);
    }

    /**
     * 获取结算单分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getStatementsPaging($body)
    {
        return $this->restful("POST", "/statements/paging", $body);
    }

    /**
     * 获取结算单明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getStatementsDetail($body)
    {
        return $this->restful("POST", "/statements/detail", $body);
    }

    /**
     * 连锁结算月月视图
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/periodSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerPeriodSummary($body)
    {
        return $this->restful("POST", "/partner/periodSummary", $body);
    }

    /**
     * 获取结算数据支付方式接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementPayMethodAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementPayMethod($body)
    {
        return $this->restful("POST", "/partner/settlementPayMethod", $body);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementTotalAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementTotal($body)
    {
        return $this->restful("POST", "/partner/settlementTotal", $body);
    }

    /**
     * 结算订单信息导出（含商品明细）
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementExport($body)
    {
        return $this->restful("POST", "/partner/settlementExport", $body);
    }

    /**
     * 获取结算流程统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementStatisticsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementStatistics($body)
    {
        return $this->restful("POST", "/partner/settlementStatistics", $body);
    }

    /**
     * 连锁更新订单的状态接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/updateSettlementStatusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerUpdateSettlementStatus($body)
    {
        return $this->restful("POST", "/partner/updateSettlementStatus", $body);
    }

    /**
     * 连锁结算订单数量
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementCountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementCount($body)
    {
        return $this->restful("POST", "/partner/settlementCount", $body);
    }

    /**
     * 添加获取对账单操作日志记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/addLogAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addStatementLog($body)
    {
        return $this->restful("POST", "/statements/addLog", $body);
    }

    /**
     * 获取对账单操作日志记录明细
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getStatementLogDetail($body)
    {
        return $this->restful("POST", "/statements/logDetail", $body);
    }

    /**
     * 获取对账单操作日志记录列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/logListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getStatementLogList($body)
    {
        return $this->restful("POST", "/statements/logList", $body);
    }

    /**
     * 连锁结算商品信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementGoodsExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementGoodsExport($body)
    {
        return $this->restful("POST", "/partner/settlementGoodsExport", $body);
    }

    /**
     * 连锁结算订单信息导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PartnerController/settlementOrdersExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partnerSettlementOrdersExport($body)
    {
        return $this->restful("POST", "/partner/settlementOrdersExport", $body);
    }

    /**
     * 获取连锁发起结算权限
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getOrganizeAuthorityDetail($body)
    {
        return $this->restful("POST", "/organizeAuthority/detail", $body);
    }

    /**
     * 添加发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/addDistributionAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/addDistribution", $body);
    }

    /**
     * 根据开票单号获取订单列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/getDetailByBillNoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDetailByBillNo($body)
    {
        return $this->restful("POST", "/settlement/getDetailByBillNo", $body);
    }

    /**
     * 删除发票分配记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/deleteDistributionAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function deleteInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoice/deleteDistribution", $body);
    }

    /**
     * 通过订单No获取发票分配情况
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/InvoiceController/getDistributionDetailByOrderNoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getInvoiceDistributionDetailByOrderNo($body)
    {
        return $this->restful("POST", "/invoice/getDistributionDetailByOrderNo", $body);
    }

    /**
     * 导出指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/goodsExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportGoodsExport($body)
    {
        return $this->restful("POST", "/report/goodsExport", $body);
    }

    /**
     * 获取指定连锁订单的商品列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/goodsListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportGoodsList($body)
    {
        return $this->restful("POST", "/report/goodsList", $body);
    }

    /**
     * 导出直付订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/ordersExportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportOrdersExport($body)
    {
        return $this->restful("POST", "/report/ordersExport", $body);
    }

    /**
     * 直付订单列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/ordersAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportOrdersList($body)
    {
        return $this->restful("POST", "/report/ordersList", $body);
    }

    /**
     * 优惠金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumDiscountAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumDiscountAmount($body)
    {
        return $this->restful("POST", "/report/sumDiscountAmount", $body);
    }

    /**
     * 直付金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumEquityAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumEquityAmount($body)
    {
        return $this->restful("POST", "/report/sumEquityAmount", $body);
    }

    /**
     * 直付结算金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumEquityStatementAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumEquityStatementAmount($body)
    {
        return $this->restful("POST", "/report/sumEquityStatementAmount", $body);
    }

    /**
     * 商品数量统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumGoodsQuantityAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumGoodsQuantity($body)
    {
        return $this->restful("POST", "/report/sumGoodsQuantity", $body);
    }

    /**
     * 订单总额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumOrderAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumOrderAmount($body)
    {
        return $this->restful("POST", "/report/sumOrderAmount", $body);
    }

    /**
     * 自付到药联统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumPayAmountToUnionDrugAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumPayAmountToUnionDrug($body)
    {
        return $this->restful("POST", "/report/sumPayAmountToUnionDrug", $body);
    }

    /**
     * 自付到商家统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumPayAmountToVendorAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumPayAmountToVendor($body)
    {
        return $this->restful("POST", "/report/sumPayAmountToVendor", $body);
    }

    /**
     * 本次结算金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/sumSettlementAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportSumSettlementAmount($body)
    {
        return $this->restful("POST", "/report/sumSettlementAmount", $body);
    }

    /**
     * 结算审核汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementAuditSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getSettlementAuditSummary($body)
    {
        return $this->restful("POST", "/report/settlementAuditSummary", $body);
    }

    /**
     * 结算开票汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementInvoiceSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getSettlementInvoiceSummary($body)
    {
        return $this->restful("POST", "/report/settlementInvoiceSummary", $body);
    }

    /**
     * 结算汇总
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ReportController/settlementSummaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getSettlementSummary($body)
    {
        return $this->restful("POST", "/report/settlementSummary", $body);
    }

    /**
     * 添加付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paymentAdd($body)
    {
        return $this->restful("POST", "/payment/add", $body);
    }

    /**
     * 删除付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/deleteAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paymentDelete($body)
    {
        return $this->restful("POST", "/payment/delete", $body);
    }

    /**
     * 获取付款记录详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paymentDetail($body)
    {
        return $this->restful("POST", "/payment/detail", $body);
    }

    /**
     * 修改付款记录
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paymentEdit($body)
    {
        return $this->restful("POST", "/payment/edit", $body);
    }

    /**
     * 付款记录分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PaymentController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paymentPaging($body)
    {
        return $this->restful("POST", "/payment/paging", $body);
    }

    /**
     * 导出增值服务明细列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/exportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsExport($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/export", $body);
    }

    /**
     * 增值服务明细列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsPaging($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/paging", $body);
    }

    /**
     * 优惠金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumFreePriceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsSumFreePrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumFreePrice", $body);
    }

    /**
     * 资金池扣减金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumOpFundAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsSumOpFund($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumOpFund", $body);
    }

    /**
     * 商品数量统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumQuantityAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsSumQuantity($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumQuantity", $body);
    }

    /**
     * 实付金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumSalePriceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsSumSalePrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumSalePrice", $body);
    }

    /**
     * 商品总额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/ServiceDetailStatisticsController/sumTotalPriceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function serviceDetailStatisticsSumTotalPrice($body)
    {
        return $this->restful("POST", "/serviceDetailStatistics/sumTotalPrice", $body);
    }

    /**
     * 资金池流水列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsPaging($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/paging", $body);
    }

    /**
     * 导出资金池流水列表接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/exportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsExport($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/export", $body);
    }

    /**
     * 期初金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumOriginFundAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsSumOriginFund($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumOriginFund", $body);
    }

    /**
     * 期末余额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumFinalFundAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsSumFinalFund($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumFinalFund", $body);
    }

    /**
     * 收入金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumIncomeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsSumIncome($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumIncome", $body);
    }

    /**
     * 支出金额统计接口
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/PoolDetailStatisticsController/sumOutcomeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function poolDetailStatisticsSumOutcome($body)
    {
        return $this->restful("POST", "/poolDetailStatistics/sumOutcome", $body);
    }

    /**
     * 凯撒解密算法
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataSecureController/edcodeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function dataSecureDecode($body)
    {
        return $this->restful("POST", "/dataSecure/decode", $body);
    }

    /**
     * 凯撒加密算法
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/DataSecureController/encodeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function dataSecureEncode($body)
    {
        return $this->restful("POST", "/dataSecure/encode", $body);
    }

    /**
     * 结算单统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/summaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statementSummary($body)
    {
        return $this->restful("POST", "/statements/summary", $body);
    }

    /**
     * 开始理赔结算单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/summaryAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statementStartClaim($body)
    {
        return $this->restful("POST", "/statements/startClaim", $body);
    }

    /**
     * 继续理赔结算单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/StatementsController/claimContinueAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statementClaimContinue($body)
    {
        return $this->restful("POST", "/statements/claimContinue", $body);
    }

    /**
     * 对账单理赔处理
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/claimStatementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskClaimStatement($body)
    {
        return $this->restful("POST", "/task/claimStatement", $body);
    }

    /**
     * 生成开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/createBillAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskCreateBill($body)
    {
        return $this->restful("POST", "/task/createBill", $body);
    }

    /**
     * 跑统计
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/createSettlementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskCreateSettlement($body)
    {
        return $this->restful("POST", "/task/createSettlement", $body);
    }

    /**
     * 关联开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/relateBillAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskRelateBill($body)
    {
        return $this->restful("POST", "/task/relateBill", $body);
    }

    /**
     * 继续关联开票单
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/relateBillContinueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskRelateBillContinue($body)
    {
        return $this->restful("POST", "/task/relateBillContinue", $body);
    }

    /**
     * 把问题订单重置执行状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/TaskController/resetSettlementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskResetSettlement($body)
    {
        return $this->restful("POST", "/task/resetSettlement", $body);
    }

    /**
     * 对账订单快速比对导出
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/compareExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settlementsCompareExport($body)
    {
        return $this->restful("POST", "/settlement/compareExport", $body);
    }

    /**
     * 对账订单快速比对分页
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/SettlementController/comparePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settlementsComparePaging($body)
    {
        return $this->restful("POST", "/settlement/comparePaging", $body);
    }
}

