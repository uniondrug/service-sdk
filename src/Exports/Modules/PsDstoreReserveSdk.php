<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Reserves`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2021-08-05
 * @time   Thu, 05 Aug 2021 18:45:48 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreReserveSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreReserveSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-reserve';

    /**
     * 取消
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/cancelAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveCancel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/cancel", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/detail", $body, $query, $extra);
    }

    /**
     * 取消原因已读
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/isReadAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveIsRead($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/isRead", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reservePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/page", $body, $query, $extra);
    }

    /**
     * 通过
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/passAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reservePass($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/pass", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/update", $body, $query, $extra);
    }

    /**
     * 核销
     * @link https://uniondrug.coding.net/p/reserve.dstore.ps/git/blob/development/docs/api/ReserveController/verifyAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function reserveVerify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reserve/verify", $body, $query, $extra);
    }
}
