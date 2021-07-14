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
 * @date   2021-07-08
 * @time   Thu, 08 Jul 2021 17:17:28 +0800
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
     * 店员接单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/AssistantController/acceptOrderAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantAcceptOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/accept/order", $body, $query, $extra);
    }

    /**
     * 店员配送
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/DeliverController/assistantDeliverAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantDeliver($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/deliver/assistant", $body, $query, $extra);
    }

    /**
     * 店员送达
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/DeliverController/assistantFinishAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantFinish($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/deliver/assistant/finish", $body, $query, $extra);
    }

    /**
     * 可接单店员列表
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/AssistantController/assistantListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/list", $body, $query, $extra);
    }

    /**
     * 店员拒单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/AssistantController/rejectOrderAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantRejectOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/reject/order", $body, $query, $extra);
    }

    /**
     * 移交店员
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/AssistantController/transferAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transfer", $body, $query, $extra);
    }

    /**
     * 物流配送
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/DeliverController/expressDeliverAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function expressDeliver($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/deliver/express", $body, $query, $extra);
    }

    /**
     * 查看全国订单物流信息
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/DeliverController/nExpressQueryAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function expressQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/deliver/express/query", $body, $query, $extra);
    }

    /**
     * 获取接单状态
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/AssistantController/getStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getAssistantStatus($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/assistant/get/status", $body, $query, $extra);
    }

    /**
     * 详情接口
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/NoticeController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/detail", $body, $query, $extra);
    }

    /**
     * 列表接口
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/NoticeController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/list", $body, $query, $extra);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/detail", $body, $query, $extra);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/paging", $body, $query, $extra);
    }

    /**
     * 出单量
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/orderQuantityAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderQuantity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/order/quantity", $body, $query, $extra);
    }

    /**
     * 搜索订单
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/OrderController/searchAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderSearch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/search", $body, $query, $extra);
    }

    /**
     * 提货码提货
     * @link https://uniondrug.coding.net/p/module.take/git/tree/development/app/docs/api/DeliverController/selfFetchAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function selfFetched($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/deliver/self/finish", $body, $query, $extra);
    }
}
