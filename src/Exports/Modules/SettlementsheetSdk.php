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
 * @time   Tue, 04 Dec 2018 17:57:47 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * SettlementsheetSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementsheetSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'settlementsheet.module';

    /**
     * 新增对账单
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/addAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/settlementSheet/add", $body);
    }

    /**
     * 软删除对账单
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/deleteAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function delete($body)
    {
        return $this->restful("POST", "/settlementSheet/delete", $body);
    }

    /**
     * 读取对账单详情
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/detailAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function detial($body)
    {
        return $this->restful("POST", "/settlementSheet/detail", $body);
    }

    /**
     * 读取对账单列表
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/pagingAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/settlementSheet/paging", $body);
    }

    /**
     * 更新对账单信息
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/updateAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/settlementSheet/update", $body);
    }

    /**
     * 更新对账单商品替换状态
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/updateGoodsReplaceStatusAction.md
     * @param object|array $body 入参类型
     * @return ResponseInterface
     */
    public function updateGoodsReplaceStatus($body)
    {
        return $this->restful("POST", "/settlementSheet/updateGoodsReplaceStatus", $body);
    }

    /**
     * 汇总信息
     * @link https://uniondrug.coding.net/p/module.settlementsheet/git/blob/development/docs/api/settlementSheetController/summaryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function settlementSheetSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/settlementSheet/summary", $body, $query, $extra);
    }
}
