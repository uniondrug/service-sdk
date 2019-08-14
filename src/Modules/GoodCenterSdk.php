<?php
/**
 * Created by PhpStorm.
 * User: wangk
 * Date: 2019-02-21
 * Time: 10:53
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 商品中心
 * @package Uniondrug\ServiceSdk\Modules
 */
class GoodCenterSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'goodCenter';

    /**
     * 查询商品数据
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGoodsList($body)
    {
        return $this->restful(static::METHOD_POST, '/queryGoods/query', $body);
    }

    /**
     * 条形码查询商品说明书
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getInstructionsByCode($body)
    {
        return $this->restful(static::METHOD_POST, '/queryGoods/queryYaoZs', $body);
    }

    /**
     * 获取商品价格&销量&详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPriceSales($body)
    {
        return $this->restful(static::METHOD_POST, '/queryGoods/queryGoodsBaseInfo', $body);
    }

    /**
     * els搜索引擎搜索商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function goodsSearch($body)
    {
        return $this->restful(static::METHOD_POST, '/goodsSearch/search', $body);
    }

    /**
     * 药店宝增值服务详情
     * @link https://uniondrug.coding.net/p/backend.app/git/blob/development/docs/api/Product/ProductController/detailAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGoodsDetailBySpuId($body)
    {
        return $this->restful(static::METHOD_POST, '/queryGoods/querySpuImgInfoBySpuId', $body);
    }

    /**
     * 根据条码查询药联Sku商品库
     * @link https://uniondrug.coding.net/p/java.module.goodscenter/git/blob/development/uniondrug-goods-parent/docs/goods-manager/查询/商品查询.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function querySkuInfoByCode($body)
    {
        return $this->restful("POST", "/queryGoods/querySkuInfoByCode", $body);
    }
}
