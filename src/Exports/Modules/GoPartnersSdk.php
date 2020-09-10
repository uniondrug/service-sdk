<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * 药品中心服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class GoPartnersSdk extends SdkBase
{
    protected $serviceName = 'go.partners.module';

    /**
     * 订单回推
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/OrderController/callback.md
     * @param array $body
     * @return ResponseInterface
     */
    public function callbackOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/orderInsert", $body);
    }

    /**
     * 订单回调
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/OrderController/orderCallback.md
     * @param array $body
     * @return ResponseInterface
     */
    public function orderCallback($body)
    {
        return $this->restful(static::METHOD_POST, "/order/orderCallback", $body);
    }

    /**
     * 订单重推
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/OrderController/orderRepush.md
     * @param array $body
     * @return ResponseInterface
     */
    public function orderRepush($body)
    {
        return $this->restful(static::METHOD_POST, "/order/orderRepush", $body);
    }

    /**
     * 电商下预订单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/preOrder.md
     * @param array $body
     * @return ResponseInterface
     */
    public function preOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/preOrder", $body);
    }

    /**
     * 电商确认下单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/payOrder.md
     * @param array $body
     * @return ResponseInterface
     */
    public function payOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/payOrder", $body);
    }

    /**
     * 电商运费获取
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/getFreight.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getFreight($body)
    {
        return $this->restful(static::METHOD_POST, "/freight/getFreight", $body);
    }

    /**
     * 电商退单,支持单个商品退单
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/refundOrder.md
     * @param array $body
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/order/refundOrder", $body);
    }

    /**
     * 获取物流信息
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/OrderController/getExpress.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getExpress($body)
    {
        return $this->restful(static::METHOD_POST, "/express/getExpress", $body);
    }

    /**
     * 查看连锁商品库存
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/StockController/search.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchStock($body)
    {
        return $this->restful(static::METHOD_POST, "/stock/search", $body);
    }

    /**
     * 商品关键字查询
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodController/searchKeywords.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchKeywords($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchKeywords", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 商品条形码查询
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchKeywords.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchByCode($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByCode", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 商品内码查询（多个）
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchByNos.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchByNos($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByNos", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 商品内码查询（单个）
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchByNo.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchByNo($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchByNo", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 商品信息存储redis
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/save.md
     * @param array $body
     * @return ResponseInterface
     */
    public function saveGoodsRedis($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/save", $body);
    }

    /**
     * 商品库存存储redis
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/StockController/save.md
     * @param array $body
     * @return ResponseInterface
     */
    public function saveStockRedis($body)
    {
        return $this->restful(static::METHOD_POST, "/stock/save", $body);
    }

    /**
     * 商品热搜前10
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/save.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchHotGoods($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/searchHotGoods", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 订单查询
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/OrderController/orderSearch.md
     * @param $body
     * @return ResponseInterface
     */
    public function orderSearch($body)
    {
        return $this->restful("POST", "/order/orderSearch", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/StoreController/searchStoreDrugs.md
     * @param $body
     * @return ResponseInterface
     */
    public function searchStoreDrugs($body)
    {
        return $this->restful(static::METHOD_POST, "/store/searchStoreDrugs", $body);
    }

    /**
     * 内码/条形码搜索药品
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/GoodsController/searchByNos.md
     * @param array $body
     * @return ResponseInterface
     */
    public function searchDrugsByCodeOrNo($body)
    {
        return $this->restful(static::METHOD_POST, "/api/goods/search", $body, null, [
            'timeout' => 10
        ]);
    }
}
