<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Unions`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-10-11
 * @time   Fri, 11 Oct 2019 14:49:32 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ProjectSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'project.union';

    /**
     * 激活权益
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/activateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activate($body)
    {
        return $this->restful("POST", "/equity/activate", $body);
    }

    /**
     * 根据cdkey 创建权益
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/createByCdKeyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AddByCdKey($body)
    {
        return $this->restful("POST", "/equity/cdkey/add", $body);
    }

    /**
     * 根据分组信息创建权益
     * 针对预创建兑换码情况
     * 2019-06-20 09:49:03 目前还支持创建兑换码，下个版本会取消创建，只支持预创建的兑换码
     * todo 取消直接创建兑换码
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/createByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AddByGroup($body)
    {
        return $this->restful("POST", "/equity/group/add", $body);
    }

    /**
     * 根据分组信息创建权益
     * 针对无预创建兑换码情况
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/createByGroupImmediatelyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AddByGroupImmediately($body)
    {
        return $this->restful("POST", "/equity/group/add/immediately", $body);
    }

    /**
     * 根据分组信息创建权益
     * 异步版
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/v2CreateByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AddByGroupV2($body)
    {
        return $this->restful("POST", "/equity/v2/group/add", $body);
    }

    /**
     * 创建即买即用权益
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/createImmediatelyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function CreateImmediately($body)
    {
        return $this->restful("POST", "/equity/create/immediately", $body);
    }

    /**
     * 开户
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/activateAccountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchAcitvateAccount($body)
    {
        return $this->restful("POST", "/equity/batch/activate/account", $body);
    }

    /**
     * 发起理赔【冻结】
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/applyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchApply($body)
    {
        return $this->restful("POST", "/equity/batch/apply", $body);
    }

    /**
     * 余额多条查询
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/balanceDetailsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchBalanceDetails($body)
    {
        return $this->restful("POST", "/equity/batch/balance/details", $body);
    }

    /**
     * 理赔 【扣除】
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchClaim($body)
    {
        return $this->restful("POST", "/equity/batch/claim", $body);
    }

    /**
     * 充值
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/rechargeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchRecharge($body)
    {
        return $this->restful("POST", "/equity/batch/recharge", $body);
    }

    /**
     * 驳回 【解冻】
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityBatchController/rejectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchReject($body)
    {
        return $this->restful("POST", "/equity/batch/reject", $body);
    }

    /**
     * 根据分单号同步用户信息
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquitySyncController/billNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equitySyncBillNo($body)
    {
        return $this->restful("POST", "/equity/sync/billNo", $body);
    }

    /**
     * 药店宝检测
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/VerifyController/ydbCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function verifyYDBCheck($body)
    {
        return $this->restful("POST", "/verify/ydbCheck", $body);
    }
}
