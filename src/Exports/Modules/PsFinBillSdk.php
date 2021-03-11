<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2021-03-10
 * @time   Wed, 10 Mar 2021 13:37:54 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsFinBillSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsFinBillSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-fin-bill';

    /**
     * 获取开票信息检测结果
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/BillController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/check", $body, $query, $extra);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/BillController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/detail", $body, $query, $extra);
    }

    /**
     * 获取开票单对应结算单
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/BillController/statementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billStatement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/statement", $body, $query, $extra);
    }

    /**
     * 提交开票
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/BillController/submitBillAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billSubmit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/submitBill", $body, $query, $extra);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/detail", $body, $query, $extra);
    }

    /**
     * 导出商品明细
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/goodsDetailsExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillGoodsDetailExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/goodsDetailExport", $body, $query, $extra);
    }

    /**
     * 开票信息商品明细分页
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/billGoodsPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/billGoodsPaging", $body, $query, $extra);
    }

    /**
     * 获取开票单列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/list", $body, $query, $extra);
    }

    /**
     * 导出关联订单列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/billOrderExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillOrderExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/billOrderExport", $body, $query, $extra);
    }

    /**
     * 开票关联订单列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/billOrderPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/billOrderPaging", $body, $query, $extra);
    }

    /**
     * 开票单分页列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/paging", $body, $query, $extra);
    }

    /**
     * 开票单列表汇总信息
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/summaryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directBillSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/summary", $body, $query, $extra);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/exportMemberPagingSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directExportMemberPagingSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/exportMemberPagingSql", $body, $query, $extra);
    }

    /**
     * 顾客信息
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/memberPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directMemberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/memberPaging", $body, $query, $extra);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/orderDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/orderDetail", $body, $query, $extra);
    }

    /**
     * 订单信息商品列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/orderGoodsPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrderGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/orderGoodsPaging", $body, $query, $extra);
    }

    /**
     * 导出销售清单列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/saleGoodsExportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directSaleGoodsExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/saleGoodsExport", $body, $query, $extra);
    }

    /**
     * 获取销售清单分页列表
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/saleGoodsPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directSaleGoodsPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/saleGoodsPaging", $body, $query, $extra);
    }

    /**
     * 销售清单汇总信息
     * @link https://uniondrug.coding.net/p/ps-fin-bill/git/blob/development/docs/api/Direct/BillController/saleListSummaryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directSaleListSummary($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/direct/bill/saleListSummary", $body, $query, $extra);
    }
}
