<?php
/**
 * @author wss
 * @date   : 2018-07-25
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 订单服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class OrderSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'order';
    /**
     * 订单查询(
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/order/info", $body);
    }
    /**
     * 订单修改
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderEdit($body)
    {
        return $this->restful(static::METHOD_POST, "/order/edit", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getList($body)
    {
        return $this->restful(static::METHOD_POST, "/order", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/order/detail", $body);
    }

    /**
     * 订单撤单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful(static::METHOD_POST, "/order/cancel", $body);
    }

    /**
     * 订单回推
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function push($body)
    {
        return $this->restful(static::METHOD_POST, "/order/push", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/order/create", $body);
    }

    /**
     * 订单回调
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notify($body)
    {
        return $this->restful(static::METHOD_POST, "/order/notify", $body);
    }

    /**
     * 校验erp流水号
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function checkErp($body)
    {
        return $this->restful(static::METHOD_POST, "/order/checkErp", $body);
    }


    /**
     * 物流订单添加
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderLogisticsController/addAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function addOrderLogistics($body)
    {
        return $this->restful(static::METHOD_POST, "/orderlogistics/add", $body);
    }

    /**
     * 订单号查询物流列表
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderLogisticsController/pagingAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function pagingOrderLogistics($body)
    {
        return $this->restful(static::METHOD_POST, "/orderlogistics/paging", $body);
    }

    /**
     * 订单号查询物流数量
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderController/memberStatusCountAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function memberStatusCount($body)
    {
        return $this->restful(static::METHOD_POST, "/order/memberstatuscount", $body);
    }

    /**
     * 用户查询物流列表
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderController/memberStatusListAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function memberStatusList($body)
    {
        return $this->restful(static::METHOD_POST, "/order/memberstatuslist", $body);
    }

    /**
     * 订单号退单
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderController/refundOrderAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/refundorder", $body);
    }

    /**
     * 订单号查询支付单号
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderController/getOrderNoAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getOrderNo($body)
    {
        return $this->restful(static::METHOD_POST, "/order/getorderno", $body);
    }

    /**
     * 订单号跟新支付数据
     * @link https://uniondrug.coding.net/p/module.order/git/blob/development/docs/api/OrderController/editAmountAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function editAmount($body)
    {
        return $this->restful(static::METHOD_POST, "/order/editamount", $body);
    }











}