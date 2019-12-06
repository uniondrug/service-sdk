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
 * @date   2019-11-29
 * @time   Fri, 29 Nov 2019 15:51:56 +0800
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
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/createAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressCreate($body)
    {
        return $this->restful("POST", "/invoiceExpress/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/detailAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDetail($body)
    {
        return $this->restful("POST", "/invoiceExpress/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/pagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressPaging($body)
    {
        return $this->restful("POST", "/invoiceExpress/paging", $body);
    }

    /**
     * 批次列表
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/pagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressListing($body)
    {
        return $this->restful("POST", "/invoiceExpress/listing", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/updateAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressUpdate($body)
    {
        return $this->restful("POST", "/invoiceExpress/update", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/updateAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDelete($body)
    {
        return $this->restful("POST", "/invoiceExpress/delete", $body);
    }

    /**
     * 批量删除
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/updateAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressDeleteInBatch($body)
    {
        return $this->restful("POST", "/invoiceExpress/deleteInBatch", $body);
    }

    /**
     * 今天第几条
     * @link https://uniondrug.coding.net/p/module.tax/git/blob/development/docs/api/InvoiceExpress/InvoiceExpressController/updateAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function invoiceExpressCountToday($body)
    {
        return $this->restful("POST", "/invoiceExpress/countToday", $body);
    }
}
