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
     * 获取连锁补贴金额
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/partnerAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function partner($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/partner", $body);
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

    /**
     * 配置连锁
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/configPartnerAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configPartner($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/configPartner", $body);
    }

    /**
     * 删除关联
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/delconfigAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function delConfig($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/delConfig", $body);
    }

    /**
     * 读取连锁配置
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getConfigAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getConfig($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getConfig", $body);
    }

    /**
     * 读取连锁配置列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getConfigListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getConfigList($body)
    {
        return $this->restful(static::METHOD_POST, "/scheme/getConfigList", $body);
    }


}
