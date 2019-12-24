<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-12-24
 * @time   Tue, 24 Dec 2019 11:14:30 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * SchemeSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class SchemeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'scheme.module';

    /**
     * 新增方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/scheme/add", $body);
    }

    /**
     * 配置连锁
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/configPartnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function configPartner($body)
    {
        return $this->restful("POST", "/scheme/configPartner", $body);
    }

    /**
     * 删除关联
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/delconfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delConfig($body)
    {
        return $this->restful("POST", "/scheme/delConfig", $body);
    }

    /**
     * 读取方案详情
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/scheme/detail", $body);
    }

    /**
     * 修改方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function edit($body)
    {
        return $this->restful("POST", "/scheme/edit", $body);
    }

    /**
     * 读取连锁配置
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getConfigAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getConfig($body)
    {
        return $this->restful("POST", "/scheme/getConfig", $body);
    }

    /**
     * 读取连锁配置列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getConfigListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getConfigList($body)
    {
        return $this->restful("POST", "/scheme/getConfigList", $body);
    }

    /**
     * 方案列表
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getList($body)
    {
        return $this->restful("POST", "/scheme/getList", $body);
    }

    /**
     * 获取连锁补贴金额
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/partnerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partner($body)
    {
        return $this->restful("POST", "/scheme/partner", $body);
    }

    /**
     * 停用方案
     * @link https://uniondrug.coding.net/p/module.sketch/git/tree/development/app/docs/api/SchemeController/stopAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stop($body)
    {
        return $this->restful("POST", "/scheme/stop", $body);
    }
}
