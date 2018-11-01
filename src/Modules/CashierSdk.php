<?php
/**
 * Created by PhpStorm.
 * User: qishengqiang
 * Date: 2018/10/31
 * Time: 12:05 AM
 */

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 收银台服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class CashierSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'cashier';
    /**
     * 创建收银台信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/cashier/create", $body);
    }

    /**
     * 收银台消费
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function consume($body)
    {
        return $this->restful(static::METHOD_POST, "/cashier/consume", $body);
    }

    /**
     * 确认支付订单成功与否
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function confirm($body)
    {
        return $this->restful(static::METHOD_POST, "/cashier/confirm", $body);
    }
}