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
 * @date   2018-12-03
 * @time   Mon, 03 Dec 2018 17:55:55 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * TokenSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class TokenSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'token.module';

    /**
     * 消费令牌
     * @link https://uniondrug.coding.net/p/module.token/git/blob/development/docs/api/TokenController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeToken($body)
    {
        return $this->restful("POST", "/token/consume", $body);
    }

    /**
     * 获取一个新的订单号
     * @link https://uniondrug.coding.net/p/module.token/git/blob/development/docs/api/OrderNoController/issueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function issueOrderNo($body)
    {
        return $this->restful("POST", "/orderno/issue", $body);
    }

    /**
     * 颁发令牌
     * @link https://uniondrug.coding.net/p/module.token/git/blob/development/docs/api/TokenController/issueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function issueToken($body)
    {
        return $this->restful("POST", "/token/issue", $body);
    }

    /**
     * 加载订单短号到redis
     * @link https://uniondrug.coding.net/p/module.token/git/blob/development/docs/api/OrderNoController/loadAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function loadOrderNo($body)
    {
        return $this->restful("POST", "/orderno/load", $body);
    }
}
