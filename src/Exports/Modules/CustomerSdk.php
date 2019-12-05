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
 * @date   2019-12-05
 * @time   Thu, 05 Dec 2019 18:59:22 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CustomerSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CustomerSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'customer.module';

    /**
     * addAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addCustomer($body)
    {
        return $this->restful("POST", "/customer/add", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addEmployee($body)
    {
        return $this->restful("POST", "/employee/add", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addEmployeeTag($body)
    {
        return $this->restful("POST", "/employeeTag/add", $body);
    }

    /**
     * delAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delCustomer($body)
    {
        return $this->restful("POST", "/customer/del", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delEmployee($body)
    {
        return $this->restful("POST", "/employee/del", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delEmployeeTag($body)
    {
        return $this->restful("POST", "/employeeTag/del", $body);
    }

    /**
     * editAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editCustomer($body)
    {
        return $this->restful("POST", "/customer/edit", $body);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editEmployee($body)
    {
        return $this->restful("POST", "/employee/edit", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editEmployeeTag($body)
    {
        return $this->restful("POST", "/employeeTag/edit", $body);
    }

    /**
     * idsAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCustomerByIds($body)
    {
        return $this->restful("POST", "/customer/ids", $body);
    }

    /**
     * infoAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCustomerInfo($body)
    {
        return $this->restful("POST", "/customer/info", $body);
    }

    /**
     * numberAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/numberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCustomerNumber($body)
    {
        return $this->restful("POST", "/customer/number", $body);
    }

    /**
     * pagingAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/CustomerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCustomerPaging($body)
    {
        return $this->restful("POST", "/customer/paging", $body);
    }

    /**
     * 获取雇员IDs
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeByIds($body)
    {
        return $this->restful("POST", "/employee/ids", $body);
    }

    /**
     * 根据customerId获取雇员数量
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/employeeCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeCount($body)
    {
        return $this->restful("POST", "/employee/EmployeeCount", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeInfo($body)
    {
        return $this->restful("POST", "/employee/info", $body);
    }

    /**
     * infoByMobileAction()
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/infoByMobileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeInfoByMobile($body)
    {
        return $this->restful("POST", "/employee/infoByMobile", $body);
    }

    /**
     * 雇员分页列表
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeePaging($body)
    {
        return $this->restful("POST", "/employee/paging", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeTagInfo($body)
    {
        return $this->restful("POST", "/employeeTag/info", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeTagList($body)
    {
        return $this->restful("POST", "/employeeTag/list", $body);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.customer/git/blob/development/docs/api/EmployeeTagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEmployeeTagPaging($body)
    {
        return $this->restful("POST", "/employeeTag/paging", $body);
    }
}
