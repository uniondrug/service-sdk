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
 * @date   2020-02-13
 * @time   Thu, 13 Feb 2020 14:31:58 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * DistsellSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DistsellSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'distsell.module';

    /**
     * 创建积分
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointCreate($body)
    {
        return $this->restful("POST", "/point/create", $body);
    }

    /**
     * 积分详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointDetail($body)
    {
        return $this->restful("POST", "/point/detail", $body);
    }

    /**
     * 积分列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointList($body)
    {
        return $this->restful("POST", "/point/list", $body);
    }

    /**
     * 连锁层面的创建
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/merchantCreateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointMerchantCreate($body)
    {
        return $this->restful("POST", "/point/merchantCreate", $body);
    }

    /**
     * 连锁层面的修改
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/merchantUpdateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointMerchantUpdate($body)
    {
        return $this->restful("POST", "/point/merchantUpdate", $body);
    }

    /**
     * 积分列表（分页）
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointPaging($body)
    {
        return $this->restful("POST", "/point/paging", $body);
    }

    /**
     * 修改积分
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/PointController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pointUpdate($body)
    {
        return $this->restful("POST", "/point/update", $body);
    }

    /**
     * 创建商品
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productCreate($body)
    {
        return $this->restful("POST", "/product/create", $body);
    }

    /**
     * 商品详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productDetail($body)
    {
        return $this->restful("POST", "/product/detail", $body);
    }

    /**
     * 编辑商品
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/editAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productEdit($body)
    {
        return $this->restful("POST", "/product/edit", $body);
    }

    /**
     * 连锁ids获取数据
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productList($body)
    {
        return $this->restful("POST", "/product/list", $body);
    }

    /**
     * 连锁纬度的添加
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/merchantCreateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productMerchantCreate($body)
    {
        return $this->restful("POST", "/product/merchantCreate", $body);
    }

    /**
     * 连锁纬度的详情
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/merchantDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productMerchantDetail($body)
    {
        return $this->restful("POST", "/product/merchantDetail", $body);
    }

    /**
     * 连锁纬度的编辑
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/merchantEditAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productMerchantEdit($body)
    {
        return $this->restful("POST", "/product/merchantEdit", $body);
    }

    /**
     * 商品列表
     * @link https://uniondrug.coding.net/p/module.udapp/git/blob/development/docs/api/ProductController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function productPaging($body)
    {
        return $this->restful("POST", "/product/paging", $body);
    }
}
