<?php
/**
 * @author wss
 * @date   : 2018-07-25
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 订单服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class OrderSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'order';
    /**
     * 订单查询(
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/order/info", $body);
    }
    /**
     * 订单修改
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderEdit($body)
    {
        return $this->restful(static::METHOD_POST, "/order/edit", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getList($body)
    {
        return $this->restful(static::METHOD_GET, "/order", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/order/detail", $body);
    }

    /**
     * 订单撤单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful(static::METHOD_POST, "/order/cancel", $body);
    }

    /**
     * 订单回推
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function push($body)
    {
        return $this->restful(static::METHOD_POST, "/order/push", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/order/create", $body);
    }
}