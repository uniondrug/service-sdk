<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-03-08
 * @time   Fri, 08 Mar 2019 14:25:06 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * MessageSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MessageSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'message.module';

    /**
     * 注册新应用
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/AppController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function appRegister($body)
    {
        return $this->restful("POST", "/app/register", $body);
    }

    /**
     * 添加消息
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/MessageController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageAdd($body)
    {
        return $this->restful("POST", "/message/add", $body);
    }

    /**
     * 读取消息详情
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/MessageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageDetail($body)
    {
        return $this->restful("POST", "/message/detail", $body);
    }

    /**
     * 读取消息分页
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/MessageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messagePaging($body)
    {
        return $this->restful("POST", "/message/paging", $body);
    }

    /**
     * 读取所有消息
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/MessageController/pagingAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messagePagingAll($body)
    {
        return $this->restful("POST", "/message/pagingAll", $body);
    }

    /**
     * 发送微信模版消息
     * @link https://uniondrug.coding.net/p/module.message/git/blob/development/docs/api/WxMessageController/sendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function wxMessageSend($body)
    {
        return $this->restful("POST", "/wx/message/send", $body);
    }
}
