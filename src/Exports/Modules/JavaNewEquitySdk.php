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
        return $this->restful("POST", "/trail/multiple/trial/equity", $body);
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
}