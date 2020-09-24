<?php
/**
 * Created by PhpStorm.
 * User: weng
 * Date: 2020-09-15
 * Time: 10:35
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaTagServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.tag';

    /**
     * 基础门店包创建
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeBaseCreate($body)
    {
        return $this->restful("POST", "/store/package/base/create", $body);
    }

    /**
     * 高层级门店包创建接口
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeHighLevelCreate($body)
    {
        return $this->restful("POST", "/store/package/highlevel/create", $body);
    }

    /**
     * 根据门店包分页查询用户id接口
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storePackageGet($body)
    {
        return $this->restful("POST", "/store/package/stores/get", $body);
    }

    /**
     * 删除门店包接口
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storePackageDelete($body)
    {
        return $this->restful("POST", "/store/package/delete", $body);
    }

}