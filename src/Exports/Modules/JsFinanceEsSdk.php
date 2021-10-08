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
     * 应付结算单分页
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/SettlementController/page.md
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementPaging($body)
    {
        return $this->restful("POST", "/esapi/search/settlement/payable/page", $body);
    }

    /**
     * 应付结算单-直付结算单订单详情
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/detail.md
     * @param $body
     * @return ResponseInterface
     */
    public function payoutStatementOrderPaging($body)
    {
        return $this->restful("POST", "/esapi/search/settlement/order/page", $body);
    }
}

