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
 * JavaOrderErpSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaOrderErpSdk extends SdkBase
{
    
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.order.erp';

    /**
     * 链接
     * @param $body
     * @return ResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function pushQuery($body)
    {
        return $this->restful(static::METHOD_POST, '/order/push/query', $body);
    }
}
