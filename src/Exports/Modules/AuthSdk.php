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
 * @date   2020-04-21
 * @time   Tue, 21 Apr 2020 16:03:10 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * AuthSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AuthSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'auth.module';

    /**
     * 被加黑名单
     * @link https://uniondrug.coding.net/p/module.auth/git/blob/development/docs/api/AuthController/blacklistAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function blacklist($body)
    {
        return $this->restful("POST", "/auth/blacklist", $body);
    }

    /**
     * 登录
     * @link https://uniondrug.coding.net/p/module.auth/git/blob/development/docs/api/AuthController/loginAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function login($body)
    {
        return $this->restful("POST", "/auth/login", $body);
    }

    /**
     * 登出
     * @link https://uniondrug.coding.net/p/module.auth/git/blob/development/docs/api/AuthController/logoutAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logout($body)
    {
        return $this->restful("POST", "/auth/logout", $body);
    }
}
