<?php
/**
 * @author Mario<zhaoxiangshuo@uniondrug.cn>
 * @date   2020-07-31
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * Class JavaGoodsReplaceServiceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaGoodsReplaceServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.goods.replace.service';

    /**
     * 检查连锁是否有无税率商品
     * @link https://uniondrug.coding.net/p/jx-parser/d/jx-parser/git/tree/master/docs-api/uniondrug-parser-service/TaskController/excelSqlCreate.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function checkMerchantGoodsHaveNoTax($body)
    {
        return $this->restful("POST", "/goodsInformation/checkMerchantGoodsHaveNoTax", $body);
    }

    /**
     * 获取订单是否换新
     * @link https://uniondrug.coding.net/p/jx-parser/d/jx-parser/git/tree/master/docs-api/uniondrug-parser-service/TaskController/excelSqlCreate.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function queryRenewal($body)
    {
        return $this->restful("POST", "/replace/queryRenewal", $body);
    }
}