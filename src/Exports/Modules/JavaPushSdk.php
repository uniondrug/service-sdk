<?php
/**
 * @author: xingshenqiang<xingshenqiang@uniondrug.cn>
 * @date  :   2019-05-13
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java push服务
 * Class JavaPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPushSdk extends SdkBase
{
    protected $serviceName = 'java.push.module';

    /**
     * 添加体检数据
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function pushNotify($body)
    {
        return $this->restful(static::METHOD_POST, '/push/notify', $body);
    }

    /**
     * 换新服务条目查询
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderDrugRenew($body)
    {
        return $this->restful("POST", "/audit/drug/renew/query", $body);
    }

    /**
     * 通过主订单查询审核单
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditQuery($body)
    {
        return $this->restful("POST", "/audit/query", $body);
    }

    /**
     * 订单转移重新审核
     * @link https://uniondrug.coding.net/p/java.module.order/d/java.module.order/git/blob/development/api-docs/docs-order-push/auditRetry.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditRetry($body)
    {
        return $this->restful("POST", "/audit/retry", $body);
    }

    /**
     * 药联到家push
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function yaoliandaojiaPush($body)
    {
        return $this->restful(static::METHOD_POST, 'yldj/push', $body);
    }

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
