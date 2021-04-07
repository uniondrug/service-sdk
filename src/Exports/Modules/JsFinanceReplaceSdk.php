<?php
/**
 * @name   JsFinanceReplaceSdk
 * @date   2021-03-22
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JsFinanceReplaceSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.finance.replace';

    /**
     * 校验是否是否发起在线开票
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/development/docs-api/js-financereplace/check.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function onlineCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/online/check", $body);
    }
}