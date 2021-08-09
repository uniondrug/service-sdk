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
 * @date   2021-08-09
 * @time   Mon, 09 Aug 2021 13:40:59 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * DingtalkSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DingtalkSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'dingtalk.module';

    /**
     * 创建审批配置
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/addConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalAddConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/addconfig", $body, $query, $extra);
    }

    /**
     * 变更审批配置状态
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/changStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalChangStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/changstatus", $body, $query, $extra);
    }

    /**
     * 发起审批实例
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/create", $body, $query, $extra);
    }

    /**
     * 编辑审批配置
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/editConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalEditConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/editconfig", $body, $query, $extra);
    }

    /**
     * 审批配置详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/viewConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function approvalViewConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/approval/viewconfig", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/AttendanceController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function attendanceAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attendance/add", $body, $query, $extra);
    }

    /**
     * 获取当日的数据
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/AttendanceController/dayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function attendanceDay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/attendance/date", $body, $query, $extra);
    }

    /**
     * 回调删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/delete", $body, $query, $extra);
    }

    /**
     * 回调失败结果查询
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/getFailResultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackGetFailResult($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/getfailresult", $body, $query, $extra);
    }

    /**
     * 回调响应
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/notifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackNotify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/notify", $body, $query, $extra);
    }

    /**
     * 回调查询
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/queryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/query", $body, $query, $extra);
    }

    /**
     * 回调注册
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/registerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackRegister($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/register", $body, $query, $extra);
    }

    /**
     * 回调更新
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function callBackUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDepartmentController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDepartmentUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDepartment/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptMemberController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptMemberUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptMember/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingDeptSnapshotController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingDeptSnapshotUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingDeptSnapshot/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/listing", $body, $query, $extra);
    }

    /**
     * 查询手机号是否存在
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/mobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberMobile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/mobile", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingMemberController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingMemberUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingMember/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/DingdingSnapshotController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dingdingSnapshotUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dingdingSnapshot/update", $body, $query, $extra);
    }

    /**
     * 消息发送进度
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/MessageController/getSendProgressAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageGetSendProgress($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/getsendprogress", $body, $query, $extra);
    }

    /**
     * 消息发送结果
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/MessageController/getSendResultAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageGetSendResult($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/getsendresult", $body, $query, $extra);
    }

    /**
     * 消息撤销
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/MessageController/recallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageRecall($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/recall", $body, $query, $extra);
    }

    /**
     * 考勤单日详情接口
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/userDayTimeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userDayTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/callback/userdaytime", $body, $query, $extra);
    }
}
