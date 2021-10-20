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
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsFinBillSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinBillSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-fin-bill';

    /**
     * 创建开票协议
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolCreate($body)
    {
        return $this->restful("POST", "/bill/protocol/create", $body);
    }

    /**
     * 查询开票协议
     * @param $body
     * @return ResponseInterface
     */
    public function billProtocolDetail($body)
    {
        return $this->restful("POST", "/bill/protocol/detail", $body);
    }

    /**
     * 发票输入完整性检测
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceIntegrityCheck($body)
    {
        return $this->restful("POST", "/invoice/integrity/check", $body);
    }

    /**
     * 发票商家录入
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceCreate($body)
    {
        return $this->restful("POST", "/invoice/business/create", $body);
    }

    /**
     * 发票票易通录入
     * @param $body
     * @return ResponseInterface
     */
    public function invoiceCreateByXForce($body)
    {
        return $this->restful("POST", "/invoice/xforce/create", $body);
    }
}
