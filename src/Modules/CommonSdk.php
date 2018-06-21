<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class CommonSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'common';

    /**
     * 读取启用中的平台列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/platform/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPlatformList($body)
    {
        return $this->restful(static::METHOD_POST, "/platform/enable", $body);
    }

    /**
     * 读取全部平台列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/platform/get.all.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAllPlatformList($body)
    {
        return $this->restful(static::METHOD_POST, "/platform/list", $body);
    }

    /**
     * 添加角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/add", $body);
    }

    /**
     * 删除角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/del", $body);
    }

    /**
     * 编辑角色
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editRole($body)
    {
        return $this->restful(static::METHOD_POST, "/role/edit", $body);
    }

    /**
     * 读取角色详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getRoleInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/role/info", $body);
    }

    /**
     * 读取角色分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getRolePaging($body)
    {
        return $this->restful(static::METHOD_POST, "/role/paging", $body);
    }

    /**
     * 读取权限菜单列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/roleSetting/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getRoleSettingList($body)
    {
        return $this->restful(static::METHOD_POST, "/roleSetting/list", $body);
    }

    /**
     * 设置权限可用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enable($body)
    {
        return $this->restful(static::METHOD_POST, "/role/enable", $body);
    }

    /**
     * 设置权限不可用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/role/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disbale($body)
    {
        return $this->restful(static::METHOD_POST, "/role/disable", $body);
    }

    /**
     * 添加菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/add", $body);
    }

    /**
     * 删除菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/del", $body);
    }

    /**
     * 编辑菜单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editMenu($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/edit", $body);
    }

    /**
     * 读取菜单结构树
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/menu/tree.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMenuTree($body)
    {
        return $this->restful(static::METHOD_POST, "/menu/tree", $body);
    }

    /**
     * 添加菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/add", $body);
    }

    /**
     * 删除菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/del", $body);
    }

    /**
     * 编辑菜单权限
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/access/edit", $body);
    }

    /**
     * 读取菜单权限列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/common/access/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAccessList($body)
    {
        return $this->restful(static::METHOD_POST, "/access/list", $body);
    }
}
