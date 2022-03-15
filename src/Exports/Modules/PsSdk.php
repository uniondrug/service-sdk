<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Bsdatas`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-03-15
 * @time   Tue, 15 Mar 2022 13:38:47 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-bsdata';

    /**
     * 截止当前的剩余可以使用的数量，额度
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/presentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticCardReceivePresent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/present", $body, $query, $extra);
    }

    /**
     * 累积领取优惠权益（数量）和累积领取优惠权益（金额）
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/totalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticCardReceiveTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/total", $body, $query, $extra);
    }

    /**
     * 折线图数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/lineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticDaySumLine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/line", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticDaySumList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/list", $body, $query, $extra);
    }

    /**
     * 获取大数据的折扣下拉列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/getDiscountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticPcDiscount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/getDiscount", $body, $query, $extra);
    }

    /**
     * 店员详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantStatistic/detail", $body, $query, $extra);
    }

    /**
     * 出单店员占比
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantStatisticController/orderRateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStatisticOrderRate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantStatistic/orderRate", $body, $query, $extra);
    }

    /**
     * 店员列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantStatistic/paging", $body, $query, $extra);
    }

    /**
     * 店员打点距离 未分配门店数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantUserController/distanceStoresAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantUserDistanceStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantUser/distanceStores", $body, $query, $extra);
    }

    /**
     * 店员月初月末门店数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantUserController/monthStoreNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantUserMonthStoreNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantUser/monthStoreNum", $body, $query, $extra);
    }

    /**
     * 自动分配任务连锁列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/UserPartnerSumInfoController/autoDistributeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function autoDistributeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userPartnerSumInfo/autoDistributeList", $body, $query, $extra);
    }

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/BusinessStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/BusinessStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/paging", $body, $query, $extra);
    }

    /**
     * kpi指数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Chain/ChainDataController/kpiAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainDataKpi($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chainData/kpi", $body, $query, $extra);
    }

    /**
     * 重要业务市场交易规模
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Chain/ChainDataController/tradeSizeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainDataTradeSize($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chainData/tradeSize", $body, $query, $extra);
    }

    /**
     * 批量获取门店（默认返回昨天数据，昨天无数据返回前天数据，前天无数据返回空）
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreOperationInfoEdController/getByStoreIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getByStoreIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeOperationInfoEd/getByStoreIds", $body, $query, $extra);
    }

    /**
     * 连锁ID获取门店负责人列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreOperationInfoEdController/groupOmUserIdListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupOmUserIdList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeOperationInfoEd/groupOmUserIdList", $body, $query, $extra);
    }

    /**
     * 业务健康度列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/businessHealthListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiBusinessHealthList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/business/health/list", $body, $query, $extra);
    }

    /**
     * 保司财寿险业务发生机构明细列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/businessOrganizationPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiBusinessOrganizationPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/business/organization/page", $body, $query, $extra);
    }

    /**
     * 手续收入分页
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/businessProcessPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiBusinessProcessPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/business/process/page", $body, $query, $extra);
    }

    /**
     * 合作业务销售分页列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/businessSalesPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiBusinessSalesPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/business/sales/page", $body, $query, $extra);
    }

    /**
     * 竞争性市场数据，城市数据分页
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/cityMarketPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiCityMarketPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/city/market/page", $body, $query, $extra);
    }

    /**
     * 营收收入分页列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/incomeDetailPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiIncomeDetailPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/income/detail/page", $body, $query, $extra);
    }

    /**
     * 营收收入占比
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/incomeTotalRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiIncomeTotalRatio($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/income/total/ratio", $body, $query, $extra);
    }

    /**
     * 竞争性市场点击机构数出现的明细
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/marketDetailListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiMarketDetailList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/market/detail/list", $body, $query, $extra);
    }

    /**
     * 自营业务销量分页列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/ownBusinessSalesPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiOwnBusinessSalesPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/own/business/sales/page", $body, $query, $extra);
    }

    /**
     * 合作业务销售交易额占比
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/tradeAmountRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiTradeAmountRatio($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/tradeAmount/ratio", $body, $query, $extra);
    }

    /**
     * 合作业务销售量占比
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/KpiStatisticController/tradeNumRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function kpiTradeNumRatio($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/kpiStatistic/tradeNum/ratio", $body, $query, $extra);
    }

    /**
     * 无主门店分页
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreOperationInfoEdController/locationLackStorePagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationLackStorePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeOperationInfoEd/locationLackStorePaging", $body, $query, $extra);
    }

    /**
     * 根据连锁ID获取记录
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/MerchantOrdSumDController/getByMerchantIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function MOSDGetByMerchantId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantOrdSumD/getByMerchantId", $body, $query, $extra);
    }

    /**
     * 业务出单分布
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/OrderStatisticController/distributionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderStatisticDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orderStatistic/distribution", $body, $query, $extra);
    }

    /**
     * 商户详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PartnerStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerStatistic/detail", $body, $query, $extra);
    }

    /**
     * 商户列表导出
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PartnerStatisticController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerStatisticExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerStatistic/export", $body, $query, $extra);
    }

    /**
     * 商户列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PartnerStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerStatistic/paging", $body, $query, $extra);
    }

    /**
     * 数据总和
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/list", $body, $query, $extra);
    }

    /**
     * 用户详细数据(分页)
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/userListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/userList", $body, $query, $extra);
    }

    /**
     * 用户详细数据(不分页)
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/userListsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticUserLists($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/userLists", $body, $query, $extra);
    }

    /**
     * 出单门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/userStoreListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticUserStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/userStoreList", $body, $query, $extra);
    }

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/CountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/count", $body, $query, $extra);
    }

    /**
     * 首页     [全国/我的] - [财险/寿险/未知险]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/insuranceCollectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticInsuranceCollect($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/insuranceCollect", $body, $query, $extra);
    }

    /**
     * 明细   [全国/我的] - [财险/寿险/未知险] - [按保司,按日期]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/insuranceDetailByCompanyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticInsuranceDetailByCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/insuranceDetailByCompany", $body, $query, $extra);
    }

    /**
     * 开票数据   [员工维度] - [财险/寿险/未知险] - [PC端]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/insuranceDetailUsersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticInsuranceDetailUsers($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/insuranceDetailUsers", $body, $query, $extra);
    }

    /**
     * 首页     [全国] - [竞争性市场]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/marketCollectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticMarketCollect($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/marketCollect", $body, $query, $extra);
    }

    /**
     * 明细   [全国] - [竞争性市场]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/marketDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticMarketDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/marketDetail", $body, $query, $extra);
    }

    /**
     * 明细里面机构数对应的保司列表   [全国] - [竞争性市场]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/marketOrganizeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticMarketOrganizeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/marketOrganizeList", $body, $query, $extra);
    }

    /**
     * 首页     [全国] - [业务机构]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationCollectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationCollect($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationCollect", $body, $query, $extra);
    }

    /**
     * 首页     [我的] - [业务机构]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationCollectMyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationCollectMy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationCollectMy", $body, $query, $extra);
    }

    /**
     * 明细   [全国/我的] - [业务机构] - [发生业务] - [pc端用]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationCollectPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationCollectPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationCollectPaging", $body, $query, $extra);
    }

    /**
     * 业务发生数据     [员工维度] - [业务机构] - [pc端]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationCollectUsersAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationCollectUsers($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationCollectUsers", $body, $query, $extra);
    }

    /**
     * 明细   [全国/我的] - [业务机构] - [按保司] - [app端用]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationDetailByCompanyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationDetailByCompany($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationDetailByCompany", $body, $query, $extra);
    }

    /**
     * 明细   [全国/我的] - [业务机构] - [按日期] - [app端用]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationDetailByDateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationDetailByDate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationDetailByDate", $body, $query, $extra);
    }

    /**
     * 明细   [业务机构] - [机构分月数据] - [pc端用]
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/organizationMonthDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticOrganizationMonthDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/organizationMonthDetail", $body, $query, $extra);
    }

    /**
     * 超期理赔
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/pagingOverClaimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingOverClaim", $body, $query, $extra);
    }

    /**
     * 保险项目待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/pagingPendClaimRcptAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingPendClaimRcpt($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingPendClaimRcpt", $body, $query, $extra);
    }

    /**
     * 权益采购待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/pagingPendRcvAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingPendRcv($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingPendRcv", $body, $query, $extra);
    }

    /**
     * 用户保单业绩数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/policyCountListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyCountList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyCountList", $body, $query, $extra);
    }

    /**
     * 用户保单业绩数据列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/policyListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyList", $body, $query, $extra);
    }

    /**
     * 覆盖保司列表接口
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/policyPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyPaging", $body, $query, $extra);
    }

    /**
     * 用户保单数据状态总数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/policyStatusCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyStatusCount", $body, $query, $extra);
    }

    /**
     * 用户项目业绩数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/projectCountListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectCountList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectCountList", $body, $query, $extra);
    }

    /**
     * 用户项目业绩数据列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/projectListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectList", $body, $query, $extra);
    }

    /**
     * 用户项目数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/projectMoreAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectMore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectMore", $body, $query, $extra);
    }

    /**
     * 待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/Insurance/PolicyStatisticController/userPendCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticUserPendCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/userPendCount", $body, $query, $extra);
    }

    /**
     * 审核统计
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/RenewalStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewalStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/RenewalStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewalStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalStatistic/paging", $body, $query, $extra);
    }

    /**
     * 注册店员门店分布
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/countOfAssistantCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticCountOfAssistantCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/countOfAssistantCount", $body, $query, $extra);
    }

    /**
     * 门店订单分布
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/countOfOrderCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticCountOfOrderCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/countOfOrderCount", $body, $query, $extra);
    }

    /**
     * 门店详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/detail", $body, $query, $extra);
    }

    /**
     * 出单门店占比
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/orderRateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticOrderRate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/orderRate", $body, $query, $extra);
    }

    /**
     * 门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/paging", $body, $query, $extra);
    }

    /**
     * userOrdStoreSumD不分页列表 (用作门店订单分布导出)
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/userOrdStoreSumDListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticUserOrdStoreSumDListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/userOrdStoreSumDListing", $body, $query, $extra);
    }

    /**
     * userOrdStoreSumM不分页列表 (用作门店任务派发)
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/userOrdStoreSumMListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticUserOrdStoreSumMListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/userOrdStoreSumMListing", $body, $query, $extra);
    }

    /**
     * 大数据各表任务执行情况
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/TableDataController/tableDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tableData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/table/data", $body, $query, $extra);
    }

    /**
     * 大数据表是否更新
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/TableDataController/tablesStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tablesStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/table/status", $body, $query, $extra);
    }

    /**
     * 根据连锁ID获取记录
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/UserMerchantDController/getByMerchantIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function UMDGetByMerchantId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userMerchantD/getByMerchantId", $body, $query, $extra);
    }

    /**
     * 根据连锁ID获取记录
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/UserMerchantMController/getByMerchantIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function UMMGetByMerchantId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userMerchantM/getByMerchantId", $body, $query, $extra);
    }

    /**
     * 无主门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreOperationInfoEdController/unclaimedStoreListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function unclaimedStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeOperationInfoEd/unclaimedStoreList", $body, $query, $extra);
    }

    /**
     * 根据连锁ID获取记录
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/UserPartnerSumInfoController/getByMerchantIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function UPSIGetByMerchantId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userPartnerSumInfo/getByMerchantId", $body, $query, $extra);
    }

    /**
     * 店员订单数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/assistant", $body, $query, $extra);
    }

    /**
     * 活跃奖励
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/bonusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workBonus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/bonus", $body, $query, $extra);
    }

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/dataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/data", $body, $query, $extra);
    }

    /**
     * 业绩排行榜
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/rank", $body, $query, $extra);
    }

    /**
     * 数据汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据不分页（日纬度）
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStatisticList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/list", $body, $query, $extra);
    }

    /**
     * 详细数据（分页用户纬度）
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/paging", $body, $query, $extra);
    }

    /**
     * 门店各标签数量
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStoreCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeCount", $body, $query, $extra);
    }

    /**
     * 门店详情信息
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStoreDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeDetail", $body, $query, $extra);
    }

    /**
     * 门店分布列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeDistributedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeDistributed", $body, $query, $extra);
    }

    /**
     * 门店任务列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeIdsListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStoreIdsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeIdsList", $body, $query, $extra);
    }

    /**
     * 门店任务列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeList", $body, $query, $extra);
    }
}
