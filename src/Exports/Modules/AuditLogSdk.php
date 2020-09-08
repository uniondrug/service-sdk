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
 * @date   2020-08-19
 * @time   Wed, 19 Aug 2020 16:47:33 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AuditLogSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AuditLogSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.auditlog';

    /**
     * 日志查询
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/docs/java.middlend.auditlog/uniondrug-auditlog-query/auditlog-query.md#user-content-%E6%97%A5%E5%BF%97%E6%9F%A5%E8%AF%A2%E6%8E%A5%E5%8F%A3
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function queryData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/auditlog/query/data", $body, $query, $extra);
    }

}
