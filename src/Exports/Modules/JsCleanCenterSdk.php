<?php
/**
 * @name   JsCleanCenterSdk
 * @date   2021-06-08
 * @time   Tue, 08 Jun 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * 新清算中心
 * @package Uniondrug\ServiceSdk\Modules
 */
class JsCleanCenterSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.clean.center';

    /**
     * 查询单条订单清算结果
     * @link https://git.uniondrug.com/code/1/finance/shares/js-newcleancenter/blob/development/docs-api/queryController/queryAll.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderClearDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clean/query/queryAll", $body);
    }

    /**
     * 分页查询订单
     * @link https://git.uniondrug.com/code/1/finance/shares/js-newcleancenter/blob/development/docs-api/queryController/PageOrderApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clean/query/pageOrder", $body);
    }

    /**
     * 根据主键id查询订单详情
     * @link https://git.uniondrug.com/code/1/finance/shares/js-newcleancenter/blob/development/docs-api/queryController/OrderDetailApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/clean/query/queryById", $body);
    }
}
