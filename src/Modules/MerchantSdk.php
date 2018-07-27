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
 * 商户服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class MerchantSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'merchant';

    /**
     * 添加商户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/add", $body);
    }

    /**
     * 添加组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/add", $body);
    }

    /**
     * 删除商户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/del", $body);
    }

    /**
     * 删除组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/del", $body);
    }

    /**
     * 编辑商户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/edit", $body);
    }

    /**
     * 编辑组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/edit", $body);
    }

    /**
     * 读取单个组织架构详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrganizationInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/info", $body);
    }

    /**
     * 读取商户资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/info", $body);
    }

    /**
     * 用ids获取商户信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.ids.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/ids", $body);
    }

    /**
     * 读取商户资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantList($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/info", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/get.tree.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrganizationTree($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/tree", $body);
    }

    /**
     * 员工登录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/login.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function login($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/login", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/add", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/edit", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/disable", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/enable", $body);
    }

    /**
     * 员工列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getWorkerPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/paging", $body);
    }

    /**
     * 员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/listAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getWorkerList($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/list", $body);
    }

    /**
     * 员工简易资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getWorkerInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/info", $body);
    }

    /**
     * 获取权限下员工数量
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/roleCount.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getRoleCount($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/roleCount", $body);
    }

    /**
     * 删除员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/remove.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function removeWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/remove", $body);
    }

    /**
     * 关联员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/relation.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function relationWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/relation", $body);
    }

    /**
     * 添加组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/add", $body);
    }

    /**
     * 修改组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/edit", $body);
    }

    /**
     * 删除商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/delAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/del", $body);
    }


    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/info", $body);
    }

    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/listAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function listOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/list", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/treeAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function treeOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/tree", $body);
    }

    /**
     * ids读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/idsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function idsOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/ids", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/add", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/edit", $body);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/listAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function listWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/list", $body);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/paging", $body);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/info", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/disableAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/disable", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/enableAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/enable", $body);
    }

    /**
     * 获取权限下用户数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/roleCountAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function roleCountWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/roleCount", $body);
    }


    /**
     * 删除权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/removeAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function removeWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/remove", $body);
    }

    /**
     * 用户关联权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/relationAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function relationWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/relation", $body);
    }


}
