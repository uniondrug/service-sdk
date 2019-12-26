<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 赔案上传
 * @package Uniondrug\ServiceSdk\Modules
 */
class CaseSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'case';

    /**
     * 上传赔案信息
     * @link https://uniondrug.coding.net/p/backend.outreach.tpa/d/backend.outreach.tpa/git/blob/testing/docs/api/Admin/Api/CaseController/commitAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function commit($body)
    {
        return $this->restful(static::METHOD_POST, "/admin/api/case/commit", $body);
    }

    /**
     * 查询赔案状态信息
     * @link https://uniondrug.coding.net/p/backend.outreach.tpa/d/backend.outreach.tpa/git/blob/testing/docs/api/Admin/Api/CaseController/findAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function find($body)
    {
        return $this->restful(static::METHOD_POST, "/admin/api/case/find", $body);
    }

}
