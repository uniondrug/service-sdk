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
 * @date   2022-01-12
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsReportSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsReportSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-report';

    /**
     * 数据报表-新增
     * @param $body
     * @return ResponseInterface
     */
    public function reportAdd($body)
    {
        return $this->restful("POST", "/report/add", $body);
    }

    /**
     * 数据报表-编辑
     * @param $body
     * @return ResponseInterface
     */
    public function reportEdit($body)
    {
        return $this->restful("POST", "/report/edit", $body);
    }

    /**
     * 数据报表-删除
     * @param $body
     * @return ResponseInterface
     */
    public function reportDel($body)
    {
        return $this->restful("POST", "/report/del", $body);
    }

    /**
     * 数据报表-详情
     * @param $body
     * @return ResponseInterface
     */
    public function reportDetail($body)
    {
        return $this->restful("POST", "/report/detail", $body);
    }

    /**
     * 数据报表-刷新
     * @param $body
     * @return ResponseInterface
     */
    public function reportFlush($body)
    {
        return $this->restful("POST", "/report/flush", $body);
    }

    /**
     * 数据报表-启动
     * @param $body
     * @return ResponseInterface
     */
    public function reportStart($body)
    {
        return $this->restful("POST", "/report/start", $body);
    }

    /**
     * 数据报表-停用
     * @param $body
     * @return ResponseInterface
     */
    public function reportStop($body)
    {
        return $this->restful("POST", "/report/stop", $body);
    }

    /**
     * 数据报表-测试
     * @param $body
     * @return ResponseInterface
     */
    public function reportTest($body)
    {
        return $this->restful("POST", "/report/test", $body);
    }

    /**
     * 数据报表-分页
     * @param $body
     * @return ResponseInterface
     */
    public function reportPaging($body)
    {
        return $this->restful("POST", "/report/paging", $body);
    }

    /**
     * 数据报表-列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportList($body)
    {
        return $this->restful("GET", "/report/list", $body);
    }

    /**
     * 数据报表-已删除列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListDeleted($body)
    {
        return $this->restful("GET", "/report/list/deleted", $body);
    }

    /**
     * 数据报表-已启用列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListEnabled($body)
    {
        return $this->restful("GET", "/report/list/enabled", $body);
    }

    /**
     * 数据报表-已停用列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListDisabled($body)
    {
        return $this->restful("GET", "/report/list/disabled", $body);
    }

    /**
     * 实例-列表
     * @param $body
     * @return ResponseInterface
     */
    public function rdsList($body)
    {
        return $this->restful("GET", "/rds/list", $body);
    }

    /**
     * 实例-详情
     * @param $body
     * @return ResponseInterface
     */
    public function rdsDetail($body)
    {
        return $this->restful("GET", "/rds/detail", $body);
    }

    /**
     * 实例-添加
     * @param $body
     * @return ResponseInterface
     */
    public function rdsAdd($body)
    {
        return $this->restful("POST", "/rds/add", $body);
    }

    /**
     * 实例-修改
     * @param $body
     * @return ResponseInterface
     */
    public function rdsEdit($body)
    {
        return $this->restful("POST", "/rds/edit", $body);
    }

    /**
     * 实例-删除
     * @param $body
     * @return ResponseInterface
     */
    public function rdsDel($body)
    {
        return $this->restful("POST", "/rds/del", $body);
    }

    /**
     * 数据表格-新增
     * @param $body
     * @return ResponseInterface
     */
    public function tableAdd($body)
    {
        return $this->restful("POST", "/table/add", $body);
    }

    /**
     * 数据表格-编辑
     * @param $body
     * @return ResponseInterface
     */
    public function tableEdit($body)
    {
        return $this->restful("POST", "/table/edit", $body);
    }

    /**
     * 数据表格-删除
     * @param $body
     * @return ResponseInterface
     */
    public function tableDel($body)
    {
        return $this->restful("POST", "/table/del", $body);
    }

    /**
     * 数据表格-详情
     * @param $body
     * @return ResponseInterface
     */
    public function tableDetail($body)
    {
        return $this->restful("POST", "/table/detail", $body);
    }

    /**
     * 数据表格-分页
     * @param $body
     * @return ResponseInterface
     */
    public function tablePaging($body)
    {
        return $this->restful("POST", "/table/paging", $body);
    }

    /**
     * 数据表格-列表
     * @param $body
     * @return ResponseInterface
     */
    public function tableList($body)
    {
        return $this->restful("GET", "/table/list", $body);
    }

    /**
     * 数据表格-启动
     * @param $body
     * @return ResponseInterface
     */
    public function tableStart($body)
    {
        return $this->restful("POST", "/table/start", $body);
    }

    /**
     * 数据表格-停用
     * @param $body
     * @return ResponseInterface
     */
    public function tableStop($body)
    {
        return $this->restful("POST", "/table/stop", $body);
    }

    /**
     * 执行历史-分页
     * @param $body
     * @return ResponseInterface
     */
    public function historyPaging($body)
    {
        return $this->restful("POST", "/history/paging", $body);
    }

    /**
     * 执行历史-详情
     * @param $body
     * @return ResponseInterface
     */
    public function historyDetail($body)
    {
        return $this->restful("GET", "/history/detail", $body);
    }

    /**
     * 钉钉机器人-详情
     * @param $body
     * @return ResponseInterface
     */
    public function dingtalkDetail($body)
    {
        return $this->restful("GET", "/dingtalk/detail", $body);
    }

    /**
     * 钉钉机器人-新增
     * @param $body
     * @return ResponseInterface
     */
    public function dingtalkAdd($body)
    {
        return $this->restful("POST", "/dingtalk/add", $body);
    }

    /**
     * 钉钉机器人-编辑
     * @param $body
     * @return ResponseInterface
     */
    public function dingtalkEdit($body)
    {
        return $this->restful("POST", "/dingtalk/edit", $body);
    }

    /**
     * 钉钉机器人-分页
     * @param $body
     * @return ResponseInterface
     */
    public function dingtalkPaging($body)
    {
        return $this->restful("POST", "/dingtalk/paging", $body);
    }
}
