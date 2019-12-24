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
 * @date   2019-12-24
 * @time   Tue, 24 Dec 2019 11:07:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * PrivilegeSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PrivilegeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'privilege.module';

    /**
     * 创建领取任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createMemberTask($body)
    {
        return $this->restful("POST", "/member/task/create", $body);
    }

    /**
     * 获取用户包含某个增值服务的所有任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailInfoByMidAndPIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailInfoByMidAndPid($body)
    {
        return $this->restful("POST", "/member/task/detail/info", $body);
    }

    /**
     * 获取明细列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/detailListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskDetailList($body)
    {
        return $this->restful("POST", "/member/task/detail/list", $body);
    }

    /**
     * 获取特权任务列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskList($body)
    {
        return $this->restful("POST", "/member/task/list", $body);
    }

    /**
     * 统计任务的领取数量和领取的积分
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/pointCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskPointCount($body)
    {
        return $this->restful("POST", "/member/task/point/count", $body);
    }

    /**
     * 更新领取特权任务信息
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberTaskUpdate($body)
    {
        return $this->restful("POST", "/member/task/update", $body);
    }

    /**
     * 创建订单记录
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRecordCreate($body)
    {
        return $this->restful("POST", "/order/record/create", $body);
    }

    /**
     * 获取特权任务订单详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/OrderRecordController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRecordInfo($body)
    {
        return $this->restful("POST", "/order/record/info", $body);
    }

    /**
     * 根据某一列值求另外一列的和
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MemberTaskController/sumColumnByConditionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sumColumnByCondition($body)
    {
        return $this->restful("POST", "/member/task/sum/column", $body);
    }

    /**
     * 新增任务
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskAdd($body)
    {
        return $this->restful("POST", "/task/add", $body);
    }

    /**
     * 任务详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskDetail($body)
    {
        return $this->restful("POST", "/task/detail", $body);
    }

    /**
     * 任务编辑
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskEdit($body)
    {
        return $this->restful("POST", "/task/edit", $body);
    }

    /**
     * 任务分页
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/TaskController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskPaging($body)
    {
        return $this->restful("POST", "/task/paging", $body);
    }
}
