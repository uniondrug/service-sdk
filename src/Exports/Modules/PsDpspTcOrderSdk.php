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
 * @date   2022-03-28
 * @time   Mon, 28 Mar 2022 11:27:58 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDpspTcSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDpspTcOrderSdk extends SdkBase
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
     * 用药人详情
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugUserDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/detail", $body, $query, $extra);
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

    /**
     * 区域详情
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/Order/OrderController/orderAreaDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderAreaDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/orderAreaDetail", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/Order/OrderController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/detail", $body, $query, $extra);
    }

    /**
     * 日志创建
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/Order/OrderController/logCreateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/log/create", $body, $query, $extra);
    }

    /**
     * 日志列表
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/Order/OrderController/logPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/log/page", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/Order/OrderController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/page", $body, $query, $extra);
    }

    /**
     * 新增/修改用药人签名身份证等信息
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/addUserInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addDrugUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/addUserInfo", $body, $query, $extra);
    }

    /**
     * 记录ocr识别失败记录
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/addOcrFailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addOcrFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/addOcrFail", $body, $query, $extra);
    }

    /**
     * 健康信息列表
     * @link https://uniondrug.coding.net/p/order.tc.dpsp.ps/git/blob/development/docs/api/User/DrugUsersController/healthInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function healthInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/healthInfo", $body, $query, $extra);
    }

    /**
     * 根据资源查询是否需要用药人
     * @link https://uniondrug.coding.net/p/ps-dpsp-tc-order/git/blob/development/docs/api/User/DrugUsersController/isNeedByResourceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isNeedDrugUserByResource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/isNeedByResource", $body, $query, $extra);
    }

    /**
     * 获取默认需选择的用药人
     * @link https://uniondrug.coding.net/p/ps-dpsp-tc-order/git/blob/development/docs/api/User/DrugUsersController/getDefaultDrugUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDefaultDrugUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drugUser/getDefaultDrugUser", $body, $query, $extra);
    }
}
