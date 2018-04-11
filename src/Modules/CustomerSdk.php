<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * 客户管理
 * @package Uniondrug\ServiceSdk\Modules
 */
class CustomerSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'customer';

    /**
     * 添加客户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/customer/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addCustomer($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/add", $body);
    }

    /**
     * 删除客户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/customer/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delCustomer($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/del", $body);
    }

    /**
     * 编辑客户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/customer/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editCustomer($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/edit", $body);
    }
    /**
     * 读取客户资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/customer/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/info", $body);
    }

    /**
     * 读取客户分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/customer/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getCustomerPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/customer/paging", $body);
    }


    /**
     * 添加雇员
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employee/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addEmployee($body)
    {
        return $this->restful(static::METHOD_POST, "/employee/add", $body);
    }

    /**
     * 删除雇员
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employee/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delEmployee($body)
    {
        return $this->restful(static::METHOD_POST, "/employee/del", $body);
    }

    /**
     * 编辑雇员
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employee/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editEmployee($body)
    {
        return $this->restful(static::METHOD_POST, "/employee/edit", $body);
    }

    /**
     * 查看雇员
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employee/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getEmployeeInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/employee/info", $body);
    }

    /**
     * 雇员分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employee/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getEmployeePaging($body)
    {
        return $this->restful(static::METHOD_POST, "/employee/paging", $body);
    }

    /**
     * 添加雇员标签
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employeeTag/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addEmployeeTag($body)
    {
        return $this->restful(static::METHOD_POST, "/employeeTag/add", $body);
    }

    /**
     * 删除雇员标签
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employeeTag/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delEmployeeTag($body)
    {
        return $this->restful(static::METHOD_POST, "/employeeTag/del", $body);
    }

    /**
     * 编辑雇员标签
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employeeTag/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editEmployeeTag($body)
    {
        return $this->restful(static::METHOD_POST, "/employeeTag/edit", $body);
    }

    /**
     * 查看雇员标签
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employeeTag/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getEmployeeTagInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/employeeTag/info", $body);
    }

    /**
     * 雇员标签分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/customer/employeeTag/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getEmployeeTagPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/employeeTag/paging", $body);
    }

}
