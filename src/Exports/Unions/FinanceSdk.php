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
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:24:05 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * FinanceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class FinanceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'finance.union';

    /**
     * 新增结算单
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/AddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStatements($body)
    {
        return $this->restful("POST", "/statements/add", $body);
    }

    /**
     * 结算单审核接口
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/auditingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditingStatements($body)
    {
        return $this->restful("POST", "/statements/auditing", $body);
    }

    /**
     * 结算单状态变更接口
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/changeStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeStatus($body)
    {
        return $this->restful("POST", "/statements/change/status", $body);
    }

    /**
     * 获取指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/GoodsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsDetails($body)
    {
        return $this->restful("POST", "/goods/details", $body);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/GoodsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsList($body)
    {
        return $this->restful("POST", "/goods/list", $body);
    }

    /**
     * 获取账单的操作日志
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/LogController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logPaging($body)
    {
        return $this->restful("POST", "/log/paging", $body);
    }

    /**
     * 订单结算明细
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/OrdersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ordersDetails($body)
    {
        return $this->restful("POST", "/orders/details", $body);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/OrdersController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ordersList($body)
    {
        return $this->restful("POST", "/orders/list", $body);
    }

    /**
     * 结算单结算数据支付方式
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/payDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payStatements($body)
    {
        return $this->restful("POST", "/statements/pay", $body);
    }

    /**
     * 结算单列表
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statementsList($body)
    {
        return $this->restful("POST", "/statements/list", $body);
    }

    /**
     * 结算单结算数据汇总接口
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/totalDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function total($body)
    {
        return $this->restful("POST", "/statements/total", $body);
    }
}
