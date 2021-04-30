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
 * @date   2021-04-30
 * @time   Fri, 30 Apr 2021 11:04:36 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsUdcsModuleSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsUdcsModuleSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-module-udcs';

    /**
     * 基于连锁和批次查询
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/BatchDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchDetailBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/batchdetail", $body, $query, $extra);
    }

    /**
     * 认领动作
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/claimStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimStatusBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/claimstatus", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/detail", $body, $query, $extra);
    }

    /**
     * 确认动作
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/finishStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function finishStatusBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/finishstatus", $body, $query, $extra);
    }

    /**
     * 集合
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/CrowdsourcingBatchController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listCrowdsourcingBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/crowdsourcingBatch/listing", $body, $query, $extra);
    }

    /**
     * 无法确认动作
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/noStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function noStatusBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/nostatus", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/paging", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/CrowdsourcingBatchController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingCrowdsourcingBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/crowdsourcingBatch/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-udcs-module/git/blob/development/docs/api/BatchDetailedController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateBatchDetailed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchDetailed/update", $body, $query, $extra);
    }
}
