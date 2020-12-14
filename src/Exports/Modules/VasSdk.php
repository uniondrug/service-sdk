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
 * @date   2020-12-14
 * @time   Mon, 14 Dec 2020 17:15:18 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * VasSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class VasSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'vas.module';

    /**
     * 增值服务批量下单 /pack/batchOrder
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/batchOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function batchOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/batchOrder", $body, $query, $extra);
    }

    /**
     * 批量查询商品 /goods/getDetails
     * v2.3
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/getDetailsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGoodsDetails($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/getDetails", $body, $query, $extra);
    }

    /**
     * 商品类型 /goods/getType
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/getTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getGoodsType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/getType", $body, $query, $extra);
    }

    /**
     * 增值服务详情 /pack/getDetails
     * v2.3
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/getDetailsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPackDetails($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/getDetails", $body, $query, $extra);
    }

    /**
     * 增值服务列表 /pack/getList
     * v2.3
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/getListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPackList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/getList", $body, $query, $extra);
    }

    /**
     * 优惠权益百分比 /goods/baifen
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/goodsBaifenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function goodsBaifenList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/baifen", $body, $query, $extra);
    }

    /**
     * 增值服务下架 /pack/offOne
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/offOneAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function offPack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/offOne", $body, $query, $extra);
    }

    /**
     * 商品推送上架 /goods/postData
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/postDataAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function postGoodsData($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/postData", $body, $query, $extra);
    }

    /**
     * 查询商品列表 /goods/queryList
     * v2.3
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/queryListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function queryGoodsList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/goods/queryList", $body, $query, $extra);
    }

    /**
     * 增值服务组包 /pack/registerOne
     * v2.3
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/registerOneAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function registerPack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/registerOne", $body, $query, $extra);
    }

    /**
     * 增值服务下单 /pack/subOrder
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/subOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function subOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/subOrder", $body, $query, $extra);
    }

    /**
     * 更新增值服务 /pack/updateOne
     * v1.5
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/updateOneAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updatePack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pack/updateOne", $body, $query, $extra);
    }
}
