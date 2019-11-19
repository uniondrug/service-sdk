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
 * @date   2019-08-26
 * @time   Mon, 26 Aug 2019 19:50:19 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CommonSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CommonSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'common.module';

    /**
     * 读取启用中的平台列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/platform/get.list.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getPlatformList($body)
    {
        return $this->restful(static::METHOD_POST, "/platform/enable", $body);
    }

    /**
     * 读取全部平台列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/platform/get.all.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getAllPlatformList($body)
    {
        return $this->restful(static::METHOD_POST, "/platform/list", $body);
    }

    /**
     * 添加角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function addRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/add", $body);
    }

    /**
     * 删除角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/del.md
     * @param array $body
     * @return ResponseInterface
     */
    public function delRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/del", $body);
    }

    /**
     * 编辑角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/edit.md
     * @param array $body
     * @return ResponseInterface
     */
    public function editRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/edit", $body);
    }

    /**
     * 读取角色详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/get.info.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getRoleInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/role/info", $body);
    }

    /**
     * 读取角色分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/get.paging.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getRolePaging($body)
    {
        return $this->restful(static::METHOD_POST, "/role/paging", $body);
    }

    /**
     * 读取权限菜单列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/roleSetting/get.list.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getRoleSettingList($body)
    {
        return $this->restful(static::METHOD_POST, "/roleSetting/list", $body);
    }
    /**
     * 用权限和菜单获取access
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/roleSetting/getByRoleAndMenu.list.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getSettingByRoleAndMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/roleSetting/access/list", $body);
    }


    /**
     * 设置权限可用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/enable.md
     * @param array $body
     * @return ResponseInterface
     */
    public function enable($body)
    {
        return $this->restful(static::METHOD_POST, "/role/enable", $body);
    }

    /**
     * 设置权限不可用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/disable.md
     * @param array $body
     * @return ResponseInterface
     */
    public function disbale($body)
    {
        return $this->restful(static::METHOD_POST, "/role/disable", $body);
    }

    /**
     * 添加菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function addMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/add", $body);
    }

    /**
     * 删除菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/del.md
     * @param array $body
     * @return ResponseInterface
     */
    public function delMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/del", $body);
    }

    /**
     * 编辑菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/edit.md
     * @param array $body
     * @return ResponseInterface
     */
    public function editMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/edit", $body);
    }

    /**
     * 读取菜单结构树
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/tree.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getMenuTree($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/tree", $body);
    }

    /**
     * 读取菜单结构树
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/menuWithRole.md
     * @param array $body
     * @return ResponseInterface
     */
    public function menuWithRole($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/menuWithRole", $body);
    }

    /**
     * 添加菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function addAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/add", $body);
    }

    /**
     * 删除菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/del.md
     * @param array $body
     * @return ResponseInterface
     */
    public function delAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/del", $body);
    }

    /**
     * 编辑菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/edit.md
     * @param array $body
     * @return ResponseInterface
     */
    public function editAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/edit", $body);
    }

    /**
     * 读取菜单权限列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/get.list.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getAccessList($body)
    {
        return $this->restful(static::METHOD_POST, "/access/list", $body);
    }

    /**
     * 批量添加角色菜单(智赔测试环境专用)
     * @link https://uniondrug.coding.net/p/module.common/git/blob/development/docs/api/MenuController/addMenuWithAllRoleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function menuBatchAdd($body)
    {
        return $this->restful("POST", "/menu/batch/add", $body);
    }

    /**
     * 批量删除角色菜单(智赔测试环境专用)
     * @link https://uniondrug.coding.net/p/module.common/git/blob/development/docs/api/MenuController/DelMenuWithAllRoleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function menuBatchDelete($body)
    {
        return $this->restful("POST", "/menu/batch/delete", $body);
    }
}
