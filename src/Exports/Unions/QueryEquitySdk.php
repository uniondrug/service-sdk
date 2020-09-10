<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Unions`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-06-24
 * @time   Wed, 24 Jun 2020 14:38:24 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * QueryEquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class QueryEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'query.equity.union';

    /**
     * 获取token
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/AccessController/tokenAction.md
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
     * 保障列表admin
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GuaranteeController/adminPagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function adminPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/adminpaging", $body, $query, $extra);
    }

    /**
     * 项目绑定角色
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleController/bindRoleAction.md
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
     * 权益详情(根据权益id 或权益卡号 查找权益详情)
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/EquityController/detailAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityByEquityNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detail", $body, $query, $extra);
    }

    /**
     * 权益详情 (根据权益id  查找权益详情)
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/EquityController/getEquityByIdAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityById($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detail/equityId", $body, $query, $extra);
    }

    /**
     * 换新保障列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GuaranteeController/changePagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteeChangePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/change/paging", $body, $query, $extra);
    }

    /**
     * 统计用户换新保障金额
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GuaranteeController/changeTotalAmountAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteeChangeTotalAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/change/total/amount", $body, $query, $extra);
    }

    /**
     * 保障详情
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/detail", $body, $query, $extra);
    }

    /**
     * 简单权益分页列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/EquityController/simplePagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSimpleEquityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/simple/paging", $body, $query, $extra);
    }

    /**
     * 简单保障分页列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GuaranteeController/pagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSimpleGuaranteePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/simple/paging", $body, $query, $extra);
    }

    /**
     * 分组列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/GroupController/pagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/paging", $body, $query, $extra);
    }

    /**
     * 产品详情
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/PackageController/detailAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/detail", $body, $query, $extra);
    }

    /**
     * 产品列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/PackageController/packagePagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/paging", $body, $query, $extra);
    }

    /**
     * 项目下的用户拥有的权益和总金额计算
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/EquityController/projectMemberAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/projectmember", $body, $query, $extra);
    }

    /**
     * 项目列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/paging", $body, $query, $extra);
    }

    /**
     * addRoleAction()
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleController/addRoleAction.md
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
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleController/pagingAction.md
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
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleStructController/addDataAction.md
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
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleStructController/delAction.md
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
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleUrlController/addDataAction.md
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
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/RoleUrlController/delAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleUrlDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/role/url/del", $body, $query, $extra);
    }

    /**
     * 获取总金额 和保障总额
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/EquityController/getTotalFeeAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function totalFee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/totalfee", $body, $query, $extra);
    }

    /**
     * 权益保障产品列表
     * @link https://uniondrug.coding.net/p/union.equity.query/git/blob/development/union.equity.query/api/PackageController/guaranteesPagingAction.md
     * @param array $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function packageGuaranteesPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/package/guarantees/paging", $body, $query, $extra);
    }
}
