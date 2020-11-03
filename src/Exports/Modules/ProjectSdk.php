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
 * @date   2020-11-03
 * @time   Tue, 03 Nov 2020 14:09:31 +0800
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
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/acceptAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function acceptProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/accept", $body, $query, $extra);
    }

    /**
     * 激活兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/activeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function activeUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/active", $body, $query, $extra);
    }

    /**
     * 添加分组(弃用，请使用V2版本)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/add", $body, $query, $extra);
    }

    /**
     * 新增接口模式的规则
     * 只有在开启的时候 才会调一次
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/addGroupInterfaceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addGroupInterface($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/interface/add", $body, $query, $extra);
    }

    /**
     * 新增日志
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/LogController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/log/add", $body, $query, $extra);
    }

    /**
     * 添加项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/add", $body, $query, $extra);
    }

    /**
     * 兑换码批量添加
     * [用于寿险的批量新增]
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/addsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addsUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/adds", $body, $query, $extra);
    }

    /**
     * 添加兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/add", $body, $query, $extra);
    }

    /**
     * 提交审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/approvalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/approval", $body, $query, $extra);
    }

    /**
     * 通过cdKey绑定权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/bindEquityByCdKeyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bindEquityByCdKey($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/bindEquityByCdKey", $body, $query, $extra);
    }

    /**
     * 取消审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/cancelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cancelProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/cancel", $body, $query, $extra);
    }

    /**
     * 检查项目，成员的权益是否打到限额或者限制数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/checkLimitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkLimit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/checkLimit", $body, $query, $extra);
    }

    /**
     * 检查兑换码是否存在
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/checkUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/checkUser", $body, $query, $extra);
    }

    /**
     * 验证权益领取
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkVerify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/check", $body, $query, $extra);
    }

    /**
     * 创建分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/V2/GroupController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createGroupV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/group/create", $body, $query, $extra);
    }

    /**
     * 创建兑换码V2
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/V2/RedeemController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createRedeemCodeV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/redeem/code/create", $body, $query, $extra);
    }

    /**
     * 删除项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/delete", $body, $query, $extra);
    }

    /**
     * 删除分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/delAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function delGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/del", $body, $query, $extra);
    }

    /**
     * 冻结全部
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/disableAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableAllUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/disableAll", $body, $query, $extra);
    }

    /**
     * 禁用/冻结(暂停执行)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/disable", $body, $query, $extra);
    }

    /**
     * 冻结兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/disable", $body, $query, $extra);
    }

    /**
     * 导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getCdCodeBySqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downCdCodeSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/down/cdcode/sql", $body, $query, $extra);
    }

    /**
     * 实体卡获取sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getEntityBySqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downEntitySql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/down/entity/sql", $body, $query, $extra);
    }

    /**
     * 权益列表sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getEquityBySqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downEquitySql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/down/equity/sql", $body, $query, $extra);
    }

    /**
     * 扫码获取sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getScanBySqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function downScanSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/down/scan/sql", $body, $query, $extra);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/edit", $body, $query, $extra);
    }

    /**
     * 修改激活信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupActivateController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editGroupActivate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/activate/edit", $body, $query, $extra);
    }

    /**
     * 更新分组权益ID
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/editGroupEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editGroupEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/editGroupEquityId", $body, $query, $extra);
    }

    /**
     * 编辑接口模式的规则
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/editGroupInterfaceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editGroupInterface($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/interface/edit", $body, $query, $extra);
    }

    /**
     * 编辑项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/edit", $body, $query, $extra);
    }

    /**
     * 编辑兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/edit", $body, $query, $extra);
    }

    /**
     * 启用/执行中
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/enable", $body, $query, $extra);
    }

    /**
     * 解锁兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/enable", $body, $query, $extra);
    }

    /**
     * 智赔导出兑换码sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/exportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportCdCodeSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/export/cdcode/sql", $body, $query, $extra);
    }

    /**
     * listAction()
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ApprovalController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getApprovalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/list", $body, $query, $extra);
    }

    /**
     * 根据权益id 获取发行方
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getByEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getByEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/info/equityid", $body, $query, $extra);
    }

    /**
     * 通过订单号查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getByorderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getByOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getByOrderNo", $body, $query, $extra);
    }

    /**
     * 通过订单号批量查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getByorderNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getByOrderNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getByOrderNos", $body, $query, $extra);
    }

    /**
     * 获取唯一兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/cdKeyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getCdKey($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/cdKey", $body, $query, $extra);
    }

    /**
     * 通过分组获取一个未激活的兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getCdKeyByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getCdKeyByGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getCdKeyByGroup", $body, $query, $extra);
    }

    /**
     * 智赔兑换码列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getCompensateUserPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getCompensateUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/compensate/paging", $body, $query, $extra);
    }

    /**
     * 获取分组下所有的获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/getByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupAccessLists($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/lists", $body, $query, $extra);
    }

    /**
     * 获取的方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupActivateController/listsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupActivateLists($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/activate/lists", $body, $query, $extra);
    }

    /**
     * 分组验证激活字段列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupActivateController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupActiveListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/activate/listing", $body, $query, $extra);
    }

    /**
     * 用ids获取分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/ids", $body, $query, $extra);
    }

    /**
     * 单个分组详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/info", $body, $query, $extra);
    }

    /**
     * 获取分组的分期数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/getGroupInstallmentCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupInstallmentCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/getGroupInstallmentCount", $body, $query, $extra);
    }

    /**
     * 获取分组下接口规则列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/getInterfaceListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupInterfaceLists($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/interface/lists", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/list", $body, $query, $extra);
    }

    /**
     * 根据分组ID姓名身份证去查询已激活的数据(自用)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/getGroupOtherCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupOtherCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/getGroupOtherCode", $body, $query, $extra);
    }

    /**
     * 根据项目id 获取分组列表带分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/paging", $body, $query, $extra);
    }

    /**
     * 根据项目id 获取分组列表带分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/V2/GroupController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupPagingV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/v2/group/paging", $body, $query, $extra);
    }

    /**
     * 获取扫码规则详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/getGroupScanDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupScanDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/scan/detail", $body, $query, $extra);
    }

    /**
     * 通过保司Id获取对应项目总数量以及总金额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/getMoneyAndNumsByInsuranceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMoneyAndNumsByInsurance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getMoneyAndNumsByInsurance", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/LogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPagingLog($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/log/paging", $body, $query, $extra);
    }

    /**
     * 用ids获取项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/ids", $body, $query, $extra);
    }

    /**
     * 项目详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/info", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/paging", $body, $query, $extra);
    }

    /**
     * 获取项目类型
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/typeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/type", $body, $query, $extra);
    }

    /**
     * 采购导出sql
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/purchaseSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPurchaseSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/purchase/sql", $body, $query, $extra);
    }

    /**
     * 批量用户在分组下的领取限制
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/BatchCheckLimitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRedeenBatchCheckLimit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/batch/check/limit", $body, $query, $extra);
    }

    /**
     * 根据分组ID姓名身份证去查询未激活的数据(自用)
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/getUnactivatedCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUnactivatedCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/getUnactivatedCode", $body, $query, $extra);
    }

    /**
     * 获取分组下已用完的兑换码数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getUseFinishedByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUseFinishedByGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/useFinished", $body, $query, $extra);
    }

    /**
     * 根据cdkey 获取用户信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/uInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserByCdKey($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/User/cdKey", $body, $query, $extra);
    }

    /**
     * 读取兑换码资料
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/info", $body, $query, $extra);
    }

    /**
     * 读取兑换码分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getUserPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/paging", $body, $query, $extra);
    }

    /**
     * 获取检测对应的分组对应的状态
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/getStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupAccessCheckStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/getStatus", $body, $query, $extra);
    }

    /**
     * 分组提额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/changeGroupMoneyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupChangeMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/groupChangeMoney", $body, $query, $extra);
    }

    /**
     * 新增分组关联渠道
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupChannelLimitController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupChannelLimitCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/channel/limit/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupChannelLimitController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupChannelLimitDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/channel/limit/detail", $body, $query, $extra);
    }

    /**
     * 查询分组可用金额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/calculateUsefulMoneyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupLeftMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/groupLeftMoney", $body, $query, $extra);
    }

    /**
     * 渠道限制增加自定义商家
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupOrganizationController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupOrganizationCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/organization/create", $body, $query, $extra);
    }

    /**
     * 分组连锁列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupOrganizationController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupOrganizationListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/organization/listing", $body, $query, $extra);
    }

    /**
     * 回收分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/recycleEquityByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupRecycle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/groupRecycle", $body, $query, $extra);
    }

    /**
     * 回收单个兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/recycleEquitySingleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupRecycleSingle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/groupRecycleSingle", $body, $query, $extra);
    }

    /**
     * 计算分组下权益的有效期
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/termAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupTerm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/term", $body, $query, $extra);
    }

    /**
     * 统计保险公司pbm和非pbm项目数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/icpbmAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function icpbm($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/icpbm", $body, $query, $extra);
    }

    /**
     * 信息变更
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/modifyVerifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyVerify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/modifyVerify", $body, $query, $extra);
    }

    /**
     * 多种状态查询分页
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/pagingByStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingByStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/pagingByStatus", $body, $query, $extra);
    }

    /**
     * 暂停全部
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/pauseAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pauseAllUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/pauseAll", $body, $query, $extra);
    }

    /**
     * 暂停项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/pauseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pauseProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/pause", $body, $query, $extra);
    }

    /**
     * 暂停
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/pauseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pauseUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/pause", $body, $query, $extra);
    }

    /**
     * 通过保司Id获取对应项目类型的数量
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/getTypeNumsByInsuranceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectGetNumsByInsurance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getNumsByInsurance", $body, $query, $extra);
    }

    /**
     * 获取项目可用余额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/getProjectUsefulMoneyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectGetUsefulMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/projectGetUsefulMoney", $body, $query, $extra);
    }

    /**
     * 查询项目限制数据
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/limitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectLimit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/limit", $body, $query, $extra);
    }

    /**
     * 修改项目限额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectLimitController/changeLimitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectLimitChangeLimit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/projectLimit/projectLimitChangeLimit", $body, $query, $extra);
    }

    /**
     * 项目提额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/promoteAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectPromoteAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/projectPromoteAmount", $body, $query, $extra);
    }

    /**
     * 根据type分组分表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/projectTypePaingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectTypePaing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/projecttypepaing", $body, $query, $extra);
    }

    /**
     * 给兑换码绑定用户信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/bindMemberIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeBindMemberId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/bind/memberId", $body, $query, $extra);
    }

    /**
     * 修改分组兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/changeGroupTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeChangeGroupType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeGroupType", $body, $query, $extra);
    }

    /**
     * 修改项目兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/changeProjectTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeChangeProjectType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeProjectType", $body, $query, $extra);
    }

    /**
     * 修改单个兑换码状态（冻结、解冻、回收）
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/changeSingleTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeChangeSingleType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/redeemCodeChangeSingleType", $body, $query, $extra);
    }

    /**
     * 根据outOrderNo获取批量创建兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/getListByOutOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeListByOutOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/listRedeemCode", $body, $query, $extra);
    }

    /**
     * 创建兑换码订单关联记录
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeOutOrderController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeOutOrderCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/code/out/order/create", $body, $query, $extra);
    }

    /**
     * 获取兑换码外部订单记录详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeOutOrderController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeOutOrderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/code/out/order/detail", $body, $query, $extra);
    }

    /**
     * 验证身份证
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/validateIdCardAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemCodeValidateIdCard($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/validateIdCard", $body, $query, $extra);
    }

    /**
     * 通过cdKey获取兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/RedeemCodeController/getDataByCdKeyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function redeemGetByCdKey($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/redeem/cdKey", $body, $query, $extra);
    }

    /**
     * 拒绝审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/refuseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refuseProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/refuse", $body, $query, $extra);
    }

    /**
     * 关闭指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setDisableGroupAccess($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/disable", $body, $query, $extra);
    }

    /**
     * 开启指定获取方式
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setEnableGroupAccess($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/enable", $body, $query, $extra);
    }

    /**
     * 编辑扫码的方式 通用码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/scanGlobalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setScanGlobal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/scan/edit/global", $body, $query, $extra);
    }

    /**
     * 编辑扫码的方式 单权益
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupAccessController/scanSingleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setScanSingle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/access/scan/edit/single", $body, $query, $extra);
    }

    /**
     * 简单分组连锁限制列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupOrganizationController/simpleListingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function simpleOrganizationListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/organization/simple/listing", $body, $query, $extra);
    }

    /**
     * 启动项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/startAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function startProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/start", $body, $query, $extra);
    }

    /**
     * 开始执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/startAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function startUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/start", $body, $query, $extra);
    }

    /**
     * 重建统计
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/ProjectController/statisticAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statisticProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/statistic", $body, $query, $extra);
    }

    /**
     * 状态列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statusList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/status", $body, $query, $extra);
    }

    /**
     * 统计分组金额
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/GroupController/SumIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sumids($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/sumids", $body, $query, $extra);
    }

    /**
     * 根据数量批量创建兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/addByNumsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userAddByNums($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/adds/nums", $body, $query, $extra);
    }

    /**
     * 批量新增
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/addsV2Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userAddsV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/adds/V2", $body, $query, $extra);
    }

    /**
     * 根据分单号查找兑换码在指定分组下未激活的兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getByBillNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function UserBillNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/billNo", $body, $query, $extra);
    }

    /**
     * 根据分单号查找对应的兑换码权益ID
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getBillNoEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function UserBillNoEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/billNo/equity", $body, $query, $extra);
    }

    /**
     * 检查项目下手机号领取了几个
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/checkByConditionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/check/condition", $body, $query, $extra);
    }

    /**
     * 检查批量创建结果
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/checkImportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userCheckImport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/check/import", $body, $query, $extra);
    }

    /**
     * 通过外部订单号查找兑换码信息
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getByOutOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userGetByOutOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getByOutOrderNo", $body, $query, $extra);
    }

    /**
     * 根据权益id
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/getEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userGetEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/equityid", $body, $query, $extra);
    }

    /**
     * 回收兑换码
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/recoverAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/recover", $body, $query, $extra);
    }

    /**
     * 根据分单号，姓名 身份证号 查找兑换码信息
     * 【仅供寿险使用】
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/UserController/successListsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userSuccessList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/success/list", $body, $query, $extra);
    }

    /**
     * 获取有效期
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/getValidationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function verifyGetValidation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/getValidation", $body, $query, $extra);
    }

    /**
     * 兑换码列表查询
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/VerifyPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function verifyPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/verifyPaging", $body, $query, $extra);
    }

    /**
     * 验证权益领取(药店宝)
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/module.project/api/VerifyController/ydbCheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ydbCheckVerify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/verify/ydbCheck", $body, $query, $extra);
    }
}
