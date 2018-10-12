<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 商品服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class GoodsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'goods';

    /**
     * 根据id 获取商品新来列表
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getGoodsByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/lists", $body);
    }

    /**
     * 根据id 获取商品详情
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getDetailById($body)
    {
        return $this->restful(static::METHOD_POST, "/goods/detail", $body);
    }

    /**
     * 根据id 获取药品信息
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getDrugById($body)
    {
        return $this->restful(static::METHOD_POST, "/drug/detail", $body);
    }
}
