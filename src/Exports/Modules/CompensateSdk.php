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
 * @date   2020-09-30
 * @time   Wed, 30 Sep 2020 17:34:20 +0800
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
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function authorizeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/authorize/create", $body, $query, $extra);
    }

    /**
     * 取消授权
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function authorizeDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/authorize/delete", $body, $query, $extra);
    }

    /**
     * LIST列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function authorizeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/authorize/list", $body, $query, $extra);
    }

    /**
     * PAGING列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/AuthorizeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function authorizePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/authorize/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function BillConfirmCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/billConfirm/create", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BillConfirmController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function BillConfirmList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/billConfirm/list", $body, $query, $extra);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createInsuranceBind($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/bind/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/CustomerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function customerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/paging", $body, $query, $extra);
    }

    /**
     * 未激活权益列表（未激活的兑换码列表）
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/EquityController/codePagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/code", $body, $query, $extra);
    }

    /**
     * 用户管理权益列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/EquityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/paging", $body, $query, $extra);
    }

    /**
     * 智赔导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Project/UserController/exportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportCdCodeSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/user/export/cdcode/sql", $body, $query, $extra);
    }

    /**
     * 通过主订单号获取激活权益信息
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/getActiveByOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getActiveByOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/getActiveByOrderNo", $body, $query, $extra);
    }

    /**
     * 统计某个批次发放结果
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemUserController/getBatchResultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getBatchResult($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemUser/getBatchResult", $body, $query, $extra);
    }

    /**
     * 智赔兑换码列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Project/UserController/getCompensateUserPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getCompensateUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/user/compensate/paging", $body, $query, $extra);
    }

    /**
     * 通过sku获取产品信息和保障信息
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/getProductBySkuAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProductBySku($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/getProductBySku", $body, $query, $extra);
    }

    /**
     * 根据订单筛选条件获取SPUNos
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/getSPUNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSPUNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/getSPUNOs", $body, $query, $extra);
    }

    /**
     * 权益
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/GroupController/equityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupEquityStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/statistic/equity", $body, $query, $extra);
    }

    /**
     * 新增渠道
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeChannelController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieChannelCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/channel/create", $body, $query, $extra);
    }

    /**
     * 渠道详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeChannelController/DetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieChannelDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/channel/detail", $body, $query, $extra);
    }

    /**
     * 激活订阅
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/activeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesActive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/active", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/detail", $body, $query, $extra);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/disable", $body, $query, $extra);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/enable", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/incrSaleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesIncrSales($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/incr/sale", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/paging", $body, $query, $extra);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/statusListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesStatusList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/status/list", $body, $query, $extra);
    }

    /**
     * 修改保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/update", $body, $query, $extra);
    }

    /**
     * 更新SKU
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/updateSkuAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieGuaranteesUpdateSku($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/update/sku", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeOrderController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieOrderCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ieOrder/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGroupController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGroupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/group/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteeListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageGuaranteeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageGuaranteeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/guarantee/update", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IePackageController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function iePackageUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/package/update", $body, $query, $extra);
    }

    /**
     * 新增项目商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductAddGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/addGoods", $body, $query, $extra);
    }

    /**
     * 新增保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addGuaranteesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductAddGuarantees($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/addGuarantees", $body, $query, $extra);
    }

    /**
     * 增加销量和销售额
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/addSaleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductAddSale($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/addSale", $body, $query, $extra);
    }

    /**
     * 修改商品状态
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductChangeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/changeStatus", $body, $query, $extra);
    }

    /**
     * 新增商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/create", $body, $query, $extra);
    }

    /**
     * 删除项目商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/deleteGoodsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductDeleteGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/deleteGoods", $body, $query, $extra);
    }

    /**
     * 删除保障
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/deleteGuaranteesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductDeleteGuarantees($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/deleteGuarantees", $body, $query, $extra);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/paging", $body, $query, $extra);
    }

    /**
     * 修改商品
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/update", $body, $query, $extra);
    }

    /**
     * 保障修改价格，修改对应商品成本价
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateCostPriceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductUpdateCostPrice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/updateCostPrice", $body, $query, $extra);
    }

    /**
     * 上架后修改分销 goodsId & dstGoodsId
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateDstGoodsIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductUpdateDstGoodsId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/updateDstGoodsId", $body, $query, $extra);
    }

    /**
     * 修改SkuNo
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeProductController/updateSkuNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieProductUpdateSkuNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/product/updateSkuNo", $body, $query, $extra);
    }

    /**
     * 新增登录日志
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeUserLoginController/userLoginLogAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ieUserLoginLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/userLoginLog", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insuranceBindList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/bind/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insuranceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insuranceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/detail", $body, $query, $extra);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insuranceDisable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/disable", $body, $query, $extra);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insuranceEnable($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/enable", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function insurancePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/LogsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/logs/paging", $body, $query, $extra);
    }

    /**
     * 新增扣款记录
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/detail", $body, $query, $extra);
    }

    /**
     * 根据条件筛选无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/paging", $body, $query, $extra);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/sqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/sql", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function paymentUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerAssignCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerAssign/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerAssignDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerAssign/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerAssignDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerAssign/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerAssignPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerAssign/paging", $body, $query, $extra);
    }

    /**
     * 理赔列表是否可以查看,扣款是否可以操作
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerAssignController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerAssign/check", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/power/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/powerLog/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/power/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PowerController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function powerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/power/update", $body, $query, $extra);
    }

    /**
     * 激活曲线图
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/activateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectActivateStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic/activate", $body, $query, $extra);
    }

    /**
     * merchantIds获取项目数
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectByMerchantIdsAndMonthAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectByMerchantIdsAndMonth($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/projectByMerchantIdsAndMonth", $body, $query, $extra);
    }

    /**
     * 获取执行中项目数量
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectCountByProjectIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectCountByProjectIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/projectCountByProjectIds", $body, $query, $extra);
    }

    /**
     * 理赔柱状图
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/claimChartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectClaimChartStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic/claim/chart", $body, $query, $extra);
    }

    /**
     * 理赔概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/claimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectClaimStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic/claim", $body, $query, $extra);
    }

    /**
     * 消费概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/consumeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectConsumeStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic/consume", $body, $query, $extra);
    }

    /**
     * customerIds获取项目数
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/projectCountByCustomerIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectCountByCustomerId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/countByCustomerId", $body, $query, $extra);
    }

    /**
     * 权益概览
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/Statistic/ProjectController/equityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectEquityStatistic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic/equity", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemBatchController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemBatchCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemBatch/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemBatchController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemBatchDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemBatch/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemBatchController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemBatchListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemBatch/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemBatchController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemBatchPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemBatch/paging", $body, $query, $extra);
    }

    /**
     * 根据批次号查询权益兑换码添加情况，并更新批量发放的用户信息
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemBatchController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemBatchUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemBatch/update", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/list", $body, $query, $extra);
    }

    /**
     * 无分页列表sql
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemUserController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemUserListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemUser/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemUserController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemUser/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/ReportController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/update", $body, $query, $extra);
    }

    /**
     * 审核提交
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeReviewController/CommitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reviewCommit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/review/commit", $body, $query, $extra);
    }

    /**
     * 最近一条记录审核结果
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeReviewController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reviewDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/review/detail", $body, $query, $extra);
    }

    /**
     * 将权益中心返回的保障ID和gurCode更新到智赔保障表里
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/InsuranceEcosphere/IeGuaranteesController/savePackageInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function savePackageInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/ie/guarantees/savePackageInfo", $body, $query, $extra);
    }

    /**
     * 根据条件获取对应状态的账户扣款详情列表
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/PaymentController/statusAccountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statusAccount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/payment/statusAccount", $body, $query, $extra);
    }

    /**
     * 解绑
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BindController/unbindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function unbindInsuranceBind($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/insurance/bind/unbind", $body, $query, $extra);
    }

    /**
     * 记录发放失败原因
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/RedeemUserController/updateFailReasonAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateFailReason($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeemUser/updateFailReason", $body, $query, $extra);
    }

    /**
     * 通过手机号查看竞标系统账号权限
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/WorkerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workerInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/workerInfo", $body, $query, $extra);
    }

    /**
     * 创建批次
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BatchHandleController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createBatchHandle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchhandle/create", $body, $query, $extra);
    }

    /**
     * 更新批次
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BatchHandleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateBatchHandle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchhandle/update", $body, $query, $extra);
    }

    /**
     * 批次详情
     * @link https://uniondrug.coding.net/p/module.compensate/git/blob/development/docs/api/BatchHandleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchHandleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/batchhandle/detail", $body, $query, $extra);
    }
}
