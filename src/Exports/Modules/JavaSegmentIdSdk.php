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

class JavaSegmentIdSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.segment.id';

    /**
     * 批量获取唯一ID
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function segmentId($body)
    {
        return $this->restful("POST", "/segment/id/next", $body);
    }

}