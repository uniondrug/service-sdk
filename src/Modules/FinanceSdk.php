<?php
/**
 * @author kuanxing <346300265@qq.com>
 * @date   2018-06-21
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
class FinanceSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'finance';

    /**
     * 结算单列表
     * @link https://uniondrug.coding.net/p/union.finance/git/blob/development/docs/api/Statements/StatementsController/listAction.md
     * @param array|StructInterface $body
     * @return ClientResponseInterface
     */
    public function statementsList($body)
    {
        return $this->restful(static::METHOD_POST, "/statements/list", $body);
    }

}
