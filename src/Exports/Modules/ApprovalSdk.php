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
 * @date   2020-07-02
 * @time   Thu, 02 Jul 2020 11:01:52 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;


/**
 * ApprovalSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ApprovalSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'approval.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApplyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserAdd($body)
    {
        return $this->restful("POST", "/apply/add", $body);
    }

    /**
     * 批量新增或修改
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/batchAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserBatchAdd($body)
    {
        return $this->restful("POST", "/approveUser/batchAdd", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserDetail($body)
    {
        return $this->restful("POST", "/approveUser/detail", $body);
    }

    /**
     * 所有列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserList($body)
    {
        return $this->restful("POST", "/approveUser/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserPaging($body)
    {
        return $this->restful("POST", "/approveUser/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/ApproveUserController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveUserUpdate($body)
    {
        return $this->restful("POST", "/approveUser/update", $body);
    }

    /**
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateDetail($body)
    {
        return $this->restful("POST", "/template/detail", $body);
    }

    /**
     * 审批流模板 [修改]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateEdit($body)
    {
        return $this->restful("POST", "/template/edit", $body);
    }

    /**
     * 审批流模板 [不分页列表]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateList($body)
    {
        return $this->restful("POST", "/template/list", $body);
    }

    /**
     * 审批流模板 [分页列表]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templatePaging($body)
    {
        return $this->restful("POST", "/template/paging", $body);
    }

    /**
     * 审批流模板 [停用/开启]
     * @link https://uniondrug.coding.net/p/module.approval/git/tree/development/docs/api/TemplateController/editStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateStatusEdit($body)
    {
        return $this->restful("POST", "/template/editStatus", $body);
    }
}
