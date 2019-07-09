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

    /**
     * 卡订单号
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardOrder', $body);
    }

    /**
     * 新增标签
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagAdd($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/add', $body);
    }

    /**
     * 标签删除
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagRemove($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/remove', $body);
    }

    /**
     * 标签列表展示
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagList($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/list', $body);
    }
}
