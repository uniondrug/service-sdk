# SDK V3


### how to do

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
        "scripts" : {
            "post-autoload-dump" : "Uniondrug\\ServiceSdk\\Bases\\Ide::builder"
        }
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


### how to run

1. 基础调用
    ```text
    $this->serviceSdk->get("http://wxapi.uniondrug.cn/v/user");
    ```
1. 标准调用
1. 兼容模式


