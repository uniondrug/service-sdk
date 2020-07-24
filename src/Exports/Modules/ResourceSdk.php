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
 * @date   2020-07-24
 * @time   Fri, 24 Jul 2020 11:29:36 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ResourceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ResourceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'resource.module';

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
}
