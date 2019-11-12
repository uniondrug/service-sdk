<?php
return [
    'default' => [
        'consulApiAddress' => 'http://udsdk.{{domain}}/v1/catalog/service',
        'consulApiTimeout' => 3,
        'consulHosts' => [],
        'nsEnabled' => true,
        'nsApiAddress' => 'http://ns.module.{{domain}}/node/get'
    ],
    'development' => [
        'consulApiAddress' => 'http://udsdk.uniondrug.info/v1/catalog/service',
        'domain' => 'dev.uniondrug.info',
    ],
    'testing' => [
        'domain' => 'turboradio.cn'
    ],
    'release' => [
        'domain' => 'uniondrug.net'
    ],
    'production' => [
        'domain' => 'uniondrug.cn'
    ]
];
