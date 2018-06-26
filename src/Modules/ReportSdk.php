<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-06-26
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 报表SDK
 * @package Uniondrug\ServiceSdk\Modules
 */
class ReportSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'report';

    /**
     * 读取商户余额排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/balanceAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getBalanceRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/balance", $body);
    }

    /**
     * 读取商户理赔排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/claimIndexAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getClaimRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/claim/index", $body);
    }

    /**
     * 读取商户理赔次数排行
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/RankController/claimTimesAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getClaimTimesRanks($body)
    {
        return $this->restful(static::METHOD_POST, "/rank/claim/times", $body);
    }

    /**
     * 读取客户日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/customerAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/customer", $body);
    }

    /**
     * 读取客户趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/customerAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/customer", $body);
    }

    /**
     * 读取商户日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/merchantAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/merchant", $body);
    }

    /**
     * 读取商户趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/merchantAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/merchant", $body);
    }

    /**
     * 读取项目日增量
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/DailyController/projectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDaily($body)
    {
        return $this->restful(static::METHOD_POST, "/daily/project", $body);
    }

    /**
     * 读取项目趋势
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/TendencyController/projectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/tendency/project", $body);
    }
}
