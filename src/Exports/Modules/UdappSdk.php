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
 * @date   2021-06-28
 * @time   Mon, 28 Jun 2021 11:11:43 +0800
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
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advertisementCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/advertisement/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advertisementDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/advertisement/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advertisementListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/advertisement/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advertisementPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/advertisement/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AdvertisementController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function advertisementUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/advertisement/update", $body, $query, $extra);
    }

    /**
     * 批量销毁
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/batchDestroyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantBatchDestroy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/batchDestroy", $body, $query, $extra);
    }

    /**
     * 学习
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/completeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/complete", $body, $query, $extra);
    }

    /**
     * 创建店员
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/detail", $body, $query, $extra);
    }

    /**
     * 冻结/解冻
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantFreeze($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/freeze", $body, $query, $extra);
    }

    /**
     * 获取门店店员列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/list", $body, $query, $extra);
    }

    /**
     * 创建记录
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantOpenController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantOpenCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantOpen/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantOpenController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantOpenDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantOpen/detail", $body, $query, $extra);
    }

    /**
     * 获取门店店员列表（分页）
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/paging", $body, $query, $extra);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/storeCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStoreCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/storeCount", $body, $query, $extra);
    }

    /**
     * 获取门店店长数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/storeRoleListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStoreRoleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/storeRoleList", $body, $query, $extra);
    }

    /**
     * 同步店员
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/syncAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantSync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/sync", $body, $query, $extra);
    }

    /**
     * 检验登录token
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/tokenCheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTokenCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/tokenCheck", $body, $query, $extra);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTransfer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transfer", $body, $query, $extra);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTransferList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/transferList", $body, $query, $extra);
    }

    /**
     * 修改店员信息
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/BlueController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function blueCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/blue/create", $body, $query, $extra);
    }

    /**
     * 配置
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/cacheConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cacheConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/cacheConfig", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/CashierController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cashierDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cashier/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ChannelConversionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function channelConversionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/channel/conversion/create", $body, $query, $extra);
    }

    /**
     * 数据转化
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ChannelConversionController/dataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function channelConversionData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/channel/conversion/data", $body, $query, $extra);
    }

    /**
     * 短链接码
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ChannelConversionController/getCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function channelConversionGetCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/channel/conversion/get/code", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ChannelConversionController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function channelConversionPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/channel/conversion/page", $body, $query, $extra);
    }

    /**
     * editAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/edit", $body, $query, $extra);
    }

    /**
     * exportAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/export", $body, $query, $extra);
    }

    /**
     * idsAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/ids", $body, $query, $extra);
    }

    /**
     * listingAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/listing", $body, $query, $extra);
    }

    /**
     * statusAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/status", $body, $query, $extra);
    }

    /**
     * typePartnerStatusAction()
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/typePartnerStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configTypePartnerStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/typePartnerStatus", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/DownloadLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downloadLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/downloadLog/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/DownloadPageController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downloadPageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/downloadPage/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/DownloadPageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downloadPageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/downloadPage/detail", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/DrugSubmitController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugSubmitCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugSubmit/create", $body, $query, $extra);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/DrugSubmitController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugSubmitPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugSubmit/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpContentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpContentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/content/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpContentController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpContentDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/content/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpContentController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpContentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/content/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpContentController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpContentPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/content/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpContentController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpContentUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/content/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/HelpQuestionController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function helpQuestionUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/help/question/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/create", $body, $query, $extra);
    }

    /**
     * 获取模版
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/defaultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateDefault($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/default", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/detail", $body, $query, $extra);
    }

    /**
     * 下线
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/downAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateDown($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/down", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/paging", $body, $query, $extra);
    }

    /**
     * 上线
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/upAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateUp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/up", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MarketingTemplateController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketingTemplateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/marketingTemplate/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantController/detailAction.md
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
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantController/pagingAction.md
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
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MerchantController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/MessageController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/create", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PollController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pollCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poll/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PollController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pollDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poll/detail", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PollController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pollUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poll/update", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PrescriptionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function prescriptionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/prescription/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PrescriptionController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function prescriptionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/prescription/detail", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PrescriptionController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function prescriptionUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/prescription/update", $body, $query, $extra);
    }

    /**
     * 新增推药记录
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/OrderController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pushOrderRecordCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function releasesCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/releases/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function releasesDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/releases/detail", $body, $query, $extra);
    }

    /**
     * app获取详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/getReleasesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function releasesGetReleases($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/releases/get/releases", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function releasesPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/releases/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReleasesController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function releasesUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/releases/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ReplyController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function replyCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reply/create", $body, $query, $extra);
    }

    /**
     * 获取开启某个开关的所有连锁
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ConfigController/statusOpenPartnerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statusOpenPartner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/statusOpenPartner", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/StoreQrcodeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeQrcodeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeQrcode/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/StoreQrcodeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeQrcodeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeQrcode/detail", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/StoreQrcodeController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeQrcodeExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeQrcode/export", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/StoreQrcodeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeQrcodePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeQrcode/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function suggestionCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggestion/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function suggestionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggestion/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/SuggestionController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function suggestionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/suggestion/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowManageController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwManageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwManage/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowManageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwManageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwManage/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowManageController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwManageListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwManage/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowManageController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwManagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwManage/paging", $body, $query, $extra);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowManageController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwManageUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwManage/update", $body, $query, $extra);
    }

    /**
     * List列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowMerchantController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwMerchantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwMerchant/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ThrowMerchantController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function throwMerchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/throwMerchant/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tipsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tips/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tipsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tips/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tipsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tips/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TipsController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tipsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tips/update", $body, $query, $extra);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tokenCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/create", $body, $query, $extra);
    }

    /**
     * 获取门店店员数量
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tokenDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/detail", $body, $query, $extra);
    }

    /**
     * 设置token过期
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/TokenController/expireAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tokenExpire($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/expire", $body, $query, $extra);
    }
}
