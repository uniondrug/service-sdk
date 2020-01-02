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
 * @date   2019-12-27
 * @time   Fri, 27 Dec 2019 09:42:35 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ClaimEquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ClaimEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'claim.equity.module';

    /**
     * 理赔数据入库
     * @link https://uniondrug.coding.net/p/module.equity.claim/git/blob/development/docs/api/Api/ClaimController/claimRecordAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimRecord($body)
    {
        return $this->restful("POST", "/api/claim/", $body);
    }

    /**
     * 投保
     * @link https://uniondrug.coding.net/p/module.equity.claim/git/blob/development/docs/api/Api/PolicyController/policyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function policy($body)
    {
        return $this->restful("POST", "/api/policy/", $body);
    }

    /**
     * 下载投保文件
     * @link https://uniondrug.coding.net/p/module.equity.claim/git/blob/development/docs/api/Api/PolicyDownloadController/policyDownloadAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function policyDownload($body)
    {
        return $this->restful("POST", "/api/policyDownload/", $body);
    }
}
