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
 * @date   2019-06-18
 * @time   Tue, 18 Jun 2019 12:26:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * AssistantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AssistantSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'assistant';

    /**
     * 根据类型批量统计某个字段的数量
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/countAssistantByStoreIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCountByStoreIds($body)
    {
        return $this->restful("POST", "/assistant/count/by/storeIds", $body);
    }

    /**
     * 获取店员信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantInfo($body)
    {
        return $this->restful("POST", "/assistant/info", $body);
    }

    /**
     * 注册店员
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantRegister($body)
    {
        return $this->restful("POST", "/assistant/register", $body);
    }

    /**
     * 邀请函绑定
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/BindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inviteBind($body)
    {
        return $this->restful("POST", "/invite/bind", $body);
    }

    /**
     * 按条件查询邀请信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inviteInfo($body)
    {
        return $this->restful("POST", "/invite/info", $body);
    }

    /**
     * 获取一条助手用户新
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 统计城市经理人邀请数量
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/userInvitesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInvites($body)
    {
        return $this->restful("POST", "/invite/userinvites", $body);
    }
}
