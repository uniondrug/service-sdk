<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-05-29
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 权益相关
 * @package Uniondrug\ServiceSdk\Modules
 */
class EquitySdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 权益服务名称
     * @var string
     */
    protected $serviceName = 'equity';

    /**
     * 添加权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/add', $body);
    }
}
