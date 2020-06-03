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
 * @date   2019-11-25
 * @time   Mon, 25 Nov 2019 11:17:12 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * EquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class EquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'equity.module';

    /**
     * 激活接口
     * 激活指定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function active($body)
    {
        return $this->restful("POST", "/equity/active", $body);
    }

    /**
     * 激活保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function ActiveGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/active", $body);
    }

    /**
     * 添加权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addEquity($body)
    {
        return $this->restful("POST", "/equity/add", $body);
    }

    /**
     * 创建团体权益
     * 为了兼容1.x 再新增一个sdk
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/AddGroupEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGroupEquity($body)
    {
        return $this->restful("POST", "/equity/group/add/group", $body);
    }

    /**
     * 创建保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/add", $body);
    }

    /**
     * 统计用户金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/memberIdCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function adminmemberidcount($body)
    {
        return $this->restful("POST", "/equity/memberidcount", $body);
    }

    /**
     * 保障列表admin
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/adminPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function adminPaging($body)
    {
        return $this->restful("POST", "/guarantee/adminpaging", $body);
    }

    /**
     * 即买即用权益信息修改
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/buySellAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function buySell($body)
    {
        return $this->restful("POST", "/equity/buysell", $body);
    }

    /**
     * 根据项目ID和MemberId查看是否有权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/checkEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkEquity($body)
    {
        return $this->restful("POST", "/equity/checkequity", $body);
    }

    /**
     * 检查权益虚列表信息是否存在
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquitySerialController/checkEquitySerialAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkEquitySerial($body)
    {
        return $this->restful("POST", "/equity/serial/checkEquitySerial", $body);
    }

    /**
     * 检查保障是否购买
     * 根据用户身份证号和产品ID检查是否购买过此保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/checkByIdCardAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function checkGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/check", $body);
    }

    /**
     * 理赔【扣除】
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/claimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimClaim($body)
    {
        return $this->restful("POST", "/equity/claim/claim", $body);
    }

    /**
     * 生成理赔单号
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/creatBillAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimCreatBill($body)
    {
        return $this->restful("POST", "/equity/claim/creatBill", $body);
    }

    /**
     * 理赔单查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimDetail($body)
    {
        return $this->restful("POST", "/equity/claim/detail", $body);
    }

    /**
     * 驳回
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/rejectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function claimReject($body)
    {
        return $this->restful("POST", "/equity/claim/reject", $body);
    }

    /**
     * 根据订单号查询权益消费记录
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/consumeDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeDetail($body)
    {
        return $this->restful("POST", "/equity/consume/detail/orderNo", $body);
    }

    /**
     * 消费接口
     * 根据precheckNo消费权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeEquity($body)
    {
        return $this->restful("POST", "/equity/consume", $body);
    }

    /**
     * 权益消费列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/consumeListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeList($body)
    {
        return $this->restful("POST", "/equity/consume/lists", $body);
    }

    /**
     * 统计用户保障数量
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/countGuaranteeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function countGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/countguarantee", $body);
    }

    /**
     * 用分组id获取分组权益id
     * 为了兼容 1.x SDK 新增此方法 和上面的方法相同
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/detailByGroupIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailByGroupId($body)
    {
        return $this->restful("POST", "/equity/group/detailByGroupId", $body);
    }

    /**
     * 用消费订单号查权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/detailByOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailByOrder($body)
    {
        return $this->restful("POST", "/equity/detailByOrder", $body);
    }

    /**
     * 通过itemId获取对应的换药权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/detailItemAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailItem($body)
    {
        return $this->restful("POST", "/equity/detailitem", $body);
    }

    /**
     * 冻结所有权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableAllEquity($body)
    {
        return $this->restful("POST", "/equity/disableAll", $body);
    }

    /**
     * 禁用接口
     * 禁用指定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableEquity($body)
    {
        return $this->restful("POST", "/equity/disable", $body);
    }

    /**
     * 根据权益禁用保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/disableByEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableGuaranteeByEquityId($body)
    {
        return $this->restful("POST", "/guarantee/disable/equityid", $body);
    }

    /**
     * 禁用权益
     * 根据保障ID禁用保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableGuaranteeById($body)
    {
        return $this->restful("POST", "/guarantee/disable", $body);
    }

    /**
     * 换新绑定保障接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/drugExpireAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugExpire($body)
    {
        return $this->restful("POST", "/guarantee/drugexpire", $body);
    }

    /**
     * 启用权益
     * 启用指定权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableEquity($body)
    {
        return $this->restful("POST", "/equity/enable", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailableCreate($body)
    {
        return $this->restful("POST", "/equityAvailable/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailableDelete($body)
    {
        return $this->restful("POST", "/equityAvailable/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailableDetail($body)
    {
        return $this->restful("POST", "/equityAvailable/detail", $body);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailableListing($body)
    {
        return $this->restful("POST", "/equityAvailable/listing", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailablePaging($body)
    {
        return $this->restful("POST", "/equityAvailable/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityAvailableController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityAvailableUpdate($body)
    {
        return $this->restful("POST", "/equityAvailable/update", $body);
    }

    /**
     * 根据实卡ID查询虚拟卡ID
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityCombineController/getByEquityIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityCombineEquityId($body)
    {
        return $this->restful("POST", "/equity/combine/getByEquityId", $body);
    }

    /**
     * 根据groupId冻结已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableEquityByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityDisableEquityByGroup($body)
    {
        return $this->restful("POST", "/equity/equityDisableEquityByGroup", $body);
    }

    /**
     * 根据projectId冻结已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableEquityByProjectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityDisableEquityByProject($body)
    {
        return $this->restful("POST", "/equity/equityDisableEquityByProject", $body);
    }

    /**
     * 根据groupId解冻已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/enableEquityByGroupAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityEnableEquityByGroup($body)
    {
        return $this->restful("POST", "/equity/equityEnableEquityByGroup", $body);
    }

    /**
     * 根据projectId解冻已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/enableEquityByProjectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityEnableEquityByProject($body)
    {
        return $this->restful("POST", "/equity/equityEnableEquityByProject", $body);
    }

    /**
     * 根据分单号和用户信息 获取已经存在的权益，并返回权益和用户信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getByBillNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityGetByBillNos($body)
    {
        return $this->restful("POST", "/equity/billNos", $body);
    }

    /**
     * 根据权益分组ID和用户ID 获取虚拟卡信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getEquityDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityGetEquityDetail($body)
    {
        return $this->restful("POST", "/equity/virtual/detail", $body);
    }

    /**
     * getRecycleDataAction()
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getRecycleDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityGetRecycleData($body)
    {
        return $this->restful("POST", "/equity/equityGetRecycleData", $body);
    }

    /**
     * 创建团体权益
     * 这个sdk 不知道谁加的，为了兼容1.x 再新增一个sdk
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/AddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityGroupAdd($body)
    {
        return $this->restful("POST", "/equity/group/add", $body);
    }

    /**
     * 编辑权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityGroupEdit($body)
    {
        return $this->restful("POST", "/equity/group/edit", $body);
    }

    /**
     * 权益集合消费数据统计
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityConsumeController/equityIdsCountsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityIdsCounts($body)
    {
        return $this->restful("POST", "/equity/consume/equityidscounts", $body);
    }

    /**
     * 获取权益风控
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/limitAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityLimit($body)
    {
        return $this->restful("POST", "/equity/limit", $body);
    }

    /**
     * 通过分组回收权益(异步)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/recycleGroupEquityAsyncAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityRecycleAsyncGroup($body)
    {
        return $this->restful("POST", "/equity/equityRecycleAsyncGroup", $body);
    }

    /**
     * 通过分组回收权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/recycleGroupEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityRecycleGroup($body)
    {
        return $this->restful("POST", "/equity/equityRecycleGroup", $body);
    }

    /**
     * recycleSingleEquityAction()
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/recycleSingleEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityRecycleSingle($body)
    {
        return $this->restful("POST", "/equity/equityRecycleSingle", $body);
    }

    /**
     * 退款前检查
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityRefundController/refundCheckListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityRefundListOrderNo($body)
    {
        return $this->restful("POST", "/equity/refund/list/orderNo", $body);
    }

    /**
     * 权益账号余额信息查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityExtendController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function extendDetail($body)
    {
        return $this->restful("POST", "/equity/extend/detail", $body);
    }

    /**
     * 权益账号余额多条查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityExtendController/detailAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function extendDetailAll($body)
    {
        return $this->restful("POST", "/equity/extend/detailAll", $body);
    }

    /**
     * 权益信息查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityExtendController/getEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function extendGetEquity($body)
    {
        return $this->restful("POST", "/equity/extend/getEquity", $body);
    }

    /**
     * 更新分单号对应用户信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityExtendController/updateEquityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function extendUpdateEquity($body)
    {
        return $this->restful("POST", "/equity/extend/update/equity", $body);
    }

    /**
     * 通过orderNos 获取多条权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/orderNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getByOrderNos($body)
    {
        return $this->restful("POST", "/equity/orderNos", $body);
    }

    /**
     * 换新保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/drugPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getDrugGuaranteePaging($body)
    {
        return $this->restful("POST", "/guarantee/drugpaging", $body);
    }

    /**
     * 权益详情
     * 根据权益id 或权益卡号 查找权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityByEquityNo($body)
    {
        return $this->restful("POST", "/equity/detail", $body);
    }

    /**
     * 权益详情
     * 根据权益id  查找权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getEquityByIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityById($body)
    {
        return $this->restful("POST", "/equity/detail/equityId", $body);
    }

    /**
     * 通过orderNos获取权益列表(智赔)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/listByOrderNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityByOrderNos($body)
    {
        return $this->restful("POST", "/equity/orderNos/list", $body);
    }

    /**
     * 根据外部订单号获取权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getDetailByOutOrderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityByOutOrderNo($body)
    {
        return $this->restful("POST", "/equity/outorderno", $body);
    }

    /**
     * 通过id 获取多条权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getDetailByIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityListByIds($body)
    {
        return $this->restful("POST", "/equity/ids/lists", $body);
    }

    /**
     * 根据外部订单号获取权益详情[列表]
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getListsByOutOrderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityListByOutOrderNo($body)
    {
        return $this->restful("POST", "/equity/lists/outorderno", $body);
    }

    /**
     * 权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getListsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityPaging($body)
    {
        return $this->restful("POST", "/equity/paging", $body);
    }

    /**
     * 根据实卡id获取权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getEquityListByIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquitysById($body)
    {
        return $this->restful("POST", "/equity/equitys/equityId", $body);
    }

    /**
     * 根据试算记录流水号 获取商品列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/getGoodsListByPrecheckNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsListByPrecheckNo($body)
    {
        return $this->restful("POST", "/precheck/precheckno/goodslist", $body);
    }

    /**
     * 用分组id获取分组权益id
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/getDetailByGroupIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupEquityByGroupId($body)
    {
        return $this->restful("POST", "/equity/group/getdetailByGroupId", $body);
    }

    /**
     * 获取权益详情
     * 根据权益ID 获取权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupEquityById($body)
    {
        return $this->restful("POST", "/equity/group/detail", $body);
    }

    /**
     * 获取权益列表
     * 根据项目ID 获取权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGroupEquityPaging($body)
    {
        return $this->restful("POST", "/equity/group/paging", $body);
    }

    /**
     * 保障详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGuaranteeDetail($body)
    {
        return $this->restful("POST", "/guarantee/detail", $body);
    }

    /**
     * 保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGuaranteePaging($body)
    {
        return $this->restful("POST", "/guarantee/paging", $body);
    }

    /**
     * 获取用户有几个权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/memberCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberEquityCount($body)
    {
        return $this->restful("POST", "/equity/member/count", $body);
    }

    /**
     * 用户有没有消费数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityConsumeController/memberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberIsConsume($body)
    {
        return $this->restful("POST", "/equity/consume/member", $body);
    }

    /**
     * 根据退款单号检查退款详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityRefundController/getDetailByRefundNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRefundDetailByRefundNo($body)
    {
        return $this->restful("POST", "/equity/refund/detail/refundNo", $body);
    }

    /**
     * 获取分组权益 权益总金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getNominalValueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function groupNominalValue($body)
    {
        return $this->restful("POST", "/equity/group/nominalValue", $body);
    }

    /**
     * 保障详情
     * 为了兼容 1.x sdk 新增此方法，正常调用请使用上面的detail 方法
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeDetail($body)
    {
        return $this->restful("POST", "/guarantee/info", $body);
    }

    /**
     * getActivateGuaranteeNumAction()
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/getActivateGuaranteeNumAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeGetActivateNum($body)
    {
        return $this->restful("POST", "/guarantee/guaranteeGetActivateNum", $body);
    }

    /**
     * 保障列表
     * 为了兼容 1.x sdk 新增此方法，正常调用请使用上面的paging 方法
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/pagingListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeList($body)
    {
        return $this->restful("POST", "/guarantee/pagingList", $body);
    }

    /**
     * 保障理赔操作
     * 用于恢复数据使用，慎用！！！
     * 更新保障对应的权益数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/repairSettlementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeRepairSettlement($body)
    {
        return $this->restful("POST", "/guarantee/settlement/repair", $body);
    }

    /**
     * 保障延期设置
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/updateAvailableToAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeUpdateAvailableTo($body)
    {
        return $this->restful("POST", "/guarantee/updateAvailableTo", $body);
    }

    /**
     * 设置权益为失效状态
     * 入参只需要一个，使用优先级为 equityId equityNo outOrderNo
     * 只有未激活和已激活状态的权益才可以设为失效状态
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/InvalidAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invalid($body)
    {
        return $this->restful("POST", "/equity/invalid", $body);
    }

    /**
     * 设置保障为失效状态
     * 入参只需要一个，使用优先级为 guaranteeId equityId
     * 只有未激活和已激活状态的保障才可以设为失效状态
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/InvalidAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function invalidGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/invalid", $body);
    }

    /**
     * 提额操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/liftingAmountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function liftingAmount($body)
    {
        return $this->restful("POST", "/equity/liftingamount", $body);
    }

    /**
     * 提额明细
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/liftingDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function liftingdetail($body)
    {
        return $this->restful("POST", "/equity/liftingdetail", $body);
    }

    /**
     * 锁定试算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/lockAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function lockEquity($body)
    {
        return $this->restful("POST", "/precheck/lock", $body);
    }

    /**
     * 用户消费数据列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityConsumeController/memberEquityTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberEquityType($body)
    {
        return $this->restful("POST", "/equity/consume/memberequitytype", $body);
    }

    /**
     * 统计用户换新保障金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/memberIdCountAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function memberIdCount($body)
    {
        return $this->restful("POST", "/guarantee/memberidcount", $body);
    }

    /**
     * 订单号查询保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/orderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderno($body)
    {
        return $this->restful("POST", "/guarantee/orderno", $body);
    }

    /**
     * 创建权益消费限制
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityOrganController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function organCreate($body)
    {
        return $this->restful("POST", "/equity/organ/create", $body);
    }

    /**
     * 预核算接口
     * 传入订单信息，进行预核算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheck($body)
    {
        return $this->restful("POST", "/precheck/check", $body);
    }

    /**
     * 试算记录详情
     * 根据试算流水号获取 试算记录详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckDetail($body)
    {
        return $this->restful("POST", "/precheck/detail", $body);
    }

    /**
     * 根据获取多条记录
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/precheckMemberIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckList($body)
    {
        return $this->restful("POST", "/precheck/prechecklist", $body);
    }

    /**
     * 预核算 针对自付转权益的权益卡
     * 只提供给审核中心，其他人请勿使用
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PrecheckController/noCheckAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckNoCheck($body)
    {
        return $this->restful("POST", "/precheck/no/check", $body);
    }

    /**
     * 项目下的用户拥有的权益和总金额计算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/projectMemberAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectMember($body)
    {
        return $this->restful("POST", "/equity/projectmember", $body);
    }

    /**
     * 确认阅读协议
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/readAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function read($body)
    {
        return $this->restful("POST", "/equity/read", $body);
    }

    /**
     * 权益回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/recoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function recoverEquity($body)
    {
        return $this->restful("POST", "/equity/recover", $body);
    }

    /**
     * 保障回收操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/recoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function recoverGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/recover", $body);
    }

    /**
     * 退款接口
     * 根据订单号和订单信息退还指定金额or次数的权益给用户权益账户
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityRefundController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refund($body)
    {
        return $this->restful("POST", "/equity/refund/", $body);
    }

    /**
     * 换新保障接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/renewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function renew($body)
    {
        return $this->restful("POST", "/guarantee/renew", $body);
    }

    /**
     * 更新序列表信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquitySerialController/updateBillNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serialUpdateBillNo($body)
    {
        return $this->restful("POST", "/equity/serial/update/billNo", $body);
    }

    /**
     * 根据项目及用户信息更新序列表信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquitySerialController/updateBillNoV2Action.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serialUpdateBillNoV2($body)
    {
        return $this->restful("POST", "/equity/serial/update/billNo/V2", $body);
    }

    /**
     * 赠送保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/giveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setGuaranteeGive($body)
    {
        return $this->restful("POST", "/guarantee/give", $body);
    }

    /**
     * 保障理赔操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/settlementAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function settlement($body)
    {
        return $this->restful("POST", "/guarantee/settlement", $body);
    }

    /**
     * 新保障理赔接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/SettlementClaimsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function SettlementClaims($body)
    {
        return $this->restful("POST", "/guarantee/settlementclaims", $body);
    }

    /**
     * 添加寿险权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/sxAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function SxAddEquity($body)
    {
        return $this->restful("POST", "/equity/sxadd", $body);
    }

    /**
     * 获取总金额 和保障总额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getTotalFeeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function totalFee($body)
    {
        return $this->restful("POST", "/equity/totalfee", $body);
    }

    /**
     * 解锁接口
     * 根据precheckNo解锁已经锁定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/unlockAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unlockEquity($body)
    {
        return $this->restful("POST", "/equity/unlock", $body);
    }

    /**
     * 更新权益卡时间
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/updateAvailableToAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateAvailableTo($body)
    {
        return $this->restful("POST", "/equity/updateavailableto", $body);
    }

    /**
     * 变更信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquitySerialController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateEquitySerial($body)
    {
        return $this->restful("POST", "/equity/serial/update", $body);
    }

    /**
     * 批量冻结申请接口
     * batchClaimAction()
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/batchClaimAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityBatchClaim($body)
    {
        return $this->restful("POST", "/equity/equityBatchClaim", $body);
    }

    /**
     * 寿险批量驳回老
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/rejectBatchAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityClaimRejectOld($body)
    {
        return $this->restful("POST", "/equity/claim/rejectOld", $body);
    }

    /**
     * 查询流水号数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/getDataByOperatorAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityClaimGetOperatorNoData($body)
    {
        return $this->restful("POST", "/equity/claim/getOperatorNoData", $body);
    }

    /**
     * 寿险批量驳回新
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/rejectBatchNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityClaimRejectNew($body)
    {
        return $this->restful("POST", "/equity/claim/rejectNew", $body);
    }

    /**
     * 获取理赔单号（自己使用）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/getClaimNosAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getClaimNos($body)
    {
        return $this->restful("POST", "/equity/claim/getClaimNos", $body);
    }

    /**
     * 批量扣除（新）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/claimBatchNewAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityClaimClaimNew($body)
    {
        return $this->restful("POST", "/equity/claim/claimNew", $body);
    }

    /**
     * 批量扣除（老）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityClaimController/claimBatchOldAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityClaimClaimOld($body)
    {
        return $this->restful("POST", "/equity/claim/claimOld", $body);
    }

    /**
     * 权益试算批量消费
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PreCheckBatchController/consumeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckBatchConsume($body)
    {
        return $this->restful("POST", "/precheckBatch/consume", $body);
    }

    /**
     * 试算权益批量锁定
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PreCheckBatchController/lockAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckBatchLockEquity($body)
    {
        return $this->restful("POST", "/precheckBatch/lock", $body);
    }

    /**
     * 权益试算批量退款
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PreCheckBatchController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckBatchRefund($body)
    {
        return $this->restful("POST", "/precheckBatch/refund", $body);
    }

    /**
     * 试算权益批量解锁
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/PreCheckBatchController/unlockAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function precheckBatchUnlockEquity($body)
    {
        return $this->restful("POST", "/precheckBatch/unlock", $body);
    }

    /**
     * 获取权益可使用连锁列表(只包含部分连锁，缺少分组设置的连锁暂不对外提供)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityOrganController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function equityOrganListing($body)
    {
        return $this->restful("POST", "/equity/organ/listing", $body);
    }

    /**
     * 根据保障ID获取保障描述
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/getGuaranteeExplainAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeExplain($body)
    {
        return $this->restful("POST", "/guarantee/explain", $body);
    }

    /**
     * 通过保障IDs获取对应的保障信息。不超过10条
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/getGuaranteeByIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function guaranteeGetInfoByIds($body)
    {
        return $this->restful("POST", "/guarantee/getGuaranteeByIds", $body);
    }

    /**
     * 等待审核
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/pendingAuditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pendingAuditGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/pending/audit", $body);
    }

    /**
     * 拒绝审核
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GuaranteeController/refusedAuditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refusedAuditGuarantee($body)
    {
        return $this->restful("POST", "/guarantee/refused/audit", $body);
    }

    /**
     * 获取当天创建分组最新一条权益的有效期
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/GroupEquityController/getLatestEquityDateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProjectLatestEquityDate($body)
    {
        return $this->restful("POST", "/equity/group/latest/equity/date", $body);
    }

    /**
     * 根据权益id查询对应数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/getInfoByEquityIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function serialGetByEquityId($body)
    {
        return $this->restful("POST", "/equity/serial/getInfoByEquityId", $body);
    }

    /**
     * 更新分组权益金额与次数
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/editGroupEquityNominalValueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editGroupEquityValueAndTimes($body)
    {
        return $this->restful("POST", "/equity/group/editGroupEquityValueAndTimes", $body);
    }
}
