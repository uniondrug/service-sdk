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
 * @date   2019-08-06
 * @time   Tue, 06 Aug 2019 14:17:35 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * MerchantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MerchantSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'merchant.module';

    /**
     * 通过名称和手机号获取用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/AccountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function account($body)
    {
        return $this->restful("POST", "/assistants/account", $body);
    }

    /**
     * 添加账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/add", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addAssistants($body)
    {
        return $this->restful("POST", "/assistants/add", $body);
    }

    /**
     * 添加费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addBalance($body)
    {
        return $this->restful("POST", "/balance/add", $body);
    }

    /**
     * 添加开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addInvoice($body)
    {
        return $this->restful("POST", "/invoice/add", $body);
    }

    /**
     * 添加商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addMerchant($body)
    {
        return $this->restful("POST", "/merchant/add", $body);
    }

    /**
     * 添加商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/add", $body);
    }

    /**
     * 添加组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addOrganization($body)
    {
        return $this->restful("POST", "/organization/add", $body);
    }

    /**
     * 添加商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPartners($body)
    {
        return $this->restful("POST", "/partners/add", $body);
    }

    /**
     * 添加图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/add", $body);
    }

    /**
     * 添加连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStores($body)
    {
        return $this->restful("POST", "/stores/add", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addWorker($body)
    {
        return $this->restful("POST", "/worker/add", $body);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/add", $body);
    }

    /**
     * 基于商户查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/listsStoreIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantsListsStoreId($body)
    {
        return $this->restful("POST", "/assistants/listsstoreid", $body);
    }

    /**
     * 获取连锁集合的人员数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/sumMemberLogicAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantsSumMember($body)
    {
        return $this->restful("POST", "/assistants/summember", $body);
    }

    /**
     * ids查询费率集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function balanceIds($body)
    {
        return $this->restful("POST", "/balance/ids", $body);
    }

    /**
     * 银行目录
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/bankListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bankListAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/bankList", $body);
    }

    /**
     * 查找连锁下的店员id
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainAssAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainAss($body)
    {
        return $this->restful("POST", "/organizebase/chainAss", $body);
    }

    /**
     * 统计全网一共有多少连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainNumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainNum($body)
    {
        return $this->restful("POST", "/organizebase/chainNum", $body);
    }

    /**
     * 读取连锁列表（有门店数量）
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainPaging($body)
    {
        return $this->restful("POST", "/organizebase/chainPaging", $body);
    }

    /**
     * 查找连锁下有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainStore($body)
    {
        return $this->restful("POST", "/organizebase/chainStore", $body);
    }

    /**
     * 统计全网一共有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/clerkNumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function clerkNum($body)
    {
        return $this->restful("POST", "/organizebase/clerkNum", $body);
    }

    /**
     * 获取所有下级组织数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/countAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countOrganize($body)
    {
        return $this->restful("POST", "/organizebase/count", $body);
    }

    /**
     * 获取某类型下的组织数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/countTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countTypeOrganize($body)
    {
        return $this->restful("POST", "/organizebase/counttype", $body);
    }

    /**
     * 删除商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delMerchant($body)
    {
        return $this->restful("POST", "/merchant/del", $body);
    }

    /**
     * 删除商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/del", $body);
    }

    /**
     * 删除组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delOrganization($body)
    {
        return $this->restful("POST", "/organization/del", $body);
    }

    /**
     * 删除图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/DelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/del", $body);
    }

    /**
     * id查询费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailBalance($body)
    {
        return $this->restful("POST", "/balance/detail", $body);
    }

    /**
     * 修改组织直付类型
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function directOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/direct", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableWorker($body)
    {
        return $this->restful("POST", "/worker/disable", $body);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/disable", $body);
    }

    /**
     * 修改账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/edit", $body);
    }

    /**
     * 编辑用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editAssistants($body)
    {
        return $this->restful("POST", "/assistants/edit", $body);
    }

    /**
     * 修改费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editBalance($body)
    {
        return $this->restful("POST", "/balance/edit", $body);
    }

    /**
     * 修改开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editInvoice($body)
    {
        return $this->restful("POST", "/invoice/edit", $body);
    }

    /**
     * 编辑商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editMerchant($body)
    {
        return $this->restful("POST", "/merchant/edit", $body);
    }

    /**
     * 编辑商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/edit", $body);
    }

    /**
     * 编辑组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editOrganization($body)
    {
        return $this->restful("POST", "/organization/edit", $body);
    }

    /**
     * 修改上级组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editParentIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editParentId($body)
    {
        return $this->restful("POST", "/organizebase/editparentid", $body);
    }

    /**
     * 编辑商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editPartners($body)
    {
        return $this->restful("POST", "/partners/edit", $body);
    }

    /**
     * 批量关闭状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusEndAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEnd($body)
    {
        return $this->restful("POST", "/organizebase/editstatusend", $body);
    }

    /**
     * 停用账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusEndAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/editstatusend", $body);
    }

    /**
     * 停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndAllAssistants($body)
    {
        return $this->restful("POST", "/assistants/editstatusendall", $body);
    }

    /**
     * 批量停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editStatusEndAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndAllWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/editstatusendall", $body);
    }

    /**
     * 停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndAssistants($body)
    {
        return $this->restful("POST", "/assistants/editstatusend", $body);
    }

    /**
     * 关闭商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusEndAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndPartners($body)
    {
        return $this->restful("POST", "/partners/editstatusend", $body);
    }

    /**
     * 关闭连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusEndAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusEndStores($body)
    {
        return $this->restful("POST", "/stores/editstatusend", $body);
    }

    /**
     * 批量开启状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusStartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStart($body)
    {
        return $this->restful("POST", "/organizebase/editstatusstart", $body);
    }

    /**
     * 开启账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusStartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/editstatusstart", $body);
    }

    /**
     * 开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartAllAssistants($body)
    {
        return $this->restful("POST", "/assistants/editstatusstartall", $body);
    }

    /**
     * 批量开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editStatusStartAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartAllWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/editstatusstartall", $body);
    }

    /**
     * 开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartAssistants($body)
    {
        return $this->restful("POST", "/assistants/editstatusstart", $body);
    }

    /**
     * 开启商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusStartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartPartners($body)
    {
        return $this->restful("POST", "/partners/editstatusstart", $body);
    }

    /**
     * 开启连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusStartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatusStartStores($body)
    {
        return $this->restful("POST", "/stores/editstatusstart", $body);
    }

    /**
     * 编辑图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/edit", $body);
    }

    /**
     * 修改连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStores($body)
    {
        return $this->restful("POST", "/stores/edit", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editWorker($body)
    {
        return $this->restful("POST", "/worker/edit", $body);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/edit", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableWorker($body)
    {
        return $this->restful("POST", "/worker/enable", $body);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/enable", $body);
    }

    /**
     * 读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantByIds($body)
    {
        return $this->restful("POST", "/merchant/ids", $body);
    }

    /**
     * 读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantInfo($body)
    {
        return $this->restful("POST", "/merchant/info", $body);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantList($body)
    {
        return $this->restful("POST", "/merchant/list", $body);
    }

    /**
     * 用以前的连锁id获取现在的组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/getByPartnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrganByPartnerId($body)
    {
        return $this->restful("POST", "/organizebase/getbypartner", $body);
    }

    /**
     * 查看组织组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrganizationInfo($body)
    {
        return $this->restful("POST", "/organization/info", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/treeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrganizationTree($body)
    {
        return $this->restful("POST", "/organization/tree", $body);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnerSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPartnerSwitchList($body)
    {
        return $this->restful("POST", "/partner/switch/list", $body);
    }

    /**
     * roleCountAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/roleCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRoleCount($body)
    {
        return $this->restful("POST", "/worker/roleCount", $body);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWorkerInfo($body)
    {
        return $this->restful("POST", "/worker/info", $body);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWorkerList($body)
    {
        return $this->restful("POST", "/worker/list", $body);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWorkerPaging($body)
    {
        return $this->restful("POST", "/worker/paging", $body);
    }

    /**
     * 获取用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/IdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ids($body)
    {
        return $this->restful("POST", "/assistants/ids", $body);
    }

    /**
     * 通过ids读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function idsOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/ids", $body);
    }

    /**
     * 查询账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/info", $body);
    }

    /**
     * 查询用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAssistants($body)
    {
        return $this->restful("POST", "/assistants/info", $body);
    }

    /**
     * 查询费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoBalance($body)
    {
        return $this->restful("POST", "/balance/info", $body);
    }

    /**
     * 查询上级费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoChainAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoChainBalance($body)
    {
        return $this->restful("POST", "/balance/infochain", $body);
    }

    /**
     * 最近上级独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/infoIndependentAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoIndependent($body)
    {
        return $this->restful("POST", "/organizebase/infoindependent", $body);
    }

    /**
     * 查询开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoInvoice($body)
    {
        return $this->restful("POST", "/invoice/info", $body);
    }

    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/info", $body);
    }

    /**
     * 查询商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoPartners($body)
    {
        return $this->restful("POST", "/partners/info", $body);
    }

    /**
     * 查询图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/InfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/info", $body);
    }

    /**
     * 查询连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoStores($body)
    {
        return $this->restful("POST", "/stores/info", $body);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/info", $body);
    }

    /**
     * 通过默认编码获取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/internalCodeInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function internalCodeInfo($body)
    {
        return $this->restful("POST", "/organizebase/internalcodeinfo", $body);
    }

    /**
     * 查询门店是否存在
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/isExistAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function isExistStore($body)
    {
        return $this->restful("POST", "/stores/isExist", $body);
    }

    /**
     * 获取某类型下的组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listAllOrganize($body)
    {
        return $this->restful("POST", "/organizebase/listall", $body);
    }

    /**
     * 通过partnerId读取下级商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listAllStoreOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/listallstore", $body);
    }

    /**
     * 通过partnerId读取简略下级商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllStoreSmallAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listAllStoreSmallOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/listallstoresmall", $body);
    }

    /**
     * ROOT下独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listIsIndependentAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listIsIndependent($body)
    {
        return $this->restful("POST", "/organizebase/listisindependent", $body);
    }

    /**
     * 简洁查询连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listNameAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listName($body)
    {
        return $this->restful("POST", "/organizebase/listname", $body);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/list", $body);
    }

    /**
     * 简洁查询连锁名称返回门店名称
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listParentNameAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listParentname($body)
    {
        return $this->restful("POST", "/organizebase/listparentname", $body);
    }

    /**
     * 读取root商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listRootIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listRootidOrganizeBase($body)
    {
        return $this->restful("POST", "/organizebase/listrootid", $body);
    }

    /**
     * 图片集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/ListsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listsStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/lists", $body);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/list", $body);
    }

    /**
     * 员工登录
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/loginAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function login($body)
    {
        return $this->restful("POST", "/worker/login", $body);
    }

    /**
     * 用户查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/memberIdInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberIdInfoAssistants($body)
    {
        return $this->restful("POST", "/assistants/memberidinfo", $body);
    }

    /**
     * 通过手机号查询用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/MoblieAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moblieWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/moblie", $body);
    }

    /**
     * 查询账号列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/PagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingAccountNumber($body)
    {
        return $this->restful("POST", "/accountnumber/paging", $body);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/PagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingAssistants($body)
    {
        return $this->restful("POST", "/assistants/paging", $body);
    }

    /**
     * 查询费率列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/PagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingBalance($body)
    {
        return $this->restful("POST", "/balance/paging", $body);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingPartners($body)
    {
        return $this->restful("POST", "/partners/paging", $body);
    }

    /**
     * 图片列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/PagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingStoreImages($body)
    {
        return $this->restful("POST", "/storeimages/paging", $body);
    }

    /**
     * 查询连锁门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/PagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingStores($body)
    {
        return $this->restful("POST", "/stores/paging", $body);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/paging", $body);
    }

    /**
     * 通过partnerid读取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/partnerIdInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerIdInfoOrganizeBase($body)
    {
        return $this->restful("POST", "/organizebase/partneridinfo", $body);
    }

    /**
     * 通过partnerIds读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/partnerIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerIdsOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/partnerids", $body);
    }

    /**
     * 获取连锁&门店id
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/cooperationInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnersCooperationInfo($body)
    {
        return $this->restful("POST", "/partners/cooperationinfo", $body);
    }

    /**
     * 获取连锁集合的资金池
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/fundPoolsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnersFundPools($body)
    {
        return $this->restful("POST", "/partners/fundpools", $body);
    }

    /**
     * relationAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/relationAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function relationWorker($body)
    {
        return $this->restful("POST", "/worker/relation", $body);
    }

    /**
     * 用户关联权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/relationAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function relationWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/relation", $body);
    }

    /**
     * removeAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/removeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function removeWorker($body)
    {
        return $this->restful("POST", "/worker/remove", $body);
    }

    /**
     * 删除权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/removeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function removeWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/remove", $body);
    }

    /**
     * 获取权限下用户数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/roleCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleCountWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/roleCount", $body);
    }

    /**
     * 修改用户权限组
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/roleIdEditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleIdEditWorkerMan($body)
    {
        return $this->restful("POST", "/workerman/roleidedit", $body);
    }

    /**
     * 更具名称查找连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/searchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function searchOrganizeBase($body)
    {
        return $this->restful("POST", "/organizebase/search", $body);
    }

    /**
     * 查找门店下有多少店员
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/storeAssAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeAss($body)
    {
        return $this->restful("POST", "/organizebase/storeAss", $body);
    }

    /**
     * 统计全网一共有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/storeNumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeNum($body)
    {
        return $this->restful("POST", "/organizebase/storeNum", $body);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/treeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function treeOrgabuzeBase($body)
    {
        return $this->restful("POST", "/organizebase/tree", $body);
    }

    /**
     * 读取商户列表树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/treeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function treePartners($body)
    {
        return $this->restful("POST", "/partners/tree", $body);
    }
}
