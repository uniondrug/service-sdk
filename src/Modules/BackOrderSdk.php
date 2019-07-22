<?php

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * BackOrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class BackOrderSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaModule';

    /**
     * 订单计数
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberOrderCount($body)
    {
        return $this->restful("POST", "/order/query/member/queryOrderCount", $body);
    }

    /**
     * 子订单撤单退款
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cancelRefund($body)
    {
        return $this->restful("POST", "/order/cancel/sub", $body);
    }

    /**
     * 用户订单列表
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberOrderList($body)
    {
        return $this->restful("POST", "/order/query/main/bymember", $body);
    }

    /**
     * 更新物流信息
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function logistics($body)
    {
        return $this->restful("POST", "/logistics/create", $body);
    }

    /**
     * 药联到家配送发货
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function deliver($body)
    {
        return $this->restful("POST", "/logistics/deliver/notify", $body);
    }

    /**
     * 电商/o2o确认收货
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function receive($body)
    {
        return $this->restful("POST", "/logistics/receive/notify", $body);
    }

    /**
     * 电商同步商户单号
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function erpsn($body)
    {
        return $this->restful("POST", "/order/erpsn/update", $body);
    }

}
