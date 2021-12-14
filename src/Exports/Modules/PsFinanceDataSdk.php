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
     * 同步保司银行账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccount/BankAccountController/syncInsurerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSyncInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/sync/insurer", $body, $query, $extra);
    }

    /**
     * 同步更新未完成的付款单账户信息
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccount/BankAccountController/syncCapitalPaymentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSyncCapitalPayment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/sync/capital/payment", $body, $query, $extra);
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
     * 新增银行大类
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Bank/BankController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/create", $body, $query, $extra);
    }

    /**
     * 银行大类详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Bank/BankController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/detail", $body, $query, $extra);
    }

    /**
     * 修改银行大类
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Bank/BankController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/update", $body, $query, $extra);
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
     * 新增银行开户行
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouse/BankHouseController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/create", $body, $query, $extra);
    }

    /**
     * 修改银行开户行
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouse/BankHouseController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/update", $body, $query, $extra);
    }

    /**
     * 删除银行开户行
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouse/BankHouseController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/delete", $body, $query, $extra);
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
     * 停用药联公司
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/CompanyController/disableAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/disable", $body, $query, $extra);
    }

    /**
     * 启用药联公司
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/CompanyController/enableAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/enable", $body, $query, $extra);
    }

    /**
     * 修改药联公司
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/CompanyController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function companyUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/update", $body, $query, $extra);
    }

    /**
     * 新增药联公司开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/BillInfoController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function companyBillInfoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/bill/info/create", $body, $query, $extra);
    }

    /**
     * 药联公司开票详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/BillInfoController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function companyBillInfoDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/bill/info/detail", $body, $query, $extra);
    }

    /**
     * 药联公司开票分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/BillInfoController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function companyBillInfoPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/bill/info/paging", $body, $query, $extra);
    }

    /**
     * 修改药联公司开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Company/BillInfoController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function companyBillInfoUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/bill/info/update", $body, $query, $extra);
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
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/AuthorityController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAuthorityCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/authority/create", $body, $query, $extra);
    }

    /**
     * 商家详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/AuthorityController/merchantDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAuthorityMerchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/authority/merchant/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/AuthorityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAuthorityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/authority/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/AuthorityController/updateStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAuthorityUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/authority/update/status", $body, $query, $extra);
    }

    /**
     * 连锁开票待审核列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/auditListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoAuditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/audit/listing", $body, $query, $extra);
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
     * 批量获取连锁自动生成换新结算单配置
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/SettingController/getAutoCreateHxMerchantAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getAutoCreateHxMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/setting/auto/create/hx/merchant", $body, $query, $extra);
    }

    /**
     * 保司列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/listing", $body, $query, $extra);
    }

    /**
     * 根据保司名称查询保司ID列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/listByNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerListByName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/list/by/name", $body, $query, $extra);
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
     * 保司树形结构
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/tree", $body, $query, $extra);
    }

    /**
     * 保司树形缓存结构
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/treeByRedisAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerTreeByRedis($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/tree/by/redis", $body, $query, $extra);
    }

    /**
     * 修改保司
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/update", $body, $query, $extra);
    }

    /**
     * 连锁确认保司信息修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/addConfirmLogAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoAddConfirmLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/add/confirm/log", $body, $query, $extra);
    }

    /**
     * 保司修改确认对比
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/insurerChangeConfirmAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoChangeConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/change/confirm", $body, $query, $extra);
    }

    /**
     * 保司开票分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/paging", $body, $query, $extra);
    }

    /**
     * 同步保司开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/syncAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoSync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/sync", $body, $query, $extra);
    }

    /**
     * 新增保司开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/create", $body, $query, $extra);
    }

    /**
     * 保司开票详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/detail", $body, $query, $extra);
    }

    /**
     * 修改保司开票
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/update", $body, $query, $extra);
    }

    /**
     * 修改保司开票收件信息
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/BillInfoController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerBillInfoUpdateRecipient($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/bill/info/update/recipient", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsureConfigController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerConfigDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/config/detail", $body, $query, $extra);
    }

    /**
     * 保司详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/InsurerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/detail", $body, $query, $extra);
    }

    /**
     * 保司负责人列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/DirectorController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerDirectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/director/list", $body, $query, $extra);
    }

    /**
     * 修改保司负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/DirectorController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerDirectorUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/director/update", $body, $query, $extra);
    }

    /**
     * 新增保司用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/create", $body, $query, $extra);
    }

    /**
     * 保司用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/detail", $body, $query, $extra);
    }

    /**
     * 保司用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/paging", $body, $query, $extra);
    }

    /**
     * 保司用户启用停用
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerWorkerUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/worker/update/status", $body, $query, $extra);
    }

    /**
     * 药联用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/worker/paging", $body, $query, $extra);
    }

    /**
     * 新增药联用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/worker/create", $body, $query, $extra);
    }

    /**
     * 药联用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/worker/detail", $body, $query, $extra);
    }

    /**
     * 药联用户更新状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Insurer/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyWorkerUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/worker/update/status", $body, $query, $extra);
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
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/paging", $body, $query, $extra);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/DetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/detail", $body, $query, $extra);
    }

    /**
     * 核算单位列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/unitListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerUnitListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/unit/listing", $body, $query, $extra);
    }

    /**
     * 连锁简化列表
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerSimplifyList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/simplify/list", $body, $query, $extra);
    }

    /**
     * 修改连锁
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/update", $body, $query, $extra);
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
     * 连锁开票审核对比
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/changeConfirmAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoChangeConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/change/confirm", $body, $query, $extra);
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
     * 核算单位开票详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/unit/detail", $body, $query, $extra);
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
     * 更新连锁开票审核状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/updateAuditStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoUpdateAuditStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/update/audit/status", $body, $query, $extra);
    }

    /**
     * 更新连锁在线开票状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/updateOnlineInvoiceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoUpdateOnlineInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/update/onlineinvoice", $body, $query, $extra);
    }

    /**
     * 更新连锁开票信息状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/BillInfoController/updateStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillInfoUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bill/info/update/status", $body, $query, $extra);
    }

    /**
     * 连锁审核列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DirectorController/auditListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDirectorAuditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/director/audit/listing", $body, $query, $extra);
    }

    /**
     * 连锁负责人列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DirectorController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDirectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/director/list", $body, $query, $extra);
    }

    /**
     * 修改连锁负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DirectorController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDirectorUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/director/update", $body, $query, $extra);
    }

    /**
     * 添加折扣率
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/create", $body, $query, $extra);
    }

    /**
     * 折扣详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/detail", $body, $query, $extra);
    }

    /**
     * 折扣率分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/paging", $body, $query, $extra);
    }

    /**
     * 编辑折扣
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/DiscountController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerDiscountUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/discount/update", $body, $query, $extra);
    }

    /**
     * 新增换新补贴
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/create", $body, $query, $extra);
    }

    /**
     * 换新补贴详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/detail", $body, $query, $extra);
    }

    /**
     * 换新补贴列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/listing", $body, $query, $extra);
    }

    /**
     * 换新补贴分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/paging", $body, $query, $extra);
    }

    /**
     * 修改换新补贴
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/RenewalController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerRenewalUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/renewal/update", $body, $query, $extra);
    }

    /**
     * 新增连锁配置
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/SettingController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerSettingCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/setting/create", $body, $query, $extra);
    }

    /**
     * 连锁配置详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/SettingController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerSettingDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/setting/detail", $body, $query, $extra);
    }

    /**
     * 修改连锁配置
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/SettingController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerSettingUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/setting/update", $body, $query, $extra);
    }

    /**
     * 订阅助手商户入驻财务数据
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/settledAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerSettled($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/settled", $body, $query, $extra);
    }

    /**
     * 连锁树形结构
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tree", $body, $query, $extra);
    }

    /**
     * 连锁树形缓存结构
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/PartnerController/treeByRedisAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerTreeByRedis($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tree/by/redis", $body, $query, $extra);
    }

    /**
     * 统计连锁人员数量
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/count", $body, $query, $extra);
    }

    /**
     * 新增连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/create", $body, $query, $extra);
    }

    /**
     * 自动新增连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerAutoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/auto/create", $body, $query, $extra);
    }

    /**
     * 编辑连锁用户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/update", $body, $query, $extra);
    }

    /**
     * 连锁用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/member/detail", $body, $query, $extra);
    }

    /**
     * 连锁用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerManDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/detail", $body, $query, $extra);
    }

    /**
     * 连锁用户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerManExist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/exist", $body, $query, $extra);
    }

    /**
     * 连锁用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/paging", $body, $query, $extra);
    }

    /**
     * 核算单位下开启微信推送用户列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerWeChatPushList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/wechat/push/list", $body, $query, $extra);
    }

    /**
     * 连锁用户更新状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/update/status", $body, $query, $extra);
    }

    /**
     * 开通连锁用户财税账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/financeAccountOpenAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerFinanceAccountOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/finance/account/open", $body, $query, $extra);
    }

    /**
     * 关闭连锁用户财税账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/financeAccountOpenAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerWorkerFinanceAccountClose($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/worker/finance/account/close", $body, $query, $extra);
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
     * 用户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/paging", $body, $query, $extra);
    }

    /**
     * 用户更新状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/update/status", $body, $query, $extra);
    }

    /**
     * 更新操作人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerUpdateOperator($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/update/operator", $body, $query, $extra);
    }

    /**
     * 用户更新选中
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerUpdateChecked($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/update/checked", $body, $query, $extra);
    }

    /**
     * 用户更新选中系统
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Partner/WorkerController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function workerUpdateCheckedSystem($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/update/checked/system", $body, $query, $extra);
    }

    /**
     * 新增用户权限
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/WorkerRuleController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerRuleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/rule/create", $body, $query, $extra);
    }

    /**
     * 用户权限详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/WorkerRuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerRuleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/rule/detail", $body, $query, $extra);
    }

    /**
     * 修改用户权限
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/WorkerRuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerRuleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/rule/update", $body, $query, $extra);
    }

    /**
     * 用户系统分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/WorkerRuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerSystemPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/system/paging", $body, $query, $extra);
    }

    /**
     * 用户系统更新
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/WorkerRuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerSystemUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/system/update/status", $body, $query, $extra);
    }

    /**
     * 新增商业公司与商户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/create", $body, $query, $extra);
    }

    /**
     * 删除商业公司与商户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/delete", $body, $query, $extra);
    }

    /**
     * 商业公司与商户详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/DetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/detail", $body, $query, $extra);
    }

    /**
     * 停用商业公司与商户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/disableAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/disable", $body, $query, $extra);
    }

    /**
     * 启用商业公司与商户
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/enableAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/enable", $body, $query, $extra);
    }

    /**
     * 商业公司与商户列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationshipListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/listing", $body, $query, $extra);
    }

    /**
     * 商业公司与商户分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/paging", $body, $query, $extra);
    }

    /**
     * 更新商业公司与商户比例
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Relationship/RelationshipController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationshipUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relationship/update", $body, $query, $extra);
    }

    /**
     * 新增税收分类编码
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/create", $body, $query, $extra);
    }

    /**
     * 税收分类编码详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/detail", $body, $query, $extra);
    }

    /**
     * 导出税收分类编码
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodeExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/export", $body, $query, $extra);
    }

    /**
     * 批量导入
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/importAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodeImport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/import", $body, $query, $extra);
    }

    /**
     * 查询税收分类编码分页
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/paging", $body, $query, $extra);
    }

    /**
     * 修改税收分类编码
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/TaxClassificationEncode/TaxClassificationEncodeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxClassificationEncodeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tax/classification/encode/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/create", $body, $query, $extra);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/update", $body, $query, $extra);
    }

    /**
     * 更新状态
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/updateStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/update/status", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/paging", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/detail", $body, $query, $extra);
    }

    /**
     * 已读未读列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/financePagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerReadPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/read/paging", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/merchantPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/paging", $body, $query, $extra);
    }

    /**
     * 商家未读公告数量
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/merchantPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerCountUnread($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/count/unread", $body, $query, $extra);
    }

    /**
     * 已读
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/readAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerRead($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/read", $body, $query, $extra);
    }

    /**
     * 获取未读公告
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/AnnouncementPartnerController/readAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function announcementPartnerAvailable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/announcement/partner/available", $body, $query, $extra);
    }

    /**
     * 开票信息
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function billInfoDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/info/detail", $body, $query, $extra);
    }

    /**
     * 财税服务费配置分页列表
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServicePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/paging", $body, $query, $extra);
    }

    /**
     * 财税服务费配置新增
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServiceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/create", $body, $query, $extra);
    }

    /**
     * 财税服务费配置详情
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServiceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/detail", $body, $query, $extra);
    }

    /**
     * 财税服务费配置核算单位详情
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServiceUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/unit/detail", $body, $query, $extra);
    }

    /**
     * 财税服务费配置修改
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServiceUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/update", $body, $query, $extra);
    }

    /**
     * 财税服务费配置启用停用
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerTaxServiceUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/tax/service/update/status", $body, $query, $extra);
    }

    /**
     * 财税VIP新增
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyVipCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/vip/create", $body, $query, $extra);
    }

    /**
     * 财税VIP详情
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyVipDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/vip/detail", $body, $query, $extra);
    }

    /**
     * 财税VIP修改
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyVipUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/vip/update", $body, $query, $extra);
    }

    /**
     * 组织类型
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/Organize/OrganizeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organize/detail", $body, $query, $extra);
    }

    /**
     * 商户资质校验
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/OrganizeQualificationController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organize/qualification/check", $body, $query, $extra);
    }

    /**
     * 吐槽
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function feedbackCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/feedback/create", $body, $query, $extra);
    }

    /**
     * 在线开票协议
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function onlineInvoiceProtocolCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/onlineInvoiceProtocol/create", $body, $query, $extra);
    }

    /**
     * 在线开票申请
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyOnlineCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/online/create", $body, $query, $extra);
    }

    /**
     * 在线开票申请详情
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyOnlineDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/online/detail", $body, $query, $extra);
    }

    /**
     * 在线开票申请核算单位详情
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyOnlineUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/online/unit/detail", $body, $query, $extra);
    }

    /**
     * 在线开票申请编辑
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyOnlineUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/online/update", $body, $query, $extra);
    }

    /**
     * 在线开票申请列表
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyOnlinePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/online/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/createAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityCreate($body)
    {
        return $this->restful("POST", "/organizeAuthority/create", $body);
    }

    /**
     * 商家详情
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/merchantDetailAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityMerchantDetail($body)
    {
        return $this->restful("POST", "/organizeAuthority/merchantDetail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/pagingAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityPaging($body)
    {
        return $this->restful("POST", "/organizeAuthority/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.settlement/git/blob/development/docs/api/OrganizeAuthorityController/updateStatusAction.md
     * @param $body
     * @return ResponseInterface
     */
    public function organizeAuthorityUpdateStatus($body)
    {
        return $this->restful("POST", "/organizeAuthority/updateStatus", $body);
    }

    /**
     * 商家服务平台版本详情
     * @param $body
     * @return ResponseInterface
     */
    public function businessCenterVersionDetail($body)
    {
        return $this->restful("POST", "/businessCenterVersion/detail", $body);
    }

    /**
     * 商家待办事项新增
     * @param $body
     * @return ResponseInterface
     */
    public function partnerTodoListCreate($body)
    {
        return $this->restful("POST", "/partnerTodoList/create", $body);
    }

    /**
     * 商家待办事项分页列表
     * @param $body
     * @return ResponseInterface
     */
    public function partnerTodoListPaging($body)
    {
        return $this->restful("POST", "/partnerTodoList/paging", $body);
    }

    /**
     * 商家待办事项编辑
     * @param $body
     * @return ResponseInterface
     */
    public function partnerTodoListUpdate($body)
    {
        return $this->restful("POST", "/partnerTodoList/update", $body);
    }
}
