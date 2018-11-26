<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-24
 */
namespace Uniondrug\ServiceSdk\Providers;

use Pails\Container;
use Pails\Providers\ServiceProviderInterface as ServiceProviderInterface;
use Phalcon\Di;
use Uniondrug\ServiceSdk\Sdk;

/**
 * 适用于较早前的框架
 * @package Uniondrug\ServiceSdk\Providers
 */
class V1Provider implements ServiceProviderInterface
{
    public function register()
    {
        /**
         * @var Container $container
         */
        $container = Di::getDefault();
        $environment = $container->environment();
        $logger = $container->getLogger();
        $sdkConfig = $container->getConfig('dbs', $environment);
        $redisConfig = $container->getConfig('redis', $environment);
        $container->set('serviceSdk', function() use ($logger, $sdkConfig, $redisConfig, $environment){
            return new Sdk($logger, $sdkConfig, $redisConfig, $environment);
        });
    }
}
