<?php
/**
 * @name   JmInsureSdk
 * @date   2021-02-02
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JmInsureSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'jm.insure';

    /**
     * 直付理赔单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/directGet.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/get", $body);
    }

    /**
     * 直付理赔单分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/directPage.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/page", $body);
    }

    /**
     * 直付理赔单列表页导出
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.5.1/doc/api/IpackageController/directExport.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/export", $body);
    }

    /**
     * 理赔单关联保单分页查询 理赔回款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackagePolicyController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimPolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackagePolicy/page", $body);
    }

    /**
     * 理赔单关联保单收款认领
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackagePolicyController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyReceipt($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackagePolicy/receipt", $body);
    }

    /**
     * 资金收款单分页查询
     * @link https://git.uniondrug.com/code/1/finance/js-coin/blob/master/docs-api/uniondrug-coin-service/ReceiptController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function receiptPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/receipt/page", $body);
    }

    /**
     * 创建直付理赔单草稿
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/directSave.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/save", $body);
    }

    /**
     * 直付理赔单添加开票单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/updateDirectAddBills.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimUpdateBills($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/updateDirectAddBills", $body);
    }

    /**
     * 直付理赔单移除开票单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/updateDirectRemoveBills.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function directClaimRemoveBills($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/updateDirectRemoveBills", $body);
    }

    /**
     * 药联理赔单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/directGet.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/get", $body);
    }

    /**
     * 药联理赔单分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/uniondrugPage.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/page", $body);
    }

    /**
     * 药联理赔单列表导出
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_1.1/doc/api/IpackageController/uniondrugExport.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/export", $body);
    }

    /**
     * 药联理赔单创建
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/uniondrugSave.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/save", $body);
    }

    /**
     * 药联理赔单收款申请
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/uniondrugReceiptSave.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimReceiptApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/receiptSave", $body);
    }

    /**
     * 药联理赔单开票申请
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/uniondrugInvoiceApply.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimBillApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/uniondrug/invoiceApply", $body);
    }

    /**
     * 分页查询可发起药联理赔的保单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageUniondrugPolicy.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimPolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pageUniondrugPolicy", $body);
    }

    /**
     * 待理赔池汇总分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PoolClaimSummaryController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function poolClaimSummaryPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/poolClaimSummary/page", $body);
    }

    /**
     * 理赔数据分页查询（只查询未取消的理赔数据）理赔情况查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/ClaimController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/page", $body);
    }

    /**
     * 理赔单关联订单分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageOrderController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackageOrder/page", $body);
    }

    /**
     * 理赔单关联商品分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageOrderController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equityGoods/page", $body);
    }

    /**
     * 理赔操作日志分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageLogController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackageLog/page", $body);
    }

    /**
     * 提交理赔单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/commit.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimSubmit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/commit", $body);
    }

    /**
     * 撤销理赔单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/undo.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimUndo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/undo", $body);
    }

    /**
     * 完成赔付理赔单
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/complete.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function claimComplete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/complete", $body);
    }

    /**
     * 理赔单导出理赔数据
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageLogController/exportClaim.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function exportClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/exportClaim", $body);
    }

    /**
     * 导出指定类型理赔数据
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageLogController/exportClaim.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function exportClaimSheet($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/exportClaimSheet", $body);
    }

    /**
     * 方案创建
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/save.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/save", $body);
    }

    /**
     * 方案更新
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/update.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/update", $body);
    }

    /**
     * 方案详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/get.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/get", $body);
    }

    /**
     * 获取方案编号
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/getSchemeNo.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getSchemeNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/getSchemeNo", $body);
    }

    /**
     * 方案分页
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/page", $body);
    }

    /**
     * 方案移出
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/remove.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/remove", $body);
    }

    /**
     * 启用方案
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/enable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/enable", $body);
    }

    /**
     * 停用方案
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeController/disable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/disable", $body);
    }

    /**
     * 保存分配保司
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/save.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/save", $body);
    }

    /**
     * 更新分配保司
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/update.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/update", $body);
    }

    /**
     * 方案关联保司组分页
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/page", $body);
    }

    /**
     * 方案关联保司组详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/get.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/get", $body);
    }

    /**
     * 删除方案关联保司组
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/remove.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/remove", $body);
    }

    /**
     * 启用方案关联保司组
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/enable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/enable", $body);
    }

    /**
     * 停用方案关联保司组
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/SchemeInsurerController/disable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function schemeInsurerDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/schemeInsurer/disable", $body);
    }

    /**
     * 投保流量额
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/InsureController/pool.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function estimateAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insure/pool", $body);
    }

    /**
     * 保单分页列表
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/page", $body);
    }

    /**
     * 保单新增
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/save.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/save", $body);
    }

    /**
     * 保单新增并发起审批
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/saveAndApproval.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyCreateAndApproval($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/saveAndApproval", $body);
    }

    /**
     * 保单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/get.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/get", $body);
    }

    /**
     * 保单编辑
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/update.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/update", $body);
    }

    /**
     * 保单编辑并发起审批
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/updateAndApproval.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyUpdateAndApproval($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/updateAndApproval", $body);
    }

    /**
     * 保单编辑并提交
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/updateAndSubmit.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyUpdateAndSubmit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/updateAndSubmit", $body);
    }

    /**
     * 保单变更
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/change.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyModify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/change", $body);
    }

    /**
     * 已变更保单列表
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageChange.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyModifiedPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pagePolicyChange", $body);
    }

    /**
     * 已变更保单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/changeDetail.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyModifiedDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/policyChangeDetail", $body);
    }

    /**
     * 保单删除
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/remove.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/remove", $body);
    }

    /**
     * 保单审批
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/check.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/check", $body);
    }

    /**
     * 保单关闭
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/close.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyClose($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/close", $body);
    }

    /**
     * 保单关闭确认
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/closeConfirm.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyCloseConfirm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/closeConfirm", $body);
    }

    /**
     * 保单生效
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/enable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/enable", $body);
    }

    /**
     * 保单失效
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/disable.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/disable", $body);
    }

    /**
     * 数据化理赔下载
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/policyDataDownload.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyDataDownload($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/policyDataDownload", $body);
    }

    /**
     * 理赔情况下载
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/exportPolicyClaimSummary.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function exportPolicyClaimSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/exportPolicyClaimSummary", $body);
    }

    /**
     * 保单付款计划
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyPayController/list.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyPayPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyPay/list", $body);
    }

    /**
     * 保费手费费用
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyProceduresController/list.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyProceduresPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyProcedures/list", $body);
    }

    /**
     * 保单日志列表
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyOperationRecordController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyOperationRecord/page", $body);
    }

    /**
     * 投保保单池分页查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/InsurePolicyController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurePolicyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurePolicy/page", $body);
    }

    /**
     * 分页查询保单理赔款收款银行流水明细
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageReceiptBankItem.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyReceiptPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pageReceiptBankItem", $body);
    }

    /**
     * 分页查询费用应收
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageFee.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyFeePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pageFee", $body);
    }

    /**
     * 理赔管理/保单回款/理赔回款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/ReparationsReceiptController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reparationsReceiptPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reparationsReceipt/page", $body);
    }

    /**
     * 保司代扣 查询
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageInsuranceCompanyWithhold.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function insurerWithholdPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurerWithhold/page", $body);
    }

    /**
     * 获取保单收款统计数据
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/getIncome.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyIncomeStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/income/get", $body);
    }

    /**
     * 保单费用开票申请
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/invoiceApply.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyBillApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/invoiceApply", $body);
    }

    /**
     * 保单费用应收创建收款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/FeeReceiptController/save.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyReceiptApply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/feeReceipt/save", $body);
    }

    /**
     * 创建保单（TPA和PBM)
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/saveForEquity.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policySaveForEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/saveForEquity", $body);
    }

    /**
     * 根据保司id、保单号 获取保单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/getByInsurerIdAndPolicyNo.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyDetailByInsurerIdAndPolicyNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/getByInsurerIdAndPolicyNo", $body);
    }

    /**
     * 变更项目信息（TPA和PBM)
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/changeProject.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyChangeProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/changeProject", $body);
    }

    /**
     * 统计保司保单数和保费总额
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/getInsurerPolicyStat.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyInsurerStat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/getInsurerPolicyStatCO", $body);
    }

    /**
     * 保司保单分页
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageStat.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyPagingInsurer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pageStat", $body);
    }

    /**
     * 首页关联查询保单支付计划列表
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyPayController/indexList.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyPayIndexList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyPay/index/list", $body);
    }

    /**
     * 分页查询保单理赔收款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/PolicyController/pageClaimAmount.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyClaimAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/pageClaimAmount", $body);
    }

    /**
     * 待办事项功能
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/BackLogRecordController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function backLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/backLog/page", $body);
    }

    /**
     * 查询保单的手续费开票申请业务单号
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/FeeApplyBillController/pageApplyNo.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getApplyNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/feeApplyBill/getApplyNo", $body);
    }

    /**
     * 理赔回款银行交易流水认领明细 API
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.5/doc/api/ReparationsReceiptBankItemController/pageApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reparationsReceiptBankItemPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reparationsReceiptBankItem/page", $body);
    }

    /**
     * 继续创建已收认领理赔回款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.5/doc/api/ReparationsReceiptController/continueReceiptApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reparationsReceiptContinueReceipt($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reparationsReceipt/continueReceipt", $body);
    }

    /**
     * 批量继续创建已收认领理赔回款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.5/doc/api/ReparationsReceiptController/batchContinueReceiptApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reparationsReceiptBatchContinueReceipt($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reparationsReceipt/batchContinueReceipt", $body);
    }

    /**
     * 批量修改订单支付日期
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.5/doc/api/ReparationsReceiptController/batchContinueReceiptApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function batchUpdatePaidTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mbs/order/update/orderPaidTime", $body);
    }

    /**
     * 配置保单策略
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_strategy_update/doc/api/PolicyController/configurationPolicyStrategy.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function policyConfigurationPolicyStrategy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policy/configurationPolicyStrategy", $body);
    }

    /**
     * 创建保障投保
     * @param $body
     * @return ResponseInterface
     */
    public function guaranteeInsureSave($body)
    {
        return $this->restful("POST", "/guaranteeInsure/save", $body);
    }

    /**
     * 创建保障理赔
     * @param $body
     * @return ResponseInterface
     */
    public function guaranteeClaimSave($body)
    {
        return $this->restful("POST", "/guaranteeClaim/save", $body);
    }

    /**
     * 根据保障理赔单号保存支付信息
     * @param $body
     * @return ResponseInterface
     */
    public function guaranteeClaimPaySaveByGuarantee($body)
    {
        return $this->restful("POST", "/guaranteeClaimPay/saveByGuarantee", $body);
    }

    /**
     * 保费手费费用
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_feeReceipt_optimization/doc/api/PolicyProceduresController/listFeeBill.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function premiumFeePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/policyProcedures/listFeeBill", $body);
    }

    /**
     * 药联公司列表
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_3.12/doc/api/InsureController/pageCompany.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function companyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insure/pageCompany", $body);
    }
    
    /**
     * 分页查询核算单位下赔案回款
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_14212/doc/api/IpackageOrderController/reportPage.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reportPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackageOrder/reportPage", $body);
    }

    /**
     * 分页查询核算单位下赔案回款开票单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/feature_14212/doc/api/IpackageOrderController/reportBillPage.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reportBillPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackageOrder/reportBillPage", $body);
    }
}
