<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-18
 */
namespace Uniondrug\ServiceSdk;

use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;

/**
 * 兼容SDK1
 * @property Mbs2Sdk $mbs2
 * @package Uniondrug\ServiceSdk
 */
trait SdkTrait
{
    private $compatiables = [
        'order' => 'module',
        'mbs' => 'module',
        'audit' => 'module',
        'pool' => 'module',
        'wxapi' => 'module',
        'merchant' => 'module',
        'user' => 'module',
        'product' => 'module',
        'project' => 'module',
        'common' => 'module',
        'equity' => 'module',
        'data' => 'module',
        'customer' => 'module',
        'rule' => 'module',
        'token' => 'module',
        'trace' => 'module',
        'ns' => 'module',
        'report' => 'module',
        'message' => 'module',
        'etl' => 'module',
        'refund' => 'module',
        'payments' => 'module',
        'mbs2' => 'module',
        'abutment' => 'module',
        'promotionUser' => 'module',
        'drugs' => 'module',
        'promotionBidding' => 'module',
        'promotionFinance' => 'module',
        'settlement' => 'module',
        'settlementSheet' => 'module',
        'settlementLog' => 'module',
        'cashier' => 'module',
        'bill' => 'module',
        'insure' => 'module',
        'invoice' => 'module',
        'finance' => 'union',
        'goodsReplace' => 'union',
        'msg' => 'module'
    ];

    /**
     * @param string $name
     * @return bool
     */
    private function getCompatiable($name)
    {
        // 兼容模式
        if (isset($this->compatiables[$name])) {
            $catalog = $this->compatiables[$name];
            return $this->{$catalog}->{$name};
        }
        return false;
    }
}
