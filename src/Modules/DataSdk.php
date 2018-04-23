<?php
/**
 * @author htr
 * @date   2018-04-23
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * 数据
 * @package Uniondrug\ServiceSdk\Modules
 */
class DataSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'data';

    /**
     * 地址区域tree
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/data/areas/getTree.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getTree($body)
    {
        return $this->restful(static::METHOD_POST, "/areas/tree", $body);
    }

}
