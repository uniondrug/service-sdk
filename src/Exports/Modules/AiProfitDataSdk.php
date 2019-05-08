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
 * @date   2019-05-08
 * @time   Wed, 08 May 2019 16:27:12 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * AiProfitDataSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class AiProfitDataSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'aiProfit.data.module';

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addActivity($body)
    {
        return $this->restful("POST", "/activity/add", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/valueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addContact($body)
    {
        return $this->restful("POST", "/add", $body);
    }

    /**
     * 添加
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addUser($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantBestRank($body)
    {
        return $this->restful("POST", "/assistant/best", $body);
    }

    /**
     * top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantRankTopThree($body)
    {
        return $this->restful("POST", "/assistant/rank", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/AssistantController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function assistantTask($body)
    {
        return $this->restful("POST", "/assistant/task", $body);
    }

    /**
     * 下架
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableActivity($body)
    {
        return $this->restful("POST", "/activity/disable", $body);
    }

    /**
     * 禁用
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableUser($body)
    {
        return $this->restful("POST", "/user/disable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableActivity($body)
    {
        return $this->restful("POST", "/activity/enable", $body);
    }

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableUser($body)
    {
        return $this->restful("POST", "/user/enable", $body);
    }

    /**
     * 获取首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/getBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityBanner($body)
    {
        return $this->restful("POST", "/activity/banner/get", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityInfo($body)
    {
        return $this->restful("POST", "/activity/info", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getActivityPaging($body)
    {
        return $this->restful("POST", "/activity/paging", $body);
    }

    /**
     * 费率值
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/RatioController/valueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getRatioValue($body)
    {
        return $this->restful("POST", "/value", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserInfo($body)
    {
        return $this->restful("POST", "/user/info", $body);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UserController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getUserPaging($body)
    {
        return $this->restful("POST", "/user/paging", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerBestRank($body)
    {
        return $this->restful("POST", "/partner/best", $body);
    }

    /**
     * 本月数据
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/monthAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerMonth($body)
    {
        return $this->restful("POST", "/partner/month", $body);
    }

    /**
     * 门店top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerRankTopThree($body)
    {
        return $this->restful("POST", "/partner/rank", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/PartnerController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerTask($body)
    {
        return $this->restful("POST", "/partner/task", $body);
    }

    /**
     * 设置首页Banner
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ActivityController/setBannerAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function setActivityBanner($body)
    {
        return $this->restful("POST", "/activity/banner/set", $body);
    }

    /**
     * 最佳排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/bestAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeBestRank($body)
    {
        return $this->restful("POST", "/store/best", $body);
    }

    /**
     * 门店top3排行
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/rankAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeRankTopThree($body)
    {
        return $this->restful("POST", "/store/rank", $body);
    }

    /**
     * 手动同步
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/StoreController/taskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storeTask($body)
    {
        return $this->restful("POST", "/store/task", $body);
    }

    /**
     * 全网数据走势图
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/UnionController/trendAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unionTrend($body)
    {
        return $this->restful("POST", "/union/trend", $body);
    }
}
