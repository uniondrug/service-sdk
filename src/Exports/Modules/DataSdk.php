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
 * @date   2018-12-25
 * @time   Tue, 25 Dec 2018 15:48:21 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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

    /**
     * 新增区域
     * @link https://uniondrug.coding.net/p/module.data/git/blob/development/docs/api/NewAreaController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function newAreaAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/newarea/add", $body, $query, $extra);
    }

    /**
     * 根据 地区编码/省市区名称 获取上级数组
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function newAreaCode($body)
    {
        return $this->restful("POST", "/newarea/code", $body);
    }

    /**
     * 父级区域列表
     * @link https://uniondrug.coding.net/p/module.data/git/blob/development/docs/api/NewAreaController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function newAreaCodeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/newarea/newarealist", $body, $query, $extra);
    }

    /**
     * 修改区域
     * @link https://uniondrug.coding.net/p/module.data/git/blob/development/docs/api/NewAreaController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function newAreaEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/newarea/edit", $body, $query, $extra);
    }

    /**
     * 区域id查询
     * @link https://uniondrug.coding.net/p/module.data/git/blob/development/docs/api/NewAreaController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function newAreaInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/newarea/info", $body, $query, $extra);
    }
}
