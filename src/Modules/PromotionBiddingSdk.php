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
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/countDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function countDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/countDrug", $body);
    }

    /**
     * 工业维度的商品列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/getDrugList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDrugList($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/getDrugList", $body);
    }

    /**
     * 工业维度的商品新增
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/addDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/addDrug", $body);
    }

    /**
     * 工业维度的商品编辑
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/editDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/editDrug", $body);
    }

    /**
     * 查看当前商品
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/getDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/getDrug", $body);
    }

    /**
     * 工业商品停产,启用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/changeDrugStatus.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function changeDrugStatus($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/changeDrugStatus", $body);
    }

}
