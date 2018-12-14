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
 * @date   2018-12-14
 * @time   Fri, 14 Dec 2018 13:38:48 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * ProjectSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class ProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'project.module';

    /**
     * 接受审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/acceptAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function accept($body)
    {
        return $this->restful("POST", "/project/accept", $body);
    }

    /**
     * 激活用户
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/UserController/activeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function active($body)
    {
        return $this->restful("POST", "/user/active", $body);
    }

    /**
     * 添加1条待验证记录
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/verify/add", $body);
    }

    /**
     * 待验证数据批量添加
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/addsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function adds($body)
    {
        return $this->restful("POST", "/verify/adds", $body);
    }

    /**
     * 提交审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/approvalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approval($body)
    {
        return $this->restful("POST", "/project/approval", $body);
    }

    /**
     * 取消审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/cancelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancel($body)
    {
        return $this->restful("POST", "/project/cancel", $body);
    }

    /**
     * 验证权益领取
     * 验证用户输入的信息是否正确, 当正确时
     * 业务系统继续执行下层激活逻辑, 反之应中止执行
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/VerifyController/checkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function check($body)
    {
        return $this->restful("POST", "/verify/check", $body);
    }

    /**
     * 项目分析报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/cityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function city($body)
    {
        return $this->restful("POST", "/export/city", $body);
    }

    /**
     * 最近消费报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/daysAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function days($body)
    {
        return $this->restful("POST", "/export/days", $body);
    }

    /**
     * 删除分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function del($body)
    {
        return $this->restful("POST", "/group/del", $body);
    }

    /**
     * 删除项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delete($body)
    {
        return $this->restful("POST", "/project/delete", $body);
    }

    /**
     * 增量报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/deltaAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function delta($body)
    {
        return $this->restful("POST", "/export/delta", $body);
    }

    /**
     * 禁用/冻结
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disable($body)
    {
        return $this->restful("POST", "/group/disable", $body);
    }

    /**
     * 编辑分组
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function edit($body)
    {
        return $this->restful("POST", "/group/edit", $body);
    }

    /**
     * 启用/执行中
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enable($body)
    {
        return $this->restful("POST", "/group/enable", $body);
    }

    /**
     * 单个分组详情
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function info($body)
    {
        return $this->restful("POST", "/group/info", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/GroupController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function list($body)
    {
        return $this->restful("POST", "/group/list", $body);
    }

    /**
     * 金额报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/moneyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function money($body)
    {
        return $this->restful("POST", "/export/money", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function paging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 暂停项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/pauseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pause($body)
    {
        return $this->restful("POST", "/project/pause", $body);
    }

    /**
     * 项目分析报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/projectAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function project($body)
    {
        return $this->restful("POST", "/export/project", $body);
    }

    /**
     * 项目分析报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function rank($body)
    {
        return $this->restful("POST", "/export/rank", $body);
    }

    /**
     * 取消审批
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/refuseAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refuse($body)
    {
        return $this->restful("POST", "/project/refuse", $body);
    }

    /**
     * 日期范围报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/scopeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function scope($body)
    {
        return $this->restful("POST", "/export/scope", $body);
    }

    /**
     * 启动项目
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/startAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function start($body)
    {
        return $this->restful("POST", "/project/start", $body);
    }

    /**
     * 重建统计
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ProjectController/statisticAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function statistic($body)
    {
        return $this->restful("POST", "/project/statistic", $body);
    }

    /**
     * 项目趋势报表
     * @link https://uniondrug.coding.net/p/module.project/git/blob/development/docs/api/ExportController/tendencyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function tendency($body)
    {
        return $this->restful("POST", "/export/tendency", $body);
    }
}
