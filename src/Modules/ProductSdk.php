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
 * 产品服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProductSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'product';

    /**
     * 添加方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/add.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addProgram($body)
    {
        return $this->restful(static::METHOD_POST, "/program/add", $body);
    }

    /**
     * 编辑方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/edit.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editProgram($body)
    {
        return $this->restful(static::METHOD_POST, "/program/edit", $body);
    }

    /**
     * 复制方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/copy.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function copyProgram($body)
    {
        return $this->restful(static::METHOD_POST, "/program/copy", $body);
    }

    /**
     * 禁用方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/disable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function disableProgram($body)
    {
        return $this->restful(static::METHOD_POST, "/program/disable", $body);
    }

    /**
     * 启用方案
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/enable.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function enableProgram($body)
    {
        return $this->restful(static::METHOD_POST, "/program/enable", $body);
    }

    /**
     * 读取方案的基础明细
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/get.detail.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProgramDetail($body)
    {
        return $this->restful(static::METHOD_POST, "/program/detail", $body);
    }

    /**
     * 按方案ID读列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/get.ids.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProgramsByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/program/ids", $body);
    }

    /**
     * 按商户读分页
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/product/program/get.paging.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProgramPaging($body)
    {
        return $this->restful(static::METHOD_POST, "/program/paging", $body);
    }
}
