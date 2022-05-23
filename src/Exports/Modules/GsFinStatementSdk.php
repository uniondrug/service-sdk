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
 * Class GsStatementSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinStatementSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-fin-statement';

    /**
     * 直付结算单-新增
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementCreate($body)
    {
        return $this->restful("POST", "/direct/statement/create", $body);
    }

    /**
     * 直付结算单-列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPaging($body)
    {
        return $this->restful("POST", "/direct/statement/paging", $body);
    }

    /**
     * 直付结算单-导出
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementExport($body)
    {
        return $this->restful("POST", "/direct/statement/export", $body);
    }

    /**
     * 直付结算单-详情
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementDetail($body)
    {
        return $this->restful("POST", "/direct/statement/detail", $body);
    }

    /**
     * 直付结算单-审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementAuditAccept($body)
    {
        return $this->restful("POST", "/direct/statement/audit/accept", $body);
    }

    /**
     * 直付结算单-审核不通过
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementAuditRefuse($body)
    {
        return $this->restful("POST", "/direct/statement/audit/refuse", $body);
    }

    /**
     * 直付结算单-账单汇总
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPayList($body)
    {
        return $this->restful("POST", "/direct/statement/pay/list", $body);
    }

    /**
     * 直付结算单-统计列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSummaryPaging($body)
    {
        return $this->restful("POST", "/direct/statement/summary/paging", $body);
    }

    /**
     * 直付结算单-订单取消结算
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementOrderCancel($body)
    {
        return $this->restful("POST", "/direct/statement/order/cancel", $body);
    }

    /**
     * 直付结算单-订单恢复结算
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementOrderRecover($body)
    {
        return $this->restful("POST", "/direct/statement/order/recover", $body);
    }

    /**
     * 直付结算单-冻结指定核算单位可结算账期
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementDateBlock($body)
    {
        return $this->restful("POST", "/direct/statement/date/block", $body);
    }

    /**
     * 直付结算单-指定核算单位冻结账期列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementBlockList($body)
    {
        return $this->restful("POST", "/direct/statement/date/list", $body);
    }

    /**
     * 直付结算单-商业公司审核通过合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSingleAudit($body)
    {
        return $this->restful("POST", "/direct/statement/single/audit", $body);
    }

    /**
     * 直付结算单-商业公司拒绝合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSingleRefuse($body)
    {
        return $this->restful("POST", "/direct/statement/single/refuse", $body);
    }

    /**
     * 直付结算单-付款信息列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPaymentList($body)
    {
        return $this->restful("POST", "/direct/payment/list", $body);
    }

    /**
     * 直付结算单-手动创建付款单
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPaymentCreate($body)
    {
        return $this->restful("POST", "/direct/payment/create", $body);
    }

    /**
     * 直付结算单-核算单位扩展信息
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutUnitExtendInfo($body)
    {
        return $this->restful("POST", "/direct/unit/extend/info", $body);
    }

    /**
     * 直付结算单-提交开票
     * @param $body
     * @return ResponseInterface
     */
    public function directBillSubmit($body)
    {
        return $this->restful("POST", "/direct/bill/submit", $body);
    }

    /**
     * 直付结算单-可结算订单统计
     * @param $body
     * @return ResponseInterface
     */
    public function directOrderSummary($body)
    {
        return $this->restful("POST", "/direct/order/summary", $body);
    }

    /**
     * 直付结算单-结算订单统计
     * @param $body
     * @return ResponseInterface
     */
    public function directStatementSummary($body)
    {
        return $this->restful("POST", "/direct/statement/summary", $body);
    }

    /**
     * 直付结算单-结算订单统计
     * @param $body
     * @return ResponseInterface
     */
    public function directSettlementOrderSummary($body)
    {
        return $this->restful("POST", "/direct/settlement/order/summary", $body);
    }

    /**
     * 直付结算单-指定核算单位冻结账期列表
     * @param $body
     * @return ResponseInterface
     */
    public function directStatementBlockList($body)
    {
        return $this->restful("POST", "/direct/statement/block/list", $body);
    }

    /**
     * 健康服务结算-新增
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementCreate($body)
    {
        return $this->restful("POST", "/healthy/statement/create", $body);
    }

    /**
     * 健康服务结算-详情
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementDetail($body)
    {
        return $this->restful("POST", "/healthy/statement/detail", $body);
    }

    /**
     * 健康服务结算-审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementAuditAccept($body)
    {
        return $this->restful("POST", "/healthy/statement/audit/accept", $body);
    }

    /**
     * 健康服务结算-审核不通过
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementAuditRefuse($body)
    {
        return $this->restful("POST", "/healthy/statement/audit/refuse", $body);
    }

    /**
     * 健康服务结算-健康服务结算订单明细分页
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementOrderPaging($body)
    {
        return $this->restful("POST", "/healthy/settlement/paging", $body);
    }

    /**
     * 换新结算-发起
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementCreate($body)
    {
        return $this->restful("POST", "/renew/statement/create", $body);
    }

    /**
     * 换新结算-付款单列表
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementPaymentList($body)
    {
        return $this->restful("POST", "/renew/payment/list", $body);
    }

    /**
     * 换新结算-账单汇总
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementSummaryList($body)
    {
        return $this->restful("POST", "/renew/summary/list", $body);
    }

    /**
     * 换新结算-详情
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementDetail($body)
    {
        return $this->restful("POST", "/renew/statement/detail", $body);
    }

    /**
     * 换新结算-审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementAuditAccept($body)
    {
        return $this->restful("POST", "/renew/statement/audit/accept", $body);
    }

    /**
     * 换新结算-审核拒绝
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementAuditRefuse($body)
    {
        return $this->restful("POST", "/renew/statement/audit/refuse", $body);
    }

    /**
     * 换新结算-订单统计
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementSummary($body)
    {
        return $this->restful("POST", "/renew/statement/summary", $body);
    }

    /**
     * 服务补贴结算-付款进度
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatementPaymentProgress($body)
    {
        return $this->restful("POST", "/subsidy/payment/progress", $body);
    }

    /**
     * 服务补贴结算-付款单列表
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatementPaymentList($body)
    {
        return $this->restful("POST", "/subsidy/payment/paging", $body);
    }

    /**
     * 服务补贴结算-详情
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatementDetail($body)
    {
        return $this->restful("POST", "/subsidy/statement/detail", $body);
    }

    /**
     * 应付结算单-详情
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementDetail($body)
    {
        return $this->restful("POST", "/payout/statement/detail", $body);
    }

    /**
     * 应付结算单-确认对账函
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementConfirm($body)
    {
        return $this->restful("POST", "/payout/statement/pdf/confirm", $body);
    }

    /**
     * 应付结算单-付款单列表
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementPaymentPaging($body)
    {
        return $this->restful("POST", "/payout/payment/paging", $body);
    }

    /**
     * 应付结算单-付款进度
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementPaymentProgress($body)
    {
        return $this->restful("POST", "/payout/payment/progress", $body);
    }

    /**
     * 结算单-操作日志列表
     * @param $body
     * @return ResponseInterface
     */
    public function statementLogPaging($body)
    {
        return $this->restful("POST", "/statement/log/paging", $body);
    }

    /**
     * 直付结算单-创建开票单
     * @param $body
     * @return ResponseInterface
     */
    public function directBillCreate($body)
    {
        return $this->restful("POST", "/direct/create/bill", $body);
    }

    /**
     * 直付结算单-手动创建开票单
     * @param $body
     * @return ResponseInterface
     */
    public function directManualBillCreate($body)
    {
        return $this->restful("POST", "/direct/manual/create/bill", $body);
    }

    /**
     * 查询子结算单结算明细
     * @param $body
     * @return ResponseInterface
     */
    public function directSingleSettlementList($body)
    {
        return $this->restful("POST", "/direct/single/settlement/list", $body);
    }

    /**
     * 拒绝合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directStatementSingleRefuse($body)
    {
        return $this->restful("POST", "/direct/statement/single/refuse", $body);
    }

    /**
     * 拒绝合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directStatementSingleAudit($body)
    {
        return $this->restful("POST", "/direct/statement/single/audit", $body);
    }

    /**
     * 采购结算单明细分页
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseSettlementPaging($body)
    {
        return $this->restful("POST", "/purchase/settlement/paging", $body);
    }

    /**
     * 采购结算单详情
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseStatementDetail($body)
    {
        return $this->restful("POST", "/purchase/statement/detail", $body);
    }

    /**
     * 根据结算单号获取开票单号
     * @param $body
     * @return ResponseInterface
     */
    public function getBillNosByStatementNo($body)
    {
        return $this->restful("POST", "/payout/statement/bills", $body);
    }

    /**
     * 直付刷订单支付日期-分页
     * @param $body
     * @return ResponseInterface
     */
    public function directOrderPayTimeChangePaging($body)
    {
        return $this->restful("POST", "/direct/order/pay/time/change/paging", $body);
    }

    /**
     * 直付刷订单支付日期-执行
     * @param $body
     * @return ResponseInterface
     */
    public function directOrderPayTimeChangeExecute($body)
    {
        return $this->restful("POST", "/direct/order/pay/time/change/execute", $body);
    }

    /**
     * 回款明细查询
     * @param $body
     * @return ResponseInterface
     */
    public function directBillCashedPaging($body)
    {
        return $this->restful("POST", "/direct/bill/cashed/paging", $body);
    }

    /**
     * 回款保司下拉
     * @param $body
     * @return ResponseInterface
     */
    public function directBillCashedInsurerList($body)
    {
        return $this->restful("POST", "/direct/bill/cashed/insurer/list", $body);
    }

    /**
     * 在线开票替换进度列表
     * @param $body
     * @return ResponseInterface
     */
    public function directBillOnlinePaging($body)
    {
        return $this->restful("POST", "/direct/bill/online/paging", $body);
    }

    /**
     * 在线开票替换失败重新执行
     * @param $body
     * @return ResponseInterface
     */
    public function directBillOnlineOperation($body)
    {
        return $this->restful("POST", "/direct/bill/online/operation", $body);
    }

    /**
     * 开票跟踪列表
     * @param $body
     * @return ResponseInterface
     */
    public function billTrackingPaging($body)
    {
        return $this->restful("POST", "/report/bill/tracking/paging", $body);
    }

    /**
     * 开票跟踪列表导出
     * @param $body
     * @return ResponseInterface
     */
    public function billTrackingExport($body)
    {
        return $this->restful("POST", "/report/bill/tracking/export", $body);
    }

    /**
     * 开票跟踪明细列表
     * @param $body
     * @return ResponseInterface
     */
    public function billTrackingDetailPaging($body)
    {
        return $this->restful("POST", "/report/bill/tracking/detail/paging", $body);
    }

    /**
     * 开票跟踪明细列表导出
     * @param $body
     * @return ResponseInterface
     */
    public function billTrackingDetailExport($body)
    {
        return $this->restful("POST", "/report/bill/tracking/detail/export", $body);
    }

    /**
     * 回款跟踪-列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportCashedPaging($body)
    {
        return $this->restful("POST", "/report/cashed/tracking/paging", $body);
    }

    /**
     * 回款跟踪-导出
     * @param $body
     * @return ResponseInterface
     */
    public function reportCashedExport($body)
    {
        return $this->restful("POST", "/report/cashed/tracking/export", $body);
    }

    /**
     * 回款跟踪-详情列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportCashedDetailPaging($body)
    {
        return $this->restful("POST", "/report/cashed/tracking/detail/paging", $body);
    }

    /**
     * 回款跟踪-详情导出
     * @param $body
     * @return ResponseInterface
     */
    public function reportCashedDetailExport($body)
    {
        return $this->restful("POST", "/report/cashed/tracking/detail/export", $body);
    }

    /**
     * 直付结算单发起开票前置校验
     * @param $body
     * @return ResponseInterface
     */
    public function directStatementCreateBillCheck($body)
    {
        return $this->restful("POST", "/direct/statement/create/bill/check", $body);
    }

    /**
     * 商家结算统计
     * @param $body
     * @return ResponseInterface
     */
    public function directUnitStatistics($body)
    {
        return $this->restful("POST", "/direct/unit/statistics", $body);
    }

    /**
     * 结算单优先投保分页
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementPaging($body)
    {
        return $this->restful("POST", "/common/claim/statement/paging", $body);
    }

    /**
     * 结算单优先投保选择
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementChoice($body)
    {
        return $this->restful("POST", "/common/claim/statement/choice", $body);
    }

    /**
     * 结算单优先投保提交
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementCommit($body)
    {
        return $this->restful("POST", "/common/claim/statement/commit", $body);
    }

    /**
     * 结算单优先投保取消
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementCancel($body)
    {
        return $this->restful("POST", "/common/claim/statement/cancel", $body);
    }

    /**
     * 结算单优先投保操作日志分页
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementLogPaging($body)
    {
        return $this->restful("POST", "/common/claim/statement/log/paging", $body);
    }

    /**
     * 结算单优先投保退回
     * @param $body
     * @return ResponseInterface
     */
    public function commonClaimStatementReturn($body)
    {
        return $this->restful("POST", "/common/claim/statement/return", $body);
    }

    /**
     * 商家首页服务补贴统计
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatistics($body)
    {
        return $this->restful("POST", "/subsidy/unit/statistics", $body);
    }

    /**
     * 服务补贴结算统计
     * @param $body
     * @return ResponseInterface
     */
    public function subsidySettleStatistics($body)
    {
        return $this->restful("POST", "/subsidy/settle/statistics", $body);
    }

    /**
     * 核算单位票据信息审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function billInfoAuditAccept($body)
    {
        return $this->restful("POST", "/mq/bill/info/audit/accept", $body);
    }

    /**
     * 核算单位银行账号信息审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function accountInfoAuditAccept($body)
    {
        return $this->restful("POST", "/mq/account/info/audit/accept", $body);
    }
}
