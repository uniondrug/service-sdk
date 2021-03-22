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
 * @date   2021-03-21
 * @time   Sun, 21 Mar 2021 22:26:52 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreCustomerSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreCustomerSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-customer';

    /**
     * 初始化
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/MessageController/acceptAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageAccept($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/accept", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/MessageController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/detail", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/MessageController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/paging", $body, $query, $extra);
    }

    /**
     * 发送消息
     * @link https://uniondrug.coding.net/p/ps-dstore-cart/ps-dstore-cart/docs/api/MessageController/sendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageSend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/send", $body, $query, $extra);
    }
}
