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
 * @date   2021-05-14
 * @time   Fri, 14 May 2021 14:30:08 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreEsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreEsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-es';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-dstore-es/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-dstore-es/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/detail", $body, $query, $extra);
    }

    /**
     * ids
     * @link https://uniondrug.coding.net/p/ps-dstore-es/git/blob/development/docs/api/AssistantController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/ids", $body, $query, $extra);
    }

    /**
     * 查询
     * @link https://uniondrug.coding.net/p/ps-dstore-es/git/blob/development/docs/api/AssistantController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/paging", $body, $query, $extra);
    }
}
