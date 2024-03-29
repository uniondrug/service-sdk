<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Backends`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-09-11
 * @time   Fri, 11 Sep 2020 15:34:56 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Backends;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * IssueEquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class IssueEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'issue.equity.backend';

    /**
     * 添加日志
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/backend.equity.issue/api/Purchase/LogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createPurchaseLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/purchase/log/create", $body, $query, $extra);
    }

    /**
     * 项目执行情况统计
     * @link https://uniondrug.coding.net/p/backend.equity.issue/git/tree/development/app/backend.equity.issue/api/Purchase/LogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectExecutionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/project/Execution/info/paging", $body, $query, $extra);
    }
}
