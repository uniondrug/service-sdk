<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class AbutmentSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'abutment';

    /**
     * 添加体检数据
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, '/order/create', $body);
    }

    /**
     * 编辑体检数据
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function edit($body)
    {
        return $this->restful(static::METHOD_POST, '/order/edit', $body);
    }

    /**
     * 用订单号查询
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/ordersAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orders($body)
    {
        return $this->restful(static::METHOD_POST, '/order/orders', $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/detailAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful(static::METHOD_POST, '/order/detail', $body);
    }

    /**
     * 商品编辑
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/GoodController/goodEditAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function goodEdit($body)
    {
        return $this->restful(static::METHOD_POST, '/good/edit', $body);
    }
}
