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
 * @date   2020-05-19
 * @time   Tue, 19 May 2020 10:42:20 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 增加某个活动报名数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addApplyCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addApplyCount($body)
    {
        return $this->restful("POST", "/activity/addApplyCount", $body);
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
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addMarket($body)
    {
        return $this->restful("POST", "/market/add", $body);
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
     * 增加某个活动转发次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addShareCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addShareCount($body)
    {
        return $this->restful("POST", "/activity/addShareCount", $body);
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
     * 增加某个活动查看数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addVisitCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addVisitCount($body)
    {
        return $this->restful("POST", "/activity/addVisitCount", $body);
    }

    /**
     * 附近门店数据——累计销售额，累计开单数，今日销售额，今日开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/aroundDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function aroundData($body)
    {
        return $this->restful("POST", "/partner/aroundData", $body);
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
     * 上月最佳门店销售额，药联最佳门店半年销售额曲线图，附近最佳门店半年销售额曲线图
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/bestStoreAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bestStore($body)
    {
        return $this->restful("POST", "/partner/bestStore", $body);
    }

    /**
     * 绑定连锁数
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
     * 导出活动报名记录sql
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function contactExportSql($body)
    {
        return $this->restful("POST", "/contact/exportSql", $body);
    }

    /**
     * 某日的数据明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/dataDetailByDayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dataDetailByDay($body)
    {
        return $this->restful("POST", "/redPacket/dataDetailByDay", $body);
    }

    /**
     * 根据时间段和连锁code查询数据列表提供折线图数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/dataListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dataList($body)
    {
        return $this->restful("POST", "/redPacket/dataList", $body);
    }

    /**
     * 每日明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/dayDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dayDetail($body)
    {
        return $this->restful("POST", "/pk/dayDetail", $body);
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
     * 根据手机号码和连锁code获取账户信息
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/gainUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gainUser($body)
    {
        return $this->restful("POST", "/user/gainUser", $body);
    }

    /**
     * 新增连锁档位
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/chainCreateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearChainCreate($body)
    {
        return $this->restful("POST", "/gear/chainCreate", $body);
    }

    /**
     * 连锁档位详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/chainDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearChainDetail($body)
    {
        return $this->restful("POST", "/gear/chainDetail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearCreate($body)
    {
        return $this->restful("POST", "/gear/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearDetail($body)
    {
        return $this->restful("POST", "/gear/detail", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearDisable($body)
    {
        return $this->restful("POST", "/gear/disable", $body);
    }

    /**
     * 启用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearEnable($body)
    {
        return $this->restful("POST", "/gear/enable", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearPaging($body)
    {
        return $this->restful("POST", "/gear/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearUpdate($body)
    {
        return $this->restful("POST", "/gear/update", $body);
    }

    /**
     * 获取当前启用档位
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/usedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function gearUsed($body)
    {
        return $this->restful("POST", "/gear/used", $body);
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
     * 正在生效的活动List列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityList($body)
    {
        return $this->restful("POST", "/activity/list", $body);
    }

    /**
     * 活动分页列表
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
     * 上月药联增值服务最佳门店开单数，预计可产生的销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/lastBestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function lastBest($body)
    {
        return $this->restful("POST", "/partner/lastBest", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketDetail($body)
    {
        return $this->restful("POST", "/market/detail", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function marketUpdate($body)
    {
        return $this->restful("POST", "/market/update", $body);
    }

    /**
     * 模块显示与关闭
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleChange($body)
    {
        return $this->restful("POST", "/modulecontrol/change", $body);
    }

    /**
     * 根据连锁code判断是参加活动连锁还是未参加活动
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleCheck($body)
    {
        return $this->restful("POST", "/modulecontrol/check", $body);
    }

    /**
     * 模块详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleDetail($body)
    {
        return $this->restful("POST", "/modulecontrol/detail", $body);
    }

    /**
     * 模块列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/ListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleList($body)
    {
        return $this->restful("POST", "/modulecontrol/list", $body);
    }

    /**
     * 根据连锁code判断微信端智盈到家数据是否展示
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleSendCheck($body)
    {
        return $this->restful("POST", "/modulecontrol/sendcheck", $body);
    }

    /**
     * 智盈到家模块配置详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleSendDetail($body)
    {
        return $this->restful("POST", "/modulecontrol/senddetail", $body);
    }

    /**
     * 智盈到家模块编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleSendUpdate($body)
    {
        return $this->restful("POST", "/modulecontrol/sendupdate", $body);
    }

    /**
     * 编辑模块
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function moduleUpdate($body)
    {
        return $this->restful("POST", "/modulecontrol/update", $body);
    }

    /**
     * 每月明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/monthDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function monthDetail($body)
    {
        return $this->restful("POST", "/pk/monthDetail", $body);
    }

    /**
     * 门店订单统计
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/EarnO2oStoreDataController/statisticsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function o2oStoreDataStatistics($body)
    {
        return $this->restful("POST", "/o2oStoreData/statistics", $body);
    }

    /**
     * 智盈到家连锁整体累计销售总额和累计开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/sumDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function o2oSumData($body)
    {
        return $this->restful("POST", "/o2opartner/sumdata", $body);
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
     * 智盈到家柱形图和折线图数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/partnerDataListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerDataList($body)
    {
        return $this->restful("POST", "/o2opartner/datalist", $body);
    }

    /**
     * 智盈到家每日明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/dayDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerDayDataDetail($body)
    {
        return $this->restful("POST", "/o2opartner/daydetail", $body);
    }

    /**
     * 根据连锁名称获取列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerList($body)
    {
        return $this->restful("POST", "/partner/partnerList", $body);
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
     * 默认排行榜
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pkIndex($body)
    {
        return $this->restful("POST", "/pk/index", $body);
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
     * 根据code判断是否存在连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/getPartnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redPacketGetPartner($body)
    {
        return $this->restful("POST", "/redPacket/getPartner", $body);
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
     * 根据新的连锁ID获取附近门店信息
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/storeListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeList($body)
    {
        return $this->restful("POST", "/partner/storeList", $body);
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
