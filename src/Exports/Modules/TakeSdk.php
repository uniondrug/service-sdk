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
 * @date   2019-11-15
 * @time   Fri, 15 Nov 2019 14:23:10 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * TakeSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class TakeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'take.module';

    /**
     * 拒绝接口
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/assistantRefuseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantRefuse($body)
    {
        return $this->restful("POST", "/order/assistantRefuse", $body);
    }

    /**
     * 取消订单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 关闭接单模式
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/closeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function close($body)
    {
        return $this->restful("POST", "/user/take/close", $body);
    }

    /**
     * 设置接单模式
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/configAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function config($body)
    {
        return $this->restful("POST", "/user/take/config", $body);
    }

    /**
     * 确认开启接单模式的店员数量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/countAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function count($body)
    {
        return $this->restful("POST", "/user/take/count", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/order/detail", $body);
    }

    /**
     * 查找所有该门店下的店员的id
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/findAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function findAll($body)
    {
        return $this->restful("POST", "/user/take/findAll", $body);
    }

    /**
     * 已完成
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/finishAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function finish($body)
    {
        return $this->restful("POST", "/order/finish", $body);
    }

    /**
     * 查看该店员是否接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/getDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/user/take/getDetail", $body);
    }

    /**
     * 新订单分页
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/newPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrderPaging($body)
    {
        return $this->restful("POST", "/order/new/paging", $body);
    }

    /**
     * 用户拒绝
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/memberRefuseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberRefuse($body)
    {
        return $this->restful("POST", "/order/memberRefuse", $body);
    }

    /**
     * 批量查询对应门店的接单数量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/o2oAcceptCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function o2oAcceptCount($body)
    {
        return $this->restful("POST", "/user/take/o2oAcceptCount", $body);
    }

    /**
     * 批量查询对应门店的接单数量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/User/TakeController/o2oAcceptCountOrganAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function o2oAcceptCountOrgan($body)
    {
        return $this->restful("POST", "/user/take/o2oAcceptCountOrgan", $body);
    }

    /**
     * 自动处理接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/orderAutoDriverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderAutoDriver($body)
    {
        return $this->restful("POST", "/order/orderAutoDriver", $body);
    }

    /**
     * 订单分页
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/order/paging", $body);
    }

    /**
     * 拣货
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/pickAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pick($body)
    {
        return $this->restful("POST", "/order/pick", $body);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/Partner/PartnerSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function recordDetail($body)
    {
        return $this->restful("POST", "/partner/switch/list", $body);
    }

    /**
     * 退款
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refund($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 骑手接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/sendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function send($body)
    {
        return $this->restful("POST", "/order/send", $body);
    }

    /**
     * 店员已接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/takeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function take($body)
    {
        return $this->restful("POST", "/order/take", $body);
    }

    /**
     * 等待骑手接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/waitDrivingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function waitDriving($body)
    {
        return $this->restful("POST", "/order/waitDriving", $body);
    }

    /**
     * 等待骑手到店
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/waitStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function waitStore($body)
    {
        return $this->restful("POST", "/order/waitStore", $body);
    }
}
