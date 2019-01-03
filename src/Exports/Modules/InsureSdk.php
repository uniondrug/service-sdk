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
 * @date   2019-01-03
 * @time   Thu, 03 Jan 2019 13:08:14 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * InsureSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InsureSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'insure.module';

    /**
     * 新增一个投保记录
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/insure/add", $body);
    }

    /**
     * 添加投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPolicy($body)
    {
        return $this->restful("POST", "/policy/add", $body);
    }

    /**
     * 查看投保详情
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/insure/detail", $body);
    }

    /**
     * 下载卡号
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/CodeController/downloadAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downloadCodes($body)
    {
        return $this->restful("POST", "/code/download", $body);
    }

    /**
     * 修改投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editPolicy($body)
    {
        return $this->restful("POST", "/policy/edit", $body);
    }

    /**
     * 获取投保分页的部分信息
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/getPartPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPartPaging($body)
    {
        return $this->restful("POST", "/insure/getPartPaging", $body);
    }

    /**
     * 查询显示投保的列表
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/getPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/insure/getPaging", $body);
    }

    /**
     * 投保单分页浏览
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingPolicy($body)
    {
        return $this->restful("POST", "/policy/paging", $body);
    }

    /**
     * 更新投保的记录
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/insure/update", $body);
    }

    /**
     * 更新投保理赔金额
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/InsureController/updateMoneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateMoney($body)
    {
        return $this->restful("POST", "/insure/updateMoney", $body);
    }

    /**
     * 查看投保单
     * @link https://uniondrug.coding.net/p/module.insure/git/tree/development/docs/api/PolicyController/viewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function viewPolicy($body)
    {
        return $this->restful("POST", "/policy/view", $body);
    }
}
