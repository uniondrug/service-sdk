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
 * @date   2019-05-07
 * @time   Tue, 07 May 2019 16:01:42 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ProductSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProductSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'product.module';

    /**
     * 添加方案
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addProgram($body)
    {
        return $this->restful("POST", "/program/add", $body);
    }

    /**
     * 复制方案
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/copyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function copyProgram($body)
    {
        return $this->restful("POST", "/program/copy", $body);
    }

    /**
     * 停用方案
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableProgram($body)
    {
        return $this->restful("POST", "/program/disable", $body);
    }

    /**
     * 编辑方案
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editProgram($body)
    {
        return $this->restful("POST", "/program/edit", $body);
    }

    /**
     * 启用方案
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableProgram($body)
    {
        return $this->restful("POST", "/program/enable", $body);
    }

    /**
     * 方案基础明细
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProgramDetail($body)
    {
        return $this->restful("POST", "/program/detail", $body);
    }

    /**
     * 导出方案管理sql
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/getProgramExportSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProgramExportSql($body)
    {
        return $this->restful("POST", "/program/getProgramExportSql", $body);
    }

    /**
     * 按商户读取列表
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/listsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProgramlists($body)
    {
        return $this->restful("POST", "/program/lists", $body);
    }

    /**
     * 按商户读分页
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProgramPaging($body)
    {
        return $this->restful("POST", "/program/paging", $body);
    }

    /**
     * 按ID读方案列表
     * @link https://uniondrug.coding.net/p/module.product/git/blob/development/docs/api/ProgramController/idsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProgramsByIds($body)
    {
        return $this->restful("POST", "/program/ids", $body);
    }
}
