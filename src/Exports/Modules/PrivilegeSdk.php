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
 * @date   2021-08-02
 * @time   Mon, 02 Aug 2021 10:30:44 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PrivilegeSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PrivilegeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'privilege.module';

    /**
     * 新增任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AddPackageRecordController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function addPackageRecordCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/add/package/record/create", $body, $query, $extra);
    }

    /**
     * 任务编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AddPackageRecordController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function addPackageRecordEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/add/package/record/edit", $body, $query, $extra);
    }

    /**
     * 创建领取任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function createMemberTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/create", $body, $query, $extra);
    }

    /**
     * 获取用户包含某个增值服务的所有任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailInfoByMidAndPIdAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function detailInfoByMidAndPid($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/detail/info", $body, $query, $extra);
    }

    /**
     * 创建领取任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function detailMemberTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/detail", $body, $query, $extra);
    }

    /**
     * 获取明细列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTaskDetailList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/detail/list", $body, $query, $extra);
    }

    /**
     * 获取特权任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTaskList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/list", $body, $query, $extra);
    }

    /**
     * 统计任务的领取数量和领取的积分
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/pointCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTaskPointCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/point/count", $body, $query, $extra);
    }

    /**
     * 更新领取特权任务信息
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTaskUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/update", $body, $query, $extra);
    }

    /**
     * 创建订单记录
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderRecordCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/record/create", $body, $query, $extra);
    }

    /**
     * 获取特权任务订单详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderRecordInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/record/info", $body, $query, $extra);
    }

    /**
     * 获取特权任务订单详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderRecordListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/record/listing", $body, $query, $extra);
    }

    /**
     * 新增资格证
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/addAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistCertificateAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/certificate/add", $body, $query, $extra);
    }

    /**
     * 资格证详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistCertificateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/certificate/detail", $body, $query, $extra);
    }

    /**
     * 资格证编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistCertificateEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/certificate/edit", $body, $query, $extra);
    }

    /**
     * 资格证分页
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistCertificatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/certificate/paging", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAssistantRemindController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAssistantRemindDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilegeAssistantRemind/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAssistantRemindController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAssistantRemindUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilegeAssistantRemind/update", $body, $query, $extra);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/checkAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAuditCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/audit/check", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAuditCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/audit/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAuditDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/audit/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeAuditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/audit/listing", $body, $query, $extra);
    }

    /**
     * 可领取列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/canReceiveListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeCanReceiveList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/canReceiveList", $body, $query, $extra);
    }

    /**
     * 领取任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/checkOrganAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeCheckOrgan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/check/organ", $body, $query, $extra);
    }

    /**
     * 统计数量
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/countAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/count", $body, $query, $extra);
    }

    /**
     * privilegeCounting
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/privilegeCountingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeCounting($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/counting", $body, $query, $extra);
    }

    /**
     * 后台创建特权任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/create", $body, $query, $extra);
    }

    /**
     * 详情接口
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/detail", $body, $query, $extra);
    }

    /**
     * 领取任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/exportAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/export", $body, $query, $extra);
    }

    /**
     * 完成任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/finishAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeFinish($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/finish", $body, $query, $extra);
    }

    /**
     * 已结束列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/finishListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeFinishList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/finishList", $body, $query, $extra);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/info", $body, $query, $extra);
    }

    /**
     * 任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/managerPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeManagerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/manager/paging", $body, $query, $extra);
    }

    /**
     * orderRollbackAction()
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/orderRollbackAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeOrderRollback($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/order/rollback", $body, $query, $extra);
    }

    /**
     * profitOragnPageAction()
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/profitOragnPageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeOrganPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/profit/organ/page", $body, $query, $extra);
    }

    /**
     * profitAssistant
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/profitAssistantAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeProfitAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/profit/assistant", $body, $query, $extra);
    }

    /**
     * profitListing
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/profitListingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeProfitListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/profit/listing", $body, $query, $extra);
    }

    /**
     * 进行中列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/progressListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeProgressList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/progressList", $body, $query, $extra);
    }

    /**
     * 领取任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/privilegeProgressPageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeProgressPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/progress/page", $body, $query, $extra);
    }

    /**
     * 店员领取特权
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/receiveAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeReceive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/receive", $body, $query, $extra);
    }

    /**
     * 编辑任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/setFailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeSetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/set/fail", $body, $query, $extra);
    }

    /**
     * 领取任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/subManagerPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeSubManagerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/sub/manager/paging", $body, $query, $extra);
    }

    /**
     * 编辑任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function privilegeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/update", $body, $query, $extra);
    }

    /**
     * 根据某一列值求另外一列的和
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/sumColumnByConditionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function sumColumnByCondition($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/task/sum/column", $body, $query, $extra);
    }

    /**
     * 新增任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/addAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/add", $body, $query, $extra);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/allAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/all", $body, $query, $extra);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/detail", $body, $query, $extra);
    }

    /**
     * 任务编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/edit", $body, $query, $extra);
    }

    /**
     * 任务分页
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/paging", $body, $query, $extra);
    }
}
