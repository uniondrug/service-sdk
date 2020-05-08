<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-04-22
 * @Time   10:49:27
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaAuditLogServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.auditlog.service';

    /**
     * 内审日志记录创建
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function auditLogSend($body)
    {
        return $this->restful("POST", "/log/send", $body);
    }
}