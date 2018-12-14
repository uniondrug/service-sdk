<?php
/**
 * @author wss
 * @date   : 2018-12-05
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class RefundSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'refund';


    /**
     * 获取退单详情
     * @link https://uniondrug.coding.net/p/module.refund/git/blob/development/docs/api/RefundController/infoAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function refundInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/refund/info", $body);
    }

    /**
     * 添加退单
     * @link https://uniondrug.coding.net/p/module.refund/git/blob/development/docs/api/RefundController/addAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function addRefund($body)
    {
        return $this->restful(static::METHOD_POST, "/refund/add", $body);
    }

    /**
     * 实现退单
     * @link https://uniondrug.coding.net/p/module.refund/git/blob/development/docs/api/RefundController/editAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function editRefund($body)
    {
        return $this->restful(static::METHOD_POST, "/refund/edit", $body);
    }
}