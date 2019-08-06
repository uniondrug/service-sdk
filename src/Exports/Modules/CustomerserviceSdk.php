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
 * @date   2019-07-26
 * @time   Fri, 26 Jul 2019 09:55:39 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

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
}
