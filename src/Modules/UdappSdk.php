<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * 客户管理
 * @package Uniondrug\ServiceSdk\Modules
 */
class UdappSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'udapp';


    /**
     * 学习
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/completeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantComplete($body)
    {
        return $this->restful("POST", "/assistant/complete", $body);
    }

    /**
     * 创建店员
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/createAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantCreate($body)
    {
        return $this->restful("POST", "/assistant/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantDetail($body)
    {
        return $this->restful("POST", "/assistant/detail", $body);
    }

    /**
     * 冻结/解冻
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/freezeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantFreeze($body)
    {
        return $this->restful("POST", "/assistant/freeze", $body);
    }

    /**
     * 获取门店店员列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantList($body)
    {
        return $this->restful("POST", "/assistant/list", $body);
    }

    /**
     * 调店
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/transferAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantTransfer($body)
    {
        return $this->restful("POST", "/assistant/transfer", $body);
    }

    /**
     * 修改店员信息
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/AssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function assistantUpdate($body)
    {
        return $this->restful("POST", "/assistant/update", $body);
    }
    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/closeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantPushClose($body)
    {
        return $this->restful("POST", "/merchantPush/close", $body);
    }

    /**
     * 推送详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantPushDetail($body)
    {
        return $this->restful("POST", "/merchantPush/detail", $body);
    }

    /**
     * 推送列表
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantPushList($body)
    {
        return $this->restful("POST", "/merchantPush/list", $body);
    }

    /**
     * 配置连锁开启
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantPushController/openAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantPushOpen($body)
    {
        return $this->restful("POST", "/merchantPush/open", $body);
    }

    /**
     * 开启二次扫码详情
     * @link https://uniondrug.coding.net/p/module.privilege/git/blob/development/docs/api/MerchantSecondController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantSecondDetail($body)
    {
        return $this->restful("POST", "/merchantSecond/detail", $body);
    }
}
