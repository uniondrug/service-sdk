<?php
/**
 * @name   JsFinanceReplaceSdk
 * @date   2021-03-22
 * @time   Tue, 04 Dec 2021 14:15:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JsFinanceReplaceSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.finance.replace';

    /**
     * 校验是否是否发起在线开票
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/development/docs-api/js-financereplace/check.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function onlineCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/online/check", $body);
    }

    /**
     * 替换结果查询
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/feature_houtai/docs-api/js-financereplace/queryController/QueryControllerApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function orderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/replace/query/queryAll", $body);
    }

    /**
     * 分页查询无税率异常数据
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/feature_houtai/docs-api/js-financereplace/taxrate/noRatePageApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noRateGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rate/norate/page", $body);
    }

    /**
     * 导出无税率异常数据-全量导出
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/feature_houtai/docs-api/js-financereplace/taxrate/exportApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function noRateGoodsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rate/norate/export", $body);
    }

    /**
     * 重新处理税率
     * @link https://git.uniondrug.com/code/1/finance/shares/js-financereplace/blob/feature_houtai/docs-api/js-financereplace/taxrate/redealApi.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function rateRedial($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rate/redeal", $body);
    }

    /**
     * 保存基础商品库数据
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function goodsSave($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/save", $body);
    }

    /**
     * 分页查询基础商品库数据
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function goodsPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/page", $body);
    }

    /**
     * 删除指定的基础商品库数据
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function goodsDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/del", $body);
    }
}

