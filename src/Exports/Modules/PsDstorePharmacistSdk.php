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
 * @date   2021-11-09
 * @time   Tue, 09 Nov 2021 16:58:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstorePharmacistSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstorePharmacistSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-pharmacist';

    /**
     * 根据项目类型获取项目详情
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/getProjectByTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getProjectByType", $body, $query, $extra);
    }

    /**
     * 获取项目配置
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/getProjectConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getProjectConfig", $body, $query, $extra);
    }

    /**
     * 获取项目跳转url
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/getProjectJumpUrlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectJumpUrl($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getProjectJumpUrl", $body, $query, $extra);
    }

    /**
     * 根据会话id获取转接记录
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ConversationController/getSwitchLogByConversationIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSwitchLogByConversationId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/conversation/getSwitchLogByConversationId", $body, $query, $extra);
    }

    /**
     * 获取用户和药师的进行中的会话
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ConversationController/getUnfinishedConversationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUnfinishedConversation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/conversation/getUnfinishedConversation", $body, $query, $extra);
    }

    /**
     * assistantIds
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/assistantIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantAssistantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/assistantIds", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/delete", $body, $query, $extra);
    }

    /**
     * forbidden
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/forbiddenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantForbidden($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/forbidden", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectAssistantController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectAssistantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/assistant/update", $body, $query, $extra);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/logPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/log/page", $body, $query, $extra);
    }

    /**
     * 开启项目
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/openAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/open", $body, $query, $extra);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/page", $body, $query, $extra);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/saveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function saveProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/save", $body, $query, $extra);
    }

    /**
     * 更新会话转接记录
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ConversationController/updateConversationSwitchLogAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateConversationSwitchLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/conversation/updateConversationSwitchLog", $body, $query, $extra);
    }
}
