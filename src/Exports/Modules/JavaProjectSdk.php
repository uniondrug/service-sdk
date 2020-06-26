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

class JavaProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.project';

    /**
     * 查询兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function search($body)
    {
        return $this->restful("POST", "/code/search", $body);
    }

}