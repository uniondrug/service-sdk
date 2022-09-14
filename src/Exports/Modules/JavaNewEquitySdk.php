<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-04-22
 * @Time   10:49:27
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaNewEquitySdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gw.equity';

    /**
     * 获取权益详情
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-qry/EquityQryController/detailApi.md
     */
    public function eqqryEquityDetail($body)
    {
        return $this->restful("POST", "/eqqry/qry/equity/detail", $body);
    }

    /**
     * 能使用权益列表
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function multipleTrialCanUsedList($body)
    {
        return $this->restful("POST", "/trial/multiple/trial/canUsed/list", $body);
    }

    /**
     * 获取权益列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-qry/EquityQryController/pagingApi.md
     */
    public function eqqryEquityPaging($body)
    {
        return $this->restful("POST", "/eqqry/qry/equity/paging", $body);
    }

    /**
     * 多权益试算
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function trailMultipleTrialEquity($body)
    {
        return $this->restful("POST", "/trial/multiple/trial/equity", $body);
    }

    /**
     * 单权益延期
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esbp.parent/js-esbp-equity-svr/api/EquitySvrController/delay.md
     */
    public function eqsvrEquityDelay($body)
    {
        return $this->restful("POST", "/eqsvr/svr/equity/delay", $body);
    }

    /**
     * 兑换码详情
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-qry/CodeQryController/detail.md
     */
    public function agrqryCodeDetail($body)
    {
        return $this->restful("POST", "/agrqry/qry/code/detail", $body);
    }

    /**
     * 获取采购单明细
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/PurchaseController/detail.md
     */
    public function agrmngPurchaseDetail($body)
    {
        return $this->restful("POST", "/agrmng/mng/purchase/detail", $body);
    }

    /**
     * 查询协议明细
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/AgreementController/getAgreementDetail.md
     */
    public function agrmngAgreementGetDetail($body)
    {
        return $this->restful("POST", "/agrmng/mng/agreement/getDetail", $body);
    }

    /**
     * 根据采购单IDs查询采购单信息列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/PurchaseController/listPurchase.md
     */
    public function agrmngPurchaseListPurchase($body)
    {
        return $this->restful("POST", "/agrmng/mng/purchase/listPurchase", $body);
    }

    /**
     * 查询es（权益和兑换码宽表列表）
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/CodeController/getCodePurchase.md
     */
    public function agrmngCodeGetCodePurchase($body)
    {
        return $this->restful("POST", "/agrmng/mng/code/getCodePurchase", $body);
    }

    /**
     * 查询es详情 （权益和兑换码宽表）
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/CodeController/getCodePurchaseDetail.md
     */
    public function agrmngCodeGetCodePurchaseDetail($body)
    {
        return $this->restful("POST", "/agrmng/mng/code/getCodePurchaseDetail", $body);
    }

    /**
     * 获取合并卡记录
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esbp.parent/js-esbp-equity-qry/api/EquityQryController/getCombineLists.md
     */
    public function eqqryEquityGetCombineLists($body)
    {
        return $this->restful("POST", "/eqqry/qry/equity/getCombineLists", $body);
    }

    /**
     * 根据权益id 获取对应的虚拟卡信息 单条
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esbp.parent/js-esbp-equity-qry/api/EquityQryController/getCombineBySourceEquityId.md
     */
    public function eqqryEquityGetCombineBySourceEquityId($body)
    {
        return $this->restful("POST", "/eqqry/qry/equity/getCombineBySourceEquityId", $body);
    }

    /**
     * 查询个人有效余额和有效卡
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esbp.parent/js-esbp-equity-qry/api/EquityQryController/getAdminMemberIdCount.md
     */
    public function eqqryEquityGetAdminMemberIdCount($body)
    {
        return $this->restful("POST", "/eqqry/qry/equity/getAdminMemberIdCount", $body);
    }

    /**
     * 查询协议列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-qry/AgreementQryController/listAgreement.md
     */
    public function agrqryAgreementList($body)
    {
        return $this->restful("POST", "/agrqry/qry/agreement/list", $body);
    }

    /**
     * 分页查询采购单
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-qry/PurchaseQryController/listPage.md
     */
    public function agrqryPurchaseListPage($body)
    {
        return $this->restful("POST", "/agrqry/qry/purchase/listPage", $body);
    }

    /**
     * 分页查询采购商品
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-qry/PurchaseGoodsQryController/listPagePurchaseGoods.md
     */
    public function agrqryGoodsListPage($body)
    {
        return $this->restful("POST", "/agrqry/qry/purchase/goods/listPage", $body);
    }

    /**
     * 查询整个采购商品的信息
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/PurchaseGoodsController/getIntactPurchaseGoods.md
     */
    public function agrmngPurchaseGoodsGetIntact($body)
    {
        return $this->restful("POST", "/agrmng/mng/purchase/goods/getIntact", $body);
    }

    /**
     * 查询整个采购商品的信息
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-qry/PurchaseQryController/getById.md
     */
    public function agrqryPurchaseGetById($body)
    {
        return $this->restful("POST", "/agrqry/qry/purchase/getById", $body);
    }

    /**
     * 接口模式创建兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-mng/CodeController/createCode.md
     */
    public function agrmngCodeCreateCode($body)
    {
        return $this->restful("POST", "/agrmng/mng/code/createCode", $body);
    }

    /**
     * 回收兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-svr/CodeSvrController/recycleCode.md
     */
    public function agrsrvCodeRecycle($body)
    {
        return $this->restful("POST", "/agrsvr/srv/code/recycle", $body);
    }

    /**
     * 权益列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js.esop.parent/api/js-esop-agreement-svr/CodeSvrController/recycleCode.md
     */
    public function equityQryList($body)
    {
        return $this->restful("POST", "/bizsvr/equity/qry/list", $body);
    }

    /**
     * 智赔扣款
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/42GnOezW
     */
    public function bizsvrEquityBatchDebit($body)
    {
        return $this->restful("POST", "/bizsvr/equity/batch/debit", $body);
    }

    /**
     * 智赔扣款撤销
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrEquityBatchRejectDebit($body)
    {
        return $this->restful("POST", "/bizsvr/equity/batch/rejectDebit", $body);
    }

    /**
     * 智赔单个扣款撤销
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpEquityRejectDebit($body)
    {
        return $this->restful("POST", "/bizsvr/zp/equity/rejectDebit", $body);
    }

    /**
     * 智赔单权益冻结
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpEquityFreeze($body)
    {
        return $this->restful("POST", "/bizsvr/zp/equity/freeze", $body);
    }

    /**
     * 智赔单权益解冻
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpEquityUnfreeze($body)
    {
        return $this->restful("POST", "/bizsvr/zp/equity/unfreeze", $body);
    }

    /**
     * 智赔 单权益/单兑换码 回收
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpEquityRecycle($body)
    {
        return $this->restful("POST", "/bizsvr/zp/equity/recycle", $body);
    }

    /**
     * 智赔 单账户扣款
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpEquityDebit($body)
    {
        return $this->restful("POST", "/bizsvr/zp/equity/debit", $body);
    }

    /**
     * 智赔 单账户冻结
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpAccountFreeze($body)
    {
        return $this->restful("POST", "/bizsvr/zp/account/freeze", $body);
    }

    /**
     * 智赔 单账户解冻
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpAccountUnfreeze($body)
    {
        return $this->restful("POST", "/bizsvr/zp/account/unfreeze", $body);
    }

    /**
     * 智赔 发放权益
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://torna.uniondrug.cn/#/view/K2ZB602v
     */
    public function bizsvrZpPurchaseCreate($body)
    {
        return $this->restful("POST", "/bizsvr/zp/purchase/create", $body);
    }
}
