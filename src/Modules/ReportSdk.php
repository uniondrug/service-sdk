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
     * 读取客户下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/district", $body);
    }

    /**
     * 读取客户下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/drugs", $body);
    }

    /**
     * 读取客户统计明细
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/CustomerController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/info", $body);
    }

    /**
     * 读取客户下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/customerSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/customer/scene", $body);
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
     * 读取商户下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/district", $body);
    }

    /**
     * 读取商户下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/drugs", $body);
    }

    /**
     * 读取商户下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/merchantSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/merchant/scene", $body);
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
     * 读取项目下的权益, 消费时区域分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectDistrictAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDistrictPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/district", $body);
    }

    /**
     * 读取项目下的权益, 消费时药品类型分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectDrugsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDrugsPartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/drugs", $body);
    }

    /**
     * 读取项目统计明细
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/ProjectController/infoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/project/info", $body);
    }

    /**
     * 读取项目下的权益, 消费时应用场景(线上/线下)分布
     * @link https://uniondrug.coding.net/p/module.report/git/blob/development/docs/api/PartitionController/projectSceneAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectScenePartition($body)
    {
        return $this->restful(static::METHOD_POST, "/partition/project/scene", $body);
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
