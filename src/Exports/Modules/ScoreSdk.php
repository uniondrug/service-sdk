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
 * @date   2020-02-12
 * @time   Wed, 12 Feb 2020 15:45:59 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ScoreSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ScoreSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'score.module';

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/editStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editStatus($body)
    {
        return $this->restful("POST", "/score/editStatus", $body);
    }

    /**
     * 导出连锁评分汇总
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scorePartnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScorePartner($body)
    {
        return $this->restful("POST", "/excelexporsql/scorepartner", $body);
    }

    /**
     * 导出连锁评分多日
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scorePartnerDetailsDayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScorePartnerDetailDay($body)
    {
        return $this->restful("POST", "/excelexporsql/scorepartnerdetailsday", $body);
    }

    /**
     * 导出连锁评分详情列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scorePartnerDetailsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScorePartnerDetails($body)
    {
        return $this->restful("POST", "/excelexporsql/scorepartnerdetails", $body);
    }

    /**
     * 导出门店评分详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scoreStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScoreScore($body)
    {
        return $this->restful("POST", "/excelexporsql/scorestore", $body);
    }

    /**
     * 导出门店评分汇总
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scoreStoreSumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScoreScoreSum($body)
    {
        return $this->restful("POST", "/excelexporsql/scorestoresum", $body);
    }

    /**
     * 导出门店评分汇总多日
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ExcelExportSqlController/scoreStoreSumDayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ExcelExportSqlScoreScoreSumDay($body)
    {
        return $this->restful("POST", "/excelexporsql/scorestoresumday", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreCreate($body)
    {
        return $this->restful("POST", "/score/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreDelete($body)
    {
        return $this->restful("POST", "/score/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreDetail($body)
    {
        return $this->restful("POST", "/score/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreListing($body)
    {
        return $this->restful("POST", "/score/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePaging($body)
    {
        return $this->restful("POST", "/score/paging", $body);
    }

    /**
     * 分页多天列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePartnerDetailsController/partnerPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerDetailsDayPaging($body)
    {
        return $this->restful("POST", "/scorePartnerDetails/partnerdaypaging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePartnerDetailsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerDetailsPaging($body)
    {
        return $this->restful("POST", "/scorePartnerDetails/paging", $body);
    }

    /**
     * 连锁评分查询
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePartnerDetailsController/partnerInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerDetailsPartnerInfo($body)
    {
        return $this->restful("POST", "/scorePartnerDetails/partnerinfo", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewCreate($body)
    {
        return $this->restful("POST", "/scorePreview/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewDelete($body)
    {
        return $this->restful("POST", "/scorePreview/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewDetail($body)
    {
        return $this->restful("POST", "/scorePreview/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewListing($body)
    {
        return $this->restful("POST", "/scorePreview/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewPaging($body)
    {
        return $this->restful("POST", "/scorePreview/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScorePreviewController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePreviewUpdate($body)
    {
        return $this->restful("POST", "/scorePreview/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeCreate($body)
    {
        return $this->restful("POST", "/scoreRange/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeDelete($body)
    {
        return $this->restful("POST", "/scoreRange/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeDetail($body)
    {
        return $this->restful("POST", "/scoreRange/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoCreate($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoDelete($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoDetail($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoListing($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoPaging($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeinfoController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeinfoUpdate($body)
    {
        return $this->restful("POST", "/scoreRangeinfo/update", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeListing($body)
    {
        return $this->restful("POST", "/scoreRange/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangePaging($body)
    {
        return $this->restful("POST", "/scoreRange/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreRangeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreRangeUpdate($body)
    {
        return $this->restful("POST", "/scoreRange/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateCreate($body)
    {
        return $this->restful("POST", "/scoreTemplate/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateDelete($body)
    {
        return $this->restful("POST", "/scoreTemplate/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateDetail($body)
    {
        return $this->restful("POST", "/scoreTemplate/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoCreate($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoDelete($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoDetail($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoListing($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoPaging($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateinfoController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateinfoUpdate($body)
    {
        return $this->restful("POST", "/scoreTemplateinfo/update", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateListing($body)
    {
        return $this->restful("POST", "/scoreTemplate/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplatePaging($body)
    {
        return $this->restful("POST", "/scoreTemplate/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreTemplateController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreTemplateUpdate($body)
    {
        return $this->restful("POST", "/scoreTemplate/update", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.score/git/blob/development/docs/api/ScoreController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scoreUpdate($body)
    {
        return $this->restful("POST", "/score/update", $body);
    }
}
