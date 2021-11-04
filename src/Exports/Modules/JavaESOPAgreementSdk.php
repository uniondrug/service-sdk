<?php
/**
 * @author mengqing<mengqing@uniondrug.com>
 * @date   2021-11-04
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaESOPAgreementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'js-esop-agreement-mng';

    /**
     * 查询协议列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/AgreementController/listAgreementApi.md
     */
    public function agreementList($body)
    {
        return $this->restful("POST", "/mng/agreement/list", $body);
    }

    /**
     * 获取采购单明细
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/PurchaseController/detailApi.md
     */
    public function purchaseDetail($body)
    {
        return $this->restful("POST", "/mng/purchase/detail", $body);
    }

    /**
     * 分页查询采购单信息
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/PurchaseController/listPageApi.md
     */
    public function purchaseListPage($body)
    {
        return $this->restful("POST", "/mng/purchase/listPage", $body);
    }

    /**
     * 查询协议明细
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/AgreementController/getAgreementDetailApi.md
     */
    public function agreementGetDetail($body)
    {
        return $this->restful("POST", "/mng/agreement/getDetail", $body);
    }

    /**
     * 冻结兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/CodeController/freezeCodeApi.md
     */
    public function codeFreeze($body)
    {
        return $this->restful("POST", "/mng/code/freeze", $body);
    }

    /**
     * 解冻兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/CodeController/unFreezeCodeApi.md
     */
    public function codeUnFreeze($body)
    {
        return $this->restful("POST", "/mng/code/unFreeze", $body);
    }

    /**
     * 查询兑换码列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/CodeController/listCodeByAgreementApi.md
     */
    public function codeListByAgreement($body)
    {
        return $this->restful("POST", "/mng/code/listByAgreement", $body);
    }

    /**
     * 创建采购商品
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/PurchaseGoodsController/createPurchaseGoodsApi.md
     */
    public function purchaseGoodsCreate($body)
    {
        return $this->restful("POST", "/mng/purchase/goods/create", $body);
    }
}
