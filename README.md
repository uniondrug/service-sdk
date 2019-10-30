# SDK V3

> 如何使用`V3`版本SDK

1. 修改`composer.json`文件, 选择`3.x`版本
    ```text
    {
        .
        .
        "require" : {
            .
            .
            "uniondrug/service-sdk" : "^3.0",
            .
            .
        },
        .
        .
    }
    ```
1. 执行`composer update`更新依赖版
1. 修改`config/app.php`应用
     ```text
        return [
            'default' => [
                .
                .
                .
                'providers' => [
                    .
                    .
                    .
                    \Uniondrug\ServiceSdk\Provider::class
                ]
            ]
        ];
    ```




