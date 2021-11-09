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
 * @time   Tue, 09 Nov 2021 16:14:15 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsAssistantOrgSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsAssistantOrgSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-assistant-org';

    /**
     * 新增
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgFuncController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgFuncCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgFunc/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgFuncController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgFuncPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgFunc/page", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgLogsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgLogsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgLogs/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgLogsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgLogsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgLogs/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgLogsController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgLogsPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgLogs/page", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgModuleController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgModuleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgModule/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgModuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgModuleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgModule/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgModuleController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgModulePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgModule/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgModuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgModuleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgModule/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganization/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganization/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationModuleController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationModuleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganizationModule/create", $body, $query, $extra);
    }

    /**
     * 关联模块详情信息
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationModuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationModuleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganizationModule/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationModuleController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationModuleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganizationModule/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationModuleController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationModulePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganizationModule/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationModuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationModuleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganizationModule/update", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganization/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://git.uniondrug.com/code/1/zhushou/organization/ps-assistant-org/tree/development/docs/api/OrgOrganizationController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orgOrganizationUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orgOrganization/update", $body, $query, $extra);
    }
}
