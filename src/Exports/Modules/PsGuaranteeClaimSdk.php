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
 * @date   2021-12-29
 * @time   Wed, 29 Dec 2021 16:20:21 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsGuaranteeClaimSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsGuaranteeClaimSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-guarantee-claim';


    /**
     * 发起理赔
     * @link https://uniondrug.coding.net/p/ps-guarantee-claim/git/tree/development/docs/api/ClaimController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/create", $body, $query, $extra);
    }

    /**
     * 保障理赔记录投保
     * @link https://uniondrug.coding.net/p/ps-guarantee-claim/git/tree/development/docs/api/ClaimController/guaranteeRecordInsureAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeClaimRecordInsure($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/guarantee/record/insure", $body, $query, $extra);
    }

    /**
     * 理赔详情
     * @link https://uniondrug.coding.net/p/ps-guarantee-claim/git/tree/development/docs/api/ClaimController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/claim/detail", $body, $query, $extra);
    }
}
