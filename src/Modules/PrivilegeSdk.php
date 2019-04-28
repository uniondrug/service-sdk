<?php
/**
 * @author liyang <9521 54830@qq.com>
 * @date   2018-12-11
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 特权活动模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class PrivilegeSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'privilege';

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
