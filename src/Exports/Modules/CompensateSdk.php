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
 * @date   2019-07-02
 * @time   Tue, 02 Jul 2019 18:00:50 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CompensateSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CompensateSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'compensate.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizeCreate($body)
    {
        return $this->restful("POST", "/authorize/create", $body);
    }

    /**
     * 取消授权
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizeDelete($body)
    {
        return $this->restful("POST", "/authorize/delete", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizePaging($body)
    {
        return $this->restful("POST", "/authorize/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function BillConfirmCreate($body)
    {
        return $this->restful("POST", "/billConfirm/create", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function BillConfirmList($body)
    {
        return $this->restful("POST", "/billConfirm/list", $body);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/CustomerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function customerPaging($body)
    {
        return $this->restful("POST", "/customer/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceBindList($body)
    {
        return $this->restful("POST", "/insurance/bind/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceCreate($body)
    {
        return $this->restful("POST", "/insurance/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceDetail($body)
    {
        return $this->restful("POST", "/insurance/detail", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceDisable($body)
    {
        return $this->restful("POST", "/insurance/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceEnable($body)
    {
        return $this->restful("POST", "/insurance/enable", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insurancePaging($body)
    {
        return $this->restful("POST", "/insurance/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsCreate($body)
    {
        return $this->restful("POST", "/logs/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsPaging($body)
    {
        return $this->restful("POST", "/logs/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportCreate($body)
    {
        return $this->restful("POST", "/report/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportDetail($body)
    {
        return $this->restful("POST", "/report/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportPaging($body)
    {
        return $this->restful("POST", "/report/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportUpdate($body)
    {
        return $this->restful("POST", "/report/update", $body);
    }

    /**
     * 解绑
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/unbindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unbindInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/unbind", $body);
    }

    /**
     * customerIds获取项目数
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectCountByCustomerIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectCountByCustomerId($body)
    {
        return $this->restful("POST", "/project/countByCustomerId", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemListing($body)
    {
        return $this->restful("POST", "/redeem/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesCreate($body)
    {
        return $this->restful("POST", "/ie/guarantees/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesDelete($body)
    {
        return $this->restful("POST", "/ie/guarantees/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesDetail($body)
    {
        return $this->restful("POST", "/ie/guarantees/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesListing($body)
    {
        return $this->restful("POST", "/ie/guarantees/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesPaging($body)
    {
        return $this->restful("POST", "/ie/guarantees/paging", $body);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/statusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesStatusList($body)
    {
        return $this->restful("POST", "/ie/guarantees/status/list", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesUpdate($body)
    {
        return $this->restful("POST", "/ie/guarantees/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageCreate($body)
    {
        return $this->restful("POST", "/ie/package/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageDelete($body)
    {
        return $this->restful("POST", "/ie/package/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageDetail($body)
    {
        return $this->restful("POST", "/ie/package/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupCreate($body)
    {
        return $this->restful("POST", "/ie/package/group/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupDelete($body)
    {
        return $this->restful("POST", "/ie/package/group/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupDetail($body)
    {
        return $this->restful("POST", "/ie/package/group/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupListing($body)
    {
        return $this->restful("POST", "/ie/package/group/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupPaging($body)
    {
        return $this->restful("POST", "/ie/package/group/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupUpdate($body)
    {
        return $this->restful("POST", "/ie/package/group/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeCreate($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDelete($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDetail($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeListing($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteePaging($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeUpdate($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/update", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageListing($body)
    {
        return $this->restful("POST", "/ie/package/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackagePaging($body)
    {
        return $this->restful("POST", "/ie/package/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageUpdate($body)
    {
        return $this->restful("POST", "/ie/package/update", $body);
    }
}
