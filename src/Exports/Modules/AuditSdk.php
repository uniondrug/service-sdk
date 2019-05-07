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
 * @date   2019-04-28
 * @time   Sun, 28 Apr 2019 10:58:35 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AuditSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AuditSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'audit.module';

    /**
     * 根据审核单自动审核
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/AuditController/autoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AuditAuto($body)
    {
        return $this->restful("POST", "/audit/auto", $body);
    }

    /**
     * 创建审核单
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/AuditController/formAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AuditCreateForm($body)
    {
        return $this->restful("POST", "/audit/form", $body);
    }

    /**
     * erp换新订单审核
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/ErpOrderController/auditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditErpOrder($body)
    {
        return $this->restful("POST", "/erporder/audit", $body);
    }

    /**
     * 判断增值服务是否可以回收
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/WaiterController/auditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function isRecover($body)
    {
        return $this->restful("POST", "/waiter/isrecover", $body);
    }
}
