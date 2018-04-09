# Service Sdk

> 模块`ServiceSdk`用于在模块、项目、应用中调用服务的一种快速入口


### 如何使用?

*一、示例*

```text
class ExampleController extends Controller 
{
    public function TestAction()
    {
        $body = ['key' => 'value'];
        $response = $this->serviceSdk->common->getMenuList($body);
    }
}
```

*二、说明*

1. 仅限在 `Controller`、`Logic` 层使用。
1. 关键说明
    1. `$this->serviceSdk` 指向 `Uniondrug\ServiceSdk\ServiceSdk` 实例。
    1. `common` 为服务名称(即: 前一节的属性), 指向 `Uniondrug\ServiceSdk\ServiceSdk\Modules\CommonSdk` 实例。
    1. `getMenuList` 为方法名称, 指向 `Uniondrug\ServiceSdk\ServiceSdk\Modules\CommonSdk::getMenuList()` 方法。
    1. `$body` 为参数, 支持 `array` 或 `Uniondrug\Structs\StructInterface` 实例。
    1. `$response` 为服务请求结果, 返回 `Uniondrug\Service\ClientResponseInterface` 实例。



### 如何制作?


