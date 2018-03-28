<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk;

/**
 * @property Modules\MerchantSdk $common   公共服务
 * @property Modules\MerchantSdk $merchant 商户服务
 * @package Uniondrug\ServiceSdk
 */
class ServiceSdk
{
    /**
     * SDK模块列表
     * @var array
     */
    private static $_modules = [];

    /**
     * SDK命名规则
     * @var string
     */
    private static $_modulesExtensionName = 'Sdk';

    /**
     * @param string $name 服务名
     * @return ServiceSdkInterface
     * @throws Exception
     */
    public function __get($name)
    {
        $key = strtolower($name);
        // 1. 从上个实例中读取
        if (isset(self::$_modules[$key])) {
            return self::$_modules[$key];
        }
        // 2. 检查定义
        $class = __NAMESPACE__.'\\'.ucfirst($name).self::$_modulesExtensionName;
        try {
            $instance = new $class();
            self::$_modules[$key] = $instance;
            return self::$_modules[$key];
        } catch(\Exception $e) {
        }
        // 3. 未定义的SDK服务
        throw new Exception("SDK包中未找到'{$name}'定义");
    }
}
