<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaFinSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.fin.service';

    /**
     * 上传excel文件
     *
     * @param array $body 入参类型
     *
     * @return ResponseInterface
     */
    public function excelParse($body)
    {
        return $this->restful("POST", "/excel/parse", $body);
    }
}
