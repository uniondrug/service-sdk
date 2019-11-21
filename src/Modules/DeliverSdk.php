<?php
/**
 * @author liyang <9521 54830@qq.com>
 * @date   2018-12-11
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 财务结算中心
 * @package Uniondrug\ServiceSdk\Modules
 */
class DeliverSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'deliver';

    /**
     * 批量开启连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchAdd($body)
    {
        return $this->restful("POST", "/partner/switch/adds", $body);
    }

    /**
     * 批量开启门店
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/addStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchAddStores($body)
    {
        return $this->restful("POST", "/partner/switch/add/stores", $body);
    }

    /**
     * 批量关闭连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchDel($body)
    {
        return $this->restful("POST", "/partner/switch/del", $body);
    }

    /**
     * 批量关闭门店
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/delStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchDelStores($body)
    {
        return $this->restful("POST", "/partner/switch/del/stores", $body);
    }

    /**
     * 批量关闭门店
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/getInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchGetInfo($body)
    {
        return $this->restful("POST", "/partner/switch/get/info", $body);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchList($body)
    {
        return $this->restful("POST", "/partner/switch/list", $body);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchPartnerList($body)
    {
        return $this->restful("POST", "/partner/switch/partner/list", $body);
    }
}
