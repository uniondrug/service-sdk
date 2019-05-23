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
class WxapiSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'wxapi';

    /**
     * 无门槛代理人绑定
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function bdingAgent($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/share/bdingAgent', $body);
    }

    /**
     * 获取用户信息
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function queryMemberInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/share/queryMemberInfo', $body);
    }

    /**
     * 获取用户积分
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAgentIntegralInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/api/getAgentIntegralInfo', $body);
    }

    /**
     * 分销产品分佣比例
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function queryGoodsByChannelId($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/api/queryGoodsByChannelId', $body);
    }

    /**
     * 获取渠道下最低消费
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMinOrderPriceByChannelId($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/api/getMinOrderPriceByChannelId', $body);
    }

    /**
     * 我的团队
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function queryMyTeam($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/share/queryMyTeam', $body);
    }

    /**
     * 根据订单号查询积分
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function queryCommissionByOrderNo($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/share/queryCommissionByOrderNo', $body);
    }

    /**
     * 消息战报
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function queryNewsReport($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/share/queryNewsReport', $body);
    }

    /**
     * 订单支付后分销这边下单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderBuilder($body)
    {
        return $this->restful(static::METHOD_POST, '/distribution/dst/order/orderBuilder', $body);
    }

}
