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

    /**
     * 添加/编辑热搜词
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function saveHotSearchKeyword($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/hot/search/keyword/save", $body, $query, $extra);
    }

    /**
     * 删除热搜词
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function deleteHotSearchKeyword($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/hot/search/keyword/delete", $body, $query, $extra);
    }

    /**
     * 热搜词列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function hotSearchKeywordList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/hot/search/keyword/list", $body, $query, $extra);
    }

    /**
     * 配置化详情 [根据contractFulfillmentId]
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractGetById($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/contract/id", $body, $query, $extra);
    }

    /**
     * 配置化详情 [根据资源ID查]
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractGetBySchemeId($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/contract/schemeid", $body, $query, $extra);
    }

    /**
     * 项目配置连锁/门店范围筛选
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractFilterMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/contract/filter/merchant", $body, $query, $extra);
    }

    /**
     * 项目配置Banner
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractBannerList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/contract/banner/list", $body, $query, $extra);
    }

    /**
     * 配置化分页查询
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/paging", $body, $query, $extra);
    }

    /**
     * 添加/编辑项目资源
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function saveContractResource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/resource/save", $body, $query, $extra);
    }

    /**
     * 删除项目资源
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function deleteContractResource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/resource/delete", $body, $query, $extra);
    }

    /**
     * 项目资源列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractResourceList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/resource/list", $body, $query, $extra);
    }

    /**
     * 项目资源详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function contractResourceDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/resource/detail", $body, $query, $extra);
    }

    /**
     * 根据项目ids查询
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function getContractByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/contract/ids", $body, $query, $extra);
    }
}
