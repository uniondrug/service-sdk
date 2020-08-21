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
 * @date   2020-08-17
 * @time   Mon, 17 Aug 2020 14:16:47 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CompensateSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CompensateSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'compensate.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizeCreate($body)
    {
        return $this->restful("POST", "/authorize/create", $body);
    }

    /**
     * 取消授权
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizeDelete($body)
    {
        return $this->restful("POST", "/authorize/delete", $body);
    }

    /**
     * LIST列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizeList($body)
    {
        return $this->restful("POST", "/authorize/list", $body);
    }

    /**
     * PAGING列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function authorizePaging($body)
    {
        return $this->restful("POST", "/authorize/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function BillConfirmCreate($body)
    {
        return $this->restful("POST", "/billConfirm/create", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function BillConfirmList($body)
    {
        return $this->restful("POST", "/billConfirm/list", $body);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/CustomerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function customerPaging($body)
    {
        return $this->restful("POST", "/customer/paging", $body);
    }

    /**
     * 未激活权益列表（未激活的兑换码列表）
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/EquityController/codePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityCode($body)
    {
        return $this->restful("POST", "/equity/code", $body);
    }

    /**
     * 用户管理权益列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/EquityController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityPaging($body)
    {
        return $this->restful("POST", "/equity/paging", $body);
    }

    /**
     * 智赔导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Project/UserController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportCdCodeSql($body)
    {
        return $this->restful("POST", "/project/user/export/cdcode/sql", $body);
    }

    /**
     * 通过主订单号获取激活权益信息
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/getActiveByOrderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActiveByOrderNo($body)
    {
        return $this->restful("POST", "/ie/guarantees/getActiveByOrderNo", $body);
    }

    /**
     * 智赔兑换码列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Project/UserController/getCompensateUserPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCompensateUserPaging($body)
    {
        return $this->restful("POST", "/project/user/compensate/paging", $body);
    }

    /**
     * 通过sku获取产品信息和保障信息
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/getProductBySkuAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProductBySku($body)
    {
        return $this->restful("POST", "/ie/product/getProductBySku", $body);
    }

    /**
     * 根据订单筛选条件获取SPUNos
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/getSPUNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSPUNos($body)
    {
        return $this->restful("POST", "/ie/product/getSPUNOs", $body);
    }

    /**
     * 权益
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/GroupController/equityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupEquityStatistic($body)
    {
        return $this->restful("POST", "/group/statistic/equity", $body);
    }

    /**
     * 新增渠道
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeChannelController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieChannelCreate($body)
    {
        return $this->restful("POST", "/ie/channel/create", $body);
    }

    /**
     * 渠道详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeChannelController/DetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieChannelDetail($body)
    {
        return $this->restful("POST", "/ie/channel/detail", $body);
    }

    /**
     * 激活订阅
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesActive($body)
    {
        return $this->restful("POST", "/ie/guarantees/active", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesCreate($body)
    {
        return $this->restful("POST", "/ie/guarantees/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesDelete($body)
    {
        return $this->restful("POST", "/ie/guarantees/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesDetail($body)
    {
        return $this->restful("POST", "/ie/guarantees/detail", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesDisable($body)
    {
        return $this->restful("POST", "/ie/guarantees/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesEnable($body)
    {
        return $this->restful("POST", "/ie/guarantees/enable", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/incrSaleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesIncrSales($body)
    {
        return $this->restful("POST", "/ie/guarantees/incr/sale", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesListing($body)
    {
        return $this->restful("POST", "/ie/guarantees/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesPaging($body)
    {
        return $this->restful("POST", "/ie/guarantees/paging", $body);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/statusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesStatusList($body)
    {
        return $this->restful("POST", "/ie/guarantees/status/list", $body);
    }

    /**
     * 修改保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesUpdate($body)
    {
        return $this->restful("POST", "/ie/guarantees/update", $body);
    }

    /**
     * 更新SKU
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/updateSkuAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieGuaranteesUpdateSku($body)
    {
        return $this->restful("POST", "/ie/guarantees/update/sku", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeOrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieOrderCreate($body)
    {
        return $this->restful("POST", "/ieOrder/create", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageCreate($body)
    {
        return $this->restful("POST", "/ie/package/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageDelete($body)
    {
        return $this->restful("POST", "/ie/package/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageDetail($body)
    {
        return $this->restful("POST", "/ie/package/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupCreate($body)
    {
        return $this->restful("POST", "/ie/package/group/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupDelete($body)
    {
        return $this->restful("POST", "/ie/package/group/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupDetail($body)
    {
        return $this->restful("POST", "/ie/package/group/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupListing($body)
    {
        return $this->restful("POST", "/ie/package/group/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupPaging($body)
    {
        return $this->restful("POST", "/ie/package/group/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGroupUpdate($body)
    {
        return $this->restful("POST", "/ie/package/group/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeCreate($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDelete($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDetail($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeListing($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteePaging($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageGuaranteeUpdate($body)
    {
        return $this->restful("POST", "/ie/package/guarantee/update", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageListing($body)
    {
        return $this->restful("POST", "/ie/package/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackagePaging($body)
    {
        return $this->restful("POST", "/ie/package/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function iePackageUpdate($body)
    {
        return $this->restful("POST", "/ie/package/update", $body);
    }

    /**
     * 新增项目商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductAddGoods($body)
    {
        return $this->restful("POST", "/ie/product/addGoods", $body);
    }

    /**
     * 新增保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addGuaranteesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductAddGuarantees($body)
    {
        return $this->restful("POST", "/ie/product/addGuarantees", $body);
    }

    /**
     * 增加销量和销售额
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addSaleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductAddSale($body)
    {
        return $this->restful("POST", "/ie/product/addSale", $body);
    }

    /**
     * 修改商品状态
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/changeStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductChangeStatus($body)
    {
        return $this->restful("POST", "/ie/product/changeStatus", $body);
    }

    /**
     * 新增商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductCreate($body)
    {
        return $this->restful("POST", "/ie/product/create", $body);
    }

    /**
     * 删除项目商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/deleteGoodsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductDeleteGoods($body)
    {
        return $this->restful("POST", "/ie/product/deleteGoods", $body);
    }

    /**
     * 删除保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/deleteGuaranteesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductDeleteGuarantees($body)
    {
        return $this->restful("POST", "/ie/product/deleteGuarantees", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductDetail($body)
    {
        return $this->restful("POST", "/ie/product/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductPaging($body)
    {
        return $this->restful("POST", "/ie/product/paging", $body);
    }

    /**
     * 修改商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductUpdate($body)
    {
        return $this->restful("POST", "/ie/product/update", $body);
    }

    /**
     * 保障修改价格，修改对应商品成本价
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateCostPriceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductUpdateCostPrice($body)
    {
        return $this->restful("POST", "/ie/product/updateCostPrice", $body);
    }

    /**
     * 上架后修改分销 goodsId & dstGoodsId
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateDstGoodsIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductUpdateDstGoodsId($body)
    {
        return $this->restful("POST", "/ie/product/updateDstGoodsId", $body);
    }

    /**
     * 修改SkuNo
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateSkuNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieProductUpdateSkuNo($body)
    {
        return $this->restful("POST", "/ie/product/updateSkuNo", $body);
    }

    /**
     * 新增登录日志
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeUserLoginController/userLoginLogAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ieUserLoginLog($body)
    {
        return $this->restful("POST", "/ie/userLoginLog", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceBindList($body)
    {
        return $this->restful("POST", "/insurance/bind/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceCreate($body)
    {
        return $this->restful("POST", "/insurance/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceDetail($body)
    {
        return $this->restful("POST", "/insurance/detail", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceDisable($body)
    {
        return $this->restful("POST", "/insurance/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insuranceEnable($body)
    {
        return $this->restful("POST", "/insurance/enable", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function insurancePaging($body)
    {
        return $this->restful("POST", "/insurance/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsCreate($body)
    {
        return $this->restful("POST", "/logs/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logsPaging($body)
    {
        return $this->restful("POST", "/logs/paging", $body);
    }

    /**
     * 新增扣款记录
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentCreate($body)
    {
        return $this->restful("POST", "/payment/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentDetail($body)
    {
        return $this->restful("POST", "/payment/detail", $body);
    }

    /**
     * 根据条件筛选无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentListing($body)
    {
        return $this->restful("POST", "/payment/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentPaging($body)
    {
        return $this->restful("POST", "/payment/paging", $body);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/sqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentSql($body)
    {
        return $this->restful("POST", "/payment/sql", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paymentUpdate($body)
    {
        return $this->restful("POST", "/payment/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerAssignCreate($body)
    {
        return $this->restful("POST", "/powerAssign/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerAssignDelete($body)
    {
        return $this->restful("POST", "/powerAssign/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerAssignDetail($body)
    {
        return $this->restful("POST", "/powerAssign/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerAssignPaging($body)
    {
        return $this->restful("POST", "/powerAssign/paging", $body);
    }

    /**
     * 理赔列表是否可以查看,扣款是否可以操作
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerCheck($body)
    {
        return $this->restful("POST", "/powerAssign/check", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerDetail($body)
    {
        return $this->restful("POST", "/power/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerLogController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerLogCreate($body)
    {
        return $this->restful("POST", "/powerLog/create", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerPaging($body)
    {
        return $this->restful("POST", "/power/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function powerUpdate($body)
    {
        return $this->restful("POST", "/power/update", $body);
    }

    /**
     * 激活曲线图
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/activateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectActivateStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/activate", $body);
    }

    /**
     * merchantIds获取项目数
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectByMerchantIdsAndMonthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectByMerchantIdsAndMonth($body)
    {
        return $this->restful("POST", "/project/projectByMerchantIdsAndMonth", $body);
    }

    /**
     * 理赔柱状图
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/claimChartAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectClaimChartStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/claim/chart", $body);
    }

    /**
     * 理赔概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectClaimStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/claim", $body);
    }

    /**
     * 消费概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectConsumeStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/consume", $body);
    }

    /**
     * customerIds获取项目数
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectCountByCustomerIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectCountByCustomerId($body)
    {
        return $this->restful("POST", "/project/countByCustomerId", $body);
    }

    /**
     * 权益概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/equityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectEquityStatistic($body)
    {
        return $this->restful("POST", "/project/statistic/equity", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectList($body)
    {
        return $this->restful("POST", "/project/list", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemListing($body)
    {
        return $this->restful("POST", "/redeem/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportCreate($body)
    {
        return $this->restful("POST", "/report/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportDetail($body)
    {
        return $this->restful("POST", "/report/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportPaging($body)
    {
        return $this->restful("POST", "/report/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportUpdate($body)
    {
        return $this->restful("POST", "/report/update", $body);
    }

    /**
     * 审核提交
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeReviewController/CommitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reviewCommit($body)
    {
        return $this->restful("POST", "/ie/review/commit", $body);
    }

    /**
     * 最近一条记录审核结果
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeReviewController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reviewDetail($body)
    {
        return $this->restful("POST", "/ie/review/detail", $body);
    }

    /**
     * 将权益中心返回的保障ID和gurCode更新到智赔保障表里
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/savePackageInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function savePackageInfo($body)
    {
        return $this->restful("POST", "/ie/guarantees/savePackageInfo", $body);
    }

    /**
     * 解绑
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/unbindAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unbindInsuranceBind($body)
    {
        return $this->restful("POST", "/insurance/bind/unbind", $body);
    }

    /**
     * 通过手机号查看竞标系统账号权限
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/WorkerController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function workerInfo($body)
    {
        return $this->restful("POST", "/worker/workerInfo", $body);
    }
}
