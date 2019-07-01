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

    /**
     * 黑名单添加接口
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/addMerchantBlackListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addMerchantBlackList($body)
    {
        return $this->restful("POST", "/filter/addmerchantblacklist", $body);
    }

    /**
     * 黑名单规则管理接口
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/addRuleAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addRule($body)
    {
        return $this->restful("POST", "/filter/addrule", $body);
    }

    /**
     * 读取黑名单列表
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/listMerchantBlackListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function listMerchantBlackList($body)
    {
        return $this->restful("POST", "/filter/listmerchantblacklist", $body);
    }

    /**
     * 过期黑名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/updateStructAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateStruct($body)
    {
        return $this->restful("POST", "/filter/updatestruct", $body);
    }

    /**
     * 过期黑名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/infoRuleAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function infoRule($body)
    {
        return $this->restful("POST", "/filter/inforule", $body);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/derivedSqlAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function derivedSql($body)
    {
        return $this->restful("POST", "/filter/derivedsql", $body);
    }

    /**
     * 判断是否黑名单商品
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/InfoBlackAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function infoblack($body)
    {
        return $this->restful("POST", "/filter/infoblack", $body);
    }
}
