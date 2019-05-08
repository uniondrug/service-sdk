<?php
/**
 * @author yanglei <809623518@qq.com>
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
class MsgSdk extends Sdk implements ServiceSdkInterface
{

    /**
     * 发送模板消息
     * @link
     * @param json|StructInterface $body
     * @return ClientResponseInterface
     */
    public function msgPublish($body)
    {
        return $this->restful(static::METHOD_POST, "/msg/publish", $body);
    }
}
