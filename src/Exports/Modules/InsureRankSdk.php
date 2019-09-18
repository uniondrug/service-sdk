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
 * @date   2019-09-18
 * @time   Wed, 18 Sep 2019 17:56:36 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * InsureRankSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InsureRankSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'insure.rank.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsureCreate($body)
    {
        return $this->restful("POST", "/areaInsure/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsureDetail($body)
    {
        return $this->restful("POST", "/areaInsure/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsureListing($body)
    {
        return $this->restful("POST", "/areaInsure/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsurePaging($body)
    {
        return $this->restful("POST", "/areaInsure/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsureUpdate($body)
    {
        return $this->restful("POST", "/areaInsure/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureCreate($body)
    {
        return $this->restful("POST", "/countryInsure/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureDetail($body)
    {
        return $this->restful("POST", "/countryInsure/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsurePaging($body)
    {
        return $this->restful("POST", "/countryInsure/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureUpdate($body)
    {
        return $this->restful("POST", "/countryInsure/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureWeekCreate($body)
    {
        return $this->restful("POST", "/countryInsureWeek/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureWeekDetail($body)
    {
        return $this->restful("POST", "/countryInsureWeek/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureWeekPaging($body)
    {
        return $this->restful("POST", "/countryInsureWeek/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureWeekUpdate($body)
    {
        return $this->restful("POST", "/countryInsureWeek/update", $body);
    }

    /**
     * 首次登陆
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/firstLoginAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function firstLogin($body)
    {
        return $this->restful("POST", "/users/firstLogin", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthCreate($body)
    {
        return $this->restful("POST", "/insureMonth/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthDetail($body)
    {
        return $this->restful("POST", "/insureMonth/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthPaging($body)
    {
        return $this->restful("POST", "/insureMonth/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthUpdate($body)
    {
        return $this->restful("POST", "/insureMonth/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureScoreCreate($body)
    {
        return $this->restful("POST", "/insureScore/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureScoreDetail($body)
    {
        return $this->restful("POST", "/insureScore/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureScorePaging($body)
    {
        return $this->restful("POST", "/insureScore/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureScoreUpdate($body)
    {
        return $this->restful("POST", "/insureScore/update", $body);
    }

    /**
     * 最后一次登陆
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/lastLoginAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function lastLogin($body)
    {
        return $this->restful("POST", "/users/lastLogin", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/RegulatorController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function regulatorDetail($body)
    {
        return $this->restful("POST", "/regulator/detail", $body);
    }

    /**
     * 信息列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/RegulatorController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function regulatorListing($body)
    {
        return $this->restful("POST", "/regulator/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/SettingsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingsCreate($body)
    {
        return $this->restful("POST", "/settings/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/SettingsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingsDetail($body)
    {
        return $this->restful("POST", "/settings/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/SettingsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingsPaging($body)
    {
        return $this->restful("POST", "/settings/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/SettingsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingsUpdate($body)
    {
        return $this->restful("POST", "/settings/update", $body);
    }

    /**
     * 绑定微信
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/bindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersBind($body)
    {
        return $this->restful("POST", "/users/bind", $body);
    }

    /**
     * 启用|停用
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersChange($body)
    {
        return $this->restful("POST", "/users/change", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersCreate($body)
    {
        return $this->restful("POST", "/users/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersDetail($body)
    {
        return $this->restful("POST", "/users/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersPaging($body)
    {
        return $this->restful("POST", "/users/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdate($body)
    {
        return $this->restful("POST", "/users/update", $body);
    }
}
