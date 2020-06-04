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
    public function listUserThird($body)
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
}