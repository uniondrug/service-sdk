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
 * @date   2019-07-08
 * @time   Mon, 08 Jul 2019 10:08:08 +0800
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
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramCreate($body)
    {
        return $this->restful("POST", "/packageProgram/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDelete($body)
    {
        return $this->restful("POST", "/packageProgram/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDetail($body)
    {
        return $this->restful("POST", "/packageProgram/delete", $body);
    }

    /**
     * 禁用用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramDisable($body)
    {
        return $this->restful("POST", "/packageProgram/disable", $body);
    }

    /**
     * 启用增值服务方案
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramEnable($body)
    {
        return $this->restful("POST", "/packageProgram/enable", $body);
    }

    /**
     * 全部列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramListing($body)
    {
        return $this->restful("POST", "/packageProgram/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramPaging($body)
    {
        return $this->restful("POST", "/packageProgram/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.package/git/blob/development/docs/api/PackageProgramController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function packageProgramUpdate($body)
    {
        return $this->restful("POST", "/packageProgram/update", $body);
    }
}
