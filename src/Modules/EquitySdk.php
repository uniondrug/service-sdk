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
     * 通过id 获取多条权益信息
     * @param $body
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getDetailByIdsAction.md
     * @return ClientResponseInterface
     */
    public function getEquityListByIds($body)
    {
        return $this->restful(static::METHOD_POST, "/equity/ids/lists", $body);
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
     * 获取分组金额
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/group/nominalValue.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function groupNominalValue($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/nominalValue', $body);
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
     * @param $body
     * @return ClientResponseInterface
     */
    public function consumeDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/consume/detail/orderNo', $body);
    }

    /**
     * 权益激活
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/active.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function active($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/active', $body);
    }

    /**
     * 用分组id获取详情
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/active.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function detailByGroupId($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/group/detailByGroupId', $body);
    }

    /**
     * 试算接口
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/precheck.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function precheck($body)
    {
        return $this->restful(static::METHOD_POST, '/precheck/check', $body);
    }

    /**
     * 试算查询接口
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/detail.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function precheckDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/precheck/detail', $body);
    }

    /**
     * 消费权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/consumeAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function consumeEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/consume', $body);
    }

    /**
     * 创建权益消费限制
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityOrganController/createAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function organCreate($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/organ/create', $body);
    }

    /**
     * 创建权益消费限制
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/memberCountAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function getMemberEquityCount($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/member/count', $body);
    }

    /**
     * 获取用户是否消费过
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityConsumeController/memberAction.md
     * @param $body
     * @return ClientResponseInterface>>>>>>> 98a58e93f8e2939e2fce413e30f71e1bafab7b9a
     */
    public function getMemberIsConsume($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/consume/member', $body);
    }

    /**
     * 根据试算流水号解锁权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/unlockAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function unlockEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/unlock', $body);
    }

    /**
     * 新增保障
     * @param $body
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/addAction.md
     * @return ClientResponseInterface
     */
    public function addGuarantee($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/add', $body);
    }

    /**
     * 保障详情
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/detailAction.md
     */
    public function getGuaranteeDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/detail', $body);
    }

    /**
     * 保障列表
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/pagingAction.md
     */
    public function getGuaranteePaging($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/paging', $body);
    }

    /**
     * 赠送保障
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/giveAction.md
     */
    public function setGuaranteeGive($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/give', $body);
    }

    /**
     * 激活保障
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/activeAction.md
     */
    public function ActiveGuarantee($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/active', $body);
    }

    /**
     * 根据用户身份证号和产品ID检查是否购买过此保障
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/checkByIdCardAction.md
     */
    public function checkGuarantee($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/check', $body);
    }

    /*
     * 获取用户多少权益和保障
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/totalFeeAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function totalFee($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/totalfee', $body);
    }

    /**
     * 获取保障详情
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/detailAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function guaranteeDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/detail', $body);
    }

    /**
     * 获取保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/pagingAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function guaranteeList($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/paging', $body);
    }

    /**
     * 读取状态
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/readAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function read($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/read', $body);
    }

    /**
     * 根据保障ID禁用保障
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/disableAction.md
     */
    public function disableGuaranteeById($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/disable', $body);
    }

    /**
     * 根据权益禁用保障
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/disableByEquityAction.md
     */
    public function disableGuaranteeByEquityId($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/disable/equityid', $body);
    }

    /**
     * 设置保障为失效状态
     * 入参只需要一个，使用优先级为 guaranteeId equityId 只有未激活和已激活状态的保障才可以设为失效状态
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/InvalidAction.md
     */
    public function invalidGuarantee($body)
    {
        return $this->restful(static::METHOD_POST, '/guarantee/invalid', $body);
    }

    /**
     * 根据试算流水号锁定权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/PrecheckController/lockAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function lockEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/precheck/lock', $body);
    }

    /**
     * 获取一个用户在一个项目下的权益金额
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/projectMemberAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function projectMember($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/projectmember', $body);
    }

    /**
     * 冻结对应权益
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/projectMemberAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function disableEquity($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/disable', $body);
    }

    /**
     * 获取一个用户在权益限制金额
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/limitAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function equityLimit($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/limit', $body);
    }

    /**
     * 用户消费数据列表
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityConsumeController/memberEquityTypeAction.md
     * @param $body
     * @return ClientResponseInterface
     */
    public function memberEquityType($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/consume/memberequitytype', $body);
    }


    /**
     * 设置权益为失效状态
     * 入参只需要一个，使用优先级为 guaranteeId equityId 只有未激活和已激活状态的保障才可以设为失效状态
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/InvalidAction.md
     */
    public function invalid($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/invalid', $body);
    }

    /**
     * 通过itemId获取对应的换药权益
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/detailItemAction.md
     */
    public function detailItem($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/detailitem', $body);
    }

    /**
     * 创建团体权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/AddAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function equityGroupAdd($body)
    {
        return $this->restful(static::METHOD_POST, "/equity/group/add", $body);
    }

    /**
     * 编辑权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/editAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function equityGroupEdit($body)
    {
        return $this->restful(static::METHOD_POST, "/equity/group/edit", $body);
    }

    /**
     * 更新权益卡时间
     * @param $body
     * @return ClientResponseInterface
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/updateAvailableToAction.md
     */
    public function updateAvailableTo($body)
    {
        return $this->restful(static::METHOD_POST, '/equity/updateavailableto', $body);
    }

    /**
     * 权益提额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/liftingAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function liftingAmount($body)
    {
        return $this->restful("POST", "/equity/liftingamount", $body);
    }

    /**
     * 已用完权益数量
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/useFinishedAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getEquityUsefinishedByGroupIds($body)
    {
        return $this->restful("POST", "/equity/group/usefinished", $body);
    }

    /**
     * 权益退款明细
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/refundDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function refundDetail($body)
    {
        return $this->restful("POST", "/equity/refund/detail", $body);
    }

    /**
     * 权益提额明细
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/EquityController/liftingDetailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function liftingDetail($body)
    {
        return $this->restful("POST", "/equity/liftingdetail", $body);
    }

    /**
     * 权益回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/recoverAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recoverEquity($body)
    {
        return $this->restful("POST", "/equity/recover", $body);
    }

    /**
     * 保障回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/recoverAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recoverGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/recover", $body);
    }

    /**
     * 保障回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/detailByOrderAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function detailByOrder($body)
    {
        return $this->restful("POST", "/equity/detailByOrder", $body);
    }

    /**
     * 保障回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/detailByOrderAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function orderNo($body)
    {
        return $this->restful("POST", "/guarantee/orderno", $body);
    }

    /**
     * 换新保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/drugPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function guaranteeDrugpaging($body)
    {
        return $this->restful("POST", "/guarantee/drugpaging", $body);
    }

    /**
     * 统计个人换新总额
     * @link https://uniondrug.coding.net/p/module.equity/git/blob/development/docs/api/GuaranteeController/memberIdCountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function memberIdCount($body)
    {
        return $this->restful("POST", "/guarantee/memberidcount", $body);
    }
}
