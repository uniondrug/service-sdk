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
 * @date   2020-12-10
 * @time   Thu, 10 Dec 2020 15:18:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 根据权益id 获取增值服务审核单的详情，不包括换药
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addedDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/added/detail", $body, $query, $extra);
    }

    /**
     * 根据子订单号查询审核单详情，不包括换药
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/getDetailByOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addedDetailByOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/added/detail/orderno", $body, $query, $extra);
    }

    /**
     * 根据审核单自动审核
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/autoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function AuditAuto($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/auto", $body, $query, $extra);
    }

    /**
     * 根据订单号获取换药审核单详情
     * 优先子订单
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/changeDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditChangeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/change/detail", $body, $query, $extra);
    }

    /**
     * 创建审核单
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/formAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function AuditCreateForm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/form", $body, $query, $extra);
    }

    /**
     * 根据审核单
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/auditDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/detail", $body, $query, $extra);
    }

    /**
     * 通过订单号和productId获取保障ID和权益ID
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/getEquityAndGuaranteeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditGetEquityAndGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/getProductAndGuarantee", $body, $query, $extra);
    }

    /**
     * 根据保障类型和保障id获取子订单
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/getSubOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditGetSubOrderNoByGuaranteeIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/getSubOrderNo", $body, $query, $extra);
    }

    /**
     * 重新审核
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditScriptController/retryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function auditScriptRetry($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/script/retry", $body, $query, $extra);
    }

    /**
     * canBuyRenewAction()
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/QueryController/canBuyRenewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function canBuyRenew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/query/canBuyRenew", $body, $query, $extra);
    }

    /**
     * 发起换药申请
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/ChangeController/applyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/apply", $body, $query, $extra);
    }

    /**
     * 执行审核流程
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/ChangeController/claimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/claim", $body, $query, $extra);
    }

    /**
     * 获取理赔单详情
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/ChangeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/detail", $body, $query, $extra);
    }

    /**
     * 根据保障id 获取最新的理赔单详情
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/ChangeController/detailGuaranteeIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeDetailGuaranteeId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/detail/guaranteeid", $body, $query, $extra);
    }

    /**
     * 拒绝审核流程
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/ChangeController/rejectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeReject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/reject", $body, $query, $extra);
    }

    /**
     * 判断增值服务是否可以回收
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/WaiterController/auditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/waiter/isrecover", $body, $query, $extra);
    }

    /**
     * 获取本月本周的换药审核数量
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/MemberCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/membercount", $body, $query, $extra);
    }

    /**
     * 查询换新订单商品驳回原因接口
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/QueryController/orderGoodsRejectReasonAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderGoodsRejectReason($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/query/orderGoodsRejectReason", $body, $query, $extra);
    }

    /**
     * 增值服务 即买即用
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/serviceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceImmediately($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/service/immediately", $body, $query, $extra);
    }

    /**
     * 回收
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/AuditController/serviceCancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/audit/service/recover", $body, $query, $extra);
    }

    /**
     * 查询换新订单整单驳回原因接口
     * @link https://uniondrug.coding.net/p/module.audit/git/blob/development/module.audit/api/QueryController/wholeOrderRejectReasonAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function wholeOrderRejectReason($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/query/wholeOrderRejectReason", $body, $query, $extra);
    }
}
