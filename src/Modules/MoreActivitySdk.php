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
class MoreActivitySdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'moreActivity';

    /**
     * 验证码校验
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/checkAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function captchaCheck($body)
    {
        return $this->restful(static::METHOD_POST, "/captcha/check", $body);
    }

    /**
     * 短信发送
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/sendAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function captchaSend($body)
    {
        return $this->restful(static::METHOD_POST, "/captcha/send", $body);
    }

    /**
     * 语言发送
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/voiceSendAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function captchaVoiceSend($body)
    {
        return $this->restful(static::METHOD_POST, "/captcha/voiceSend", $body);
    }

    /**
     * 核销虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/consumeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cardConsume($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualCard/consume", $body);
    }

    /**
     * 创建虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cardCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualCard/create", $body);
    }

    /**
     * 虚拟卡详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/infoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cardInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualCard/info", $body);
    }

    /**
     * 虚拟卡列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cardPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualCard/paging", $body);
    }

    /**
     * 新增弹幕
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/DanMu/DanMuController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function danmuCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/danmu/create", $body);
    }

    /**
     * 获取分页数据
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/DanMu/DanMuController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function danmuPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/danmu/paging", $body);
    }

    /**
     * 开启抽奖
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Draw/DrawController/openAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function drawOpen($body)
    {
        return $this->restful(static::METHOD_POST, "/draw/open", $body);
    }

    /**
     * 校验项目资金
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Fund/FundController/checkAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function fundCheck($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/check", $body);
    }

    /**
     * 冻结项目资金
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Fund/FundController/freezeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function fundFreeze($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/freeze", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function goodsGoldDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/goodsGold/detail", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function goodsGoldPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/goodsGold/paging", $body);
    }

    /**
     * 新建或修改商品
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/saveAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function goodsGoldSave($body)
    {
        return $this->restful(static::METHOD_POST, "/goodsGold/save", $body);
    }

    /**
     * 用户金币信息
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/infoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberGoldInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/memberGold/info", $body);
    }

    /**
     * 修改金币
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/saveAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberGoldSave($body)
    {
        return $this->restful(static::METHOD_POST, "/memberGold/save", $body);
    }

    /**
     * 订单创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/order/create", $body);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderGoldController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderGoldCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/orderGold/create", $body);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderGoldController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderGoldPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/orderGold/paging", $body);
    }

    /**
     * 发起回调
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderNotifyController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderNotifyCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/order/notify/create", $body);
    }

    /**
     * 发起支付
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderPayController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderPayCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/order/pay/create", $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/project/detail", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectGoodsDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/projectGoods/detail", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectGoodsPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/projectGoods/paging", $body);
    }

    /**
     * 商品修改或新增
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/saveAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectGoodsSave($body)
    {
        return $this->restful(static::METHOD_POST, "/projectGoods/save", $body);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/project/paging", $body);
    }

    /**
     * 项目修改或新增
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/saveAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function projectSave($body)
    {
        return $this->restful(static::METHOD_POST, "/project/save", $body);
    }

}