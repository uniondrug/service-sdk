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
 * @date   2021-02-02
 * @time   Tue, 02 Feb 2021 13:20:38 +0800
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
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/activeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function active($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/active", $body, $query, $extra);
    }

    /**
     * 激活保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/activeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ActiveGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/active", $body, $query, $extra);
    }

    /**
     * 添加权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/add", $body, $query, $extra);
    }

    /**
     * 创建团体权益
     * 为了兼容1.x 再新增一个sdk
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/AddGroupEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addGroupEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/add/group", $body, $query, $extra);
    }

    /**
     * 创建保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/add", $body, $query, $extra);
    }

    /**
     * 统计用户金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/memberIdCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function adminmemberidcount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/memberidcount", $body, $query, $extra);
    }

    /**
     * 保障列表admin
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/adminPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function adminPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/adminpaging", $body, $query, $extra);
    }

    /**
     * 即买即用权益信息修改
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/buySellAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function buySell($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/buysell", $body, $query, $extra);
    }

    /**
     * 根据项目ID和MemberId查看是否有权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/checkEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/checkequity", $body, $query, $extra);
    }

    /**
     * 检查权益虚列表信息是否存在
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/checkEquitySerialAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkEquitySerial($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/serial/checkEquitySerial", $body, $query, $extra);
    }

    /**
     * 检查保障是否购买
     * 根据用户身份证号和产品ID检查是否购买过此保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/checkByIdCardAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/check", $body, $query, $extra);
    }

    /**
     * 理赔【扣除】
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/claimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/claim", $body, $query, $extra);
    }

    /**
     * 生成理赔单号
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/creatBillAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimCreatBill($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/creatBill", $body, $query, $extra);
    }

    /**
     * 理赔单查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/detail", $body, $query, $extra);
    }

    /**
     * 驳回
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/rejectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function claimReject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/reject", $body, $query, $extra);
    }

    /**
     * 根据订单号查询权益消费记录
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/consumeDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function consumeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume/detail/orderNo", $body, $query, $extra);
    }

    /**
     * 消费接口
     * 根据precheckNo消费权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/consumeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function consumeEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume", $body, $query, $extra);
    }

    /**
     * 权益消费列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/consumeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function consumeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume/lists", $body, $query, $extra);
    }

    /**
     * 统计用户保障数量
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/countGuaranteeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/countguarantee", $body, $query, $extra);
    }

    /**
     * 用分组id获取分组权益id
     * 为了兼容 1.x SDK 新增此方法 和上面的方法相同
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/detailByGroupIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailByGroupId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/detailByGroupId", $body, $query, $extra);
    }

    /**
     * 用消费订单号查权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/detailByOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailByOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detailByOrder", $body, $query, $extra);
    }

    /**
     * 通过itemId获取对应的换药权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/detailItemAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailItem($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detailitem", $body, $query, $extra);
    }

    /**
     * 冻结所有权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/disableAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableAllEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/disableAll", $body, $query, $extra);
    }

    /**
     * 禁用接口
     * 禁用指定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/disable", $body, $query, $extra);
    }

    /**
     * 根据权益禁用保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/disableByEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableGuaranteeByEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/disable/equityid", $body, $query, $extra);
    }

    /**
     * 禁用权益
     * 根据保障ID禁用保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableGuaranteeById($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/disable", $body, $query, $extra);
    }

    /**
     * 换新绑定保障接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/drugExpireAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugExpire($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/drugexpire", $body, $query, $extra);
    }

    /**
     * 更新分组权益金额与次数
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/editGroupEquityNominalValueAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editGroupEquityValueAndTimes($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/editGroupEquityValueAndTimes", $body, $query, $extra);
    }

    /**
     * 启用权益
     * 启用指定权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/enable", $body, $query, $extra);
    }

    /**
     * 批量冻结申请接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/batchClaimAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityBatchClaim($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityBatchClaim", $body, $query, $extra);
    }

    /**
     * 检查可用的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/canUsedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityCanUsed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/canUsed", $body, $query, $extra);
    }

    /**
     * 批量扣除（新）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/claimBatchNewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityClaimClaimNew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/claimNew", $body, $query, $extra);
    }

    /**
     * 批量扣除（老）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/claimBatchOldAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityClaimClaimOld($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/claimOld", $body, $query, $extra);
    }

    /**
     * 查询流水号数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/getDataByOperatorAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityClaimGetOperatorNoData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/getOperatorNoData", $body, $query, $extra);
    }

    /**
     * 寿险批量驳回新
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/rejectBatchNewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityClaimRejectNew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/rejectNew", $body, $query, $extra);
    }

    /**
     * 寿险批量驳回老
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/rejectBatchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityClaimRejectOld($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/rejectOld", $body, $query, $extra);
    }

    /**
     * 根据实卡ID查询虚拟卡ID
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityCombineController/getByEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityCombineEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/combine/getByEquityId", $body, $query, $extra);
    }

    /**
     * 根据groupId冻结已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/disableEquityByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityDisableEquityByGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityDisableEquityByGroup", $body, $query, $extra);
    }

    /**
     * 根据projectId冻结已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/disableEquityByProjectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityDisableEquityByProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityDisableEquityByProject", $body, $query, $extra);
    }

    /**
     * 根据groupId解冻已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/enableEquityByGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityEnableEquityByGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityEnableEquityByGroup", $body, $query, $extra);
    }

    /**
     * 根据projectId解冻已激活的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/enableEquityByProjectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityEnableEquityByProject($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityEnableEquityByProject", $body, $query, $extra);
    }

    /**
     * 根据分单号和用户信息 获取已经存在的权益，并返回权益和用户信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getByBillNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityGetByBillNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/billNos", $body, $query, $extra);
    }

    /**
     * 根据权益分组ID和用户ID 获取虚拟卡信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getEquityDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityGetEquityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/virtual/detail", $body, $query, $extra);
    }

    /**
     * getRecycleDataAction()
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getRecycleDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityGetRecycleData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityGetRecycleData", $body, $query, $extra);
    }

    /**
     * 创建团体权益
     * 这个sdk 不知道谁加的，为了兼容1.x 再新增一个sdk
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/AddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityGroupAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/add", $body, $query, $extra);
    }

    /**
     * 编辑权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityGroupEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/edit", $body, $query, $extra);
    }

    /**
     * 权益集合消费数据统计
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityConsumeController/equityIdsCountsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityIdsCounts($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume/equityidscounts", $body, $query, $extra);
    }

    /**
     * 获取权益风控
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/limitAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityLimit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/limit", $body, $query, $extra);
    }

    /**
     * 获取权益可使用连锁列表(只包含部分连锁，缺少分组设置的连锁暂不对外提供)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityOrganController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityOrganListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/organ/listing", $body, $query, $extra);
    }

    /**
     * 通过分组回收权益(异步)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/recycleGroupEquityAsyncAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityRecycleAsyncGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityRecycleAsyncGroup", $body, $query, $extra);
    }

    /**
     * 单个回收
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/recycleSingleEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityRecycleSingle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equityRecycleSingle", $body, $query, $extra);
    }

    /**
     * 退款前检查
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityRefundController/refundCheckListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function equityRefundListOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/refund/list/orderNo", $body, $query, $extra);
    }

    /**
     * 权益账号余额信息查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityExtendController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function extendDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/extend/detail", $body, $query, $extra);
    }

    /**
     * 权益账号余额多条查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityExtendController/detailAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function extendDetailAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/extend/detailAll", $body, $query, $extra);
    }

    /**
     * 权益信息查询
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityExtendController/getEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function extendGetEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/extend/getEquity", $body, $query, $extra);
    }

    /**
     * 更新分单号对应用户信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityExtendController/updateEquityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function extendUpdateEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/extend/update/equity", $body, $query, $extra);
    }

    /**
     * 通过orderNos 获取多条权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/orderNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getByOrderNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/orderNos", $body, $query, $extra);
    }

    /**
     * 获取理赔单号（自己使用）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityClaimController/getClaimNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getClaimNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/claim/getClaimNos", $body, $query, $extra);
    }

    /**
     * 换新保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/drugPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDrugGuaranteePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/drugpaging", $body, $query, $extra);
    }

    /**
     * 换新保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/drugPagingV2Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getDrugGuaranteePagingV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/v2/drugpaging", $body, $query, $extra);
    }

    /**
     * 权益详情
     * 根据权益id 或权益卡号 查找权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityByEquityNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detail", $body, $query, $extra);
    }

    /**
     * 权益详情
     * 根据权益id  查找权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getEquityByIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityById($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/detail/equityId", $body, $query, $extra);
    }

    /**
     * 通过orderNos获取权益列表(智赔)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/listByOrderNosAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityByOrderNos($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/orderNos/list", $body, $query, $extra);
    }

    /**
     * 根据外部订单号获取权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getDetailByOutOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityByOutOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/outorderno", $body, $query, $extra);
    }

    /**
     * 通过id 获取多条权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getDetailByIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityListByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/ids/lists", $body, $query, $extra);
    }

    /**
     * 根据外部订单号获取权益详情[列表]
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getListsByOutOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityListByOutOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/lists/outorderno", $body, $query, $extra);
    }

    /**
     * 权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getListsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/paging", $body, $query, $extra);
    }

    /**
     * 根据实卡id获取权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getEquityListByIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getEquitysById($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/equitys/equityId", $body, $query, $extra);
    }

    /**
     * 根据试算记录流水号 获取商品列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/getGoodsListByPrecheckNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGoodsListByPrecheckNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/precheckno/goodslist", $body, $query, $extra);
    }

    /**
     * 用分组id获取分组权益id
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/getDetailByGroupIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupEquityByGroupId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/getdetailByGroupId", $body, $query, $extra);
    }

    /**
     * 获取权益详情
     * 根据权益ID 获取权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupEquityById($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/detail", $body, $query, $extra);
    }

    /**
     * 获取权益列表
     * 根据项目ID 获取权益列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGroupEquityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/paging", $body, $query, $extra);
    }

    /**
     * 保障详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/detail", $body, $query, $extra);
    }

    /**
     * 保障列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/paging", $body, $query, $extra);
    }

    /**
     * 获取用户要指定增值服务对应的保障数量
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/getNumsByProductIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGuaranteeProducts($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/products", $body, $query, $extra);
    }

    /**
     * 根据主订单号和用户ID查询保障详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/getInfoByOrderNoAndMemberIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getInfoByOrderNoAndMemberId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/getInfoByOrderNoAndMemberId", $body, $query, $extra);
    }

    /**
     * 获取用户有几个权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/memberCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMemberEquityCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/member/count", $body, $query, $extra);
    }

    /**
     * 用户有没有消费数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityConsumeController/memberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMemberIsConsume($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume/member", $body, $query, $extra);
    }

    /**
     * 获取当天创建分组最新一条权益的有效期
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GroupEquityController/getLatestEquityDateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getProjectLatestEquityDate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/latest/equity/date", $body, $query, $extra);
    }

    /**
     * 根据退款单号检查退款详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityRefundController/getDetailByRefundNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRefundDetailByRefundNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/refund/detail/refundNo", $body, $query, $extra);
    }

    /**
     * 获取合并卡对应的虚卡
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityCombineController/getSourceIdByEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSourceIdByEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/combine/getSourceIdByEquityId", $body, $query, $extra);
    }

    /**
     * 获取分组权益 权益总金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getNominalValueAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupNominalValue($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/group/nominalValue", $body, $query, $extra);
    }

    /**
     * 保障详情
     * 为了兼容 1.x sdk 新增此方法，正常调用请使用上面的detail 方法
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/info", $body, $query, $extra);
    }

    /**
     * 根据保障ID获取保障描述
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/getGuaranteeExplainAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeExplain($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/explain", $body, $query, $extra);
    }

    /**
     * 获取某个用户下已激活的保障数量
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/getActivateGuaranteeNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeGetActivateNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/guaranteeGetActivateNum", $body, $query, $extra);
    }

    /**
     * 通过保障IDs获取对应的保障信息。不超过10条
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/getGuaranteeByIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeGetInfoByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/getGuaranteeByIds", $body, $query, $extra);
    }

    /**
     * 保障回调结果
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/guaranteeInsuranceCompanyNotifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeInsuranceCompanyNotify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/guaranteeICNotify", $body, $query, $extra);
    }

    /**
     * 保障列表
     * 为了兼容 1.x sdk 新增此方法，正常调用请使用上面的paging 方法
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/pagingListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/pagingList", $body, $query, $extra);
    }

    /**
     * 对接组投保回调
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/policyNotifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteePolicyNotify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/policyNotify", $body, $query, $extra);
    }

    /**
     * 保障理赔操作
     * 用于恢复数据使用，慎用！！！
     * 更新保障对应的权益数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/repairSettlementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeRepairSettlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/settlement/repair", $body, $query, $extra);
    }

    /**
     * 保障延期设置
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/updateAvailableToAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function guaranteeUpdateAvailableTo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/updateAvailableTo", $body, $query, $extra);
    }

    /**
     * 设置权益为失效状态
     * 入参只需要一个，使用优先级为 equityId equityNo outOrderNo
     * 只有未激活和已激活状态的权益才可以设为失效状态
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/InvalidAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function invalid($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/invalid", $body, $query, $extra);
    }

    /**
     * 设置保障为失效状态
     * 入参只需要一个，使用优先级为 guaranteeId equityId
     * 只有未激活和已激活状态的保障才可以设为失效状态
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/InvalidAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function invalidGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/invalid", $body, $query, $extra);
    }

    /**
     * 提额操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/liftingAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function liftingAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/liftingamount", $body, $query, $extra);
    }

    /**
     * 提额明细
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/liftingDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function liftingdetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/liftingdetail", $body, $query, $extra);
    }

    /**
     * 锁定试算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/lockAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lockEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/lock", $body, $query, $extra);
    }

    /**
     * 用户消费数据列表
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityConsumeController/memberEquityTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberEquityType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/consume/memberequitytype", $body, $query, $extra);
    }

    /**
     * 统计用户换新保障金额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/memberIdCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberIdCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/memberidcount", $body, $query, $extra);
    }

    /**
     * 发送钉钉消息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/MessageController/dingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function messageDing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/ding", $body, $query, $extra);
    }

    /**
     * 订单号查询保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/orderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderno($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/orderno", $body, $query, $extra);
    }

    /**
     * 创建权益消费限制
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityOrganController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/organ/create", $body, $query, $extra);
    }

    /**
     * 等待审核
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/pendingAuditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pendingAuditGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/pending/audit", $body, $query, $extra);
    }

    /**
     * 预核算接口
     * 传入订单信息，进行预核算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/checkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/check", $body, $query, $extra);
    }

    /**
     * 权益试算批量消费
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PreCheckBatchController/consumeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckBatchConsume($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheckBatch/consume", $body, $query, $extra);
    }

    /**
     * 试算权益批量锁定
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PreCheckBatchController/lockAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckBatchLockEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheckBatch/lock", $body, $query, $extra);
    }

    /**
     * 权益试算批量退款
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PreCheckBatchController/refundAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckBatchRefund($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheckBatch/refund", $body, $query, $extra);
    }

    /**
     * 试算权益批量解锁
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PreCheckBatchController/unlockAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckBatchUnlockEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheckBatch/unlock", $body, $query, $extra);
    }

    /**
     * 试算记录详情
     * 根据试算流水号获取 试算记录详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/detail", $body, $query, $extra);
    }

    /**
     * 根据获取多条记录
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/precheckMemberIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/prechecklist", $body, $query, $extra);
    }

    /**
     * 预核算 针对自付转权益的权益卡
     * 只提供给审核中心，其他人请勿使用
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/noCheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function precheckNoCheck($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/no/check", $body, $query, $extra);
    }

    /**
     * 项目下的用户拥有的权益和总金额计算
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/projectMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/projectmember", $body, $query, $extra);
    }

    /**
     * 确认阅读协议
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/readAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function read($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/read", $body, $query, $extra);
    }

    /**
     * 重新消费试算记录（订单与权益内部使用，请勿随便接入，如果需要先与宗明慧沟通）
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/PrecheckController/reConsumeByPrecheckAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reConsume($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/precheck/reConsumeByPrecheck", $body, $query, $extra);
    }

    /**
     * 权益回收操作(仅在增值服务回收权益的时候使用)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/recoverAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recoverEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/recover", $body, $query, $extra);
    }

    /**
     * 保障回收操作(仅在增值服务回收中使用)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/recoverAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recoverGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/recover", $body, $query, $extra);
    }

    /**
     * 退款接口
     * 根据订单号和订单信息退还指定金额or次数的权益给用户权益账户
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityRefundController/refundAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refund($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/refund/", $body, $query, $extra);
    }

    /**
     * 拒绝审核
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/refusedAuditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refusedAuditGuarantee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/refused/audit", $body, $query, $extra);
    }

    /**
     * 换新保障接口
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/renewAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renew($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/renew", $body, $query, $extra);
    }

    /**
     * 第一版新增审核规则
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/RenewRuleController/addRuleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewAddRuleV1($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/v1/add/rule", $body, $query, $extra);
    }

    /**
     * 获取规则
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/RenewRuleController/getRuleV1Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewGetRuleV1($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/v1/getRule", $body, $query, $extra);
    }

    /**
     * 更新规则
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/RenewRuleController/updateRuleV1Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewUpdateRuleV1($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renew/v1/update/rule", $body, $query, $extra);
    }

    /**
     * 根据权益id查询对应数据
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/getInfoByEquityIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serialGetByEquityId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/serial/getInfoByEquityId", $body, $query, $extra);
    }

    /**
     * 更新序列表信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/updateBillNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serialUpdateBillNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/serial/update/billNo", $body, $query, $extra);
    }

    /**
     * 根据项目及用户信息更新序列表信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/updateBillNoV2Action.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function serialUpdateBillNoV2($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/serial/update/billNo/V2", $body, $query, $extra);
    }

    /**
     * 赠送保障
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/giveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function setGuaranteeGive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/give", $body, $query, $extra);
    }

    /**
     * 保障理赔操作
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/settlementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function settlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/settlement", $body, $query, $extra);
    }

    /**
     * 新保障理赔接口(目前没人用了)
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/GuaranteeController/SettlementClaimsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function SettlementClaims($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/guarantee/settlementclaims", $body, $query, $extra);
    }

    /**
     * 添加寿险权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/sxAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function SxAddEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/sxadd", $body, $query, $extra);
    }

    /**
     * 获取总金额 和保障总额
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/getTotalFeeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function totalFee($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/totalfee", $body, $query, $extra);
    }

    /**
     * 解锁接口
     * 根据precheckNo解锁已经锁定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/unlockAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function unlockEquity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/unlock", $body, $query, $extra);
    }

    /**
     * 更新权益卡时间
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquityController/updateAvailableToAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateAvailableTo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/updateavailableto", $body, $query, $extra);
    }

    /**
     * 变更信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/module.equity/api/EquitySerialController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateEquitySerial($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/serial/update", $body, $query, $extra);
    }
}
