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
 * @date   2020-05-22
 * @time   Fri, 22 May 2020 14:13:51 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * CustomerserviceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CustomerserviceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'customerservice.module';

    /**
     * 投诉记录统计
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/ComplainController/complainCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function complainCount($body)
    {
        return $this->restful("POST", "/complain/count", $body);
    }

    /**
     * 添加投诉记录列表
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/ComplainController/complainCreatAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function complainCreat($body)
    {
        return $this->restful("POST", "/complain/Creat", $body);
    }

    /**
     * 投诉记录列表
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/ComplainController/complainPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function complainPaging($body)
    {
        return $this->restful("POST", "/complain/paging", $body);
    }

    /**
     * 添加操作日志
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/OperateLogController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createOperateLog($body)
    {
        return $this->restful("POST", "/operate/log/create", $body);
    }

    /**
     * 读取操作日志
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/OperateLogController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listOperateLog($body)
    {
        return $this->restful("POST", "/operate/log/list", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgCreate($body)
    {
        return $this->restful("POST", "/logMsg/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgDelete($body)
    {
        return $this->restful("POST", "/logMsg/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgDetail($body)
    {
        return $this->restful("POST", "/logMsg/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgListing($body)
    {
        return $this->restful("POST", "/logMsg/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgPaging($body)
    {
        return $this->restful("POST", "/logMsg/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/LogMsgController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function logMsgUpdate($body)
    {
        return $this->restful("POST", "/logMsg/update", $body);
    }

    /**
     * 退款申请记录添加
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplyCreate($body)
    {
        return $this->restful("POST", "/refundapply/create", $body);
    }

    /**
     * 退款申请单状态变更-拒绝
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplyDisable($body)
    {
        return $this->restful("POST", "/refundapply/disable", $body);
    }

    /**
     * 退款申请单记录详情
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplyInfo($body)
    {
        return $this->restful("POST", "/refundapply/info", $body);
    }

    /**
     * 退款申请记录列表-分页
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplyPaging($body)
    {
        return $this->restful("POST", "/refundapply/paging", $body);
    }

    /**
     * 退款申请单备注
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/remarkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplyRemark($body)
    {
        return $this->restful("POST", "/refundapply/remark", $body);
    }

    /**
     * 退款申请单状态变更-已退款
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/successAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplySuccess($body)
    {
        return $this->restful("POST", "/refundapply/success", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/UserJobNumberController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userJobNumberDetail($body)
    {
        return $this->restful("POST", "/userJobNumber/detail", $body);
    }

    /**
     * 创建工单
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/WorkOrderController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createWorkOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workorder/create", $body, $query, $extra);
    }

    /**
     * 工单详情
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/WorkOrderController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workOrderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workorder/detail", $body, $query, $extra);
    }

    /**
     * 处理工单
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/WorkOrderController/handleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workOrderHandle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workorder/handle", $body, $query, $extra);
    }

    /**
     * 工单列表
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/WorkOrderController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workorder/paging", $body, $query, $extra);
    }

    /**
     * mbs撤回工单
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/WorkOrderController/recallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workOrderRecall($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workorder/recall", $body, $query, $extra);
    }

    /**
     * 操作日志分页
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/OperateLogController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function operateLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/operate/log/page", $body, $query, $extra);
    }
}
