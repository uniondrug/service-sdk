<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * JavaOrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaOrderSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaModule';

    /**
     * 新增订单
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCreate($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 订单完成支付
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderFinishPay($body)
    {
        return $this->restful("POST", "/order/finishpay", $body);
    }

    /**
     * 订单支付失败
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderFailPay($body)
    {
        return $this->restful("POST", "/order/failpay", $body);
    }

    /**
     * 取消订单
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 商品或主表单退单
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderRefund($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 服务退货流程
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderRefundService($body)
    {
        return $this->restful("POST", "/order/refund/service", $body);
    }

    /**
     * 数据统计
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function statisticsByPartner($body)
    {
        return $this->restful("POST", "order/query/statisticsByMerchant", $body);
    }

    /**
     * 检查erp是否重复
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function checkErpRepeat($body)
    {
        return $this->restful("POST", "/order/query/erpcheck", $body);
    }

    /**
     * 获取药品详情
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function getItemDetail($body)
    {
        return $this->restful("POST", "/order/query/item", $body);
    }

    /**
     * 订单主订单详情
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryMain($body)
    {
        return $this->restful("POST", "/order/query/main", $body);
    }

    /**
     * 订单子订单详情
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQuerySub($body)
    {
        return $this->restful("POST", "/order/query/sub", $body);

    }

    /**
     * orderNos查询
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderNos($body)
    {
        return $this->restful("POST", "/order/query/sub/list", $body);

    }

    /**
     * 修改订单店员信息
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateAssistant($body)
    {
        return $this->restful("POST", "/order/assistant/update", $body);

    }

    /**
     * 订单memberId查询主订单
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryMember($body)
    {
        return $this->restful("POST", "/order/query/member", $body);
    }

    /**
     * 子订单查询列表
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderQueryBycondition($body)
    {
        return $this->restful("POST", "/order/query/sub/list/bycondition", $body);
    }
}
