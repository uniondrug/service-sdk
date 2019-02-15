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
class TradeinSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'tradein';

    /**
     * 批量开启连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchAdd($body)
    {
        return $this->restful("POST", "/trade/in/switch/adds", $body);
    }

    /**
     * 批量开启门店
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/addStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchAddStores($body)
    {
        return $this->restful("POST", "/trade/in/switch/add/stores", $body);
    }

    /**
     * 批量关闭连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchDel($body)
    {
        return $this->restful("POST", "/trade/in/switch/del", $body);
    }

    /**
     * 批量关闭门店
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/delStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchDelStores($body)
    {
        return $this->restful("POST", "/trade/in/switch/del/stores", $body);
    }

    /**
     * 查看信息
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/getInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchGetInfo($body)
    {
        return $this->restful("POST", "/trade/in/switch/get/info", $body);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchList($body)
    {
        return $this->restful("POST", "/trade/in/switch/list", $body);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/module.tradein/git/tree/development/app/docs/api/TradeInSwitchController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function TradeInSwitchPartnerList($body)
    {
        return $this->restful("POST", "/trade/in/switch/partner/list", $body);
    }
}
