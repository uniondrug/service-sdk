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
 * @date   2019-07-24
 * @time   Wed, 24 Jul 2019 11:27:13 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * PoolSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PoolSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'pool';

    /**
     * 连锁资金池余额
     * @link https://uniondrug.coding.net/p/module.pool/git/blob/development/docs/api/PoolController/partnerFinalFundAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getPartnerFinalFund($body)
    {
        return $this->restful("POST", "/pool/partnerFinalFund", $body);
    }
}
