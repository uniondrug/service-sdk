<?php
/**
 * @name   JsArchivesSdk
 * @date   2021-02-02
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JsArchivesSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.archives';

    /**
     * 分页查询档案
     * @link https://git.uniondrug.com/code/1/finance/js-archives/blob/master/docs-api/ArchiveController/page.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function archivePaging(array $body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/archive/page", $body);
    }
}
