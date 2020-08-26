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
 * @date   2020-05-27
 * @time   Wed, 27 May 2020 11:25:42 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * DrugstoreActivitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DrugstoreActivitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'drugstore.activity.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantCreate($body)
    {
        return $this->restful("POST", "/activityAssistant/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantDetail($body)
    {
        return $this->restful("POST", "/activityAssistant/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantUpdate($body)
    {
        return $this->restful("POST", "/activityAssistant/update", $body);
    }

    /**
     * 批量关闭
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/batchDisableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigBatchDisable($body)
    {
        return $this->restful("POST", "/activity/config/batch/disable", $body);
    }

    /**
     * 批量开启
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/batchEnableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigBatchEnable($body)
    {
        return $this->restful("POST", "/activity/config/batch/enable", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigCreate($body)
    {
        return $this->restful("POST", "/activity/config/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigDelete($body)
    {
        return $this->restful("POST", "/activity/config/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigDetail($body)
    {
        return $this->restful("POST", "/activity/config/detail", $body);
    }

    /**
     * 关闭
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigDisable($body)
    {
        return $this->restful("POST", "/activity/config/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigEnable($body)
    {
        return $this->restful("POST", "/activity/config/enable", $body);
    }

    /**
     * 导入
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/importAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigImport($body)
    {
        return $this->restful("POST", "/activity/config/import", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigListing($body)
    {
        return $this->restful("POST", "/activity/config/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigPaging($body)
    {
        return $this->restful("POST", "/activity/config/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityConfigUpdate($body)
    {
        return $this->restful("POST", "/activity/config/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityEquityController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityEquityCreate($body)
    {
        return $this->restful("POST", "/activityEquity/create", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeCreate($body)
    {
        return $this->restful("POST", "/activityGuarantee/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeDetail($body)
    {
        return $this->restful("POST", "/activityGuarantee/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeUpdate($body)
    {
        return $this->restful("POST", "/activityGuarantee/update", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityProductController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityProductDetail($body)
    {
        return $this->restful("POST", "/activityProduct/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantCreate($body)
    {
        return $this->restful("POST", "/rebateAssistant/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantDetail($body)
    {
        return $this->restful("POST", "/rebateAssistant/detail", $body);
    }

    /**
     * 关闭
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantDisable($body)
    {
        return $this->restful("POST", "/rebateAssistant/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantEnable($body)
    {
        return $this->restful("POST", "/rebateAssistant/enable", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantExport($body)
    {
        return $this->restful("POST", "/rebateAssistant/export", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantListing($body)
    {
        return $this->restful("POST", "/rebateAssistant/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantMemberController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantMemberCreate($body)
    {
        return $this->restful("POST", "/rebateAssistantMember/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantMemberController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantMemberDetail($body)
    {
        return $this->restful("POST", "/rebateAssistantMember/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantMemberController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantMemberListing($body)
    {
        return $this->restful("POST", "/rebateAssistantMember/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantMemberController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantMemberPaging($body)
    {
        return $this->restful("POST", "/rebateAssistantMember/paging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantPaging($body)
    {
        return $this->restful("POST", "/rebateAssistant/paging", $body);
    }

    /**
     * 数据总概览
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/statisticAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantStatistic($body)
    {
        return $this->restful("POST", "/rebateAssistant/statistic", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateAssistantUpdate($body)
    {
        return $this->restful("POST", "/rebateAssistant/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCardController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCardCreate($body)
    {
        return $this->restful("POST", "/rebateCard/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCardController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCardDetail($body)
    {
        return $this->restful("POST", "/rebateCard/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCardController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCardListing($body)
    {
        return $this->restful("POST", "/rebateCard/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCardController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCardPaging($body)
    {
        return $this->restful("POST", "/rebateCard/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCardController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCardUpdate($body)
    {
        return $this->restful("POST", "/rebateCard/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCodeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCodeCreate($body)
    {
        return $this->restful("POST", "/rebateCode/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCodeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCodeDetail($body)
    {
        return $this->restful("POST", "/rebateCode/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateCodeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateCodeUpdate($body)
    {
        return $this->restful("POST", "/rebateCode/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordCreate($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordDelete($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordDetail($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordListing($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordPaging($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateOrderRecordController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateOrderRecordUpdate($body)
    {
        return $this->restful("POST", "/rebateOrderRecord/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRateController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateRateCreate($body)
    {
        return $this->restful("POST", "/rebate/rate/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateRateDetail($body)
    {
        return $this->restful("POST", "/rebate/rate/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRateController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rebateRateUpdate($body)
    {
        return $this->restful("POST", "/rebate/rate/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigDimensionController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityConfigDimensionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activityConfigDimension/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigDimensionController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityConfigDimensionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activityConfigDimension/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebatePointController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function rebatePointCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebatePoint/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebatePointController/getAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function rebatePointGet($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebatePoint/get", $body, $query, $extra);
    }

    /**
     * 解除
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantMemberController/removeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function rebateAssistantMemberRemove($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebateAssistantMember/remove", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityConfigDimensionController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityConfigDimensionListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activityConfigDimension/listing", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRedPacketController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rebateRedPacketCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebate/red/packet/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRedPacketController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rebateRedPacketDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebate/red/packet/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateRedPacketController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rebateRedPacketListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebate/red/packet/listing", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantRateController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rebateAssistantRateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebateAssistantRate/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/RebateAssistantRateController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rebateAssistantRateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rebateAssistantRate/detail", $body, $query, $extra);
    }
}


