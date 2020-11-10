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
 * @date   2020-11-06
 * @time   Fri, 06 Nov 2020 16:27:08 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDesktoptoolSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDesktoptoolSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps.desktoptool.module';

    /**
     * 统计安装量
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/StatisticsController/countInstallsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countInstalls($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/countInstalls", $body, $query, $extra);
    }

    /**
     * 创建电子处方
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/ElectronicPrescriptionController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function create($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/electronicPrescription/create", $body, $query, $extra);
    }

    /**
     * 创建线下处方
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/ElectronicPrescriptionController/createOffLineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createOffLine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/electronicPrescription/createOffLine", $body, $query, $extra);
    }

    /**
     * 根据uuid、设备标识等生成二维码需要的code
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/UserController/getCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getCode", $body, $query, $extra);
    }

    /**
     * 根据流水查询处方信息
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/ElectronicPrescriptionController/getDetailByWaterNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDetailByWaterNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/electronicPrescription/getDetailByWaterNo", $body, $query, $extra);
    }

    /**
     * 查询登录信息
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/UserController/getLoginInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getLoginInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getLoginInfo", $body, $query, $extra);
    }

    /**
     * 到家订单查询
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/HomeOrderController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function homeOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/homeOrder/paging", $body, $query, $extra);
    }

    /**
     * 登录
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/UserController/loginAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function login($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/login", $body, $query, $extra);
    }

    /**
     * 退出
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/UserController/logoutAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logout($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/logout", $body, $query, $extra);
    }

    /**
     * 菜单列表
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/Privilege/MenuController/menuListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function menuList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/menu/list", $body, $query, $extra);
    }

    /**
     * 处方分页查询
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/ElectronicPrescriptionController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function prescriptionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/electronicPrescription/paging", $body, $query, $extra);
    }

    /**
     * 打印电子处方
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/ElectronicPrescriptionController/printAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function printPrescription($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/electronicPrescription/print", $body, $query, $extra);
    }

    /**
     * 生成登录二维码
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/UserController/qrCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qrCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/qrCode", $body, $query, $extra);
    }

    /**
     * 菜单待处理数量
     * @link https://uniondrug.coding.net/p/module.desktoptool.ps/git/blob/development/docs/api/Privilege/MenuController/waitHandleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function waitHandle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/menu/waitHandle", $body, $query, $extra);
    }
}
