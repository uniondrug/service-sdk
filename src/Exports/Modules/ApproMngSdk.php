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
 * @date   2020-07-23
 * @time   Thu, 23 Jul 2020 11:29:59 +0800
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
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/detailAction.md
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
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/detailByTypeAction.md
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
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/editAction.md
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
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/listAction.md
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
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/pagingAction.md
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
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/editStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function templateStatusEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/editStatus", $body, $query, $extra);
    }
}
