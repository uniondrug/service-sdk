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

    /**
     * 财务账号添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/add", $body);
    }

    /**
     * 财务账号查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/info", $body);
    }

    /**
     * 财务账号修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/edit", $body);
    }

    /**
     * 财务账号列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/paging", $body);
    }

    /**
     * 财务账号停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusEndAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/editstatusend", $body);
    }

    /**
     * 财务账号启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusStartAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/editstatusstart", $body);
    }

    /**
     * 原始用户添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/add", $body);
    }

    /**
     * 原始用户查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/info", $body);
    }

    /**
     * 原始用户修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/edit", $body);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/paging", $body);
    }

    /**
     * 用户停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusend", $body);
    }

    /**
     * 用户启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusstart", $body);
    }

    /**
     * 用户批量停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAllAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAllAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusendall", $body);
    }

    /**
     * 用户批量启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAllAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAllAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusstartall", $body);
    }

    /**
     * 用户批量启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/memberIdInfoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function memberIdInfoAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/memberidinfo", $body);
    }

    /**
     * 添加费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/add", $body);
    }

    /**
     * 费率查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/info", $body);
    }

    /**
     * 费率修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/edit", $body);
    }

    /**
     * 查询费率列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/paging", $body);
    }

    /**
     * 添加开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/add", $body);
    }

    /**
     * 开票配置查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/info", $body);
    }

    /**
     * 开票配置修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/edit", $body);
    }

    /**
     * 开票配置列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/paging", $body);
    }

    /**
     * 添加原始商户中心
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/add", $body);
    }

    /**
     * 原始商户中心查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/info", $body);
    }

    /**
     * 原始商户中心修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/edit", $body);
    }

    /**
     * 原始商户中心列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/paging", $body);
    }

    /**
     * 原始商户中心列表树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/treeAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function treePartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/tree", $body);
    }

    /**
     * 原始商户中心关闭
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusEndAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/editstatusend", $body);
    }

    /**
     * 原始商户中心开启
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusStartAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/editstatusstart", $body);
    }

    /**
     * 添加原始连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/add", $body);
    }

    /**
     * 原始连锁门店查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/info", $body);
    }

    /**
     * 原始连锁门店修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/edit", $body);
    }

    /**
     * 原始连锁门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/paging", $body);
    }

    /**
     * 原始连锁门店关闭
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusEndAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/editstatusend", $body);
    }

    /**
     * 原始连锁门店开启
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusStartAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/editstatusstart", $body);
    }

    /**
     * 添加门店图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/add", $body);
    }

    /**
     * 门店图片查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/info", $body);
    }

    /**
     * 门店图片修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/edit", $body);
    }

    /**
     * 门店图片列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/paging", $body);
    }

    /**
     * 门店图片列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/paging", $body);
    }

    /**
     * 门店图片集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/ListsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function listsStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/lists", $body);
    }

    /**
     * 门店图片删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/DelAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storesimages/del", $body);
    }
}
