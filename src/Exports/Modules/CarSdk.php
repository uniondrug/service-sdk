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
 * @date   2019-06-15
 * @time   Sat, 15 Jun 2019 18:11:00 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * CarSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CarSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'car.module';

    /**
     * 返回列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarAreaLicense/CarAreaLicenseController/carAreaLicenseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function areaLicense($body)
    {
        return $this->restful("POST", "/area/license", $body);
    }

    /**
     * 根据车牌号查询
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarInfo/SearchByLicenseNoController/ByLicenseNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function byLicenseNo($body)
    {
        return $this->restful("POST", "/search/byLicenseNo", $body);
    }

    /**
     * OCR图片文字识别
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarOcr/SearchByOcrController/byOcrAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function byOcr($body)
    {
        return $this->restful("POST", "/search/byOcr", $body);
    }

    /**
     * 返回省市区三级联动数据
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarArea/CarAreaController/fullAreaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function fullArea($body)
    {
        return $this->restful("POST", "/full/area", $body);
    }

    /**
     * 返回某级数据
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarArea/CarAreaController/levelAreaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function levelArea($body)
    {
        return $this->restful("POST", "/level/area", $body);
    }

    /**
     * 返回某市车牌缩号
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/CarLicense/CarLicenseController/licenseListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function licenseList($body)
    {
        return $this->restful("POST", "/license/list", $body);
    }
}
