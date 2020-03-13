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
 * @date   2020-03-12
 * @time   Thu, 12 Mar 2020 18:23:48 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 检查保障名称是否存在
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/checkNameAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesCheckGuaranteeName($body)
    {
        return $this->restful("POST", "/guarantees/check/guaranteeName", $body);
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
     * 统计保障总额
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/GuaranteesController/sumAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteesSumAmount($body)
    {
        return $this->restful("POST", "/guarantees/sum/amount", $body);
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
     * 老表增值服务列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/Old/OldPackageController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function oldPackageListing($body)
    {
        return $this->restful("POST", "/old/package/listing", $body);
    }

    /**
     * 老表增值服务分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/Old/OldPackageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function oldPackagePaging($body)
    {
        return $this->restful("POST", "/old/package/paging", $body);
    }

    /**
     * 添加风险保障分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/addsPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageAddsPaging($body)
    {
        return $this->restful("POST", "/packageGuarantee/addsPaging", $body);
    }

    /**
     * 新增产品
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageCreate($body)
    {
        return $this->restful("POST", "/package/create", $body);
    }

    /**
     * 产品状态关闭
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/disableStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageDisableStatus($body)
    {
        return $this->restful("POST", "/package/disableStatus", $body);
    }

    /**
     * 产品状态开启
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
     * 增值服务对应的权益和保障相关信息
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetDetailList($body)
    {
        return $this->restful("POST", "/package/getDetailList", $body);
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
     * 获取保障
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getGuaranteeIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetGuaranteeId($body)
    {
        return $this->restful("POST", "/package/getGuaranteeId", $body);
    }

    /**
     * 产品编号单条信息查询
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/getPackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGetPack($body)
    {
        return $this->restful("POST", "/package/getPack", $body);
    }

    /**
     * 产品ID单条信息查询
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
     * 新增集合
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGroupController/addsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGroupAdds($body)
    {
        return $this->restful("POST", "/packageGroup/adds", $body);
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
        return $this->restful("POST", "/packageGroup/detail", $body);
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
     * 新增集合
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/addsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeAdds($body)
    {
        return $this->restful("POST", "/packageGuarantee/adds", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeCreate($body)
    {
        return $this->restful("POST", "/packageGuarantee/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeDelete($body)
    {
        return $this->restful("POST", "/packageGuarantee/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeDetail($body)
    {
        return $this->restful("POST", "/packageGuarantee/detail", $body);
    }

    /**
     * 获取保障有效期开始时间和结束时间
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/getAvailableDateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeGetAvailableDate($body)
    {
        return $this->restful("POST", "/packageGuarantee/getAvailableDate", $body);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeListing($body)
    {
        return $this->restful("POST", "/packageGuarantee/listing", $body);
    }

    /**
     * 风险保障分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteePaging($body)
    {
        return $this->restful("POST", "/packageGuarantee/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageGuaranteeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageGuaranteeUpdate($body)
    {
        return $this->restful("POST", "/packageGuarantee/update", $body);
    }

    /**
     * 产品信息分页查询查询
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/packPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packagePackPaging($body)
    {
        return $this->restful("POST", "/package/packPaging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramCreate($body)
    {
        return $this->restful("POST", "/packageProgram/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDelete($body)
    {
        return $this->restful("POST", "/packageProgram/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDetail($body)
    {
        return $this->restful("POST", "/packageProgram/detail", $body);
    }

    /**
     * 禁用用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDisable($body)
    {
        return $this->restful("POST", "/packageProgram/disable", $body);
    }

    /**
     * 启用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramEnable($body)
    {
        return $this->restful("POST", "/packageProgram/enable", $body);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramListing($body)
    {
        return $this->restful("POST", "/packageProgram/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramPaging($body)
    {
        return $this->restful("POST", "/packageProgram/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramUpdate($body)
    {
        return $this->restful("POST", "/packageProgram/update", $body);
    }

    /**
     * 产品信息修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageUpdate($body)
    {
        return $this->restful("POST", "/package/update", $body);
    }

    /**
     * 修改权益、保障金额
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/updateNumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageUpdateNum($body)
    {
        return $this->restful("POST", "/package/updateNum", $body);
    }

    /**
     * 更新标签
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/updateTagsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageUpdateTags($body)
    {
        return $this->restful("POST", "/package/updateTags", $body);
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
     * 移除标签下产品列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/removePackageAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function removeTagPackages($body)
    {
        return $this->restful("POST", "/tags/remove/package", $body);
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
     * 获取产品列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/packageAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsPackage($body)
    {
        return $this->restful("POST", "/tags/package", $body);
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
     * 根据增值服务ID 获取增值服务详情
     * 包括关联的保障信息和权益信息
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/package/detail", $body);
    }
}
