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
 * @date   2021-10-14
 * @time   Thu, 14 Oct 2021 13:28:31 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ClaimSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ClaimSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'claim.module';

    /**
     * 换新执行审核流程
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/claimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/audit", $body, $query, $extra);
    }

    /**
     * 回收站初审通过
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/compensateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeCompensate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/compensate", $body, $query, $extra);
    }

    /**
     * 创建换新理赔申请
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/create", $body, $query, $extra);
    }

    /**
     * 获取换新理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/detail", $body, $query, $extra);
    }

    /**
     * 保障ID获取换新理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/detail2Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeDetail2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/detail2", $body, $query, $extra);
    }

    /**
     * 获取最新的理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/detailGuaranteeIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeNewDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/new/detail", $body, $query, $extra);
    }

    /**
     * 换新拒绝审核流程
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/rejectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function changeReject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/reject", $body, $query, $extra);
    }

    /**
     * 换新药品检查
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/checkDrugAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkDrug($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/checkDrug", $body, $query, $extra);
    }

    /**
     * 材料待补充
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/additionalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimAdditional($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/additional", $body, $query, $extra);
    }

    /**
     * 管理员撤销理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/adminCancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimAdminCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/admin/cancel", $body, $query, $extra);
    }

    /**
     * 后台理赔分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/adminPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimAdminPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/admin/paging", $body, $query, $extra);
    }

    /**
     * 理赔材料回调sdk
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/callbackAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCallBack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/call/back", $body, $query, $extra);
    }

    /**
     * 查询是否有理赔记录接口
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/checkHasRecordAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCheckHasData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/checkHasData", $body, $query, $extra);
    }

    /**
     * 批量扣除（新）
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/claimBatchNewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimClaimNew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claimNew", $body, $query, $extra);
    }

    /**
     * 批量扣除（老）
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/claimBatchOldAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimClaimOld($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claimOld", $body, $query, $extra);
    }

    /**
     * 待赔付
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/compensateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCompensate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/compensate", $body, $query, $extra);
    }

    /**
     * 发起理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/create", $body, $query, $extra);
    }

    /**
     * 理赔详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/detail", $body, $query, $extra);
    }

    /**
     * 理赔通过
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/finishAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimFinish($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/finish", $body, $query, $extra);
    }

    /**
     * 寿险批量冻结(创建理赔)
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/frozeForSxAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimFrozeForSx($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claimFrozeForSx", $body, $query, $extra);
    }

    /**
     * 查询流水号数据
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/getDataByOperatorAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimGetOperatorNoData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/getOperatorNoData", $body, $query, $extra);
    }

    /**
     * 理赔日志记录列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimLogController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimLogDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/log/detail", $body, $query, $extra);
    }

    /**
     * 理赔材料补充接口
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimMaterialController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimMaterialCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/material/create", $body, $query, $extra);
    }

    /**
     * 用户端理赔分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimPaymentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPaymentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimPayment/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimPaymentController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPaymentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimPayment/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimPaymentController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPaymentPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claimPayment/paging", $body, $query, $extra);
    }

    /**
     * 打款失败
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/payNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPayNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/pay/no", $body, $query, $extra);
    }

    /**
     * 目前没有这个场景
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/preliminaryTrialAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimPreliminaryTrial($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/preliminaryTrial", $body, $query, $extra);
    }

    /**
     * 理赔撤销
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/recoverEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/recover", $body, $query, $extra);
    }

    /**
     * 理赔拒绝
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/refusedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRefused($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/refused", $body, $query, $extra);
    }

    /**
     * 寿险批量驳回新
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/rejectBatchNewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRejectNew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/rejectNew", $body, $query, $extra);
    }

    /**
     * 寿险批量驳回老
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/rejectBatchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRejectOld($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/claimRejectOld", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/RenewRuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRenewDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/claim/detail", $body, $query, $extra);
    }

    /**
     * 换新理赔人工初审
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/RenewRuleController/renewFirstTrialAuditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRenewFirstTrialAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/claim/firstTrial/audit", $body, $query, $extra);
    }

    /**
     * 审核列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/RenewRuleController/getRenewPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRenewPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/claim/paging", $body, $query, $extra);
    }

    /**
     * 换新复审
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/RenewRuleController/renewRecheckAuditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimRenewRecheckAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/claim/recheck/audit", $body, $query, $extra);
    }

    /**
     * 用户撤销理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/userCancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimUserCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/user/cancel", $body, $query, $extra);
    }

    /**
     * 打款中
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/waitPayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimWaitPay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/wait/pay", $body, $query, $extra);
    }

    /**
     * 获取理赔数据
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/getDataByClaimNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDataByClaimNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/getDataByClaimNos", $body, $query, $extra);
    }

    /**
     * 阿美乐专用 只做扣减不做其他
     * 资金池扣减
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/PoolController/deductAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function poolDeduct($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pool/deduct", $body, $query, $extra);
    }

    /**
     * 阿美乐专用
     * 根据原扣减还原资金池
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/PoolController/returndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function poolReturnd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pool/returnd", $body, $query, $extra);
    }

    /**
     * 撤销TPA权益（内部使用）
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/RevocationEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function revocationEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/revocation/equity", $body, $query, $extra);
    }

    /**
     * 修改理赔保单号
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ClaimController/policyNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updatePolicyNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/policy/no", $body, $query, $extra);
    }

    /**
     * detailForYDBAction()
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/module.claim/api/ChangeController/detailForYDBAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ydbChangeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/change/detail/ydb", $body, $query, $extra);
    }
}
