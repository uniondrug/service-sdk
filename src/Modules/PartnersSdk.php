<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 药品中心服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class PartnersSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'partners';

    /**
     * 查看连锁商品库存
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/OrderController/callback.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function callbackOrder($body)
    {
        return $this->restful(static::METHOD_POST, "/api/order/callback", $body);
    }

    /**
     * 查看连锁商品库存
     * @link https://uniondrug.coding.net/p/module.partners/git/blob/develop/docs/api/Api/StockController/search.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function searchStock($body)
    {
        return $this->restful(static::METHOD_POST, "/api/stock/search", $body);
    }
}
