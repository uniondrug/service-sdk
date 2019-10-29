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
 * @date   2019-10-25
 * @time   Fri, 25 Oct 2019 13:11:47 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * UdappSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class UdappSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'udapp.module';

    /**
     * 创建店员
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCreate($body)
    {
        return $this->restful("POST", "/assistant/create", $body);
    }

    /**
     * 冻结/解冻
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantFreeze($body)
    {
        return $this->restful("POST", "/assistant/freeze", $body);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransfer($body)
    {
        return $this->restful("POST", "/assistant/transfer", $body);
    }

    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/closeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushClose($body)
    {
        return $this->restful("POST", "/merchantPush/close", $body);
    }

    /**
     * 推送详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushDetail($body)
    {
        return $this->restful("POST", "/merchantPush/detail", $body);
    }

    /**
     * 推送列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushList($body)
    {
        return $this->restful("POST", "/merchantPush/list", $body);
    }

    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/openAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantPushOpen($body)
    {
        return $this->restful("POST", "/merchantPush/open", $body);
    }

    /**
     * 开启二次扫码详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantSecondController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantSecondDetail($body)
    {
        return $this->restful("POST", "/merchantSecond/detail", $body);
    }
}
