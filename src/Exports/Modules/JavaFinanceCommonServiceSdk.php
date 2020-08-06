<?php
/**
 * @author Mario <zhaoxiangshuo@uniondrug.cn>
 * @date   2020-08-06
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * Class JavaUserServiceSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaFinanceCommonServiceSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.finance.common.service';

    /**
     * 根据merchantId查询是否有无扣率商品信息
     * @link https://uniondrug.coding.net/p/js-finance-common/d/js-finance-common/git/tree/development/api-doc/uniondrug-fincom-service/checkMerchantGoodsHaveNoTax.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function checkMerchantGoodsHaveNoTax($body)
    {
        return $this->restful("POST", "/fincom/merchantGoods/checkMerchantGoodsHaveNoTax", $body);
    }

    /**
     * 连锁商品列表
     * @link https://uniondrug.coding.net/p/js-finance-common/d/js-finance-common/git/tree/development/api-doc/uniondrug-fincom-service/queryMerchentGoods.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/fincom/merchantGoods/queryMerchantGoods", $body);
    }

    /**
     * 修改商品税率
     * @link https://uniondrug.coding.net/p/js-finance-common/d/js-finance-common/git/tree/development/api-doc/uniondrug-fincom-service/updateRax.md
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function updateGoodsTaxRax($body)
    {
        return $this->restful("POST", "/fincom/merchantGoods/updateRax", $body);
    }
}