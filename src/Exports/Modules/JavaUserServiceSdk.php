<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-07-06
 * @Time   17:58:30
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * Class JavaUserServiceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaUserServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.user.service';

    /**
     * 用户详情 MemberId
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserMajorApiController/queryByApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/v2/api/userMajor/queryBy", $body);
    }

    /**
     * 用户列表集合 MemberId[]
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserIdentityApiController/batchInfoByMemberIdsApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/v2/api/identity/batchInfoByMemberIds", $body);
    }

    /**
     * 编辑用户基本信息
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/updateApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function updateUserBasic($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/update", $body);
    }

    /**
     * 登录(密码或短信验证码)
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserLoginApiController/loginApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function login($body)
    {
        return $this->restful("POST", "/v2/api/user/login", $body);
    }

    /**
     * 查询用户详情
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/queryApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function queryUserBasic($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/query", $body);
    }

    /**
     * 重置密码
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserLoginApiController/resetCredentialsApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function resetCredentials($body)
    {
        return $this->restful("POST", "/v2/api/user/resetCredentials", $body);
    }

    /**
     * 新增用户
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/addApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function createUserBasic($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/add", $body);
    }

    /**
     * 绑定微信
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserThirdApiController/bindApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function bindWeChat($body)
    {
        return $this->restful("POST", "/v2/api/userThird/bind", $body);
    }

    /**
     * 微信登录
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/cd9f92752a158be69410bfb759893a72ff90adee/api-docs/uniondrug.usercenter.provider/UserMajorApiController/queryByOpenIdApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function weChatLogin($body)
    {
        return $this->restful("POST", "/v2/api/userMajor/queryByOpenId", $body);
    }

    /**
     * 用户列表集合 MemberId[]
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserMajorApiController/batchInfoByMemberIdsApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userListByMenberIds($body)
    {
        return $this->restful("POST", "/v2/api/userMajor/batchByMemberIds", $body);
    }

    /**
     * 根据身份证获取用户信息
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/userCardApiController/getByNumApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userInfoByCardNo($body)
    {
        return $this->restful("POST", "/v2/api/userCard/getByNum", $body);
    }

    /**
     * 添加用户已存在则查询用户
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/addOrQueryApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userInfoAddOr($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/addOrQuery", $body);
    }

    /**
     * 通过身份证类型和memberID查询信息
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/addOrQueryApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userCardInfoByMemberIdsAndType($body)
    {
        return $this->restful("POST", "/v2/api/userCard/batchByIds", $body);
    }

    /**
     * 身份证新增
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserBasicApiController/addOrQueryApi.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userCardAdd($body)
    {
        return $this->restful("POST", "/v2/api/userCard/add", $body);
    }

    /**
     * 获取用户中心数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getRealUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userBasic/batchByIds", $body, $query, $extra);
    }

    /**
     * 用ids获取用户
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function getByBatchByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userBasic/batchByIds", $body, $query, $extra);
    }

    /**
     * 获取用户真实证件信息
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function userCardGetReal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userCard/getReal", $body, $query, $extra);
    }

    /**
     * 查询
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function userThirdQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userThird/query", $body, $query, $extra);
    }

    /**
     * 获取签名
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function userRuleGetSign($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userRule/getSign", $body, $query, $extra);
    }

    /**
     * 校验身份
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function containsIdentity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userRole/containsIdentity", $body, $query, $extra);
    }

    /**
     * 获取规则
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function userRuleQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userRule/query", $body, $query, $extra);
    }

    /**
     * 添加用户身份
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function addIdentity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/api/userRole/addIdentity", $body, $query, $extra);
    }

    /**
     * 获取可用进行实名认证的证件类型
     * @param $body
     * @return ResponseInterface
     */
    public function userCardGetType($body)
    {
        return $this->restful("POST", "/v2/api/userCard/getType", $body);
    }
}