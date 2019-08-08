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
 * @date   2019-08-08
 * @time   Thu, 08 Aug 2019 15:25:18 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * PackageSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PackageSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'package.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsCreate($body)
    {
        return $this->restful("POST", "/tags/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsDetail($body)
    {
        return $this->restful("POST", "/tags/detail", $body);
    }

    /**
     * 树列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/treesAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsTree($body)
    {
        return $this->restful("POST", "/tags/tree", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/TagsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tagsUpdate($body)
    {
        return $this->restful("POST", "/tags/update", $body);
    }
}
