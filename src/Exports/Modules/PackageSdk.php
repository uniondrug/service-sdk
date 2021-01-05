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
 * @date   2021-01-05
 * @time   Tue, 05 Jan 2021 11:15:11 +0800
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
     * 批量获取增值服务对应的描述内容
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/ExplainController/ContentsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function explainContents($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/explain/contents", $body, $query, $extra);
    }

    /**
     * 通过保障iD 获取保障描述
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/ExplainController/getByGuaranteeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function explainGetByGuaranteeId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/explain/guaranteeid", $body, $query, $extra);
    }

    /**
     * 批量获取增值服务对应的说明
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/ExplainController/NamesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function explainNames($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/explain/names", $body, $query, $extra);
    }

    /**
     * 根据增值服务ID 获取增值服务详情
     * 包括关联的保障信息和权益信息
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/detail", $body, $query, $extra);
    }

    /**
     * 获取最大编号
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/maxCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMaxGuaranteeCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/max/code", $body, $query, $extra);
    }

    /**
     * 获取最大编号
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/maxCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMaxTagCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/max/code", $body, $query, $extra);
    }

    /**
     * 检查保障名称是否存在
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/checkNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesCheckGuaranteeName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/check/guaranteeName", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/detail", $body, $query, $extra);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/exportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesExportSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/export/sql", $body, $query, $extra);
    }

    /**
     * 理赔材料名称
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/getClaimMaterialsTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function GuaranteesGetClaimMaterialsNames($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/claimMaterialsNames", $body, $query, $extra);
    }

    /**
     * 获取材料名称
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/getMaterialTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function GuaranteesGetMaterialsTypes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/materialsTypes", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/paging", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesSpecsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesSpecsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteesSpecs/detail", $body, $query, $extra);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesSpecsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesSpecsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteesSpecs/paging", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesSpecsController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesSpecsStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteesSpecs/changeStatus", $body, $query, $extra);
    }

    /**
     * 统计保障总额
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/sumAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesSumAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/sum/amount", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteesController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteesUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantees/update", $body, $query, $extra);
    }

    /**
     * 新增白名单
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteeWhiteListController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeWhiteListAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteeWhiteList/add", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteeWhiteListController/getDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeWhiteListDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteeWhiteList/detail", $body, $query, $extra);
    }

    /**
     * 白名单列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteeWhiteListController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeWhiteListpaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteeWhiteList/paging", $body, $query, $extra);
    }

    /**
     * 修改白名单
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/GuaranteeWhiteListController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeWhiteListUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guaranteeWhiteList/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/LogsController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/update", $body, $query, $extra);
    }

    /**
     * 老表增值服务列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/Old/OldPackageController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function oldPackageListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/old/package/listing", $body, $query, $extra);
    }

    /**
     * 老表增值服务分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/Old/OldPackageController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function oldPackagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/old/package/paging", $body, $query, $extra);
    }

    /**
     * 添加风险保障分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/addsPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageAddsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/addsPaging", $body, $query, $extra);
    }

    /**
     * 新增产品
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/create", $body, $query, $extra);
    }

    /**
     * 产品状态关闭
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/disableStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageDisableStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/disableStatus", $body, $query, $extra);
    }

    /**
     * 产品状态开启
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/enableStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageEnableStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/enableStatus", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/export", $body, $query, $extra);
    }

    /**
     * 增值服务对应的权益和保障相关信息
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetDetailList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getDetailList", $body, $query, $extra);
    }

    /**
     * 获取分组关联ID
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getGroupIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetGroupId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getGroupId", $body, $query, $extra);
    }

    /**
     * 获取保障
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getGuaranteeIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetGuaranteeId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getGuaranteeId", $body, $query, $extra);
    }

    /**
     * 产品编号单条信息查询
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getPackAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetPack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getPack", $body, $query, $extra);
    }

    /**
     * 产品ID单条信息查询
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getPackIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetPackId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getPackId", $body, $query, $extra);
    }

    /**
     * 获取标签
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/getTagsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGetTags($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/getTags", $body, $query, $extra);
    }

    /**
     * 新增集合
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/addsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupAdds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/adds", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/detail", $body, $query, $extra);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/update", $body, $query, $extra);
    }

    /**
     * 新增集合
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/addsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeAdds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/adds", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/detail", $body, $query, $extra);
    }

    /**
     * 获取保障有效期开始时间和结束时间
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/getAvailableDateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeGetAvailableDate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/getAvailableDate", $body, $query, $extra);
    }

    /**
     * 批量获取增值服务对应的保障描述名称
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/getPackageGuaranteeExplainAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeGetPackageGuaranteeExplain($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/guarantee/explains", $body, $query, $extra);
    }

    /**
     * 获取增值服务对应的保障描述详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/getPackageGuaranteeExplainDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeGetPackageGuaranteeExplainDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/guarantee/explain/detail", $body, $query, $extra);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/listing", $body, $query, $extra);
    }

    /**
     * 风险保障分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGuaranteeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGuarantee/update", $body, $query, $extra);
    }

    /**
     * 产品信息分页查询查询
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/packPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packagePackPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/packPaging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/detail", $body, $query, $extra);
    }

    /**
     * 禁用用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/disable", $body, $query, $extra);
    }

    /**
     * 启用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/enable", $body, $query, $extra);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageProgramController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageProgramUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageProgram/update", $body, $query, $extra);
    }

    /**
     * 产品信息修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/update", $body, $query, $extra);
    }

    /**
     * 修改权益、保障金额
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/updateNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageUpdateNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/updateNum", $body, $query, $extra);
    }

    /**
     * 更新标签
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageController/updateTagsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageUpdateTags($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/updateTags", $body, $query, $extra);
    }

    /**
     * 关闭即买即用
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/readyToUseCloseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ReadyToUseClose($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/readytouseclose", $body, $query, $extra);
    }

    /**
     * 开启即买即用
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/PackageGroupController/readyToUseOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ReadyToUseOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/packageGroup/readytouseopen", $body, $query, $extra);
    }

    /**
     * 移除标签下产品列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/removePackageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function removeTagPackages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/remove/package", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/detail", $body, $query, $extra);
    }

    /**
     * 获取产品列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/packageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagsPackage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/package", $body, $query, $extra);
    }

    /**
     * 树列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/treesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagsTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/tree", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/module.package/api/TagsController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tags/update", $body, $query, $extra);
    }
}
