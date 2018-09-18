<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 智推竞价服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionBiddingSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'promotionBidding';

    /**
     * 查看工业商品数量
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/count.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function count($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/count", $body);
    }

    /**
     * 工业维度的商品列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/byMerchantList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function byMerchantList($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/byMerchantList", $body);
    }

    /**
     * 工业维度的商品新增
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function add($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/add", $body);
    }

    /**
     * 工业维度的商品编辑
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function edit($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/edit", $body);
    }

    /**
     * 查看当前商品
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/getMerchantDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchantDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/getMerchantDrug", $body);
    }

    /**
     * 工业商品停产,启用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/changeStatus.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function changeStatus($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/changeStatus", $body);
    }

}
