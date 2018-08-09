<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-05-29
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 权益相关
 * @package Uniondrug\ServiceSdk\Modules
 */
class EquitySdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 权益服务名称
     * @var string
     */
    protected $serviceName = 'equity';

    /**
     * 添加权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/addAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/add', $body);
    }

    /**
     * 根据订单号查询权益详情
     * @param $body
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/getDetailByOutOrderNoAction.md
     * @return ClientResponseInterface
     */
    public function getEquityByOutOrderNo($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/outorderno', $body);
    }

    /**
     * 根据权益卡号查询权益详情
     * @param $body
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/detailAction.md
     * @return ClientResponseInterface
     */
    public function getEquityByEquityNo($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/detail', $body);
    }

    /**
     * 根据权益ID 获取权益详情
     * @param $body
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/detailAction.md
     * @return ClientResponseInterface
     */
    public function getEquityById($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/detail', $body);
    }

    /**
     * 获取权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/getListsAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getEquityPaging($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/paging', $body);
    }

    /**
     * 添加分组权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GroupEquityController/AddAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addGroupEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/add', $body);
    }

    /**
     * 根据分组权益ID 获取权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GroupEquityController/detailAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getGroupEquityById($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/detail', $body);
    }

    /**
     * 根据AI智赔分组ID 获取权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GroupEquityController/detailAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getGroupEquityByGroupId($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/detail', $body);
    }

    /**
     * 获取分组权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GroupEquityController/pagingAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getGroupEquityPaging($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/paging', $body);
    }

    /**
     * 权益退款
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/RefundController/refundAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function refund($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/refund', $body);
    }

    /**
     * 用orderNos获取权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/RefundController/refundAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getByOrderNos($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/orderNos', $body);
    }

    /**
     * 权益退款
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/consumeDetailAction.md
     *
     * @param $body
     *
     * @return ClientResponseInterface
     */
    public function consumeDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/consume/detail/orderNo', $body);
    }



}
