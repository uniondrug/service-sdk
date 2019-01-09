<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 药品中心服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class PartnersSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'partners';

    /**
     * O2O订单回推
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/OrderController/callback.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function callbackOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/orderInsert", $body);
    }

    /**
     * 电商下预订单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/preOrder.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function preOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/preOrder", $body);
    }

    /**
     * 电商确认下单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/payOrder.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function payOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/payOrder", $body);
    }

    /**
     * 电商运费获取
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/getFreight.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getFreight($body)
    {
        return $this->restful(static::METHOD_POST, "/freight/getFreight", $body);
    }

    /**
     * 电商退单,支持单个商品退单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/refundOrder.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/refundOrder", $body);
    }

    /**
     * 获取物流信息
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/getExpress.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExpress($body)
    {
        return $this->restful(static::METHOD_POST, "/express/getExpress", $body);
    }

    /**
     * 查看连锁商品库存
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/StockController/search.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchStock($body)
    {
        return $this->restful(static::METHOD_POST, "/stock/search", $body);
    }


}
