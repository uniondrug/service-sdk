<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-07-29
 * Time: 17:31
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaOrderQuerySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.order.query';

    /**
     * 根据主订单号集合获取子订单列表(新，兼容老数据)
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryMainOrderList($body)
    {
        return $this->restful("POST", "/customer/query/queryMainOrderList", $body);
    }
}