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
 * @date   2020-12-08
 * @time   Tue, 08 Dec 2020 11:22:00 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * HsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class HsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'hs.module';

    /**
     * 单个商品履约 /goods/bind
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/GoodsController/bindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bindGoods($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/bind", $body, $query, $extra);
    }

    /**
     * 批量查询是否可回收 /record/getCanRecover
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/getCanRecoverAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRecordCanRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/getCanRecover", $body, $query, $extra);
    }

    /**
     * 体检新回调 /outer/callback/physicalUpdate2
     * v1.14
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Outer/CallbackController/physicalUpdate2Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function physicalCallback($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/outer/callback/physicalUpdate2", $body, $query, $extra);
    }

    /**
     * 批量流水号查询 /record/queryBatch
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/queryBatchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function queryBatchRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/queryBatch", $body, $query, $extra);
    }

    /**
     * 单个流水号查询 /record/queryOne
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/queryOneAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function queryRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/queryOne", $body, $query, $extra);
    }

    /**
     * 批量回收 /record/recoverBatch
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/recoverBatchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recoverBatchRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/recoverBatch", $body, $query, $extra);
    }
}
