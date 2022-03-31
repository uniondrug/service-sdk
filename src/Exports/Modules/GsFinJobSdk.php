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
 * Class GsFinJobSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsFinJobSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'gs-fin-job';

    /**
     * 任务-分页
     * @param $body
     * @return ResponseInterface
     */
    public function jobPaging($body)
    {
        return $this->restful("POST", "/job/paging", $body);
    }

    /**
     * 任务-详情
     * @param $body
     * @return ResponseInterface
     */
    public function jobDetail($body)
    {
        return $this->restful("POST", "/job/detail", $body);
    }

    /**
     * 任务-添加
     * @param $body
     * @return ResponseInterface
     */
    public function jobAdd($body)
    {
        return $this->restful("POST", "/job/add", $body);
    }

    /**
     * 任务-编辑
     * @param $body
     * @return ResponseInterface
     */
    public function jobEdit($body)
    {
        return $this->restful("POST", "/job/edit", $body);
    }

    /**
     * 任务-删除
     * @param $body
     * @return ResponseInterface
     */
    public function jobDel($body)
    {
        return $this->restful("POST", "/job/del", $body);
    }

    /**
     * 任务-执行
     * @param $body
     * @return ResponseInterface
     */
    public function jobTest($body)
    {
        return $this->restful("POST", "/job/test", $body);
    }

    /**
     * 任务-启用
     * @param $body
     * @return ResponseInterface
     */
    public function jobStart($body)
    {
        return $this->restful("POST", "/job/start", $body);
    }

    /**
     * 任务-停用
     * @param $body
     * @return ResponseInterface
     */
    public function jobStop($body)
    {
        return $this->restful("POST", "/job/stop", $body);
    }

    /**
     * 历史日志-分页
     * @param $body
     * @return ResponseInterface
     */
    public function historyPaging($body)
    {
        return $this->restful("POST", "/history/paging", $body);
    }

    /**
     * 系统来源-分页
     * @param $body
     * @return ResponseInterface
     */
    public function sourcePaging($body)
    {
        return $this->restful("POST", "/source/paging", $body);
    }
}
