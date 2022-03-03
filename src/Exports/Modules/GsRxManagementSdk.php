<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Managements`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-01-20
 * @time   Thu, 20 Jan 2022 10:17:13 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsRsManagementSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsRxManagementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-rx-management';

    /**
     * 处方创建
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function rxCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rx/create", $body, $query, $extra);
    }

    /**
     * 处方更新
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function rxUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rx/update", $body, $query, $extra);
    }

    /**
     * 处方分页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function rxPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/rx/paging", $body, $query, $extra);
    }

    /**
     * 处方详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function rxDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/rx/detail", $body, $query, $extra);
    }

    /**
     * 规则新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/create", $body, $query, $extra);
    }

    /**
     * 规则详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/detail", $body, $query, $extra);
    }

    /**
     * 规则修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/update", $body, $query, $extra);
    }

    /**
     * 规则删除
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/delete", $body, $query, $extra);
    }

    /**
     * 规则翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function rulePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/paging", $body, $query, $extra);
    }

    /**
     * 规则条目列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleItemList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/item/list", $body, $query, $extra);
    }

    /**
     * 规则条件列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleItemConditionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/item/condition/list", $body, $query, $extra);
    }

    /**
     * 规则选项列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function ruleItemOptionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/rule/item/option/list", $body, $query, $extra);
    }
}
