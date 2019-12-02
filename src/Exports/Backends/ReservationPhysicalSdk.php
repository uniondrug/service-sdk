<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Backends`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-11-26
 * @time   Tue, 26 Nov 2019 14:06:00 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Backends;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ReservationPhysicalSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ReservationPhysicalSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'reservation.physical.backend';

    /**
     * 创建体检订单
     * @link https://uniondrug.coding.net/p/backend.physical.reservation/git/blob/development/docs/api/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful("POST", "/order/create", $body);
    }

    /**
     * 推送体检及报告
     * @link https://uniondrug.coding.net/p/backend.physical.reservation/git/blob/development/docs/api/ReservationExamineController/pushAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pushExamine($body)
    {
        return $this->restful("POST", "/reservation-examine/push", $body);
    }
}
