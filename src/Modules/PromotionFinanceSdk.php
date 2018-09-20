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
}
