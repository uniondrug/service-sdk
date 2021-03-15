<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaEquityActiveSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js-equity-active-service';

    /**
     *
     *
     * </>
     * @param array $body 入参类型
     *
     * @return ResponseInterface
     */
    public function equityOrder($body)
    {
        return $this->restful("POST", "/equity/order/batch", $body);
    }
}
