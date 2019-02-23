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
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */

class ActivitySdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'activity';

    /**
     * 新建/修改子商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setChildGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/childGoods/set', $body);
    }

    /**
     * 新建/修改商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/goods/set', $body);
    }

    /**
     * 子商品关联到主商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function associated($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/goods/associated', $body);
    }

    /**
     * 新建/修改模式
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setMode($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/modes/set', $body);
    }

    /**
     * 订单退款
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function refund($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/order/refund', $body);
    }

    /**
     * 新建/修改项目
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function saveProject($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/save', $body);
    }

    /**
     * 主商品关联到项目
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function projectGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/projectGoods', $body);
    }

    /**
     * 抽奖
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function draw($body)
    {
        return $this->restful(static::METHOD_POST, '/mode/draw', $body);
    }

    /**
     * 解析用户
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function parseMember($body)
    {
        return $this->restful(static::METHOD_POST, '/member/parseMember', $body);
    }

    /**
     * 查询用户参与活动的次数
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getFromTimes($body)
    {
        return $this->restful(static::METHOD_POST, '/member/getFromTimes', $body);
    }

    /**
     * 查询用户活动受益次数
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getToTimes($body)
    {
        return $this->restful(static::METHOD_POST, '/member/getToTimes', $body);
    }

    /**
     * 手机号获取用户
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMemberByMobile($body)
    {
        return $this->restful(static::METHOD_POST, '/member/getMemberByMobile', $body);
    }

    /**
     * 查询未支付订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getNotPayOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/order/getNotPayOrder', $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, '/order/create', $body);
    }

    /**
     * 创建订单支付
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createPay($body)
    {
        return $this->restful(static::METHOD_POST, '/order/createPay', $body);
    }

    /**
     * 订单支付回调
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function paid($body)
    {
        return $this->restful(static::METHOD_POST, '/order/paid', $body);
    }

    /**
     * 订单确认(无自付订单)
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function confirm($body)
    {
        return $this->restful(static::METHOD_POST, '/order/confirm', $body);
    }

    /**
     * 发送验证码
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function sendCaptcha($body)
    {
        return $this->restful(static::METHOD_POST, '/captcha/send', $body);
    }

    /**
     * 发送语言验证码
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function sendVoice($body)
    {
        return $this->restful(static::METHOD_POST, '/captcha/sendVoice', $body);
    }

    /**
     * 获取jssdk
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function jssdk($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/wx/jssdk', $body);
    }


}