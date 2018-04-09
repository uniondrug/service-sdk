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
 * 项目服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'project';

    /**
     * 提交项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/approval.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function approvalProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/approval", $body);
    }

    /**
     * 取消项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/cancel.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancelProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/cancel", $body);
    }

    /**
     * 接受(通过)项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/accept.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function acceptProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/accept", $body);
    }

    /**
     * 拒绝(驳回)项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/refuse.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function refuseProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/refuse", $body);
    }

    /**
     * 设置项目状态为: 执行中
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/start.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function startProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/start", $body);
    }

    /**
     * 设置项目状态为: 已暂停
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/pause.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pauseProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/pause", $body);
    }

    /**
     * 添加项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/add", $body);
    }

    /**
     * 编辑项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/edit", $body);
    }

    /**
     * 删除项目(状态为: 草稿、已驳回)
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/delete.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function deleteProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/delete", $body);
    }

    /**
     * 读取项目分页列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/project/paging", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/add", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/active.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function activeUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/active", $body);
    }

    /**
     * 编辑用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/edit", $body);
    }

    /**
     * 用户分页列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/user/paging", $body);
    }

    /**
     * 启用分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/enable", $body);
    }

    /**
     * 禁用分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/disable", $body);
    }

    /**
     * 添加分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/add", $body);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/edit", $body);
    }

    /**
     * 分组列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGroupList($body)
    {
        return $this->restful(static::METHOD_POST, "/group/list", $body);
    }
}
