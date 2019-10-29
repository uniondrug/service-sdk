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
 * @date   2019-10-29
 * @time   Tue, 29 Oct 2019 15:25:42 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * MerchantApplySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MerchantApplySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'merchant.apply.module';

    /**
     * 添加报名记录
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyAdd($body)
    {
        return $this->restful("POST", "/apply/add", $body);
    }

    /**
     * 申请单详情
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyDetail($body)
    {
        return $this->restful("POST", "/apply/detail", $body);
    }

    /**
     * 添加财务资料
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyFinanceController/financeAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinanceAdd($body)
    {
        return $this->restful("POST", "/apply/finance/add", $body);
    }

    /**
     * 更新财务资料
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyFinanceController/financeUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinanceUpdate($body)
    {
        return $this->restful("POST", "/apply/finance/update", $body);
    }

    /**
     * 设置完成状态
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/finishedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyFinished($body)
    {
        return $this->restful("POST", "/apply/finished", $body);
    }

    /**
     * 添加商户记录
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyMerchantController/merchantAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantAdd($body)
    {
        return $this->restful("POST", "/apply/merchant/add", $body);
    }

    /**
     * 同步数据
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyMerchantController/syncAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantSync($body)
    {
        return $this->restful("POST", "/apply/merchant/sync", $body);
    }

    /**
     * 更新商户记录
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyMerchantController/merchantUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantUpdate($body)
    {
        return $this->restful("POST", "/apply/merchant/update", $body);
    }

    /**
     * 修改组织ID
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyMerchantController/merchantUpdateOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyMerchantUpdateOrganizationId($body)
    {
        return $this->restful("POST", "/apply/merchant/update/organizationId", $body);
    }

    /**
     * 设置跟进人
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/modifyFollowerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyModifyFollower($body)
    {
        return $this->restful("POST", "/apply/modifyfollower", $body);
    }

    /**
     * 手动变更状态
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/modifyStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyModifyStatus($body)
    {
        return $this->restful("POST", "/apply/modifystatus", $body);
    }

    /**
     * 报名列表-分页
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyPaging($body)
    {
        return $this->restful("POST", "/apply/paging", $body);
    }

    /**
     * 添加门店记录
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreAdd($body)
    {
        return $this->restful("POST", "/apply/store/add", $body);
    }

    /**
     * 申请单门店列表
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeByApplyIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreByApplyId($body)
    {
        return $this->restful("POST", "/apply/store/list", $body);
    }

    /**
     * 批量查询申请单门店列表
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeByOrganizationIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreByOrganizationIds($body)
    {
        return $this->restful("POST", "/apply/store/listbyorganizationids", $body);
    }

    /**
     * 删除门店信息
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeDeleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreDelete($body)
    {
        return $this->restful("POST", "/apply/store/delete", $body);
    }

    /**
     * 根据Id门店信息
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreDetail($body)
    {
        return $this->restful("POST", "/apply/store/detail", $body);
    }

    /**
     * 修改门店信息
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreUpdate($body)
    {
        return $this->restful("POST", "/apply/store/update", $body);
    }

    /**
     * 修改组织ID
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyStoreController/storeUpdateOrganizationIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyStoreUpdateOrganizationId($body)
    {
        return $this->restful("POST", "/apply/store/update/organizationId", $body);
    }

    /**
     * 编辑报名记录
     * @link https://uniondrug.coding.net/p/module.apply.merchant/git/blob/development/docs/api/ApplyController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyUpdate($body)
    {
        return $this->restful("POST", "/apply/update", $body);
    }
}
