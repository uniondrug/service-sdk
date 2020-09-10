<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
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
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/add", $body);
    }

    /**
     * 添加组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/add.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/add", $body);
    }

    /**
     * 删除商户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/del.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function delMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/del", $body);
    }

    /**
     * 删除组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/del.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function delOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/del", $body);
    }

    /**
     * 编辑商户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/edit.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/edit", $body);
    }

    /**
     * 编辑组织架构
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/edit.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editOrganization($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/edit", $body);
    }

    /**
     * 读取单个组织架构详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/get.info.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getOrganizationInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/info", $body);
    }

    /**
     * 读取商户资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.info.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getMerchantInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/info", $body);
    }

    /**
     * 用ids获取商户信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.ids.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getMerchantByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/ids", $body);
    }

    /**
     * 读取商户资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/merchant/get.list.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getMerchantList($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/info", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/organization/get.tree.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getOrganizationTree($body)
    {
        return $this->restful(static::METHOD_POST, "/organization/tree", $body);
    }

    /**
     * 员工登录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/login.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function login($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/login", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/add.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/add", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/edit.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/edit", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/disable.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function disableWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/disable", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/enable.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function enableWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/enable", $body);
    }

    /**
     * 员工列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/get.paging.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getWorkerPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/paging", $body);
    }

    /**
     * 员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/listAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getWorkerList($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/list", $body);
    }

    /**
     * 员工简易资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/info.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getWorkerInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/info", $body);
    }

    /**
     * 获取权限下员工数量
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/roleCount.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getRoleCount($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/roleCount", $body);
    }

    /**
     * 删除员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/remove.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function removeWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/remove", $body);
    }

    /**
     * 关联员工
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/merchant/worker/relation.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function relationWorker($body)
    {
        return $this->restful(static::METHOD_POST, "/worker/relation", $body);
    }

    /**
     * 添加组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/add", $body);
    }

    /**
     * 修改组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/edit", $body);
    }

    /**
     * 删除商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/delAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function delOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/del", $body);
    }

    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/info", $body);
    }

    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/listAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/list", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/treeAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function treeOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/tree", $body);
    }

    /**
     * ids读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/OrganizeBaseController/idsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function idsOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/ids", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/add", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/edit", $body);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/listAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/list", $body);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/paging", $body);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/info", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/disableAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function disableWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/disable", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/enableAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function enableWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/enable", $body);
    }

    /**
     * 获取权限下用户数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/roleCountAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function roleCountWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/roleCount", $body);
    }

    /**
     * 删除权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/removeAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function removeWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/remove", $body);
    }

    /**
     * 用户关联权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/relationAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function relationWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/relation", $body);
    }

    /**
     * 批量停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/editStatusEndAllAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAllWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/editstatusendall", $body);
    }

    /**
     * 批量开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/dev_wss/docs/api/WorkerManController/editStatusStartAllAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAllWorkerMan($body)
    {
        return $this->restful(static::METHOD_POST, "/workerman/editstatusstartall", $body);
    }

    /**
     * 财务账号添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/add", $body);
    }

    /**
     * 财务账号查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/info", $body);
    }

    /**
     * 财务账号修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/edit", $body);
    }

    /**
     * 财务账号列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/paging", $body);
    }

    /**
     * 财务账号停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusEndAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/editstatusend", $body);
    }

    /**
     * 财务账号启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusStartAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/editstatusstart", $body);
    }

    /**
     * 原始用户添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/add", $body);
    }

    /**
     * 原始用户查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/info", $body);
    }

    /**
     * 原始用户修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/edit", $body);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/paging", $body);
    }

    /**
     * 用户停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusend", $body);
    }

    /**
     * 批量加入地图黑名单
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditStartIsBlackMapAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStartIsBlackMap($body)
    {
        return $this->restful("POST", "/organization/editstartisblackmap", $body);
    }

    /**
     * 批量释放地图黑名单
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditEndIsBlackMapAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editEndIsBlackMap($body)
    {
        return $this->restful("POST", "/organization/editendisblackmap", $body);
    }

    /**
     * 用户启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusstart", $body);
    }

    /**
     * 用户批量停用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAllAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndAllAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusendall", $body);
    }

    /**
     * 用户批量启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAllAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartAllAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/editstatusstartall", $body);
    }

    /**
     * 用户批量启用
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/memberIdInfoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function memberIdInfoAssistants($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/memberidinfo", $body);
    }

    /**
     * 添加费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/add", $body);
    }

    /**
     * 费率查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/info", $body);
    }

    /**
     * 费率修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/edit", $body);
    }

    /**
     * 查询费率列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/paging", $body);
    }

    /**
     * 查询顶级组织费率接口
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infochainAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoChainBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/infochain", $body);
    }

    /**
     * 添加开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/add", $body);
    }

    /**
     * 开票配置查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/info", $body);
    }

    /**
     * 开票配置修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/edit", $body);
    }

    /**
     * 开票配置列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/invoice/paging", $body);
    }

    /**
     * 添加原始商户中心
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/add", $body);
    }

    /**
     * 原始商户中心查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/info", $body);
    }

    /**
     * 原始商户中心修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/edit", $body);
    }

    /**
     * 原始商户中心列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/paging", $body);
    }

    /**
     * 原始商户中心列表树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/treeAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function treePartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/tree", $body);
    }

    /**
     * 原始商户中心关闭
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusEndAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/editstatusend", $body);
    }

    /**
     * 原始商户中心开启
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusStartAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartPartners($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/editstatusstart", $body);
    }

    /**
     * 添加原始连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/add", $body);
    }

    /**
     * 原始连锁门店查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/info", $body);
    }

    /**
     * 原始连锁门店修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/edit", $body);
    }

    /**
     * 原始连锁门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/paging", $body);
    }

    /**
     * 原始连锁门店关闭
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusEndAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEndStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/editstatusend", $body);
    }

    /**
     * 原始连锁门店开启
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusStartAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStartStores($body)
    {
        return $this->restful(static::METHOD_POST, "/stores/editstatusstart", $body);
    }

    /**
     * 添加门店图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/addAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function addStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/add", $body);
    }

    /**
     * 门店图片查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/infoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/info", $body);
    }

    /**
     * 门店图片修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/editAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/edit", $body);
    }

    /**
     * 门店图片列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/pagingAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function pagingStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/paging", $body);
    }

    /**
     * 门店图片删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/delAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function delStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/del", $body);
    }

    /**
     * 门店图片集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImageController/ListsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listsStoreImages($body)
    {
        return $this->restful(static::METHOD_POST, "/storeimages/lists", $body);
    }

    /**
     * 获取rootid下所有组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/ListsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listRootidOrganizeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listrootid", $body);
    }

    /**
     * 获取所有银行
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/bankListAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function bankListAccountNumber($body)
    {
        return $this->restful(static::METHOD_POST, "/accountnumber/bankList", $body);
    }

    /**
     * 用连锁id获取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/getByPartnerAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function getOrganByPartnerId($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/getbypartner", $body);
    }

    /**
     * 通过partnerId获取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/PartnerIdInfoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function partnerIdInfoOrganizeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/partneridinfo", $body);
    }

    /**
     * ROOT下独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/ListIsIndependentAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listIsIndependent($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listisindependent", $body);
    }

    /**
     * 最近上级独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/InfoIndependentAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function infoIndependent($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/infoindependent", $body);
    }

    /**
     * 批量关闭状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusEndAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusEnd($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/editstatusend", $body);
    }

    /**
     * 批量开启状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusStartAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editStatusStart($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/editstatusstart", $body);
    }

    /**
     * 批量注销状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusOutAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusOut($body)
    {
        return $this->restful("POST", "/organizebase/editstatusout", $body);
    }

    /**
     * id查询费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/detailAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function detailBalance($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/detail", $body);
    }

    /**
     * 统计特定组织下的数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/ccountAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function countOrganize($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/count", $body);
    }

    /**
     * 统计特定类型下的组织数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/countTypeAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function countTypeOrganize($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/counttype", $body);
    }

    /**
     * 统计特定类型下组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listAllOrganize($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listall", $body);
    }

    /**
     * 修改所属上级组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editParentIdAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editParentId($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/editparentid", $body);
    }

    /**
     * partnerIds读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/partnerIdsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function partnerIdsOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/partnerids", $body);
    }

    /**
     * 通过partnerId读取下级商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllStoreAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function listAllStoreOrgabuzeBase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listallstore", $body);
    }

    /**
     * 通过默认编码获取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/internalCodeInfoAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function internalCodeInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/internalcodeinfo", $body);
    }

    /**
     * 获取连锁集合的资金池
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/fundPoolsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function partnersFundPools($body)
    {
        return $this->restful(static::METHOD_POST, "/partners/fundpools", $body);
    }

    /**
     * 获取连锁集合的人员数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/sumMemberLogicAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function assistantsSumMember($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/summember", $body);
    }

    /**
     * ids查询费率集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/idsAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function balanceIds($body)
    {
        return $this->restful(static::METHOD_POST, "/balance/ids", $body);
    }

    /**
     * 修改组织直付类型
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function direct($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/direct", $body);
    }

    /**
     * 连锁查询 (运营推送平台)
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listNameAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function partnerSearch($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listname", $body);
    }

    /**
     * 门店查询 (运营推送平台)
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listParentNameAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function storeSearch($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/listparentname", $body);
    }

    /**
     * 店员查询 (运营推送平台)
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/AccountAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function assistantsSearch($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/account", $body);
    }

    /**
     * 编辑组织信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/AccountAction.md
     * @param object|array $body
     * @return ClientResponseInterface
     */
    public function editOrganizebase($body)
    {
        return $this->restful(static::METHOD_POST, "/organizebase/editmap", $body);
    }

    /**
     * 读取保司列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/insureListAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getInsureList($body)
    {
        return $this->restful("POST", "/organizebase/insureList", $body);
    }

    /**
     * 读取保司列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/insureListAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cityPaging($body)
    {
        return $this->restful("POST", "/organizebase/citypaging", $body);
    }

    /**
     * 读取保司列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/insureListAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function listStoreSmallOrg($body)
    {
        return $this->restful("POST", "/organizebase/liststoresmall", $body);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listSmallAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function listSmallOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/listsmall", $body);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listSmallAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function internalcode($body)
    {
        return $this->restful("POST", "/organizebase/internalcode", $body);
    }

    /**
     * 批量关闭地图
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditEndIsMapOpenAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editendismapopen($body)
    {
        return $this->restful("POST", "/organization/editendismapopen", $body);
    }

    /**
     * 批量开启地图
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditStartIsMapOpenAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editstartismapopen($body)
    {
        return $this->restful("POST", "/organization/editstartismapopen", $body);
    }
}
