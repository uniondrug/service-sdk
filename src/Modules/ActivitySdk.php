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
     * 查询用户参与活动的次数
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getFromTimes($body)
    {
        return $this->restful(static::METHOD_POST, '/member/checkFromTimes', $body);
    }

    /**
     * 查询用户活动受益次数
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getToTimes($body)
    {
        return $this->restful(static::METHOD_POST, '/member/checkToTimes', $body);
    }

    /**
     * 获取城市项目
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCityProject($body)
    {
        return $this->restful(static::METHOD_POST, '/projectGoods/getCityProject', $body);
    }

    /**
     * 获取用户最新订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMemberLastOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/order/getMemberLastOrder', $body);
    }

    /**
     * 根据memberId,返回用户
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function memberDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/member/memberDetail', $body);
    }

    /**
     * 抽奖记录
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function drawRecord($body)
    {
        return $this->restful(static::METHOD_POST, '/mode/drawRecord', $body);
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
     * 复制项目及相关配置
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function copyProject($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/copyProject', $body);
    }

    /**
     * 复制蓄客红包项目及相关配置
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function copyRedpacket($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/copyRedpacket', $body);
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
     * 获取项目下商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function GetGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/projectGoods/getGoods', $body);
    }

    /**
     * 获取项目和城市下商品
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCityGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/projectGoods/getCityGoods', $body);
    }

    /**
     * 获取商品详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGoodsInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/projectGoods/getGoodsInfo', $body);
    }

    /**
     * 通过rootIn获取商品详情
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGoodsDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/projectGoods/getGoodsDetail', $body);
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
     * 手机号获取用户
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMemberMaxEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/member/getMaxEquity', $body);
    }

    /**
     * 活动手机号验证码注册用户
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function registerMember($body)
    {
        return $this->restful(static::METHOD_POST, '/member/register', $body);
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
     * 查询订单详情(根据订单号/流水号)
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/getInfoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/order/getInfo', $body);
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
     * 按照新流程创建订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createByRootIn($body)
    {
        return $this->restful(static::METHOD_POST, '/order/create/rootIn', $body);
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
     * 创建药联订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createModuleOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/order/createModule', $body);
    }

    /**
     * 创建药联订单支付
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createModulePay($body)
    {
        return $this->restful(static::METHOD_POST, '/order/createModulePay', $body);
    }

    /**
     * 药联订单确支付回调确认
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function modulePaid($body)
    {
        return $this->restful(static::METHOD_POST, '/order/modulePaid', $body);
    }

    /**
     * 药联订单确认(无自付订单)
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notifyModuleOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/order/notify', $body);
    }

    /**
     * 用户完成支付动作(等待支付回调)
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function didPay($body)
    {
        return $this->restful(static::METHOD_POST, '/order/didPay', $body);
    }

    /**
     * 药联订单30分钟取消
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function orderExpired($body)
    {
        return $this->restful(static::METHOD_POST, '/order/expired', $body);
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
     * 配置商品百分比
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function proportion($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/projectGoods/proportion', $body);
    }

    /**
     * 删除城市
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function deleteProjectCity($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/project/deleteProjectCity', $body);
    }

    /**
     * 订单权益列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function equityList($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/equity/list', $body);
    }

    /**
     * 订单权益重发
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function retryEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/equity/retry', $body);
    }

    /**
     * 订单补发权益
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addOrderEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/equity/addOrderEquity', $body);
    }

    /**
     * 资金池列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/Admin/PoolController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function poolPaging($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/pool/paging', $body);
    }

    /**
     * 资金池列表
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/Admin/PoolController/listAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function poolList($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/pool/list', $body);
    }

    /**
     * 新增资金池
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/Admin/PoolController/saveAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function poolSave($body)
    {
        return $this->restful(static::METHOD_POST, '/admin/pool/save', $body);
    }

    /**
     * 冻结项目资金
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function freezeProjectAmount($body)
    {
        return $this->restful(static::METHOD_POST, '/project/freeze', $body);
    }

    /**
     * 解冻项目资金
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function unfreezeProjectAmount($body)
    {
        return $this->restful(static::METHOD_POST, '/project/unfreeze', $body);
    }

    /**
     * 创建虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createVirtualCard($body)
    {
        return $this->restful(static::METHOD_POST, '/virtualCard/create', $body);
    }

    /**
     * 获取虚拟卡列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getVirtualList($body)
    {
        return $this->restful(static::METHOD_POST, '/virtualCard/list', $body);
    }

    /**
     * 核销虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function eliminateVirtualCard($body)
    {
        return $this->restful(static::METHOD_POST, '/virtualCard/eliminate', $body);
    }

    /**
     * 回调核销虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function verifyVirtual($body)
    {
        return $this->restful(static::METHOD_POST, '/order/verifyVirtual', $body);
    }

    /**
     * 获取核销卡详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoVirtualCard($body)
    {
        return $this->restful(static::METHOD_POST, '/virtualCard/info', $body);
    }

    /**
     * 订单微信支付回调
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function wxPaid($body)
    {
        return $this->restful(static::METHOD_POST, '/order/wx/paid', $body);
    }

    /**
     * 根据单号,撤销订单
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful(static::METHOD_POST, '/order/cancel/byNo', $body);
    }


    /**
     * 检测该商品能否被兑换
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/checkExchangeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldCheckExchange($body)
    {
        return $this->restful("POST", "/goods/checkExchange", $body);
    }

    /**
     * 修改金币
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoldController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldEdit($body)
    {
        return $this->restful("POST", "/gold/edit", $body);
    }

    /**
     * 新建商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsAdd($body)
    {
        return $this->restful("POST", "/goods/add", $body);
    }

    /**
     * 上下架商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsDel($body)
    {
        return $this->restful("POST", "/goods/del", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsDetail($body)
    {
        return $this->restful("POST", "/goods/detail", $body);
    }

    /**
     * 修改商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsEdit($body)
    {
        return $this->restful("POST", "/goods/edit", $body);
    }

    /**
     * 后台商品列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoodsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsList($body)
    {
        return $this->restful("POST", "/goods/list", $body);
    }

    /**
     * 获取用户金币
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/GoldController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldList($body)
    {
        return $this->restful("POST", "/gold/list", $body);
    }

    /**
     * 新增订单
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/OrderController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldOrderAdd($body)
    {
        return $this->restful("POST", "/order/add", $body);
    }

    /**
     * 核销虚拟卡（新）
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/OrderController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeVirtualCard($body)
    {
        return $this->restful("POST", "/virtualCard/consume", $body);
    }

    /**
     * 统计用户虚拟卡张数
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Gold/OrderController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countVirtualCard($body)
    {
        return $this->restful("POST", "/virtualCard/count", $body);
    }
    
}