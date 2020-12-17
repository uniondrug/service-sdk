<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/12/15
 * Time: 2:05 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaImpsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaImpsSdk extends SdkBase
{
    protected $serviceName = 'java.imps';

    /**
     * 发送群消息
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendGroupMsg($body)
    {
        return $this->restful(static::METHOD_POST, '/group/push/sendGroupMsg', $body);
    }

    /**
     * 初始化token
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function imStartAdvice($body)
    {
        return $this->restful(static::METHOD_POST, '/im/chat/imStartAdvice', $body);
    }

    /**
     * memberId换取顾问id
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function memberIdToAdviserId($body)
    {
        return $this->restful(static::METHOD_POST, '/im/base/memberIdToAdvisorId', $body);
    }

    /**
     * 发送优惠券消息
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendCouponMsg($body)
    {
        return $this->restful(static::METHOD_POST, '/im/sysMsg/couponMsg', $body);
    }
}
