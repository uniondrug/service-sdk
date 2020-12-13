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
 * @date   2020-12-13
 * @time   Sun, 13 Dec 2020 18:09:16 +0800
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
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountChangeConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/change/confirm", $body, $query, $extra);
    }

    /**
     * 检查该连锁下是否有没设置账户的
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/checkIsExistAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountCheckIsExist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/check/exists", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/detail", $body, $query, $extra);
    }

    /**
     * 账号详情（含银行及开户行）
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/getDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountGetDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/get/detail", $body, $query, $extra);
    }

    /**
     * 获取指定类型账号
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/getDetailByTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountGetDetailByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/detail/by/type", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/paging", $body, $query, $extra);
    }

    /**
     * 设为默认
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/setIsDefaultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSetIsDefault($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/set/default", $body, $query, $extra);
    }

    /**
     * 设置状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/setStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountSetStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/set/status", $body, $query, $extra);
    }

    /**
     * 获取待审核列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/toAuditListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountToAuditListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/to/audit/listing", $body, $query, $extra);
    }

    /**
     * 核算单位详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/unitDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUnitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/unit/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/update", $body, $query, $extra);
    }

    /**
     * 更新审核状态
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/updateAuditStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountUpdateAuditStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/update/audit/status", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankAccountController/viewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankAccountView($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/account/view", $body, $query, $extra);
    }

    /**
     * 城市列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/citiesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseCities($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/cities", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHousePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/paging", $body, $query, $extra);
    }

    /**
     * 省份列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankHouseController/provincesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankHouseProvinces($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bankHouse/provinces", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/BankController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bank/paging", $body, $query, $extra);
    }

    /**
     * 公司信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/CompanyController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/info", $body, $query, $extra);
    }

    /**
     * 保司信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/InsurerController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/info", $body, $query, $extra);
    }

    /**
     * 连锁信息详情
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/info", $body, $query, $extra);
    }

    /**
     * 连锁配置信息
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantSettingsController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoMerchantSettings($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantsettings/info", $body, $query, $extra);
    }

    /**
     * 保司分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/InsurerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurer/paging", $body, $query, $extra);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/listing", $body, $query, $extra);
    }

    /**
     * 连锁分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/paging", $body, $query, $extra);
    }

    /**
     * 更新连锁负责人
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/updateLeaderAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantUpdateLeader($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/updateLeader", $body, $query, $extra);
    }

    /**
     * 药联公司分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/CompanyController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/company/paging", $body, $query, $extra);
    }
}
