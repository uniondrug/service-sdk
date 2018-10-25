# 新增特性

1. 二级缓存
1. 失败重试


### 二级缓存

> 二级缓存, 指由SDK的调用方(Consumer), 缓存的一组数据；仅在调用的应用内部有效。

_一、无缓存_

```php
$this->serviceSdk->module->getById(1);
```

_二、默认时长缓存_

```php
// 有效期默认300稍稍
$this->serviceSdk->module->withCache()->getById(1);
```

_三、指定缓存时长_

```php
// 指定缓存在900秒内有效
$this->serviceSdk->module->withCache(900)->getById(1);
```


### 失败重试

> SDK在请求过程中，默认只请求一次，不论请求结果, 在`v2.0`时加入失败最大重试次数。同在以下场景中, 
即使指定了偿试多次, 也不会触发

1. URL地址不合法
1. 服务返回`400`、`401`、`403`、`404`、`405`状态码


_一、失败不重试_

```php
$this->serviceSdk->module->getById(1);
```

_二、指定偿试次数_

```php
// 连续偿试3次请求，任1次成功时则停止
$this->serviceSdk->module->withRetry(3)->getById(1);
```


