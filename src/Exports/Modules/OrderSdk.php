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
 * @date   2019-03-28
 * @time   Thu, 28 Mar 2019 16:20:36 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * OrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class OrderSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'order.module';

    /**
     * 更改店员信息
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/addAssistantAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addAssistant($body)
    {
        return $this->restful("POST", "/order/addassistant", $body);
    }

    /**
     * 添加数据
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderLogisticsController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addOrderLogistics($body)
    {
        return $this->restful("POST", "/orderlogistics/add", $body);
    }

    /**
     * 撤销订单
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful("POST", "/order/cancel", $body);
    }

    /**
     * 已支付完成后进行撤单
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/cancelRefundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelRefund($body)
    {
        return $this->restful("POST", "/order/cancelrefund", $body);
    }

    /**
     * 添加erp验证
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/checkErpAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkErp($body)
    {
        return $this->restful("POST", "/order/checkErp", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 修改订单对应收入价格
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/editAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editAmount($body)
    {
        return $this->restful("POST", "/order/editamount", $body);
    }

    /**
     * 修改退单状态
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/editOrderRefundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editOrderRefund($body)
    {
        return $this->restful("POST", "/order/editorderrefund", $body);
    }

    /**
     * 益丰修改订单状态
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/editOrderStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editOrderStatus($body)
    {
        return $this->restful("POST", "/order/editorderstatus", $body);
    }

    /**
     * 获取订单详情接口
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/order/detail", $body);
    }

    /**
     * 获取订单列表
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getList($body)
    {
        return $this->restful("POST", "/order/", $body);
    }

    /**
     * 订单号查询物流
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderLogisticsController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function info($body)
    {
        return $this->restful("POST", "/orderlogistics/info", $body);
    }

    /**
     * 统计数量
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/memberStatusCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberStatusCount($body)
    {
        return $this->restful("POST", "/order/memberstatuscount", $body);
    }

    /**
     * 根据用户查询列表
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/memberStatusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberStatusList($body)
    {
        return $this->restful("POST", "/order/memberstatuslist", $body);
    }

    /**
     * 订单回调
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/notifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function notify($body)
    {
        return $this->restful("POST", "/order/notify", $body);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderEdit($body)
    {
        return $this->restful("POST", "/order/edit", $body);
    }

    /**
     * 获取门店订单统计数据
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/getStatisticByStoreIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderGetStatisticByStoreId($body)
    {
        return $this->restful("POST", "/order/getStatisticByStoreId", $body);
    }

    /**
     * 查询数据
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderInfo($body)
    {
        return $this->restful("POST", "/order/info", $body);
    }

    /**
     * 获取orderno集合的出单状态
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/orderMethodAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderMethod($body)
    {
        return $this->restful("POST", "/order/ordermethod", $body);
    }

    /**
     * 获取orderno集合
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/orderNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNos($body)
    {
        return $this->restful("POST", "/order/ordernos", $body);
    }

    /**
     * 订单号查询物流
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderLogisticsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingOrderLogistics($body)
    {
        return $this->restful("POST", "/orderlogistics/paging", $body);
    }

    /**
     * 订单回推
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/pushAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function push($body)
    {
        return $this->restful("POST", "/order/push", $body);
    }

    /**
     * 退款
     * @link https://uniondrug.coding.net/p/module.order/git/tree/development/docs/api/OrderController/refundOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful("POST", "/order/refundorder", $body);
    }
}
