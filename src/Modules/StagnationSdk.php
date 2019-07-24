<?php
/**
 * @author liyang
 * @date   2018-11-24
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 驻店宝相关
 * @package Uniondrug\ServiceSdk\Modules
 */
class StagnationSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 驻店宝服务名称
     * @var string
     */
    protected $serviceName = 'stagnation';

    /**
     * 批量添加分组信息
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/batchCreateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function batchCreateGroupManage($body)
    {
        return $this->restful("POST", "/group/manage/batch/create", $body);
    }

    /**
     * 批量修改配置
     * 支持禁用/启用单个分组配置
     * 支持禁用/启用单个用户配置
     * 支持禁用/启用某分组下的多个用户配置
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/batchUpdateConfigAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function batchUpdateConfig($body)
    {
        return $this->restful("POST", "/config/batch/update/config", $body);
    }

    /**
     * 批量修改分组信息
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/batchUpdateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function batchUpdateGroupManage($body)
    {
        return $this->restful("POST", "/group/manage/batch/update", $body);
    }

    /**
     * 校验手机号唯一性
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/checkMobileAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function checkMobile($body)
    {
        return $this->restful("POST", "/user/check/mobile", $body);
    }

    /**
     * 新增权益码
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeAdd($body)
    {
        return $this->restful("POST", "/code/add", $body);
    }

    /**
     * 权益码信息详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeDetail($body)
    {
        return $this->restful("POST", "/code/detail", $body);
    }

    /**
     * 更新权益码数据
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeUpdate($body)
    {
        return $this->restful("POST", "/code/update", $body);
    }

    /**
     * 新增配置（支持批量）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configAdd($body)
    {
        return $this->restful("POST", "/config/add", $body);
    }

    /**
     * 权益码信息详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configDetail($body)
    {
        return $this->restful("POST", "/config/detail", $body);
    }

    /**
     * 编辑配置（支持批量）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configEdit($body)
    {
        return $this->restful("POST", "/config/edit", $body);
    }

    /**
     * 驻店员下的分组列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configList($body)
    {
        return $this->restful("POST", "/config/list", $body);
    }

    /**
     * 分组下的驻店员分页
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configPaging($body)
    {
        return $this->restful("POST", "/config/paging", $body);
    }

    /**
     * 获取驻店员发放记录导出数据
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/exportAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function exportUserRecord($body)
    {
        return $this->restful("POST", "/record/user/export", $body);
    }

    /**
     * 积分列表查询接口
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/getRecordPagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function getRecordPaging($body)
    {
        return $this->restful("POST", "/record/get/record/paging", $body);
    }

    /**
     * 获取驻店宝分组列表（支持给定参数查询）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/indexAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function groupManageIndex($body)
    {
        return $this->restful("POST", "/group/manage/index", $body);
    }

    /**
     * 获取权益分组占用情况
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/occupyAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function groupManageOccupy($body)
    {
        return $this->restful("POST", "/group/manage/occupy", $body);
    }

    /**
     * 获取分组详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/infoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function infoGroupManage($body)
    {
        return $this->restful("POST", "/group/manage/info", $body);
    }

    /**
     * 新增行驶证
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LicenseController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function licenseAdd($body)
    {
        return $this->restful("POST", "/license/add", $body);
    }

    /**
     * 行驶证详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LicenseController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function licenseDetail($body)
    {
        return $this->restful("POST", "/license/detail", $body);
    }

    /**
     * 新增日志
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/LogController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function logAdd($body)
    {
        return $this->restful("POST", "/log/add", $body);
    }

    /**
     * 新增驻店员数据统计
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordAdd($body)
    {
        return $this->restful("POST", "/record/add", $body);
    }

    /**
     * 权益查询接口
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordDetail($body)
    {
        return $this->restful("POST", "/record/detail", $body);
    }

    /**
     * 方法记录列表接口（支持按条件查询）
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/indexAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordIndex($body)
    {
        return $this->restful("POST", "/record/index", $body);
    }

    /**
     * 驻店员数据统计
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/RecordController/statisticsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordStatistics($body)
    {
        return $this->restful("POST", "/record/statistics", $body);
    }

    /**
     * 通过groupManageIds[]统计分组下用户数量
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/statisticsUserAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statisticsGroupManageUser($body)
    {
        return $this->restful("POST", "/group/manage/statistics/user", $body);
    }

    /**
     * 通过stagnationMemberId统计某一列发放记录数
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/statisticsUserAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function statisticsRecordColumn($body)
    {
        return $this->restful("POST", "/user/statistics/record/column", $body);
    }

    /**
     * 根据grouManageIds[]统计记录表某一列值
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/sumRecordColumnAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function sumRecordColumnByGroupManageIds($body)
    {
        return $this->restful("POST", "/group/manage/sum/record/column", $body);
    }

    /**
     * 新增驻店员
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userAdd($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 驻店员信息详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userDetail($body)
    {
        return $this->restful("POST", "/user/detail", $body);
    }

    /**
     * 编辑驻店员信息
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/editAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userEdit($body)
    {
        return $this->restful("POST", "/user/edit", $body);
    }

    /**
     * 单个驻店员信息
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 获取驻店员发放金额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/giveOutAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userGiveOutAmount($body)
    {
        return $this->restful("POST", "/user/give/out/amount", $body);
    }

    /**
     * 获取驻店员获取积分
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/givePointAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userGivePoint($body)
    {
        return $this->restful("POST", "/user/give/point", $body);
    }

    /**
     * 驻店员列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/listAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/user/list", $body);
    }

    /**
     * 驻店员分页
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 驻店员状态变更
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/UserController/statusAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userStatus($body)
    {
        return $this->restful("POST", "/user/status", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/GroupManageController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function groupManageAdd($body)
    {
        return $this->restful("POST", "/group/manage/add", $body);
    }

    /**
     * 微信配置类型(计次|计费)
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/typeAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configType($body)
    {
        return $this->restful("POST", "/config/type", $body);
    }

    /**
     * 微信配置列表
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/ConfigController/listByMemberAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function configListByMember($body)
    {
        return $this->restful("POST", "/config/list/member", $body);
    }

    /**
     * 可用分组发放总额
     * @link https://uniondrug.coding.net/p/module.stagnation/git/blob/development/docs/api/CodeController/giveOutAmountAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeGiveOutAmount($body)
    {
        return $this->restful("POST", "/code/give/out/amount", $body);
    }
}
