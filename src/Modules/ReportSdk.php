<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-06-26
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 报表SDK
 * @package Uniondrug\ServiceSdk\Modules
 */
class ReportSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'report';

    /**
     * 读取商户余额排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/balanceAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getBalanceRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/balance", $body);
    }

    /**
     * 读取商户理赔排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/claimIndexAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getClaimRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/claim/index", $body);
    }

    /**
     * 读取商户理赔次数排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/claimTimesAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getClaimTimesRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/claim/times", $body);
    }

    /**
     * 读取客户日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/customerAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/customer", $body);
    }

    /**
     * 读取客户下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/district", $body);
    }

    /**
     * 读取客户下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/drugs", $body);
    }

    /**
     * 读取客户统计明细
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/CustomerController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/info", $body);
    }

    /**
     * 读取客户下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/scene", $body);
    }

    /**
     * 读取客户趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/customerAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/customer", $body);
    }

    /**
     * 读取商户日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/merchantAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/merchant", $body);
    }

    /**
     * 读取商户下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/district", $body);
    }

    /**
     * 读取商户下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/drugs", $body);
    }

    /**
     * 读取商户下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/scene", $body);
    }

    /**
     * 读取商户趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/merchantAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/merchant", $body);
    }

    /**
     * 读取项目日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/projectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/project", $body);
    }

    /**
     * 读取项目下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/district", $body);
    }

    /**
     * 读取项目下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/drugs", $body);
    }

    /**
     * 读取项目统计明细
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/ProjectController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/project/info", $body);
    }

    /**
     * 读取项目下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/scene", $body);
    }

    /**
     * 读取项目趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/projectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/project", $body);
    }

    /**
     * 读取项目统计明细
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/GroupController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGroupInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/group/info", $body);
    }

    //-------------------------------药联市场数据展示平台Start-------------------------------
    /**
     * 读取店员今日活跃度
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/AssistantsController/activeDailyAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAssistantActiveDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/activeDaily", $body);
    }

    /**
     * 读取会员今日活跃度
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/MemberController/activeDailyAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMemberActiveDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/member/activeDaily", $body);
    }

    /**
     * 读取今日订单各时段销售量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/OrderController/hourSaleAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrderHourSale($body)
    {
        return $this->restful(static::METHOD_POST, "/order/hourSale", $body);
    }

    /**
     * 读取今日订单总销售量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/OrderController/daySaleAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrderDaySale($body)
    {
        return $this->restful(static::METHOD_POST, "/order/daySale", $body);
    }

    /**
     * 读取今日订单产品分类占比
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/OrderController/dayProductPercentAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOrderDayProductPercent($body)
    {
        return $this->restful(static::METHOD_POST, "/order/dayProductPercent", $body);
    }

    /**
     * 读取门店省级分布列表
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/StoreController/provincePartitionAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getStoreProvincePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/store/provincePartition", $body);
    }

    /**
     * 读取门店省级覆盖率
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/StoreController/provincePartitionCoverAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getStoreProvincePartitionCover($body)
    {
        return $this->restful(static::METHOD_POST, "/store/provincePartitionCover", $body);
    }

    /**
     * 读取门店市级覆盖率
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/StoreController/provincePartitionCoverAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getStoreCityPartitionCover($body)
    {
        return $this->restful(static::METHOD_POST, "/store/cityPartitionCover", $body);
    }

    /**
     * 读取分类门店总数量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/StoreController/categoryCountAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getStoreCategoryCount($body)
    {
        return $this->restful(static::METHOD_POST, "/store/categoryCount", $body);
    }

    /**
     * 读取合作连锁
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartnerController/cooperationAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPartnerCooperation($body)
    {
        return $this->restful(static::METHOD_POST, "/partner/cooperation", $body);
    }

    /**
     * 读取本月新增店员统计
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/AssistantsController/staticsMonthlyAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAssistantStaticsMonthly($body)
    {
        return $this->restful(static::METHOD_POST, "/assistants/staticsMonthly", $body);
    }

    /**
     * 读取连锁30天内销售额排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartnerController/thirtyDaysSaleAmountAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPartnerThirtyDaysSaleAmount($body)
    {
        return $this->restful(static::METHOD_POST, "/partner/thirtyDaysSaleAmount", $body);
    }

    /**
     * 读取连锁30天内销售量排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartnerController/thirtyDaysSaleCountAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPartnerThirtyDaysSaleCount($body)
    {
        return $this->restful(static::METHOD_POST, "/partner/thirtyDaysSaleCount", $body);
    }

    /**
     * 读取区域30天内销售额占比
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/saleAmountPercentAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPartitionSaleAmountPercent($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/saleAmountPercent", $body);
    }

    /**
     * 读取区域30天内销售量占比
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/saleCountPercentAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPartitionSaleCountPercent($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/saleCountPercent", $body);
    }

    //-------------------------------药联市场数据展示平台End-------------------------------

}
