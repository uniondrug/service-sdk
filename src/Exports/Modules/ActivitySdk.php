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
 * @date   2019-06-16
 * @time   Sun, 16 Jun 2019 21:50:16 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ActivitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ActivitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'activity.module';

    /**
     * 订单补发权益
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/EquityController/addOrderEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addOrderEquity($body)
    {
        return $this->restful("POST", "/admin/equity/addOrderEquity", $body);
    }

    /**
     * 订单确认(无自付订单)
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderPayController/confirmAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function confirm($body)
    {
        return $this->restful("POST", "/order/confirm", $body);
    }

    /**
     * 虚拟卡消卡
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/VirtualCard/VirtualCardController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeVirtualCard($body)
    {
        return $this->restful("POST", "/virtualCard/consume", $body);
    }

    /**
     * 复制项目
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/copyProjectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function copyProject($body)
    {
        return $this->restful("POST", "/admin/project/copyProject", $body);
    }

    /**
     * 复制蓄客红包项目
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/copyRedpacketAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function copyRedpacket($body)
    {
        return $this->restful("POST", "/admin/project/copyRedpacket", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 创建药联订单
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/createModuleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createModuleOrder($body)
    {
        return $this->restful("POST", "/order/createModule", $body);
    }

    /**
     * 创建药联订单支付
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/createModulePayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createModulePay($body)
    {
        return $this->restful("POST", "/order/createModulePay", $body);
    }

    /**
     * 创建订单支付
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/CreatePayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createPay($body)
    {
        return $this->restful("POST", "/order/createPay", $body);
    }

    /**
     * 创建虚拟卡
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/VirtualCard/VirtualCardController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createVirtualCard($body)
    {
        return $this->restful("POST", "/virtualCard/create", $body);
    }

    /**
     * 删除城市配置
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/deleteProjectCityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteProjectCity($body)
    {
        return $this->restful("POST", "/admin/project/deleteProjectCity", $body);
    }

    /**
     * 删除商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectGoodsController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteProjectGoods($body)
    {
        return $this->restful("POST", "/admin/projectGoods/delete", $body);
    }

    /**
     * 模式详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ModesController/modesInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailMode($body)
    {
        return $this->restful("POST", "/admin/modes/detail", $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailProject($body)
    {
        return $this->restful("POST", "/admin/project/detail", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectGoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailProjectGoods($body)
    {
        return $this->restful("POST", "/admin/projectGoods/detail", $body);
    }

    /**
     * 用户完成支付动作
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderPayController/didPayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function didPay($body)
    {
        return $this->restful("POST", "/order/didPay", $body);
    }

    /**
     * 抽奖
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Draw/ModeController/drawAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function draw($body)
    {
        return $this->restful("POST", "/mode/draw", $body);
    }

    /**
     * 抽奖记录
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Draw/ModeController/drawRecordAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drawRecord($body)
    {
        return $this->restful("POST", "/mode/drawRecord", $body);
    }

    /**
     * 权益列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/EquityController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityList($body)
    {
        return $this->restful("POST", "/admin/equity/list", $body);
    }

    /**
     * 冻结项目资金
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Fund/FundController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function freezeProjectAmount($body)
    {
        return $this->restful("POST", "/fund/freeze", $body);
    }

    /**
     * 校验项目资金
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Fund/FundController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fundCheck($body)
    {
        return $this->restful("POST", "/fund/check", $body);
    }

    /**
     * 多活动目录获取目录
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/getCityProjectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCityProject($body)
    {
        return $this->restful("POST", "/projectGoods/getCityProject", $body);
    }

    /**
     * 检查用户参与活动的次数
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/checkFromTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getFromTimes($body)
    {
        return $this->restful("POST", "/member/checkFromTimes", $body);
    }

    /**
     * 获取项目下商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/getGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function GetGoods($body)
    {
        return $this->restful("POST", "/projectGoods/getGoods", $body);
    }

    /**
     * 通过rootIn获取商品详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/getGoodsDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsDetail($body)
    {
        return $this->restful("POST", "/projectGoods/getGoodsDetail", $body);
    }

    /**
     * 获取商品详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/ProjectGoods/ProjectGoodsController/getGoodsInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsInfo($body)
    {
        return $this->restful("POST", "/projectGoods/getGoodsInfo", $body);
    }

    /**
     * 查询订单详情(根据订单号/流水号)
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/getInfoByNOAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInfo($body)
    {
        return $this->restful("POST", "/order/getInfo", $body);
    }

    /**
     * 手机号获取用户
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/getMemberByMobileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberByMobile($body)
    {
        return $this->restful("POST", "/member/getMemberByMobile", $body);
    }

    /**
     * 获取用户最新订单
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/getMemberLastOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberLastOrder($body)
    {
        return $this->restful("POST", "/order/getMemberLastOrder", $body);
    }

    /**
     * 获取最大可用的权益
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/getMaxEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberMaxEquity($body)
    {
        return $this->restful("POST", "/member/getMaxEquity", $body);
    }

    /**
     * 查询未支付订单
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderController/getNotPayOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getNotPayOrder($body)
    {
        return $this->restful("POST", "/order/getNotPayOrder", $body);
    }

    /**
     * 检查用户活动受益次数
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/checkToTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getToTimes($body)
    {
        return $this->restful("POST", "/member/checkToTimes", $body);
    }

    /**
     * 虚拟卡列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/VirtualCard/VirtualCardController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getVirtualList($body)
    {
        return $this->restful("POST", "/virtualCard/list", $body);
    }

    /**
     * 获取虚拟卡详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/VirtualCard/VirtualCardController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoVirtualCard($body)
    {
        return $this->restful("POST", "/virtualCard/info", $body);
    }

    /**
     * 银行卡列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/BankCodeController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listBank($body)
    {
        return $this->restful("POST", "/admin/bankCode/", $body);
    }

    /**
     * 模式列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ModesController/modesListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listMode($body)
    {
        return $this->restful("POST", "/admin/modes/list", $body);
    }

    /**
     * 根据memberId,返回用户
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/memberDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberDetail($body)
    {
        return $this->restful("POST", "/member/memberDetail", $body);
    }

    /**
     * 药联订单确支付回调确认
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderPayController/modulePaidAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function modulePaid($body)
    {
        return $this->restful("POST", "/order/modulePaid", $body);
    }

    /**
     * 药联订单确认(无自付订单)
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderPayController/notifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function notifyModuleOrder($body)
    {
        return $this->restful("POST", "/order/notify", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/OrderController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful("POST", "/admin/order/detail", $body);
    }

    /**
     * 再次创建权益   必传参数：outTradeNo
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/OrderController/equityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderEquity($body)
    {
        return $this->restful("POST", "/admin/order/equity", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/OrderController/orderListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderList($body)
    {
        return $this->restful("POST", "/admin/order/orderList", $body);
    }

    /**
     * 订单支付回调
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Order/OrderPayController/paidAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paid($body)
    {
        return $this->restful("POST", "/order/paid", $body);
    }

    /**
     * 根据code/openid,(创建)返回用户
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/parseMemberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function parseMember($body)
    {
        return $this->restful("POST", "/member/parseMember", $body);
    }

    /**
     * 查看所有资金池
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/PoolController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolList($body)
    {
        return $this->restful("POST", "/admin/pool/list", $body);
    }

    /**
     * 资金池列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/PoolController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolPaging($body)
    {
        return $this->restful("POST", "/admin/pool/paging", $body);
    }

    /**
     * 新增/修改
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/PoolController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolSave($body)
    {
        return $this->restful("POST", "/admin/pool/save", $body);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/admin/project/paging", $body);
    }

    /**
     * 获取项目状态
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Project/ProjectController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectStatus($body)
    {
        return $this->restful("POST", "/project/status", $body);
    }

    /**
     * 配置商品百分比
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectGoodsController/proportionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function proportion($body)
    {
        return $this->restful("POST", "/admin/projectGoods/proportion", $body);
    }

    /**
     * 根据订单号进行退款 必传参数：outTradeNo
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/OrderController/refundOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refund($body)
    {
        return $this->restful("POST", "/admin/order/refund", $body);
    }

    /**
     * 活动手机号验证码注册用户
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Member/MemberController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function registerMember($body)
    {
        return $this->restful("POST", "/member/register", $body);
    }

    /**
     * 订单权益重发
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/EquityController/retryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function retryEquity($body)
    {
        return $this->restful("POST", "/admin/equity/retry", $body);
    }

    /**
     * 新建/修改项目
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectController/saveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function saveProject($body)
    {
        return $this->restful("POST", "/admin/project/save", $body);
    }

    /**
     * 发送验证码
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Sms/CaptchaController/captchaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sendCaptcha($body)
    {
        return $this->restful("POST", "/captcha/send", $body);
    }

    /**
     * 发送语言验证码
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Sms/CaptchaController/voiceCaptchaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sendVoice($body)
    {
        return $this->restful("POST", "/captcha/sendVoice", $body);
    }

    /**
     * 新建/修改模式
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ModesController/saveModesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setMode($body)
    {
        return $this->restful("POST", "/admin/modes/set", $body);
    }

    /**
     * 新建/修改商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectGoodsController/setAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setProjectGoods($body)
    {
        return $this->restful("POST", "/admin/projectGoods/set", $body);
    }

    /**
     * 解冻项目资金
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Fund/FundController/unfreezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unfreezeProjectAmount($body)
    {
        return $this->restful("POST", "/fund/unfreeze", $body);
    }

    /**
     * 查看项目商品
     * @link https://uniondrug.coding.net/p/module.activity/git/blob/development/docs/api/Admin/ProjectGoodsController/viewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function viewProjectGoods($body)
    {
        return $this->restful("POST", "/admin/projectGoods/view", $body);
    }
}
