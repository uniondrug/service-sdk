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
 * @date   2020-11-27
 * @time   Fri, 27 Nov 2020 15:15:11 +0800
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
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addClosePolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/addclose", $body, $query, $extra);
    }

    /**
     * 开始投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureOnlineController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInsureOnline($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insure/online/add", $body, $query, $extra);
    }

    /**
     * 新建投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInsurePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/add", $body, $query, $extra);
    }

    /**
     * 新增投保用户
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureUserController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInsureUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureUser/add", $body, $query, $extra);
    }

    /**
     * 新增一个发票
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/add", $body, $query, $extra);
    }

    /**
     * 分配发票
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InvoiceDistributionController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInvoiceDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoiceDistribution/add", $body, $query, $extra);
    }

    /**
     * 创建投保计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPlan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/add", $body, $query, $extra);
    }

    /**
     * 添加保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/add", $body, $query, $extra);
    }

    /**
     * 添加保单变更记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/add", $body, $query, $extra);
    }

    /**
     * 添加手续费收款明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/addProceduresAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addProceduresPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/addProcedures", $body, $query, $extra);
    }

    /**
     * 创建投保方案
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/add", $body, $query, $extra);
    }

    /**
     * 创建关联方案保司
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/add", $body, $query, $extra);
    }

    /**
     * 投保任务单重新试算
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/againTrailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function againTrailInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/againTrail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditDetailPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/auditDetail/paging", $body, $query, $extra);
    }

    /**
     * 任务单绑定保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/bindPolicyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bindPolicyInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/bindpolicy", $body, $query, $extra);
    }

    /**
     * 卡号没有创建完，创建卡号同时并导出excel
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/RepairErrorController/buildPolicyCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function buildPolicyCodeRepairError($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/repairError/buildPolicyCode", $body, $query, $extra);
    }

    /**
     * 变更项目信息（TPA和PBM)
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/changeProjectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeProjectPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/changeProject", $body, $query, $extra);
    }

    /**
     * 更新保单状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeStatusPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/changeStatus", $body, $query, $extra);
    }

    /**
     * 获取当日渠道任务详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/channelTaskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function channelTaskInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/channeltask", $body, $query, $extra);
    }

    /**
     * 理赔数据校验
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/check", $body, $query, $extra);
    }

    /**
     * 保单关闭审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/checkClosePolicyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkClosePolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/checkclose", $body, $query, $extra);
    }

    /**
     * 检测保单是否存在
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/checkExistAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkExistPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/checkExist", $body, $query, $extra);
    }

    /**
     * 校验提交投保结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkInsurePolicyResult($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/check", $body, $query, $extra);
    }

    /**
     * 保单审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/checkPolicyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/check", $body, $query, $extra);
    }

    /**
     * 保单变更审核提交
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/checkPolicyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkPolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/check", $body, $query, $extra);
    }

    /**
     * 发起理赔1-3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/claimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claim", $body, $query, $extra);
    }

    /**
     * 赔案总额校验
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimCheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCheckClaimOnline($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimOnline/claimCheck", $body, $query, $extra);
    }

    /**
     * 代扣
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimEquityController/addAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimEquityAddAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimEquity/addAmount", $body, $query, $extra);
    }

    /**
     * 代扣分页列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimEquityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimEquityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimEquity/paging", $body, $query, $extra);
    }

    /**
     * 计算保单理赔上限比例
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/claimMaxRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimMaxRatioPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/claimMaxRatio", $body, $query, $extra);
    }

    /**
     * 异步发起理赔-支持版本3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/claimNotifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimNotify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claimNotify", $body, $query, $extra);
    }

    /**
     * 保单理赔属性
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/claimPropertyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPropertyPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/claimProperty", $body, $query, $extra);
    }

    /**
     * 通知理赔的结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimOnlineController/claimResultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimResultClaimOnline($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimOnline/claimResult", $body, $query, $extra);
    }

    /**
     * 保司合作编号
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/cooperationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cooperationInsure($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insure/cooperation", $body, $query, $extra);
    }

    /**
     * 保司合作编号
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/cooperationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cooperationInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/cooperation", $body, $query, $extra);
    }

    /**
     * 创建投保方案编号
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/createSchemeNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createSchemeNoScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/createSchemeNo", $body, $query, $extra);
    }

    /**
     * 删除投保计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deletePlan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/delete", $body, $query, $extra);
    }

    /**
     * 删除保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deletePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/delete", $body, $query, $extra);
    }

    /**
     * 删除保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deletePolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/delete", $body, $query, $extra);
    }

    /**
     * 删除手续费收款明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/deleteProceduresAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteProceduresPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/deleteProcedures", $body, $query, $extra);
    }

    /**
     * 删除投保方案
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/delete", $body, $query, $extra);
    }

    /**
     * 删除关联方案保司
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/delete", $body, $query, $extra);
    }

    /**
     * 理赔详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/detail", $body, $query, $extra);
    }

    /**
     * 查看统计
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimPoolStatisticController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailClaimPoolStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimPoolStatistic/detail", $body, $query, $extra);
    }

    /**
     * 投单详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailInsurePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/detail", $body, $query, $extra);
    }

    /**
     * 投保方案详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/detail", $body, $query, $extra);
    }

    /**
     * 关联方案保司详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/detail", $body, $query, $extra);
    }

    /**
     * 保单明细汇总
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/detailSummaryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailSummaryPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/detailSummary", $body, $query, $extra);
    }

    /**
     * 停用投保方案
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/disable", $body, $query, $extra);
    }

    /**
     * 停用方案关联的保司
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/disable", $body, $query, $extra);
    }

    /**
     * 下载卡号
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/CodeController/downloadAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downloadCodes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/download", $body, $query, $extra);
    }

    /**
     * 修改保单关闭记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/editCloseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editClosePolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/editclose", $body, $query, $extra);
    }

    /**
     * 编辑投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editInsurePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/edit", $body, $query, $extra);
    }

    /**
     * 修改保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/edit", $body, $query, $extra);
    }

    /**
     * 修改保单变更记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editPolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/edit", $body, $query, $extra);
    }

    /**
     * 编辑投保方案详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/edit", $body, $query, $extra);
    }

    /**
     * 编辑关联方案保司
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/edit", $body, $query, $extra);
    }

    /**
     * 启用投保方案
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/enable", $body, $query, $extra);
    }

    /**
     * 启用方案关联的保司
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/enable", $body, $query, $extra);
    }

    /**
     * 正常投保导出
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/originalExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportAuditDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/auditDetail/originalExport", $body, $query, $extra);
    }

    /**
     * 花都换药投保导出
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/AuditDetailController/exportOfHuaDuAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportAuditDetailOfHuaDu($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/auditDetail/exportOfHuaDu", $body, $query, $extra);
    }

    /**
     * 卡号已创建完，导出excel
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/RepairErrorController/exportPolicyCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportPolicyCodeRepairError($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/repairError/exportPolicyCode", $body, $query, $extra);
    }

    /**
     * 发起理赔v4
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/fourthVersionClaimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function fourthVersionClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claim/fourthVersion", $body, $query, $extra);
    }

    /**
     * 撤销理赔v4
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/fourthVersionRevokeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function fourthVersionRevoke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/revoke/fourthVersion", $body, $query, $extra);
    }

    /**
     * 获取投保单列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getInsurePolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/paging", $body, $query, $extra);
    }

    /**
     * 手续费收款操作权限
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeController/getManagerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getManagerPolicyIncome($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncome/getManager", $body, $query, $extra);
    }

    /**
     * 理赔明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPagingClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/paging", $body, $query, $extra);
    }

    /**
     * 获取投保计划详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPlanDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/detail", $body, $query, $extra);
    }

    /**
     * 获取投保计划操作日志列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/logPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPlanLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/logPaging", $body, $query, $extra);
    }

    /**
     * 获取投保计划列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPlanPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/paging", $body, $query, $extra);
    }

    /**
     * 获取标识符对应的详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/BaseController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/base/info", $body, $query, $extra);
    }

    /**
     * 获取保单的保费和服务费计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/infoPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoPagingPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/infoPaging", $body, $query, $extra);
    }

    /**
     * 保司保单分页
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/insurerPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerPagingPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/insurerPaging", $body, $query, $extra);
    }

    /**
     * 保司统计保单数和保费总额
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/insurerStatAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerStatPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/insurerStat", $body, $query, $extra);
    }

    /**
     * 保司数据汇总
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/insurerSummaryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerSummaryPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/insurerSummary", $body, $query, $extra);
    }

    /**
     * 对帐单对冲明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/OrderHedgeController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listOrderHedge($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orderHedge/list", $body, $query, $extra);
    }

    /**
     * 收款明细列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/list", $body, $query, $extra);
    }

    /**
     * 付款明细列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyPayController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listPolicyPay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyPay/list", $body, $query, $extra);
    }

    /**
     * 更新钉钉审批 id
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/modifyApprovalIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyApprovalIdPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/modifyapprovalid", $body, $query, $extra);
    }

    /**
     * 编辑任务单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/modifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/modify", $body, $query, $extra);
    }

    /**
     * 配置修改
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskConfigController/modifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyInsureTaskConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTaskConfig/modify", $body, $query, $extra);
    }

    /**
     * 更新钉钉审批状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/notifyApprovalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function notifyApprovalPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/notifyapproval", $body, $query, $extra);
    }

    /**
     * 通知手续费收款结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/notifyProceduresAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function notifyProceduresPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/notifyProcedures", $body, $query, $extra);
    }

    /**
     * 获取保司默认银行账户
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/OrganizeBankAccountController/defaultBankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeBankAccountDefaultBank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeBankAccount/defaultBank", $body, $query, $extra);
    }

    /**
     * 保单扩展分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/pagingExtendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingExtendPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pagingExtend", $body, $query, $extra);
    }

    /**
     * 投保任务单列表分页
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/paging", $body, $query, $extra);
    }

    /**
     * 保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/paging", $body, $query, $extra);
    }

    /**
     * 手续费应收款列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingPolicyIncome($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncome/paging", $body, $query, $extra);
    }

    /**
     * 收款明细分页列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/paging", $body, $query, $extra);
    }

    /**
     * 保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingPolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/paging", $body, $query, $extra);
    }

    /**
     * 投保方案分页
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/paging", $body, $query, $extra);
    }

    /**
     * 关联方案保司分页
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/SchemeInsurerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingSchemeInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/paging", $body, $query, $extra);
    }

    /**
     * 投保任务单列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/panelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function panelInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/panel", $body, $query, $extra);
    }

    /**
     * 可投保金额列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskAmountController/panelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function panelInsureTaskAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTaskAmount/panel", $body, $query, $extra);
    }

    /**
     * 付款
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/payAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function payInsurePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/pay", $body, $query, $extra);
    }

    /**
     * 重复申请手续费收款明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/repeatProceduresAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function repeatProceduresPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/repeatProcedures", $body, $query, $extra);
    }

    /**
     * 撤销理赔1-3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/revokeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function revoke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/revoke", $body, $query, $extra);
    }

    /**
     * 异步撤销理赔-支持版本3
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/revokeNotifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function revokeNotify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/revokeNotify", $body, $query, $extra);
    }

    /**
     * 任务单生效
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/setEnabledAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setEnabledInsureTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTask/setenabled", $body, $query, $extra);
    }

    /**
     * 提交理赔数据
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/submitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function submitClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/sumbit", $body, $query, $extra);
    }

    /**
     * 提交投单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/submitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function submitInsurePolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/submit", $body, $query, $extra);
    }

    /**
     * 同步付款计划状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/syncPolicyPayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncPolicyPay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/syncpolicypay", $body, $query, $extra);
    }

    /**
     * 同步保单状态
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/syncInsureResultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncResultInsure($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insure/syncInsureResult", $body, $query, $extra);
    }

    /**
     * 配置详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskConfigController/viewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function viewInsureTaskConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insureTaskConfig/view", $body, $query, $extra);
    }

    /**
     * 查看保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyController/viewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function viewPolicy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/view", $body, $query, $extra);
    }

    /**
     * 收款明细
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyIncomeItemsController/viewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function viewPolicyIncomeItems($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyIncomeItems/view", $body, $query, $extra);
    }

    /**
     * 查看保单
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PolicyRecordController/viewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function viewPolicyRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyrecord/view", $body, $query, $extra);
    }
}
