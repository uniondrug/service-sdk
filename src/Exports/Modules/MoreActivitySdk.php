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
 * @date   2020-06-15
 * @time   Mon, 15 Jun 2020 15:47:27 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 连锁下活动列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/activityListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityList($body)
    {
        return $this->restful("POST", "/project/activityList", $body);
    }

    /**
     * 新增或者修改活动链接
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/activityUrlSaveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityUrlSave($body)
    {
        return $this->restful("POST", "/project/activityUrlSave", $body);
    }

    /**
     * 验证码校验
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function captchaCheck($body)
    {
        return $this->restful("POST", "/captcha/check", $body);
    }

    /**
     * 短信发送
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/sendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function captchaSend($body)
    {
        return $this->restful("POST", "/captcha/send", $body);
    }

    /**
     * 语言发送
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Captcha/CaptchaController/voiceSendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function captchaVoiceSend($body)
    {
        return $this->restful("POST", "/captcha/voiceSend", $body);
    }

    /**
     * 检测虚拟卡状态
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cardCheck($body)
    {
        return $this->restful("POST", "/virtualCard/check", $body);
    }

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
     * 新订单创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/createNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createNew($body)
    {
        return $this->restful("POST", "/order/createNew", $body);
    }

    /**
     * 新增弹幕
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/DanMu/DanMuController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function danmuCreate($body)
    {
        return $this->restful("POST", "/danmu/create", $body);
    }

    /**
     * 获取分页数据
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/DanMu/DanMuController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function danmuPaging($body)
    {
        return $this->restful("POST", "/danmu/paging", $body);
    }

    /**
     * 双十一活动
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/doubleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function double($body)
    {
        return $this->restful("POST", "/order/double", $body);
    }

    /**
     * 获取未领取的抽奖码
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Draw/DrawController/getAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drawGet($body)
    {
        return $this->restful("POST", "/draw/get", $body);
    }

    /**
     * 开启抽奖(幂等获取未领取的奖励)
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Draw/DrawController/openAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drawOpen($body)
    {
        return $this->restful("POST", "/draw/open", $body);
    }

    /**
     * 查询转盘订单详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Draw/DrawController/OrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drawOrder($body)
    {
        return $this->restful("POST", "/draw/order", $body);
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
     * 获取跳转域名活动地址
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/getActivityUrlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityUrl($body)
    {
        return $this->restful("POST", "/project/getActivityUrl", $body);
    }

    /**
     * modeId获取projectId
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/getModeProjectIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getModeProject($body)
    {
        return $this->restful("POST", "/project/modeProjectId", $body);
    }

    /**
     * 获取连锁下的活动列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/GetNewActivityListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getNewActivityList($body)
    {
        return $this->restful("POST", "/project/getNewActivityList", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsGoldDetail($body)
    {
        return $this->restful("POST", "/goodsGold/detail", $body);
    }

    /**
     * 新商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/newPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsGoldNewPaging($body)
    {
        return $this->restful("POST", "/goodsGold/newPaging", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsGoldPaging($body)
    {
        return $this->restful("POST", "/goodsGold/paging", $body);
    }

    /**
     * 新建或修改商品
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsGoldSave($body)
    {
        return $this->restful("POST", "/goodsGold/save", $body);
    }

    /**
     * 开始使用
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupAccountController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupAccountConsume($body)
    {
        return $this->restful("POST", "/groupAccount/consume", $body);
    }

    /**
     * 开始使用
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupAccountController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupAccountCreate($body)
    {
        return $this->restful("POST", "/groupAccount/create", $body);
    }

    /**
     * 助力状态判断
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupCheck($body)
    {
        return $this->restful("POST", "/group/check", $body);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupCreate($body)
    {
        return $this->restful("POST", "/group/create", $body);
    }

    /**
     * 获取分页
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupDanmuController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupDanmu($body)
    {
        return $this->restful("POST", "/groupDanmu/paging", $body);
    }

    /**
     * 开团详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupDetail($body)
    {
        return $this->restful("POST", "/group/detail", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupGoodsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupGoodsList($body)
    {
        return $this->restful("POST", "/groupGoods/list", $body);
    }

    /**
     * 助力
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Group/GroupController/helpAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupHelp($body)
    {
        return $this->restful("POST", "/group/help", $body);
    }

    /**
     * 检测营销卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MarketCard/MarketCardController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketCardCheck($body)
    {
        return $this->restful("POST", "/MarketCard/check", $body);
    }

    /**
     * 创建营销卡
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MarketCard/MarketCardController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketCardCreate($body)
    {
        return $this->restful("POST", "/MarketCard/create", $body);
    }

    /**
     * 用户金币明细信息
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberGoldDetail($body)
    {
        return $this->restful("POST", "/memberGold/detail", $body);
    }

    /**
     * 用户金币信息
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberGoldInfo($body)
    {
        return $this->restful("POST", "/memberGold/info", $body);
    }

    /**
     * 修改金币
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/MemberGold/MemberGoldController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberGoldSave($body)
    {
        return $this->restful("POST", "/memberGold/save", $body);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Member/MemberInfoController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberInfoSave($body)
    {
        return $this->restful("POST", "/member/info/save", $body);
    }

    /**
     * 活动用户登陆药联公众号
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Member/MemberController/loadAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberLoad($body)
    {
        return $this->restful("POST", "/member/load", $body);
    }

    /**
     * 解析入参,获取活动用户对象
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Member/MemberController/parseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberParse($body)
    {
        return $this->restful("POST", "/member/parse", $body);
    }

    /**
     * 活动用户和药联用户的数据关联
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Member/MemberController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberRegister($body)
    {
        return $this->restful("POST", "/member/register", $body);
    }

    /**
     * 商户信息
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/merchantInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchanInfo($body)
    {
        return $this->restful("POST", "/project/merchantInfo", $body);
    }

    /**
     * 只核销虚拟卡不发权益
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/newConsumeCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function newVirtualCardConsume($body)
    {
        return $this->restful("POST", "/virtualCard/newConsumeCard", $body);
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
     * 创建
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderGoldController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGoldCreate($body)
    {
        return $this->restful("POST", "/orderGold/create", $body);
    }

    /**
     * 金币兑换(新)
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderGoldController/goldNewExchangeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGoldExchange($body)
    {
        return $this->restful("POST", "/orderGold/goldNewExchange", $body);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/OrderGold/OrderGoldController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGoldPaging($body)
    {
        return $this->restful("POST", "/orderGold/paging", $body);
    }

    /**
     * 订单撤销
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderNotifyController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNotifyCancel($body)
    {
        return $this->restful("POST", "/order/notify/cancel", $body);
    }

    /**
     * 订单支付完成回调
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderNotifyController/paydAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNotifyPayd($body)
    {
        return $this->restful("POST", "/order/notify/payd", $body);
    }

    /**
     * 公众号订单撤销
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderNotifyController/publicCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNotifyPublicCancel($body)
    {
        return $this->restful("POST", "/order/notify/publicCancel", $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectDetail($body)
    {
        return $this->restful("POST", "/project/detail", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGoodsDetail($body)
    {
        return $this->restful("POST", "/projectGoods/detail", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGoodsList($body)
    {
        return $this->restful("POST", "/projectGoods/list", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGoodsPaging($body)
    {
        return $this->restful("POST", "/projectGoods/paging", $body);
    }

    /**
     * 商品修改或新增
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGoodsSave($body)
    {
        return $this->restful("POST", "/projectGoods/save", $body);
    }

    /**
     * 商品限制缓存
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/timesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGoodsTimes($body)
    {
        return $this->restful("POST", "/projectGoods/times", $body);
    }

    /**
     * 项目信息
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectInfo($body)
    {
        return $this->restful("POST", "/project/info", $body);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 项目修改或新增
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Project/ProjectController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectSave($body)
    {
        return $this->restful("POST", "/project/save", $body);
    }

    /**
     * 方案详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/GoodsGold/GoodsGoldController/schemeIdInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function schemeInfo($body)
    {
        return $this->restful("POST", "/goodsGold/schemeIdInfo", $body);
    }

    /**
     * 查询订单状态
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/orderStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function status($body)
    {
        return $this->restful("POST", "/order/status", $body);
    }

    /**
     * 超级会员日
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/superMemberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function superMember($body)
    {
        return $this->restful("POST", "/order/super/member", $body);
    }

    /**
     * 超级会员日订单状态
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/superStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function superStatus($body)
    {
        return $this->restful("POST", "/order/super/status", $body);
    }

    /**
     * 规则文案详情
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Template/TemplateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateDetail($body)
    {
        return $this->restful("POST", "/template/detail", $body);
    }

    /**
     * o2o 70得100
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/topupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function topupOrder($body)
    {
        return $this->restful("POST", "/order/topup/order", $body);
    }

    /**
     * o2o活动订单状态
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Order/OrderController/topupStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function topupStatus($body)
    {
        return $this->restful("POST", "/order/topup/status", $body);
    }

    /**
     * 更新手机号、头像、昵称、wxMemberId
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/Member/MemberController/updateMemberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateMember($body)
    {
        return $this->restful("POST", "/member/updateMember", $body);
    }

    /**
     * 只核销虚拟卡不发权益
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/consumeCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function virtualCardConsume($body)
    {
        return $this->restful("POST", "/virtualCard/consumeCard", $body);
    }

    /**
     * 创建虚拟卡(通用版本)
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/createCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function virtualCardCreate($body)
    {
        return $this->restful("POST", "/virtualCard/createCard", $body);
    }

    /**
     * 80得200活动跳蓄客
     * @link https://uniondrug.coding.net/p/module.activity.more/git/blob/development/docs/api/VirtualCard/VirtualCardController/redCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function virtualRedCard($body)
    {
        return $this->restful("POST", "/virtualCard/redCard", $body);
    }
}
