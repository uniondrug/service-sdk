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

    /**
     * 商品关键字查询
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodController/searchKeywords.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchKeywords($body)
    {
        return $this->restful(static::METHOD_POST, "/good/searchKeywords", $body);
    }

    /**
     * 商品条形码查询
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchKeywords.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchByCode($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByCode", $body);
    }

    /**
     * 商品内码查询（多个）
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchByNos.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchByNos($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByNos", $body);
    }

    /**
     * 商品内码查询（单个）
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchByNo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchByNo($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByNo", $body);
    }

    /**
     * 商品信息存储redis
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/save.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function saveGoodsRedis($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/save", $body);
    }

    /**
     * 商品库存存储redis
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/StockController/save.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function saveStockRedis($body)
    {
        return $this->restful(static::METHOD_POST, "/stock/save", $body);
    }

    /**
     * 商品热搜前10
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/save.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchHotGoods($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchHotGoods", $body);
    }
}
