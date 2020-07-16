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
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/v2/api/userMajor/queryBy", $body);
    }

    /**
     * 用户列表集合 MemberId[]
     * @link https://uniondrug.coding.net/p/java.middlend.usercenter/d/java.middlend.usercenter/git/tree/feature_api_v1.0.2/api-docs/uniondrug.usercenter.provider/UserIdentityApiController/batchInfoByMemberIdsApi.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/v2/api/identity/batchInfoByMemberIds", $body);
    }
}