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
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsMossWeChatSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsMossWeChatSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-moss-wechat';

    /**
     * 根据手机号获取公众号二维码
     * @param $body
     * @return ResponseInterface
     */
    public function queryQrCodeByMobile($body)
    {
        return $this->restful("POST", "/subscribe/qr/code", $body);
    }

    /**
     * 处理微信回调
     * @param $body
     * @return ResponseInterface
     */
    public function handleCallback($body)
    {
        return $this->restful("POST", "/subscribe/create", $body);
    }

    /**
     * 获取用户关注状态
     * @param $body
     * @return ResponseInterface
     */
    public function subscribeStatus($body)
    {
        return $this->restful("POST", "/subscribe/status", $body);
    }
}

