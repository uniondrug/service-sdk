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
 * JavaGoodsCenterMngSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaGoodsCenterMngSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.goods.center.mng.module';

    /**
     * 子商品查询
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function searchGoods($body)
    {
        return $this->restful("POST", "/goods/query", $body);
    }

    /**
     * 新-子商品查询（SKU）
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function searchGoodsSku($body)
    {
        return $this->restful("POST", "/goods/querySku", $body);
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

    /**
     *  营销商品查询
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/%E5%95%86%E5%93%81%E4%B8%AD%E5%BF%833.2/%E6%9F%A5%E8%AF%A2%E5%B1%9E%E6%80%A7%E7%BB%91%E5%AE%9A%E7%9A%84%E6%A0%87%E5%87%86%E5%95%86%E5%93%81.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function querySkuExist($body)
    {
        return $this->restful("POST", "/goods/getSkuExist", $body);
    }

    /**
     *  查询用药指导
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/%E5%95%86%E5%93%81%E4%B8%AD%E5%BF%833.2/%E6%9F%A5%E8%AF%A2%E5%B1%9E%E6%80%A7%E7%BB%91%E5%AE%9A%E7%9A%84%E6%A0%87%E5%87%86%E5%95%86%E5%93%81.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function queryGoodsDosage($body)
    {
        return $this->restful("GET", "/standardGoods/queryGoodsDosage", $body);
    }
}