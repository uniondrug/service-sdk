<?php
/**
 * @author kuanxing <346300265@qq.com>
 * @date   2018-06-21
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 云图服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class MapSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'map';

    /**
     * 注册新应用
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/AmapController/searchAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function amapSearch($body)
    {
        return $this->restful(static::METHOD_POST, "/amap/search", $body);
    }

    /**
     * 经纬度转换
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/ConvertController/convertAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function locationConvert($body)
    {
        return $this->restful(static::METHOD_POST, "/location/convert", $body);
    }

    /**
     * 经纬度详情
     * @link https://uniondrug.coding.net/p/module.map/git/blob/development/docs/api/Location/DetailController/detailAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function locationDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/location/detail", $body);
    }
}
