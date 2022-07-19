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
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaDataSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.data';

    /**
     * 搜索商品
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsSearchQueryAllGoods($body)
    {
        return $this->restful("POST", "/goodsSearch/queryAllGoods", $body);
    }

    /**
     * 联想词搜索
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function suggester($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/wordSuggester/suggester", $body, $query, $extra);
    }

    /**
     * 多店搜索(条码聚合)
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchUnify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchUnify", $body, $query, $extra);
    }

    /**
     * 单店搜索
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function search($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/search", $body, $query, $extra);
    }

    /**
     * 基于地理位置搜索oto商品(条码聚合)
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchGoodsGeo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchGoodsGeo", $body, $query, $extra);
    }

    /**
     * 全国搜索商品
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchGoodsAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchGoodsAll", $body, $query, $extra);
    }

    /**
     * 搜索DTP商品(条码聚合)
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchDtpGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchDtpGoods", $body, $query, $extra);
    }

    /**
     * 根据条码基于地理位置搜索全国商品
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchGoodsByTradeCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchGoodsByTradeCode", $body, $query, $extra);
    }

    /**
     * 根据多个条码基于地理位置搜索
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchGoodsByTradeCodes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goodsSearch/searchGoodsByTradeCodes", $body, $query, $extra);
    }

    /**
     * 搜索方案商品
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchSchemeGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerGoodsSearch/searchSchemeGoods", $body, $query, $extra);
    }

    /**
     * 根据连锁id+商品内码查询方案下的商品
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function SearchSsbpSchemeGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ssbpSchemeGoods/search", $body, $query, $extra);
    }
}
