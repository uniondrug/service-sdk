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
 * @date   2019-09-27
 * @time   Fri, 27 Sep 2019 14:50:12 +0800
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
     * 保险公司所在监管机构月市场保费数据
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/AreaInsureController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaInsureDetail($body)
    {
        return $this->restful("POST", "/areaInsure/detail", $body);
    }

    /**
     * 根据保司ID获取绑定信息
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/SettingsController/bindInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bindInfo($body)
    {
        return $this->restful("POST", "/settings/bindInfo", $body);
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
     * 某月占比=某月各监管区域内投保金额/全国投保金额
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureController/proportionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureProportion($body)
    {
        return $this->restful("POST", "/countryInsure/proportion", $body);
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
     * 最近本周待投
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/areaWeekAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countryInsureWeekAreaWeek($body)
    {
        return $this->restful("POST", "/countryInsureWeek/areaWeek", $body);
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
     * 预计待投
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/CountryInsureWeekController/expectInsureAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function expectInsure($body)
    {
        return $this->restful("POST", "/countryInsureWeek/expectInsure", $body);
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
     * 获取保司最近评分
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/getScoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getScore($body)
    {
        return $this->restful("POST", "/insureScore/getScore", $body);
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
     * 药联累计投保
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/totalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthTotal($body)
    {
        return $this->restful("POST", "/insureMonth/total", $body);
    }

    /**
     * 某监管机构内的所有保司每月投保数据总和
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/totalByAreaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthTotalByArea($body)
    {
        return $this->restful("POST", "/insureMonth/totalByArea", $body);
    }

    /**
     * 某保司累计投保
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/totalByInsureAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insureMonthTotalByInsure($body)
    {
        return $this->restful("POST", "/insureMonth/totalByInsure", $body);
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
     * 获取保司历史评分
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/scoreListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreList($body)
    {
        return $this->restful("POST", "/insureScore/scoreList", $body);
    }

    /**
     * 某月保司评分占比
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureScoreController/scoreProportionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreProportion($body)
    {
        return $this->restful("POST", "/insureScore/scoreProportion", $body);
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
     * 月度药联所有保险公司投保金额总和
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/InsureMonthController/unionTotalByMonthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unionTotalByMonth($body)
    {
        return $this->restful("POST", "/insureMonth/unionTotalByMonth", $body);
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

    /**
     * 微信登陆获取保司
     * @link https://uniondrug.coding.net/p/module.rank.insure/git/blob/development/docs/api/UsersController/WeChatLoginAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function weChatLogin($body)
    {
        return $this->restful("POST", "/users/weChatLogin", $body);
    }
}
