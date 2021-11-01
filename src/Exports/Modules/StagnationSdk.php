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
 * @date   2021-03-15
 * @time   Mon, 15 Mar 2021 16:41:49 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * StagnationSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class StagnationSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'stagnation.module';

    /**
     * 批量添加
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/batchCreateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchCreateGroupManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/batch/create", $body, $query, $extra);
    }

    /**
     * 批量修改配置
     * 支持禁用/启用单个分组配置
     * 支持禁用/启用单个用户配置
     * 支持禁用/启用某分组下的多个用户配置
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/batchUpdateConfigAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchUpdateConfig($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/batch/update/config", $body, $query, $extra);
    }

    /**
     * 批量修改
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/batchUpdateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchUpdateGroupManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/batch/update", $body, $query, $extra);
    }

    /**
     * 校验手机号唯一性
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/checkMobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function checkMobile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/check/mobile", $body, $query, $extra);
    }

    /**
     * 新增权益码
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/add", $body, $query, $extra);
    }

    /**
     * 权益码详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/detail", $body, $query, $extra);
    }

    /**
     * 获取累计回收的金额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/getRecycleMoneyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeGetRecycleMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/get/recycle/money", $body, $query, $extra);
    }

    /**
     * 分组发放总额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/giveOutAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeGiveOutAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/give/out/amount", $body, $query, $extra);
    }

    /**
     * 更新权益码
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/update", $body, $query, $extra);
    }

    /**
     * 新增（支持批量）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/add", $body, $query, $extra);
    }

    /**
     * 权益新增发放人员配置(支持批量)
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/batchCreateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configBatchCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/batchCreate", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/detail", $body, $query, $extra);
    }

    /**
     * 编辑（支持批量）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/edit", $body, $query, $extra);
    }

    /**
     * 无分页列表(userId条件)
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/list", $body, $query, $extra);
    }

    /**
     * 无分页列表(memberId条件)
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/listByMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configListByMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/list/member", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/paging", $body, $query, $extra);
    }

    /**
     * 微信配置类型(计次|计费)
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/typeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function configType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/config/type", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportUserRecord($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/user/export", $body, $query, $extra);
    }

    /**
     * 智赔所需 根据CDKEY获取发放记录
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/cdKeyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRecordByCDKey($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/cdKey", $body, $query, $extra);
    }

    /**
     * 积分列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/getRecordPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRecordPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/get/record/paging", $body, $query, $extra);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupManageAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/add", $body, $query, $extra);
    }

    /**
     * 权益新增驻店宝分组
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/createGroupManageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupManageCreateGroupManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/createGroupManage", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/indexAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupManageIndex($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/index", $body, $query, $extra);
    }

    /**
     * 迁移
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/moveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupManageMove($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/move", $body, $query, $extra);
    }

    /**
     * 获取权益分组占用情况
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/occupyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function groupManageOccupy($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/occupy", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoGroupManage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/info", $body, $query, $extra);
    }

    /**
     * userIds[]是否关联groupManage
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/isReleatedGroupManageByUserIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isReleatedGroupManageByuserIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/isreleated/by/userIds", $body, $query, $extra);
    }

    /**
     * 新增行驶证
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LicenseController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function licenseAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/license/add", $body, $query, $extra);
    }

    /**
     * 行驶证详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LicenseController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function licenseDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/license/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LogController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/log/add", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function logPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/log/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RechargeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rechargeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recharge/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recordAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/add", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recordDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/detail", $body, $query, $extra);
    }

    /**
     * 发放列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/indexAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recordIndex($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/index", $body, $query, $extra);
    }

    /**
     * 数据统计
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/statisticsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recordStatistics($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/record/statistics", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecycleLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recycleLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recycle/log/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecycleLogController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recycleLogDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recycle/log/detail", $body, $query, $extra);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecycleLogController/exportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recycleLogExport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recycle/log/export", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecycleLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recycleLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recycle/log/paging", $body, $query, $extra);
    }

    /**
     * 通过groupManageIds[]统计分组下用户数量
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/statisticsUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statisticsGroupManageUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/statistics/user", $body, $query, $extra);
    }

    /**
     * 通过stagnationMemberId统计某一列发放记录数
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/statisticsUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statisticsRecordColumn($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/statistics/record/column", $body, $query, $extra);
    }

    /**
     * 根据grouManageIds[]统计记录表某一列值
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/sumRecordColumnAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sumRecordColumnByGroupManageIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/group/manage/sum/record/column", $body, $query, $extra);
    }

    /**
     * 未激活数据
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/TmpController/unactiveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tmpUnactive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tmp/unactive", $body, $query, $extra);
    }

    /**
     * 更新
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/TmpController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tmpUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tmp/update", $body, $query, $extra);
    }

    /**
     * 通过cdKey更新权益码
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/updateEquityNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateEquityNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/updateEquityNo", $body, $query, $extra);
    }

    /**
     * 更新回收金额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/updateRecycleMoneyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateRecycleMoney($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/code/update/recycle/money", $body, $query, $extra);
    }

    /**
     * 驻店宝员工详情分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/accountPageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userAccountPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/accountPage", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/add", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/detail", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/edit", $body, $query, $extra);
    }

    /**
     * 通过手机号查询驻店宝店员是否存在
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/getByMobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userGetByMobile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getByMobile", $body, $query, $extra);
    }

    /**
     * 获取驻店员发放金额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/giveOutAmountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userGiveOutAmount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/give/out/amount", $body, $query, $extra);
    }

    /**
     * 获取驻店员获取积分
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/givePointAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userGivePoint($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/give/point", $body, $query, $extra);
    }

    /**
     * 单个驻店员信息
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/info", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/list", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/log/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserLogController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userLogPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/log/page", $body, $query, $extra);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/paging", $body, $query, $extra);
    }

    /**
     * 状态变更
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/statusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/status", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareCodeController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCodeCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/code/create", $body, $query, $extra);
    }

    /**
     * 展示某个采购单下面的某张未领取的兑换码并修改兑换码状态
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareCodeController/displayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCodeDisplay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/code/display", $body, $query, $extra);
    }

    /**
     * 统计某个采购单下面的未领取的兑换码数量
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareCodeController/surplusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCodeSurplus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/code/surplus", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfarePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/page", $body, $query, $extra);
    }

    /**
     * 扫码记录
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareCodeController/scannedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCodeScanned($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/code/scanned", $body, $query, $extra);
    }

    /**
     * 查询某个兑换码的扫码情况
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/WelfareCodeController/scanStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function welfareCodeScanStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/welfare/code/scanStatus", $body, $query, $extra);
    }
}
