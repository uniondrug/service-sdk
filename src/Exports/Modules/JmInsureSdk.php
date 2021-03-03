<?php
/**
 * @name   JsArchivesSdk
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
     * 直付理赔单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageController/directGet.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function unionDrugClaimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ipackage/direct/get", $body);
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
     * 理赔单关联保单分页查询
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
     * 理赔单导出理赔数据
     * @link https://git.uniondrug.com/code/1/finance/shares/insure3/blob/development/doc/api/IpackageLogController/page.md
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
}
