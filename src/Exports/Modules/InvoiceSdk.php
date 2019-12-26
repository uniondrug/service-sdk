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
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:26:03 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * InvoiceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InvoiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'invoice.module';

    /**
     * 新增一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/invoice/add", $body);
    }

    /**
     * 获取发票的详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/detailAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/invoice/detail", $body);
    }

    /**
     * 删除一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/deteleAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function detele($body)
    {
        return $this->restful("POST", "/invoice/detele", $body);
    }

    /**
     * 根据开票单号或对账单号获取发票的总和
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getInvoiceSumAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceSum($body)
    {
        return $this->restful("POST", "/invoice/getInvoiceSum", $body);
    }

    /**
     * 获取发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getListAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getList($body)
    {
        return $this->restful("POST", "/invoice/getList", $body);
    }

    /**
     * 通过理赔单号获取发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByClaimNo($body)
    {
        return $this->restful("POST", "/invoice/getPagingByClaimNo", $body);
    }

    /**
     * 通过理赔单号获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceListingByClaimNo($body)
    {
        return $this->restful("POST", "/invoice/getListingByClaimNo", $body);
    }

    /**
     * 通过理赔单号获取连锁级发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceListingByClaimNoInMerchant($body)
    {
        return $this->restful("POST", "/invoice/getListingByClaimNoInMerchant", $body);
    }

    /**
     * 财税发票池
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingForTax($body)
    {
        return $this->restful("POST", "/invoice/pagingForTax", $body);
    }
}
