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
 * @date   2020-09-21
 * @time   Mon, 21 Sep 2020 16:17:16 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreCartSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreCartSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-cart';

    /**
     * 修改处方单数据
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartPrescriptionController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartPrescriptionUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/prescription/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartRecordsCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartRecordsDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/detail", $body, $query, $extra);
    }

    /**
     * 购物车列表
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartRecordsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/paging", $body, $query, $extra);
    }

    /**
     * 使其列表展示
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/showAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartRecordsShow($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/show", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartRecordsUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/update", $body, $query, $extra);
    }

    /**
     * 同步处方状态
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/CartRecordsController/syncPrescriptionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cartSyncPrescription($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/cart/records/syncPrescription", $body, $query, $extra);
    }

    /**
     * v1Action()
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/IndexController/v1Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function v1($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/index/v1", $body, $query, $extra);
    }
}
