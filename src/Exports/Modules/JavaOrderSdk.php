<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 订单完成支付
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderFinishPay($body)
    {
        return $this->restful("POST", "/order/finishpay", $body);
    }

    /**
     * 订单支付失败
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/orderCreate.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderFailPay($body)
    {
        return $this->restful("POST", "/order/failpay", $body);
    }

    /**
     * 取消订单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderCancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 取消子订单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderCancelSub($body)
    {
        return $this->restful("POST", "/order/cancel/sub", $body);
    }

    /**
     * 商品或主表单退单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderRefund($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 服务退货流程
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderRefundService($body)
    {
        return $this->restful("POST", "/order/refund/service", $body);
    }
    
    /**
     * 新版创建订单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderV2Create($body)
    {
        return $this->restful("POST", "/order/v2/create", $body);
    }
   

    /**
     * 订单退款
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderCashierRefund($body)
    {
        return $this->restful("POST", "/order/cashier/refund", $body);
    }

    /**
     * 订单支付
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderCashierCreate($body)
    {
        return $this->restful("POST", "/cashier/create", $body);
    }

    /**
     * 订单主订单查询
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryMain($body)
    {
        return $this->restful("POST", "/order/query/main", $body);
    }

    /**
     * 订单子订单详情
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQuerySub($body)
    {
        return $this->restful("POST", "/order/query/sub", $body);
    }

    /**
     * 订单memberId查询主订单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryMember($body)
    {
        return $this->restful("POST", "/order/query/member", $body);
    }

    /**
     * 订单子订单分页列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryPage($body)
    {
        return $this->restful("POST", "/order/query/sub/list/bycondition", $body);
    }

    /**
     * 子订单查询列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryBycondition($body)
    {
        return $this->restful("POST", "/order/query/sub/list/bycondition", $body);
    }

    /**
     * 子订单列表检索(已转到 javaOrderQuerySdk.php)
     * @param array $body 入参类型
     * @return ResponseInterface
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
     * @return ResponseInterface
     */
    public function orderRefundGoods($body)
    {
        return $this->restful("POST", "/order/refund/goods", $body);
    }

    /**
     * 根据退单号查询退款商品列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryRefundGoodsListForAdmin($body)
    {
        return $this->restful("POST", "/order/query/queryRefundGoodsListForAdmin", $body);
    }

    /**
     * 根据子订单号查询退款单列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryRefundList($body)
    {
        return $this->restful("POST", "/order/query/queryRefundList", $body);
    }

    /**
     * 根据子订单号查询退款商品列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryItemListByOrderNo($body)
    {
        return $this->restful("POST", "/order/query/queryItemListByOrderNo", $body);
    }

    /**
     * 订单退单退款接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderRefundCashierExecute($body)
    {
        return $this->restful("POST", "/refund/cashier/execute", $body);
    }

    /**
     * 订单列表接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function queryMainOrderListByTerm($body)
    {
        return $this->restful("POST", "/order/query/queryMainOrderListByTerm", $body);
    }

    /**
     * 重复支付主订单退款接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function mainOrderRefundCashier($body)
    {
        return $this->restful("POST", "/cancel/cashier/doublespending/main", $body);
    }

    /**
     * 已撤销有付款信息的子订单退款接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function subOrderRefundCashier($body)
    {
        return $this->restful("POST", "/cancel/cashier/sub", $body);
    }

    /**
     * 订单退款查询接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryCashierCancel($body)
    {
        return $this->restful("POST", "/cashier/cancel/query", $body);
    }

    /**
     * 根据门店id统计审核失败订单数量
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderQueryAuditByStore($body)
    {
        return $this->restful("POST", "/order/query/audit/bystore", $body);
    }

    /**
     * 根据主订单号集合获取子订单列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function queryMainOrderNoList($body)
    {
        return $this->restful("POST", "/order/query/queryMainOrderNoList", $body);
    }

    /**
     * 组合商品退货流程
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderRefundPackage($body)
    {
        return $this->restful("POST", "/order/refund/package", $body);
    }

    /**
     * 修改订单店员信息
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function updateAssistant($body)
    {
        return $this->restful("POST", "/order/assistant/update", $body);
    }

    /**
     * 配送发货
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deliver($body)
    {
        return $this->restful("POST", "/logistics/deliver/notify", $body);
    }

    /**
     * 到家配送发货
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function o2oDeliver($body)
    {
        return $this->restful("POST", "/order/deliver/notify", $body);
    }

    /**
     * 收货
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function receive($body)
    {
        return $this->restful("POST", "/logistics/receive/notify", $body);
    }

    /**
     * 检查erp是否重复
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkErpRepeat($body)
    {
        return $this->restful("POST", "/order/query/erpcheck", $body);
    }

    /**
     * 更新订单ErpSn信息接口
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function orderErpUpdate($body)
    {
        return $this->restful("POST", "/order/erpsn/update", $body);
    }

    /**
     * 订单消费
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCashierConsume($body)
    {
        return $this->restful("POST", "/cashier/consume", $body);
    }

    /**
     * 数据统计
     * @param $body
     * @return ResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function statisticsByPartner($body)
    {
        return $this->restful("POST", "/order/query/statisticsByMerchant", $body);
    }

    /**
     * 三方/处方信息同步
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function thirdinfoSync($body)
    {
        return $this->restful("POST", "/order/thirdinfo/sync", $body);
    }
}
