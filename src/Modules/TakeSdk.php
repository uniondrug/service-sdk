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
 * @date   2018-12-12
 * @time   Wed, 12 Dec 2018 14:39:09 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 财务结算计算模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class TakeSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'take';

    /**
     * 店员拒绝
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/assistantRefuseAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantRefuse($body)
    {
        return $this->restful("POST", "/order/assistantRefuse", $body);
    }

    /**
     * 店员拒绝
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/cancelAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/order/detail", $body);
    }

    /**
     * 用户拒绝
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/memberRefuseAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberRefuse($body)
    {
        return $this->restful("POST", "/order/memberRefuse", $body);
    }

    /**
     * 订单分页
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/order/paging", $body);
    }

    /**
     * 用户领取
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/takeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function take($body)
    {
        return $this->restful("POST", "/order/take", $body);
    }

    /**
     * 等待骑手到店
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/takeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function waitStore($body)
    {
        return $this->restful("POST", "/order/waitStore", $body);
    }

    /**
     * 等待骑手接单
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/takeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function waitDriving($body)
    {
        return $this->restful("POST", "/order/waitDriving", $body);
    }

    /**
     * 完成订单
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/finishAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function finish($body)
    {
        return $this->restful("POST", "/order/finish", $body);
    }

    /**
     * 单子发送
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/OrderController/sendAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function send($body)
    {
        return $this->restful("POST", "/order/send", $body);
    }

    /**
     * 关闭自动接单模式
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/closeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function close($body)
    {
        return $this->restful("POST", "/user/take/close", $body);
    }

    /**
     * 设置接单模式
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/configAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function config($body)
    {
        return $this->restful("POST", "/user/take/config", $body);
    }

    /**
     * 确认开启接单模式的店员数量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/CountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function count($body)
    {
        return $this->restful("POST", "/user/take/count", $body);
    }


    /**
     * 查找所有该门店下的店员的id
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/FindAllAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function findAll($body)
    {
        return $this->restful("POST", "/user/take/findAll", $body);
    }

    /**
     * 查看该店员是否接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/getDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/user/take/getDetail", $body);
    }

    /**
     * 批量查询对应门店的接单数量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/o2oAcceptCountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function o2oAcceptCount($body)
    {
        return $this->restful("POST", "/user/take/o2oAcceptCount", $body);
    }

}
