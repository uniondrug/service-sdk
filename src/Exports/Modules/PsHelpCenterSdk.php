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
 * @date   2020-09-10
 * @time   Thu, 10 Sep 2020 15:12:50 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsHelpCenterSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsHelpCenterSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-help-center';

    /**
     * 新增浏览次数
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/StatisticsArticleController/addViewCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addViewCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/statistics/article/addViewCount", $body, $query, $extra);
    }

    /**
     * 文章新增
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/ArticleController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function articleAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/article/add", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/ArticleController/changeStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function articleChangeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/article/changeStatus", $body, $query, $extra);
    }

    /**
     * 修改文章
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/ArticleController/modifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function articleModify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/article/modify", $body, $query, $extra);
    }

    /**
     * 列表分页
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/ArticleController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function articlePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/article/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPagePositionController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPagePositionAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPagePosition/add", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPagePositionController/modifyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPagePositionModify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPagePosition/modify", $body, $query, $extra);
    }

    /**
     * 分页查询
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPagePositionController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPagePositionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPagePosition/paging", $body, $query, $extra);
    }

    /**
     * 新增业务系统位置
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPositionController/addPositionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPositionAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPosition/add", $body, $query, $extra);
    }

    /**
     * 修改业务系统位置
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPositionController/modifyPositionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPositionModify($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPosition/modify", $body, $query, $extra);
    }

    /**
     * 分页查询
     * @link https://uniondrug.coding.net/p/ps-help-center/git/blob/development/ps-help-center/api/SysPositionController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sysPositionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sysPosition/paging", $body, $query, $extra);
    }
}
