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
 * @date   2019-06-24
 * @time   Mon, 24 Jun 2019 11:02:00 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AssistantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AssistantSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'assistant.module';

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
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationTabsController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function operationTabsListing($body)
    {
        return $this->restful("POST", "/operationTabs/listing", $body);
    }

    /**
     * 新增角色
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleCreate($body)
    {
        return $this->restful("POST", "/role/create", $body);
    }

    /**
     * 全部角色列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleListing($body)
    {
        return $this->restful("POST", "/role/listing", $body);
    }

    /**
     * 获取角色权限列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/listingAuthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleListingAuth($body)
    {
        return $this->restful("POST", "/role/listing/auth", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rolePaging($body)
    {
        return $this->restful("POST", "/role/paging", $body);
    }

    /**
     * 分配权限
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/settingAuthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleSettingAuth($body)
    {
        return $this->restful("POST", "/role/setting/auth", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleUpdate($body)
    {
        return $this->restful("POST", "/role/update", $body);
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

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersDetail($body)
    {
        return $this->restful("POST", "/users/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersPaging($body)
    {
        return $this->restful("POST", "/users/paging", $body);
    }
}
