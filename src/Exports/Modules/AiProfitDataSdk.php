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
 * @date   2020-09-01
 * @time   Tue, 01 Sep 2020 18:16:35 +0800
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
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addActivity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/add", $body, $query, $extra);
    }

    /**
     * 增加某个活动报名数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addApplyCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addApplyCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/addApplyCount", $body, $query, $extra);
    }

    /**
     * 点击次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/BuriedPointController/addTimesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addBuriedPointTimes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/buriedPoint/addTimes", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/valueAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addContact($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/add", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addMarket($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/market/add", $body, $query, $extra);
    }

    /**
     * 弹窗添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPopups($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/add", $body, $query, $extra);
    }

    /**
     * 点击次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addClickAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPopupsClick($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/addClick", $body, $query, $extra);
    }

    /**
     * 打开次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/addOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPopupsOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/addOpen", $body, $query, $extra);
    }

    /**
     * 路由添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addRouter($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/router/add", $body, $query, $extra);
    }

    /**
     * 增加某个活动转发次数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addShareCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addShareCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/addShareCount", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/add", $body, $query, $extra);
    }

    /**
     * 增加某个活动查看数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addVisitCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addVisitCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/addVisitCount", $body, $query, $extra);
    }

    /**
     * 附近门店数据——累计销售额，累计开单数，今日销售额，今日开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/aroundDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aroundData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/aroundData", $body, $query, $extra);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/bestAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantBestRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/best", $body, $query, $extra);
    }

    /**
     * top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantRankTopThree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/rank", $body, $query, $extra);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/taskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/task", $body, $query, $extra);
    }

    /**
     * 上月最佳门店销售额，药联最佳门店半年销售额曲线图，附近最佳门店半年销售额曲线图
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/bestStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bestStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/bestStore", $body, $query, $extra);
    }

    /**
     * 绑定连锁数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/bindCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bindCountUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/bind/count", $body, $query, $extra);
    }

    /**
     * 取消首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/cancelBannerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cancelActivityBanner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/banner/cancel", $body, $query, $extra);
    }

    /**
     * 截止当前的剩余可以使用的数量，额度
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcCardReceiveController/presentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cardReceivePresent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cardReceive/present", $body, $query, $extra);
    }

    /**
     * 累积领取优惠权益（数量）和累积领取优惠权益（金额）
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcCardReceiveController/totalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cardReceiveTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cardReceive/total", $body, $query, $extra);
    }

    /**
     * 报名记录审批修改状态和原因
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function contactCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/check", $body, $query, $extra);
    }

    /**
     * 优惠活动数据统计
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/dataCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function contactDataCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/dataCount", $body, $query, $extra);
    }

    /**
     * 报名记录详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function contactDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/detail", $body, $query, $extra);
    }

    /**
     * 导出活动报名记录sql
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/exportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function contactExportSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/exportSql", $body, $query, $extra);
    }

    /**
     * 报名记录统计（累计报名，审核通过，待审核，驳回）
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/statisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function contactStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/statistics", $body, $query, $extra);
    }

    /**
     * 某日的数据明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/dataDetailByDayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dataDetailByDay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/dataDetailByDay", $body, $query, $extra);
    }

    /**
     * 根据时间段和连锁code查询数据列表提供折线图数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/dataListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dataList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/dataList", $body, $query, $extra);
    }

    /**
     * 每日明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/dayDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dayDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pk/dayDetail", $body, $query, $extra);
    }

    /**
     * 折线图数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcDaySumDetailsController/lineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function daySumLine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/daySum/line", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcDaySumDetailsController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function daySumList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/daySum/list", $body, $query, $extra);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableActivity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/disable", $body, $query, $extra);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disablePopups($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/disable", $body, $query, $extra);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/disable", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editActivity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/edit", $body, $query, $extra);
    }

    /**
     * 编辑弹窗
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editPopups($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/edit", $body, $query, $extra);
    }

    /**
     * 编辑路由
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editRouter($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/router/edit", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/edit", $body, $query, $extra);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableActivity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/enable", $body, $query, $extra);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/enable", $body, $query, $extra);
    }

    /**
     * 根据手机号码和连锁code获取账户信息
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/gainUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gainUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/gainUser", $body, $query, $extra);
    }

    /**
     * 新增连锁档位
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/chainCreateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearChainCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/chainCreate", $body, $query, $extra);
    }

    /**
     * 连锁档位详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/chainDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearChainDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/chainDetail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/detail", $body, $query, $extra);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/disable", $body, $query, $extra);
    }

    /**
     * 启用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/enable", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/update", $body, $query, $extra);
    }

    /**
     * 获取当前启用档位
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/GearController/usedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function gearUsed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/gear/used", $body, $query, $extra);
    }

    /**
     * 获取首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/getBannerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityBanner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/banner/get", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/info", $body, $query, $extra);
    }

    /**
     * 正在生效的活动List列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/list", $body, $query, $extra);
    }

    /**
     * 活动分页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActivityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/paging", $body, $query, $extra);
    }

    /**
     * 获取下级列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/getBannerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getChildrenList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/router/childrenList", $body, $query, $extra);
    }

    /**
     * 根据连锁code和activityId获取报名记录ID
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/getContactIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getContactId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/getContactId", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getContactPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contact/paging", $body, $query, $extra);
    }

    /**
     * 获取默认连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/getDefaultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDefaultUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/get/default", $body, $query, $extra);
    }

    /**
     * 取最新一条有效弹框
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/effectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEffectPopups($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/effect", $body, $query, $extra);
    }

    /**
     * 弹窗详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPopupsInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/info", $body, $query, $extra);
    }

    /**
     * 翻页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PopupsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPopupsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/popups/paging", $body, $query, $extra);
    }

    /**
     * 费率值
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RatioController/valueAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRatioValue($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/value", $body, $query, $extra);
    }

    /**
     * 路由详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRouterInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/router/info", $body, $query, $extra);
    }

    /**
     * 翻页列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RouterController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRouterPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/router/paging", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/info", $body, $query, $extra);
    }

    /**
     * LIST列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/list", $body, $query, $extra);
    }

    /**
     * 智盈白名单用户导出sql
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/userListExportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserListExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/userListExportSql", $body, $query, $extra);
    }

    /**
     * PAGING列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/paging", $body, $query, $extra);
    }

    /**
     * 上月药联增值服务最佳门店开单数，预计可产生的销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/lastBestAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lastBest($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/lastBest", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/market/detail", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/MarketController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function marketUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/market/update", $body, $query, $extra);
    }

    /**
     * 模块显示与关闭
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/changeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleChange($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/change", $body, $query, $extra);
    }

    /**
     * 根据连锁code判断是参加活动连锁还是未参加活动
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/check", $body, $query, $extra);
    }

    /**
     * 模块详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/detail", $body, $query, $extra);
    }

    /**
     * 模块列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/ListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/list", $body, $query, $extra);
    }

    /**
     * 根据连锁code判断微信端智盈到家数据是否展示
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendCheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleSendCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/sendcheck", $body, $query, $extra);
    }

    /**
     * 智盈到家模块配置详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleSendDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/senddetail", $body, $query, $extra);
    }

    /**
     * 智盈到家模块编辑
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/sendUpdateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleSendUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/sendupdate", $body, $query, $extra);
    }

    /**
     * 编辑模块
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ModuleControlController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moduleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/modulecontrol/update", $body, $query, $extra);
    }

    /**
     * 每月明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/monthDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function monthDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pk/monthDetail", $body, $query, $extra);
    }

    /**
     * 门店订单统计
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/EarnO2oStoreDataController/statisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function o2oStoreDataStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/o2oStoreData/statistics", $body, $query, $extra);
    }

    /**
     * 智盈到家连锁整体累计销售总额和累计开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/sumDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function o2oSumData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/o2opartner/sumdata", $body, $query, $extra);
    }

    /**
     * 连锁 客单价 分布
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/avgAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAvgAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/avgAmount", $body, $query, $extra);
    }

    /**
     * 连锁 门店客单价排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/avgAmountRankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerAvgAmountRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/avgAmountRank", $body, $query, $extra);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/bestAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBestRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/best", $body, $query, $extra);
    }

    /**
     * 连锁开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/billCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerBillCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/billCount", $body, $query, $extra);
    }

    /**
     * 智盈到家柱形图和折线图数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/partnerDataListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDataList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/o2opartner/datalist", $body, $query, $extra);
    }

    /**
     * 智盈到家每日明细
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/O2oPartnerController/dayDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerDayDataDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/o2opartner/daydetail", $body, $query, $extra);
    }

    /**
     * 根据连锁名称获取列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/partnerListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/partnerList", $body, $query, $extra);
    }

    /**
     * 本月数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerMonth($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/month", $body, $query, $extra);
    }

    /**
     * 连锁 单月 销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerMonthAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/monthAmount", $body, $query, $extra);
    }

    /**
     * 连锁 单月 开单数
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerMonthCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/monthCount", $body, $query, $extra);
    }

    /**
     * 连锁top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerRankTopThree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/rank", $body, $query, $extra);
    }

    /**
     * 连锁销售额
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/saleAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerSaleAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/saleAmount", $body, $query, $extra);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/taskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/task", $body, $query, $extra);
    }

    /**
     * 获取大数据的折扣下拉列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcDaySumDetailsController/getDiscountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pcDiscount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/daySum/getDiscount", $body, $query, $extra);
    }

    /**
     * 获取普惠活动配置的药联补贴
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PcDaySumDetailsController/getUnionSubsidyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pcUnionSubsidy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/daySum/getUnionSubsidy", $body, $query, $extra);
    }

    /**
     * 默认排行榜
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PkController/indexAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pkIndex($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pk/index", $body, $query, $extra);
    }

    /**
     * 药联整体战绩
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redPacketAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/all", $body, $query, $extra);
    }

    /**
     * 连锁城市列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/cityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redPacketCity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/city", $body, $query, $extra);
    }

    /**
     * 连锁城市数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/cityDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redPacketCityData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/cityData", $body, $query, $extra);
    }

    /**
     * 根据code判断是否存在连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/getPartnerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redPacketGetPartner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/getPartner", $body, $query, $extra);
    }

    /**
     * 连锁战绩
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RedPacketController/partnerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redPacketPartner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redPacket/partner", $body, $query, $extra);
    }

    /**
     * 活动要到期给用户发消息
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/SendMessageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendMessage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/sendMessage", $body, $query, $extra);
    }

    /**
     * 设置首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/setBannerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setActivityBanner($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/activity/banner/set", $body, $query, $extra);
    }

    /**
     * 设置默认连锁
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/setDefaultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setDefaultUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/set/default", $body, $query, $extra);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/bestAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeBestRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/best", $body, $query, $extra);
    }

    /**
     * 根据新的连锁ID获取附近门店信息
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/storeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/storeList", $body, $query, $extra);
    }

    /**
     * 门店top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeRankTopThree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/rank", $body, $query, $extra);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/taskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeTask($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/task", $body, $query, $extra);
    }

    /**
     * 全网数据走势图
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UnionController/trendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function unionTrend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/union/trend", $body, $query, $extra);
    }

    /**
     * 修改最后登录时间
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/updateLoginTimeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateLoginTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/updateLoginTime", $body, $query, $extra);
    }
}
