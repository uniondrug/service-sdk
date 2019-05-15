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
 * @date   2019-05-15
 * @time   Wed, 15 May 2019 19:37:18 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * AuditSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AuditSdk extends Sdk implements ServiceSdkInterface
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
     * 发起换药申请
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/ChangeController/applyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeApply($body)
    {
        return $this->restful("POST", "/change/apply", $body);
    }

    /**
     * 执行审核流程
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/ChangeController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeClaim($body)
    {
        return $this->restful("POST", "/change/claim", $body);
    }

    /**
     * 拒绝审核流程
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/ChangeController/rejectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeReject($body)
    {
        return $this->restful("POST", "/change/reject", $body);
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

    /**
     * 增值服务即买即用的自动审核
     * 订单支付完成后调用
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/AuditController/serviceAutoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serviceAuto($body)
    {
        return $this->restful("POST", "/audit/service/auto", $body);
    }

    /**
     * 增值服务
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/AuditController/serviceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serviceImmediately($body)
    {
        return $this->restful("POST", "/audit/service/immediately", $body);
    }

    /**
     * 回收
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/docs/api/AuditController/serviceCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serviceRecover($body)
    {
        return $this->restful("POST", "/audit/service/recover", $body);
    }
}
