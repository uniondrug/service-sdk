<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:40 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaDistributionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaDistributionSdk extends SdkBase
{
    protected $serviceName = 'java.distribution';

    /**
     * 获取积分发放状态
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getProductList($body)
    {
        return $this->restful(static::METHOD_POST, '/dst/goods/queryGoodsList', $body);
    }

    /**
     * 获取商品详情
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getProductDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/dst/goods/queryGoodsDetail', $body);
    }

    /**
     * 获取商品积分
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getProductPoint($body)
    {
        return $this->restful(static::METHOD_POST, '/api/ybd/queryGoodsCommission', $body);
    }
}
