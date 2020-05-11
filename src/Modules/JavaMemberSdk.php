<?php
/**
 * Created by PhpStorm.
 * User: weng
 * Date: 2020-05-11
 * Time: 10:58
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

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
    public function insert($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/add", $body);
    }

    /**
     * 查询openid
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoOpenId($body)
    {
        return $this->restful("POST", "/v2/api/userThird/query", $body);
    }

    /**
     * 查询account
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoAccount($body)
    {
        return $this->restful("POST", "/v2/api/userBasic/", $body);
    }
}