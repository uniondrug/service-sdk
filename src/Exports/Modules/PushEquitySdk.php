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
 * @date   2020-06-29
 * @time   Mon, 29 Jun 2020 11:49:25 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PushEquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PushEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'push.equity.module';

    /**
     * 获取token
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/AccessController/tokenAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function accessToken($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/access/token", $body, $query, $extra);
    }

    /**
     * 项目绑定角色
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleController/bindRoleAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bindRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/bindRole", $body, $query, $extra);
    }

    /**
     * 分组新增
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/GroupController/addAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/add", $body, $query, $extra);
    }

    /**
     * 分组提额
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/GroupController/modifyMoneyAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupModifyMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/modifyMoney", $body, $query, $extra);
    }

    /**
     * 新增产品
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/PackageController/addAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/add", $body, $query, $extra);
    }

    /**
     * 产品保障关联
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/PackageController/packageGroupRelationAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGroupRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/group/relate", $body, $query, $extra);
    }

    /**
     * 保障新增
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/PackageController/guaranteeAddAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/guarantee/add", $body, $query, $extra);
    }

    /**
     * 产品保障关联
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/PackageController/packageGuaranteeRelationAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteeRelation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/guarantee/relate", $body, $query, $extra);
    }

    /**
     * addRoleAction()
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleController/addRoleAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/add", $body, $query, $extra);
    }

    /**
     * 角色列表页
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleController/pagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rolePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/paging", $body, $query, $extra);
    }

    /**
     * addDataAction()
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleStructController/addDataAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleStructAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/struct/add", $body, $query, $extra);
    }

    /**
     * delAction()
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleStructController/delAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleStructDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/struct/del", $body, $query, $extra);
    }

    /**
     * addDataAction()
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleUrlController/addDataAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleUrlAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/url/add", $body, $query, $extra);
    }

    /**
     * delAction()
     * @link https://uniondrug.coding.net/p/module.equity.push/git/blob/development/module.equity.push/api/RoleUrlController/delAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleUrlDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/url/del", $body, $query, $extra);
    }
}
