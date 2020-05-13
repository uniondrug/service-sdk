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
 * @time   Wed, 13 May 2020 13:57:15 +0800
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
     * 批量销毁
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/batchDestroyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantBatchDestroy($body)
    {
        return $this->restful("POST", "/assistant/batchDestroy", $body);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/batchFreezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantBatchFreeze($body)
    {
        return $this->restful("POST", "/assistant/batch/freeze", $body);
    }

    /**
     * 添加店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCreate($body)
    {
        return $this->restful("POST", "/assistant/create", $body);
    }

    /**
     * 注销店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/destroyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantDestroy($body)
    {
        return $this->restful("POST", "/assistant/destroy", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantDetail($body)
    {
        return $this->restful("POST", "/assistant/detail", $body);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantFreeze($body)
    {
        return $this->restful("POST", "/assistant/freeze", $body);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantIds($body)
    {
        return $this->restful("POST", "/assistant/ids", $body);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/informationPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantInformationPaging($body)
    {
        return $this->restful("POST", "/assistant/information/paging", $body);
    }

    /**
     * 店员的等级变化
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantLevelChangeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantLevelChange($body)
    {
        return $this->restful("POST", "/level/assistantLevelChange", $body);
    }

    /**
     * memberIds
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/memberIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantMemberIds($body)
    {
        return $this->restful("POST", "/assistant/memberIds", $body);
    }

    /**
     * 新详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/newDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantNewDetail($body)
    {
        return $this->restful("POST", "/assistant/new/detail", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantOperateDetail($body)
    {
        return $this->restful("POST", "/operate/detail", $body);
    }

    /**
     * List列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantOperateList($body)
    {
        return $this->restful("POST", "/operate/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/OperateController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantOperatePaging($body)
    {
        return $this->restful("POST", "/operate/paging", $body);
    }

    /**
     * 新分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/newPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantNewPaging($body)
    {
        return $this->restful("POST", "/assistant/new/paging", $body);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantPaging($body)
    {
        return $this->restful("POST", "/assistant/paging", $body);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/storeCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantStoreCount($body)
    {
        return $this->restful("POST", "/assistant/store/count", $body);
    }

    /**
     * 获取门店店长数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/storeRoleListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantStoreRoleList($body)
    {
        return $this->restful("POST", "/assistant/storeRoleList", $body);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransfer($body)
    {
        return $this->restful("POST", "/assistant/transfer", $body);
    }

    /**
     * 调店历史
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/transferListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransferList($body)
    {
        return $this->restful("POST", "/assistant/transferList", $body);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantUpdate($body)
    {
        return $this->restful("POST", "/assistant/update", $body);
    }

    /**
     * 创建行为
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionCreateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelActionCreate($body)
    {
        return $this->restful("POST", "/level/actionCreate", $body);
    }

    /**
     * 编辑行为
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionEditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelActionEdit($body)
    {
        return $this->restful("POST", "/level/actionEdit", $body);
    }

    /**
     * 行为分页列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/actionPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelActionPaging($body)
    {
        return $this->restful("POST", "/level/actionPaging", $body);
    }

    /**
     * 店员的体系详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/appAssistantDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelAppAssistantDetail($body)
    {
        return $this->restful("POST", "/level/appAssistantDetail", $body);
    }

    /**
     * 店员的成长记录列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/appGrowPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelAppGrowPaging($body)
    {
        return $this->restful("POST", "/level/appGrowPaging", $body);
    }

    /**
     * 店员详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelAssistantDetail($body)
    {
        return $this->restful("POST", "/level/assistantDetail", $body);
    }

    /**
     * 店员列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/assistantPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelAssistantPaging($body)
    {
        return $this->restful("POST", "/level/assistantPaging", $body);
    }

    /**
     * 配置数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/configAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelConfig($body)
    {
        return $this->restful("POST", "/level/config", $body);
    }

    /**
     * 配置列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/configPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelConfigPaging($body)
    {
        return $this->restful("POST", "/level/configPaging", $body);
    }

    /**
     * 配置列表
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/LevelController/levelTitleEditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelTitleEdit($body)
    {
        return $this->restful("POST", "/level/levelTitleEdit", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PayAccountController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountDetail($body)
    {
        return $this->restful("POST", "/pay/account/detail", $body);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PayAccountController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountUpdate($body)
    {
        return $this->restful("POST", "/pay/account/update", $body);
    }

    /**
     * 创建资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCreate($body)
    {
        return $this->restful("POST", "/pharmacist/create", $body);
    }

    /**
     * 获取资格
     * @link https://uniondrug.coding.net/p/module.clerk/git/blob/development/docs/api/PharmacistController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistDetail($body)
    {
        return $this->restful("POST", "/pharmacist/detail", $body);
    }
}
