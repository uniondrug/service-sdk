<?php
/**
 * @author wss
 * @date   : 2018-07-26
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class PaymentsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'payments';
    /**
     * 订单查询(
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function paymentsList($body)
    {
        return $this->restful(static::METHOD_POST, "/payments/list", $body);
    }
}