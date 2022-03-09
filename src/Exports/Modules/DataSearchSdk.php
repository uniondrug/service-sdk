<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-02-28
 * @time   Mon, 28 Feb 2022 19:05:25 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * 搜索中心
 * DataSearchSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DataSearchSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'data.search';

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
}
