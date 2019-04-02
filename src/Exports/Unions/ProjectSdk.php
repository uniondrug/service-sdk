<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Unions`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-04-02
 * @time   Tue, 02 Apr 2019 11:16:35 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ProjectSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'project.union';

    /**
     * 激活权益
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/activateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activate($body)
    {
        return $this->restful("POST", "/equity/activate", $body);
    }

    /**
     * 根据分组信息创建权益
     * @link https://uniondrug.coding.net/p/union.project/git/blob/development/docs/api/EquityController/createByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function AddByGroup($body)
    {
        return $this->restful("POST", "/equity/group/add", $body);
    }
}
