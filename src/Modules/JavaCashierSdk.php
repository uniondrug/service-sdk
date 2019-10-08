<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/4/23
 * Time: 3:33 PM
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * JavaCashierSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaCashierSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaCashier';

    /**
     * 订单退款
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCashierRefund($body)
    {
        return $this->restful("POST", "/cashier/refund", $body);
    }

    /**
     * 订单支付
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCashierCreate($body)
    {
        return $this->restful("POST", "/cashier/create", $body);
    }

    /**
     * 订单消费
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCashierConsume($body)
    {
        return $this->restful("POST", "/cashier/consume", $body);
    }

    /**
     * 根据主订单号查询主订单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/cashierQuery.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryCashierByOutTradeNo($body)
    {
        return $this->restful("POST", "/cashier/queryCashierByOutTradeNo", $body);
    }

    /**
     * 根据主订单号/退单号 查询退单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/refundQuery.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryRefunds($body)
    {
        return $this->restful("POST", "/cashier/queryRefunds", $body);
    }

    /**
     * 根据主订单号查询主订单创建的所有支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/cashierQuery.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryCashierAllByOutTradeNo($body)
    {
        return $this->restful("POST", "/cashier/queryCashierAllByOutTradeNo", $body);
    }


    /**
     * 查询订单接口
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/api-docs/docs-cashier/cashierStatusCheck.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCheckStatus($body)
    {
        return $this->restful("POST", "/cashier/status/check", $body);
    }
}