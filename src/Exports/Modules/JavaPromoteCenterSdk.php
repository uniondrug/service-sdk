<?php
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * java 营销券服务
 * Class JavaPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPromoteCenterSdk extends SdkBase
{
    protected $serviceName = 'java.promote.center';

    /**
     * 创建卡
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendCard($body)
    {
        return $this->restful(static::METHOD_POST, '/card/sendCard', $body);
    }

    /**
     * 卡列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryMyRecord($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryMyRecord', $body);
    }

    /**
     * 卡详情
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardDetail', $body);
    }

    /**
     * 卡消费记录
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCouponList($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/queryCouponList', $body);
    }
}
