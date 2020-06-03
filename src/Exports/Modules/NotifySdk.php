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
 * @date   2020-06-03
 * @time   Wed, 03 Jun 2020 14:42:52 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * NotifySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class NotifySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'notify.module';

    /**
     * 单推 此方法只支持单推
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageCreate($body)
    {
        return $this->restful("POST", "/message/create", $body);
    }

    /**
     * 删除消息
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageDel($body)
    {
        return $this->restful("POST", "/message/del", $body);
    }

    /**
     * 消息详情
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageDetail($body)
    {
        return $this->restful("POST", "/message/detail", $body);
    }

    /**
     * 是否有新消息
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/hasNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageHasNew($body)
    {
        return $this->restful("POST", "/message/hasNew", $body);
    }

    /**
     * 消息分页
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messagePaging($body)
    {
        return $this->restful("POST", "/message/paging", $body);
    }

    /**
     * 读消息
     * @link https://uniondrug.coding.net/p/module.notify/git/blob/development/docs/api/MessageController/readAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageRead($body)
    {
        return $this->restful("POST", "/message/read", $body);
    }
}
