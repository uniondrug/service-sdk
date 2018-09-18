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
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/finance/fund/createFundPool.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createFundPool($body)
    {
        return $this->restful(static::METHOD_POST, "/fund/createFundPool", $body);
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
}
