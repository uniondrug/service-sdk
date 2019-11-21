<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 车辆服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class CarSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'car';

    /**
     * 根据车牌号查询
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarInfo/SearchByLicenseNoController/ByLicenseNoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function byLicenseNo($body)
    {
        return $this->restful(static::METHOD_POST, "/search/byLicenseNo", $body);
    }

    /**
     * 行驶证ocr识别
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarOcr/SearchByOcrController/byOcrAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function byOcr($body)
    {
        return $this->restful(static::METHOD_POST, "/search/byOcr", $body);
    }

    /**
     * 返回省市区三级联动数据
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarArea/CarAreaController/fullAreaAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function fullArea($body)
    {
        return $this->restful(static::METHOD_POST, "/full/area", $body);
    }

    /**
     * 返回某级数据
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarArea/CarAreaController/levelAreaAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function levelArea($body)
    {
        return $this->restful(static::METHOD_POST, "/level/area", $body);
    }

    /**
     * 返回某市车牌缩号
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarLicense/CarLicenseController/licenseListAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function licenseList($body)
    {
        return $this->restful(static::METHOD_POST, "/license/list", $body);
    }

    /**
     * 省-市-车牌
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarAreaLicense/CarAreaLicenseController/carAreaLicenseAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function areaLicense($body)
    {
        return $this->restful(static::METHOD_POST, "/area/license", $body);
    }

    /**
     * 车险开通城市
     * @param array $body
     * @return ClientResponseInterface
     */
    public function areaOpened($body)
    {
        return $this->restful(static::METHOD_POST, "/area/opened", $body);
    }

    /**
     * 通过驾驶证查车辆信息
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getOcrByLicenseNo($body)
    {
        return $this->restful(static::METHOD_POST, "/search/getOcrByLicenseNo", $body);
    }
}
