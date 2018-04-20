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
 * 用户服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class UserSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'user';

    /**
     * 会员登录(手机号+密码)
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function memberLogin($body)
    {
        return $this->restful(static::METHOD_POST, "/member/login", $body);
    }

    /**
     * 微信登录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.weixin.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function memberWeixinLogin($body)
    {
        return $this->restful(static::METHOD_POST, "/member/weixin", $body);
    }

    /**
     * 绑定微信
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/bind.weixin.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function bindWeixin($body)
    {
        return $this->restful(static::METHOD_POST, "/member/bind", $body);
    }

    /**
     * 修改密码
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/password.change.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function changePassword($body)
    {
        return $this->restful(static::METHOD_POST, "/member/chpwd", $body);
    }
}
