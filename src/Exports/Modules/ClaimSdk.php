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
 * @date   2020-03-02
 * @time   Mon, 02 Mar 2020 17:54:16 +0800
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
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeAudit($body)
    {
        return $this->restful("POST", "/change/audit", $body);
    }

    /**
     * 创建换新理赔申请
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeCreate($body)
    {
        return $this->restful("POST", "/change/create", $body);
    }

    /**
     * 获取换新理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeDetail($body)
    {
        return $this->restful("POST", "/change/detail", $body);
    }

    /**
     * 保障ID获取换新理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/detail2Action.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeDetail2($body)
    {
        return $this->restful("POST", "/change/detail2", $body);
    }

    /**
     * 获取最新的理赔单详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/detailGuaranteeIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeNewDetail($body)
    {
        return $this->restful("POST", "/change/new/detail", $body);
    }

    /**
     * 换新拒绝审核流程
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ChangeController/rejectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeReject($body)
    {
        return $this->restful("POST", "/change/reject", $body);
    }

    /**
     * 材料待补充
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/additionalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimAdditional($body)
    {
        return $this->restful("POST", "/claim/additional", $body);
    }

    /**
     * 管理员撤销理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/adminCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimAdminCancel($body)
    {
        return $this->restful("POST", "/claim/admin/cancel", $body);
    }

    /**
     * 后台理赔分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/adminPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimAdminPaging($body)
    {
        return $this->restful("POST", "/claim/admin/paging", $body);
    }

    /**
     * 理赔材料回调sdk
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/callbackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCallBack($body)
    {
        return $this->restful("POST", "/claim/call/back", $body);
    }

    /**
     * 查询是否有理赔记录接口
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/checkHasRecordAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCheckHasData($body)
    {
        return $this->restful("POST", "/claim/checkHasData", $body);
    }

    /**
     * 批量扣除（新）
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/claimBatchNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimClaimNew($body)
    {
        return $this->restful("POST", "/claim/claimNew", $body);
    }

    /**
     * 批量扣除（老）
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/claimBatchOldAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimClaimOld($body)
    {
        return $this->restful("POST", "/claim/claimOld", $body);
    }

    /**
     * 待赔付
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/compensateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCompensate($body)
    {
        return $this->restful("POST", "/claim/compensate", $body);
    }

    /**
     * 发起理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCreate($body)
    {
        return $this->restful("POST", "/claim/create", $body);
    }

    /**
     * 理赔详情
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimDetail($body)
    {
        return $this->restful("POST", "/claim/detail", $body);
    }

    /**
     * 理赔通过
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/finishAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimFinish($body)
    {
        return $this->restful("POST", "/claim/finish", $body);
    }

    /**
     * 寿险批量冻结(创建理赔)
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/frozeForSxAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimFrozeForSx($body)
    {
        return $this->restful("POST", "/claim/claimFrozeForSx", $body);
    }

    /**
     * 查询流水号数据
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/getDataByOperatorAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimGetOperatorNoData($body)
    {
        return $this->restful("POST", "/claim/getOperatorNoData", $body);
    }

    /**
     * 理赔日志记录列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimLogController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimLogDetail($body)
    {
        return $this->restful("POST", "/claim/log/detail", $body);
    }

    /**
     * 理赔材料补充接口
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimMaterialController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimMaterialCreate($body)
    {
        return $this->restful("POST", "/claim/material/create", $body);
    }

    /**
     * 用户端理赔分页列表
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimPaging($body)
    {
        return $this->restful("POST", "/claim/paging", $body);
    }

    /**
     * 打款失败
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/payNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimPayNo($body)
    {
        return $this->restful("POST", "/claim/pay/no", $body);
    }

    /**
     * 理赔拒绝
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/refusedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimRefused($body)
    {
        return $this->restful("POST", "/claim/refused", $body);
    }

    /**
     * 寿险批量驳回新
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/rejectBatchNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimRejectNew($body)
    {
        return $this->restful("POST", "/claim/rejectNew", $body);
    }

    /**
     * 寿险批量驳回老
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/rejectBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimRejectOld($body)
    {
        return $this->restful("POST", "/claim/claimRejectOld", $body);
    }

    /**
     * 用户撤销理赔
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/userCancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimUserCancel($body)
    {
        return $this->restful("POST", "/claim/user/cancel", $body);
    }

    /**
     * 打款中
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/waitPayAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimWaitPay($body)
    {
        return $this->restful("POST", "/claim/wait/pay", $body);
    }

    /**
     * 修改理赔保单号
     * @link https://uniondrug.coding.net/p/module.claim/git/tree/development/docs/api/ClaimController/policyNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updatePolicyNo($body)
    {
        return $this->restful("POST", "/claim/policy/no", $body);
    }
}
