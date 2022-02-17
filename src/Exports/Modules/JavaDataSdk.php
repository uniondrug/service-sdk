<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaDataSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.data';

    /**
     * 搜索商品
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function goodsSearchQueryAllGoods($body)
    {
        return $this->restful("POST", "/goodsSearch/queryAllGoods", $body);
    }
}
