<?php
/**
 * SDK配置
 */
return [
    'default' => [
        'timeout' => 30,
        'userAgent' => 'UDSDK/2.x',
        'consulApiEnable' => true,
        'consulApiTimeout' => 3,
        'consulApiAddress' => 'http://udsdk:8500/v1/catalog/service',
        'consulUrlProtocol' => 'http',
        'consulUrlSuffix' => 'service.register'
    ]
];
