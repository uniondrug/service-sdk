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
 * @date   2019-03-15
 * @time   Fri, 15 Mar 2019 15:57:51 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * Class CustomerserviceSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class CustomerserviceSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'customerservice';

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
     * 退款申请单状态变更-已退款
     * @link https://uniondrug.coding.net/p/module.customerservice/git/blob/development/docs/api/Refund/ApplyController/successAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderRefundApplySuccess($body)
    {
        return $this->restful("POST", "/refundapply/success", $body);
    }
}
