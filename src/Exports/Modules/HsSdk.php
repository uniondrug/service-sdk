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
 * @date   2020-06-04
 * @time   Thu, 04 Jun 2020 19:03:33 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

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
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bindGoods($body)
    {
        return $this->restful("POST", "/goods/bind", $body);
    }

    /**
     * 批量查询是否可回收 /record/getCanRecover
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/getCanRecoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRecordCanRecover($body)
    {
        return $this->restful("POST", "/record/getCanRecover", $body);
    }

    /**
     * 批量流水号查询 /record/queryBatch
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/queryBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryBatchRecord($body)
    {
        return $this->restful("POST", "/record/queryBatch", $body);
    }

    /**
     * 单个流水号查询 /record/queryOne
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/queryOneAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryRecord($body)
    {
        return $this->restful("POST", "/record/queryOne", $body);
    }

    /**
     * 批量回收 /record/recoverBatch
     * @link https://uniondrug.coding.net/p/module.hs/git/blob/development/docs/api/Order/RecordController/recoverBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function recoverBatchRecord($body)
    {
        return $this->restful("POST", "/record/recoverBatch", $body);
    }
}
