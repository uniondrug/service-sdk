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
     * 新增上传日志
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
     * 接收票易通回传的发票
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
     * 推送开票单信息给票易通
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
