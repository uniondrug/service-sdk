<?php
/**
 * @author kuanxing <346300265@qq.com>
 * @date   2018-06-21
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * 云图服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class MapSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'map.module';

    /**
     * 注册新应用
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AmapController/searchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function amapSearch($body)
    {
        return $this->restful(static::METHOD_POST, "/amap/search", $body);
    }

    /**
     * 修改链接
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AmapController/searchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateMap($body)
    {
        return $this->restful(static::METHOD_POST, "/amap/data/update", $body);
    }

    /**
     * 经纬度转换
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/ConvertController/convertAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function locationConvert($body)
    {
        return $this->restful(static::METHOD_POST, "/location/convert", $body);
    }

    /**
     * 经纬度详情
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/DetailController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function locationDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/location/detail", $body);
    }

    /**
     * 地址转为经纬度
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/ByAddressController/byAddressAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function locationByAddress($body)
    {
        return $this->restful(static::METHOD_POST, "/location/byAddress", $body);
    }

    /**
     * 行政区域查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/District/ByKeywordsController/byKeywordsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function districtByKeywords($body)
    {
        return $this->restful(static::METHOD_POST, "/district/byKeyword", $body);
    }

    /**
     * 获取两经纬度距离
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/GetDistanceController/distanceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function locationDistance($body)
    {
        return $this->restful(static::METHOD_POST, "/location/distance", $body);
    }

    /**
     * 获取城市天气情况
     * @link https://uniondrug.coding.net/p/module.map/d/module.map/git/blob/development/docs/api/Location/WeatherController/byCityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cityWeather($body)
    {
        return $this->restful(static::METHOD_POST, "/location/weather/bycity", $body);
    }
}
