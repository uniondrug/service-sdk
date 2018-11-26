# 升级SDK


### 项目SDK升级

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
1. 修改依赖注入
    ```text
    <?php
    // config/app.php
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
2. 加入注解
    1. 取消兼容模式 - 提示deprecated
    2. 改为新版模式
    ```text
    <?php
    ...
    use Uniondrug\ServiceSdk\Sdk;

    /**
     * ...
     * @property Sdk         $serviceSdk
     * ...
     */
    trait ServiceTrait
    {
    }
    ```

### 项目兼容

1. 原用法
    ```
    <?php
    ...
    $this->serviceSdk->mbs2->publish([...])
    ...
    
    ```
1. 新用法
   ```text
   $this->serviceSdk->module->mbs2->publish([...]) 
   ```


### 模块SDK迁移

1. postman.json配置
2. 导出postman+SDK+markdown/依赖config/app.php
3. 配置导出`@sdk`

 
