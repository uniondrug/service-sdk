<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-07-29
 * Time: 17:31
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaOrderQuerySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.order.query';

    /**
     * 根据主订单号集合获取子订单列表(新，兼容老数据)
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryMainOrderList($body)
    {
        return $this->restful("POST", "/customer/query/queryMainOrderList", $body);
    }

    /**
     * 子订单查询列表
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function subOrderList($body)
    {
        return $this->restful("POST", "/order/v2/sub/list", $body);
    }

    /**
     * 子订单查询列表
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statisticsByMerchant($body)
    {
        return $this->restful("POST", "/order/query/statisticsByMerchant", $body, null, [
            'timeout' => 10
        ]);
    }

    /**
     * 退单信息查询
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryRefundListByOrderNoForYDB($body)
    {
        return $this->restful("POST", "/refund/query/queryRefundListByOrderNoForYDB", $body);
    }

    /**
     * 子订单列表检索
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQuerySubOrderListForAdmin($body)
    {
        return $this->restful("POST", "/order/query/querySubOrderListForAdmin", $body);
    }

    /**
     * 商品维度的订单列表检索
     * @link
     * @param $body
     * @return ResponseInterface
     */
    public function orderItemQuery($body)
    {
        return $this->restful("POST", "/order/item/query", $body);
    }

    /**
     * 订单查询
     * @param $body
     * @return ResponseInterface
     */
    public function orderSubQuery($body)
    {
        return $this->restful("POST", "/order/v2/sub/query", $body);
    }
}