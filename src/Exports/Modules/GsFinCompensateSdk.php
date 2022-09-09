<?php
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsFinCompensateSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinCompensateSdk extends SdkBase
{
    /**
     * 智赔
     * @var string
     */
    protected $serviceName = 'gs-fin-compensate';

    /**
     * 账号详情
     * @param $body
     * @return ResponseInterface
     */
    public function accountCreate($body)
    {
        return $this->restful("POST", "/account/detail", $body);
    }

    /**
     * 账号翻页列表
     * @param $body
     * @return ResponseInterface
     */
    public function accountPaging($body)
    {
        return $this->restful("POST", "/account/paging", $body);
    }
}
