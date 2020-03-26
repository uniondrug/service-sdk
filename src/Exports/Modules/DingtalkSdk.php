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
 * @date   2020-03-26
 * @time   Thu, 26 Mar 2020 10:26:26 +0800
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
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalAddConfig($body)
    {
        return $this->restful("POST", "/approval/addconfig", $body);
    }

    /**
     * 变更审批配置状态
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/changStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalChangStatus($body)
    {
        return $this->restful("POST", "/approval/changstatus", $body);
    }

    /**
     * 发起审批实例
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalCreate($body)
    {
        return $this->restful("POST", "/approval/create", $body);
    }

    /**
     * 编辑审批配置
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/editConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalEditConfig($body)
    {
        return $this->restful("POST", "/approval/editconfig", $body);
    }

    /**
     * 审批配置详情
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/ApprovalController/viewConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approvalViewConfig($body)
    {
        return $this->restful("POST", "/approval/viewconfig", $body);
    }

    /**
     * 回调删除
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function callBackDelete($body)
    {
        return $this->restful("POST", "/callback/delete", $body);
    }

    /**
     * 回调失败结果查询
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/getFailResultAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function callBackGetFailResult($body)
    {
        return $this->restful("POST", "/callback/getfailresult", $body);
    }

    /**
     * 回调查询
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/queryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function callBackQuery($body)
    {
        return $this->restful("POST", "/callback/query", $body);
    }

    /**
     * 回调注册
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/registerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function callBackRegister($body)
    {
        return $this->restful("POST", "/callback/register", $body);
    }

    /**
     * 回调更新
     * @link https://uniondrug.coding.net/p/module.dingtalk/git/blob/development/docs/api/CallBackController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function callBackUpdate($body)
    {
        return $this->restful("POST", "/callback/update", $body);
    }
}
