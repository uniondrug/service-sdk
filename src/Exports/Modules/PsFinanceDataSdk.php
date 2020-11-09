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
 * @date   2020-10-21
 * @time   Wed, 21 Oct 2020 16:20:23 +0800
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
     * 连锁分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-data/git/blob/development/docs/api/MerchantController/infoAction.md
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
