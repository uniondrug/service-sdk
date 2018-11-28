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
 * 物流模块,快递鸟,达达配送
 * @package Uniondrug\ServiceSdk\Modules
 */
class ExpressSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'express';

    /**
     * 查询物流轨迹
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express/kdniao/search/expressTrack.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function expressTrack($body)
    {
        return $this->restful(static::METHOD_POST, "/kdniao/search/expressTrack", $body);
    }

    /**
     * 城市列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/shop/cityList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cityList($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/shop/cityList", $body);
    }

    /**
     * 新增门店
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/shop/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addShop($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/shop/add", $body);
    }

    /**
     * 编辑门店
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/shop/update.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function updateShop($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/shop/update", $body);
    }

    /**
     * 获取门店详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/shop/get.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getShop($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/shop/get", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/create.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/create", $body);
    }

    /**
     * 预发布订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/preCreate.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function preCreateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/preCreate", $body);
    }

    /**
     * 确认预发布订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/confirm.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function confirmOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/confirm", $body);
    }

    /**
     * 获取订单详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/get.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/get", $body);
    }

    /**
     * 取消订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/cancel.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancelOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/cancel", $body);
    }

    /**
     * 取消原因列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/cancelReasonsList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancelReasonsList($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/cancelReasonsList", $body);
    }

    /**
     * 重发订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/express//dada/order/reCreate.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function reCreateOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/dada/order/reCreate", $body);
    }









}
