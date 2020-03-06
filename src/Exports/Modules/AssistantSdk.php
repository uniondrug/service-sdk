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


}
