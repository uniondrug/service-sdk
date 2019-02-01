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
 * 微信消息中心
 * @package Uniondrug\ServiceSdk\Modules
 */
class MessageTaskSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'message';

    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task/add", $body);
    }

    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function getPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task", $body);
    }


    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task/detail", $body);
    }


    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function enable($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task/enable", $body);
    }


    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function disable($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task/disable", $body);
    }


    /**
     * 创建消息任务
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/SmsController/sendAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function update($body)
    {
        return $this->restful(static::METHOD_POST, "/message/task/update", $body);
    }
}
