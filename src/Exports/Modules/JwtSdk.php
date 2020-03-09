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
 * @date   2020-03-03
 * @time   Tue, 03 Mar 2020 13:49:55 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JwtSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JwtSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'jwt.module';

    /**
     * 公共支付完成页配置
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/DomainController/commonConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function commonConfig($body)
    {
        return $this->restful("POST", "/domain/commonConfig", $body);
    }

    /**
     * jwt解密
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/JwtController/decodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function decode($body)
    {
        return $this->restful("POST", "/jwt/decode", $body);
    }

    /**
     * 创建
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/DomainController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function domainCreate($body)
    {
        return $this->restful("POST", "/domain/create", $body);
    }

    /**
     * 重定向
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/DomainController/redirectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function domainRedirect($body)
    {
        return $this->restful("POST", "/domain/redirect", $body);
    }

    /**
     * jwt加密
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/JwtController/encodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function encode($body)
    {
        return $this->restful("POST", "/jwt/encode", $body);
    }

    /**
     * 新活动系统code生成openid
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/JwtController/getOpenidAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOpenid($body)
    {
        return $this->restful("POST", "/jwt/getOpenid", $body);
    }

    /**
     * 新活动系统jwt解密
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/JwtController/newDecodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function newDecode($body)
    {
        return $this->restful("POST", "/jwt/newDecode", $body);
    }

    /**
     * 新活动系统jwt加密
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/JwtController/newEncodeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function newEncode($body)
    {
        return $this->restful("POST", "/jwt/newEncode", $body);
    }

    /**
     * 活动重定向
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/DomainController/projectRedirectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectRedirect($body)
    {
        return $this->restful("POST", "/domain/projectRedirect", $body);
    }

    /**
     * 获取分享内容
     * @link https://uniondrug.coding.net/p/module.jwt/git/blob/development/docs/api/ShareController/getAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function shareGet($body)
    {
        return $this->restful("POST", "/share/get", $body);
    }
}
