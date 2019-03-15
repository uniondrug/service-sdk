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
 * @date   2019-02-15
 * @time   Fri, 15 Feb 2019 10:41:09 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * Class MarketingSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class MarketingSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'marketing.module';

    /**
     * 用户参加营销活动下订单接口
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingOrderCreate($body)
    {
        return $this->restful("POST", "/marketing/order/create", $body);
    }

    /**
     * 订单详情接口
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/OrderController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingOrderInfo($body)
    {
        return $this->restful("POST", "/marketing/order/info", $body);
    }

    /**
     * 获取用户是否参加本月换新日活动
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/OrderController/isJoinAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingOrderIsJoin($body)
    {
        return $this->restful("POST", "/marketing/order/is/join", $body);
    }

    /**
     * 新增营销计划
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/MarketingPlanController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingPlanAdd($body)
    {
        return $this->restful("POST", "/marketing/plan/add", $body);
    }

    /**
     * 获取该连锁下的营销数据
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/MarketingPlanPartnerController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingPlanPartnerDetail($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/detail", $body);
    }

    /**
     * 获取换新日店铺状态
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/MarketingPlanPartnerController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingPlanPartnerStatus($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/status", $body);
    }

    /**
     * 新增营销计划下的连锁
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/MarketingPlanPartnerController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function MarketingPlaPartnerAdd($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/add", $body);
    }

    /**
     * 批量开启连锁
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchAdd($body)
    {
        return $this->restful("POST", "/trade/in/switch/adds", $body);
    }

    /**
     * 批量开启门店
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/addStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchAddStores($body)
    {
        return $this->restful("POST", "/trade/in/switch/add/stores", $body);
    }

    /**
     * 批量关闭连锁
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchDel($body)
    {
        return $this->restful("POST", "/trade/in/switch/del", $body);
    }

    /**
     * 批量关闭门店
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/delStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchDelStores($body)
    {
        return $this->restful("POST", "/trade/in/switch/del/stores", $body);
    }

    /**
     * 查看信息
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/getInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchGetInfo($body)
    {
        return $this->restful("POST", "/trade/in/switch/get/info", $body);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchList($body)
    {
        return $this->restful("POST", "/trade/in/switch/list", $body);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/module.marketing/git/tree/development/app/docs/api/TradeInSwitchController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchPartnerList($body)
    {
        return $this->restful("POST", "/trade/in/switch/partner/list", $body);
    }

}
