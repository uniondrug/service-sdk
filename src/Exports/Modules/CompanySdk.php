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
 * @date   2019-12-10
 * @time   Tue, 10 Dec 2019 16:26:53 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CompanySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CompanySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'company.module';

    /**
     * 兑换
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/exchangeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchange($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/exchange", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeCreate($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeDetail($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/detail", $body);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeDisable($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/disable", $body);
    }

    /**
     * 上架
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeEnable($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/enable", $body);
    }

    /**
     * List列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeListing($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/listing", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/AddValueServiceExchangeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addValueServiceExchangeUpdate($body)
    {
        return $this->restful("POST", "/addValueServiceExchange/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyCreate($body)
    {
        return $this->restful("POST", "/company/create", $body);
    }

    /**
     * 使用类比占比
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/Platform/DataController/purposeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyCustomerPurpose($body)
    {
        return $this->restful("POST", "/data/purpose", $body);
    }

    /**
     * 权益额，权益数，权益员工数，已发权益额占比
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/Platform/DataController/rightsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyDataRights($body)
    {
        return $this->restful("POST", "/data/rights", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyDetail($body)
    {
        return $this->restful("POST", "/company/detail", $body);
    }

    /**
     * 关闭
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyDisable($body)
    {
        return $this->restful("POST", "/company/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyEnable($body)
    {
        return $this->restful("POST", "/company/enable", $body);
    }

    /**
     * 使用金额，次数柱状图
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/Platform/DataController/histogramAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyHistogram($body)
    {
        return $this->restful("POST", "/data/histogram", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyPaging($body)
    {
        return $this->restful("POST", "/company/paging", $body);
    }

    /**
     * 各状态权益数占比
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/Platform/DataController/rightsProportionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyRightsProportion($body)
    {
        return $this->restful("POST", "/data/rightsProportion", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/CompanyController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyUpdate($body)
    {
        return $this->restful("POST", "/company/update", $body);
    }

    /**
     * 已使用金额，累计使用次数，权益使用人数，30天内即将过期权益
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/Platform/DataController/usedDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyUsedData($body)
    {
        return $this->restful("POST", "/data/usedData", $body);
    }

    /**
     * 批量删除
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/batchDeleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeBatchDelete($body)
    {
        return $this->restful("POST", "/employee/batch/delete", $body);
    }

    /**
     * 根据customerId获取雇员数量
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/employeeCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeCount($body)
    {
        return $this->restful("POST", "/employee/employeeCount", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeCreate($body)
    {
        return $this->restful("POST", "/employee/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeDelete($body)
    {
        return $this->restful("POST", "/employee/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeDetail($body)
    {
        return $this->restful("POST", "/employee/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeePaging($body)
    {
        return $this->restful("POST", "/employee/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeRedeemRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeRedeemRecordCreate($body)
    {
        return $this->restful("POST", "/employeeRedeemRecord/create", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeRedeemRecordController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeRedeemRecordList($body)
    {
        return $this->restful("POST", "/employeeRedeemRecord/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeRedeemRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeRedeemRecordPaging($body)
    {
        return $this->restful("POST", "/employeeRedeemRecord/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function employeeUpdate($body)
    {
        return $this->restful("POST", "/employee/update", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EquityController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityList($body)
    {
        return $this->restful("POST", "/equity/listing", $body);
    }

    /**
     * 企业平台员工导出sql
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/EmployeeController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportSql($body)
    {
        return $this->restful("POST", "/employee/export/sql", $body);
    }

    /**
     * 权益数据
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/RedeemController/dataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRedeemData($body)
    {
        return $this->restful("POST", "/redeem/data", $body);
    }

    /**
     * 根据memberId获取兑换码id数组
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/RedeemController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRedeemUserIds($body)
    {
        return $this->restful("POST", "/redeem/list", $body);
    }

    /**
     * 手动发放
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TimeSendLogController/giveOutBySelfAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function giveOutBySelf($body)
    {
        return $this->restful("POST", "/timeSendLog/giveOutBySelf", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/MemberController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberList($body)
    {
        return $this->restful("POST", "/member/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeRecordCreate($body)
    {
        return $this->restful("POST", "/pointExchangeRecord/create", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeRecordController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeRecordExport($body)
    {
        return $this->restful("POST", "/pointExchangeRecord/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeRecordPaging($body)
    {
        return $this->restful("POST", "/pointExchangeRecord/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeSettingController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeSettingCreate($body)
    {
        return $this->restful("POST", "/pointExchangeSetting/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeSettingController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeSettingDetail($body)
    {
        return $this->restful("POST", "/pointExchangeSetting/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeSettingController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointExchangeSettingUpdate($body)
    {
        return $this->restful("POST", "/pointExchangeSetting/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointRecordCreate($body)
    {
        return $this->restful("POST", "/pointRecord/create", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointRecordController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointRecordExport($body)
    {
        return $this->restful("POST", "/pointRecord/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointRecordPaging($body)
    {
        return $this->restful("POST", "/pointRecord/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointSettingController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointSettingCreate($body)
    {
        return $this->restful("POST", "/pointSetting/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointSettingController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointSettingDetail($body)
    {
        return $this->restful("POST", "/pointSetting/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointSettingController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointSettingList($body)
    {
        return $this->restful("POST", "/pointSetting/list", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointSettingController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointSettingUpdate($body)
    {
        return $this->restful("POST", "/pointSetting/update", $body);
    }

    /**
     * 设置积分购买权益折扣
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeSettingController/setDiscountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setDiscount($body)
    {
        return $this->restful("POST", "/pointExchangeSetting/setDiscount", $body);
    }

    /**
     * 开关控制
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/PointExchangeSettingController/controlSwitchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settingControlSwitch($body)
    {
        return $this->restful("POST", "/pointExchangeSetting/controlSwitch", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagCreate($body)
    {
        return $this->restful("POST", "/tag/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagDelete($body)
    {
        return $this->restful("POST", "/tag/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagDetail($body)
    {
        return $this->restful("POST", "/tag/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagListing($body)
    {
        return $this->restful("POST", "/tag/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagPaging($body)
    {
        return $this->restful("POST", "/tag/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TagController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagUpdate($body)
    {
        return $this->restful("POST", "/tag/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/TimeSendLogController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function timeSendLogCreate($body)
    {
        return $this->restful("POST", "/timeSendLog/create", $body);
    }

    /**
     * 根据openID获取账户信息
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/userByOpenIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userByOpenId($body)
    {
        return $this->restful("POST", "/user/userByOpenId", $body);
    }

    /**
     * 账户启用|停用
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userChange($body)
    {
        return $this->restful("POST", "/user/change", $body);
    }

    /**
     * 利用手机号更新账号openID
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/changeOpenIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userChangeOpenId($body)
    {
        return $this->restful("POST", "/user/changeOpenId", $body);
    }

    /**
     * 根据手机号码获取账户信息
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/checkStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userCheckStatus($body)
    {
        return $this->restful("POST", "/user/checkStatus", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userCreate($body)
    {
        return $this->restful("POST", "/user/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userDetail($body)
    {
        return $this->restful("POST", "/user/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.company/git/blob/development/docs/api/UserController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userUpdate($body)
    {
        return $this->restful("POST", "/user/update", $body);
    }
}
