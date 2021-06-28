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
 * @date   2021-03-05
 * @time   Fri, 05 Mar 2021 11:44:25 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsFinStatementSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsFinStatementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-fin-statement';

    /**
     * 接收直赔开票单生成消息，生成对应付款记录信息
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/MbsController/createDirectPaymentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createDirectPayment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/mbs/create/payment", $body, $query, $extra);
    }

    /**
     * 结算单状态变更接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directChangeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/change/status", $body, $query, $extra);
    }

    /**
     * 获取结算单订单列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directDirectOrders($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/orders", $body, $query, $extra);
    }

    /**
     * 导出指定对账单内商品列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/exportStatementGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directExportStatementGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/exportStatementGoods", $body, $query, $extra);
    }

    /**
     * 获取指定订单内商品列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/orderGoods", $body, $query, $extra);
    }

    /**
     * 订单结算明细
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderPayMethodAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderPayMethod($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/orderPayMethod", $body, $query, $extra);
    }

    /**
     * 导出结算单订单列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/orderExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrdersExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/orderExport", $body, $query, $extra);
    }

    /**
     * 导出订单的商品列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/goodsExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportGoodsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/goodsExport", $body, $query, $extra);
    }

    /**
     * 导出直付订单列表接口-商家
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportOrdersExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/ordersExport", $body, $query, $extra);
    }

    /**
     * 直付订单列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/ordersListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directReportOrdersList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/ordersList", $body, $query, $extra);
    }

    /**
     * 获取结算数据汇总
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/settlementTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directSettlementTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/settlementTotal", $body, $query, $extra);
    }

    /**
     * 获取原商品列表接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/statementGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/statementGoods", $body, $query, $extra);
    }

    /**
     * 结算单按支付方式，扣率统计接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/statementPayMethodAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementPayMethod($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/statementPayMethod", $body, $query, $extra);
    }

    /**
     * 结算单详情
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/detail", $body, $query, $extra);
    }

    /**
     * 结算单导出
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/exportStatementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/export/statement", $body, $query, $extra);
    }

    /**
     * 获取结算单分页列表-商家
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/list", $body, $query, $extra);
    }

    /**
     * 结算单分页列表
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/paging", $body, $query, $extra);
    }

    /**
     * 对账单付款进度-商家
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/paymentProgressAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPaymentProgress($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/paymentProgress", $body, $query, $extra);
    }

    /**
     * 对账函确认
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/pdfConfirmAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementsPdfConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/pdf/confirm", $body, $query, $extra);
    }

    /**
     * 结算单订单数据统计-商家
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/statisticsOrdersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatementStatisticsOrders($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/statisticsOrders", $body, $query, $extra);
    }

    /**
     * 统计接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/reportStatisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/statistics", $body, $query, $extra);
    }

    /**
     * 获取未结算金额
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/unSettledAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directUnSettledAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/unSettledAmount", $body, $query, $extra);
    }

    /**
     * 更新对账单下订单的状态接口
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/FsDirectSettlementController/updateSettlementStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directUpdateSettlementStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/fsDirectSettlement/updateSettlementStatus", $body, $query, $extra);
    }

    /**
     * 结算单详情
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/StatementsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statementsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/detail", $body, $query, $extra);
    }

    /**
     * 商业公司/单体店分页结算列表-商家
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/singlePagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statementSinglePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/singlePaging", $body, $query, $extra);
    }

    /**
     * 商业公司合并对账单
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/Direct/StatementsController/summaryAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statementsSummaryAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/statements/summaryAdd", $body, $query, $extra);
    }

    /**
     * 结算单详情list
     * @link https://uniondrug.coding.net/p/ps-fin-statement/git/blob/development/docs/api/StatementsController/detailListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statementsDetailList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statements/detailList", $body, $query, $extra);
    }

    /**
     * 修改订单支付时间
     * @link https://uniondrug.coding.net/p/statement.fin.ps/git/blob/development/docs/api/OrderController/changePayDateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeOrderPayDate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/change/payDate", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/statement.fin.ps/git/blob/development/docs/api/OrderController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changePayDatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/paging", $body, $query, $extra);
    }
}
