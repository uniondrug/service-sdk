<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 规则引擎
 * @package Uniondrug\ServiceSdk\Modules
 */
class RuleSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'rule';

    /**
     * 权益按规则过滤
     * 经计算后的结果告诉调用方, 权益在各商品上
     * 可计价金额
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/equityAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function filterEquity($body)
    {
        return $this->restful(static::METHOD_POST, "/filter/equity", $body);
    }
}
