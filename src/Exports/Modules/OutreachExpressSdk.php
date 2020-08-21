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
 * @date   2020-07-30
 * @time   Thu, 30 Jul 2020 13:16:43 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * OutreachExpressSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class OutreachExpressSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'outreach.express.module';

    /**
     * 创建物流运单
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/addOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addOrder($body)
    {
        return $this->restful("POST", "/api/order/addOrder", $body);
    }

    /**
     * 创建物流门店
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Store/StoreController/addStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStore($body)
    {
        return $this->restful("POST", "/api/store/addStore", $body);
    }

    /**
     * 运单号绑定药联子订单号
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/bindingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function binding($body)
    {
        return $this->restful("POST", "/api/order/binding", $body);
    }

    /**
     * 运单取消原因列表
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/cancelReasonsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function CancelReasons($body)
    {
        return $this->restful("POST", "/api/order/cancel/reasons", $body);
    }

    /**
     * 运单取消
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/formalCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function formalCancel($body)
    {
        return $this->restful("POST", "/api/order/formalCancel", $body);
    }

    /**
     * 国内物流订单状态回调
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/logisticsOrderNotifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logisticsOrderNotify($body)
    {
        return $this->restful("POST", "/api/order/logisticsOrderNotify", $body);
    }

    /**
     * 同城物流订单状态回调
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/orderNotifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderNotify($body)
    {
        return $this->restful("POST", "/api/order/orderNotify", $body);
    }

    /**
     * 查询运费
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Deliver/DeliverController/queryDeliverFeeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryDeliverFee($body)
    {
        return $this->restful("POST", "/api/deliver/queryDeliverFee", $body);
    }

    /**
     * 运单详情查询
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/queryOrderInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryOrderInfo($body)
    {
        return $this->restful("POST", "/api/order/queryOrderInfo", $body);
    }

    /**
     * 骑手信息查询
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/queryRiderInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryRiderInfo($body)
    {
        return $this->restful("POST", "/api/order/queryRiderInfo", $body);
    }

    /**
     * 运单重发
     * @link https://uniondrug.coding.net/p/module.express.outreach/git/blob/development/docs/api/Api/Order/OrderController/reAddOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reAddOrder($body)
    {
        return $this->restful("POST", "/api/order/reAddOrder", $body);
    }
}
