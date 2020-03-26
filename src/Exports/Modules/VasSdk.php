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
 * @date   2020-03-26
 * @time   Thu, 26 Mar 2020 15:41:39 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

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
     * 增值服务批量下单
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/batchOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batchOrder($body)
    {
        return $this->restful("POST", "/pack/batchOrder", $body);
    }

    /**
     * 商品类型
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/getTypeAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getGoodsType($body)
    {
        return $this->restful("POST", "/goods/getType", $body);
    }

    /**
     * 增值服务详情
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/getDetailsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPackDetails($body)
    {
        return $this->restful("POST", "/pack/getDetails", $body);
    }

    /**
     * 增值服务列表
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getPackList($body)
    {
        return $this->restful("POST", "/pack/getList", $body);
    }

    /**
     * 增值服务下架
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/offOneAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function offPack($body)
    {
        return $this->restful("POST", "/pack/offOne", $body);
    }

    /**
     * 商品推送上架
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/postDataAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function postGoodsData($body)
    {
        return $this->restful("POST", "/goods/postData", $body);
    }

    /**
     * 查询商品列表
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/GoodsController/queryListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryGoodsList($body)
    {
        return $this->restful("POST", "/goods/queryList", $body);
    }

    /**
     * 增值服务组包
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/registerOneAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function registerPack($body)
    {
        return $this->restful("POST", "/pack/registerOne", $body);
    }

    /**
     * 增值服务下单
     * @link https://uniondrug.coding.net/p/module.vas/git/blob/development/docs/api/PackController/subOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function subOrder($body)
    {
        return $this->restful("POST", "/pack/subOrder", $body);
    }
}
