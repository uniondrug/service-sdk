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

    /**
     * 设置新密码
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/password.new.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function newPassword($body)
    {
        return $this->restful(static::METHOD_POST, "/member/newpwd", $body);
    }

    /**
     * 用户详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMemberInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/member/view", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/create.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/member/create", $body);
    }

    /**
     * 验证码登录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/smsLogin.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function smsLogin($body)
    {
        return $this->restful(static::METHOD_POST, "/member/smsLogin", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/create.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function createWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/create", $body);
    }

    /**
     * 登录用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/sign.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function signWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/sign", $body);
    }

    /**
     * 查询用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/info", $body);
    }

    /**
     * 修改用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/edit", $body);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/paging", $body);
    }

    /**
     * 修改用户密码
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/wxmember/editpwd.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editpwdWxMembers($body)
    {
        return $this->restful(static::METHOD_POST, "/wxmember/editpwd", $body);
    }

    /**
     * 用户添加积分记录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/accountrecords/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addAccountRecords($body)
    {
        return $this->restful(static::METHOD_POST, "/accountrecords/add", $body);
    }

    /**
     * 用户查看积分记录
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/accountrecords/info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function infoAccountRecords($body)
    {
        return $this->restful(static::METHOD_POST, "/accountrecords/info", $body);
    }

    /**
     * 积分记录列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/accountrecords/paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingAccountRecords($body)
    {
        return $this->restful(static::METHOD_POST, "/accountrecords/paging", $body);
    }

    /**
     * 获取用户默认地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/getDefaultAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDefaultAddress($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/getDefault", $body);
    }

    /**
     * 设置用户默认地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/setDefaultAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setDefaultAddress($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/setDefault", $body);
    }

    /**
     * 获取用户地址列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/pagingAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getAddressPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/paging", $body);
    }

    /**
     * 添加地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addAddress($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/add", $body);
    }

    /**
     * 修改地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editAddress($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/edit", $body);
    }

    /**
     * 修改地址状态
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/setStatusAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function setAddressStatus($body)
    {
        return $this->restful(static::METHOD_POST, "/member/address/setStatus", $body);
    }

    /**
     * 修改用户手机号
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editMobileAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editMobile($body)
    {
        eturn $this->restful(static::METHOD_POST, "/wxmember/editmobile", $body);
    }

    /**
     * 修改用户姓名和证件号
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editMemberCardsAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editMemberCards($body)
    {
        eturn $this->restful(static::METHOD_POST, "/wxmember/editmembercards", $body);
    }

    /**
     * 清空用户openid 和 unionId
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/uniteOpenidAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function uniteOpenid($body)
    {
        eturn $this->restful(static::METHOD_POST, "/wxmember/edituniteopenid", $body);
    }
}
