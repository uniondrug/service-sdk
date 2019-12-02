<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-12-02
 * @time   Mon, 02 Dec 2019 23:40:40 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * UserSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class UserSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'user.module';

    /**
     * 添加积分记录
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/AccountRecordsController/addAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function addAccountRecords($body)
    {
        return $this->restful("POST", "/accountrecords/add", $body);
    }

    /**
     * 添加地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/addAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function addAddress($body)
    {
        return $this->restful("POST", "/member/address/add", $body);
    }

    /**
     * 添加无openId用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/addSmallAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function addSmallWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/addsmall", $body);
    }

    /**
     * 获取用户120获取的积分数据
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/aidAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function aidPointSum($body)
    {
        return $this->restful("POST", "/wxmember/aid", $body);
    }

    /**
     * 绑定微信
     * 在绑定微信时, 您需要先拿到会员ID和微信的OpenID
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/bindAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function bindWeixin($body)
    {
        return $this->restful("POST", "/member/bind", $body);
    }

    /**
     * 查询证件号数量
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberCardsController/cardNumAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function cardNumMemberCard($body)
    {
        return $this->restful("POST", "/membercards/cardNum", $body);
    }

    /**
     * 修改密码
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/chpwdAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function changePassword($body)
    {
        return $this->restful("POST", "/member/chpwd", $body);
    }

    /**
     * 注册用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/createAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function create($body)
    {
        return $this->restful("POST", "/member/create", $body);
    }

    /**
     * 添加用户证件
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberCardsController/addAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function createMemberCard($body)
    {
        return $this->restful("POST", "/membercards/add", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/createAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function createWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/create", $body);
    }

    /**
     * 修改地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/editAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editAddress($body)
    {
        return $this->restful("POST", "/member/address/edit", $body);
    }

    /**
     * 修改用户证件
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberCardsController/editAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editMemberCard($body)
    {
        return $this->restful("POST", "/membercards/edit", $body);
    }

    /**
     * 修改用户姓名和证件号
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editMemberCardsAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editMemberCards($body)
    {
        return $this->restful("POST", "/wxmember/editmembercards", $body);
    }

    /**
     * 修改用户手机号
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editMobileAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editMobile($body)
    {
        return $this->restful("POST", "/wxmember/editmobile", $body);
    }

    /**
     * 修改用户密码
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editPwdAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editpwdWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/editpwd", $body);
    }

    /**
     * 编辑openid 和 unionId
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editUnionOpenAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editUnionOpen($body)
    {
        return $this->restful("POST", "/wxmember/editunionopen", $body);
    }

    /**
     * 修改用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/editAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function editWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/edit", $body);
    }

    /**
     * 获取用户地址分页列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/FeedbackController/listAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function feedbackList($body)
    {
        return $this->restful("POST", "/feedback/list", $body);
    }

    /**
     * 获取用户地址分页列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/pagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getAddressPaging($body)
    {
        return $this->restful("POST", "/member/address/paging", $body);
    }

    /**
     * 获取带openid 的用户数量
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/getCountHasOpenIdAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getCountHasOpenId($body)
    {
        return $this->restful("POST", "/wxmember/count/openid", $body);
    }

    /**
     * 获取用户默认地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/getDefaultAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getDefaultAddress($body)
    {
        return $this->restful("POST", "/member/address/getDefault", $body);
    }

    /**
     * 获取带openid 的用户数量
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/getListHasOpenIdAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getListHasOpenId($body)
    {
        return $this->restful("POST", "/wxmember/list/openid", $body);
    }

    /**
     * 读取地址信息
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/infoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberAddressInfo($body)
    {
        return $this->restful("POST", "/member/address/info", $body);
    }

    /**
     * 查看用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/viewAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberInfo($body)
    {
        return $this->restful("POST", "/member/view", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberInfoController/idsAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberInfoByMemberIds($body)
    {
        return $this->restful("POST", "/memberinfo/ids", $body);
    }

    /**
     * 批量查询用户列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/listAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getWxmemberList($body)
    {
        return $this->restful("POST", "/wxmember/list", $body);
    }

    /**
     * 查看积分记录
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/AccountRecordsController/infoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAccountRecords($body)
    {
        return $this->restful("POST", "/accountrecords/info", $body);
    }

    /**
     * 查询用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/infoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function infoWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/info", $body);
    }

    /**
     * 手机号加密码登录
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/loginAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function memberLogin($body)
    {
        return $this->restful("POST", "/member/login", $body);
    }

    /**
     * 微信登录
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/weixinAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function memberWeixinLogin($body)
    {
        return $this->restful("POST", "/member/weixin", $body);
    }

    /**
     * 设置新密码/无需验证原密码
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/newpwdAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function newPassword($body)
    {
        return $this->restful("POST", "/member/newpwd", $body);
    }

    /**
     * 积分记录列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/AccountRecordsController/PagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingAccountRecords($body)
    {
        return $this->restful("POST", "/accountrecords/paging", $body);
    }

    /**
     * 查询用户列表证件
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberCardsController/PagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingMemberCard($body)
    {
        return $this->restful("POST", "/membercards/paging", $body);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/PagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/paging", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/PayAccountController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountCreate($body)
    {
        return $this->restful("POST", "/payAccount/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/PayAccountController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountDetail($body)
    {
        return $this->restful("POST", "/payAccount/detail", $body);
    }

    /**
     * 设置地址状态
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/setStatusAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function setAddressStatus($body)
    {
        return $this->restful("POST", "/member/address/setStatus", $body);
    }

    /**
     * 设置用户默认地址
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberAddressController/setDefaultAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function setDefaultAddress($body)
    {
        return $this->restful("POST", "/member/address/setDefault", $body);
    }

    /**
     * 登录用户
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/signAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function signWxMembers($body)
    {
        return $this->restful("POST", "/wxmember/sign", $body);
    }

    /**
     * smsLoginAction()
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/MemberController/smsLoginAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function smsLogin($body)
    {
        return $this->restful("POST", "/member/smsLogin", $body);
    }

    /**
     * 获取用户地址分页列表
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/FeedbackController/submitAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function submitFeedback($body)
    {
        return $this->restful("POST", "/feedback/submit", $body);
    }

    /**
     * 清空用户openid 和 unionId
     * @link https://uniondrug.coding.net/p/module.user/git/blob/development/docs/api/WxMembersController/uniteOpenidAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function uniteOpenid($body)
    {
        return $this->restful("POST", "/wxmember/edituniteopenid", $body);
    }
}
