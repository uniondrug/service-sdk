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
 * @date   2019-07-29
 * @time   Mon, 29 Jul 2019 10:21:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

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
     * 新增一个投保记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/insure/add", $body);
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
     * 检测提交投保结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsurePolicyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkInsurePolicyResult($body)
    {
        return $this->restful("POST", "/insurePolicy/check", $body);
    }

    /**
     * 撤销理赔
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/ClaimController/revokeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claim($body)
    {
        return $this->restful("POST", "/claim/revoke", $body);
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
     * 查看投保详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/insure/detail", $body);
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
     * 获取需要执行的上传卡号队列
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/downloadCodeQueueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downloadCodeQueueInsureTask($body)
    {
        return $this->restful("POST", "/InsureTask/downloadCodeQueue", $body);
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
     * 获取投保分页的部分信息
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/getPartPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPartPaging($body)
    {
        return $this->restful("POST", "/insure/getPartPaging", $body);
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
     * 查询显示投保的列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/getPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/insure/getPaging", $body);
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
     * 获取需要执行的投保队列
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/insureQueueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queueInsureTask($body)
    {
        return $this->restful("POST", "/InsureTask/insureQueue", $body);
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
     * 同步上传卡号结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/syncDownloadCodeResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function syncDownloadCodeResultInsureTask($body)
    {
        return $this->restful("POST", "/InsureTask/syncDownloadCodeResult", $body);
    }

    /**
     * 同步投保结果
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureTaskController/syncInsureResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function syncResultInsureTask($body)
    {
        return $this->restful("POST", "/InsureTask/syncInsureResult", $body);
    }

    /**
     * 更新投保的记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/insure/update", $body);
    }

    /**
     * 更新投保理赔金额
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/updateMoneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateMoney($body)
    {
        return $this->restful("POST", "/insure/updateMoney", $body);
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
}
