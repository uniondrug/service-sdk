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
 * Class JavaCoinSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaCoinSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.coin';

    /**
     * 资金流水变更详情记录分页列表
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailPaging($body)
    {
        return $this->restful("POST", "/fundRecordDetail/list", $body);
    }

    /**
     * 资金流水明细统计
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailStatistics($body)
    {
        return $this->restful("POST", "/fundRecordDetail/statistics", $body);
    }

    /**
     * 资金流水变更详情记录导出SQL
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailExportSql($body)
    {
        return $this->restful("POST", "/fundRecordDetail/exportSql", $body);
    }

    /**
     * 资金池账户
     * @param $body
     * @return ResponseInterface
     */
    public function fundAccount($body)
    {
        return $this->restful("POST", "/fundAccount/getByHolder", $body);
    }

    /**
     * 资金池充值
     * @param $body
     * @return ResponseInterface
     */
    public function updateBalance($body)
    {
        return $this->restful("POST", "/fundAccount/updateBalance", $body);
    }

    /**
     * 资金池变动流水分页列表
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordPaging($body)
    {
        return $this->restful("POST", "/fundRecord/listByAccountHolder", $body);
    }

    /**
     * 发起汇款
     * @param $body
     * @return ResponseInterface
     */
    public function bankTransferCreate($body)
    {
        return $this->restful("POST", "/bankTransfer/create", $body);
    }

    /**
     * 汇款记录查询
     * @param $body
     * @return ResponseInterface
     */
    public function bankTransferGetBySerialId($body)
    {
        return $this->restful("POST", "/bankTransfer/getBySerialId", $body);
    }

    /**
     * 分页查询银行交易流水
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountTransactionHistoryPaging($body)
    {
        return $this->restful("POST", "/bankRecord/list", $body);
    }

    /**
     * 分页查询指定银行账户的余额记录
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountBalancePaging($body)
    {
        return $this->restful("POST", "/bankBalance/listBalance", $body);
    }

    /**
     * 分页查询银行账户
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountPaging($body)
    {
        return $this->restful("POST", "/bankAccount/list", $body);
    }

    /**
     * 资金池注销余额清零
     * @param $body
     * @return ResponseInterface
     */
    public function clearBalance($body)
    {
        return $this->restful("POST", "/fundAccount/clearBalance", $body);
    }

    /**
     * 新增离线账户今日余额
     * @param $body
     * @return ResponseInterface
     */
    public function createOfflineBalance($body)
    {
        return $this->restful("POST", "/bankBalance/createOfflineTodayBalance", $body);
    }

    /**
     * 查询账户所属者列表
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountHolderList($body)
    {
        return $this->restful("POST", "/bankAccount/holderList", $body);
    }

    /**
     * 查询银行账户的总计余额
     * @param $body
     * @return ResponseInterface
     */
    public function bankBalanceStatistics($body)
    {
        return $this->restful("POST", "/bankBalance/statistics", $body);
    }

    /**
     * 查询资金池月统计
     * @param $body
     * @return ResponseInterface
     */
    public function monthPoolStatistics($body)
    {
        return $this->restful("POST", "/fundAccount/statisticsRangeDate", $body);
    }

    /**
     * 创建收款确认单
     * @param $body
     * @return ResponseInterface
     */
    public function receiptCreate($body)
    {
        return $this->restful("POST", "/receipt/create", $body);
    }

    /**
     * 收款单分页查询
     * @param $body
     * @return ResponseInterface
     */
    public function receiptPage($body)
    {
        return $this->restful("POST", "/receipt/page", $body);
    }

    /**
     * 收款单根据单号查询
     * @param $body
     * @return ResponseInterface
     */
    public function receiptGet($body)
    {
        return $this->restful("POST", "/receipt/get", $body);
    }

    /**
     * 收款单审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function receiptAuditSuccess($body)
    {
        return $this->restful("POST", "/receipt/auditSuccess", $body);
    }

    /**
     * 收款单审核
     * @param $body
     * @return ResponseInterface
     */
    public function receiptAuditFail($body)
    {
        return $this->restful("POST", "/receipt/auditFail", $body);
    }

    /**
     * 分页查询资金收款单附件
     * @param $body
     * @return ResponseInterface
     */
    public function receiptAnnexPage($body)
    {
        return $this->restful("POST", "/receiptAnnex/page", $body);
    }

    /**
     * 收款单导出
     * @param $body
     * @return ResponseInterface
     */
    public function receiptExport($body)
    {
        return $this->restful("POST", "/receipt/export", $body);
    }

    /**
     * 分页查询向药联付款的组织已认领交易记录
     * @param $body
     * @return ResponseInterface
     */
    public function bankChaimPageByPayer($body)
    {
        return $this->restful("POST", "/bankChaim/pageByPayer", $body);
    }

    /**
     * 统计实收金额
     * @param $body
     * @return ResponseInterface
     */
    public function receiptSumRealReceiveAmount($body)
    {
        return $this->restful("POST", "/receipt/sumRealReceiveAmount", $body);
    }

    /**
     * 积分提现发起申请
     * @param $body
     * @return ResponseInterface
     */
    public function integralToCashCreate($body)
    {
        return $this->restful("POST", "/integralToCash/create", $body);
    }

    /**
     * 积分提现审批操作
     * @param $body
     * @return ResponseInterface
     */
    public function integralToCashAudit($body)
    {
        return $this->restful("POST", "/integralToCash/audit", $body);
    }

    /**
     * 积分提现详情查询
     * @param $body
     * @return ResponseInterface
     */
    public function integralToCashGet($body)
    {
        return $this->restful("POST", "/integralToCash/get", $body);
    }

    /**
     * 积分提现分页查询
     * @param $body
     * @return ResponseInterface
     */
    public function integralToCashList($body)
    {
        return $this->restful("POST", "/integralToCash/list", $body);
    }

    /**
     * 积分提现导出
     * @param $body
     * @return ResponseInterface
     */
    public function integralToCashExport($body)
    {
        return $this->restful("POST", "/integralToCash/export", $body);
    }

    /**
     * 资金付款单创建
     * @param $body
     * @return ResponseInterface
     */
    public function paymentCreate($body)
    {
        return $this->restful("POST", "/payment/create", $body);
    }

    /**
     * 资金付款单修改
     * @param $body
     * @return ResponseInterface
     */
    public function paymentUpdate($body)
    {
        return $this->restful("POST", "/payment/update", $body);
    }

    /**
     * 资金付款单删除
     * @param $body
     * @return ResponseInterface
     */
    public function paymentRemove($body)
    {
        return $this->restful("POST", "/payment/remove", $body);
    }

    /**
     * 资金付款单分页查询
     * @param $body
     * @return ResponseInterface
     */
    public function paymentPage($body)
    {
        return $this->restful("POST", "/payment/page", $body);
    }

    /**
     * 资金付款单详情明细
     * @param $body
     * @return ResponseInterface
     */
    public function paymentDetail($body)
    {
        return $this->restful("POST", "/payment/detail", $body);
    }

    /**
     * 资金付款单导出
     * @param $body
     * @return ResponseInterface
     */
    public function paymentExport($body)
    {
        return $this->restful("POST", "/payment/export", $body);
    }

    /**
     * 资金付款单提交
     * @param $body
     * @return ResponseInterface
     */
    public function paymentCommit($body)
    {
        return $this->restful("POST", "/payment/commit", $body);
    }

    /**
     * 查询待提交的付款单
     * @param $body
     * @return ResponseInterface
     */
    public function paymentPageForWaitCommit($body)
    {
        return $this->restful("POST", "/payment/pageForWaitCommit", $body);
    }

    /**
     * 资金付款单审批
     * @param $body
     * @return ResponseInterface
     */
    public function paymentApprove($body)
    {
        return $this->restful("POST", "/payment/approve", $body);
    }

    /**
     * 审批人查询待其审批的付款单
     * @param $body
     * @return ResponseInterface
     */
    public function paymentPageForWaitAudit($body)
    {
        return $this->restful("POST", "/payment/pageForWaitAudit", $body);
    }

    /**
     * 资金付款单执行
     * @param $body
     * @return ResponseInterface
     */
    public function paymentExecute($body)
    {
        return $this->restful("POST", "/payment/execute", $body);
    }

    /**
     * 执行人查询待其执行的付款单
     * @param $body
     * @return ResponseInterface
     */
    public function paymentPageForWaitExecute($body)
    {
        return $this->restful("POST", "/payment/pageForWaitExecute", $body);
    }

    /**
     * 撤销付款单
     * @param $body
     * @return ResponseInterface
     */
    public function paymentNndo($body)
    {
        return $this->restful("POST", "/payment/undo", $body);
    }

    /**
     * 查询资金余额变更流水明细
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetail($body)
    {
        return $this->restful("POST", "/fundRecord/getBySerialId", $body);
    }
}

