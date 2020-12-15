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
 * @date   2020-12-15
 * @time   Tue, 15 Dec 2020 09:56:07 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * OtcSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class OtcSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'otc.module';

    /**
     * 开方接口
     * @link https://uniondrug.coding.net/p/module.otc/git/blob/development/docs/api/OtcElecrxController/applyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function apply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/otcElecrx/apply", $body, $query, $extra);
    }

    /**
     * 处方详情接口
     * @link https://uniondrug.coding.net/p/module.otc/git/blob/development/docs/api/OtcElecrxController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/otcElecrx/detail", $body, $query, $extra);
    }

    /**
     * 用户处方列表
     * @link https://uniondrug.coding.net/p/module.otc/git/blob/development/docs/api/OtcElecrxController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function list($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/otcElecrx/list", $body, $query, $extra);
    }

    /**
     * 核销处方接口
     * @link https://uniondrug.coding.net/p/module.otc/git/blob/development/docs/api/OtcElecrxController/verifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function verify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/otcElecrx/verify", $body, $query, $extra);
    }
}
