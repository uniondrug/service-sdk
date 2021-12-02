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
}