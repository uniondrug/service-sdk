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
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderCancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 商品或主表单退单
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderRefund($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 服务退货流程
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
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
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryMain($body)
    {
        return $this->restful("POST", "/order/query/main", $body);
    }

    /**
     * 订单子订单详情
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQuerySub($body)
    {
        return $this->restful("POST", "/order/query/sub", $body);
    }

    /**
     * orderNos查询
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderNos($body)
    {
        return $this->restful("POST", "/order/query/sub/list", $body);
    }

    /**
     * 主订单列表orderNos查询
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderMainNos($body)
    {
        return $this->restful("POST", "/order/query/queryMainOrderNoList", $body);
    }

    /**
     * 修改订单店员信息
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function updateAssistant($body)
    {
        return $this->restful("POST", "/order/assistant/update", $body);
    }

    /**
     * 订单memberId查询主订单
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryMember($body)
    {
        return $this->restful("POST", "/order/query/member", $body);
    }

    /**
     * 子订单查询列表
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryBycondition($body)
    {
        return $this->restful("POST", "/order/query/sub/list/bycondition", $body);
    }

    /**
     * 子订单列表检索
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQuerySubOrderListForAdmin($body)
    {
        return $this->restful("POST", "/order/query/querySubOrderListForAdmin", $body);
    }

    /**
     * 直付子订单退单流程
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-order-service/doc/orderRefundGoods.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderRefundGoods($body)
    {
        return $this->restful("POST", "/order/refund/goods", $body);
    }

    /**
     * 根据退单号查询退款商品列表
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryRefundGoodsListForAdmin($body)
    {
        return $this->restful("POST", "/order/query/queryRefundGoodsListForAdmin", $body);
    }

    /**
     * 根据子订单号查询退款单列表
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryRefundList($body)
    {
        return $this->restful("POST", "/order/query/queryRefundList", $body);
    }

    /**
     * 根据子订单号查询退款商品列表
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderQueryItemListByOrderNo($body)
    {
        return $this->restful("POST", "/order/query/queryItemListByOrderNo", $body);
    }

    /**
     * 订单退单退款接口
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderRefundCashierExecute($body)
    {
        return $this->restful("POST", "/refund/cashier/execute", $body);
    }

    /**
     * 订单列表接口
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function queryMainOrderListByTerm($body)
    {
        return $this->restful("POST", "/order/query/queryMainOrderListByTerm", $body);
    }

    /**
     * 收货通知接口
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/api-docs/docs-order/orderLogisticsReceived.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function logisticsReceiveNotify($body)
    {
        return $this->restful("POST", "/logistics/receive/notify", $body);
    }

    /**
     * 订单支付
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderCashierCreate($body)
    {
        return $this->restful("POST", "/cashier/create", $body);
    }

    /**
     * 订单消费
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderCashierConsume($body)
    {
        return $this->restful("POST", "/cashier/consume", $body);
    }

    /**
     * O2O订单发货
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderCashierNotify($body)
    {
        return $this->restful("POST", "/logistics/deliver/notify", $body);
    }

    /**
     * 更新订单ErpSn信息接口
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @link
     */
    public function orderCashierUpdate($body)
    {
        return $this->restful("POST", "/order/erpsn/update", $body);
    }

    /**
     * 查询用户 待付款，待发货，待收货的订单数量
     * @link https://uniondrug.coding.net/p/java.module.order/d/java.module.order/git/blob/development/api-docs/docs-order/orderQueryMemberOrderCount.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function queryOrderCount($body)
    {
        return $this->restful("POST", "/order/query/member/queryOrderCount", $body);
    }


}
