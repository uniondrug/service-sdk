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
 * @date   2020-04-10
 * @time   Fri, 10 Apr 2020 10:18:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ProjectSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'project.module';

    /**
     * 接受审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/acceptAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function acceptProject($body)
    {
        return $this->restful("POST", "/project/accept", $body);
    }

    /**
     * 激活兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activeUser($body)
    {
        return $this->restful("POST", "/user/active", $body);
    }

    /**
     * 添加分组(弃用，请使用V2版本)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGroup($body)
    {
        return $this->restful("POST", "/group/add", $body);
    }

    /**
     * 新增接口模式的规则
     * 只有在开启的时候 才会调一次
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/addGroupInterfaceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGroupInterface($body)
    {
        return $this->restful("POST", "/group/access/interface/add", $body);
    }

    /**
     * 新增日志
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/LogController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addLog($body)
    {
        return $this->restful("POST", "/log/add", $body);
    }

    /**
     * 添加项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful("POST", "/project/add", $body);
    }

    /**
     * 兑换码批量添加
     * [用于寿险的批量新增]
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addsUser($body)
    {
        return $this->restful("POST", "/user/adds", $body);
    }

    /**
     * 添加兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 提交审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/approvalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalProject($body)
    {
        return $this->restful("POST", "/project/approval", $body);
    }

    /**
     * 通过cdKey绑定权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/bindEquityByCdKeyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function bindEquityByCdKey($body)
    {
        return $this->restful("POST", "/user/bindEquityByCdKey", $body);
    }

    /**
     * 取消审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelProject($body)
    {
        return $this->restful("POST", "/project/cancel", $body);
    }

    /**
     * 检查项目，成员的权益是否打到限额或者限制数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkLimitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkLimit($body)
    {
        return $this->restful("POST", "/verify/checkLimit", $body);
    }

    /**
     * 检查兑换码是否存在
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkUser($body)
    {
        return $this->restful("POST", "/verify/checkUser", $body);
    }

    /**
     * 验证权益领取
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkVerify($body)
    {
        return $this->restful("POST", "/verify/check", $body);
    }

    /**
     * 创建分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/V2/GroupController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createGroupV2($body)
    {
        return $this->restful("POST", "/v2/group/create", $body);
    }

    /**
     * 创建兑换码V2
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/V2/RedeemController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createRedeemCodeV2($body)
    {
        return $this->restful("POST", "/v2/redeem/code/create", $body);
    }

    /**
     * 删除项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function deleteProject($body)
    {
        return $this->restful("POST", "/project/delete", $body);
    }

    /**
     * 删除分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delGroup($body)
    {
        return $this->restful("POST", "/group/del", $body);
    }

    /**
     * 冻结全部
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/disableAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableAllUser($body)
    {
        return $this->restful("POST", "/user/disableAll", $body);
    }

    /**
     * 禁用/冻结(暂停执行)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableGroup($body)
    {
        return $this->restful("POST", "/group/disable", $body);
    }

    /**
     * 冻结兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableUser($body)
    {
        return $this->restful("POST", "/user/disable", $body);
    }

    /**
     * 导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCdCodeBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downCdCodeSql($body)
    {
        return $this->restful("POST", "/user/down/cdcode/sql", $body);
    }

    /**
     * 实体卡获取sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getEntityBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downEntitySql($body)
    {
        return $this->restful("POST", "/user/down/entity/sql", $body);
    }

    /**
     * 权益列表sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getEquityBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downEquitySql($body)
    {
        return $this->restful("POST", "/user/down/equity/sql", $body);
    }

    /**
     * 扫码获取sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getScanBySqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function downScanSql($body)
    {
        return $this->restful("POST", "/user/down/scan/sql", $body);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroup($body)
    {
        return $this->restful("POST", "/group/edit", $body);
    }

    /**
     * 修改激活信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupActivateController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupActivate($body)
    {
        return $this->restful("POST", "/group/activate/edit", $body);
    }

    /**
     * 更新分组权益ID
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/editGroupEquityIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupEquityId($body)
    {
        return $this->restful("POST", "/group/editGroupEquityId", $body);
    }

    /**
     * 编辑接口模式的规则
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/editGroupInterfaceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupInterface($body)
    {
        return $this->restful("POST", "/group/access/interface/edit", $body);
    }

    /**
     * 编辑项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editProject($body)
    {
        return $this->restful("POST", "/project/edit", $body);
    }

    /**
     * 编辑兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editUser($body)
    {
        return $this->restful("POST", "/user/edit", $body);
    }

    /**
     * 启用/执行中
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableGroup($body)
    {
        return $this->restful("POST", "/group/enable", $body);
    }

    /**
     * 解锁兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableUser($body)
    {
        return $this->restful("POST", "/user/enable", $body);
    }

    /**
     * 智赔导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/exportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportCdCodeSql($body)
    {
        return $this->restful("POST", "/user/export/cdcode/sql", $body);
    }

    /**
     * listAction()
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ApprovalController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getApprovalList($body)
    {
        return $this->restful("POST", "/approval/list", $body);
    }

    /**
     * 根据权益id 获取发行方
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getByEquityIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByEquityId($body)
    {
        return $this->restful("POST", "/user/info/equityid", $body);
    }

    /**
     * 通过订单号查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getByorderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByOrderNo($body)
    {
        return $this->restful("POST", "/user/getByOrderNo", $body);
    }

    /**
     * 通过订单号批量查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getByorderNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByOrderNos($body)
    {
        return $this->restful("POST", "/user/getByOrderNos", $body);
    }

    /**
     * 获取唯一兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/cdKeyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCdKey($body)
    {
        return $this->restful("POST", "/verify/cdKey", $body);
    }

    /**
     * 通过分组获取一个未激活的兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCdKeyByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCdKeyByGroup($body)
    {
        return $this->restful("POST", "/user/getCdKeyByGroup", $body);
    }

    /**
     * 智赔兑换码列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getCompensateUserPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCompensateUserPaging($body)
    {
        return $this->restful("POST", "/user/compensate/paging", $body);
    }

    /**
     * 城市维度报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/cityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportCity($body)
    {
        return $this->restful("POST", "/export/city", $body);
    }

    /**
     * 最近N天的消费记录报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/daysAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportDays($body)
    {
        return $this->restful("POST", "/export/days", $body);
    }

    /**
     * 读取增量报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/deltaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportDelta($body)
    {
        return $this->restful("POST", "/export/delta", $body);
    }

    /**
     * 项目金额报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/moneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportMoney($body)
    {
        return $this->restful("POST", "/export/money", $body);
    }

    /**
     * 项目维度报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/projectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportProject($body)
    {
        return $this->restful("POST", "/export/project", $body);
    }

    /**
     * 排行榜
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportRank($body)
    {
        return $this->restful("POST", "/export/rank", $body);
    }

    /**
     * 日期范围内的消费记录报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/scopeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportScope($body)
    {
        return $this->restful("POST", "/export/scope", $body);
    }

    /**
     * 趋势报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/tendencyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getExportTendency($body)
    {
        return $this->restful("POST", "/export/tendency", $body);
    }

    /**
     * 获取分组下所有的获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupAccessLists($body)
    {
        return $this->restful("POST", "/group/access/lists", $body);
    }

    /**
     * 获取的方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupActivateController/listsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupActivateLists($body)
    {
        return $this->restful("POST", "/group/activate/lists", $body);
    }

    /**
     * 用ids获取分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupByIds($body)
    {
        return $this->restful("POST", "/group/ids", $body);
    }

    /**
     * 单个分组详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupInfo($body)
    {
        return $this->restful("POST", "/group/info", $body);
    }

    /**
     * 获取分组的分期数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/getGroupInstallmentCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupInstallmentCount($body)
    {
        return $this->restful("POST", "/group/getGroupInstallmentCount", $body);
    }

    /**
     * 获取分组下接口规则列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getInterfaceListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupInterfaceLists($body)
    {
        return $this->restful("POST", "/group/access/interface/lists", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupList($body)
    {
        return $this->restful("POST", "/group/list", $body);
    }

    /**
     * 根据项目id 获取分组列表带分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupPaging($body)
    {
        return $this->restful("POST", "/group/paging", $body);
    }

    /**
     * 获取扫码规则详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getGroupScanDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupScanDetail($body)
    {
        return $this->restful("POST", "/group/access/scan/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/LogController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPagingLog($body)
    {
        return $this->restful("POST", "/log/paging", $body);
    }

    /**
     * 用ids获取项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectByIds($body)
    {
        return $this->restful("POST", "/project/ids", $body);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectInfo($body)
    {
        return $this->restful("POST", "/project/info", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 获取项目类型
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/typeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectType($body)
    {
        return $this->restful("POST", "/project/type", $body);
    }

    /**
     * 获取分组下已用完的兑换码数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getUseFinishedByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUseFinishedByGroup($body)
    {
        return $this->restful("POST", "/user/useFinished", $body);
    }

    /**
     * 根据cdkey 获取用户信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/uInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserByCdKey($body)
    {
        return $this->restful("POST", "/verify/User/cdKey", $body);
    }

    /**
     * 读取兑换码资料
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 读取兑换码分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 获取检测对应的分组对应的状态
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/getStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupAccessCheckStatus($body)
    {
        return $this->restful("POST", "/group/access/getStatus", $body);
    }

    /**
     * 分组提额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/changeGroupMoneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupChangeMoney($body)
    {
        return $this->restful("POST", "/group/groupChangeMoney", $body);
    }

    /**
     * 新增分组关联渠道
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupChannelLimitController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupChannelLimitCreate($body)
    {
        return $this->restful("POST", "/group/channel/limit/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupChannelLimitController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupChannelLimitDetail($body)
    {
        return $this->restful("POST", "/group/channel/limit/detail", $body);
    }

    /**
     * 查询分组可用金额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/calculateUsefulMoneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupLeftMoney($body)
    {
        return $this->restful("POST", "/group/groupLeftMoney", $body);
    }

    /**
     * 渠道限制增加自定义商家
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupOrganizationController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupOrganizationCreate($body)
    {
        return $this->restful("POST", "/group/organization/create", $body);
    }

    /**
     * 回收分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/recycleEquityByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupRecycle($body)
    {
        return $this->restful("POST", "/group/groupRecycle", $body);
    }

    /**
     * 回收单个兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/recycleEquitySingleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupRecycleSingle($body)
    {
        return $this->restful("POST", "/group/groupRecycleSingle", $body);
    }

    /**
     * 计算分组下权益的有效期
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/termAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupTerm($body)
    {
        return $this->restful("POST", "/group/term", $body);
    }

    /**
     * 统计保险公司pbm和非pbm项目数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/icpbmAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function icpbm($body)
    {
        return $this->restful("POST", "/project/icpbm", $body);
    }

    /**
     * 信息变更
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/modifyVerifyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function modifyVerify($body)
    {
        return $this->restful("POST", "/verify/modifyVerify", $body);
    }

    /**
     * 多种状态查询分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pagingByStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingByStatus($body)
    {
        return $this->restful("POST", "/project/pagingByStatus", $body);
    }

    /**
     * 暂停全部
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/pauseAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pauseAllUser($body)
    {
        return $this->restful("POST", "/user/pauseAll", $body);
    }

    /**
     * 暂停项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pauseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pauseProject($body)
    {
        return $this->restful("POST", "/project/pause", $body);
    }

    /**
     * 暂停
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/pauseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pauseUser($body)
    {
        return $this->restful("POST", "/user/pause", $body);
    }

    /**
     * 获取项目可用余额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/getProjectUsefulMoneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGetUsefulMoney($body)
    {
        return $this->restful("POST", "/project/projectGetUsefulMoney", $body);
    }

    /**
     * 查询项目限制数据
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/limitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectLimit($body)
    {
        return $this->restful("POST", "/project/limit", $body);
    }

    /**
     * 修改项目限额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectLimitController/changeLimitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectLimitChangeLimit($body)
    {
        return $this->restful("POST", "/projectLimit/projectLimitChangeLimit", $body);
    }

    /**
     * 项目提额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/promoteAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPromoteAmount($body)
    {
        return $this->restful("POST", "/project/projectPromoteAmount", $body);
    }

    /**
     * 根据type分组分表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/projectTypePaingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectTypePaing($body)
    {
        return $this->restful("POST", "/group/projecttypepaing", $body);
    }

    /**
     * 绑定激活的兑换码memberId(寿险用)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeController/bindRedeemCodeMemberIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeBindMemberId($body)
    {
        return $this->restful("POST", "/redeem/bindMemberId", $body);
    }

    /**
     * 修改分组兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeController/changeGroupTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeChangeGroupType($body)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeGroupType", $body);
    }

    /**
     * 修改项目兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeController/changeProjectTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeChangeProjectType($body)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeProjectType", $body);
    }

    /**
     * 修改单个兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeController/changeSingleTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeChangeSingleType($body)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeSingleType", $body);
    }

    /**
     * 创建兑换码订单关联记录
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeOutOrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeOutOrderCreate($body)
    {
        return $this->restful("POST", "/redeem/code/out/order/create", $body);
    }

    /**
     * 获取兑换码外部订单记录详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/RedeemCodeOutOrderController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemCodeOutOrderDetail($body)
    {
        return $this->restful("POST", "/redeem/code/out/order/detail", $body);
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

    /**
     * 拒绝审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/refuseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refuseProject($body)
    {
        return $this->restful("POST", "/project/refuse", $body);
    }

    /**
     * 关闭指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setDisableGroupAccess($body)
    {
        return $this->restful("POST", "/group/access/disable", $body);
    }

    /**
     * 开启指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setEnableGroupAccess($body)
    {
        return $this->restful("POST", "/group/access/enable", $body);
    }

    /**
     * 编辑扫码的方式 通用码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/scanGlobalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setScanGlobal($body)
    {
        return $this->restful("POST", "/group/access/scan/edit/global", $body);
    }

    /**
     * 编辑扫码的方式 单权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupAccessController/scanSingleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setScanSingle($body)
    {
        return $this->restful("POST", "/group/access/scan/edit/single", $body);
    }

    /**
     * 启动项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/startAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function startProject($body)
    {
        return $this->restful("POST", "/project/start", $body);
    }

    /**
     * 开始执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/startAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function startUser($body)
    {
        return $this->restful("POST", "/user/start", $body);
    }

    /**
     * 重建统计
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/statisticAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statisticProject($body)
    {
        return $this->restful("POST", "/project/statistic", $body);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/statusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statusList($body)
    {
        return $this->restful("POST", "/user/status", $body);
    }

    /**
     * 统计分组金额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/SumIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sumids($body)
    {
        return $this->restful("POST", "/group/sumids", $body);
    }

    /**
     * 根据数量批量创建兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addByNumsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAddByNums($body)
    {
        return $this->restful("POST", "/user/adds/nums", $body);
    }

    /**
     * 批量新增
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/addsV2Action.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userAddsV2($body)
    {
        return $this->restful("POST", "/user/adds/V2", $body);
    }

    /**
     * 根据分单号查找兑换码在指定分组下未激活的兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getByBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function UserBillNo($body)
    {
        return $this->restful("POST", "/user/billNo", $body);
    }

    /**
     * 根据分单号查找对应的兑换码权益ID
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getBillNoEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function UserBillNoEquity($body)
    {
        return $this->restful("POST", "/user/billNo/equity", $body);
    }

    /**
     * 检查项目下手机号领取了几个
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/checkByConditionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userCheck($body)
    {
        return $this->restful("POST", "/user/check/condition", $body);
    }

    /**
     * 检查批量创建结果
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/checkImportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userCheckImport($body)
    {
        return $this->restful("POST", "/user/check/import", $body);
    }

    /**
     * 通过外部订单号查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getByOutOrderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userGetByOutOrderNo($body)
    {
        return $this->restful("POST", "/user/getByOutOrderNo", $body);
    }

    /**
     * 根据权益id
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/getEquityIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userGetEquityId($body)
    {
        return $this->restful("POST", "/user/equityid", $body);
    }

    /**
     * 回收兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/recoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userRecover($body)
    {
        return $this->restful("POST", "/user/recover", $body);
    }

    /**
     * 根据分单号，姓名 身份证号 查找兑换码信息
     * 【仅供寿险使用】
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/successListsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userSuccessList($body)
    {
        return $this->restful("POST", "/user/success/list", $body);
    }

    /**
     * 获取有效期
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/getValidationAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function verifyGetValidation($body)
    {
        return $this->restful("POST", "/verify/getValidation", $body);
    }

    /**
     * 兑换码列表查询
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/VerifyPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function verifyPaging($body)
    {
        return $this->restful("POST", "/verify/verifyPaging", $body);
    }

    /**
     * 验证权益领取(药店宝)
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/ydbCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ydbCheckVerify($body)
    {
        return $this->restful("POST", "/verify/ydbCheck", $body);
    }

    /**
     * 通过cdKey获取兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/getDataByCdKeyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function redeemGetByCdKey($body)
    {
        return $this->restful("POST", "/redeem/cdKey", $body);
    }

    /**
     * 商家限制无分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupOrganizationController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupOrganizationListing($body)
    {
        return $this->restful("POST", "/group/organization/listing", $body);
    }

    /**
     * 通过保司Id获取对应项目数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/getTypeNumsByInsuranceAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectGetNumsByInsurance($body)
    {
        return $this->restful("POST", "/project/getNumsByInsurance", $body);
    }
}
