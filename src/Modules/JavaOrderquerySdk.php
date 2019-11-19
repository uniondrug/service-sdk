<?php
/**
 * @name   JavaOrderquerySdk
 * @date   2019-7-04
 */
namespace Uniondrug\ServiceSdk\Modules;
use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;
/**
 * JavaOrderquerySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaOrderquerySdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaOrderquery';
    
    /**
     * 退单信息查询
     * @link 
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function queryRefundListByOrderNoForYDB($body)
    {
        return $this->restful("POST", "/refund/query/queryRefundListByOrderNoForYDB", $body);
    }

    /**
     * 计算订单状态下的订单数量
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/api-docs/java.module.order/api-docs/docs-order-query/orderGroupCount.md
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function queryCountViewStatus($body)
    {
        return $this->restful("POST", "/order/v2/main/count/viewStatus", $body);
    }
}
