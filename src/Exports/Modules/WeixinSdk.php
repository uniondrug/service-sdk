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
 * @date   2019-08-29
 * @time   Thu, 29 Aug 2019 17:52:04 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * WeixinSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class WeixinSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'wx.module';

    /**
     * 获取accessToken接口
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/WxController/tokenAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function accessToken($body)
    {
        return $this->restful("POST", "/wx/token", $body);
    }

    /**
     * 配置接口
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/WxController/configAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function config($body)
    {
        return $this->restful("POST", "/wx/config", $body);
    }

    /**
     * 创建tag
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/TagController/createTagAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function createTag($body)
    {
        return $this->restful("POST", "/tag/createTag", $body);
    }

    /**
     * decryptAction()
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/ProgramController/decryptAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function decrypt($body)
    {
        return $this->restful("POST", "/program/decrypt", $body);
    }

    /**
     * 绑定标签
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/TagController/getIdListAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getIdList($body)
    {
        return $this->restful("POST", "/tag/getIdList", $body);
    }

    /**
     * 用code换取openid
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/WxController/openidAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getOpenIdByCode($body)
    {
        return $this->restful("POST", "/wx/openid", $body);
    }

    /**
     * 获取标签列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/TagController/getAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getTags($body)
    {
        return $this->restful("POST", "/tag/get", $body);
    }

    /**
     * 获取微信用户信息接口
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/WxController/infoAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful("POST", "/wx/info", $body);
    }

    /**
     * 绑定标签
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/TagController/labelAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function labelTag($body)
    {
        return $this->restful("POST", "/tag/label", $body);
    }

    /**
     * 设置短链接
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/WxController/shortUrlAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function shortUrl($body)
    {
        return $this->restful("POST", "/wx/shortUrl", $body);
    }

    /**
     * code获取ticket、openid
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/ProgramController/ticketAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function ticket($body)
    {
        return $this->restful("POST", "/program/ticket", $body);
    }

    /**
     * 创建二维码
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/ProgramController/createQRCodeAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function createQRCode($body)
    {
        return $this->restful("POST", "/wx/createQRCode", $body);
    }

    public function getUserinfo3rd($body)
    {
        return $this->restful("POST", "/qyWx/getUserinfo3rd", $body);
    }
}
