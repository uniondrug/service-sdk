<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-07-15
 * @time   Mon, 15 Jul 2019 12:01:34 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * MoreActivitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MoreActivitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'more.activity.module';

    /**
     * 核销虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cardConsume($body)
    {
        return $this->restful("POST", "/virtualCard/consume", $body);
    }

    /**
     * 创建虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cardCreate($body)
    {
        return $this->restful("POST", "/virtualCard/create", $body);
    }

    /**
     * 虚拟卡详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cardInfo($body)
    {
        return $this->restful("POST", "/virtualCard/info", $body);
    }

    /**
     * 虚拟卡列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cardPaging($body)
    {
        return $this->restful("POST", "/virtualCard/paging", $body);
    }

    /**
     * 开启抽奖
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Draw/DrawController/openAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drawOpen($body)
    {
        return $this->restful("POST", "/draw/open", $body);
    }

    /**
     * 校验项目资金
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Fund/FundController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fundCheck($body)
    {
        return $this->restful("POST", "/fund/check", $body);
    }

    /**
     * 冻结项目资金
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Fund/FundController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fundFreeze($body)
    {
        return $this->restful("POST", "/fund/freeze", $body);
    }

    /**
     * 修改金币
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldEdit($body)
    {
        return $this->restful("POST", "/memberGold/edit", $body);
    }

    /**
     * 新建商品
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsAdd($body)
    {
        return $this->restful("POST", "/goods/add", $body);
    }

    /**
     * 上下架商品
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsController/upDownAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsDel($body)
    {
        return $this->restful("POST", "/goods/del", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsDetail($body)
    {
        return $this->restful("POST", "/goods/detail", $body);
    }

    /**
     * 修改商品
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsEdit($body)
    {
        return $this->restful("POST", "/goods/edit", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldGoodsList($body)
    {
        return $this->restful("POST", "/goods/list", $body);
    }

    /**
     * 获取用户金币
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldList($body)
    {
        return $this->restful("POST", "/memberGold/list", $body);
    }

    /**
     * 新增订单
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldOrderAdd($body)
    {
        return $this->restful("POST", "/order/add", $body);
    }

    /**
     * 用户订单记录
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderController/userOrderListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goldUserOrderRecord($body)
    {
        return $this->restful("POST", "/order/userOrderRecord", $body);
    }

    /**
     * 订单创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderCreate($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 发起回调
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderNotifyController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNotifyCreate($body)
    {
        return $this->restful("POST", "/order/notify/create", $body);
    }

    /**
     * 发起支付
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderPayController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderPayCreate($body)
    {
        return $this->restful("POST", "/order/pay/create", $body);
    }
}
