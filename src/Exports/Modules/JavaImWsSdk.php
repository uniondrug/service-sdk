<?php
/**
 * @name   JavaAdvfrontSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaImWsSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaImWsSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.im.ws';

    /**
     * 指定消息修改状态位
     * @param $body
     * @return ResponseInterface
     */
    public function changeMsgToRead($body)
    {
        return $this->restful("POST", "/message/changeMsgToRead", $body);
    }
}
