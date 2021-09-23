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
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsStatementSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsStatementSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-statement';

    /**
     * 直付结算单-新增
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementCreate($body)
    {
        return $this->restful("POST", "/direct/statement/create", $body);
    }

    /**
     * 直付结算单-列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPaging($body)
    {
        return $this->restful("POST", "/direct/statement/paging", $body);
    }

    /**
     * 直付结算单-导出
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementExport($body)
    {
        return $this->restful("POST", "/direct/statement/export", $body);
    }

    /**
     * 直付结算单-详情
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementDetail($body)
    {
        return $this->restful("POST", "/direct/statement/detail", $body);
    }

    /**
     * 直付结算单-审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementAuditAccept($body)
    {
        return $this->restful("POST", "/direct/statement/audit/accept", $body);
    }

    /**
     * 直付结算单-审核不通过
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementAuditRefuse($body)
    {
        return $this->restful("POST", "/direct/statement/audit/refuse", $body);
    }

    /**
     * 直付结算单-账单汇总
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementPayList($body)
    {
        return $this->restful("POST", "/direct/statement/pay/list", $body);
    }

    /**
     * 直付结算单-统计列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSummaryPaging($body)
    {
        return $this->restful("POST", "/direct/statement/summary/paging", $body);
    }

    /**
     * 直付结算单-订单取消结算
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementOrderCancel($body)
    {
        return $this->restful("POST", "/direct/statement/order/cancel", $body);
    }

    /**
     * 直付结算单-订单取消结算
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementOrderRecover($body)
    {
        return $this->restful("POST", "/direct/statement/order/recover", $body);
    }

    /**
     * 直付结算单-冻结指定核算单位可结算账期
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementDateBlock($body)
    {
        return $this->restful("POST", "/direct/statement/date/block", $body);
    }

    /**
     * 直付结算单-指定核算单位冻结账期列表
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementBlockList($body)
    {
        return $this->restful("POST", "/direct/statement/date/list", $body);
    }

    /**
     * 直付结算单-商业公司审核通过合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSingleAudit($body)
    {
        return $this->restful("POST", "/direct/statement/single/audit", $body);
    }

    /**
     * 直付结算单-商业公司拒绝合并单体店结算单
     * @param $body
     * @return ResponseInterface
     */
    public function directPayoutStatementSingleRefuse($body)
    {
        return $this->restful("POST", "/direct/statement/single/refuse", $body);
    }

    /**
     * 健康服务结算-新增
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementCreate($body)
    {
        return $this->restful("POST", "/healthy/statement/create", $body);
    }

    /**
     * 健康服务结算-详情
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementDetail($body)
    {
        return $this->restful("POST", "/healthy/statement/detail", $body);
    }

    /**
     * 健康服务结算-订单明细添加
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementOrderCreate($body)
    {
        return $this->restful("POST", "/healthy/settlement/create", $body);
    }

    /**
     * 健康服务结算-审核通过
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementAuditAccept($body)
    {
        return $this->restful("POST", "/healthy/statement/audit/accept", $body);
    }

    /**
     * 健康服务结算-审核不通过
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementAuditRefuse($body)
    {
        return $this->restful("POST", "/healthy/statement/audit/refuse", $body);
    }

    /**
     * 健康服务结算-开票销货清单生成
     * @param $body
     * @return ResponseInterface
     */
    public function healthyStatementBillApply($body)
    {
        return $this->restful("POST", "/healthy/bill/apply", $body);
    }
}
