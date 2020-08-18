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

    /**
     * 获取打包子商品
     * @link https://uniondrug.coding.net/p/java.module.goodscenter/git/blob/development/uniondrug-goods-parent/docs/goods-manager/查询/商品查询.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProductBundle($body)
    {
        return $this->restful("POST", "/v1/spu/batch/bundle", $body);
    }

    /**
     * 根据连锁获取sku分页列表
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/商品中心3.1/根据连锁获取sku.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function findSkuByMerchantId($body)
    {
        return $this->restful("POST", "/service/sku/findSkuByMerchantId", $body);
    }

    /**
     * 批量编辑SKU扣率税率
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/商品中心3.1/编辑SKU扣率税率.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function updateSkuInBatch($body)
    {
        return $this->restful("POST", "/service/sku/edit", $body);
    }

    /**
     * 查询商品属性标签
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/%E5%95%86%E5%93%81%E4%B8%AD%E5%BF%833.2/%E5%95%86%E5%93%81%E5%B1%9E%E6%80%A7%E6%A0%87%E7%AD%BE.MD
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function queryAttr($body)
    {
        return $this->restful("POST", "/attr/query", $body);
    }

    /**
     * 查询属性绑定的SPU
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/%E5%95%86%E5%93%81%E4%B8%AD%E5%BF%833.2/%E6%9F%A5%E8%AF%A2%E5%B1%9E%E6%80%A7%E7%BB%91%E5%AE%9A%E7%9A%84%E6%A0%87%E5%87%86%E5%95%86%E5%93%81.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function queryAttrGood($body)
    {
        return $this->restful("POST", "/attr/query/goods", $body);
    }
}