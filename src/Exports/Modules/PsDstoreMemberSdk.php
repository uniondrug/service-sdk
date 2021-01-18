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
 * @date   2021-01-15
 * @time   Fri, 15 Jan 2021 18:55:08 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreMemberSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreMemberSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-member';

    /**
     * 获取连锁生效中的活动方案列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/activeListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activeListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/activeListing", $body, $query, $extra);
    }

    /**
     * assistantStatistic
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/assistantStatisticAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityAssistantStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/assistant/statistic", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/detail", $body, $query, $extra);
    }

    /**
     * edit
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/edit", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/listing", $body, $query, $extra);
    }

    /**
     * organList
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/organListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityOrganList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/organ/list", $body, $query, $extra);
    }

    /**
     * 分页查询
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/paging", $body, $query, $extra);
    }

    /**
     * 停用方案-已废弃
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/setFailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activitySetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/set/fail", $body, $query, $extra);
    }

    /**
     * 优惠数据分析
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/statisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activityStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/statistics", $body, $query, $extra);
    }

    /**
     * 顾问数据迁移
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/advisorTransferAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advisorTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/advisorTransfer", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ApplyAuditLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ApplyAuditLogController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/listing", $body, $query, $extra);
    }

    /**
     * 店员管理页数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/assistantDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/assistantData", $body, $query, $extra);
    }

    /**
     * 店员明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantDetail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantInfoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantInfoPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/page", $body, $query, $extra);
    }

    /**
     * 店员-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/assistantRankingListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/assistantRankingList", $body, $query, $extra);
    }

    /**
     * 店员汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTotal", $body, $query, $extra);
    }

    /**
     * 店员转化明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTransferDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTransferDetail", $body, $query, $extra);
    }

    /**
     * 店员转化汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTransferTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTransferTotal", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function carePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/page", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareSendLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careSendLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/send/log/create", $body, $query, $extra);
    }

    /**
     * setFail
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/setFailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careSetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/set/fail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateUrlController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUrlDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/url/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function careUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/update", $body, $query, $extra);
    }

    /**
     * 活动方案停用/启用
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeSchemeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/changeStatus", $body, $query, $extra);
    }

    /**
     * 信息完善
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/completeInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function completeInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/completeInfo", $body, $query, $extra);
    }

    /**
     * 常购药品
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/drugListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/drugList", $body, $query, $extra);
    }

    /**
     * 启用全部方案
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/enableAllSchemeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableAllScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/enableAllScheme", $body, $query, $extra);
    }

    /**
     * 判断是否能发送红包
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/enableSendCardAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableSendCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/enableSendCard", $body, $query, $extra);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/auditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function evaluateAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/audit", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function evaluateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/create", $body, $query, $extra);
    }

    /**
     * 获取店员与顾客的某次评价记录
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/getEvaluateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function evaluateGetEvaluate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/getEvaluate", $body, $query, $extra);
    }

    /**
     * 不分页列表（默认是审核通过的评价）
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function evaluateList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function evaluatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/page", $body, $query, $extra);
    }

    /**
     * 获取不同状态活动数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/getStatusCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/getStatusCount", $body, $query, $extra);
    }

    /**
     * 获取连锁不同活动类型方案配置数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/getActivityTypeCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityTypeCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/getActivityTypeCount", $body, $query, $extra);
    }

    /**
     * 获取店员的一些实时数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/getAssistantDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getAssistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getAssistantData", $body, $query, $extra);
    }

    /**
     * getGroupByMemberIds
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupMemberController/getGroupByMemberIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function GetGroupByMemberIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/member/getGroupByMemberIds", $body, $query, $extra);
    }

    /**
     * 获取连锁/门店/店员下的新会员数及交易额
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/getMemberCountAndGmvAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMemberCountAndGmv($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/getMemberCountAndGmv", $body, $query, $extra);
    }

    /**
     * 获取所有开通商保新会员的连锁列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/getOpenListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMerchantOpenList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/getOpenList", $body, $query, $extra);
    }

    /**
     * 根据店员ids获取回复率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/getResponseRateByAssistantIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getResponseRateByAssistantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/getResponseRateByAssistantIds", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/detail", $body, $query, $extra);
    }

    /**
     * batch
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupMemberController/batchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupMemberBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/member/batch", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/update", $body, $query, $extra);
    }

    /**
     * 判断用户和店员是否已绑定
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/isExistRelationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isExistRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/isExistRelation", $body, $query, $extra);
    }

    /**
     * 会员明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/memberDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/memberDetail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/listing", $body, $query, $extra);
    }

    /**
     * 会员管理
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/memberManageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/memberManage", $body, $query, $extra);
    }

    /**
     * 会员列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/paging", $body, $query, $extra);
    }

    /**
     * 关联
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relation", $body, $query, $extra);
    }

    /**
     * 接收信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/acceptAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendAccept($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/accept", $body, $query, $extra);
    }

    /**
     * 编辑首次关注状态
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/editAttentionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendEditAttention($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/editAttention", $body, $query, $extra);
    }

    /**
     * 是否是首次关注
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/firstAttentionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendFirstAttention($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/firstAttention", $body, $query, $extra);
    }

    /**
     * 首次发送店员详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/firstSendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendFirstSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/firstSend", $body, $query, $extra);
    }

    /**
     * 初始化
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/initActAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendInitAct($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/initAct", $body, $query, $extra);
    }

    /**
     * 顾客与店员的聊天记录分页
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/logPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/logPage", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceiveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceiveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceivePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/page", $body, $query, $extra);
    }

    /**
     * 记录交易信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/recordTradeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendRecordTrade($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/recordTrade", $body, $query, $extra);
    }

    /**
     * 获取某个店员回复了多少个用户
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/replyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendReply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/reply", $body, $query, $extra);
    }

    /**
     * 发送
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/sendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/send", $body, $query, $extra);
    }

    /**
     * 获取用户回复时间
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/sendTimeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberSendSendTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/memberSendTime", $body, $query, $extra);
    }

    /**
     * 会员汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/memberTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/memberTotal", $body, $query, $extra);
    }

    /**
     * 会员转移
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/transferAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/transfer", $body, $query, $extra);
    }

    /**
     * 未关注店员分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/unfocusPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberUnfocusPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/unfocus/page", $body, $query, $extra);
    }

    /**
     * 开通商保新会员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/openAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantApplyOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/open", $body, $query, $extra);
    }

    /**
     * 资料审核
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/auditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/audit", $body, $query, $extra);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/detail", $body, $query, $extra);
    }

    /**
     * 判断某个连锁是否开通商保新会员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/isOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantIsOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/isOpen", $body, $query, $extra);
    }

    /**
     * 连锁分页查询
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/paging", $body, $query, $extra);
    }

    /**
     * 连锁-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/rankingListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/rankingList", $body, $query, $extra);
    }

    /**
     * config
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/configAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function noticeConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/config", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function noticeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function noticeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function noticePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/page", $body, $query, $extra);
    }

    /**
     * 店员在线时长统计
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/onlineStatisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function onlineStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/onlineStatistics", $body, $query, $extra);
    }

    /**
     * 检查能否领取
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/checkCanReceiveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageCheckCanReceive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/checkCanReceive", $body, $query, $extra);
    }

    /**
     * 创建包
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/createAction.md
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
     * 获取包数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/detail", $body, $query, $extra);
    }

    /**
     * 修改包数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/updateAction.md
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
     * 根据会员ID获取客户与店员的双向绑定
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationByMemberIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationByMemberId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relationByMemberId", $body, $query, $extra);
    }

    /**
     * 关联详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relationDetail", $body, $query, $extra);
    }

    /**
     * 绑定关系数据迁移
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationTransferAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relationTransfer", $body, $query, $extra);
    }

    /**
     * 用户复购明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/repurchaseDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function repurchaseDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/repurchaseDetail", $body, $query, $extra);
    }

    /**
     * 店员回复率统计
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/responseRateStatisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function responseRateStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/responseRateStatistics", $body, $query, $extra);
    }

    /**
     * 关注送红包-已废弃
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/sendCardAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/sendCard", $body, $query, $extra);
    }

    /**
     * 服务明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceDetail", $body, $query, $extra);
    }

    /**
     * 店员服务监控明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceMonitorDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceMonitorDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceMonitorDetail", $body, $query, $extra);
    }

    /**
     * 店员服务监控汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceMonitorTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceMonitorTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceMonitorTotal", $body, $query, $extra);
    }

    /**
     * 服务汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serviceTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceTotal", $body, $query, $extra);
    }

    /**
     * 查询特权需要的数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statisticsAssistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistant/data", $body, $query, $extra);
    }

    /**
     * 查询特权需要的数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/privilegeDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statisticsPrivilegeData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/privilege/data", $body, $query, $extra);
    }

    /**
     * 门店管理页数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/storeDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/storeData", $body, $query, $extra);
    }

    /**
     * 门店-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/rankingListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/rankingList", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/listing", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagMemberCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagMemberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagMemberPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/page", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/page", $body, $query, $extra);
    }

    /**
     * 查询会员不同状态下标签的数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/tagStatusCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/tagStatusCount", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tagUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TransferLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TransferLogController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/listing", $body, $query, $extra);
    }

    /**
     * 店员调店解除与会员的绑定关系
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/transferUnbindRelationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferUnbindRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transferUnbindRelation", $body, $query, $extra);
    }

    /**
     * 更新卡数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/updatePackageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateActivityPackage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/updatePackage", $body, $query, $extra);
    }

    /**
     * 创建红包使用记录
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/updateBonusUseLogAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateBonusUseLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/updateBonusUseLog", $body, $query, $extra);
    }
}
