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
 * Class ExpressCallbackSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class ExpressCallbackSdk extends SdkBase
{
    /**
     * 新物流系统V2.0
     * @var string
     */
    protected $serviceName = 'express.callback';

    /**
     * 物流跟踪信息查询
     * @link http://doc.oschina.net/module.outreach.express?t=349292
     * @param $body
     * @return ResponseInterface
     */
    public function tracking($body)
    {
        return $this->restful("POST", "/api/tracking/info", $body);
    }

    /**
     * 物流公司列表查询
     * @link http://doc.oschina.net/module.outreach.express?t=349293
     * @param $body
     * @return ResponseInterface
     */
    public function expressList($body)
    {
        return $this->restful("POST", "/api/tracking/expressList", $body);
    }
}
