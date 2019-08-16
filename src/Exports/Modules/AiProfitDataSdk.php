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
 * @date   2019-08-16
 * @time   Fri, 16 Aug 2019 15:14:06 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AiProfitDataSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiProfitDataSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiProfit.data.module';

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addActivity($body)
    {
        return $this->restful("POST", "/activity/add", $body);
    }

    /**
     * 点击次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/BuriedPointController/addTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addBuriedPointTimes($body)
    {
        return $this->restful("POST", "/buriedPoint/addTimes", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/valueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addContact($body)
    {
        return $this->restful("POST", "/contact/add", $body);
    }

    /**
     * 弹窗添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPopups($body)
    {
        return $this->restful("POST", "/popups/add", $body);
    }

    /**
     * 点击次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addClickAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPopupsClick($body)
    {
        return $this->restful("POST", "/popups/addClick", $body);
    }

    /**
     * 打开次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addOpenAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPopupsOpen($body)
    {
        return $this->restful("POST", "/popups/addOpen", $body);
    }

    /**
     * 路由添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addRouter($body)
    {
        return $this->restful("POST", "/router/add", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantBestRank($body)
    {
        return $this->restful("POST", "/assistant/best", $body);
    }

    /**
     * top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantRankTopThree($body)
    {
        return $this->restful("POST", "/assistant/rank", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTask($body)
    {
        return $this->restful("POST", "/assistant/task", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/bindCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bindCountUser($body)
    {
        return $this->restful("POST", "/user/bind/count", $body);
    }

    /**
     * 取消首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/cancelBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelActivityBanner($body)
    {
        return $this->restful("POST", "/activity/banner/cancel", $body);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableActivity($body)
    {
        return $this->restful("POST", "/activity/disable", $body);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disablePopups($body)
    {
        return $this->restful("POST", "/popups/disable", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableUser($body)
    {
        return $this->restful("POST", "/user/disable", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editActivity($body)
    {
        return $this->restful("POST", "/activity/edit", $body);
    }

    /**
     * 编辑弹窗
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editPopups($body)
    {
        return $this->restful("POST", "/popups/edit", $body);
    }

    /**
     * 编辑路由
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editRouter($body)
    {
        return $this->restful("POST", "/router/edit", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful("POST", "/user/edit", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableActivity($body)
    {
        return $this->restful("POST", "/activity/enable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableUser($body)
    {
        return $this->restful("POST", "/user/enable", $body);
    }

    /**
     * 获取首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/getBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityBanner($body)
    {
        return $this->restful("POST", "/activity/banner/get", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityInfo($body)
    {
        return $this->restful("POST", "/activity/info", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityPaging($body)
    {
        return $this->restful("POST", "/activity/paging", $body);
    }

    /**
     * 获取下级列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/getBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getChildrenList($body)
    {
        return $this->restful("POST", "/router/childrenList", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getContactPaging($body)
    {
        return $this->restful("POST", "/contact/paging", $body);
    }

    /**
     * 获取默认连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/getDefaultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDefaultUser($body)
    {
        return $this->restful("POST", "/user/get/default", $body);
    }

    /**
     * 取最新一条有效弹框
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/effectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEffectPopups($body)
    {
        return $this->restful("POST", "/popups/effect", $body);
    }

    /**
     * 弹窗详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPopupsInfo($body)
    {
        return $this->restful("POST", "/popups/info", $body);
    }

    /**
     * 翻页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPopupsPaging($body)
    {
        return $this->restful("POST", "/popups/paging", $body);
    }

    /**
     * 费率值
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RatioController/valueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRatioValue($body)
    {
        return $this->restful("POST", "/value", $body);
    }

    /**
     * 路由详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRouterInfo($body)
    {
        return $this->restful("POST", "/router/info", $body);
    }

    /**
     * 翻页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRouterPaging($body)
    {
        return $this->restful("POST", "/router/paging", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * LIST列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserList($body)
    {
        return $this->restful("POST", "/user/list", $body);
    }

    /**
     * PAGING列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 连锁 客单价 分布
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/avgAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerAvgAmount($body)
    {
        return $this->restful("POST", "/partner/avgAmount", $body);
    }

    /**
     * 连锁 门店客单价排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/avgAmountRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerAvgAmountRank($body)
    {
        return $this->restful("POST", "/partner/avgAmountRank", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerBestRank($body)
    {
        return $this->restful("POST", "/partner/best", $body);
    }

    /**
     * 连锁开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/billCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerBillCount($body)
    {
        return $this->restful("POST", "/partner/billCount", $body);
    }

    /**
     * 本月数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerMonth($body)
    {
        return $this->restful("POST", "/partner/month", $body);
    }

    /**
     * 连锁 单月 销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerMonthAmount($body)
    {
        return $this->restful("POST", "/partner/monthAmount", $body);
    }

    /**
     * 连锁 单月 开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerMonthCount($body)
    {
        return $this->restful("POST", "/partner/monthCount", $body);
    }

    /**
     * 连锁top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerRankTopThree($body)
    {
        return $this->restful("POST", "/partner/rank", $body);
    }

    /**
     * 连锁销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/saleAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSaleAmount($body)
    {
        return $this->restful("POST", "/partner/saleAmount", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerTask($body)
    {
        return $this->restful("POST", "/partner/task", $body);
    }

    /**
     * 药联整体战绩
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redPacketAll($body)
    {
        return $this->restful("POST", "/redPacket/all", $body);
    }

    /**
     * 连锁城市列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/cityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redPacketCity($body)
    {
        return $this->restful("POST", "/redPacket/city", $body);
    }

    /**
     * 连锁城市数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/cityDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redPacketCityData($body)
    {
        return $this->restful("POST", "/redPacket/cityData", $body);
    }

    /**
     * 连锁战绩
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/partnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redPacketPartner($body)
    {
        return $this->restful("POST", "/redPacket/partner", $body);
    }

    /**
     * 设置首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/setBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setActivityBanner($body)
    {
        return $this->restful("POST", "/activity/banner/set", $body);
    }

    /**
     * 设置默认连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/setDefaultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setDefaultUser($body)
    {
        return $this->restful("POST", "/user/set/default", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeBestRank($body)
    {
        return $this->restful("POST", "/store/best", $body);
    }

    /**
     * 门店top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeRankTopThree($body)
    {
        return $this->restful("POST", "/store/rank", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeTask($body)
    {
        return $this->restful("POST", "/store/task", $body);
    }

    /**
     * 全网数据走势图
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UnionController/trendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unionTrend($body)
    {
        return $this->restful("POST", "/union/trend", $body);
    }

    /**
     * 修改最后登录时间
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/updateLoginTimeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateLoginTime($body)
    {
        return $this->restful("POST", "/user/updateLoginTime", $body);
    }
}
