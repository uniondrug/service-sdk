<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/4/10
 * Time: 2:34 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ZhongShengSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ZhongShengSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'zhongsheng.outreach.module';

    /**
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function whiteUser($body)
    {
        return $this->restful("POST", "/api/inquire/idcard", $body);
    }
}