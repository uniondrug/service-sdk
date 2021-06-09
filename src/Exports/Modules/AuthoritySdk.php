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
 * @date   2020-11-30
 * @time   Mon, 30 Nov 2020 11:00:00 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AuthoritySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AuthoritySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'authority.module';

    /**
     * 商家服务平台员工角色详情
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/workerRoleDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessCenterWorkerRoleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/workerRoleDetail", $body, $query, $extra);
    }

    /**
     * xxx平台员工角色列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/workerRoleDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerRoleListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/workerRoleListing", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemAuthController/batchDeleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAuthBatchDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAuth/batch/delete", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemAuthController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAuthCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAuth/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemAuthController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAuthDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAuth/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemAuthController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAuthPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAuth/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemAuthController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAuthUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAuth/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/detail", $body, $query, $extra);
    }

    /**
     * 获取菜单子列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/list", $body, $query, $extra);
    }

    /**
     * 启用/停用
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/modifyStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuModifyStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/modifystatus", $body, $query, $extra);
    }

    /**
     * 获取角色的菜单树
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/roleTreeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuRoleTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/roletree", $body, $query, $extra);
    }

    /**
     * 获取菜单树
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/treeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/tree", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/update", $body, $query, $extra);
    }

    /**
     * 获取权限用户的菜单树
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemMenuController/workerTreeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMenuWorkerTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemMenu/workertree", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRoleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRoleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/detail", $body, $query, $extra);
    }

    /**
     * 角色列表-不分页
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRoleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/list", $body, $query, $extra);
    }

    /**
     * 启用/停用
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/modifyStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRoleModifyStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/modifystatus", $body, $query, $extra);
    }

    /**
     * 角色分页列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRolePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemRoleController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemRoleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemRole/update", $body, $query, $extra);
    }

    /**
     * 所属系统的用户分页列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/pagingMenuAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerMenuPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/pagingmenu", $body, $query, $extra);
    }

    /**
     * 账号管理列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/accountNumberAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/accountNumber", $body, $query, $extra);
    }

    /**
     * 已关联人员
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/countWorkersAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleCountWorkers($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/countWorkers", $body, $query, $extra);
    }

    /**
     * 关联用户
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/create", $body, $query, $extra);
    }

    /**
     * 批量关联用户
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/createAllAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleCreateAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/createall", $body, $query, $extra);
    }

    /**
     * 批量移除用户
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/delete", $body, $query, $extra);
    }

    /**
     * 移除worker下商家服务平台权限
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/deleteBusinessCenterAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleDeleteBusinessCenter($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/deleteBusinessCenter", $body, $query, $extra);
    }

    /**
     * 移除worker下财务共享平台权限
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/deleteBusinessCenterAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleDeleteFinance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/deleteFinance", $body, $query, $extra);
    }

    /**
     * 所属系统用户角色详情
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/detail", $body, $query, $extra);
    }

    /**
     * 所属平台用户角色列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/list", $body, $query, $extra);
    }

    /**
     * 所属角色的所有关联用户
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/listAllAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRoleListAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/listall", $body, $query, $extra);
    }

    /**
     * 所属角色的用户分页列表
     * @link https://uniondrug.coding.net/p/module.authority/git/blob/development/docs/api/SystemWorkerRoleController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemWorkerRolePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemWorkerRole/paging", $body, $query, $extra);
    }
}
