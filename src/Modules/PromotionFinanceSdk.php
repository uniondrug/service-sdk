<?php
/**
 * @author zhaoyue
 * @date   2018-09-13
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 智推用户服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionFinanceSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'promotionFinance';

    /**
     * 创建资金池
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/fund/addFundPool.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addFundPool($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/addFundPool", $body);
    }

    /**
     * 充值资金池
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/fund/recharge.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function recharge($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/recharge", $body);
    }

    /**
     * 查询资金池
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/fund/getFundPool.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getFundPool($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/getFundPool", $body);
    }

    /**
     * 消费资金池
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/fund/consume.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function consume($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/consume", $body);
    }

    /**
     * 添加充值记录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/recharge/addRecharge.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addRecharge($body)
    {
        return $this->restful(static::METHOD_POST, "/recharge/addRecharge", $body);
    }

    /**
     * 生成命中匹配记录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance//bills/addHits.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addHits($body)
    {
        return $this->restful(static::METHOD_POST, "/bills/addHits", $body);
    }

    /**
     * 生成命中匹配记录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance//bills/list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getBillsList($body)
    {
        return $this->restful(static::METHOD_POST, "/bills/getBillsList", $body);
    }

    /**
     * 充值金额审核
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/recharge/approve.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function rechargeApprove($body)
    {
        return $this->restful(static::METHOD_POST, "/recharge/approve", $body);
    }

    /**
     * 积分回调
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/bills/points.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function billsPoints($body)
    {
        return $this->restful(static::METHOD_POST, "/bills/points", $body);
    }

    /**
     * 药品统计信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/bills/drugInfo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function billsDrugInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/bills/drugInfo", $body);
    }

    /**
     * 首页折线图
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/report/lineChart.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function lineChart($body)
    {
        return $this->restful(static::METHOD_POST, "/report/lineChart", $body);
    }

    /**
     * 首页饼图
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/report/pieChart.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pieChart($body)
    {
        return $this->restful(static::METHOD_POST, "/report/pieChart", $body);
    }

    /**
     * 智推报告图表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/report/quota.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function quota($body)
    {
        return $this->restful(static::METHOD_POST, "/report/quota", $body);
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
     * 查看展示次数
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/BillsController/showTimesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function showTimes($body)
    {
        return $this->restful("POST", "/bills/showTimes", $body);
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
     * 开票列表
     * @link https://uniondrug.coding.net/p/module.promotion.finance/git/blob/development/docs/api/InvoiceController/invoicePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invoicePaging($body)
    {
        return $this->restful("POST", "/invoice/invoicePaging", $body);
    }
}