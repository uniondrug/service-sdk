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
 * @date   2019-07-12
 * @time   Fri, 12 Jul 2019 10:59:32 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * OssSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class OssSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'oss.module';

    /**
     * 加密的获取链接
     * @link https://uniondrug.coding.net/p/module.oss/git/blob/development/docs/api/OssController/signUrlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ossSignUrl($body)
    {
        return $this->restful("POST", "/oss/signUrl", $body);
    }

    /**
     * base64文件上传
     * @link https://uniondrug.coding.net/p/module.oss/git/blob/development/docs/api/OssController/uploadBaseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ossUploadBase($body)
    {
        return $this->restful("POST", "/oss/upload/base", $body);
    }

    /**
     * 上传文件
     * @link https://uniondrug.coding.net/p/module.oss/git/blob/development/docs/api/OssController/uploadFileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ossUploadFile($body)
    {
        return $this->restful("POST", "/oss/upload/file", $body);
    }

    /**
     * 上传字符串
     * @link https://uniondrug.coding.net/p/module.oss/git/blob/development/docs/api/OssController/uploadStringAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ossUploadString($body)
    {
        return $this->restful("POST", "/oss/upload/string", $body);
    }
}
