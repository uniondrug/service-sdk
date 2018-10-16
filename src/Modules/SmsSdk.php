<?php
/**
 * @author kuanxing <346300265@qq.com>
 * @date   2018-06-21
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 消息中心
 * @package Uniondrug\ServiceSdk\Modules
 */
class SmsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'message';

    /**
     * 发送短信
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function send($body)
    {
        return $this->restful(static::METHOD_POST, "/sms/send", $body);
    }

}
