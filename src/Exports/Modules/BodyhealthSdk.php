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
 * @date   2019-11-19
 * @time   Tue, 19 Nov 2019 12:07:42 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * BodyhealthSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class BodyhealthSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'bodyhealth.module';

    /**
     * 取消预约
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/OrderController/cancellationAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancellation($body)
    {
        return $this->restful("POST", "/order/orgin/cancellation", $body);
    }

    /**
     * 预约单改期接口
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/OrderController/changeDateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeDate($body)
    {
        return $this->restful("POST", "/order/orgin/change/date", $body);
    }

    /**
     * 业务查询套餐列表
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/PackageController/dataListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dataList($body)
    {
        return $this->restful("POST", "/packages/data/list", $body);
    }

    /**
     * 业务查询机构可预约时间
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/HospitalController/dateListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dateList($body)
    {
        return $this->restful("POST", "/hospital/date/list", $body);
    }

    /**
     * 订单详情查询
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/OrderController/detailsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function details($body)
    {
        return $this->restful("POST", "/order/orgin/details", $body);
    }

    /**
     * 业务查询机构列表
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/HospitalController/hospitalListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function hospitalList($body)
    {
        return $this->restful("POST", "/hospital/hospital/list", $body);
    }

    /**
     * 预约体检（核心接口）
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/OrderController/reservationAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reservation($body)
    {
        return $this->restful("POST", "/order/orgin/reservation", $body);
    }

    /**
     * 业务查询机构可预约数
     * @link https://uniondrug.coding.net/p/module.bodyhealth/git/blob/development/docs/api/Api/HospitalController/supportListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function supportList($body)
    {
        return $this->restful("POST", "/hospital/support/list", $body);
    }
}
