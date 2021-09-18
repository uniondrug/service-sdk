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
     * 分页查询
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/page.md
     * @param $body
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/esapi/search/page", $body);
    }

    /**
     * 详情
     * @link https://git.uniondrug.com/code/1/finance/others/jx-finance-esapi/blob/development/doc-api/es-api/detail.md
     * @param $body
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/esapi/search/detail", $body);
    }
}

