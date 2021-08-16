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
 * @date   2021-07-26
 * @time   Mon, 26 Jul 2021 14:06:39 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * 
 * DrugstoreStatisticSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DrugstoreStatisticSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'drugstore.statistic.module';

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/AssistantStatisticController/personAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantPerson($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/person", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/AssistantStatisticController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantPrivilegeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/privilege/detail", $body, $query, $extra);
    }

    /**
     * 推药数据
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/AssistantStatisticController/recommendAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantRecommend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/recommend", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/AssistantStatisticController/storeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistant/store", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/MerchantStatisticController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/statistic/detail", $body, $query, $extra);
    }

    /**
     * 我的会员事件
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/TrackingController/myMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function trackingMyMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tracking/my/member", $body, $query, $extra);
    }

    /**
     * 页面分析
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/TrackingController/pageAnalysisAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function trackingPageAnalysis($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tracking/page/analysis", $body, $query, $extra);
    }

    /**
     * 交易时长
     * @link https://uniondrug.coding.net/p/module.drugstore.statistic/git/blob/development/docs/api/TrackingController/tradeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function trackingTrade($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tracking/trade", $body, $query, $extra);
    }
}
