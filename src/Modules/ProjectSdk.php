<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 项目服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'project';

    /**
     * 提交项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/approval.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function approvalProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/approval", $body);
    }

    /**
     * 通过cdKey绑定权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/bindEquityByCdKeyAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function bindEquityByCdKey($body)
    {
        return $this->restful(static::METHOD_POST, "/user/bindEquityByCdKey", $body);
    }

    /**
     * 获取审批列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/getApprovalList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getApprovalList($body)
    {
        return $this->restful(static::METHOD_POST, "/approval/list", $body);
    }

    /**
     * 取消项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/cancel.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function cancelProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/cancel", $body);
    }

    /**
     * 接受(通过)项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/accept.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function acceptProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/accept", $body);
    }

    /**
     * 拒绝(驳回)项目审批
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/refuse.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function refuseProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/refuse", $body);
    }

    /**
     * 设置项目状态为: 执行中
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/start.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function startProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/start", $body);
    }

    /**
     * 设置项目状态为: 已暂停
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/pause.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pauseProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/pause", $body);
    }

    /**
     * 重建统计
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/pause.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function statisticProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/statistic", $body);
    }

    /**
     * 添加项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/add", $body);
    }

    /**
     * 编辑项目
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/edit", $body);
    }

    /**
     * 删除项目(状态为: 草稿、已驳回)
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/delete.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function deleteProject($body)
    {
        return $this->restful(static::METHOD_POST, "/project/delete", $body);
    }

    /**
     * 读取项目分页列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/project/paging", $body);
    }

    /**
     * 根据多种状态查询项目分页列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/get.pagingByStatus.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function pagingByStatus($body)
    {
        return $this->restful(static::METHOD_POST, "/project/pagingByStatus", $body);
    }

    /**
     * 按ID读取项目基础详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/project/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/project/info", $body);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/add", $body);
    }

    /**
     * 批量添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/adds.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addsUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/adds", $body);
    }

    /**
     * 用户激活
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/active.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function activeUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/active", $body);
    }

    /**
     * 编辑用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/edit", $body);
    }

    /**
     * 冻结用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/disable", $body);
    }

    /**
     * 解冻用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/enable", $body);
    }

    /**
     * 读取用户详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/user/info", $body);
    }

    /**
     * 用户分页列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/user/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/user/paging", $body);
    }

    /**
     * 启用分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/enable", $body);
    }

    /**
     * 禁用分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/disable", $body);
    }

    /**
     * 添加分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/add", $body);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/edit", $body);
    }

    /**
     * 更新分组权益ID
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/editGroupEquityIdAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editGroupEquityId($body)
    {
        return $this->restful(static::METHOD_POST, "/group/editGroupEquityId", $body);
    }

    /**
     * 删除分组
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/del.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function delGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/group/del", $body);
    }

    /**
     * 分组列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/get.list.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGroupList($body)
    {
        return $this->restful(static::METHOD_POST, "/group/list", $body);
    }

    /**
     * 读取分组详情
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/group/get.info.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGroupInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/group/info", $body);
    }

    /**
     * 权益验证接口
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function checkVerify($body)
    {
        return $this->restful(static::METHOD_POST, "/verify/check", $body);
    }

    /**
     * 读取增量报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/delta.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportDelta($body)
    {
        return $this->restful(static::METHOD_POST, "/export/delta", $body);
    }

    /**
     * 最近N天的消费记录报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/days.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportDays($body)
    {
        return $this->restful(static::METHOD_POST, "/export/days", $body);
    }

    /**
     * 日期范围内的消费记录报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/scope.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportScope($body)
    {
        return $this->restful(static::METHOD_POST, "/export/scope", $body);
    }

    /**
     * 项目维度报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/project.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportProject($body)
    {
        return $this->restful(static::METHOD_POST, "/export/project", $body);
    }

    /**
     * 城市维度报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/city.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportCity($body)
    {
        return $this->restful(static::METHOD_POST, "/export/city", $body);
    }

    /**
     * 排行榜
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/rank.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportRank($body)
    {
        return $this->restful(static::METHOD_POST, "/export/rank", $body);
    }

    /**
     * 趋势报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/tendency.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportTendency($body)
    {
        return $this->restful(static::METHOD_POST, "/export/tendency", $body);
    }

    /**
     * 项目金额报表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/export/money.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getExportMoney($body)
    {
        return $this->restful(static::METHOD_POST, "/export/money", $body);
    }

    /**
     * 用ids获取分组信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/group/ids.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getGroupByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/group/ids", $body);
    }

    /**
     * 用ids获取项目信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/ids.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProjectByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/project/ids", $body);
    }

    /**
     * 自由金额添加用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/freeAddUser.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function freeAddUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/free/add", $body);
    }

    /**
     * 检查订单号是否重复
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/checkOrderNo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function checkOrderNo($body)
    {
        return $this->restful(static::METHOD_POST, "/user/check/orderNo", $body);
    }

    /**
     * 创建操作日志
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/saveLog.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function saveLog($body)
    {
        return $this->restful(static::METHOD_POST, "/log/save", $body);
    }

    /**
     * 导入用户时创建用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/project/importAddUser.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function importAddUser($body)
    {
        return $this->restful(static::METHOD_POST, "/user/import/add", $body);
    }

    /**
     * 获取一个项目的限制
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/project/projectLimitAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function projectLimit($body)
    {
        return $this->restful(static::METHOD_POST, '/project/limit', $body);
    }

    /**
     * 获取项目的所有限制
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/project/projectLimitAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function projectLimits($body)
    {
        return $this->restful(static::METHOD_POST, '/project/limits', $body);
    }

    /**
     * 获取用户项目权益数量
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/project/projectLimitAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function userCheck($body)
    {
        return $this->restful(static::METHOD_POST, '/user/check/condition', $body);
    }

    /**
     * 获取一个未激活权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCdKeyByGroupAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getCdKeyByGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/user/getCdKeyByGroup", $body);
    }
    /**
     * 根据cdkey 获取用户信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/uInfoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getUserByCdKey($body)
    {
        return $this->restful(static::METHOD_POST, "/verify/User/cdKey", $body);
    }
    /**
     * 根据项目id 获取分组列表带分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getGroupPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/group/paging", $body);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/statusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statusList($body)
    {
        return $this->restful(static::METHOD_POST, "/user/status", $body);
    }

    /**
     * 智赔导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportCdCodeSql($body)
    {
        return $this->restful(static::METHOD_POST, "/user/export/cdcode/sql", $body);
    }
    /**
     * 获取分组下已用完的用户数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getUseFinishedByGroupAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getUseFinishedByGroup($body)
    {
        return $this->restful(static::METHOD_POST, "/user/useFinished", $body);
    }

    /**
     * 获取分组下所有的获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getByGroupAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getGroupAccessLists($body)
    {
        return $this->restful(static::METHOD_POST, "/group/access/lists", $body);
    }

    /**
     * 开启指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/enableAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function setEnableGroupAccess($body)
    {
        return $this->restful(static::METHOD_POST, "/group/access/enable", $body);
    }

    /**
     * 修改激活信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupActivateController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function editGroupActivate($body)
    {
        return $this->restful(static::METHOD_POST, "/group/activate/edit", $body);
    }
    /**
     * 智赔用户列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCompensateUserPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getCompensateUserPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/user/compensate/paging", $body);
    }

    /**
     * 内容
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function ydbCheckVerify($body)
    {
        return $this->restful(static::METHOD_POST, "/verify/ydbCheck", $body);
    }

    /**
     * 验证身份证
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeController/validateIdCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeValidateIdCard($body)
    {
        return $this->restful("POST", "/redeem/validateIdCard", $body);
    }
}
