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
 * @date   2019-08-08
 * @time   Thu, 08 Aug 2019 18:02:08 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * PackageSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PackageSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'package.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesCreate($body)
    {
        return $this->restful("POST", "/guarantees/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesDelete($body)
    {
        return $this->restful("POST", "/guarantees/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesDetail($body)
    {
        return $this->restful("POST", "/guarantees/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesListing($body)
    {
        return $this->restful("POST", "/guarantees/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesPaging($body)
    {
        return $this->restful("POST", "/guarantees/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesUpdate($body)
    {
        return $this->restful("POST", "/guarantees/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsCreate($body)
    {
        return $this->restful("POST", "/logs/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsDelete($body)
    {
        return $this->restful("POST", "/logs/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsDetail($body)
    {
        return $this->restful("POST", "/logs/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsListing($body)
    {
        return $this->restful("POST", "/logs/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsPaging($body)
    {
        return $this->restful("POST", "/logs/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/LogsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsUpdate($body)
    {
        return $this->restful("POST", "/logs/update", $body);
    }

    /**
     * 新增产品（换药）
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageCreate($body)
    {
        return $this->restful("POST", "/package/create", $body);
    }

    /**
     * 新增产品（非换药）
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/createNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageCreateNo($body)
    {
        return $this->restful("POST", "/package/createNo", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageDetail($body)
    {
        return $this->restful("POST", "/package/detail", $body);
    }

    /**
     * 产品状态关闭
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageDisable($body)
    {
        return $this->restful("POST", "/package/disable", $body);
    }

    /**
     * 产品状态开启
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageEnable($body)
    {
        return $this->restful("POST", "/package/enable", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageListing($body)
    {
        return $this->restful("POST", "/package/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packagePaging($body)
    {
        return $this->restful("POST", "/package/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageUpdate($body)
    {
        return $this->restful("POST", "/package/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsCreate($body)
    {
        return $this->restful("POST", "/tags/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsDetail($body)
    {
        return $this->restful("POST", "/tags/detail", $body);
    }

    /**
     * 树列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/treesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsTree($body)
    {
        return $this->restful("POST", "/tags/tree", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsUpdate($body)
    {
        return $this->restful("POST", "/tags/update", $body);
    }

    /**
     * 获取最大编号
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/maxCodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMaxTagCode($body)
    {
        return $this->restful("POST", "/tags/max/code", $body);
    }
}
