<?php
/**
 * @name   JavaOrderquerySdk
 * @date   2019-7-04
 */
namespace Uniondrug\ServiceSdk\Modules;
use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;
/**
 * JavaOrderquerySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaOrderquerySdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaOrderquery';
    
    /**
     * 退单信息查询
     * @link 
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function queryRefundListByOrderNoForYDB($body)
    {
        return $this->restful("POST", "/refund/query/queryRefundListByOrderNoForYDB", $body);
    }
}
