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
}
