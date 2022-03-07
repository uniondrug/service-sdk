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
     * 创建多sheet下载任务
     * @param $body
     * @return ResponseInterface
     */
    public function batchCreate($body)
    {
        return $this->restful("POST", "/export/batch/create", $body);
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

    /**
     * 创建任务
     * @param $body
     * @return ResponseInterface
     */
    public function taskCreate($body)
    {
        return $this->restful("POST", "/task/create", $body);
    }

    /**
     * 任务列表
     * @param $body
     * @return ResponseInterface
     */
    public function taskPaging($body)
    {
        return $this->restful("POST", "/task/paging", $body);
    }

    /**
     * 生成日志
     * @param $body
     * @return ResponseInterface
     */
    public function taskLogCreate($body)
    {
        return $this->restful("POST", "/task/log/create", $body);
    }

    /**
     * 日志列表
     * @param $body
     * @return ResponseInterface
     */
    public function taskLogPaging($body)
    {
        return $this->restful("POST", "/task/log/paging", $body);
    }
}
