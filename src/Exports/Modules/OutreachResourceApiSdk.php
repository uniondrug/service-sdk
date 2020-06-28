<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-06-22
 * @Time   18:35:57
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AuditSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class OutreachResourceApiSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'outreach.resource.api';
    /**
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function apiAdapter($body)
    {
        return $this->restful("POST", "/api/adapter", $body);
    }
}