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
 * @date   2020-11-16
 * @time   Mon, 16 Nov 2020 10:01:51 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * MapSdk
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
     * 搜索周边
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/searchMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function amapSearch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/searchmap", $body, $query, $extra);
    }

    /**
     * 查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/WeatherController/byCityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityWeather($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/weather", $body, $query, $extra);
    }

    /**
     * 坐标系转换
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/convertAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function convertAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/convert", $body, $query, $extra);
    }

    /**
     * 创建数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/create", $body, $query, $extra);
    }

    /**
     * 删除数据，删除后可以重新创建
     * 输入：
     * ids，待删除的id，可以是数组，不超过50个。
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/delete", $body, $query, $extra);
    }

    /**
     * 返回查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/District/ByKeywordsController/byKeywordsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function districtByKeywords($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/district/byKeyword", $body, $query, $extra);
    }

    /**
     * 搜索周边DTP
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/DTPDistanceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function DTPDistance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/dtpdistance", $body, $query, $extra);
    }

    /**
     * 同步商户中心数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/editMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/editamap", $body, $query, $extra);
    }

    /**
     * 同步商户不限制同步数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/editOrganizeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganize($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/editorganize", $body, $query, $extra);
    }

    /**
     * 地址逆解析
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/geoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function geoAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/geo", $body, $query, $extra);
    }

    /**
     * 读取数据POSTphp
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/info", $body, $query, $extra);
    }

    /**
     * 输入提示
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/inputTipsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inputTips($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/inputtips", $body, $query, $extra);
    }

    /**
     * 查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/ByAddressController/byAddressAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationByAddress($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/byAddress", $body, $query, $extra);
    }

    /**
     * 转为坐标系
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/ConvertController/convertAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationConvert($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/convert", $body, $query, $extra);
    }

    /**
     * 获取详情
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/DetailController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/detail", $body, $query, $extra);
    }

    /**
     * 获取完整详情
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/DetailController/detailAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationDetailAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/detailall", $body, $query, $extra);
    }

    /**
     * 查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/GetDistanceController/distanceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function locationDistance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/location/distance", $body, $query, $extra);
    }

    /**
     * 附近连锁集合
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/partnerOrganIdSearchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerOrganIdSearch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/partnerorganidsearch", $body, $query, $extra);
    }

    /**
     * pio查询
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/placeTextAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function placeText($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/placetext", $body, $query, $extra);
    }

    /**
     * 读取数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/readAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function readAmap($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/amap/data/{id:(\d+", $body, $query, $extra);
    }

    /**
     * 搜索周边
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/searchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchAmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/search", $body, $query, $extra);
    }

    /**
     * 更新数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateMap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/amap/data/update", $body, $query, $extra);
    }
}
