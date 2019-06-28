<?php

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 药店宝消息推送
 * Class NotifySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class NotifySdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'notify';

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/backend.operatorcenter/git/blob/development/docs/api/Notify/NotifyController/indexAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notifyList($body)
    {
        return $this->restful(static::METHOD_POST, "/notify", $body);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/backend.operatorcenter/git/blob/development/docs/api/Notify/NotifyController/createAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notifyCreate($body)
    {
        return $this->restful(static::METHOD_POST, "/notify/create", $body);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/backend.operatorcenter/git/blob/development/docs/api/Notify/NotifyController/updateAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notifyUpdate($body)
    {
        return $this->restful(static::METHOD_POST, "/notify/update", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/backend.operatorcenter/git/blob/development/docs/api/Notify/NotifyController/detailAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function notifyDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/notify/detail", $body);
    }

    /**
     * 撤销
     * @link https://uniondrug.coding.net/p/backend.operatorcenter/git/blob/development/docs/api/Notify/NotifyController/cancelAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful(static::METHOD_POST, "/notify/cancel", $body);
    }


}