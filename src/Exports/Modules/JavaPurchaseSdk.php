<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:40 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaDistributionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPurchaseSdk extends SdkBase
{
    protected $serviceName = 'java.purchase';

    /**
     * 添加采购项目
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/project_add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function createPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/add', $body);
    }

    /**
     * 采购项目详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/project_detail.md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/detail', $body);
    }

    /**
     * 更改项目激活限制策略
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/projectChange.md
     * @param array $body
     * @return ResponseInterface
     */
    public function strategyPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/projectChange', $body);
    }

    /**
     * 采购项目分页列表
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/projectList.md
     * @param array $body
     * @return ResponseInterface
     */
    public function listingPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/list', $body);
    }

    /**
     * 创建新批次
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pile_add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function createPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/add', $body);
    }

    /**
     * 批次分页列表
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileList.md
     * @param array $body
     * @return ResponseInterface
     */
    public function pagingPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/list', $body);
    }

    /**
     * 批次详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileDetail.md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/detail', $body);
    }

    /**
     * 批次详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileCancel.md
     * @param array $body
     * @return ResponseInterface
     */
    public function cancelPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/cancel', $body);
    }

    /**
     * 项目导出sql
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function exportProjectSQL($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/exportList', $body);
    }

    /**
     * 规格邮件重试
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendSpecsMail($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/sendMail', $body);
    }

    /**
     * 解析导入模板行数和权益总额
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function parseExcelContent($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/checkExcel', $body);
    }

    /**
     * 规格邮件发送情况列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function specsList($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/listing', $body);
    }

    /**
     * 规格列表
     * @param $body
     * @return ResponseInterface
     */

    public function specsPaging($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/paging', $body);
    }
    /**
     * 导出规格
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function specsExport($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/export', $body);
    }

    /**
     * 项目提额
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseIncreaseQuota($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/increaseQuota', $body);

    }

    /**
     * 项目暂停
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseProjectPause($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/pause', $body);

    }

    /**
     * 项目获取采购项目ID
     * @param $body
     * @return ResponseInterface
     */
    public function payerId($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/payerId', $body);

    }

    /**
     * 采购项目提额记录
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function increaseMoneyRecords($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseProject/incrHisList', $body, $query = null, $extra = null);
    }

    /**
     * 发起回款
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function coinReceiptCreate($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseFinance/coinReceiptCreate', $body, $query = null, $extra = null);
    }

    /**
     * 回款与开票 列表查询
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function coinReceiptPage($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseFinance/coinReceiptPage', $body, $query = null, $extra = null);
    }


    /**
     * 在项目创建/提额时，存入"回款与开票"初稿，在审批通过时，直接发起回款
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseFinanceInitCoinReceiptDraft($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseFinance/initCoinReceiptDraft', $body, $query = null, $extra = null);
    }
    /**
     * 根据权益企业/保司查询历史合同和企业联系人信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseProjectQueryHisContract($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseProject/queryHisContract', $body, $query = null, $extra = null);
    }
    /**
     * 驻店宝用户信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseStagnationList($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseStagnation/list', $body, $query = null, $extra = null);
    }


    /**
     * 根据发行项目ID获取采购项目杠杆比例信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function queryRatioByPublishProjectId($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseProject/queryRatioByPublishProjectId', $body, $query = null, $extra = null);
    }

    /**
     * 生成提额单
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function generatePromote($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/generatePromote', $body, $query = null, $extra = null);
    }

    /**
     * 新增增值服务权益批次
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function createValueAddedService($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchasePile/createValueAddedService', $body, $query = null, $extra = null);
    }

    /**
     * 增值服务兑换码列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function unionPurchaseRedeem($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseRedeem/paging', $body, $query = null, $extra = null);
    }

    /**
     * 项目延期
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseProjectDelay($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseProject/delay', $body, $query = null, $extra = null);
    }

    /**
     * aes 加密数据
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function cipherEncryptData($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/cipher/encryptData', $body, $query = null, $extra = null);
    }

    /**
     * aes 解密数据
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function cipherDecryptData($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/cipher/decryptData', $body, $query = null, $extra = null);
    }
    /**
     * 规格详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function specsDetail($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/detail', $body, $query = null, $extra = null);
    }
    /**
     * 采购金额回收
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function recovery($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseRecovery/recoveryEquity', $body, $query = null, $extra = null);
    }
    /**
     * 通过分组ID查询specsID和pileId
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function querySpecsByGroupId($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/queryByGroupId', $body, $query = null, $extra = null);
    }

    /**
     * 通过项目ID查询是否可以更换保单
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function checkGroupCombine($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/project/checkGroupCombine', $body, $query = null, $extra = null);
    }

    /**
     * 通过保司ID获取项目列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function projectListByMerchantId($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/project/projectListByMerchantId', $body, $query = null, $extra = null);
    }

    /**
     * 通知暂停保单
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function notifyFrozenProject($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/project/notifyFrozenProject', $body, $query = null, $extra = null);
    }

    /**
     * 获取更换保单列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function changePolicyNoList($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/project/changePolicyNoList', $body, $query = null, $extra = null);
    }

    /**
     * 重新发起开票
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function invoiceCreate($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseFinance/invoiceCreate', $body, $query = null, $extra = null);
    }

    /**
     * 根据项目 ids 获取采购项目信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseProjectListInfos($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchaseProject/list/infos', $body, $query = null, $extra = null);
    }

    /**
     * 根据批次 ids 获取采购项目信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchasePileListInfos($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/purchasePile/list/infos', $body, $query = null, $extra = null);
    }

    /**
     * 福联社项目信息列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function purchaseProjectPaging($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/externalPurchaseProject/paging', $body, $query = null, $extra = null);
    }

    /**
     * 福联社奖品根据项目编号查询商品信息
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function listSpecsGoodsInfo($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/externalPurchaseProject/listSpecsGoodsInfo', $body, $query = null, $extra = null);
    }
}
