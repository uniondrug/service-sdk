<?php
/**
 * @name   JsFinanceEsSdk
 * @date   2021-09-18
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsFinExportSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinExportSdk extends SdkBase
{
    /**
     * 财务ES导出
     * @var string
     */
    protected $serviceName = 'gs-fin-export';

    /**
     * 创建下载任务
     * @param $body
     * @return ResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/export/create", $body);
    }

    /**
     * 查询下载进度
     * @param $body
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/export/detail", $body);
    }
}
