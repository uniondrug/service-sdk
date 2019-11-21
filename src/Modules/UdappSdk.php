<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * 客户管理
 * @package Uniondrug\ServiceSdk\Modules
 */
class UdappSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'udapp';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function advertisementCreate($body)
    {
        return $this->restful("POST", "/advertisement/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function advertisementDetail($body)
    {
        return $this->restful("POST", "/advertisement/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function advertisementListing($body)
    {
        return $this->restful("POST", "/advertisement/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function advertisementPaging($body)
    {
        return $this->restful("POST", "/advertisement/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function advertisementUpdate($body)
    {
        return $this->restful("POST", "/advertisement/update", $body);
    }

    /**
     * 学习
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/completeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantComplete($body)
    {
        return $this->restful("POST", "/assistant/complete", $body);
    }

    /**
     * 创建店员
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCreate($body)
    {
        return $this->restful("POST", "/assistant/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantDetail($body)
    {
        return $this->restful("POST", "/assistant/detail", $body);
    }

    /**
     * 冻结/解冻
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantFreeze($body)
    {
        return $this->restful("POST", "/assistant/freeze", $body);
    }

    /**
     * 获取门店店员列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantList($body)
    {
        return $this->restful("POST", "/assistant/list", $body);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantPaging($body)
    {
        return $this->restful("POST", "/assistant/paging", $body);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/storeCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantStoreCount($body)
    {
        return $this->restful("POST", "/assistant/storeCount", $body);
    }

    /**
     * 检验登录token
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/tokenCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTokenCheck($body)
    {
        return $this->restful("POST", "/assistant/tokenCheck", $body);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransfer($body)
    {
        return $this->restful("POST", "/assistant/transfer", $body);
    }

    /**
     * 修改店员信息
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantUpdate($body)
    {
        return $this->restful("POST", "/assistant/update", $body);
    }

    /**
     * editAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configEdit($body)
    {
        return $this->restful("POST", "/config/edit", $body);
    }

    /**
     * idsAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configIds($body)
    {
        return $this->restful("POST", "/config/ids", $body);
    }

    /**
     * listingAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configListing($body)
    {
        return $this->restful("POST", "/config/listing", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigLogController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configLogDetail($body)
    {
        return $this->restful("POST", "/configLog/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigLogController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configLogUpdate($body)
    {
        return $this->restful("POST", "/configLog/update", $body);
    }

    /**
     * statusAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configStatus($body)
    {
        return $this->restful("POST", "/config/status", $body);
    }

    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantPushController/closeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushClose($body)
    {
        return $this->restful("POST", "/merchantPush/close", $body);
    }

    /**
     * 推送详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantPushController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushDetail($body)
    {
        return $this->restful("POST", "/merchantPush/detail", $body);
    }

    /**
     * 推送列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantPushController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushList($body)
    {
        return $this->restful("POST", "/merchantPush/list", $body);
    }

    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantPushController/openAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushOpen($body)
    {
        return $this->restful("POST", "/merchantPush/open", $body);
    }

    /**
     * 开启二次扫码详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantSecondController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantSecondDetail($body)
    {
        return $this->restful("POST", "/merchantSecond/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageCreate($body)
    {
        return $this->restful("POST", "/message/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageDelete($body)
    {
        return $this->restful("POST", "/message/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageDetail($body)
    {
        return $this->restful("POST", "/message/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageListing($body)
    {
        return $this->restful("POST", "/message/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messagePaging($body)
    {
        return $this->restful("POST", "/message/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function messageUpdate($body)
    {
        return $this->restful("POST", "/message/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function releasesCreate($body)
    {
        return $this->restful("POST", "/releases/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function releasesDetail($body)
    {
        return $this->restful("POST", "/releases/detail", $body);
    }

    /**
     * app获取详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/getReleasesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function releasesGetReleases($body)
    {
        return $this->restful("POST", "/releases/get/releases", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function releasesPaging($body)
    {
        return $this->restful("POST", "/releases/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function releasesUpdate($body)
    {
        return $this->restful("POST", "/releases/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function suggestionCreate($body)
    {
        return $this->restful("POST", "/suggestion/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function suggestionDetail($body)
    {
        return $this->restful("POST", "/suggestion/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function suggestionPaging($body)
    {
        return $this->restful("POST", "/suggestion/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tipsCreate($body)
    {
        return $this->restful("POST", "/tips/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tipsDetail($body)
    {
        return $this->restful("POST", "/tips/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tipsPaging($body)
    {
        return $this->restful("POST", "/tips/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tipsUpdate($body)
    {
        return $this->restful("POST", "/tips/update", $body);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tokenCreate($body)
    {
        return $this->restful("POST", "/token/create", $body);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tokenDetail($body)
    {
        return $this->restful("POST", "/token/detail", $body);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/expireAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tokenExpire($body)
    {
        return $this->restful("POST", "/token/expire", $body);
    }
}
