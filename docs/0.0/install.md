# 安装SDK

> 让你的项目支持`SDK`，可以使用如下二种方式；注意, 安装仅是项目可以支持。


### 配置文件

> 本方法适用于新项目

1. 加入`composer.json`
    ```text
    {
        .
        .
        .
        "require" : {
            .
            .
            .
            "uniondrug/service-sdk" : "^2.0"
        }
    }
    ```
1. 执行`update`
   ```php
    // 已安装
    composer update
    // 从未安装
    composer install
    ```


### 快速安装

```php
composer require uniondrug/service-sdk
```


