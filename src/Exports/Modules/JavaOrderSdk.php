<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * JavaOrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaOrderSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.order.module';

    /**
     * 新增订单
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCreate($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 取消订单
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 商品或主表单退单
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefund($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 订单退单服务
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundService($body)
    {
        return $this->restful("POST", "/order/refund/service", $body);
    }

    /**
     * 订单退款
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierRefund($body)
    {
        return $this->restful("POST", "/order/cashier/refund", $body);
    }

    /**
     * 订单支付
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierCreate($body)
    {
        return $this->restful("POST", "/order/cashier/create", $body);
    }

    /**
     * 订单主订单查询
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryMain($body)
    {
        return $this->restful("POST", "/order/query/main", $body);
    }

    /**
     * 订单memberId查询主订单
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryMember($body)
    {
        return $this->restful("POST", "/order/query/member", $body);
    }
}
