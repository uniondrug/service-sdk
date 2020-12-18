<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/12/17
 * Time: 7:58 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaImmidSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaImmidSdk extends SdkBase
{
    protected $serviceName = 'java.immid';

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

    /**
     * 会话列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function chatList($body)
    {
        return $this->restful(static::METHOD_POST, '/im/chat/currencyList', $body);
    }

    /**
     * 创建群聊
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/docs-advisor/blob/master/IM-%E4%B8%AD%E5%8F%B0/%E7%94%B3%E8%AF%B7%E5%88%9B%E5%BB%BA%E7%BE%A4%E8%81%8A.md
     * @param array $body
     * @return ResponseInterface
     */
    public function applyGroup($body)
    {
        return $this->restful(static::METHOD_POST, '/im/chat/applyGroup', $body);
    }
}
