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
class HealthSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'health';

    /**
     * 添加体检数据
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/HealthController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, '/health/create', $body);
    }

    /**
     * 编辑体检数据
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/HealthController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function edit($body)
    {
        return $this->restful(static::METHOD_POST, '/health/create', $body);
    }

    /**
     * 用订单号查询
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/HealthController/ordersAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orders($body)
    {
        return $this->restful(static::METHOD_POST, '/health/orders', $body);
    }

    /**
     * 商品编辑
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/HealthController/goodEditAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function goodEdit($body)
    {
        return $this->restful(static::METHOD_POST, '/health/good/edit', $body);
    }
}
