<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Pms`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2021-12-17
 * @time   Fri, 17 Dec 2021 15:41:41 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ApproMngSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ApproMngSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'appro-mng-pm';

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplicationController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applicationCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/application/create", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplicationPromoterController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applicationPromoterCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/applicationPromoter/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplicationPromoterController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applicationPromoterDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/applicationPromoter/detail", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplicationPromoterController/getByAppIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applicationPromoterGetByAppId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/applicationPromoter/getByAppId", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplicationPromoterController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applicationPromoterUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/applicationPromoter/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/add", $body, $query, $extra);
    }

    /**
     * 同意
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/agreeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyAgree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/agree", $body, $query, $extra);
    }

    /**
     * 审批流系统同意
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/agreeBySystemAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyAgreeBySystem($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/agreeBySystem", $body, $query, $extra);
    }

    /**
     * 审批简介 脚本
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/briefAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyBrief($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyBrief", $body, $query, $extra);
    }

    /**
     * 撤回
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/cancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/cancel", $body, $query, $extra);
    }

    /**
     * 评论
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/commentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyComment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/comment", $body, $query, $extra);
    }

    /**
     * 总数
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/applyCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyCount", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/detail", $body, $query, $extra);
    }

    /**
     * 审批流任务执行
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/doTaskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyDoTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyDoTask", $body, $query, $extra);
    }

    /**
     * 转交
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/forwardAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyForward($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/forward", $body, $query, $extra);
    }

    /**
     * 翻页列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/paging", $body, $query, $extra);
    }

    /**
     * 新增流程
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/processAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyProcessAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/processAdd", $body, $query, $extra);
    }

    /**
     * 驳回
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/rejectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyReject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/reject", $body, $query, $extra);
    }

    /**
     * 审批流系统驳回
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/rejectBySystemAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyRejectBySystem($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/rejectBySystem", $body, $query, $extra);
    }

    /**
     * 提醒当前审批人
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/remindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyRemind($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/remind", $body, $query, $extra);
    }

    /**
     * 审批流修复
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/repairAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyRepair($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyRepair", $body, $query, $extra);
    }

    /**
     * 异步任务调用修改任务执行状态
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/statusChangeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyStatusChange($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyStatusChange", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/add", $body, $query, $extra);
    }

    /**
     * 批量新增或修改
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/batchAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserBatchAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/batchAdd", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/detail", $body, $query, $extra);
    }

    /**
     * 所有列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approveUserUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approveUser/update", $body, $query, $extra);
    }

    /**
     * 活动审核通过调用接口
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/taskActivityApplyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskActivityApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/taskActivityApply", $body, $query, $extra);
    }

    /**
     * 审批流模板 [添加][自定义]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/add", $body, $query, $extra);
    }

    /**
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/detail", $body, $query, $extra);
    }

    /**
     * 审批流模板 [根据类型获取详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/detailByTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateDetailByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/detailByType", $body, $query, $extra);
    }

    /**
     * 审批流模板 [修改]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/edit", $body, $query, $extra);
    }

    /**
     * 审批流模板 [不分页列表]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/list", $body, $query, $extra);
    }

    /**
     * 审批流模板 [分页列表]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/paging", $body, $query, $extra);
    }

    /**
     * 审批流模板 [停用/开启]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/editStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateStatusEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/editStatus", $body, $query, $extra);
    }

    /**
     * 审批流模板 [编辑][自定义]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TemplateController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/update", $body, $query, $extra);
    }

    /**
     * 条件列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpConditionController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpConditionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpCondition/list", $body, $query, $extra);
    }

    /**
     * 设置条件
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpConditionController/setAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpConditionSet($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpCondition/set", $body, $query, $extra);
    }

    /**
     * 审批条件配置列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpConditionController/typeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpConditionTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpCondition/typeList", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpFormController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpFormCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpForm/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpFormController/detailByApproveTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpFormDetailByApproveType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpForm/detailByApproveType", $body, $query, $extra);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpFormController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpFormUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpForm/update", $body, $query, $extra);
    }

    /**
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpProcessController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpProcessDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpProcess/detail", $body, $query, $extra);
    }

    /**
     * 审批流模板 [修改]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpProcessController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpProcessEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpProcess/edit", $body, $query, $extra);
    }

    /**
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/Template/TpProcessController/getNodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tpProcessGetNode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/tpProcess/getNode", $body, $query, $extra);
    }
}
