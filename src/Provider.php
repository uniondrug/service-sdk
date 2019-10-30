<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-28
 */
namespace Uniondrug\ServiceSdk;

use Phalcon\Di\ServiceProviderInterface;
use Phalcon\DiInterface;
use Uniondrug\Framework\Container;

/**
 * 注入SDK
 * @package Uniondrug\ServiceSdk
 */
class Provider implements ServiceProviderInterface
{
    public function register(DiInterface $di)
    {
        $di->setShared('serviceSdk', function() use ($di){
            /**
             * @var Container $di
             */
            return new ServiceSdk($di);
        });
    }
}
