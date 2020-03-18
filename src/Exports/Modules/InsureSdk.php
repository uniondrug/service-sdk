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
 * @date   2020-03-18
 * @time   Wed, 18 Mar 2020 16:20:43 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * InsureSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InsureSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'insure.module';

    /**
     * 添加保单关闭记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/addCloseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addClosePolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/addclose", $body);
    }

    /**
     * 新建投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInsurePolicy($body)
    {
        return $this->restful("POST", "/insurePolicy/add", $body);
    }

    /**
     * 新增一个发票
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInvoice($body)
    {
        return $this->restful("POST", "/invoice/add", $body);
    }

    /**
     * 分配发票
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InvoiceDistributionController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInvoiceDistribution($body)
    {
        return $this->restful("POST", "/invoiceDistribution/add", $body);
    }

    /**
     * 创建投保计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPlan($body)
    {
        return $this->restful("POST", "/plan/add", $body);
    }

    /**
     * 添加保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPolicy($body)
    {
        return $this->restful("POST", "/policy/add", $body);
    }

    /**
     * 添加保单变更记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/add", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditDetailPaging($body)
    {
        return $this->restful("POST", "/auditDetail/paging", $body);
    }

    /**
     * 卡号没有创建完，创建卡号同时并导出excel
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/RepairErrorController/buildPolicyCodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function buildPolicyCodeRepairError($body)
    {
        return $this->restful("POST", "/repairError/buildPolicyCode", $body);
    }

    /**
     * 更新保单状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/changeStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeStatusPolicy($body)
    {
        return $this->restful("POST", "/policy/changeStatus", $body);
    }

    /**
     * 保单关闭审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/checkClosePolicyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkClosePolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/checkclose", $body);
    }

    /**
     * 校验提交投保结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkInsurePolicyResult($body)
    {
        return $this->restful("POST", "/insurePolicy/check", $body);
    }

    /**
     * 保单审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/checkPolicyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkPolicy($body)
    {
        return $this->restful("POST", "/policy/check", $body);
    }

    /**
     * 保单变更审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/checkPolicyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkPolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/check", $body);
    }

    /**
     * 发起理赔1-3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claim($body)
    {
        return $this->restful("POST", "/claim/claim", $body);
    }

    /**
     * 赔案总额校验
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCheckClaimOnline($body)
    {
        return $this->restful("POST", "/claimOnline/claimCheck", $body);
    }

    /**
     * 获取需要执行的理赔数据
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimDataClaimOnline($body)
    {
        return $this->restful("POST", "/claimOnline/claimData", $body);
    }

    /**
     * 计算保单理赔上限比例
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/claimMaxRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimMaxRatioPolicy($body)
    {
        return $this->restful("POST", "/policy/claimMaxRatio", $body);
    }

    /**
     * 异步发起理赔-支持版本3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/claimNotifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimNotify($body)
    {
        return $this->restful("POST", "/claim/claimNotify", $body);
    }

    /**
     * 保单理赔属性
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/claimPropertyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimPropertyPolicy($body)
    {
        return $this->restful("POST", "/policy/claimProperty", $body);
    }

    /**
     * 推送理赔数据的结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimPushResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimPushResultClaimOnline($body)
    {
        return $this->restful("POST", "/claimOnline/claimPushResult", $body);
    }

    /**
     * 通知理赔的结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimResultClaimOnline($body)
    {
        return $this->restful("POST", "/claimOnline/claimResult", $body);
    }

    /**
     * 删除投保计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deletePlan($body)
    {
        return $this->restful("POST", "/plan/delete", $body);
    }

    /**
     * 删除保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deletePolicy($body)
    {
        return $this->restful("POST", "/policy/delete", $body);
    }

    /**
     * 删除保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deletePolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/delete", $body);
    }

    /**
     * 理赔详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailClaim($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 投单详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailInsurePolicy($body)
    {
        return $this->restful("POST", "/insurePolicy/detail", $body);
    }

    /**
     * 保单明细汇总
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/detailSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailSummaryPolicy($body)
    {
        return $this->restful("POST", "/policy/detailSummary", $body);
    }

    /**
     * 获取需要执行的上传卡号数据
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/downloadCodeDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downloadCodeDataInsure($body)
    {
        return $this->restful("POST", "/insure/downloadCodeData", $body);
    }

    /**
     * 上传卡号结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/downloadCodeResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downloadCodeResultInsure($body)
    {
        return $this->restful("POST", "/insure/downloadCodeResult", $body);
    }

    /**
     * 下载卡号
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/CodeController/downloadAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downloadCodes($body)
    {
        return $this->restful("POST", "/code/download", $body);
    }

    /**
     * 修改保单关闭记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/editCloseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editClosePolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/editclose", $body);
    }

    /**
     * 编辑投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editInsurePolicy($body)
    {
        return $this->restful("POST", "/insurePolicy/edit", $body);
    }

    /**
     * 修改保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editPolicy($body)
    {
        return $this->restful("POST", "/policy/edit", $body);
    }

    /**
     * 修改保单变更记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editPolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/edit", $body);
    }

    /**
     * 正常投保导出
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/originalExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportAuditDetail($body)
    {
        return $this->restful("POST", "/auditDetail/originalExport", $body);
    }

    /**
     * 花都换药投保导出
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/exportOfHuaDuAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportAuditDetailOfHuaDu($body)
    {
        return $this->restful("POST", "/auditDetail/exportOfHuaDu", $body);
    }

    /**
     * 卡号已创建完，导出excel
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/RepairErrorController/exportPolicyCodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportPolicyCodeRepairError($body)
    {
        return $this->restful("POST", "/repairError/exportPolicyCode", $body);
    }

    /**
     * 发起理赔v4
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/fourthVersionClaimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fourthVersionClaim($body)
    {
        return $this->restful("POST", "/claim/claim/fourthVersion", $body);
    }

    /**
     * 撤销理赔v4
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/fourthVersionRevokeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fourthVersionRevoke($body)
    {
        return $this->restful("POST", "/claim/revoke/fourthVersion", $body);
    }

    /**
     * 获取投保单列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInsurePolicyPaging($body)
    {
        return $this->restful("POST", "/insurePolicy/paging", $body);
    }

    /**
     * 理赔明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPagingClaim($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 获取投保计划详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPlanDetail($body)
    {
        return $this->restful("POST", "/plan/detail", $body);
    }

    /**
     * 获取投保计划操作日志列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/logPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPlanLogPaging($body)
    {
        return $this->restful("POST", "/plan/logPaging", $body);
    }

    /**
     * 获取投保计划列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPlanPaging($body)
    {
        return $this->restful("POST", "/plan/paging", $body);
    }

    /**
     * 获取需要执行的投保的数据
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/insureDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureDataInsure($body)
    {
        return $this->restful("POST", "/insure/insureData", $body);
    }

    /**
     * 保存投保结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/insureResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureResultInsure($body)
    {
        return $this->restful("POST", "/insure/insureResult", $body);
    }

    /**
     * 保司数据汇总
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/insurerSummaryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insurerSummaryPolicy($body)
    {
        return $this->restful("POST", "/policy/insurerSummary", $body);
    }

    /**
     * 保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingPolicy($body)
    {
        return $this->restful("POST", "/policy/paging", $body);
    }

    /**
     * 保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingPolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/paging", $body);
    }

    /**
     * 付款
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/payAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payInsurePolicy($body)
    {
        return $this->restful("POST", "/insurePolicy/pay", $body);
    }

    /**
     * 撤销理赔1-3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/revokeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function revoke($body)
    {
        return $this->restful("POST", "/claim/revoke", $body);
    }

    /**
     * 异步撤销理赔-支持版本3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/revokeNotifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function revokeNotify($body)
    {
        return $this->restful("POST", "/claim/revokeNotify", $body);
    }

    /**
     * 提交投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/submitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function submitInsurePolicy($body)
    {
        return $this->restful("POST", "/insurePolicy/submit", $body);
    }

    /**
     * 同步付款计划状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/syncPolicyPayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function syncPolicyPay($body)
    {
        return $this->restful("POST", "/policy/syncpolicypay", $body);
    }

    /**
     * 同步保单状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/syncInsureResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function syncResultInsure($body)
    {
        return $this->restful("POST", "/insure/syncInsureResult", $body);
    }

    /**
     * 查看保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/viewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function viewPolicy($body)
    {
        return $this->restful("POST", "/policy/view", $body);
    }

    /**
     * 查看保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/viewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function viewPolicyRecord($body)
    {
        return $this->restful("POST", "/policyrecord/view", $body);
    }
}
