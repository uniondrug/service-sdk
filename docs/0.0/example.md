# 调用SDK

> 当你的项目启用SDK后, 
即可通过依赖注入 `$this->serviceSdk` 找到SDK的入口
对象 `Uniondrug\ServiceSdk\Sdk` 的实例；
调用SDK的过程, 实际就是在应用中, 调用其它服务提供的能力的过程。


### 一、用方法调用

> 本特性, 在`V2`版本中开始支持, 限如下用法

1. 入参
    1. _string_ **$uri** - 请求地址, 格式: `[_a-zA-Z0-9\-\.]+://\S+`
    1. _array_ **$body** - Post数据, 格式: `array`、`string`、`StructInterface`
    1. _array_ **$options** - 请求选项, 遵循`GuzzleHttp`选项
1. 特性
    1. **withCache**(_int_ **$cacheDeadline** = 300) - 二级缓存
    1. **withRetry**(_int_ **$retryTimes** = 1) - 失败重试
1. 可选
    1. **delete**(_string_ **$uri**, _array_ **$body** = null, _array_ **$options** = null)
    1. **get**(_string_ **$uri**, _array_ **$options** = null)
    1. **head**(_string_ **$uri**, _array_ **$options** = null)
    1. **options**(_string_ **$uri**, _array_ **$options** = null)
    1. **patch**(_string_ **$uri**, _array_ **$body** = null, _array_ **$options** = null)
    1. **post**(_string_ **$uri**, _array_ **$body** = null, _array_ **$options** = null)
    1. **put**(_string_ **$uri**, _array_ **$body** = null, _array_ **$options** = null)


*示例一*

```php
// POST无入参
$this->serviceSdk->post("module://path");
// POST有入参
$this->serviceSdk->post("module://path", ["key" => "value"]);
// POST有入参,同时有选项
$this->serviceSdk->post("module://path", ["key" => "value"], ["timeout" => 5]);
```

*示例二*

```php
// 无缓存
$this->serviceSdk->get("module://path");
// 默认缓存300秒
$this->serviceSdk->withCache()->get("module://path");
// 指定3600秒缓存
$this->serviceSdk->withCache(3600)->get("module://path");
// 请求失败最多偿试3次
$this->serviceSdk->withRetry(3)->get("module://path");
```

*示例三*

```php
// 支持完整URL
$this->serviceSdk->get("http://www.baidu.com")
```



### 二、模块

> 以调用属性方式, 调用已开发的模块

```php
// 读取服务
$this->serviceSdk->module->getById(1);
// 缓存3600秒
$this->serviceSdk->module->withCache(3600)->getById(1);
// 失败重试3次
$this->serviceSdk->module->withRetry(3)->getById(1);
```

