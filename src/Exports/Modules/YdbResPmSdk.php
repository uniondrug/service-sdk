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
 * @date   2020-09-03
 * @time   Thu, 03 Sep 2020 14:53:39 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * YdbResPmSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class YdbResPmSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ydb-res-pm.module';

    /**
     * changeAction()
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceChange($body)
    {
        return $this->restful("POST", "/resource/change", $body);
    }

    /**
     * 配置连锁门店店员层级的开关
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/configAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceConfig($body)
    {
        return $this->restful("POST", "/resource/config", $body);
    }

    /**
     * 创建接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceCreate($body)
    {
        return $this->restful("POST", "/resource/create", $body);
    }

    /**
     * 详情接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceDetail($body)
    {
        return $this->restful("POST", "/resource/detail", $body);
    }

    /**
     * 修改接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceList($body)
    {
        return $this->restful("POST", "/resource/list", $body);
    }

    /**
     * 获取所有
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/listAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceListAll($body)
    {
        return $this->restful("POST", "/resource/listAll", $body);
    }

    /**
     * 资源组织列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/resourceOrganPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceOrganPaging($body)
    {
        return $this->restful("POST", "/resource/resourceOrganPaging", $body);
    }

    /**
     * 设置组织层面的排序
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/organSortAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceOrganSort($body)
    {
        return $this->restful("POST", "/resource/organSort", $body);
    }

    /**
     * 资源组织列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/organSortRecordAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceOrganSortRecord($body)
    {
        return $this->restful("POST", "/resource/organSortRecord", $body);
    }

    /**
     * 资源分页
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourcePaging($body)
    {
        return $this->restful("POST", "/resource/paging", $body);
    }

    /**
     * 设置排序
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/sortAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceSort($body)
    {
        return $this->restful("POST", "/resource/sort", $body);
    }

    /**
     * 排序资源列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/sortListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceSortList($body)
    {
        return $this->restful("POST", "/resource/sortList", $body);
    }

    /**
     * 同步接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/syncAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceSync($body)
    {
        return $this->restful("POST", "/resource/sync", $body);
    }

    /**
     * 修改接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceUpdate($body)
    {
        return $this->restful("POST", "/resource/update", $body);
    }

    /**
     * 绑定商户
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/bindOrganAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupBindOrgan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/bindOrgan", $body, $query, $extra);
    }

    /**
     * 取消绑定商户
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/cancelBindOrganAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupCancelBindOrgan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/cancelBindOrgan", $body, $query, $extra);
    }

    /**
     * 复制
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/copyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupCopy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/copy", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/create", $body, $query, $extra);
    }

    /**
     * 设为默认
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/defaultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupDefault($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/default", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/detail", $body, $query, $extra);
    }

    /**
     * 列表 [分页]
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/paging", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/statusUpdateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupStatusUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/statusUpdate", $body, $query, $extra);
    }

    /**
     * 绑定资源
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/bindResourceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupBindResource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/bindResource", $body, $query, $extra);
    }

    /**
     * 取消绑定资源
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/cancelBindResourceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupCancelBindResource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/cancelBindResource", $body, $query, $extra);
    }

    /**
     * 列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/list", $body, $query, $extra);
    }

    /**
     * 详情 [根据门店ID]
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/detailByOrganIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupDetailByOrganId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/detailByOrganId", $body, $query, $extra);
    }

    /**
     * 门店绑定map列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/organListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupOrganList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/organList", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/GroupController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceGroupEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/edit", $body, $query, $extra);
    }

    /**
     * 小程序配置列表
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/ResourceController/miniAppListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function resourceMiniAppList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/miniApp/list", $body, $query, $extra);
    }

    /**
     * 根据资源类型批量更新
     * @link https://uniondrug.coding.net/p/module.pm.res.ydb/git/blob/development/docs/api/ResourceController/batchUpdateByTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchUpdateByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/batchUpdateByType", $body, $query, $extra);
    }
}
