<?php
/**
 * Created by PhpStorm.
 * User: tangly
 * Date: 2019-05-09
 * Time: 15:09
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * JavaGoodsCenterMngSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaGoodsCenterMngSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.goods.center.mng.module';

    /**
     * 子商品查询
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getQuerySql($body)
    {
        return $this->restful("POST", "/goods/query", $body);
    }

}