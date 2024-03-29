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
 * Class GsFinanceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinanceSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-finance';

    /**
     * 新增结算单3.0
     * @param $body
     * @return ResponseInterface
     */
    public function createStatement($body)
    {
        return $this->restful("POST", "/direct/statement/create", $body);
    }

    /**
     * 修改商品税率税额
     * @param $body
     * @return ResponseInterface
     */
    public function updateItemTax($body)
    {
        return $this->restful("POST", "/direct/item/update/tax", $body);
    }

    /**
     * 手动生成开票单
     * @param $body
     * @return ResponseInterface
     */
    public function manualCreateBill($body)
    {
        return $this->restful("POST", "/direct/manual/create/bill", $body);
    }

}

