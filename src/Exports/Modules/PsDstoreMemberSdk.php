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
 * @date   2021-05-20
 * @time   Thu, 20 May 2021 10:42:16 +0800
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
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activeListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/activeListing", $body, $query, $extra);
    }

    /**
     * assistantStatistic
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/assistantStatisticAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityAssistantStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/assistant/statistic", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/detail", $body, $query, $extra);
    }

    /**
     * edit
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/edit", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/listing", $body, $query, $extra);
    }

    /**
     * organList
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/organListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityOrganList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/organ/list", $body, $query, $extra);
    }

    /**
     * 分页查询
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/paging", $body, $query, $extra);
    }

    /**
     * 停用方案-已废弃
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/setFailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activitySetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/set/fail", $body, $query, $extra);
    }

    /**
     * 优惠数据分析
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/statisticsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function activityStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/statistics", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ApplyAuditLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ApplyAuditLogController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/listing", $body, $query, $extra);
    }

    /**
     * 后台批量邀请店员开通药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/batchInviteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantBatchInvite($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/batchInvite", $body, $query, $extra);
    }

    /**
     * 店员是否展示开通药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/canOpenAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantCanOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/canOpen", $body, $query, $extra);
    }

    /**
     * 店员管理页数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/assistantDataAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/assistantData", $body, $query, $extra);
    }

    /**
     * 店员明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantDetail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantInfoCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantInfoPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/page", $body, $query, $extra);
    }

    /**
     * 邀请店员开通药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/inviteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantInvite($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/invite", $body, $query, $extra);
    }

    /**
     * 判断店员是否在线
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/isOnlineAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantIsOnline($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/isOnline", $body, $query, $extra);
    }

    /**
     * 店员是否开通药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/isOpenAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantIsOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/isOpen", $body, $query, $extra);
    }

    /**
     * 开通/关闭药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/openAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/open", $body, $query, $extra);
    }

    /**
     * 已开通药师的店员分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/openPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantOpenPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/openPaging", $body, $query, $extra);
    }

    /**
     * 店员-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/assistantRankingListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/assistantRankingList", $body, $query, $extra);
    }

    /**
     * 店员汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTotal", $body, $query, $extra);
    }

    /**
     * 店员转化明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTransferDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTransferDetail", $body, $query, $extra);
    }

    /**
     * 店员转化汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantTransferTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistantTransferTotal", $body, $query, $extra);
    }

    /**
     * 批量查询店员开通药师状态
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/batchQueryOpenStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function batchQueryOpenStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/batchQueryOpenStatus", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表(新)
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/list", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function carePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/page", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareRuleController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careRuleListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/careRule/listing", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareRuleController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careRuleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/careRule/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareSendLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careSendLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/send/log/create", $body, $query, $extra);
    }

    /**
     * 单个用户消息限制
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareSendLogController/messageLimitCheckAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careSendLogMessageLimitCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/send/log/messageLimitCheck", $body, $query, $extra);
    }

    /**
     * setFail
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/setFailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careSetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/set/fail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareTemplateUrlController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUrlDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/url/detail", $body, $query, $extra);
    }

    /**
     * 关怀类型创建
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/typeCreateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTypeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/type/create", $body, $query, $extra);
    }

    /**
     * 关怀类型无分页
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/typeListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/type/list", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/CareController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/update", $body, $query, $extra);
    }

    /**
     * 活动方案停用/启用
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/changeStatusAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function changeSchemeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/changeStatus", $body, $query, $extra);
    }

    /**
     * 信息完善
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/completeInfoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function completeInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/completeInfo", $body, $query, $extra);
    }

    /**
     * 添加明星药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/createStarPharmacistAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function createStarPharmacist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/createStarPharmacist", $body, $query, $extra);
    }

    /**
     * 总概览
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/generalOverviewAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiGeneralOverview($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/general/overview", $body, $query, $extra);
    }

    /**
     * 普惠订单明细
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/inclusiveOrderAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiInclusiveOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/inclusive/order", $body, $query, $extra);
    }

    /**
     * 交互会话数
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/interactiveSessionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiInteractiveSession($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/interactive/session", $body, $query, $extra);
    }

    /**
     * 会员增长数
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/memberIncrAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiMemberIncr($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/member/incr", $body, $query, $extra);
    }

    /**
     * 线上复购数
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/onlineRepurchaseAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiOnlineRepurchase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/online/repurchase", $body, $query, $extra);
    }

    /**
     * 增值服务订单
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisKpiController/ServiceOrderAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisKpiServiceOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/kpi/service/order", $body, $query, $extra);
    }

    /**
     * 总概览
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisProcessController/generalOverviewAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisProcessGeneralOverview($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/process/general/overview", $body, $query, $extra);
    }

    /**
     * 交易转化率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisProcessController/orderConversionRateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisProcessOrderConversionRate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/process/order/conversion/rate", $body, $query, $extra);
    }

    /**
     * 单均价
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisProcessController/orderGmvAvgAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisProcessOrderGmvAvg($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/process/order/gmv/avg", $body, $query, $extra);
    }

    /**
     * 会话发起率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisProcessController/sessionLaunchRateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisProcessSessionLaunchRate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/process/session/launch/rate", $body, $query, $extra);
    }

    /**
     * 会话成功率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/DataAnalysisProcessController/sessionSuccessRateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function dataAnalysisProcessSessionSuccessRate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/data/analysis/process/session/success/rate", $body, $query, $extra);
    }

    /**
     * 删除明星药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/deleteStarPharmacistAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function deleteStarPharmacist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/deleteStarPharmacist", $body, $query, $extra);
    }

    /**
     * 获取已离职更换连锁的店员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/departAssistantListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function departAssistantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/departAssistantList", $body, $query, $extra);
    }

    /**
     * 常购药品
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/drugListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function drugList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/drugList", $body, $query, $extra);
    }

    /**
     * 启用全部方案
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/enableAllSchemeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function enableAllScheme($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/enableAllScheme", $body, $query, $extra);
    }

    /**
     * 判断是否能发送红包
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/enableSendCardAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function enableSendCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/enableSendCard", $body, $query, $extra);
    }

    /**
     * 审核
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/auditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function evaluateAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/audit", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function evaluateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/create", $body, $query, $extra);
    }

    /**
     * 获取店员与顾客的某次评价记录
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/getEvaluateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function evaluateGetEvaluate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/getEvaluate", $body, $query, $extra);
    }

    /**
     * 不分页列表（默认是审核通过的评价）
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function evaluateList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function evaluatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/page", $body, $query, $extra);
    }

    /**
     * 好评率及日联系会员数
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/favorableRateAndContactAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function favorableRateAndContact($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/favorableRateAndContact", $body, $query, $extra);
    }

    /**
     * 门店/店员好评率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/Statistic/RankController/feedbackRateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function feedbackRateList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rank/feedback/rate", $body, $query, $extra);
    }

    /**
     * 生成二维码
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/QrCodeController/generateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function generateQrCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/qrcode/generate", $body, $query, $extra);
    }

    /**
     * 获取不同状态活动数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/getStatusCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getActivityStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/getStatusCount", $body, $query, $extra);
    }

    /**
     * 获取连锁不同活动类型方案配置数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/getActivityTypeCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getActivityTypeCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/getActivityTypeCount", $body, $query, $extra);
    }

    /**
     * 获取店员的一些实时数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/getAssistantMembersAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getAssistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getAssistantData", $body, $query, $extra);
    }

    /**
     * 批量获取店员的会员数
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/getAssistantMemberCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getAssistantMemberCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getAssistantMemberCount", $body, $query, $extra);
    }

    /**
     * 生成用户和店员的im链接
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/getChatLinkAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getChatLink($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getChatLink", $body, $query, $extra);
    }

    /**
     * getGroupByMemberIds
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupMemberController/getGroupByMemberIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function GetGroupByMemberIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/member/getGroupByMemberIds", $body, $query, $extra);
    }

    /**
     * 获取连锁/门店/店员下的新会员数及交易额
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/getMemberCountAndGmvAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getMemberCountAndGmv($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/getMemberCountAndGmv", $body, $query, $extra);
    }

    /**
     * 获取所有开通商保新会员的连锁列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/getOpenListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getMerchantOpenList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/getOpenList", $body, $query, $extra);
    }

    /**
     * 获取某个店员下的会员绑定关系
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/getRelationByAssistantAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getRelationByAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getRelationByAssistant", $body, $query, $extra);
    }

    /**
     * 根据店员ids获取回复率
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/getResponseRateByAssistantIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getResponseRateByAssistantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/getResponseRateByAssistantIds", $body, $query, $extra);
    }

    /**
     * 获取转接配置
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/getSwitchConfigAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getSwitchConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/getSwitchConfig", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GlobalConfigController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function globalConfigCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/global/config/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GlobalConfigController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function globalConfigDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/global/config/detail", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GlobalConfigController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function globalConfigEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/global/config/edit", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/detail", $body, $query, $extra);
    }

    /**
     * batch
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupMemberController/batchAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupMemberBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/member/batch", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/GroupController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function groupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/update", $body, $query, $extra);
    }

    /**
     * 检查是否发送消息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/checkCouponReceiveAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function imMemberCheckCouponReceive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/checkCouponReceive", $body, $query, $extra);
    }

    /**
     * 已邀请开通药师的店员列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/invitedAssistantAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function invitedAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/invitedAssistant", $body, $query, $extra);
    }

    /**
     * 判断用户和店员是否已绑定
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/isExistRelationAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function isExistRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/isExistRelation", $body, $query, $extra);
    }

    /**
     * 批量查询连锁信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/listByBatchMerchantIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function listByBatchMerchantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/listByBatchMerchantIds", $body, $query, $extra);
    }

    /**
     * audit
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/auditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/audit", $body, $query, $extra);
    }

    /**
     * collection
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/collectionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseCollection($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/collection", $body, $query, $extra);
    }

    /**
     * 申请开课
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/create", $body, $query, $extra);
    }

    /**
     * del
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/delAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/del", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/detail", $body, $query, $extra);
    }

    /**
     * info
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/infoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/info", $body, $query, $extra);
    }

    /**
     * join
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/joinAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/join", $body, $query, $extra);
    }

    /**
     * listing
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/listing", $body, $query, $extra);
    }

    /**
     * managerInfo
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/managerInfoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseManagerInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/managerInfo", $body, $query, $extra);
    }

    /**
     * open
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/openAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/open", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCoursePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/page", $body, $query, $extra);
    }

    /**
     * statistic
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/statisticAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/statistic", $body, $query, $extra);
    }

    /**
     * subscribePage
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/subscribePageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseSubscribePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/subscribePage", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/update", $body, $query, $extra);
    }

    /**
     * updateManagerInfo
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/updateManagerInfoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseUpdateManagerInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/updateManagerInfo", $body, $query, $extra);
    }

    /**
     * watch
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveCourseController/watchAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveCourseWatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/course/watch", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveProtocolController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveProtocolDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/protocol/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/LiveProtocolController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function liveProtocolUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/protocol/update", $body, $query, $extra);
    }

    /**
     * 会员明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/memberDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/memberDetail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/listing", $body, $query, $extra);
    }

    /**
     * 会员管理
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/memberManageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/memberManage", $body, $query, $extra);
    }

    /**
     * 会员列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/paging", $body, $query, $extra);
    }

    /**
     * 推荐店员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/recommendAssistantAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberRecommendAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/recommendAssistant", $body, $query, $extra);
    }

    /**
     * 关联
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relation", $body, $query, $extra);
    }

    /**
     * 复购数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/Statistic/RankController/repurchaseAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberRepurchaseStatictic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rank/repurchase", $body, $query, $extra);
    }

    /**
     * 接收信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/acceptAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendAccept($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/accept", $body, $query, $extra);
    }

    /**
     * 编辑首次关注状态
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/editAttentionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendEditAttention($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/editAttention", $body, $query, $extra);
    }

    /**
     * 是否是首次关注
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/firstAttentionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendFirstAttention($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/firstAttention", $body, $query, $extra);
    }

    /**
     * 首次发送店员详情或者是首次邀请店员关注
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/firstSendAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendFirstSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/firstSend", $body, $query, $extra);
    }

    /**
     * 初始化
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/initActAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendInitAct($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/initAct", $body, $query, $extra);
    }

    /**
     * 顾客与店员的聊天记录分页
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/logPageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/logPage", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceiveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceiveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendReceiveController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendReceivePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/send/receive/page", $body, $query, $extra);
    }

    /**
     * 记录交易信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/recordTradeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendRecordTrade($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/recordTrade", $body, $query, $extra);
    }

    /**
     * 获取某个店员回复了多少个用户
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/replyAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendReply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/reply", $body, $query, $extra);
    }

    /**
     * 发送
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/sendAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/send", $body, $query, $extra);
    }

    /**
     * 获取用户回复时间
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberSendController/sendTimeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberSendSendTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/memberSend/memberSendTime", $body, $query, $extra);
    }

    /**
     * 会员汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/memberTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/memberTotal", $body, $query, $extra);
    }

    /**
     * 会员转移
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/transferAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/transfer", $body, $query, $extra);
    }

    /**
     * 未关注店员分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/unfocusPageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function memberUnfocusPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/unfocus/page", $body, $query, $extra);
    }

    /**
     * 开通商保新会员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/openAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantApplyOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/open", $body, $query, $extra);
    }

    /**
     * 资料审核
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/auditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/audit", $body, $query, $extra);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/detail", $body, $query, $extra);
    }

    /**
     * 判断某个连锁是否开通商保新会员
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/isOpenAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantIsOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/isOpen", $body, $query, $extra);
    }

    /**
     * 判断多个连锁是否开启商保
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/isOpenByIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantIsOpenByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/isOpenByIds", $body, $query, $extra);
    }

    /**
     * 连锁分页查询
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/paging", $body, $query, $extra);
    }

    /**
     * 连锁-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/rankingListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/rankingList", $body, $query, $extra);
    }

    /**
     * afterPushFlow
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MqController/afterPushFlowAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function mqAfterPushFlow($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mq/afterPushFlow", $body, $query, $extra);
    }

    /**
     * config
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/configAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/config", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/NoticeController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/page", $body, $query, $extra);
    }

    /**
     * 根据门店ids查询当前在线的药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantInfoController/onlineAssistantsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function onlineAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/info/onlineAssistants", $body, $query, $extra);
    }

    /**
     * 店员在线时长统计
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/onlineStatisticsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function onlineStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/onlineStatistics", $body, $query, $extra);
    }

    /**
     * 订单分布明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/orderDistributionDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderDistributionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/orderDistributionDetail", $body, $query, $extra);
    }

    /**
     * 订单分布汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/orderDistributionTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderDistributionTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/orderDistributionTotal", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/OrdersController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function ordersLisiting($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orders/listing", $body, $query, $extra);
    }

    /**
     * 检查能否领取
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/checkCanReceiveAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function packageCheckCanReceive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/checkCanReceive", $body, $query, $extra);
    }

    /**
     * 创建包
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function packageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/create", $body, $query, $extra);
    }

    /**
     * 获取包数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function packageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/detail", $body, $query, $extra);
    }

    /**
     * 获取包数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ProductController/saleCreateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function packageSaleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/product/saleCreate", $body, $query, $extra);
    }

    /**
     * 修改包数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/PackageController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function packageUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/update", $body, $query, $extra);
    }

    /**
     * 创建包
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ProductController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function productCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/product/create", $body, $query, $extra);
    }

    /**
     * 根据评价id批量查询
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/EvaluateController/idsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function queryEvaluateByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/evaluate/ids", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/RecommendBlacklistController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function recommendBlacklistCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recommend/blacklist/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/RecommendWhitelistController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function recommendWhitelistCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recommend/whitelist/create", $body, $query, $extra);
    }

    /**
     * 拒绝开通药师的店员列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/rejectOpenAssistantAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function rejectOpenAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/rejectOpenAssistant", $body, $query, $extra);
    }

    /**
     * 根据会员ID获取客户与店员的双向绑定
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationByMemberIdAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationByMemberId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relationByMemberId", $body, $query, $extra);
    }

    /**
     * 关联详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MemberController/relationDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function relationDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/relationDetail", $body, $query, $extra);
    }

    /**
     * 用户复购明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/repurchaseDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function repurchaseDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/repurchaseDetail", $body, $query, $extra);
    }

    /**
     * 店员回复率统计
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/responseRateStatisticsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function responseRateStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/responseRateStatistics", $body, $query, $extra);
    }

    /**
     * 销售排行
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/Statistic/RankController/saleListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function saleRankList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rank/sale/list", $body, $query, $extra);
    }

    /**
     * 扫码返回im会话链接
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StorePharmacistCodeController/scanCodeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function scanCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storePharmacistCode/scanCode", $body, $query, $extra);
    }

    /**
     * 关注送红包-已废弃
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/sendCardAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function sendCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/sendCard", $body, $query, $extra);
    }

    /**
     * 服务明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function serviceDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceDetail", $body, $query, $extra);
    }

    /**
     * 店员服务监控明细数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceMonitorDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function serviceMonitorDetailStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceMonitorDetail", $body, $query, $extra);
    }

    /**
     * 店员服务监控汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceMonitorTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function serviceMonitorTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceMonitorTotal", $body, $query, $extra);
    }

    /**
     * 服务排行
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/Statistic/RankController/serviceListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function serviceRankList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rank/service/list", $body, $query, $extra);
    }

    /**
     * 服务汇总数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/serviceTotalAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function serviceTotalStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/serviceTotal", $body, $query, $extra);
    }

    /**
     * 明星药师详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/starPharmacistDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function starPharmacistDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/starPharmacistDetail", $body, $query, $extra);
    }

    /**
     * 明星药师列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/starPharmacistListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function starPharmacistList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/starPharmacistList", $body, $query, $extra);
    }

    /**
     * 查询特权需要的数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/assistantDataAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statisticsAssistantData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/assistant/data", $body, $query, $extra);
    }

    /**
     * 查询特权需要的数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StatisticsController/privilegeDataAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function statisticsPrivilegeData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/privilege/data", $body, $query, $extra);
    }

    /**
     * 门店管理页数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/storeDataAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/storeData", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StorePharmacistCodeController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function storePharmacistCodeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storePharmacistCode/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StorePharmacistCodeController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function storePharmacistCodePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storePharmacistCode/paging", $body, $query, $extra);
    }

    /**
     * 门店-会员数/交易额排行榜前十名
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StoreController/rankingListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeRankingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/rankingList", $body, $query, $extra);
    }

    /**
     * 转接配置
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/switchConfigAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function switchConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/switchConfig", $body, $query, $extra);
    }

    /**
     * 转接后发送提示消息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ImSwitchController/switchIntroductionAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function switchIntroduction($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/imSwitch/switchIntroduction", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemAssistantMemberMessegeLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAssistantMemberMessegeLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAssistantMemberMessegeLog/create", $body, $query, $extra);
    }

    /**
     * listing
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemAssistantMemberMessegeLogController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemAssistantMemberMessegeLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/systemAssistantMemberMessegeLog/listing", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemMemberController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMemberDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/member/detail", $body, $query, $extra);
    }

    /**
     * isSystemMemberAction()
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemMemberController/isSystemMemberAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMemberIsSystemMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/member/is/system/member", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemMemberController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMemberPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/member/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemMemberController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemMemberUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/member/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/SystemQuestionController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function systemQuestionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/question/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/listing", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagMemberCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagMemberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagMemberPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/page", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/page", $body, $query, $extra);
    }

    /**
     * 查询会员不同状态下标签的数量
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagMemberController/tagStatusCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/member/tagStatusCount", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TagController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function tagUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TransferLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function transferLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/TransferLogController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function transferLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/listing", $body, $query, $extra);
    }

    /**
     * 店员调店处理与会员的绑定关系
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/AssistantController/transferUnbindRelationAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function transferUnbindRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transferUnbindRelation", $body, $query, $extra);
    }

    /**
     * 更新卡数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/updatePackageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function updateActivityPackage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/updatePackage", $body, $query, $extra);
    }

    /**
     * 创建红包使用记录
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/updateBonusUseLogAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function updateBonusUseLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/updateBonusUseLog", $body, $query, $extra);
    }

    /**
     * 更新明星药师
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/StarPharmacistController/updateStarPharmacistAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function updateStarPharmacist($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/starPharmacist/updateStarPharmacist", $body, $query, $extra);
    }
}
