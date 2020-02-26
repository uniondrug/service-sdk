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
 * @date   2020-02-26
 * @time   Wed, 26 Feb 2020 14:25:31 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * HealthsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class HealthsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'healths.module';

    /**
     * 取消预约接口
     * @link https://uniondrug.coding.net/p/module.healths/git/blob/development/docs/api/Api/Order/OrderController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful("POST", "/api/order/cancel", $body);
    }

    /**
     * 修改体检预约时间接口
     * @link https://uniondrug.coding.net/p/module.healths/git/blob/development/docs/api/Api/Order/OrderController/changeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function change($body)
    {
        return $this->restful("POST", "/api/order/change", $body);
    }

    /**
     * 预约体检接口
     * @link https://uniondrug.coding.net/p/module.healths/git/blob/development/docs/api/Api/Order/OrderController/reserveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reserve($body)
    {
        return $this->restful("POST", "/api/order/reserve", $body);
    }

    /**
     * 查询门店排期
     * @link https://uniondrug.coding.net/p/module.healths/git/blob/development/docs/api/Api/Store/StoreController/scheduleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function schedule($body)
    {
        return $this->restful("POST", "/api/store/schedule", $body);
    }
}
