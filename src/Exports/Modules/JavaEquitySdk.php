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

class JavaEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.equity';

    /**
     * 批量激活
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batchActive($body)
    {
        return $this->restful("POST", "/equity/batch/active", $body);
    }
    /**
     * 批量激活
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batchBackendActive($body)
    {
        return $this->restful("POST", "/equity/batch/backend/active", $body);
    }
    /**
     * 批量激活
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDetailByOutorderNo($body)
    {
        return $this->restful("POST", "/equity/detail/outorderno", $body);
    }
}