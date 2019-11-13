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
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:08:33 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * SettlementlogSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementlogSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'settlementlog.module';

    /**
     * 添加对账单操作日志
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/log/add", $body);
    }

    /**
     * 对账单操作日志详情
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/log/detail", $body);
    }

    /**
     * 对账单操作日志列表
     * @link https://uniondrug.coding.net/p/module.settlementlog/git/blob/development/docs/api/LogController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function list($body)
    {
        return $this->restful("POST", "/log/list", $body);
    }
}
