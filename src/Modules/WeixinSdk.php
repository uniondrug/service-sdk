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
class WeixinSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'weixin';

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/tokenAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function accessToken($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/token', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/userinfoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/info', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/openidAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getOpenIdByCode($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/openid', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/configAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function config($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/config', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/configAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createTag($body)
    {
        return $this->restful(static::METHOD_POST, '/tag/createTag', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/configAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getTags($body)
    {
        return $this->restful(static::METHOD_POST, '/tag/get', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/configAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function labelTag($body)
    {
        return $this->restful(static::METHOD_POST, '/tag/label', $body);
    }

    /**
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/configAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getIdList($body)
    {
        return $this->restful(static::METHOD_POST, '/tag/getIdList', $body);
    }

    /*
     * 设置短链接
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/WxController/shortUrlAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function shortUrl($body)
    {
        return $this->restful(static::METHOD_POST, '/wx/shortUrl', $body);
    }

    /*
     * code获取ticket、openid
     * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/ProgramController/ticketAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function ticket($body)
    {
        return $this->restful(static::METHOD_POST, '/program/ticket', $body);
    }

    /*
    * 小程序登陆
    * @link https://uniondrug.coding.net/p/module.health/git/blob/development/docs/api/ProgramController/loginAction.md
    * @param array $body
    * @return ClientResponseInterface
    */
    public function login($body)
    {
        return $this->restful(static::METHOD_POST, '/program/login', $body);
    }
}
