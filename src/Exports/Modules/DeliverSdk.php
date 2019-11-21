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
 * @date   2018-12-25
 * @time   Tue, 25 Dec 2018 15:48:21 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * DeliverSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DeliverSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'deliver.module';

    /**
     * 批量开启连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchAdd($body)
    {
        return $this->restful("POST", "/partner/switch/adds", $body);
    }

    /**
     * 批量开启门店
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/addStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchAddStores($body)
    {
        return $this->restful("POST", "/partner/switch/add/stores", $body);
    }

    /**
     * 批量关闭连锁（及门店）
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/delAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchDel($body)
    {
        return $this->restful("POST", "/partner/switch/del", $body);
    }

    /**
     * 批量关闭门店
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/delStoresAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchDelStores($body)
    {
        return $this->restful("POST", "/partner/switch/del/stores", $body);
    }

    /**
     * 查看信息
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/getInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchGetInfo($body)
    {
        return $this->restful("POST", "/partner/switch/get/info", $body);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchList($body)
    {
        return $this->restful("POST", "/partner/switch/list", $body);
    }

    /**
     * 连锁列表
     * @link https://uniondrug.coding.net/p/module.deliver/git/tree/development/app/docs/api/PartnerSwitchController/partnerListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function partnerSwitchPartnerList($body)
    {
        return $this->restful("POST", "/partner/switch/partner/list", $body);
    }
}
