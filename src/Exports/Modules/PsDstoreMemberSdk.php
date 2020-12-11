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
 * @date   2020-12-11
 * @time   Fri, 11 Dec 2020 10:49:50 +0800
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
     * 停用方案
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
     * 根据门店店员memberIds获取会员数及头像等信息
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/MerchantController/getAssistantInfoByMemberIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getAssistantInfoByMemberIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/getAssistantInfoByMemberIds", $body, $query, $extra);
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
     * 发红包
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

    /**
     * 更新关注数据
     * @link https://uniondrug.coding.net/p/ps-dstore-member/git/blob/development/docs/api/ActivityController/updateFollowAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateFollow($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/updateFollow", $body, $query, $extra);
    }
}
