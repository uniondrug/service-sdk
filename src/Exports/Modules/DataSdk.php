<?php
<?
php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2018-12-25
 * @time   Tue, 25 Dec 2018 15:48:21 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * Class DataSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DataSdk extends SdkBase
{
    protected $serviceName = 'data.module';

    /**
     * 地址区域tree
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/areas/getTree.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getTree($body)
    {
        return $this->restful("POST", "/areas/tree", $body);
    }

    /**
     * 用code码获取列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/areas/getDetail.md
     * @param array $body
     * @return ResponseInterface
     */
    public function getDetail($body)
    {
        return $this->restful("POST", "/areas/detail", $body);
    }

    /**
     * 发送验证码
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/sms/sendCaptcha.md
     * @param array $body
     * @return ResponseInterface
     */
    public function sendCaptcha($body)
    {
        return $this->restful("POST", "/sms/sendCaptcha", $body);
    }

    /**
     * 对验证码进行验证
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/sms/validateCaptcha.md
     * @param array $body
     * @return ResponseInterface
     */
    public function validateCaptcha($body)
    {
        return $this->restful("POST", "/sms/validateCaptcha", $body);
    }

    /**
     * 地区模糊模询
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/sms/validateCaptcha.md
     * @param array $body
     * @return ResponseInterface
     */
    public function areasSearch($body)
    {
        return $this->restful("POST", "/areas/search", $body);
    }
}
