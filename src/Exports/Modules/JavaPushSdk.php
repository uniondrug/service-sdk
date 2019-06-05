<?php
/**
 * @author: xingshenqiang<xingshenqiang@uniondrug.cn>
 * @date  :   2019-05-13
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * java push服务
 * Class JavaPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPushSdk extends SdkBase
{
    protected $serviceName = 'java.push.module';

    /**
     * 添加体检数据
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function pushNotify($body)
    {
        return $this->restful(static::METHOD_POST, '/push/notify', $body);
    }
    /**
     * 换新服务条目查询
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderDrugRenew($body)
    {
        return $this->restful("POST", "/audit/drug/renew/query", $body);
    }
}
