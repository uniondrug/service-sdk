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
 * @date   2020-09-29
 * @time   Tue, 29 Sep 2020 10:30:08 +0800
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class PsSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
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
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/BusinessStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/paging", $body, $query, $extra);
    }

    /**
     * 数据总和
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/list", $body, $query, $extra);
    }

    /**
     * 审核统计
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/RenewalStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function renewalStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalStatistic/paging", $body, $query, $extra);
    }

    /**
     * 数据汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/paging", $body, $query, $extra);
    }

    /**
     * 用户详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/userListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticUserLists($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/userLists", $body, $query, $extra);
    }

    /**
     * 详细数据不分页（日纬度）
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStatisticList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/list", $body, $query, $extra);
    }

    /**
     * 超期理赔
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/pagingOverClaimAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingOverClaim", $body, $query, $extra);
    }

    /**
     * 保险项目待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/pagingPendClaimRcptAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingPendClaimRcpt($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingPendClaimRcpt", $body, $query, $extra);
    }

    /**
     * 权益采购待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/pagingPendRcvAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPagingPendRcv($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/pagingPendRcv", $body, $query, $extra);
    }

    /**
     * 用户保单业绩数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/policyCountListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyCountList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyCountList", $body, $query, $extra);
    }

    /**
     * 用户保单业绩数据列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/policyListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyList", $body, $query, $extra);
    }

    /**
     * 用户项目业绩数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/projectCountListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectCountList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectCountList", $body, $query, $extra);
    }

    /**
     * 用户项目业绩数据列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/projectListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectList", $body, $query, $extra);
    }

    /**
     * 用户项目数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/projectMoreAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticProjectMore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/projectMore", $body, $query, $extra);
    }

    /**
     * 待收款
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/userPendCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticUserPendCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/userPendCount", $body, $query, $extra);
    }

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/CountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/count", $body, $query, $extra);
    }

    /**
     * 截止当前的剩余可以使用的数量，额度
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AiProfitStatisticController/presentAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function aiProfitStatisticPcDiscount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/aiProfitStatistic/getDiscount", $body, $query, $extra);
    }

    /**
     * 开单门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/userStoreListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticUserStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/userStoreList", $body, $query, $extra);
    }

    /**
     * 覆盖保司列表接口
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/policyPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyPaging", $body, $query, $extra);
    }

    /**
     * 用户保单数据状态总数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PolicyStatisticController/policyStatusCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyStatisticPolicyStatusCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyStatistic/policyStatusCount", $body, $query, $extra);
    }

    /**
     * 店员订单数
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workAssistant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/assistant", $body, $query, $extra);
    }

    /**
     * 任务门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeListAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeList", $body, $query, $extra);
    }

    /**
     * 门店各标签数量
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeCountAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeCount", $body, $query, $extra);
    }

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/dataAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
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
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/rank", $body, $query, $extra);
    }

    /**
     * 大数据各表任务执行情况
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/TableDataController/tableDataAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function tableData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/table/data", $body, $query, $extra);
    }

    /**
     * 门店分布列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/storeDistributedAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workStoreDistributed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/storeDistributed", $body, $query, $extra);
    }

    /**
     * 活跃奖励
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorkController/bonusAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function workBonus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/work/bonus", $body, $query, $extra);
    }


    /**
     * 商户详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PartnerStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerStatistic/detail", $body, $query, $extra);
    }

    /**
     * 商户列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PartnerStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function partnerStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partnerStatistic/paging", $body, $query, $extra);
    }

    /**
     * 店员详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantStatistic/detail", $body, $query, $extra);
    }

    /**
     * 店员列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/AssistantStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function assistantStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistantStatistic/paging", $body, $query, $extra);
    }

    /**
     * 门店详情
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/detail", $body, $query, $extra);
    }

    /**
     * 门店列表
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/StoreStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query Query数据
     * @param null $extra 请求头信息
     * @return ResponseInterface
     */
    public function storeStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeStatistic/paging", $body, $query, $extra);
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
}
