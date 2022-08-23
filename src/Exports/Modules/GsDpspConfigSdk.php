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
 * Class GsDpspConfigSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsDpspConfigSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-dpsp-config';


    /**
     * 添加分类
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/add", $body, $query, $extra);
    }

    /**
     * 编辑分类
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/edit", $body, $query, $extra);
    }

    /**
     * 删除分类
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/delete", $body, $query, $extra);
    }

    /**
     * 分类详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/detail", $body, $query, $extra);
    }

    /**
     * 分类列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/list", $body, $query, $extra);
    }

    /**
     * 拖动分类
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyMove($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/move", $body, $query, $extra);
    }

    /**
     * 排序
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifySort($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/sort", $body, $query, $extra);
    }

    /**
     * [分类商品] 添加
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyGoodsAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/goods/add", $body, $query, $extra);
    }

    /**
     * [分类商品] 删除(批量)
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyGoodsDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/goods/delete", $body, $query, $extra);
    }

    /**
     * [分类商品] 列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function classifyGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/classify/goods/list", $body, $query, $extra);
    }

}
