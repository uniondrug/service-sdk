<?php
/**
 * Created by PhpStorm.
 * User: qinguofeng
 * Date: 2020-06-02
 * Time: 19:56
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaCashierSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPmcCashierSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.pmc.cashier';

    /**
     * 根据主订单号/退单号 查询退单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/refundQuery.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryRefunds($body)
    {
        return $this->restful("POST", "/cashier/queryRefunds", $body);
    }

    /**
     * 根据主订单号查询主订单支付信息
     * @link https://uniondrug.coding.net/p/java.module.order/git/blob/development/uniondrug/uniondrug-services/uniondrug-cashier-service/doc/cashierQuery.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderQueryPayCashiers($body)
    {
        return $this->restful("POST", "/cashier/queryPaycashiers", $body);
    }
}