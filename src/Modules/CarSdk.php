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
}
