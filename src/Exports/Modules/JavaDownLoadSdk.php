<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2020-01-05
 * Time: 17:50
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaDownLoadSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.download.module';

    /**
     * 单条SQL导出单SHEET
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function export($body)
    {
        return $this->restful(static::METHOD_POST, '/export', $body);
    }

    /**
     * 批量SQL导出多SHEET
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function exportBatch($body)
    {
        return $this->restful(static::METHOD_POST, '/export/batch', $body);
    }

    /**
     * 导出API数据
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function exportApi($body)
    {
        return $this->restful(static::METHOD_POST, '/export/api', $body);
    }
}