<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 商户服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class MerchantSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'merchant';

    /**
     * 读取商户资料
     * @link
     * @param array $body
     * @param array $query
     * @return array
     */
    public function getMerchantInfo($body, $query = [])
    {
        return $this->restful(static::METHOD_POST, "/merchant/info", $body, $query);
    }
}
