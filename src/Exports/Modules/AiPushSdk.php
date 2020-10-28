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
 * @date   2020-10-13
 * @time   Tue, 13 Oct 2020 11:43:17 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AiPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiPushSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiPush.module';

    /**
     * JAVA调用 取消发放积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/cancelPointsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cancelPoints($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/cancelPoints", $body, $query, $extra);
    }

    /**
     * JAVA调用是否发放积分(预发)
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/issuePointsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkIssuePoints($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/checkIssuePoints", $body, $query, $extra);
    }

    /**
     * 发放统计
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function count($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/count", $body, $query, $extra);
    }

    /**
     * 近30天的红包折线图
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/redLineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dataRedLine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/data/redLine", $body, $query, $extra);
    }

    /**
     * 每日记录列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/dayListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dayList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/dayList", $body, $query, $extra);
    }

    /**
     * 从资金池里面扣除优惠券
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/decCouponsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function decCoupons($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/decCoupons", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportPoolRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/exportRecord", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/SubOrderLogController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportSubOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/subOrderLog/exportSubOrder", $body, $query, $extra);
    }

    /**
     * 根据方案ID和关联状态获取列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanPartnersController/getListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getListByPlanId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planPartners/getListByPlanId", $body, $query, $extra);
    }

    /**
     * 药店宝查看商品给店员发放积分数
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/getPointAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPoint($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/getPoint", $body, $query, $extra);
    }

    /**
     * 根据工业ID获取资金池信息
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/getPoolByOrganizationIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPoolByOrganizationId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/getPoolByOrganizationId", $body, $query, $extra);
    }

    /**
     * 根据organizationId获取projectIds
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/getProjectIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/data/getProjectId", $body, $query, $extra);
    }

    /**
     * 根据organizationId获取getSchemeIds
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/getSchemeIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSchemeId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/getSchemeId", $body, $query, $extra);
    }

    /**
     * 订单商品数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/goodsListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function goodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/goodsList", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/detail", $body, $query, $extra);
    }

    /**
     * 资金池停用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/disable", $body, $query, $extra);
    }

    /**
     * 资金池启用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/enableRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/enable", $body, $query, $extra);
    }

    /**
     * 修改服务费比例
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/modifyRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingModifyRatio($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/modifyRatio", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/paging", $body, $query, $extra);
    }

    /**
     * 充值
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/rechargeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function industryCashPoolingRecharge($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/industryCashPooling/recharge", $body, $query, $extra);
    }

    /**
     * 药店宝根据商品条形码和优惠券查询获得的积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/newPointAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function newPoint($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/newPoint", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/OrderLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/orderLog/create", $body, $query, $extra);
    }

    /**
     * 订单列表数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/orderPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/orderPaging", $body, $query, $extra);
    }

    /**
     * 获取订单连锁
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/partnerListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/partnerList", $body, $query, $extra);
    }

    /**
     * 方案关联商户商品回调
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/createPlanCallbackAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planCallback($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/createCallback", $body, $query, $extra);
    }

    /**
     * 检查冲突
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/checkClashAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planCheckClash($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/checkClash", $body, $query, $extra);
    }

    /**
     * 方案冲突 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/clashPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planClashPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/clashPaging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/detail", $body, $query, $extra);
    }

    /**
     * 方案停用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/disable", $body, $query, $extra);
    }

    /**
     * 方案启用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/enableRatioAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/enable", $body, $query, $extra);
    }

    /**
     * 销售明细分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/SaleController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodSalePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sale/paging", $body, $query, $extra);
    }

    /**
     * 商品销售折线图和店员积分柱形图
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/goodsChartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodsChart($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planGoods/goodsChart", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planGoods/create", $body, $query, $extra);
    }

    /**
     * 方案移除商品
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/deleteGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodsDeleteOne($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planGoods/deleteOne", $body, $query, $extra);
    }

    /**
     * 方案关联商品列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planGoods/list", $body, $query, $extra);
    }

    /**
     * 商品销量占比
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/goodsPercentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planGoodsPercent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planGoods/goodsPercent", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/paging", $body, $query, $extra);
    }

    /**
     * 添加方案关联连锁或者方案取消关联连锁
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanPartnersController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planPartnerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planPartners/create", $body, $query, $extra);
    }

    /**
     * 智推方案关联的连锁列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanPartnersController/planPartnersPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planPartnerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/planPartners/planPartnerPaging", $body, $query, $extra);
    }

    /**
     * 药店宝下单查询积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/planPointListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planPointList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/pointList", $body, $query, $extra);
    }

    /**
     * 编辑方案
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function planUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/plan/update", $body, $query, $extra);
    }

    /**
     * 流水新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function poolRecordsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function poolRecordsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/paging", $body, $query, $extra);
    }

    /**
     * 流水类型
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/typeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function poolRecordsTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/typeList", $body, $query, $extra);
    }

    /**
     * 接收佣金发放的通知的回调地址
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/receivePointSendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function receivePointSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/receivePointSend", $body, $query, $extra);
    }

    /**
     * 充值撤销
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/cancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/cancel", $body, $query, $extra);
    }

    /**
     * 充值记录审核
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/examineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeExamine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/examine", $body, $query, $extra);
    }

    /**
     * 充值记录审核导出sql
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/examineSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeExamineSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/exportExamine", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RechargeLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rechargeLog/paging", $body, $query, $extra);
    }

    /**
     * 红包数据分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/getRedDataPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redDataPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/data/getRedDataPaging", $body, $query, $extra);
    }

    /**
     * 已消费的权益红包总额
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/redUsedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redUsedData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/data/redUsed", $body, $query, $extra);
    }

    /**
     * 退单的逻辑处理
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RefundLogController/cancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refundLogCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/refundLog/cancel", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RefundLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refundLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/refundLog/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RelateLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relateLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relateLog/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/RelateLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relateLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/relateLog/paging", $body, $query, $extra);
    }

    /**
     * 销售明细导出
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/SaleController/javaExportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function saleJavaExportSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sale/saleJavaExportSql", $body, $query, $extra);
    }

    /**
     * JAVA调用实发积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/sendPointsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendPoints($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolRecords/sendPoints", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/SubOrderLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function subOrderLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/subOrderLog/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/SubOrderLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function subOrderLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/subOrderLog/paging", $body, $query, $extra);
    }

    /**
     * 新增登录记录
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UserLoginController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userLoginCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userLogin/create", $body, $query, $extra);
    }

    /**
     * 获取最近的两次登录
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UserLoginController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userLoginListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/userLogin/listing", $body, $query, $extra);
    }

    /**
     * 根据手机获取用户详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/getUserByMobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersByMobile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/getUserByMobile", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/create", $body, $query, $extra);
    }

    /**
     * 用户详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/paging", $body, $query, $extra);
    }

    /**
     * 更新用户信息
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/update", $body, $query, $extra);
    }

    /**
     * 启用或关闭用户
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function usersUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/users/updateStatus", $body, $query, $extra);
    }

    /**
     * 按照日期时间段展示抵扣券领取和使用情况（折线图和柱形图）
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/chartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function voucherChart($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherChart", $body, $query, $extra);
    }

    /**
     * 抵扣券统计数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/voucherDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function voucherData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherData", $body, $query, $extra);
    }

    /**
     * 抵扣券总额
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/totalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function voucherTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherTotal", $body, $query, $extra);
    }

    /**
     * 用户已使用的抵扣券总额
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/usedTotalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function voucherUsedTotal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherUsedTotal", $body, $query, $extra);
    }
}
