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
 * @date   2019-06-05
 * @time   Wed, 05 Jun 2019 10:10:32 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

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
}
