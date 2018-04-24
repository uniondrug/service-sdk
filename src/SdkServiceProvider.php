<?php

namespace Uniondrug\ServiceSdk;

use Phalcon\Di\ServiceProviderInterface;

class SdkServiceProvider implements ServiceProviderInterface
{
    public function register(\Phalcon\DiInterface $di)
    {
        $di->set(
            'serviceSdk',
            function () {
                return new ServiceSdk();
            }
        );
    }
}
