<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/12/1
 * Time: 10:27 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaEquityTrialSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.equity.trial';

    /**
     * 权益试算
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function trialEquity($body)
    {
        return $this->restful("POST", "/trial/equity", $body);
    }

    /**
     * 多权益试算
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function multipleTrialEquity($body)
    {
        return $this->restful("POST", "/multiple/trial/equity", $body);
    }
}