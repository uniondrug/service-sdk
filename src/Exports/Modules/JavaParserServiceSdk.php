<?php
/**
 * @author Mario<zhaoxiangshuo@uniondrug.cn>
 * @date   2020-07-31
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * Class JavaUserServiceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaParserServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'jx-parser';

    /**
     * 解析Excel
     * @link https://uniondrug.coding.net/p/jx-parser/d/jx-parser/git/tree/master/docs-api/uniondrug-parser-service/TaskController/excelSqlCreate.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function analysisExcel($body)
    {
        return $this->restful("POST", "/task/excelSql/Create", $body);
    }

    /**
     * 查询任务
     * @link https://uniondrug.coding.net/p/jx-parser/d/jx-parser/git/tree/master/docs-api/uniondrug-parser-service/TaskRecordController/get.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/taskRecord/get", $body);
    }
}