<?php
/**
 * Created by PhpStorm.
 * User: tangly
 * Date: 2019-05-09
 * Time: 15:09
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JavaOrderSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaGoodsCenterApiSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.goods.center.api';
    /**
     * 商品中心药品搜索
     * @link https://uniondrug.coding.net/p/docs/d/docs/git/tree/development/java/goods-center/商品中心3.1/编辑SKU扣率税率.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function search($body)
    {
        return $this->restful("POST", "/goods/search", $body);
    }
}