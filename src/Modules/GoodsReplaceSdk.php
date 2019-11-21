<?php
/**
 * @author: zmh
 * @date: 2018-11-07
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class GoodsReplaceSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'goodsReplace';

    /**
     * 财务中心
     * 对账单替换商品服务
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function replace($body){
        return $this->restful(static::METHOD_POST, '/task/replace', $body);
    }
}