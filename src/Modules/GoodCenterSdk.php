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
     * 获取商品价格和销量
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPriceSales($body)
    {
        return $this->restful(static::METHOD_POST, '/queryGoods/querypriceandsales', $body);
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
}