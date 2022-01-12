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
     * 新增
     * @param $body
     * @return ResponseInterface
     */
    public function reportAdd($body)
    {
        return $this->restful("POST", "/report/add", $body);
    }

    /**
     * 编辑
     * @param $body
     * @return ResponseInterface
     */
    public function reportEdit($body)
    {
        return $this->restful("POST", "/report/edit", $body);
    }

    /**
     * 删除
     * @param $body
     * @return ResponseInterface
     */
    public function reportDel($body)
    {
        return $this->restful("POST", "/report/del", $body);
    }

    /**
     * 刷新
     * @param $body
     * @return ResponseInterface
     */
    public function reportFlush($body)
    {
        return $this->restful("POST", "/report/flush", $body);
    }

    /**
     * 启动
     * @param $body
     * @return ResponseInterface
     */
    public function reportStart($body)
    {
        return $this->restful("POST", "/report/start", $body);
    }

    /**
     * 停用
     * @param $body
     * @return ResponseInterface
     */
    public function reportStop($body)
    {
        return $this->restful("POST", "/report/stop", $body);
    }

    /**
     * 测试
     * @param $body
     * @return ResponseInterface
     */
    public function reportTest($body)
    {
        return $this->restful("POST", "/report/test", $body);
    }

    /**
     * 列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportList($body)
    {
        return $this->restful("GET", "/report/list", $body);
    }

    /**
     * 已删除列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListDeleted($body)
    {
        return $this->restful("GET", "/report/list/deleted", $body);
    }

    /**
     * 已启用列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListEnabled($body)
    {
        return $this->restful("GET", "/report/list/enabled", $body);
    }

    /**
     * 已停用列表
     * @param $body
     * @return ResponseInterface
     */
    public function reportListDisabled($body)
    {
        return $this->restful("GET", "/report/list/disabled", $body);
    }
}
