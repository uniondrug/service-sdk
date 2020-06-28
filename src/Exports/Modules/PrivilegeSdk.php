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
 * @date   2020-06-28
 * @time   Sun, 28 Jun 2020 13:19:58 +0800
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
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPackageRecordCreate($body)
    {
        return $this->restful("POST", "/add/package/record/create", $body);
    }

    /**
     * 任务编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AddPackageRecordController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPackageRecordEdit($body)
    {
        return $this->restful("POST", "/add/package/record/edit", $body);
    }

    /**
     * 创建领取任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createMemberTask($body)
    {
        return $this->restful("POST", "/member/task/create", $body);
    }

    /**
     * 获取用户包含某个增值服务的所有任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailInfoByMidAndPIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailInfoByMidAndPid($body)
    {
        return $this->restful("POST", "/member/task/detail/info", $body);
    }

    /**
     * 创建领取任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailMemberTask($body)
    {
        return $this->restful("POST", "/member/task/detail", $body);
    }

    /**
     * 获取明细列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskDetailList($body)
    {
        return $this->restful("POST", "/member/task/detail/list", $body);
    }

    /**
     * 获取特权任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskList($body)
    {
        return $this->restful("POST", "/member/task/list", $body);
    }

    /**
     * 统计任务的领取数量和领取的积分
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/pointCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskPointCount($body)
    {
        return $this->restful("POST", "/member/task/point/count", $body);
    }

    /**
     * 更新领取特权任务信息
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskUpdate($body)
    {
        return $this->restful("POST", "/member/task/update", $body);
    }

    /**
     * 创建订单记录
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRecordCreate($body)
    {
        return $this->restful("POST", "/order/record/create", $body);
    }

    /**
     * 获取特权任务订单详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRecordInfo($body)
    {
        return $this->restful("POST", "/order/record/info", $body);
    }

    /**
     * 获取特权任务订单详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRecordListing($body)
    {
        return $this->restful("POST", "/order/record/listing", $body);
    }

    /**
     * 新增资格证
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCertificateAdd($body)
    {
        return $this->restful("POST", "/pharmacist/certificate/add", $body);
    }

    /**
     * 资格证详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCertificateDetail($body)
    {
        return $this->restful("POST", "/pharmacist/certificate/detail", $body);
    }

    /**
     * 资格证编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCertificateEdit($body)
    {
        return $this->restful("POST", "/pharmacist/certificate/edit", $body);
    }

    /**
     * 资格证分页
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/PharmacistCertificateController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCertificatePaging($body)
    {
        return $this->restful("POST", "/pharmacist/certificate/paging", $body);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeAuditCheck($body)
    {
        return $this->restful("POST", "/privilege/audit/check", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeAuditCreate($body)
    {
        return $this->restful("POST", "/privilege/audit/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeAuditDetail($body)
    {
        return $this->restful("POST", "/privilege/audit/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeAuditController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeAuditListing($body)
    {
        return $this->restful("POST", "/privilege/audit/listing", $body);
    }

    /**
     * 可领取列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/canReceiveListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeCanReceiveList($body)
    {
        return $this->restful("POST", "/privilege/canReceiveList", $body);
    }

    /**
     * 统计数量
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/countAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeCount($body)
    {
        return $this->restful("POST", "/privilege/count", $body);
    }

    /**
     * 后台创建特权任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeCreate($body)
    {
        return $this->restful("POST", "/privilege/create", $body);
    }

    /**
     * 详情接口
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeDetail($body)
    {
        return $this->restful("POST", "/privilege/detail", $body);
    }

    /**
     * 完成任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/finishAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeFinish($body)
    {
        return $this->restful("POST", "/privilege/finish", $body);
    }

    /**
     * 已结束列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/finishListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeFinishList($body)
    {
        return $this->restful("POST", "/privilege/finishList", $body);
    }

    /**
     * 编辑任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeInfo($body)
    {
        return $this->restful("POST", "/privilege/info", $body);
    }

    /**
     * 进行中列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/progressListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeProgressList($body)
    {
        return $this->restful("POST", "/privilege/progressList", $body);
    }

    /**
     * 店员领取特权
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/receiveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeReceive($body)
    {
        return $this->restful("POST", "/privilege/receive", $body);
    }

    /**
     * 编辑任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/setFailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeSetFail($body)
    {
        return $this->restful("POST", "/privilege/set/fail", $body);
    }

    /**
     * 编辑任务配置
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/Privilege/PrivilegeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function privilegeUpdate($body)
    {
        return $this->restful("POST", "/privilege/update", $body);
    }

    /**
     * 根据某一列值求另外一列的和
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/sumColumnByConditionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sumColumnByCondition($body)
    {
        return $this->restful("POST", "/member/task/sum/column", $body);
    }

    /**
     * 新增任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskAdd($body)
    {
        return $this->restful("POST", "/task/add", $body);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/allAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskAll($body)
    {
        return $this->restful("POST", "/task/all", $body);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskDetail($body)
    {
        return $this->restful("POST", "/task/detail", $body);
    }

    /**
     * 任务编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskEdit($body)
    {
        return $this->restful("POST", "/task/edit", $body);
    }

    /**
     * 任务分页
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskPaging($body)
    {
        return $this->restful("POST", "/task/paging", $body);
    }
}
