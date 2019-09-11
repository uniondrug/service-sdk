<?php

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 火聚快递模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class HuoJuExpressSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'huoJuExpress';
    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/createOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 预发布订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/preCreateOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function preCreateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 获取订单详情
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/selectOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function selectOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
    /**
     * 取消订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/master/docs/api/Express/HuoJuController/selectFreightAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function selectFee($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
    /**
     * 取消订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/cancelOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancelOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
    /**
     * 锁定订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/lockOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function lockOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
    /**
     * 订单退款
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/refundOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
    /**
     * 修改订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/updateOrderAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function updateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

}
