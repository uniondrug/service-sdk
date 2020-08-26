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
 * @date   2020-08-26
 * @time   Wed, 26 Aug 2020 20:04:38 +0800
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
     * 设置排序
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/changeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceChange($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/change", $body, $query, $extra);
    }

    /**
     * 配置连锁门店店员层级的开关
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/configAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/config", $body, $query, $extra);
    }

    /**
     * 创建接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/create", $body, $query, $extra);
    }

    /**
     * 详情接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/detail", $body, $query, $extra);
    }

    /**
     * 修改接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/list", $body, $query, $extra);
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
     * 设置排序
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/organSortAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function resourceOrganSort($body)
    {
        return $this->restful("POST", "/resource/organSort", $body);
    }

    /**
     * 资源分页
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourcePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/paging", $body, $query, $extra);
    }

    /**
     * 设置排序
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/sortAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceSort($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/sort", $body, $query, $extra);
    }

    /**
     * 同步接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/syncAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceSync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/sync", $body, $query, $extra);
    }

    /**
     * 修改接口
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/ResourceController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function resourceUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/resource/update", $body, $query, $extra);
    }
}
