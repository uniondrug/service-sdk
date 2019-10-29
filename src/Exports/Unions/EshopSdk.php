<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Unions`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-09-23
 * @time   Mon, 23 Sep 2019 11:10:51 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * EshopSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class EshopSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'eshop.union';

    /**
     * 接单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/TakeController/acceptAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function acceptOrder($body)
    {
        return $this->restful("POST", "/take/accept", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 物流状态同步
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/ExpressController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderExpressStatus($body)
    {
        return $this->restful("POST", "/order/express/status", $body);
    }

    /**
     * 订单状态变更
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderStatus($body)
    {
        return $this->restful("POST", "/order/status", $body);
    }

    /**
     * 申请退款
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/OrderController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 拒单
     * @link https://uniondrug.coding.net/p/union.eshop/git/blob/development/docs/api/TakeController/rejectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rejectOrder($body)
    {
        return $this->restful("POST", "/take/reject", $body);
    }
}
