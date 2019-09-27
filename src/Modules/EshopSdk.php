<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class EshopSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'eshop.union';

    /**
     * 接单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/TakeController/acceptAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function acceptOrder($body)
    {
        return $this->restful("POST", "/take/accept", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 物流状态同步
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/ExpressController/statusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderExpressStatus($body)
    {
        return $this->restful("POST", "/order/express/status", $body);
    }

    /**
     * 订单状态变更
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/statusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderStatus($body)
    {
        return $this->restful("POST", "/order/status", $body);
    }

    /**
     * 申请退款
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/refundAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 拒单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/TakeController/rejectAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function rejectOrder($body)
    {
        return $this->restful("POST", "/take/reject", $body);
    }
}
