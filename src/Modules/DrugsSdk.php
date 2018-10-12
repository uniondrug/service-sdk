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
class DrugsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'drugs';

    /**
     * 查看工业商品数量
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/drugs/getList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getDrugsList($body)
    {
        return $this->restful(static::METHOD_POST, "/drugs/getList", $body);
    }
}
