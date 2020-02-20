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
 * @date   2020-02-20
 * @time   Thu, 20 Feb 2020 18:20:49 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * GuaranteeclaimSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class GuaranteeclaimSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'guaranteeclaim.module';

    /**
     * 添加申请记录
     * @link https://uniondrug.coding.net/p/module.guaranteeclaim/git/blob/development/docs/api/ApplyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyAdd($body)
    {
        return $this->restful("POST", "/apply/add", $body);
    }

    /**
     * 申请单详情
     * @link https://uniondrug.coding.net/p/module.guaranteeclaim/git/blob/development/docs/api/ApplyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyDetail($body)
    {
        return $this->restful("POST", "/apply/detail", $body);
    }

    /**
     * 申请列表-分页
     * @link https://uniondrug.coding.net/p/module.guaranteeclaim/git/blob/development/docs/api/ApplyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyPaging($body)
    {
        return $this->restful("POST", "/apply/paging", $body);
    }

    /**
     * 编辑申请记录
     * @link https://uniondrug.coding.net/p/module.guaranteeclaim/git/blob/development/docs/api/ApplyController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function applyUpdate($body)
    {
        return $this->restful("POST", "/apply/update", $body);
    }
}
