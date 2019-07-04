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
 * @date   2019-07-01
 * @time   Mon, 01 Jul 2019 18:07:02 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * CompensateSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CompensateSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'compensate';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function authorizeCreate($body)
    {
        return $this->restful("POST", "/authorize/create", $body);
    }

    /**
     * 取消授权
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/deleteAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function authorizeDelete($body)
    {
        return $this->restful("POST", "/authorize/delete", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function authorizePaging($body)
    {
        return $this->restful("POST", "/authorize/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function BillConfirmCreate($body)
    {
        return $this->restful("POST", "/billConfirm/create", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function BillConfirmList($body)
    {
        return $this->restful("POST", "/billConfirm/list", $body);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function createInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/CustomerController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function customerPaging($body)
    {
        return $this->restful("POST", "/customer/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insuranceBindList($body)
    {
        return $this->restful("POST", "/insurance/bind/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insuranceCreate($body)
    {
        return $this->restful("POST", "/insurance/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insuranceDetail($body)
    {
        return $this->restful("POST", "/insurance/detail", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/disableAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insuranceDisable($body)
    {
        return $this->restful("POST", "/insurance/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/enableAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insuranceEnable($body)
    {
        return $this->restful("POST", "/insurance/enable", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function insurancePaging($body)
    {
        return $this->restful("POST", "/insurance/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function logsCreate($body)
    {
        return $this->restful("POST", "/logs/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function logsPaging($body)
    {
        return $this->restful("POST", "/logs/paging", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportCreate($body)
    {
        return $this->restful("POST", "/report/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportDetail($body)
    {
        return $this->restful("POST", "/report/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportPaging($body)
    {
        return $this->restful("POST", "/report/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function reportUpdate($body)
    {
        return $this->restful("POST", "/report/update", $body);
    }

    /**
     * 解绑
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/unbindAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function unbindInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/unbind", $body);
    }

    /**
     * 理赔概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/claimAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectClaimStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/claim", $body);
    }

    /**
     * 消费概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/consumeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectConsumeStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/consume", $body);
    }

    /**
     * 消费概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/equityAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectEquityStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/equity", $body);
    }
}
