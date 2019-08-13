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
 * @date   2019-08-13
 * @time   Tue, 13 Aug 2019 11:24:14 +0800
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
     * 获取最大编号
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/maxCodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMaxGuaranteeCode($body)
    {
        return $this->restful("POST", "/guarantees/max/code", $body);
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
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesExportSql($body)
    {
        return $this->restful("POST", "/guarantees/export/sql", $body);
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
     * 产品状态关闭 (packageId)
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/disableStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageDisableStatus($body)
    {
        return $this->restful("POST", "/package/disableStatus", $body);
    }

    /**
     * 产品状态开启 (packageId)
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/enableStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageEnableStatus($body)
    {
        return $this->restful("POST", "/package/enableStatus", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageExport($body)
    {
        return $this->restful("POST", "/package/export", $body);
    }

    /**
     * 获取分组关联ID
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getGroupIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetGroupId($body)
    {
        return $this->restful("POST", "/package/getGroupId", $body);
    }

    /**
     * 获取保障ID
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getGuaranteeIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetGuaranteeId($body)
    {
        return $this->restful("POST", "/package/getGuaranteeId", $body);
    }

    /**
     * 产品编号单条信息查询 （packageNo 产品编号）
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getPackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetPack($body)
    {
        return $this->restful("POST", "/package/getPack", $body);
    }

    /**
     * 产品ID单条信息查询 （packageId 产品ID）
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getPackIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetPackId($body)
    {
        return $this->restful("POST", "/package/getPackId", $body);
    }

    /**
     * 获取标签
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getTagsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetTags($body)
    {
        return $this->restful("POST", "/package/getTags", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupCreate($body)
    {
        return $this->restful("POST", "/packageGroup/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupDelete($body)
    {
        return $this->restful("POST", "/packageGroup/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupDetail($body)
    {
        return $this->restful("POST", "/packageGroup/delete", $body);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupListing($body)
    {
        return $this->restful("POST", "/packageGroup/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupPaging($body)
    {
        return $this->restful("POST", "/packageGroup/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupUpdate($body)
    {
        return $this->restful("POST", "/packageGroup/update", $body);
    }

    /**
     * 产品信息分页查询查询 （编号/名称/类型）
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/packPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packagePackPaging($body)
    {
        return $this->restful("POST", "/package/packPaging", $body);
    }

    /**
     * 产品信息修改 (packageId)
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageUpdate($body)
    {
        return $this->restful("POST", "/package/update", $body);
    }

    /**
     * 关闭即买即用
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/readyToUseCloseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ReadyToUseClose($body)
    {
        return $this->restful("POST", "/packageGroup/readytouseclose", $body);
    }

    /**
     * 开启即买即用
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/readyToUseOpenAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ReadyToUseOpen($body)
    {
        return $this->restful("POST", "/packageGroup/readytouseopen", $body);
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
}
