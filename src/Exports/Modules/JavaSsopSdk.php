<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * sales service operation platform
 * 销售服务运营平台 (促销)
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaSsopSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'ssop';

    /**
     * 查询限时折扣方案详情，点击编辑按钮调用该接口
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getLimitedDiscountSchemeInfo($body)
    {
        return $this->restful("POST", "/schemeInfo/getLimitedDiscountSchemeInfo", $body);
    }
}
