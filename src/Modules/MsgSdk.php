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
     * 消息发布
     * @link https://uniondrug.coding.net/p/module.msg/git/blob/development/docs/api/Msg/PublishController/publishAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function publish($body)
    {
        return $this->restful(static::METHOD_POST, "/msg/publish", $body);
    }

    /**
     * 报告回调
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function report($body)
    {
        return $this->restful(static::METHOD_POST, "/report/notify", $body);
    }

    /**
     * 验证码校验
     * @link https://uniondrug.coding.net/p/module.msg/git/blob/develop/docs/api/Msg/CheckController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function check($body)
    {
        return $this->restful(static::METHOD_POST, "/msg/check", $body);
    }
}
