<?php
/**
 * Created by PhpStorm.
 * User: tangly
 * Date: 2019-05-09
 * Time: 15:09
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JavaOrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaGoodsCenterSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.goods.center.module';

    /**
     * 查询拼接sql
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getQuerySql($body)
    {
        return $this->restful("POST", "/partnerGoodsalelist/querySql", $body);
    }

    /**
     * 查询商品列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsList($body)
    {
        return $this->restful("POST", "/partnerGoodsalelist/queryAll", $body);
    }

    /**
     * 查询商品列表带分页
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsPage($body)
    {
        return $this->restful("POST", "/partnerGoodsalelist/querySqlPage", $body);
    }

    /**
     * 查询商品详情
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsDetail($body)
    {
        return $this->restful("POST", "/queryGoods/querySpuImgInfoBySpuId", $body);
    }

    /**
     * SKU查询商品详情
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsQueryBySkuNo($body)
    {
        return $this->restful("POST", "/queryGoods/getGoodsByGoodsNo", $body);
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

    /**
     * 用id获取信息
     * @link https://uniondrug.coding.net/p/java.module.goodscenter/git/blob/development/uniondrug-goods-parent/docs/goods-manager/查询/商品查询.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInfoById($body)
    {
        return $this->restful("POST", "/goodsSalesChannel/getInfoById", $body);
    }

    /**
     * 根据channel查询商品
     * @link https://uniondrug.coding.net/p/java.module.goodscenter/git/blob/development/uniondrug-goods-parent/docs/goods-manager/查询/商品查询.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryByChannel($body)
    {
        return $this->restful("POST", "/goodsSalesChannel/queryByChannel", $body);
    }
}