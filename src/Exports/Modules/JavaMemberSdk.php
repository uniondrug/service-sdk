<?php
/**
 * Created by PhpStorm.
 * User: weng
 * Date: 2020-05-11
 * Time: 10:58
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaMemberSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.member';

    /**
     * 用户注册
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createUser($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/add", $body);
    }

    /**
     * 查询openid&unionId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoOpenId($body)
    {
        return $this->restful("POST", "/v2/api/userThird/query", $body);
    }

    /**
     * 查询account & oldId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAccount($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/query", $body);
    }

    /**
     * 手机号验证码&密码登录
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function login($body)
    {
        return $this->restful("POST", "/v2/api/user/login/", $body);
    }

    /**
     * 修改
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editOpenId($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/update", $body);
    }

    /**
     * 列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingUser($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/page", $body);
    }

    /**
     * 修改密码
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUserPassword($body)
    {
        return $this->restful("POST", "/v2/api/user/resetCredentials", $body);
    }

    /**
     * 修改身份证
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUserCard($body)
    {
        return $this->restful("POST", "/v2/api/userCard/update", $body);
    }

    /**
     * 注销openid&unionId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUserUnbind($body)
    {
        return $this->restful("POST", "/v2/api/userThird/unbind", $body);
    }

    /**
     * 添加用户openId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bindUserBind($body)
    {
        return $this->restful("POST", "/v2/api/userThird/bind", $body);
    }

    /**
     * 注销openid&unionId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUserUnbindBlack($body)
    {
        return $this->restful("POST", "/v2/api/userThird/unbindBlack", $body);
    }

    /**
     * 修改openid&unionId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUserThird($body)
    {
        return $this->restful("POST", "/v2/api/userThird/update", $body);
    }

    /**
     * 统计绑定openId
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countUserThird($body)
    {
        return $this->restful("POST", "/v2/api/userThird/count", $body);
    }

    /**
     * 分页查询数量
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingUserThird($body)
    {
        return $this->restful("POST", "/v2/api/userThird/page", $body);
    }

    /**
     * 通过id集合查询用户
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listUserBasic($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/batchByIds", $body);
    }

    /**
     * 地址分页
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/page", $body);
    }

    /**
     * 默认地址
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDefultAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/getDefault", $body);
    }

    /**
     * 设置默认地址
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setDefaultAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/setDefault", $body);
    }

    /**
     * 设置地址状态
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setStatusAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/setStatus", $body);
    }

    /**
     * 添加地址
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/add", $body);
    }

    /**
     * 修改地址
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/update", $body);
    }

    /**
     * 获取单条
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getAddress($body)
    {
        return $this->restful("POST", "/v2/api/userAddress/get", $body);
    }

    /**
     * 添加证件
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addCards($body)
    {
        return $this->restful("POST", "/v2/api/userCard/add", $body);
    }

    /**
     * 查询用户证件
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCards($body)
    {
        return $this->restful("POST", "/v2/api/userCard/getById", $body);
    }

    /**
     * 修改用户证件
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editCards($body)
    {
        return $this->restful("POST", "/v2/api/userCard/update", $body);
    }

    /**
     * 查询证件列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingCards($body)
    {
        return $this->restful("POST", "/v2/api/userCard/page", $body);
    }

    /**
     * 查询证件列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listCards($body)
    {
        return $this->restful("POST", "/v2/api/userCard/batchByIds", $body);
    }

    /**
     * 查询证件号数量
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function numCard($body)
    {
        return $this->restful("POST", "/v2/api/userCard/getCountByNum", $body);
    }

    /**
     * 统计有openId的数据
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBindCount($body)
    {
        return $this->restful("POST", "v2/api/userThird/getBindCount", $body);
    }

    /**
     * 统计证件号数量
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCountByNum($body)
    {
        return $this->restful("POST", "v2/api/userCard/getCountByNum", $body);
    }

    /**
     * 证件号集合返回（带memberId）
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByNum($body)
    {
        return $this->restful("POST", "v2/api/userCard/getByNum", $body);
    }

    /**
     * 用户id集合查询证件
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batchByIds($body)
    {
        return $this->restful("POST", "v2/api/userCard/batchByIds", $body);
    }

    /**
     * 通过openid查询
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryByOpenId($body)
    {
        return $this->restful("POST", "v2/api/userMajor/queryByOpenId", $body);
    }

    /**
     * 通过memberId和account查询
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryBy($body)
    {
        return $this->restful("POST", "v2/api/userMajor/queryBy", $body);
    }

    /**
     * 根据身份获取用户列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberListByIdentity($body)
    {
        return $this->restful("POST", "/v2/api/identity/getByCode", $body);
    }

    /**
     * 获取组织通过用户Id
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrgByMemberId($body)
    {
        return $this->restful("POST", "/v2/api/org/queryBy", $body);
    }

    /**
     * 非身份证添加
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function mbsCardAddByNo($body)
    {
        return $this->restful("POST", "/v2/mbs/card/addByNo", $body);
    }

    /**
     * 更换手机号
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateAccountApi($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/updateAccount", $body);
    }

    /**
     * 通过memberId查询实名证件
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRealCard($body)
    {
        return $this->restful("POST", "/v2/api/userCard/getReal", $body);
    }

    /**
     * 添加用户组织、身份
     * @param $body
     * @return ResponseInterface
     */
    public function addUserRole($body)
    {
        return $this->restful("POST", "/v2/api/userRole/add", $body);
    }

    /**
     * 查询用户组织(结果只会展示一条)
     * @param $body
     * @return ResponseInterface
     */
    public function getOneUserRole($body)
    {
        return $this->restful("POST", "/v2/api/userRole/getOne", $body);
    }

    /**
     * 查询用户组织集合
     * @param $body
     * @return ResponseInterface
     */
    public function queryUserRole($body)
    {
        return $this->restful("POST", "/v2/api/userRole/query", $body);
    }

    /**
     * 编辑用户组织
     * @param $body
     * @return ResponseInterface
     */
    public function updateUserRole($body)
    {
        return $this->restful("POST", "/v2/api/userRole/update", $body);
    }

    /**
     * 批量判断标签是否包含用户
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/usercenter/blob/master/api-docs/uniondrug.usercenter.provider/UserTagApiController/containsBatchApi.md
     * @param $body
     * @return ResponseInterface
     */
    public function userTagContainsBatch($body)
    {
        return $this->restful("POST", "/v2/api/userTag/containsBatch", $body);
    }

    /**
     * 批量判断标签下所有值是否包含用户
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/usercenter/blob/master/api-docs/uniondrug.usercenter.provider/UserTagApiController/containsTagValuesBatchApi.md
     * @param $body
     * @return ResponseInterface
     */
    public function userTagContainsTagValuesBatch($body)
    {
        return $this->restful("POST", "/v2/api/userTag/containsTagValuesBatch", $body);
    }

    /**
     * 通过证件号码查询用户信息
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/usercenter/blob/master/api-docs/uniondrug.usercenter.provider/UserInfoApiController/getByCarNoApi.md
     * @param $body
     * @return ResponseInterface
     */
    public function getByCarNo($body)
    {
        return $this->restful("POST", "/v2/api/userInfo/getByCarNo", $body);
    }
}