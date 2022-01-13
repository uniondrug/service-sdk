<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Orders`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-01-08
 * @time   Sat, 08 Jan 2022 17:47:48 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDpspTcSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDpspTcSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dpsp-tc-order';

    /**
     * 添加/修改用药人
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addDrugUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/add", $body, $query, $extra);
    }

    /**
     * 删除用药人
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteDrugUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/delete", $body, $query, $extra);
    }

    /**
     * 用药人列表
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/list", $body, $query, $extra);
    }
}
