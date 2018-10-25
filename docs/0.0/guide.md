# 启用SDK

> 在执行本操作前, 务必先安装依赖, [如何安装?](install.md)


### V2支持SDK

> V2指的是在2018年启用的(支持结构体)版本的框架

1. 找到`config/app.php`
2. 加入`provider`
    ```
    <?php
    ...
    use Uniondrug\ServiceSdk\Providers\V2Provider as SdkProvider;

    return [
       'default' => [
           ...
           'providers' => [
                ...
                SdkProvider::class
           ]
       ],
       ...
    ];
    ```


### V1支持SDK

> V1指的是在2017年启用的框架

1. 找到`app/`
1. 加入`provider`
    ```
    <?php
    ...
    use Uniondrug\ServiceSdk\Providers\V1Provider as SdkProvider
    class Application extends \Pails\Mvc\Application
    {
        protected $providers = [
            ...
            SdkProvider::class
        ];
    }
    ```


