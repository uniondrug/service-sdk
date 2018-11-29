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
 * 增值服务方案
 * @package Uniondrug\ServiceSdk\Modules
 */
class SchemeSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'scheme';

    /**
     * 新增方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function add($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/add", $body);
    }

    /**
     * 读取方案详情
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/detailAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/detail", $body);
    }



    /**
     * 修改方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function edit($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/edit", $body);
    }

    /**
     * 方案列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getListAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getList($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getList", $body);
    }

    /**
     * 停用方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/stopAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function stop($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/stop", $body);
    }
}
