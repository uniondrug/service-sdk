<?php
/**
 * Created by PhpStorm.
 * User: wangk
 * Date: 2019-02-21
 * Time: 10:53
 */
namespace Uniondrug\ServiceSdk\Modules;

use App\Errors\Error;
use Uniondrug\Service\ClientResponse;
use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JwtSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'jwt';

    /**
     * 创建登录信息
     * @param array $body
     * @return ClientResponseInterface
     */
    public function authCreate($body)
    {
        $res = $this->restful(static::METHOD_POST, '/auth/create', $body);
        if (!$res->hasError()) {
            // 设置cookie
            $data = $res->getData();
            setcookie("jwt", $data->jwt);
            setcookie("project", $data->project);
        }
        return $res;
    }

    /**
     * 验证解析登录信息
     * @param $body
     * @param \Redis $redis
     * @return ClientResponse
     */
    public function authParse($body, $redis)
    {
        $result = new ClientResponse();
        switch (true) {
            case empty($body['channel']):
                $result->setErrno(500);
                $result->setError("channel入参有误");
                break;
            case empty($_COOKIE['project']):
                $result->setErrno(500);
                $result->setError("project入参有误");
                break;
            case empty($_COOKIE['jwt']):
                $result->setErrno(500);
                $result->setError("jwt入参有误");
                break;
            default:
                $hashKey = $body['channel'] . "jwt" . $_COOKIE['project'];
                $key = $_COOKIE['jwt'];
        }
        $value = $redis->hGet($hashKey, $key);
        $data = json_decode($value);
        if (!$value || !$data) {
            $result->setErrno(401);
            $result->setError("登录失效");
        } else {
            $result->setData($data);
        }
        return $result;
    }
}