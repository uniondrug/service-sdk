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
 * @date   2019-07-16
 * @time   Tue, 16 Jul 2019 11:00:25 +0800
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AssistantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AssistantSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'assistant.module';

    /**
     * 智赔账号权限新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/compensateUserAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskCompensateUserAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/compensateUserAdd", $body, $query, $extra);
    }

    /**
     * 智盈账号新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/profitUserAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskProfitUserAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/profitUserAdd", $body, $query, $extra);
    }

    /**
     * 店员注销
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/destroyAssistantAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskDestroyAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/destroyAssistant", $body, $query, $extra);
    }

    /**
     * 门店注销
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/destroyStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskDestroyStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/destroyStore", $body, $query, $extra);
    }

    /**
     * 店员冻结
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/freezeAssistantAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskFreezeAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/freezeAssistant", $body, $query, $extra);
    }

    /**
     * 门店冻结
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/freezeStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskFreezeStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/freezeStore", $body, $query, $extra);
    }

    /**
     * 店员解冻
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/unfreezeAssistantAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskUnfreezeAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/unfreezeAssistant", $body, $query, $extra);
    }

    /**
     * 门店解冻
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/unfreezeStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskUnfreezeStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/unfreezeStore", $body, $query, $extra);
    }

    /**
     * 助手用户-导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/assistantExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantExport($body)
    {
        return $this->restful("POST", "/activityStatistic/assistant/export", $body);
    }

    /**
     * 助手用户-列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/assistantPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantPaging($body)
    {
        return $this->restful("POST", "/activityStatistic/assistant/paging", $body);
    }

    /**
     * 基础数据-折线图接口
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/basicChartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityBasicChart($body)
    {
        return $this->restful("POST", "/activityStatistic/basic/chart", $body);
    }

    /**
     * 基础数据-导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/basicExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityBasicExport($body)
    {
        return $this->restful("POST", "/activityStatistic/basic/export", $body);
    }

    /**
     * 基础数据-列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/basicPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityBasicPaging($body)
    {
        return $this->restful("POST", "/activityStatistic/basic/paging", $body);
    }

    /**
     * 基础数据-昨日统计
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/basicYesterdayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityBasicYesterday($body)
    {
        return $this->restful("POST", "/activityStatistic/basic/yesterday", $body);
    }

    /**
     * 活动管理-折线图接口
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/manageChartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityManageChart($body)
    {
        return $this->restful("POST", "/activityStatistic/manage/chart", $body);
    }

    /**
     * 活动管理-汇总
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/manageDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityManageData($body)
    {
        return $this->restful("POST", "/activityStatistic/manage/data", $body);
    }

    /**
     * 活动管理-导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/manageExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityManageExport($body)
    {
        return $this->restful("POST", "/activityStatistic/manage/export", $body);
    }

    /**
     * 活动管理-列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/ActivityController/managePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityManagePaging($body)
    {
        return $this->restful("POST", "/activityStatistic/manage/paging", $body);
    }

    /**
     * 修改智赔账号
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/WorkerManController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function workerEdit($body)
    {
        return $this->restful("POST", "/worker/edit", $body);
    }

    /**
     * 商户开通智赔账号数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/WorkerManController/aiCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function aiCount($body)
    {
        return $this->restful("POST", "/worker/aiCount", $body);
    }

    /**
     * 商户开通智赔账号列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/WorkerManController/aiUserPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function aiUserPaging($body)
    {
        return $this->restful("POST", "/worker/aiUserPaging", $body);
    }

    /**
     * 获取用户对应项目
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/projectIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userProjectIds($body)
    {
        return $this->restful("POST", "/users/projectIds", $body);
    }

    /**
     * 竞标系统通过商户ID获取对应城市经理信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersInfo($body)
    {
        return $this->restful("POST", "/users/info", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyAdd($body)
    {
        return $this->restful("POST", "/apply/add", $body);
    }

    /**
     * 门店维度脚本
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/JobStatisticsDealStoreController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dealStoreJob($body)
    {
        return $this->restful("POST", "/dealStoreStatistic/jobStart", $body);
    }

    /**
     * 校验
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyCheck($body)
    {
        return $this->restful("POST", "/apply/check", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyContractController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyContractCreate($body)
    {
        return $this->restful("POST", "/apply/contract/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyContractController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyContractDelete($body)
    {
        return $this->restful("POST", "/apply/contract/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyContractController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyContractDetail($body)
    {
        return $this->restful("POST", "/apply/contract/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyContractController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyContractListing($body)
    {
        return $this->restful("POST", "/apply/contract/listing", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyContractController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyContractUpdate($body)
    {
        return $this->restful("POST", "/apply/contract/update", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyDetail($body)
    {
        return $this->restful("POST", "/apply/detail", $body);
    }

    /**
     * 添加财务资料
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyFinanceController/financeAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinanceAdd($body)
    {
        return $this->restful("POST", "/apply/finance/add", $body);
    }

    /**
     * 更新财务资料
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyFinanceController/financeUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinanceUpdate($body)
    {
        return $this->restful("POST", "/apply/finance/update", $body);
    }

    /**
     * 设置完成状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/finishedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinished($body)
    {
        return $this->restful("POST", "/apply/finished", $body);
    }

    /**
     * 导入
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/importAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyImport($body)
    {
        return $this->restful("POST", "/apply/import", $body);
    }

    /**
     * 非分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyList($body)
    {
        return $this->restful("POST", "/apply/list", $body);
    }

    /**
     * 添加商户记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyMerchantController/merchantAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantAdd($body)
    {
        return $this->restful("POST", "/apply/merchant/add", $body);
    }

    /**
     * 同步数据
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyMerchantController/syncAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantSync($body)
    {
        return $this->restful("POST", "/apply/merchant/sync", $body);
    }

    /**
     * 更新商户记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyMerchantController/merchantUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantUpdate($body)
    {
        return $this->restful("POST", "/apply/merchant/update", $body);
    }

    /**
     * 修改组织ID
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyMerchantController/merchantUpdateOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantUpdateOrganizationId($body)
    {
        return $this->restful("POST", "/apply/merchant/update/organizationId", $body);
    }

    /**
     * 设置跟进人
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/modifyFollowerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyModifyFollower($body)
    {
        return $this->restful("POST", "/apply/modifyfollower", $body);
    }

    /**
     * 手动变更状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/modifyStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyModifyStatus($body)
    {
        return $this->restful("POST", "/apply/modifystatus", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyPaging($body)
    {
        return $this->restful("POST", "/apply/paging", $body);
    }

    /**
     * 添加门店记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreAdd($body)
    {
        return $this->restful("POST", "/apply/store/add", $body);
    }

    /**
     * 申请单门店列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeByApplyIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreByApplyId($body)
    {
        return $this->restful("POST", "/apply/store/list", $body);
    }

    /**
     * 批量查询申请单门店列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeByOrganizationIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreByOrganizationIds($body)
    {
        return $this->restful("POST", "/apply/store/listbyorganizationids", $body);
    }

    /**
     * 删除门店信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeDeleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreDelete($body)
    {
        return $this->restful("POST", "/apply/store/delete", $body);
    }

    /**
     * 根据Id获取门店详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreDetail($body)
    {
        return $this->restful("POST", "/apply/store/detail", $body);
    }

    /**
     * 导入
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/importAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreImport($body)
    {
        return $this->restful("POST", "/apply/store/import", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStorePaging($body)
    {
        return $this->restful("POST", "/apply/store/paging", $body);
    }

    /**
     * 修改门店信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreUpdate($body)
    {
        return $this->restful("POST", "/apply/store/update", $body);
    }

    /**
     * 修改门店的地图 mapCode
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeUpdateMapCodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreUpdateMapCode($body)
    {
        return $this->restful("POST", "/apply/store/update/mapCode", $body);
    }

    /**
     * 修改组织ID
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeUpdateOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreUpdateOrganizationId($body)
    {
        return $this->restful("POST", "/apply/store/update/organizationId", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyUpdate($body)
    {
        return $this->restful("POST", "/apply/update", $body);
    }

    /**
     * 根据类型批量统计某个字段的数量
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/countAssistantByStoreIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCountByStoreIds($body)
    {
        return $this->restful("POST", "/assistant/count/by/storeIds", $body);
    }

    /**
     * 获取店员信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantInfo($body)
    {
        return $this->restful("POST", "/assistant/info", $body);
    }

    /**
     * 注册店员
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantRegister($body)
    {
        return $this->restful("POST", "/assistant/register", $body);
    }

    /**
     * 更新店员信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantUpdate($body)
    {
        return $this->restful("POST", "/assistant/update", $body);
    }

    /**
     * 邀请函绑定
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/BindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inviteBind($body)
    {
        return $this->restful("POST", "/invite/bind", $body);
    }

    /**
     * 按条件查询邀请信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inviteInfo($body)
    {
        return $this->restful("POST", "/invite/info", $body);
    }

    /**
     * 根据 userId 获取用户门店
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresController/ListingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listingUserStores($body)
    {
        return $this->restful("POST", "/userstores/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/MerchantTagController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantTagCreate($body)
    {
        return $this->restful("POST", "/merchant/tag/create", $body);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationTabsController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function operationTabsListing($body)
    {
        return $this->restful("POST", "/operationTabs/listing", $body);
    }

    /**
     * 搜索
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OrganizeBaseController/searchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function organizeBaseSearch($body)
    {
        return $this->restful("POST", "/organizebase/search", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OrganizeBaseController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function organizeBasePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/paging", $body, $query, $extra);
    }

    /**
     * 新增角色
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleCreate($body)
    {
        return $this->restful("POST", "/role/create", $body);
    }

    /**
     * 角色详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleDetail($body)
    {
        return $this->restful("POST", "/role/detail", $body);
    }

    /**
     * 全部角色列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleListing($body)
    {
        return $this->restful("POST", "/role/listing", $body);
    }

    /**
     * 获取角色权限列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/listingAuthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleListingAuth($body)
    {
        return $this->restful("POST", "/role/listing/auth", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rolePaging($body)
    {
        return $this->restful("POST", "/role/paging", $body);
    }

    /**
     * 分配权限
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/settingAuthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleSettingAuth($body)
    {
        return $this->restful("POST", "/role/setting/auth", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/RoleController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function roleUpdate($body)
    {
        return $this->restful("POST", "/role/update", $body);
    }

    /**
     * 获取一条助手用户新
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 统计城市经理人邀请数量
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Invite/InviteController/userInvitesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInvites($body)
    {
        return $this->restful("POST", "/invite/userinvites", $body);
    }

    /**
     * 根据roleIds统计用户数量
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/countFilterAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersCountFilter($body)
    {
        return $this->restful("POST", "/users/count/filter", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersCreate($body)
    {
        return $this->restful("POST", "/users/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersDetail($body)
    {
        return $this->restful("POST", "/users/detail", $body);
    }

    /**
     * 用户列表按条件搜索
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersListing($body)
    {
        return $this->restful("POST", "/users/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersPaging($body)
    {
        return $this->restful("POST", "/users/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdate($body)
    {
        return $this->restful("POST", "/users/update", $body);
    }

    /**
     * 获取区域配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/areaConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getAreaConfig($body)
    {
        return $this->restful("POST", "/userArea/areaConfig", $body);
    }

    /**
     * 获取区域配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/areaConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAreaCreate($body)
    {
        return $this->restful("POST", "/userArea/create", $body);
    }

    /**
     * 获取区域配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/areaConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAreaUpdate($body)
    {
        return $this->restful("POST", "/userArea/update", $body);
    }

    /**
     * 获取区域配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/areaConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAreaDetail($body)
    {
        return $this->restful("POST", "/userArea/detail", $body);
    }

    /**
     * 获取区域配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/areaConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAreaPaging($body)
    {
        return $this->restful("POST", "/userArea/paging", $body);
    }

    /**
     * 根据省份ID获取省份信息
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/getProvinceByIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProvinceByIds($body)
    {
        return $this->restful("POST", "/userArea/getProvinceByIds", $body);
    }

    /**
     * 根据区域ID获取区域信息
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/getAreaByIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getAreaByIds($body)
    {
        return $this->restful("POST", "/userArea/getAreaByIds", $body);
    }

    /**
     * 根据区域ID获取区域信息
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/getByProvinceIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserAreaByProvinceIds($body)
    {
        return $this->restful("POST", "/userArea/getByProvinceIds", $body);
    }

    /**
     * 获取区域完整配置
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/UserAreaController/getByUserIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByUserId($body)
    {
        return $this->restful("POST", "/userArea/getByUserId", $body);
    }

    /**
     * 信息上报列表
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/FeedbackController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function feedbackPaing($body)
    {
        return $this->restful("POST", "/feedback/paging", $body);
    }

    /**
     * 信息上报处理
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/FeedbackController/upateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function feedbackUpdate($body)
    {
        return $this->restful("POST", "/feedback/update", $body);
    }

    /**
     * 信息上报详情
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/FeedbackController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function feedbackDetail($body)
    {
        return $this->restful("POST", "/feedback/detail", $body);
    }

    /**
     * 云联客户列表
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerList($body)
    {
        return $this->restful("POST", "/cloudCustomer/paging", $body);
    }

    /**
     * 指定跟进人 (支持批量)
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/bindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerBind($body)
    {
        return $this->restful("POST", "/cloudCustomer/bind", $body);
    }

    /**
     * 省份列表
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/CloudCustomerController/provinceListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerProvinceList($body)
    {
        return $this->restful("POST", "/cloudCustomer/provinceList", $body);
    }

    /**
     * 城市列表
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/cityListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerCityList($body)
    {
        return $this->restful("POST", "/cloudCustomer/cityList", $body);
    }

    /**
     * 云联客户详情
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/DetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerDetail($body)
    {
        return $this->restful("POST", "/cloudCustomer/detail", $body);
    }

    /**
     * 省份分页列表(带连锁\门店数量统计)
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/provincePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerProvincePaging($body)
    {
        return $this->restful("POST", "/cloudCustomer/provincePaging", $body);
    }

    /**
     * 城市分页列表(带连锁\门店数量统计)
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/cityPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerCityPaging($body)
    {
        return $this->restful("POST", "/cloudCustomer/cityPaging", $body);
    }

    /**
     * 连锁列表(带门店数量统计)
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/partnerPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerPartnerPaging($body)
    {
        return $this->restful("POST", "/cloudCustomer/partnerPaging", $body);
    }

    /**
     * 门店列表(带门店数量统计)
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/CloudCustomerController/storePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerStorePaging($body)
    {
        return $this->restful("POST", "/cloudCustomer/storePaging", $body);
    }

    /**
     * 钉钉工作通知相关统计
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/Statistic/DingtalkMessageStatisticController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dingtalkStatisticCreate($body)
    {
        return $this->restful("POST", "/dingtalkStatistic/create", $body);
    }

    /**
     * 拜访评分相关信息统计
     * @link https://uniondrug.coding.net/p/module.assistant/d/module.assistant/git/blob/development/docs/api/Statistic/VisitScoreStatisticController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function visitScoreStatisticCreate($body)
    {
        return $this->restful("POST", "/visitScoreStatistic/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4AuthFunctionController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4AuthFunctionDetail($body)
    {
        return $this->restful("POST", "/v4AuthFunction/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4AuthFunctionController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4AuthFunctionListing($body)
    {
        return $this->restful("POST", "/v4AuthFunction/listing", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4AuthMenuController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4AuthMenuDetail($body)
    {
        return $this->restful("POST", "/v4AuthMenu/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4AuthMenuController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4AuthMenuListing($body)
    {
        return $this->restful("POST", "/v4AuthMenu/listing", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleAuthController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleAuthListing($body)
    {
        return $this->restful("POST", "/v4RoleAuth/listing", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleCreate($body)
    {
        return $this->restful("POST", "/v4Role/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleDetail($body)
    {
        return $this->restful("POST", "/v4Role/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleListing($body)
    {
        return $this->restful("POST", "/v4Role/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RolePaging($body)
    {
        return $this->restful("POST", "/v4Role/paging", $body);
    }

    /**
     * 设置权限
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/setAuthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleSetAuth($body)
    {
        return $this->restful("POST", "/v4Role/setAuth", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/V4Role/V4RoleController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v4RoleUpdate($body)
    {
        return $this->restful("POST", "/v4Role/update", $body);
    }

    /**
     * 批量指定跟进人
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/SelfApplyController/bindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function selfApplyBind($body)
    {
        return $this->restful("POST", "/selfApply/bind", $body);
    }

    /**
     * 导出列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/SelfApplyController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function selfApplyExport($body)
    {
        return $this->restful("POST", "/selfApply/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/SelfApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function selfApplyPaging($body)
    {
        return $this->restful("POST", "/selfApply/paging", $body);
    }

    /**
     * 省市列表按字母分类 (地图用)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/CommonController/citysAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function CommonCitys($body)
    {
        return $this->restful("POST", "/common/citys", $body);
    }

    /**
     * 获取用户标签
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagSetController/getUserTagsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserTags($body)
    {
        return $this->restful("POST", "/userTagSet/getUserTags", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagCreate($body)
    {
        return $this->restful("POST", "/userTag/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagDelete($body)
    {
        return $this->restful("POST", "/userTag/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagDetail($body)
    {
        return $this->restful("POST", "/userTag/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagListing($body)
    {
        return $this->restful("POST", "/userTag/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagPaging($body)
    {
        return $this->restful("POST", "/userTag/paging", $body);
    }

    /**
     * 给用户设置标签
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagSetController/setTagsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagSetTags($body)
    {
        return $this->restful("POST", "/userTagSet/setTags", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserTag/UserTagController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userTagUpdate($body)
    {
        return $this->restful("POST", "/userTag/update", $body);
    }

    /**
     * 拜访巡店痕迹创建
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/VisitInspectRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function visitInspectRecordCreate($body)
    {
        return $this->restful("POST", "/visitInspectRecord/create", $body);
    }

    /**
     * 拜访巡店痕迹分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/VisitInspectRecordController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function visitInspectRecordPaging($body)
    {
        return $this->restful("POST", "/visitInspectRecord/paging", $body);
    }

    /**
     * 取消跟进
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/CloudCustomerController/cancelFollowAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerCancelFollow($body)
    {
        return $this->restful("POST", "/cloudCustomer/cancelFollow", $body);
    }

    /**
     * 取消跟进
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/SelfApplyController/cancelFollowAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function selfApplyCancelFollow($body)
    {
        return $this->restful("POST", "/selfApply/cancelFollow", $body);
    }

    /**
     * 系统资源合并
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/CloudCustomerController/mergeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerMerge($body)
    {
        return $this->restful("POST", "/cloudCustomer/merge", $body);
    }

    /**
     * 根据商户ID获取申请信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyMerchantController/getByOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantGetByOrganizationId($body)
    {
        return $this->restful("POST", "/apply/merchant/getByOrganizationId", $body);
    }

    /**
     * 编辑系统资源
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/CloudCustomerController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cloudCustomerEdit($body)
    {
        return $this->restful("POST", "/cloudCustomer/edit", $body);
    }

    /**
     * 根据商户门店ID获取管理者信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresController/getUsersByOrganizationsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userStoreGetUsersByOrganizations($body)
    {
        return $this->restful("POST", "/userstores/getUsersByOrganizations", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodeAdd($body)
    {
        return $this->restful("POST", "/storeQrcode/add", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodeDetail($body)
    {
        return $this->restful("POST", "/storeQrcode/detail", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodePaging($body)
    {
        return $this->restful("POST", "/storeQrcode/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodeUpdate($body)
    {
        return $this->restful("POST", "/storeQrcode/update", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userStoresPaging($body)
    {
        return $this->restful("POST", "/userstores/paging", $body);
    }

    /**
     * 根据二维码ID获取申请信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/getByQrcodeIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodeGetByQrcodeId($body)
    {
        return $this->restful("POST", "/storeQrcode/getByQrcodeId", $body);
    }

    /**
     * 根据门店ID获取申请信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/getByStoreIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeQrcodeGetByStoreId($body)
    {
        return $this->restful("POST", "/storeQrcode/getByStoreId", $body);
    }

    /**
     * 设备信息添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DeviceController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deviceCreate($body)
    {
        return $this->restful("POST", "/device/add", $body);
    }

    /**
     * 导出excel (调用java接口)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/CommonController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function commonExport($body)
    {
        return $this->restful("POST", "/common/export", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function versionCreate($body)
    {
        return $this->restful("POST", "/version/create", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function versionEdit($body)
    {
        return $this->restful("POST", "/version/edit", $body);
    }

    /**
     * 获取版本详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function versionDetail($body)
    {
        return $this->restful("POST", "/version/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function versionPaging($body)
    {
        return $this->restful("POST", "/version/paging", $body);
    }

    /**
     * 状态变更
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeVersionStatus($body)
    {
        return $this->restful("POST", "/version/changeStatus", $body);
    }

    /**
     * 上传安卓安装包
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/VersionController/uploadSdkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadSdk($body)
    {
        return $this->restful("POST", "/version/uploadSdk", $body);
    }

    /**
     * 数据统计
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/dataStatisticsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dataStatistics($body)
    {
        return $this->restful("POST", "/storeQrcode/dataStatistics", $body);
    }

    /**
     * 数据统计-导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/dataExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function export($body)
    {
        return $this->restful("POST", "/storeQrcode/export", $body);
    }

    /**
     * 数据统计-查询用户层级
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/StoreQrcodeController/userListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/storeQrcode/userList", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyDelete($body)
    {
        return $this->restful("POST", "/apply/delete", $body);
    }

    /**
     * 添加草稿
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/addDraftAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyAddDraft($body)
    {
        return $this->restful("POST", "/apply/add/draft", $body);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPartnersController/bindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userPartnerBind($body)
    {
        return $this->restful("POST", "/userPartners/bind", $body);
    }

    /**
     * 不分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPartnersController/userPartnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userPartnerList($body)
    {
        return $this->restful("POST", "/userPartners/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPartnersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userPartnerPaging($body)
    {
        return $this->restful("POST", "/userPartners/paging", $body);
    }

    /**
     * 商户标签分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/MerchantTagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantTagPaging($body)
    {
        return $this->restful("POST", "/merchant/tag/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveCreate($body)
    {
        return $this->restful("POST", "/approve/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveDetail($body)
    {
        return $this->restful("POST", "/approve/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvePaging($body)
    {
        return $this->restful("POST", "/approve/paging", $body);
    }

    /**
     * 状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveStatus($body)
    {
        return $this->restful("POST", "/approve/status", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeCreate($body)
    {
        return $this->restful("POST", "/notice/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeDetail($body)
    {
        return $this->restful("POST", "/notice/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeLogController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeLogPaging($body)
    {
        return $this->restful("POST", "/noticeLog/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeLogController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeLogUpdate($body)
    {
        return $this->restful("POST", "/noticeLog/update", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticePaging($body)
    {
        return $this->restful("POST", "/notice/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeUpdate($body)
    {
        return $this->restful("POST", "/notice/update", $body);
    }

    /**
     * 获取可查看公告的详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/getShowAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeGetShow($body)
    {
        return $this->restful("POST", "/notice/getShow", $body);
    }

    /**
     * 导出门店
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveStoreExport($body)
    {
        return $this->restful("POST", "/approve/store/export", $body);
    }

    /**
     * 待审批状态列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApproveController/waitedListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approveWaitedList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approve/waitedList", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeLogController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeLogDetail($body)
    {
        return $this->restful("POST", "/noticeLog/detail", $body);
    }

    /**
     * 状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function noticeStatus($body)
    {
        return $this->restful("POST", "/notice/status", $body);
    }

    /**
     * 门店上线
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OnlineStoresController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function onlineStoreCreate($body)
    {
        return $this->restful("POST", "/onlineStore/create", $body);
    }

    /**
     * 门店上线不分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OnlineStoresController/listsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function onlineStoreLists($body)
    {
        return $this->restful("POST", "/onlineStore/lists", $body);
    }

    /**
     * 获取商户列表带负责人或标签筛选
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OrganizeBaseController/getPagingWithUserTagAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPagingWithUserTag($body)
    {
        return $this->restful("POST", "/organizebase/getPagingWithUserTag", $body);
    }

    /**
     * 根据organizationId获取门店详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeDetailByOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreDetailByOrganizationId($body)
    {
        return $this->restful("POST", "/apply/store/detailByOrganizationId", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalAdd($body)
    {
        return $this->restful("POST", "/approval/add", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalPaging($body)
    {
        return $this->restful("POST", "/approval/paging", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalUpdate($body)
    {
        return $this->restful("POST", "/approval/update", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalDetail($body)
    {
        return $this->restful("POST", "/approval/detail", $body);
    }

    /**
     * 详情 (根据业务ID)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/detailRelationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalRelationDetail($body)
    {
        return $this->restful("POST", "/approval/detailByRelationId", $body);
    }

    /**
     * 重置审批人 (根据业务ID)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalController/resetApproverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalResetApprover($body)
    {
        return $this->restful("POST", "/approval/resetApprover", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyAdd($body)
    {
        return $this->restful("POST", "/insuranceApply/add", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyDetail($body)
    {
        return $this->restful("POST", "/insuranceApply/detail", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyEdit($body)
    {
        return $this->restful("POST", "/insuranceApply/edit", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyPaging($body)
    {
        return $this->restful("POST", "/insuranceApply/paging", $body);
    }

    /**
     * 状态编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/statusEditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyStatusEdit($body)
    {
        return $this->restful("POST", "/insuranceApply/statusEdit", $body);
    }

    /**
     * 商户类型列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/organizationTypeListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyOrganizationTypeList($body)
    {
        return $this->restful("POST", "/insuranceApply/organizationTypeList", $body);
    }

    /**
     * 列表导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/pagingExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyPagingExport($body)
    {
        return $this->restful("POST", "/insuranceApply/pagingExport", $body);
    }

    /**
     * 设置同步状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/syncStatusSetAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplySyncStatusSet($body)
    {
        return $this->restful("POST", "/insuranceApply/syncStatusSet", $body);
    }

    /**
     * 门店数据统计 (区域维度)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/areaListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticAreaList($body)
    {
        return $this->restful("POST", "/storeStatistic/areaList", $body);
    }

    /**
     * 门店数据统计导出 (区域维度)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/areaListExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticAreaListExport($body)
    {
        return $this->restful("POST", "/storeStatistic/areaListExport", $body);
    }

    /**
     * 门店整体数据统计
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/generalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticGeneral($body)
    {
        return $this->restful("POST", "/storeStatistic/general", $body);
    }

    /**
     * 未绑定/展示门店列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeListOffAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticstoreListOff($body)
    {
        return $this->restful("POST", "/storeStatistic/storeListOff", $body);
    }

    /**
     * 未绑定/展示门店列表导出
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeListOffExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticstoreListOffExport($body)
    {
        return $this->restful("POST", "/storeStatistic/storeListOffExport", $body);
    }

    /**
     * 门店数据统计 (用户维度)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/userListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticUserList($body)
    {
        return $this->restful("POST", "/storeStatistic/userList", $body);
    }

    /**
     * 门店数据统计导出 (用户维度)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/userListExportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeStatisticUserListExport($body)
    {
        return $this->restful("POST", "/storeStatistic/userListExport", $body);
    }

    /**
     * 审批流模板 [发起人列表]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/applicantListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateApplicantList($body)
    {
        return $this->restful("POST", "/template/applicantList", $body);
    }

    /**
     * 审批流模板 [详情]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateDetail($body)
    {
        return $this->restful("POST", "/template/detail", $body);
    }

    /**
     * 审批流模板 [编辑]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateEdit($body)
    {
        return $this->restful("POST", "/template/edit", $body);
    }

    /**
     * 审批流模板 [分页列表]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templatePaging($body)
    {
        return $this->restful("POST", "/template/paging", $body);
    }

    /**
     * 业务审批单创建 [店员解冻]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalUnfreezeAssistantAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalUnfreezeAssistantAdd($body)
    {
        return $this->restful("POST", "/approvalAdd/approvalUnfreezeAssistant", $body);
    }

    /**
     * 业务审批单创建 [门店解冻]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalUnfreezeStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalUnfreezeStoreAdd($body)
    {
        return $this->restful("POST", "/approvalAdd/approvalUnfreezeStore", $body);
    }

    /**
     * 审批流模板 [根据审批引擎模板ID获取详情]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/detailByApproveSettingIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateDetailByApproveSettingId($body)
    {
        return $this->restful("POST", "/template/detailByApproveSettingId", $body);
    }

    /**
     * 审批流模板 [不分页列表]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function templateList($body)
    {
        return $this->restful("POST", "/template/list", $body);
    }

    /**
     * 根据项目ids查询记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Equity/EquityProjectSumDetailController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityProjectSumList($body)
    {
        return $this->restful("POST", "/equityProjectSumDetail/list", $body);
    }

    /**
     * 根据项目ID查询记录详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Equity/EquityProjectSumDetailController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityProjectSumDetail($body)
    {
        return $this->restful("POST", "/equityProjectSumDetail/detail", $body);
    }

    /**
     * 根据项目ID获取日维度数据列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Equity/EquityProjectDayDetailController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityProjectDayList($body)
    {
        return $this->restful("POST", "/equityProjectDayDetail/list", $body);
    }

    /**
     * 查询保司是否已经存在
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/InsuranceApplyController/insuranceIsExistedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceApplyInsuranceIsExisted($body)
    {
        return $this->restful("POST", "/insuranceApply/insuranceIsExisted", $body);
    }

    /**
     * 业务审批单创建 [权益发放]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalEquityAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalAdd/approvalEquity", $body, $query, $extra);
    }

    /**
     * 业务审批单创建 [项目申请]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalUnfreezeStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalProjectAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalAdd/approvalProject", $body, $query, $extra);
    }

    /**
     * 业务审批单创建 [项目提额]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalProjectTieAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalProjectTieAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalAdd/approvalProjectTie", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/update", $body, $query, $extra);
    }

    /**
     * 统计 [汇总数据]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/VisitScoreStatisticController/statisticGeneralAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function visitScoreStatisticGeneral($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/visitScoreStatistic/general", $body, $query, $extra);
    }

    /**
     * 统计 [员工维度详细]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/VisitScoreStatisticController/visitScoreStatisticUserListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function visitScoreStatisticUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/visitScoreStatistic/userList", $body, $query, $extra);
    }

    /**
     * 统计导出 [员工维度详细]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/VisitScoreStatisticController/visitScoreStatisticUserListExportAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function visitScoreStatisticUserListExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/visitScoreStatistic/userListExport", $body, $query, $extra);
    }

    /**
     * 门店列表 [未展示] (来源: 门店宽表)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/StoreListUnShowAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreListUnShow($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeListUnShow", $body, $query, $extra);
    }

    /**
     * 未展示门店列表导出 (数据宽表)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeListUnShowExportAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreListUnShowExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeListUnShowExport", $body, $query, $extra);
    }

    /**
     * 出单门店数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeCountOfOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreCountOfOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeCountOfOrder", $body, $query, $extra);
    }

    /**
     * 出单门店数 [增值服务]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeCountOfServiceOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreCountOfServiceOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeCountOfServiceOrder", $body, $query, $extra);
    }

    /**
     * 管辖店员数统计
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/UserStatisticController/statisticAssistantCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function usersStatisticAssistantCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userStatistic/statisticAssistantCount", $body, $query, $extra);
    }

    /**
     * 分页列表 (带统计数据)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/UserStatisticController/statisticPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function usersStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userStatistic/statisticPaging", $body, $query, $extra);
    }

    /**
     * 门店明细
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeOrderListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreOrderList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeOrderList", $body, $query, $extra);
    }

    /**
     * 门店开单数据统计[门店负责人纬度]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/userStoreOrderManagerListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticUserStoreOrderList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/userStoreOrderList", $body, $query, $extra);
    }

    /**
     * 月每天门店开单数据
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeMonthOrderCountListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreMonthOrderCountList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeMonthOrderCountList", $body, $query, $extra);
    }

    /**
     * 门店开单数据统计[门店纬度]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeBillingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreBilling($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeBilling", $body, $query, $extra);
    }

    /**
     * 出单数统计
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/storeOrderCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticStoreOrderCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/storeOrderCount", $body, $query, $extra);
    }

    /**
     * 出单门店列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/orderStoreListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticOrderStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/orderStoreList", $body, $query, $extra);
    }

    /**
     * 获取待确认总数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/count", $body, $query, $extra);
    }

    /**
     * 添加执行记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/addErrorMsgAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyAddErrorMsg($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/addErrorMsg", $body, $query, $extra);
    }

    /**
     * 添加执行记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/applyStoreSyncIsFinishedAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyStoreSyncIsFinished($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyStoreSyncIsFinished", $body, $query, $extra);
    }

    /**
     * 保司入住
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/TaskInsuranceAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskInsuranceAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/insuranceAdd", $body, $query, $extra);
    }

    /**
     * 客户入住完成[用户纬度]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/BusinessStatisticController/userCustomerSettlementAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticUserCustomerSettlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/userCustomerSettlement", $body, $query, $extra);
    }

    /**
     * 客户总数[根据客户状态区分]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/BusinessStatisticController/userCustomerCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticUserCustomerCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/userCustomerCount", $body, $query, $extra);
    }

    /**
     * 业绩排行
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/BusinessStatisticController/userAchievementListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticUserAchievementList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/userAchievementList", $body, $query, $extra);
    }

    /**
     * 管辖店员分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresController/assistantPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userStoresAssistantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userstores/assistantPaging", $body, $query, $extra);
    }

    /**
     * 业绩明细
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/BusinessStatisticController/userAchievementDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticUserAchievementDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/userAchievementDetail", $body, $query, $extra);
    }

    /**
     * 发行权益
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalEquityController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalEquityCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalEquity/create", $body, $query, $extra);
    }

    /**
     * 新建项目
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalProjectController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalProjectCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalProject/create", $body, $query, $extra);
    }

    /**
     * 项目提额
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalProjectIncreaseQuotaController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalProjectIncreaseQuotaCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalProjectIncreaseQuota/create", $body, $query, $extra);
    }

    /**
     * 新增品牌连锁
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalBrandChainController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalBrandChainCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalBrandChain/create", $body, $query, $extra);
    }

    /**
     * 保险公司入驻
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalInsuranceCompanyController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalInsuranceCompanyCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalInsuranceCompany/create", $body, $query, $extra);
    }

    /**
     * 使token失效
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/TokenController/revokeTokenAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function revokeTokensByUserIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/revokeToken", $body, $query, $extra);
    }

    /**
     * 门店数据统计 (连锁维度)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/StoreStatisticController/partnerListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticPartnerList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/partnerList", $body, $query, $extra);
    }

    /**
     * 未读消息总数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeLogController/totalNoReadAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeLogTotalNoRead($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/noticeLog/totalNoRead", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeLogCheckController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeLogCheckUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/noticeLogCheck/update", $body, $query, $extra);
    }

    /**
     * 公告阅读/查看情况列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Notice/NoticeController/readCheckListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function noticeReadCheckList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/notice/readCheckList", $body, $query, $extra);
    }

    /**
     * 智赔审批添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalApplyController/aiCompensateAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalApplyAiCompensateAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalApply/aiCompensateAdd", $body, $query, $extra);
    }

    /**
     * 智盈审批添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalApplyController/aiProfitAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalApplyAiProfitAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalApply/aiProfitAdd", $body, $query, $extra);
    }

    /**
     * 店员审批添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalApplyController/assistantAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalApplyAssistantAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalApply/assistantAdd", $body, $query, $extra);
    }

    /**
     * 门店审批添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalApplyController/storeAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalApplyStoreAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalApply/storeAdd", $body, $query, $extra);
    }

    /**
     * 工单审批添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalApplyController/workOrderAddAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalApplyWorkOrderAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalApply/workOrderAdd", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalBrandChainImgsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalBrandChainImgsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/brand/chain/imgs/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/ApprovalEquitySpecsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalEquitySpecsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalEquitySpecs/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyStoreController/storeDeleteByCustomerIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyStoreDeleteByCustomerId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/store/deleteByCustomerId", $body, $query, $extra);
    }

    /**
     * 审批单状态配置
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Apply/ApplyController/applyStatusSettingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyApplyStatusSetting($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/applyStatusSetting", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/SuggestController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function suggestCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggest/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/SuggestController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function suggestDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggest/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/SuggestController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function suggestPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggest/paging", $body, $query, $extra);
    }

    /**
     * 业务审批单创建 [权益发放(实体)]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalBusinessController/approvalEquityEntityAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function approvalEquityEntityAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalAdd/approvalEquityEntity", $body, $query, $extra);
    }

    /**
     * 添加日志
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationLog/OperationLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function operationLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operationLog/create", $body, $query, $extra);
    }

    /**
     * 日志列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationLog/OperationLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function operationLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operationLog/paging", $body, $query, $extra);
    }

    /**
     * 日志操作类型列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationLog/OperationLogController/actionListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function operationLogActionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operationLog/actionList", $body, $query, $extra);
    }

    /**
     * 日志模块列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/OperationLog/OperationLogController/moduleListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function operationLogModuleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operationLog/moduleList", $body, $query, $extra);
    }

    /**
     * 用户白名单
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/userWhiteListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userWhiteList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/userWhiteList", $body, $query, $extra);
    }

    /**
     * 拜访(拜访巡店)总结配置不分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/VisitSummaryController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function visitSummaryList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/visitSummary/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/detail", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/detail", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/list", $body, $query, $extra);
    }

    /**
     * 分配总次数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/timesAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workTimes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/times", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/update", $body, $query, $extra);
    }

    /**
     * 记录用户经纬度
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UsersController/setUserTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function setUserTrajectory($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/setUserTrajectory", $body, $query, $extra);
    }

    /**
     * 根据商户ID获取商户业务线
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/MerchantLobController/getMerchantLobByOrganizationIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function getMerchantLobByOrganizationId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantLob/getByOrganizationId", $body, $query, $extra);
    }

    /**
     * 设置商户业务线
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/MerchantLobController/setMerchantLobAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function setMerchantLob($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantLob/setMerchantLob", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/create", $body, $query, $extra);
    }

    /**
     * 显示/不显示
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/displayAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalDisplay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/display", $body, $query, $extra);
    }

    /**
     * ids获取列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/idsListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalIdsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/idsList", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/info", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/page", $body, $query, $extra);
    }

    /**
     * 部门列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/departmentAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalDepartment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/department", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainGoalController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainGoalUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/goal/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainTypeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainTypeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/type/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainTypeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainTypeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/type/detail", $body, $query, $extra);
    }

    /**
     * list
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainTypeController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/type/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainTypeController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainTypePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/type/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainTypeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainTypeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/type/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/detail", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/list", $body, $query, $extra);
    }

    /**
     * 显示/不显示
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/displayAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentDisplay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/display", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainDepartmentController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainDepartmentUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/department/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainContactController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainContactCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/contact/create", $body, $query, $extra);
    }

    /**
     * 职务类型
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainContactController/gradeListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainContactPositionType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/contact/positionType", $body, $query, $extra);
    }

    /**
     * 拜访总次数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/visitCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workVisitCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/visitCount", $body, $query, $extra);
    }

    /**
     * 完成拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisit/complete", $body, $query, $extra);
    }

    /**
     * 新增拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisit/create", $body, $query, $extra);
    }

    /**
     * 连锁签约任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkChainSignAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkChainSign($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workChainSign", $body, $query, $extra);
    }

    /**
     * 连锁培训任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkChainTrainAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkChainTrain($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workChainTrain", $body, $query, $extra);
    }

    /**
     * 连锁拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkChainVisitAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkChainVisit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workChainVisit", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkChainContactController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainContactList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/chain/contact/list", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisit/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisit/getByWorkId", $body, $query, $extra);
    }

    /**
     * 完成签约任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSign/complete", $body, $query, $extra);
    }

    /**
     * 新增签约任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSign/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSign/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSign/getByWorkId", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workListPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/page", $body, $query, $extra);
    }

    /**
     * 完成培训任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordTrainController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordTrainComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordTrain/complete", $body, $query, $extra);
    }

    /**
     * 新增培训任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordTrainController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordTrainCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordTrain/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordTrainController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordTrainDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordTrain/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordTrainController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordTrainGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordTrain/getByWorkId", $body, $query, $extra);
    }

    /**
     * 连锁拜访任务记录列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisit/list", $body, $query, $extra);
    }

    /**
     * 连锁签约任务记录列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSign/list", $body, $query, $extra);
    }

    /**
     * 连锁培训任务记录列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordTrainController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordTrainList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordTrain/list", $body, $query, $extra);
    }

    /**
     * 新增拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordImageController/getImagesAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function getWorkRecordImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordImage/getImages", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreGoalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/create", $body, $query, $extra);
    }

    /**
     * 显示/不显示
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/displayAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function WorkStoreGoalDisplay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/display", $body, $query, $extra);
    }

    /**
     * ids获取列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/idsListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function WorkStoreGoalIdsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/idsList", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreGoalInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/info", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function WorkStoreGoalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function WorkStoreGoalPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkStoreGoalController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function WorkStoreGoalUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/goal/update", $body, $query, $extra);
    }

    /**
     * 保司签约任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkInsuranceSignAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkInsuranceSign($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workInsuranceSign", $body, $query, $extra);
    }

    /**
     * 保司拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkInsuranceVisitAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkInsuranceVisit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workInsuranceVisit", $body, $query, $extra);
    }

    /**
     * 完成签约任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignInsuranceController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignInsuranceComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSignInsurance/complete", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignInsuranceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignInsuranceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSignInsurance/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignInsuranceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignInsuranceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSignInsurance/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignInsuranceController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignInsuranceGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSignInsurance/getByWorkId", $body, $query, $extra);
    }

    /**
     * 保司签约任务记录列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordSignInsuranceController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordSignInsuranceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordSignInsurance/list", $body, $query, $extra);
    }

    /**
     * 完成拜访任务 [保司拜访]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitInsuranceController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitInsuranceComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisitInsurance/complete", $body, $query, $extra);
    }

    /**
     * 新增拜访任务 [保司拜访]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitInsuranceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitInsuranceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisitInsurance/create", $body, $query, $extra);
    }

    /**
     * 详情 [保司拜访]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitInsuranceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitInsuranceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisitInsurance/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情 [保司拜访]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitInsuranceController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitInsuranceGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisitInsurance/getByWorkId", $body, $query, $extra);
    }

    /**
     * 拜访任务记录列表 [不分页] [保司拜访]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordVisitInsuranceController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordVisitInsuranceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordVisitInsurance/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordInsuranceDepartmentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordInsuranceDepartmentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordInsuranceDepartment/create", $body, $query, $extra);
    }

    /**
     * 列表(不分页)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordInsuranceDepartmentController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordInsuranceDepartmentList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordInsuranceDepartment/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkHistoryController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workHistoryCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workHistory/create", $body, $query, $extra);
    }

    /**
     * 列表 [分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkHistoryController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workHistoryPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workHistory/paging", $body, $query, $extra);
    }

    /**
     * 状态变更
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkHistoryController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workHistoryStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workHistory/status", $body, $query, $extra);
    }

    /**
     * 列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/list", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/getByWorkId", $body, $query, $extra);
    }

    /**
     * 完成任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecord/complete", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantRemarkController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantRemarkCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantRemark/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantRemarkController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantRemarkDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantRemark/detail", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantRemarkController/idsListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantRemarkIdsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantRemark/idsList", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistribute/create", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistribute/getByWorkId", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistribute/update", $body, $query, $extra);
    }

    /**
     * 修改业务信息
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeController/updateInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeUpdateInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistribute/updateInfo", $body, $query, $extra);
    }

    /**
     * 获取配置详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeAutoController/getConfAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeAutoGetConf($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistributeAuto/getConf", $body, $query, $extra);
    }

    /**
     * 自动派发设置
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeAutoController/setAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeAutoSet($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistributeAuto/set", $body, $query, $extra);
    }

    /**
     * 根据用户ID批量获取负责区域
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserRegionController/getByUserIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userRegionGetByUserIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userRegion/getByUserIds", $body, $query, $extra);
    }

    /**
     * 用户地区列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserRegionController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userRegionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userRegion/list", $body, $query, $extra);
    }

    /**
     * 设置地区
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserRegionController/setAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userRegionSet($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userRegion/set", $body, $query, $extra);
    }

    /**
     * 新增定位
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPositionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userPositionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userPosition/create", $body, $query, $extra);
    }

    /**
     * 获取用户定位坐标
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPositionController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userPositionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userPosition/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/TmpWorkBatchDistributeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function tmpWorkBatchDistributeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tmpWorkBatchDistribute/create", $body, $query, $extra);
    }

    /**
     * 批量删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/delete", $body, $query, $extra);
    }

    /**
     * 任务完成数据
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkController/finishCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workFinishCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/finishCount", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkHolidayController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workHolidayCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/holiday/create", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkHolidayController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workHolidayList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/holiday/list", $body, $query, $extra);
    }

    /**
     * 不分页列表 (支持更多筛选)
     * v6.7初次对外(财务)提供
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserPartnersController/userPartnerListingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userPartnerListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userPartners/listing", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreDistributionSettingController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributionSettingDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeDistribution/setting/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreDistributionSettingController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributionSettingUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeDistribution/setting/update", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function userStoreLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userStoresLog/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreDistributionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/distribution/create", $body, $query, $extra);
    }

    /**
     * list
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreDistributionController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/store/distribution/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/detail", $body, $query, $extra);
    }

    /**
     * 编辑显示状态
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/editDisplayAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalEditDisplay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/editDisplay", $body, $query, $extra);
    }

    /**
     * list列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/page", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkStoreGoalController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeGoalUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStoreGoal/update", $body, $query, $extra);
    }

    /**
     * 连锁任务自动派发
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeAutoController/chainJobAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function chainJob($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistributeAuto/chainJob", $body, $query, $extra);
    }

    /**
     * 自动派发记录更新
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkDistributeAutoController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workDistributeAutoUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workDistributeAuto/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditLog/create", $body, $query, $extra);
    }

    /**
     * 获取最新一条修改记录
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditLogController/lastRecordAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditLogLastRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditLog/lastRecord", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkChainBlackListController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainBlackListCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workChainBlackList/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkChainBlackListController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainBlackListDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workChainBlackList/delete", $body, $query, $extra);
    }

    /**
     * 不分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkChainBlackListController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainBlackListList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workChainBlackList/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/WorkChainBlackListController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workChainBlackListPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workChainBlackList/page", $body, $query, $extra);
    }

    /**
     * 保司信息变更
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskInsuranceEditAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskInsuranceEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/insuranceEdit", $body, $query, $extra);
    }

    /**
     * 今天绑定的门店列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/UserStoresController/bindOnTodayListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function bindOnTodayList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userstores/bindOnTodayList", $body, $query, $extra);
    }


    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/detail", $body, $query, $extra);
    }

    /**
     * 根据门店ID获取最新一条审批
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/getByStoreIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveGetByStoreId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/getByStoreId", $body, $query, $extra);
    }

    /**
     * 门店ID批量获取审批记录数
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/getCountByStoreIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveGetCountByStoreIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/getCountByStoreIds", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApprovePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/paging", $body, $query, $extra);
    }

    /**
     * 审批
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/status", $body, $query, $extra);
    }

    /**
     * 待审核审批列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/StoreAddrEditApproveController/waitedListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeAddrEditApproveWaitedList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeAddrEditApprove/waitedList", $body, $query, $extra);
    }

    /**
     * 节假日列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/HolidaysController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function holidaysList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/holidays/list", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkCustomerTypeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workCustomerTypeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/customerType/create", $body, $query, $extra);
    }

    /**
     * 列表 (不分页)
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkCustomerTypeController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workCustomerTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/customerType/list", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkCustomerTypeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workCustomerTypeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/customerType/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApproveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApproveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/detail", $body, $query, $extra);
    }

    /**
     * 根据店员获取待审核的审批
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/getByClerkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApproveGetByClerkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/getByClerkId", $body, $query, $extra);
    }

    /**
     * 批量获取审批
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApproveIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/ids", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApprovePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/paging", $body, $query, $extra);
    }

    /**
     * 审批
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferApproveController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferApproveStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferApprove/status", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferLog/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferLogController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferLogDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferLog/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/ClerkTransferLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function clerkTransferLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clerkTransferLog/paging", $body, $query, $extra);
    }


    /**
     * 完成
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordCustomerVisitInsuranceController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCustomerVisitInsuranceComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordCustomerVisitInsurance/complete", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordCustomerVisitInsuranceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCustomerVisitInsuranceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordCustomerVisitInsurance/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordCustomerVisitInsuranceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCustomerVisitInsuranceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordCustomerVisitInsurance/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordCustomerVisitInsuranceController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCustomerVisitInsuranceGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordCustomerVisitInsurance/getByWorkId", $body, $query, $extra);
    }

    /**
     * 列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordCustomerVisitInsuranceController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordCustomerVisitInsuranceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordCustomerVisitInsurance/list", $body, $query, $extra);
    }

    /**
     * 保司项目客户拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkInsuranceCustomerVisitAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkInsuranceCustomerVisit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workInsuranceCustomerVisit", $body, $query, $extra);
    }

    /**
     * 中介渠道拜访任务
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkIntermediaryVisitAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkIntermediaryVisit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workIntermediaryVisit", $body, $query, $extra);
    }

    /**
     * 保司项目客户列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkInsuranceCustomerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workInsuranceCustomerList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workInsuranceCustomer/list", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ExternalApplyController/detailByApplyIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function externalApplyDetailByApplyId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/externalApply/detailByApplyId", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AttachmentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function attachmentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attachment/create", $body, $query, $extra);
    }

    /**
     * 根据业务ID删除附件
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AttachmentController/delByRelationIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function attachmentDelByRelationId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attachment/delByRelationId", $body, $query, $extra);
    }

    /**
     * 根据业务ID获取附件
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AttachmentController/getByRelationIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function attachmentGetByRelationId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attachment/getByRelationId", $body, $query, $extra);
    }

    /**
     * 根据业务ID获取附件 [批量]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AttachmentController/getByRelationIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function attachmentGetByRelationIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attachment/getByRelationIds", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/DataService/CustomerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function customerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/create", $body, $query, $extra);
    }

    /**
     * 带负责人查询分页列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OrganizeBaseController/pagingWithPartnerAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function pagingWithPartner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/pagingWithPartner", $body, $query, $extra);
    }

    /**
     * 按层级筛选保司列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Merchant/OrganizeBaseController/insuranceLevelListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function insuranceLevelList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/insuranceLevelList", $body, $query, $extra);
    }

    /**
     * 完成
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordIntermediaryVisitInsuranceController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordIntermediaryVisitInsuranceComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordIntermediaryVisitInsurance/complete", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordIntermediaryVisitInsuranceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordIntermediaryVisitInsuranceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordIntermediaryVisitInsurance/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordIntermediaryVisitInsuranceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordIntermediaryVisitInsuranceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordIntermediaryVisitInsurance/detail", $body, $query, $extra);
    }

    /**
     * 根据workId获取详情
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordIntermediaryVisitInsuranceController/getByWorkIdAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordIntermediaryVisitInsuranceGetByWorkId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordIntermediaryVisitInsurance/getByWorkId", $body, $query, $extra);
    }

    /**
     * 列表 [不分页]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Work/WorkRecordIntermediaryVisitInsuranceController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRecordIntermediaryVisitInsuranceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workRecordIntermediaryVisitInsurance/list", $body, $query, $extra);
    }


    /**
     * 创建 [全国业务数据类型查看权限]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/Insurance/InsuranceStatisticController/viewAuthorityDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function insuranceStatisticViewAuthorityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insuranceStatistic/viewAuthorityDetail", $body, $query, $extra);
    }

    /**
     * 编辑 [全国业务数据类型查看权限]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/Insurance/InsuranceStatisticController/viewAuthorityEditAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function insuranceStatisticViewAuthorityEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insuranceStatistic/viewAuthorityEdit", $body, $query, $extra);
    }

    /**
     * 审批流模板 [添加]
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/TemplateApproveController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function templateAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/template/add", $body, $query, $extra);
    }

    /**
     * 商户入驻
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkMerchantApplyAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkMerchantApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workMerchantApply", $body, $query, $extra);
    }

    /**
     * 门店入驻
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskWorkStoreApplyAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskWorkStoreApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/workStoreApply", $body, $query, $extra);
    }

    /**
     * DTP药房上线
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Approval/ApprovalTaskController/taskDtpPharmacyAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function taskDtpPharmacy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approvalTask/dtpPharmacy", $body, $query, $extra);
    }

    /**
     * 绩效审批列表
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/Statistic/Insurance/KpiStatisticController/applyListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiApplyList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/apply/list", $body, $query, $extra);
    }
}
