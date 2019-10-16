# SDK用户

> 从本版本开始, SDK兼容`V1`、`V2`二个版本, 
基中`V1`依赖`NS`即将废弃, 版本`V2`依赖`Consul`；
项目中请按以下方式导入依赖

```text
{
    .
    .
    .
    "require" : {
        .
        .
        .
        "uniondrug/service-sdk" : "^3.0"
    },
    .
    .
    .
}
```


### 注入依赖

> 项目在导入`uniondrug/service-sdk`后, 项目不能立即使用，
需要在项目中注入依赖, 方法如下。

1. 在`config/app.php`中的`providers`数组里注册依赖
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
                \Uniondrug\ServiceSdk\SdkServiceProvider::class
            ]
        ]
    ];
    ```
1. IDE支持, 在`app/Services/Abstracts/ServiceTrait.php`里加入注释
    ```text
    <?php
    /**
     * @author wsfuyibing <websearch@163.com>
     * @date   2019-10-16
     */
    namespace App\Services\Abstracts;
    
    use Uniondrug\ServiceSdk\ServiceSdk;
    
    /**
     * ServiceTrait
     * @property ServiceSdk $serviceSdk
     * @package App\Services\Abstracts
     */
    trait ServiceTrait 
    {
        .
        .
        .
    }
    ```
