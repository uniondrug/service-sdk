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
 * @date   2019-12-19
 * @time   Thu, 19 Dec 2019 16:27:31 +0800
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
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelPoints($body)
    {
        return $this->restful("POST", "/poolRecords/cancelPoints", $body);
    }

    /**
     * JAVA调用是否发放积分(预发)
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/issuePointsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkIssuePoints($body)
    {
        return $this->restful("POST", "/poolRecords/checkIssuePoints", $body);
    }

    /**
     * 发放统计
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/countAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function count($body)
    {
        return $this->restful("POST", "/poolRecords/count", $body);
    }

    /**
     * 近30天的红包折线图
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/redLineAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dataRedLine($body)
    {
        return $this->restful("POST", "/weiXin/data/redLine", $body);
    }

    /**
     * 每日记录列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/dayListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dayList($body)
    {
        return $this->restful("POST", "/poolRecords/dayList", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportPoolRecord($body)
    {
        return $this->restful("POST", "/poolRecords/exportRecord", $body);
    }

    /**
     * 药店宝查看商品给店员发放积分数
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/getPointAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPoint($body)
    {
        return $this->restful("POST", "/plan/getPoint", $body);
    }

    /**
     * 根据organizationId获取projectIds
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/getProjectIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectId($body)
    {
        return $this->restful("POST", "/weiXin/data/getProjectId", $body);
    }

    /**
     * 根据organizationId获取getSchemeIds
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/getSchemeIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSchemeId($body)
    {
        return $this->restful("POST", "/weiXin/voucher/getSchemeId", $body);
    }

    /**
     * 订单商品数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/goodsListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsList($body)
    {
        return $this->restful("POST", "/weiXin/voucher/goodsList", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingCreate($body)
    {
        return $this->restful("POST", "/industryCashPooling/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingDetail($body)
    {
        return $this->restful("POST", "/industryCashPooling/detail", $body);
    }

    /**
     * 资金池停用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingDisable($body)
    {
        return $this->restful("POST", "/industryCashPooling/disable", $body);
    }

    /**
     * 资金池启用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/enableRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingEnable($body)
    {
        return $this->restful("POST", "/industryCashPooling/enable", $body);
    }

    /**
     * 修改服务费比例
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/modifyRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingModifyRatio($body)
    {
        return $this->restful("POST", "/industryCashPooling/modifyRatio", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingPaging($body)
    {
        return $this->restful("POST", "/industryCashPooling/paging", $body);
    }

    /**
     * 充值
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/IndustryCashPoolingController/rechargeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function industryCashPoolingRecharge($body)
    {
        return $this->restful("POST", "/industryCashPooling/recharge", $body);
    }

    /**
     * 订单列表数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/orderPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderPaging($body)
    {
        return $this->restful("POST", "/weiXin/voucher/orderPaging", $body);
    }

    /**
     * 获取订单连锁
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerList($body)
    {
        return $this->restful("POST", "/weiXin/voucher/partnerList", $body);
    }

    /**
     * 方案关联商户商品回调
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/createPlanCallbackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planCallback($body)
    {
        return $this->restful("POST", "/plan/createCallback", $body);
    }

    /**
     * 检查冲突
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/checkClashAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planCheckClash($body)
    {
        return $this->restful("POST", "/plan/checkClash", $body);
    }

    /**
     * 方案冲突 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/clashPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planClashPaging($body)
    {
        return $this->restful("POST", "/plan/clashPaging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planCreate($body)
    {
        return $this->restful("POST", "/plan/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planDetail($body)
    {
        return $this->restful("POST", "/plan/detail", $body);
    }

    /**
     * 方案停用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planDisable($body)
    {
        return $this->restful("POST", "/plan/disable", $body);
    }

    /**
     * 方案启用
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/enableRatioAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planEnable($body)
    {
        return $this->restful("POST", "/plan/enable", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanGoodsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planGoodsCreate($body)
    {
        return $this->restful("POST", "/planGoods/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planPaging($body)
    {
        return $this->restful("POST", "/plan/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanPartnersController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planPartnerCreate($body)
    {
        return $this->restful("POST", "/planPartners/create", $body);
    }

    /**
     * 编辑方案
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PlanController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function planUpdate($body)
    {
        return $this->restful("POST", "/plan/update", $body);
    }

    /**
     * 流水新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsCreate($body)
    {
        return $this->restful("POST", "/poolRecords/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsPaging($body)
    {
        return $this->restful("POST", "/poolRecords/paging", $body);
    }

    /**
     * 流水类型
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/typeListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function poolRecordsTypeList($body)
    {
        return $this->restful("POST", "/poolRecords/typeList", $body);
    }

    /**
     * 红包数据分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/getRedDataPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redDataPaging($body)
    {
        return $this->restful("POST", "/weiXin/data/getRedDataPaging", $body);
    }

    /**
     * 已消费的权益红包总额
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/DataController/redUsedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redUsedData($body)
    {
        return $this->restful("POST", "/weiXin/data/redUsed", $body);
    }

    /**
     * JAVA调用实发积分
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/PoolRecordsController/sendPointsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sendPoints($body)
    {
        return $this->restful("POST", "/poolRecords/sendPoints", $body);
    }

    /**
     * 根据手机获取用户详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/getUserByMobileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersByMobile($body)
    {
        return $this->restful("POST", "/users/getUserByMobile", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersCreate($body)
    {
        return $this->restful("POST", "/users/create", $body);
    }

    /**
     * 用户详情
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersDetail($body)
    {
        return $this->restful("POST", "/users/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersPaging($body)
    {
        return $this->restful("POST", "/users/paging", $body);
    }

    /**
     * 更新用户信息
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdate($body)
    {
        return $this->restful("POST", "/users/update", $body);
    }

    /**
     * 启用或关闭用户
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/UsersController/updateStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function usersUpdateStatus($body)
    {
        return $this->restful("POST", "/users/updateStatus", $body);
    }

    /**
     * 抵扣券统计数据
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/voucherDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function voucherData($body)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherData", $body);
    }

    /**
     * 抵扣券总额
     * @link https://uniondrug.coding.net/p/module.aiPush/git/blob/development/docs/api/WeiXin/VoucherController/totalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function voucherTotal($body)
    {
        return $this->restful("POST", "/weiXin/voucher/voucherTotal", $body);
    }
}
