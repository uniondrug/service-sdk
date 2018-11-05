<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class WxSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'wx';

    /**
     *
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function accessToken($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/token', $body);
    }

    /**
     *
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/userinfoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/userinfo', $body);
    }
}
