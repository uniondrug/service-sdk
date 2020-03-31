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
 * @date   2020-03-20
 * @time   Fri, 20 Mar 2020 09:51:04 +0800
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
     * 坐标系转换
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/convertAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function convertAmap($body)
    {
        return $this->restful("POST", "/amap/convert", $body);
    }

    /**
     * 创建数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createAmap($body)
    {
        return $this->restful("POST", "/amap/data/create", $body);
    }

    /**
     * 删除数据，删除后可以重新创建
     * 输入：
     * ids，待删除的id，可以是数组，不超过50个。
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteAmap($body)
    {
        return $this->restful("POST", "/amap/data/delete", $body);
    }

    /**
     * 同步商户中心数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/editMapAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editAmap($body)
    {
        return $this->restful("POST", "/amap/data/editamap", $body);
    }

    /**
     * 地址逆解析
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/geoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function geoAmap($body)
    {
        return $this->restful("POST", "/amap/geo", $body);
    }

    /**
     * 读取数据POSTphp
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAmap($body)
    {
        return $this->restful("POST", "/amap/data/info", $body);
    }

    /**
     * 附近连锁集合
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/partnerOrganIdSearchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerOrganIdSearch($body)
    {
        return $this->restful("POST", "/amap/data/partnerorganidsearch", $body);
    }

    /**
     * 读取数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/readAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function readAmap($body)
    {
        return $this->restful("GET", "/amap/data/{id:(\d+", $body);
    }

    /**
     * 搜索周边
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/searchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function searchAmap($body)
    {
        return $this->restful("POST", "/amap/search", $body);
    }

    /**
     * 更新数据
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AMapController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateMap($body)
    {
        return $this->restful("POST", "/amap/data/update", $body);
    }
}
