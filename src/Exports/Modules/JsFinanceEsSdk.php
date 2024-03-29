<?php
/**
 * @name   JsFinanceEsSdk
 * @date   2021-09-18
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JsFinanceEsSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JsFinanceEsSdk extends SdkBase
{
    /**
     * 财务ES查询
     * @var string
     */
    protected $serviceName = 'js-finance-es';

    /**
     * 根据文档ID获取详情
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/CommonController/detail.md
     * @param $body
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/esapi/search/detail", $body);
    }

    /**
     * 应付结算单分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/payablePage.md
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/payout/page", $body);
    }

    /**
     * 应付结算单-直付结算单订单分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/orderPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementOrderPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/payout/order/page", $body);
    }

    /**
     * 应付结算单-直付结算单订单商品分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/orderGoodsPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementOrderGoodsPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/payout/ordergoods/page", $body);
    }

    /**
     * 应付结算单-服务补贴订单分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/orderGoodsPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatementOrderPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/subsidy/order/page", $body);
    }

    /**
     * 应付结算单-服务补贴订单商品分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/orderGoodsPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function subsidyStatementOrderGoodsPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/subsidy/goods/page", $body);
    }

    /**
     * 应付结算单-换新订单分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/orderGoodsPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function renewStatementOrderPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/renew/order/page", $body);
    }

    /**
     * 应收结算单-分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/StatementController/receivablePage.md
     * @param $body
     * @return ResponseInterface
     */
    public function receiveStatementPaging($body)
    {
        return $this->restful("POST", "/esapi/search/statement/receive/page", $body);
    }

    /**
     * 开票单-分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/BillController/billPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function billPaging($body)
    {
        return $this->restful("POST", "/esapi/search/bill/page", $body);
    }

    /**
     * 开票单-状态汇总
     * @link https://torna.uniondrug.cn/#/view/E8rEEGv2
     * @param $body
     * @return ResponseInterface
     */
    public function billStatusGroupCount($body)
    {
        return $this->restful("POST", "/esapi/search/bill/status/group/count", $body);
    }

    /**
     * 开票单-销售清单分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/BillController/salesListPage.md
     * @param $body
     * @return ResponseInterface
     */
    public function billSaleListPaging($body)
    {
        return $this->restful("POST", "/esapi/search/bill/saleslist/page", $body);
    }

    /**
     * 发票-分页列表
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/BillController/invoicePage.md
     * @param $body
     * @return ResponseInterface
     */
    public function invoicePaging($body)
    {
        return $this->restful("POST", "/esapi/search/invoice/page", $body);
    }

    /**
     * 物流-分页列表
     * @param $body
     * @return ResponseInterface
     * @link
     */
    public function invoiceExpressPaging($body)
    {
        return $this->restful("POST", "/esapi/search/express/page", $body);
    }

    /**
     * 销售清单-分页列表
     * @param $body
     * @return ResponseInterface
     * @link
     */
    public function billSalePaging($body)
    {
        return $this->restful("POST", "/esapi/search/bill/saleslist/page", $body);
    }

    /**
     * 资金收款单-分页列表
     * @link https://torna.uniondrug.cn/#/view/K8MM3g8l
     * @param $body
     * @return ResponseInterface
     */
    public function receiptPaging($body)
    {
        return $this->restful("POST", "/esapi/search/coin/receipt/page", $body);
    }
}

