<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk;

use Phalcon\Di\ServiceProviderInterface;

/**
 * 注入SDK
 * @package Uniondrug\ServiceSdk
 */
class SdkServiceProvider implements ServiceProviderInterface
{
    public function register(\Phalcon\DiInterface $di)
    {
        $di->setShared('serviceSdk', function(){
            return new ServiceSdk();
        });
    }
}
