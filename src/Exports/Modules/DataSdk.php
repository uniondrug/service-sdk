<?php
/**
 * @author htr
 * @date   2018-04-23
 */
namespace Uniondrug\ServiceSdk\Modules;

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
