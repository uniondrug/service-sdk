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
     * 模式列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function listMode($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/modes/list', $body);
    }

    /**
     * 模式详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function detailMode($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/modes/detail', $body);
    }

    /**
     * 银行卡编码列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function listBank($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/bankCode', $body);
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
     * 项目列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/paging', $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function detailProject($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/detail', $body);
    }

    /**
     * 新建/修改商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setProjectGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/projectGoods/set', $body);
    }

    /**
     * 项目商品列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function viewProjectGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/projectGoods/view', $body);
    }

    /**
     * 删除商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function deleteProjectGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/projectGoods/delete', $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function detailProjectGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/projectGoods/detail', $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderList($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/order/orderList', $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/order/detail', $body);
    }

    /**
     * 订单--再创权益
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/order/equity', $body);
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