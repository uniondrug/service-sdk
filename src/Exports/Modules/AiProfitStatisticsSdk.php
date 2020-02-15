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
 * @date   2020-02-14
 * @time   Fri, 14 Feb 2020 10:11:34 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AiProfitStatisticsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiProfitStatisticsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiProfit.statistics.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/addUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful("POST", "/validate/addUser", $body);
    }

    /**
     * 首页
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ChainController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainIndex($body)
    {
        return $this->restful("POST", "/chain/index", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ChainController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainInfo($body)
    {
        return $this->restful("POST", "/chain/info", $body);
    }

    /**
     * 首页
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ClerkController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function clerkIndex($body)
    {
        return $this->restful("POST", "/clerk/index", $body);
    }

    /**
     * 首页销售排名
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ClerkController/indexSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function clerkIndexSalesRank($body)
    {
        return $this->restful("POST", "/clerk/clerkIndexSalesRank", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/editUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful("POST", "/validate/editUser", $body);
    }

    /**
     * 订单
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/OrderController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderIndex($body)
    {
        return $this->restful("POST", "/order/index", $body);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePartnerController/DetailDAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerDetailD($body)
    {
        return $this->restful("POST", "/scorePartner/detailD", $body);
    }

    /**
     * 根据连锁ID和scoreId查找最近的一条评分记录
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePartnerController/latelyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerLately($body)
    {
        return $this->restful("POST", "/scorePartner/lately", $body);
    }

    /**
     * 获取排名和平均分
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePartnerController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePartnerRank($body)
    {
        return $this->restful("POST", "/scorePartner/rank", $body);
    }

    /**
     * 方案开启或者关闭
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanChange($body)
    {
        return $this->restful("POST", "/scoreplan/change", $body);
    }

    /**
     * 新增方案
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanCreate($body)
    {
        return $this->restful("POST", "/scoreplan/create", $body);
    }

    /**
     * 方案详情
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanDetail($body)
    {
        return $this->restful("POST", "/scoreplan/detail", $body);
    }

    /**
     * 根据连锁ID获取最近生效的方案
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/effectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanEffect($body)
    {
        return $this->restful("POST", "/scoreplan/effect", $body);
    }

    /**
     * 方案列表
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanPaging($body)
    {
        return $this->restful("POST", "/scoreplan/paging", $body);
    }

    /**
     * 根据连锁ID获取即将生效的方案
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/soonAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanSoon($body)
    {
        return $this->restful("POST", "/scoreplan/soon", $body);
    }

    /**
     * 方案编辑
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ScorePlanController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scorePlanUpdate($body)
    {
        return $this->restful("POST", "/scoreplan/update", $body);
    }

    /**
     * 累计销售额排行
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/cumulativeSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeCumulativeSalesRank($body)
    {
        return $this->restful("POST", "/store/cumulativeSalesRank", $body);
    }

    /**
     * 首页
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeIndex($body)
    {
        return $this->restful("POST", "/store/index", $body);
    }

    /**
     * 首页销售额
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/indexSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeIndexSalesRank($body)
    {
        return $this->restful("POST", "/store/storeIndexSalesRank", $body);
    }

    /**
     * 上月销售额排行
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/monthSalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeMonthSalesRank($body)
    {
        return $this->restful("POST", "/store/monthSalesRank", $body);
    }

    /**
     * 今日销售额排行
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/todaySalesRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeTodaySalesRank($body)
    {
        return $this->restful("POST", "/store/TodaySalesRank", $body);
    }

    /**
     * 销售额总排行
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/StoreController/totalRankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeTotalRank($body)
    {
        return $this->restful("POST", "/store/totalRank", $body);
    }

    /**
     * 首页
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/TotalController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function totalIndex($body)
    {
        return $this->restful("POST", "/total/index", $body);
    }

    /**
     * 打标签
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/updateIsTagAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateIsTag($body)
    {
        return $this->restful("POST", "/validate/updateIsTag", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/userInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/validate/userInfo", $body);
    }

    /**
     * 验证白名单
     * @link https://uniondrug.coding.net/p/module.statistics.aiProfit/git/blob/development/docs/api/ValidateController/indexAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function validateIndex($body)
    {
        return $this->restful("POST", "/validate/index", $body);
    }
}
