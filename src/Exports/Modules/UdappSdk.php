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
 * @date   2020-03-18
 * @time   Wed, 18 Mar 2020 11:54:13 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * UdappSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class UdappSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'udapp.module';

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
     * 获取门店店长数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/storeRoleListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantStoreRoleList($body)
    {
        return $this->restful("POST", "/assistant/storeRoleList", $body);
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
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransferList($body)
    {
        return $this->restful("POST", "/assistant/transferList", $body);
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
     * 配置
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/cacheConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cacheConfig($body)
    {
        return $this->restful("POST", "/config/cacheConfig", $body);
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
     * 获取开启某个开关的所有连锁
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/statusOpenPartnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statusOpenPartner($body)
    {
        return $this->restful("POST", "/config/statusOpenPartner", $body);
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
     * 设置token过期
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/expireAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tokenExpire($body)
    {
        return $this->restful("POST", "/token/expire", $body);
    }
}
