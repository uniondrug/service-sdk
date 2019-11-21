<?php
/**
 * @author liyang
 * @date   2018-10-29
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 财务结算日志管理模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementLogSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'settlementLog';

    /**
     * 添加对账单操作日志
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/addAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/log/add", $body);
    }

    /**
     * 对账单操作日志详情
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/detailAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/log/detail", $body);
    }

    /**
     * 对账单操作日志列表
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/listAction.md
     * @param object|array $body 入参类型
     * @return ClientResponseInterface
     */
    public function list($body)
    {
        return $this->restful("POST", "/log/list", $body);
    }
}
