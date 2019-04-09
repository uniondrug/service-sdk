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
 * @date   2019-04-09
 * @time   Tue, 09 Apr 2019 17:58:55 +0800
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
     * @link https://uniondrug.coding.net/p/module.data.aiProfit/git/blob/development/docs/api/ContactController/valueAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addContact($body)
    {
        return $this->restful("POST", "/add", $body);
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
