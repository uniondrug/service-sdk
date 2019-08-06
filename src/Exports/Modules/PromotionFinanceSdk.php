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
 * @date   2019-08-01
 * @time   Thu, 01 Aug 2019 13:58:02 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * PromotionFinanceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionFinanceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'promotion.finance.module';

    /**
     * 申请开票
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/applyInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyInvoice($body)
    {
        return $this->restful("POST", "/invoice/applyInvoice", $body);
    }

    /**
     * 审核开票
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/approveInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveInvoice($body)
    {
        return $this->restful("POST", "/invoice/approveInvoice", $body);
    }

    /**
     * 确认开票
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/confirmInvoiceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function confirmInvoice($body)
    {
        return $this->restful("POST", "/invoice/confirmInvoice", $body);
    }

    /**
     * 查看成交次数
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/BillsController/dealTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dealTimes($body)
    {
        return $this->restful("POST", "/bills/dealTimes", $body);
    }

    /**
     * 获取开票金额详情
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/getInvoiceAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceAmount($body)
    {
        return $this->restful("POST", "/invoice/getInvoiceAmount", $body);
    }

    /**
     * 获取开票详情
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/getInvoiceDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceDetail($body)
    {
        return $this->restful("POST", "/invoice/getInvoiceDetail", $body);
    }

    /**
     * 查询工业资金信息
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/FundController/getMerchantFundInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantFundInfo($body)
    {
        return $this->restful("POST", "/fund/getMerchantFundInfo", $body);
    }

    /**
     * 查询工业充值明细
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/FundController/getMerchantRechargePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantRechargePaging($body)
    {
        return $this->restful("POST", "/fund/getMerchantRechargePaging", $body);
    }

    /**
     * 查询上一个或者下一个充值
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/FundController/getNearlyRechargeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getNearlyRecharge($body)
    {
        return $this->restful("POST", "/fund/getNearlyRecharge", $body);
    }

    /**
     * 获取状态符合的企业id
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/FundController/getStatusMerchantIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStatusMerchantIds($body)
    {
        return $this->restful("POST", "/fund/getStatusMerchantIds", $body);
    }

    /**
     * 获取开票流水
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/invoiceBillsListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceBillsList($body)
    {
        return $this->restful("POST", "/invoice/invoiceBillsList", $body);
    }

    /**
     * 开票列表
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/invoicePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoicePaging($body)
    {
        return $this->restful("POST", "/invoice/invoicePaging", $body);
    }

    /**
     * 确认申请发票信息
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/makeInvoiceInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function makeInvoiceInfo($body)
    {
        return $this->restful("POST", "/invoice/makeInvoiceInfo", $body);
    }

    /**
     * 充值详情
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/RechargeController/rechargeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rechargeDetail($body)
    {
        return $this->restful("POST", "/recharge/rechargeDetail", $body);
    }

    /**
     * 设置开票金额
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/setInvoiceAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setInvoiceAmount($body)
    {
        return $this->restful("POST", "/invoice/setInvoiceAmount", $body);
    }

    /**
     * 查看展示次数
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/BillsController/showTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function showTimes($body)
    {
        return $this->restful("POST", "/bills/showTimes", $body);
    }
}
