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
 * @date   2020-05-07
 * @time   Thu, 07 May 2020 11:22:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * DrugstoreActivitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DrugstoreActivitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'drugstore.activity.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantCreate($body)
    {
        return $this->restful("POST", "/activityAssistant/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantDetail($body)
    {
        return $this->restful("POST", "/activityAssistant/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityAssistantController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityAssistantUpdate($body)
    {
        return $this->restful("POST", "/activityAssistant/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityEquityController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityEquityCreate($body)
    {
        return $this->restful("POST", "/activityEquity/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityEquityController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityEquityDetail($body)
    {
        return $this->restful("POST", "/activityEquity/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityEquityController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityEquityUpdate($body)
    {
        return $this->restful("POST", "/activityEquity/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeCreate($body)
    {
        return $this->restful("POST", "/activityGuarantee/create", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeDetail($body)
    {
        return $this->restful("POST", "/activityGuarantee/detail", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.activity.drugstore/git/blob/development/docs/api/ActivityGuaranteeController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityGuaranteeUpdate($body)
    {
        return $this->restful("POST", "/activityGuarantee/update", $body);
    }

    /**
     * 活动产品详情
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function activityProductDetail($body)
    {
        return $this->restful("POST", "/activityProduct/detail", $body);
    }
}
