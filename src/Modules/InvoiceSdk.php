<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2018-11-02
 * @time   Fri, 02 Nov 2018 18:27:47 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * InvoiceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InvoiceSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'invoice';

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
     * 添加发票时，检测与系统不一致信息返回
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/checkIntegrityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkIntegrity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/checkIntegrity", $body, $query, $extra);
    }

    /**
     * 删除一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/deleteAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function delete($body)
    {
        return $this->restful("POST", "/invoice/delete", $body);
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
     * 根据开票单获取发票的总和
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getInvoiceSumAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceSum($body)
    {
        return $this->restful("POST", "/invoice/getInvoiceSum", $body);
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
     * 根据发票单号获取发票的详情
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getDetailAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/invoice/getDetail", $body);
    }

    /**
     * 编辑一个发票
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/EditAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function edit($body)
    {
        return $this->restful("POST", "/invoice/edit", $body);
    }

    /**
     * 批量编辑
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/editInBatchAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editInBatch($body)
    {
        return $this->restful("POST", "/invoice/editInBatch", $body);
    }

    /**
     * 新增一个发票快递单
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/addExpressNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function addExpressNo($body)
    {
        return $this->restful("POST", "/invoice/addExpressNo", $body);
    }

    /**
     * 快递公司列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/ExpressController/listAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function expressList($body)
    {
        return $this->restful("POST", "/express/list", $body);
    }

    /**
     * 获取快递页发票分页列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getPagingInExpressAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getListInExpress($body)
    {
        return $this->restful("POST", "/invoice/getListInExpress", $body);
    }

    /**
     * 获取未寄出发票数量
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/countInvoiceAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function countInvoice($body)
    {
        return $this->restful("POST", "/invoice/countInvoice", $body);
    }

    /**
     * 通过理赔单号获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByClaimNo($body)
    {
        return $this->restful("POST", "/invoice/getPagingByClaimNo", $body);
    }

    /**
     * 通过保司获取发票导出
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getExportByInsureAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoiceExportByInsure($body)
    {
        return $this->restful("POST", "/invoice/getExportByInsure", $body);
    }

    /**
     * 通过保司获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/getPagingByInsureAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getInvoicePagingByInsure($body)
    {
        return $this->restful("POST", "/invoice/getPagingByInsure", $body);
    }

    /**
     * 通过理赔单号获取发票列表
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/pagingByClaimNoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function cc($body)
    {
        return $this->restful("POST", "/invoice/getPagingByClaimNo", $body);
    }

    /**
     * 更新发票url
     * @link https://uniondrug.coding.net/p/module.invoice/git/blob/development/docs/api/InvoiceController/updateUrlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateUrl($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/updateUrl", $body, $query, $extra);
    }
}
