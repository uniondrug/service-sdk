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
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class ErpsvrBmpisJsSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class ErpsvrBmpisJsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'erpsvr-bmpis-js';

    /**
     * erp-药店宝会员注册
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function V1DstoreRegister($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v1/dstore/register", $body, $query, $extra);
    }

    /**
     * erp-药店宝储值卡余额查询
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function V1DstoreQueryCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v1/dstore/queryCard", $body, $query, $extra);
    }

    /**
     * erp-药店宝储值卡积分试算
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function V1DstoreDstoreTrial($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v1/dstore/dstoreTrial", $body, $query, $extra);
    }

    /**
     * erp-药店宝积分余额查询
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function V1DstoreQueryCredit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v1/dstore/queryCredit", $body, $query, $extra);
    }

    /**
     * erp-药店宝商品批次库存查询
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function V1DstoreQueryGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v1/dstore/queryGoods", $body, $query, $extra);
    }
}
