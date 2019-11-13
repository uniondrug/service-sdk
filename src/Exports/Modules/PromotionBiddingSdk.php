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
 * @date   2019-04-08
 * @time   Mon, 08 Apr 2019 15:03:33 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PromotionBiddingSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionBiddingSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'promotion.bidding.module';

    /**
     * 工业维度的商品新增
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/addDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addDrug($body)
    {
        return $this->restful("POST", "/drug/addDrug", $body);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ProjectController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful("POST", "/project/add", $body);
    }

    /**
     * 审核药品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/approveDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveDrug($body)
    {
        return $this->restful("POST", "/operaBack/approveDrug", $body);
    }

    /**
     * 审核方案
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/approveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveScheme($body)
    {
        return $this->restful("POST", "/scheme/approve", $body);
    }

    /**
     * 审核方案话术
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/approveSchemeWordAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approveSchemeWord($body)
    {
        return $this->restful("POST", "/operaBack/approveSchemeWord", $body);
    }

    /**
     * 查看工业商品数量
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/countDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countDrug($body)
    {
        return $this->restful("POST", "/drug/countDrug", $body);
    }

    /**
     * 移除关联商品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/deleteDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteSchemeDrug($body)
    {
        return $this->restful("POST", "/scheme/deleteDrug", $body);
    }

    /**
     * 方案停用
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disable($body)
    {
        return $this->restful("POST", "/scheme/disable", $body);
    }

    /**
     * 工业维度停用方案
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/merchantDisableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableMerchantSchemes($body)
    {
        return $this->restful("POST", "/scheme/merchantDisable", $body);
    }

    /**
     * 获取商品关联方案和竞价方案详情
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/drugsSchemeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugsSchemeDetail($body)
    {
        return $this->restful("POST", "/operaBack/drugsSchemeDetail", $body);
    }

    /**
     * 投放方案管理
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/drugsSchemePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugsSchemePaging($body)
    {
        return $this->restful("POST", "/operaBack/drugsSchemePaging", $body);
    }

    /**
     * 工业维度的商品编辑
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/editMerchantDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editDrug($body)
    {
        return $this->restful("POST", "/drug/editDrug", $body);
    }

    /**
     * 修改项目名称
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ProjectController/editNameAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editProjectName($body)
    {
        return $this->restful("POST", "/project/editName", $body);
    }

    /**
     * 查看当前商品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/getDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDrug($body)
    {
        return $this->restful("POST", "/drug/getDrug", $body);
    }

    /**
     * 工业维度的商品列表
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/getDrugListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDrugList($body)
    {
        return $this->restful("POST", "/drug/getDrugList", $body);
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
     * 商品方案维度列表
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/getProjectDrugListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectDrugList($body)
    {
        return $this->restful("POST", "/scheme/getProjectDrugList", $body);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ProjectController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectList($body)
    {
        return $this->restful("POST", "/project/getList", $body);
    }

    /**
     * 查询推广药品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ServiceController/getPromotionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPromotion($body)
    {
        return $this->restful("POST", "/service/getPromotion", $body);
    }

    /**
     * 方案初始化数据
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/getAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getScheme($body)
    {
        return $this->restful("POST", "/scheme/get", $body);
    }

    /**
     * 获取单个药品方案详情
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/OperaBackController/getSchemeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSchemeDetail($body)
    {
        return $this->restful("POST", "/operaBack/getSchemeDetail", $body);
    }

    /**
     * 商品方案维度列表
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/getDrugListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSchemeDrugList($body)
    {
        return $this->restful("POST", "/scheme/getDrugList", $body);
    }

    /**
     * 查询关联商品
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSchemeList($body)
    {
        return $this->restful("POST", "/scheme/getList", $body);
    }

    /**
     * 投放预估
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/predictAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function predictScheme($body)
    {
        return $this->restful("POST", "/scheme/predict", $body);
    }

    /**
     * 关闭项目
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ProjectController/closeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectDisable($body)
    {
        return $this->restful("POST", "/project/disable", $body);
    }

    /**
     * 开启项目
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/ProjectController/openAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectEnable($body)
    {
        return $this->restful("POST", "/project/enable", $body);
    }

    /**
     * 工业商品关联项目
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/DrugController/relateProjectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function relateProject($body)
    {
        return $this->restful("POST", "/drug/relateProject", $body);
    }

    /**
     * 关联商品,新增方案
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/relateDrugAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function relateSchemeDrug($body)
    {
        return $this->restful("POST", "/scheme/relateDrug", $body);
    }

    /**
     * 配置方案
     * @link https://uniondrug.coding.net/p/module.bidding.promotion/git/blob/development/docs/api/SchemeController/setAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setScheme($body)
    {
        return $this->restful("POST", "/scheme/set", $body);
    }
}
