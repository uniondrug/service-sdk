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
 * @date   2021-11-03
 * @time   Wed, 03 Nov 2021 10:22:26 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstorePharmacistSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstorePharmacistSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-pharmacist';

    /**
     * 根据项目类型获取项目详情
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/getProjectByTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectByType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getProjectByType", $body, $query, $extra);
    }

    /**
     * 获取项目跳转url
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/getProjectJumpUrlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectJumpUrl($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/getProjectJumpUrl", $body, $query, $extra);
    }

    /**
     * 创建项目
     * @link https://uniondrug.coding.net/p/ps-dstore-pharmacist/git/blob/development/docs/api/ProjectController/saveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function saveProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/project/save", $body, $query, $extra);
    }
}
