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

    /**
     * 智推推广服务
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/service/getPromotion.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getPromotion($body)
    {
        return $this->restful(static::METHOD_POST, "/service/getPromotion", $body);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/project/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/add", $body);
    }

    /**
     * 修改项目名称
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/project/editName.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editProjectName($body)
    {
        return $this->restful(static::METHOD_POST, "/project/editName", $body);
    }

    /**
     * 开启项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/project/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function projectEnable($body)
    {
        return $this->restful(static::METHOD_POST, "/project/enable", $body);
    }

    /**
     * 关闭项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/project/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function projectDisable($body)
    {
        return $this->restful(static::METHOD_POST, "/project/disable", $body);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/project/getList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectList($body)
    {
        return $this->restful(static::METHOD_POST, "/project/getList", $body);
    }

    /**
     * 配置方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setScheme($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/set", $body);
    }

    /**
     * 关联商品
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/relateDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function relateSchemeDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/relateDrug", $body);
    }

    /**
     * 移除关联商品
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/deleteDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function deleteSchemeDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/deleteDrug", $body);
    }

    /**
     * 查询关联商品
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/getList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getSchemeList($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getList", $body);
    }

    /**
     * 投放预估
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/predict.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function predictScheme($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/predict", $body);
    }

    /**
     * 商品方案维度列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/getDrugList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getSchemeDrugList($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getDrugList", $body);
    }

    /**
     * 商品项目维度列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/getProjectDrugList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectDrugList($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getProjectDrugList", $body);
    }

    /**
     * 方案审核
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/approve.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function approveScheme($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/approve", $body);
    }

    /**
     * 工业商品关联项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/relateProject.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function relateProject($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/relateProject", $body);
    }

    /**
     * 工业商品关联项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/get.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getScheme($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/get", $body);
    }

    /**
     * 方案启用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enable($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/enable", $body);
    }

    /**
     * 方案停用
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disable($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/disable", $body);
    }

    /**
     * 工业维度停用方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/scheme/merchantDisable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableMerchantSchemes($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/merchantDisable", $body);
    }

    /**
     * 工业商品初始化
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/bidding/drug/initDrug.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function initDrug($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/initDrug", $body);
    }

    /**
     * 工业维度的商品列表(给后台使用的)
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/getDrugPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDrugPaging($body)
    {
        return $this->restful("POST", "/drug/getDrugPaging", $body);
    }

    /**
     * 审核药品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/approveDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveDrug($body)
    {
        return $this->restful("POST", "/OperaBack/approveDrug", $body);
    }

}
