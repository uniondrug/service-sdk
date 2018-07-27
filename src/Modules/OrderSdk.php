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
    public function orederEdit($body)
    {
        return $this->restful(static::METHOD_POST, "/order/edit", $body);
    }
}