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
 * @date   2021-03-01
 * @time   Mon, 01 Mar 2021 18:06:51 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsFinanceStatementSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsFinanceStatementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-finance-statement';

    /**
     * 结算单状态变更接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directChangeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/change/status", $body, $query, $extra);
    }

    /**
     * 获取结算单订单列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directDirectOrders($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/orders", $body, $query, $extra);
    }

    /**
     * 导出指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/exportStatementGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directExportStatementGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/exportStatementGoods", $body, $query, $extra);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/orderGoods", $body, $query, $extra);
    }

    /**
     * 订单结算明细
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderPayMethodAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderPayMethod($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/orderPayMethod", $body, $query, $extra);
    }

    /**
     * 导出结算单订单列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrdersExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/orderExport", $body, $query, $extra);
    }

    /**
     * 导出订单的商品列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/goodsExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportGoodsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/goodsExport", $body, $query, $extra);
    }

    /**
     * 导出直付订单列表接口-商家
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportOrdersExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/ordersExport", $body, $query, $extra);
    }

    /**
     * 直付订单列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportOrdersList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/ordersList", $body, $query, $extra);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/settlementTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directSettlementTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/settlementTotal", $body, $query, $extra);
    }

    /**
     * 获取原商品列表接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/statementGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/statementGoods", $body, $query, $extra);
    }

    /**
     * 结算单按支付方式，扣率统计接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/statementPayMethodAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementPayMethod($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/statementPayMethod", $body, $query, $extra);
    }

    /**
     * 结算单详情
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/detail", $body, $query, $extra);
    }

    /**
     * 结算单导出
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/exportStatementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/export/statement", $body, $query, $extra);
    }

    /**
     * 获取结算单分页列表-商家
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/list", $body, $query, $extra);
    }

    /**
     * 结算单分页列表
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/paging", $body, $query, $extra);
    }

    /**
     * 对账单付款进度
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/paymentProgressAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPaymentProgress($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/paymentProgress", $body, $query, $extra);
    }

    /**
     * 对账函确认
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/pdfConfirmAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPdfConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/pdf/confirm", $body, $query, $extra);
    }

    /**
     * 结算单订单数据统计
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/StatementsController/statisticsOrdersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementStatisticsOrders($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/statisticsOrders", $body, $query, $extra);
    }

    /**
     * 更新对账单下订单的状态接口
     * @link https://uniondrug.coding.net/p/ps-finance-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/updateSettlementStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directUpdateSettlementStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/fsDirectSettlement/updateSettlementStatus", $body, $query, $extra);
    }
}
