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
     * 批量添加药品
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/DrugController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingDrugCreate($body)
    {
        return $this->restful("POST", "/marketing/drug/create", $body);
    }

    /**
     * 用户参加营销活动下订单接口
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingOrderCreate($body)
    {
        return $this->restful("POST", "/marketing/order/create", $body);
    }

    /**
     * 订单详情接口
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/OrderController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingOrderInfo($body)
    {
        return $this->restful("POST", "/marketing/order/info", $body);
    }

    /**
     * 获取用户是否参加本月换新日活动
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/OrderController/isJoinAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingOrderIsJoin($body)
    {
        return $this->restful("POST", "/marketing/order/is/join", $body);
    }

    /**
     * 查询用户的订单
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/OrderController/memberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingOrderMember($body)
    {
        return $this->restful("POST", "/marketing/order/member", $body);
    }

    /**
     * 更新订单信息
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/OrderController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingOrderUpdate($body)
    {
        return $this->restful("POST", "/marketing/order/update", $body);
    }

    /**
     * 新增营销计划
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/MarketingPlanController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingPlanAdd($body)
    {
        return $this->restful("POST", "/marketing/plan/add", $body);
    }

    /**
     * 获取该连锁下的营销数据
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/MarketingPlanPartnerController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingPlanPartnerDetail($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/detail", $body);
    }

    /**
     * 获取换新日店铺状态
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/MarketingPlanPartnerController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingPlanPartnerStatus($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/status", $body);
    }

    /**
     * 新增营销计划下的连锁
     * @link https://uniondrug.coding.net/p/module.marketing/git/blob/development/docs/api/MarketingPlanPartnerController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketingPlaPartnerAdd($body)
    {
        return $this->restful("POST", "/marketing/plan/partner/add", $body);
    }
}
