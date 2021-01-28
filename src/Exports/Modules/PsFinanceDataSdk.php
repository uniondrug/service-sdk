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
 * @date   2020-12-14
 * @time   Mon, 14 Dec 2020 11:27:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsFinanceDataSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsFinanceDataSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-finance-data';

    /**
     * 审核对比
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/changeConfirmAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountChangeConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/change/confirm", $body, $query, $extra);
    }

    /**
     * 检查该连锁下是否有没设置账户的
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/checkIsExistAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountCheckIsExist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/check/exists", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/detail", $body, $query, $extra);
    }

    /**
     * 账号详情（含银行及开户行）
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/getDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountGetDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/get/detail", $body, $query, $extra);
    }

    /**
     * 获取指定类型账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/getDetailByTypeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountGetDetailByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/detail/by/type", $body, $query, $extra);
    }

    /**
     * 根据商户ID集合查询你账号列表（含银行及开户行）
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/getListByOrganizationIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountListByOrganizationIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/list/by/organizationIds", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/paging", $body, $query, $extra);
    }

    /**
     * 设为默认
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/setIsDefaultAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSetIsDefault($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/set/default", $body, $query, $extra);
    }

    /**
     * 设置状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/setStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSetStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/set/status", $body, $query, $extra);
    }

    /**
     * 获取待审核列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/toAuditListingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountToAuditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/to/audit/listing", $body, $query, $extra);
    }

    /**
     * 核算单位详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/unitDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/unit/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/update", $body, $query, $extra);
    }

    /**
     * 更新审核状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/updateAuditStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUpdateAuditStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/update/audit/status", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/viewAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankAccountView($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/view", $body, $query, $extra);
    }

    /**
     * 城市列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/citiesAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankHouseCities($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/cities", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankHouseDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankHousePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/paging", $body, $query, $extra);
    }

    /**
     * 省份列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/provincesAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankHouseProvinces($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/provinces", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function bankPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/paging", $body, $query, $extra);
    }

    /**
     * 公司信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/CompanyController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function infoCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/info", $body, $query, $extra);
    }

    /**
     * 保司信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/InsurerController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function infoInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/info", $body, $query, $extra);
    }

    /**
     * 连锁信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function infoMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/info", $body, $query, $extra);
    }

    /**
     * 连锁配置信息
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantSettingsController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function infoMerchantSettings($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantsettings/info", $body, $query, $extra);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/listing", $body, $query, $extra);
    }

    /**
     * 连锁分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/paging", $body, $query, $extra);
    }

    /**
     * 更新连锁负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/updateLeaderAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantUpdateLeader($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/updateLeader", $body, $query, $extra);
    }

    /**
     * 药联公司分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/CompanyController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pagingCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/detail", $body, $query, $extra);
    }

    /**
     * 详情(根据dictKey查询)
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/detailByNameAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictDetailByName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/detailByName", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/delete", $body, $query, $extra);
    }

    /**
     * 获取一级字典分组
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/rootAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupRootGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/root", $body, $query, $extra);
    }

    /**
     * 获取二级及以后的字典分组树
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/treeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/tree", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/update", $body, $query, $extra);
    }

    /**
     * 字典分组详情，按名称查询
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/detailByNameAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupDetailByName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/detailByName", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/update", $body, $query, $extra);
    }

    /**
     * 保司分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/InsurerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/InsurerController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/update", $body, $query, $extra);
    }

    /**
     * 保司负责人列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/DirectorController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerDirectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/director/list", $body, $query, $extra);
    }

    /**
     * 修改保司负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/DirectorController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerDirectorUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/director/update", $body, $query, $extra);
    }

    /**
     * 新增保司用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/create", $body, $query, $extra);
    }

    /**
     * 保司用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/detail", $body, $query, $extra);
    }

    /**
     * 停用保司用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/disable", $body, $query, $extra);
    }

    /**
     * 启用保司用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/enable", $body, $query, $extra);
    }

    /**
     * 开通保司用户财税账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/financeAccountOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerFinanceAccountOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/finance/account/open", $body, $query, $extra);
    }

    /**
     * 保司用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/update", $body, $query, $extra);
    }

    /**
     * 获取分录配置字典列表
     * dicts
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/DictGroupController/dictsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dictGroupDicts($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dict/group/dicts", $body, $query, $extra);
    }

    /**
     * 审核通过
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/acceptAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherAccept($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/accept", $body, $query, $extra);
    }

    /**
     * 审核不通过
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/refuseAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherRefuse($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/refuse", $body, $query, $extra);
    }

    /**
     * 生成金蝶凭证
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/generateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherGenerate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/generate", $body, $query, $extra);
    }

    /**
     * 连锁分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/paging", $body, $query, $extra);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/DetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/detail", $body, $query, $extra);
    }

    /**
     * 新增连锁开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/create", $body, $query, $extra);
    }

    /**
     * 连锁开票详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/detail", $body, $query, $extra);
    }

    /**
     * 导出商户开票信息
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/exportAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/export", $body, $query, $extra);
    }

    /**
     * 连锁开票分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/paging", $body, $query, $extra);
    }

    /**
     * 修改连锁开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/update", $body, $query, $extra);
    }

    /**
     * 连锁负责人列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DirectorController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDirectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/director/list", $body, $query, $extra);
    }

    /**
     * 修改连锁负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DirectorController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDirectorUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/director/update", $body, $query, $extra);
    }

    /**
     * 添加折扣率
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/create", $body, $query, $extra);
    }

    /**
     * 折扣详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/detail", $body, $query, $extra);
    }

    /**
     * 折扣率分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/paging", $body, $query, $extra);
    }

    /**
     * 编辑折扣
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/update", $body, $query, $extra);
    }

    /**
     * 新增换新补贴
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/create", $body, $query, $extra);
    }

    /**
     * 换新补贴详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/detail", $body, $query, $extra);
    }

    /**
     * 换新补贴分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/paging", $body, $query, $extra);
    }

    /**
     * 修改换新补贴
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/update", $body, $query, $extra);
    }

    /**
     * 新增连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/create", $body, $query, $extra);
    }

    /**
     * 连锁用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/detail", $body, $query, $extra);
    }

    /**
     * 停用连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/disable", $body, $query, $extra);
    }

    /**
     * 启用连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/enable", $body, $query, $extra);
    }

    /**
     * 开通连锁用户财税账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/financeAccountOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerFinanceAccountOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/finance/account/open", $body, $query, $extra);
    }

    /**
     * 连锁用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/paging", $body, $query, $extra);
    }
}
