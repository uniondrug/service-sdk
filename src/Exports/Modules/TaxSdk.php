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
 * @date   2020-07-08
 * @time   Wed, 08 Jul 2020 15:48:01 +0800
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
