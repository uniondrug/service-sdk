<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-06-17
 * Time: 19:56
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaCashierSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaCashierSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.cashier.module';

    /**
     * 订单退款
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierRefund($body)
    {
        return $this->restful("POST", "/cashier/refund", $body);
    }

    /**
     * 订单支付
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierCreate($body)
    {
        return $this->restful("POST", "/cashier/create", $body);
    }

    /**
     * 订单消费
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierConsume($body)
    {
        return $this->restful("POST", "/cashier/consume", $body);
    }

    /**
     * 根据主订单号查询主订单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/cashierQuery.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryCashierByOutTradeNo($body)
    {
        return $this->restful("POST", "/cashier/queryCashierByOutTradeNo", $body);
    }

    /**
     * 根据主订单号/退单号 查询退单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/refundQuery.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryRefunds($body)
    {
        return $this->restful("POST", "/cashier/queryRefunds", $body);
    }

    /**
     * 查询订单接口
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/api-docs/docs-cashier/cashierStatusCheck.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCheckStatus($body)
    {
        return $this->restful("POST", "/cashier/status/check", $body);
    }

    /**
     * 根据主订单号查询主订单所有支付信息
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryCashierAllByOutTradeNo($body)
    {
        return $this->restful("POST", "/cashier/queryCashierAllByOutTradeNo", $body);
    }
}