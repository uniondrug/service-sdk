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
1. 设置`config/sdk.php`配置文件, 从`vendor/uniondrug/service-sdk/docs/sdk.php`中复制即可
1. 去除`ServiceTrait`中对于`$sdk`的`@property`定义(可选, 若有则去除).



### how to run


1. 标准调用
    ```text
    $response = $this->serviceSdk->module->user->login(["mobile" => "13966013721"]);
    if ($response->hasError()){
       echo $response->getError();
    } else {
       echo $response->toJson();
    }
    ```
1. 基础调用 - 常用的7种Restful方式
    ```text
    $this->serviceSdk->delete("http://wxapi.uniondrug.cn/v/user");
    $this->serviceSdk->get("http://wxapi.uniondrug.cn/v/user");
    ```
1. 兼容模式 - `待废弃`
    ```text
    $response = $this->serviceSdk->user->login(["mobile" => "13966013721"]);
    if ($response->hasError()){
       echo $response->getError();
    } else {
       echo $response->toJson();
    }
    ```


