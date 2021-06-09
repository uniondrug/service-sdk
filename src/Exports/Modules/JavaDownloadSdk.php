<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JavaDownloadSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaDownloadSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.download';

    /**
     * bill批量导出
     * @param $body
     * @return ResponseInterface
     */
    public function billExportBatch($body)
    {
        return $this->restful("POST", "/excel/model/one", $body);
    }

    /**
     * 结算单PDF
     * @param $body
     * @return ResponseInterface
     */
    public function statementsPDF($body)
    {
        return $this->restful("POST", "/create/custom/pdf", $body);
    }

    /**
     * 多sheet导出
     * @param $body
     * @return ResponseInterface
     */
    public function exportBatch($body)
    {
        return $this->restful("POST", "/export/batch", $body);
    }

    /**
     * 单sheet导出
     * @param $body
     * @return ResponseInterface
     */
    public function export($body)
    {
        return $this->restful("POST", "/export", $body);
    }

    /**
     * 订单导出
     * @param $body
     * @return ResponseInterface
     */
    public function orderExport($body)
    {
        return $this->restful("POST", "/export/api", $body);
    }

    /**
     * 查询导出结果
     * @param $body
     * @return ResponseInterface
     */
    public function query($body)
    {
        return $this->restful("POST", "/query/excel", $body);
    }
}
