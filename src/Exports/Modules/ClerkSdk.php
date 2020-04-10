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
 * @time   Fri, 10 Apr 2020 14:22:38 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * ClerkSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ClerkSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'clerk.module';

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantCreate($body)
    {
        return $this->restful("POST", "/assistant/create", $body);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/destroyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantDestroy($body)
    {
        return $this->restful("POST", "/assistant/destroy", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantDetail($body)
    {
        return $this->restful("POST", "/assistant/detail", $body);
    }

    /**
     * 冻结/解冻店员
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantFreeze($body)
    {
        return $this->restful("POST", "/assistant/freeze", $body);
    }

    /**
     * 获取门店店长数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/storeRoleListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantStoreRoleList($body)
    {
        return $this->restful("POST", "/assistant/storeRoleList", $body);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransfer($body)
    {
        return $this->restful("POST", "/assistant/transfer", $body);
    }

    /**
     * 调店历史
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/transferListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTransferList($body)
    {
        return $this->restful("POST", "/assistant/transferList", $body);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantUpdate($body)
    {
        return $this->restful("POST", "/assistant/update", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PayAccountController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountDetail($body)
    {
        return $this->restful("POST", "/pay/account/detail", $body);
    }

    /**
     * 修改数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PayAccountController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payAccountUpdate($body)
    {
        return $this->restful("POST", "/pay/account/update", $body);
    }

    /**
     * 创建资格
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PharmacistController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistCreate($body)
    {
        return $this->restful("POST", "/pharmacist/create", $body);
    }

    /**
     * 获取资格
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PharmacistController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacistDetail($body)
    {
        return $this->restful("POST", "/pharmacist/detail", $body);
    }
}
