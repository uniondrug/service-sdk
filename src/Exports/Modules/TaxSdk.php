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
 * @date   2020-07-28
 * @time   Tue, 28 Jul 2020 17:43:17 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * TaxSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class TaxSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'tax.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/Invoice/InvoiceController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function invoiceCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceDetails/InvoiceDetailsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function invoiceDetailsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoiceDetails/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/MerchantGoods/MerchantGoodsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantGoodsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantGoods/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/MerchantGoods/MerchantGoodsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantGoodsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantGoods/detail", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/MerchantGoods/MerchantGoodsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantGoods/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/MerchantGoods/MerchantGoodsController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantGoodsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantGoods/update", $body, $query, $extra);
    }

    /**
     * 批量修改
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/MerchantGoods/MerchantGoodsController/updateInBatchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantGoodsUpdateInBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantGoods/update", $body, $query, $extra);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxCode/TaxCodeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxCodeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxCode/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxCode/TaxCodeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxCodePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxCode/paging", $body, $query, $extra);
    }

    /**
     * 树形结构
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxCode/TaxCodeController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxCodeTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxCode/tree", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxRate/TaxRateController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxRateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxRate/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxRate/TaxRateController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxRatePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxRate/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxRate/TaxRateController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxRateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxRate/update", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/TaxRate/TaxRateController/updateStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taxRateUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/taxRate/updateStatus", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/UploadBillLog/UploadBillLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadBillLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/uploadBillLog/create", $body, $query, $extra);
    }

    /**
     * 接收开票单上传状态
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/XForcePlus/XForcePlusController/receiveBillStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function xForcePlusReceiveBillStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/xForcePlus/receiveBillStatus", $body, $query, $extra);
    }

    /**
     * 接收回传的发票
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/XForcePlus/XForcePlusController/receiveInvoiceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function xForcePlusReceiveInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/xForcePlus/receiveInvoice", $body, $query, $extra);
    }

    /**
     * 上传开票单信息
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/XForcePlus/XForcePlusController/sendBillAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function xForcePlusUploadBill($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/xForcePlus/uploadBill", $body, $query, $extra);
    }
}
