<?php
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
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
     * @return ResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 预发布订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/preCreateOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function preCreateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 获取订单详情
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/selectOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function selectOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 查询运费
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/master/docs/api/Express/HuoJuController/selectFreightAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function selectFee($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 百度调用-查询运费
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/master/docs/api/Express/HuoJuController/InquiryFreightAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function inquiryFee($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 取消订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/cancelOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function cancelOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 锁定订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/lockOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function lockOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 订单退款
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/refundOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 修改订单
     * @link https://uniondrug.coding.net/p/module.partners.express/git/blob/testing/docs/api/Express/HuoJuController/updateOrderAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function updateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 物流查询快递100
     * @link https://uniondrug.coding.net/p/module.partners.express/d/module.partners.express/git/blob/testing/docs/api/Express/Express100Controller/selectInquiryAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function logisticsInquiry($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }

    /**
     * 快递列表展示
     * @link https://uniondrug.coding.net/p/module.partners.express/d/module.partners.express/git/blob/testing/docs/api/Express/ExpressListController/showListAction.md
     * @param array $body
     * @return ResponseInterface
     */
    public function showList($body)
    {
        return $this->restful(static::METHOD_POST, "/index", $body);
    }
}
