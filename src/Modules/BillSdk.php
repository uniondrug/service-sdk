<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2018-11-03
 * @time   Sat, 03 Nov 2018 11:30:14 +0800
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 开票SDK
 * BillSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class BillSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'bill';

    /**
     * 导出关联订单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/exportBillOrderListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportBillOrderList($body)
    {
        return $this->restful("POST", "/bill/exportBillOrderList", $body);
    }

    /**
     * 导出商品清单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/exportBillGoodsListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportBillGoodsList($body)
    {
        return $this->restful("POST", "/bill/exportBillGoodsList", $body);
    }

    /**
     * 订单详情
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/orderDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderDetail($body)
    {
        return $this->restful("POST", "/bill/orderDetail", $body);
    }

    /**
     * 更新开票单状态
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateBillStatusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateBillStatus($body)
    {
        return $this->restful("POST", "/bill/updateBillStatus", $body);
    }

    /**
     * 开票单投保id分组信息
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billInsureIdGroupAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billInsureIdGroup($body)
    {
        return $this->restful("POST", "/bill/billInsureIdGroup", $body);
    }

    /**
     * 更新开票单金额
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateBillAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateBillAmount($body)
    {
        return $this->restful("POST", "/bill/updateBillAmount", $body);
    }

    /**
     * 订单商品列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/orderGoodsListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderGoodsList($body)
    {
        return $this->restful("POST", "/bill/orderGoodsList", $body);
    }

    /**
     * 开票单商品分页
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billGoodsListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billGoodsList($body)
    {
        return $this->restful("POST", "/bill/billGoodsList", $body);
    }

    /**
     * 开票单订单列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/billOrderListAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function billOrderList($body)
    {
        return $this->restful("POST", "/bill/billOrderList", $body);
    }

    /**
     * 生成开票单
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/indexAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function index($body)
    {
        return $this->restful("POST", "/bill/index", $body);
    }

    /**
     * 读取开票单列表
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function list($body)
    {
        return $this->restful("POST", "/bill/list", $body);
    }

    /**
     * 读取开票单详情
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function detail($body)
    {
        return $this->restful("POST", "/bill/detail", $body);
    }

    /**
     * 更新开票单信息
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function update($body)
    {
        return $this->restful("POST", "/bill/update", $body);
    }

    /**
     *  更具投保id查询开票单已用多少投保金额
     * @link https://uniondrug.coding.net/p/module.bill/git/blob/development/docs/api/BillController/updateBillStatusToInvoiceAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function updateBillStatusToInvoice($body)
    {
        return $this->restful("POST", "/bill/updateBillStatusToInvoice", $body);
    }

}
