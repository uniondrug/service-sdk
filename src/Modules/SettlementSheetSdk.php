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
 * 财务结算单管理模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementSheetSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'settlementSheet';

    /**
     * 新增对账单
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/settlementSheet/add", $body);
    }

    /**
     * 读取对账单详情
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detial($body)
    {
        return $this->restful("POST", "/settlementSheet/detail", $body);
    }

    /**
     * 读取对账单列表
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/settlementSheet/paging", $body);
    }

    /**
     * 更新对账单信息
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/settlementSheet/update", $body);
    }
}
