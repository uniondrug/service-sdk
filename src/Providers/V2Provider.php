<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-24
 */
namespace Uniondrug\ServiceSdk\Providers;

use Phalcon\Di\ServiceProviderInterface;
use Uniondrug\Framework\Container;
use Uniondrug\ServiceSdk\Sdk;

/**
 * 知用于较新版的框架
 * @package Uniondrug\ServiceSdk\Providers
 */
class V2Provider implements ServiceProviderInterface
{
    /**
     * @param \Phalcon\DiInterface $di
     */
    public function register(\Phalcon\DiInterface $di)
    {
        /**
         * @var Container $container ;
         */
        $container = $di;
        $environment = $container->environment();
        $logger = $container->getLogger('sdk');
        $sdkConfig = $container->getConfig()->path('sdk');
        $redisConfig = $container->getConfig()->path('redis');
        $container->setShared('serviceSdk', function() use ($logger, $sdkConfig, $redisConfig, $environment){
            return new Sdk($logger, $sdkConfig, $redisConfig, $environment);
        });
    }
}
