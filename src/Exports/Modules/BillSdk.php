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
 * @date   2020-11-17
 * @time   Tue, 17 Nov 2020 15:02:45 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * BillSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class BillSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'bill.module';

    /**
     * 开票信息商品分页
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billGoodsListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/billGoodsList", $body, $query, $extra);
    }

    /**
     * 更具投保id查询开票单已用多少投保金额
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billInsureAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billInsureAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/billInsureAmount", $body, $query, $extra);
    }

    /**
     * 开票单投保id分组信息
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billInsureIdGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billInsureIdGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/billInsureIdGroup", $body, $query, $extra);
    }

    /**
     * 开票单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billInsureListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billInsureList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/billInsureList", $body, $query, $extra);
    }

    /**
     * 订单列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billOrderListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billOrderList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/billOrderList", $body, $query, $extra);
    }

    /**
     * 更新开票单+结算单状态
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function billUpdateStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/updateStatus", $body, $query, $extra);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/detail", $body, $query, $extra);
    }

    /**
     * 导出商品清单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/exportBillGoodsListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportBillGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/exportBillGoodsList", $body, $query, $extra);
    }

    /**
     * exportBillOrderListAction()
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/exportBillOrderListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportBillOrderList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/exportBillOrderList", $body, $query, $extra);
    }

    /**
     * 生成开票单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/indexAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function index($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/index", $body, $query, $extra);
    }

    /**
     * 开票单列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function list($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/list", $body, $query, $extra);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/orderDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/orderDetail", $body, $query, $extra);
    }

    /**
     * 订单信息商品列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/orderGoodsListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/orderGoodsList", $body, $query, $extra);
    }

    /**
     * 提交开票
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/submitBillAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function submitBill($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/submitBill", $body, $query, $extra);
    }

    /**
     * 更新开票单信息
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function update($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/update", $body, $query, $extra);
    }

    /**
     * 开发票时更新开票单状态
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateBillStatusToInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/bill/updateBillStatusToInvoice", $body, $query, $extra);
    }
}
