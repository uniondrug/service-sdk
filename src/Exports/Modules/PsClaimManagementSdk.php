<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Managements`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-01-20
 * @time   Thu, 20 Jan 2022 10:17:13 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Managements;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsClaimManagementSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsClaimManagementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-claim-management';

    /**
     * 资料详情
     * @link https://uniondrug.coding.net/p/management.claim.ps/git/blob/development/docs/api/OrderInfoSupplyController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderInfoDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/info/detail", $body, $query, $extra);
    }

    /**
     * 资料补充
     * @link https://uniondrug.coding.net/p/management.claim.ps/git/blob/development/docs/api/OrderInfoSupplyController/supplyAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderInfoSupply($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/info/supply", $body, $query, $extra);
    }
}
