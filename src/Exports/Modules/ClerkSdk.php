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
 * @date   2020-05-13
 * @time   Wed, 13 May 2020 19:20:19 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ClerkSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ClerkSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'clerk.module';

    /**
     * 活动统计
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/activityStatisticAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantActivityStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/activity/statistic", $body, $query, $extra);
    }

    /**
     * 设置顾问开启关闭
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AdviserController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantAdviserCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/adviser/create", $body, $query, $extra);
    }

    /**
     * 批量销毁
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/batchDestroyAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantBatchDestroy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/batchDestroy", $body, $query, $extra);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/batchFreezeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantBatchFreeze($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/batch/freeze", $body, $query, $extra);
    }

    /**
     * 添加店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/create", $body, $query, $extra);
    }

    /**
     * 注销店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/destroyAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantDestroy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/destroy", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/detail", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/exportAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/export", $body, $query, $extra);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantFreeze($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/freeze", $body, $query, $extra);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/idsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/ids", $body, $query, $extra);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/informationPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantInformationPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/information/paging", $body, $query, $extra);
    }

    /**
     * java导出
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/javaExportAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantJavaExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/java/export", $body, $query, $extra);
    }

    /**
     * 店员的等级变化
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantLevelChangeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantLevelChange($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/assistantLevelChange", $body, $query, $extra);
    }

    /**
     * memberIds
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/memberIdsAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantMemberIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/memberIds", $body, $query, $extra);
    }

    /**
     * 新详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/newDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantNewDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/new/detail", $body, $query, $extra);
    }

    /**
     * 新分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/newPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantNewPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/new/paging", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantOperateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operate/detail", $body, $query, $extra);
    }

    /**
     * List列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantOperateList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operate/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantOperatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operate/paging", $body, $query, $extra);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/paging", $body, $query, $extra);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/storeCountAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantStoreCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/store/count", $body, $query, $extra);
    }

    /**
     * 获取门店店长数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/storeRoleListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantStoreRoleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/storeRoleList", $body, $query, $extra);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transfer", $body, $query, $extra);
    }

    /**
     * 调店历史
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/transferListAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transferList", $body, $query, $extra);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/BlacklistController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function blacklistCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blacklist/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/BlacklistController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function blacklistDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blacklist/detail", $body, $query, $extra);
    }

    /**
     * edit
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/BlacklistController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function blacklistEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blacklist/edit", $body, $query, $extra);
    }

    /**
     * freeze
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/BlacklistController/freezeAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function blacklistFreeze($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blacklist/freeze", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/BlacklistLogController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function blacklistLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blacklistLog/paging", $body, $query, $extra);
    }

    /**
     * 创建行为
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionCreateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelActionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/actionCreate", $body, $query, $extra);
    }

    /**
     * 行为删除
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionDeleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelActionDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/actionDelete", $body, $query, $extra);
    }

    /**
     * 编辑行为
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionEditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelActionEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/actionEdit", $body, $query, $extra);
    }

    /**
     * 行为分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelActionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/actionPaging", $body, $query, $extra);
    }

    /**
     * 店员的体系详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/appAssistantDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelAppAssistantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/appAssistantDetail", $body, $query, $extra);
    }

    /**
     * 店员的成长记录列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/appGrowPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelAppGrowPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/appGrowPaging", $body, $query, $extra);
    }

    /**
     * 店员详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantDetailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelAssistantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/assistantDetail", $body, $query, $extra);
    }

    /**
     * 店员列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelAssistantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/assistantPaging", $body, $query, $extra);
    }

    /**
     * 配置数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/configAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/config", $body, $query, $extra);
    }

    /**
     * 配置列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/configPagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelConfigPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/configPaging", $body, $query, $extra);
    }

    /**
     * 后台图标
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/levelLogoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelLogo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/levelLogo", $body, $query, $extra);
    }

    /**
     * 配置列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/levelTitleEditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function levelTitleEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/level/levelTitleEdit", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PayAccountController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function payAccountDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pay/account/detail", $body, $query, $extra);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PayAccountController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function payAccountUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pay/account/update", $body, $query, $extra);
    }

    /**
     * 创建资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/create", $body, $query, $extra);
    }

    /**
     * 获取资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/detail", $body, $query, $extra);
    }

    /**
     * 编辑资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/editAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/edit", $body, $query, $extra);
    }

    /**
     * 获取资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacistPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacist/paging", $body, $query, $extra);
    }

    /**
     * v1Action()
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/IndexController/v1Action.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function v1($body)
    {
        return $this->restful("POST", "/index/v1", $body);
    }
}
