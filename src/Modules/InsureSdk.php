<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2018-11-01
 * @time   Thu, 01 Nov 2018 18:22:24 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * InsureSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InsureSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'insure';

    /**
     * 新增一个投保记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/insure/add", $body);
    }

    /**
     * 查看投保详情
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/insure/detail", $body);
    }

    /**
     * 查询显示投保的列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/getPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/insure/getPaging", $body);
    }

    /**
     * 更新投保的记录
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/insure/update", $body);
    }

    /**
     * 更新投保理赔金额
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/updateMoneyAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateMoney($body)
    {
        return $this->restful("POST", "/insure/updateMoney", $body);
    }

    /**
     * 获取投保分页的部分信息
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/InsureController/getPartPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getPartPaging($body)
    {
        return $this->restful("POST", "/insure/getPartPaging", $body);
    }

    /**
     * 添加投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addPolicy($body)
    {
        return $this->restful("POST", "/policy/add", $body);
    }

    /**
     * 下载卡号
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/CodeController/downloadAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function downloadCodes($body)
    {
        return $this->restful("POST", "/code/download", $body);
    }

    /**
     * 修改投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function editPolicy($body)
    {
        return $this->restful("POST", "/policy/edit", $body);
    }

    /**
     * 投保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function pagingPolicy($body)
    {
        return $this->restful("POST", "/policy/paging", $body);
    }

    /**
     * 查看投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/viewAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function viewPolicy($body)
    {
        return $this->restful("POST", "/policy/view", $body);
    }

    /**
     * 理赔
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/ClaimController/claimAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function claim($body)
    {
        return $this->restful("POST", "/claim/claim", $body);
    }

    /**
     * 创建投保计划
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addPlan($body)
    {
        return $this->restful("POST", "/plan/add", $body);
    }

    /**
     * 获取投保计划列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getPlanPaging($body)
    {
        return $this->restful("POST", "/plan/paging", $body);
    }

    /**
     * 删除投保计划列表
     * @link https://uniondrug.coding.net/p/module.insure/git/blob/development/docs/api/PlanController/deleteAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function deletePlan($body)
    {
        return $this->restful("POST", "/plan/delete", $body);
    }
}
