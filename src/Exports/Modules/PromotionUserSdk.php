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
 * @date   2019-08-01
 * @time   Thu, 01 Aug 2019 12:26:01 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PromotionUserSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionUserSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'promotion.user.module';

    /**
     * 新增代理人
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/ProxyController/addProxyAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addProxy($body)
    {
        return $this->restful("POST", "/proxy/addProxy", $body);
    }

    /**
     * 审核工业用户
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/approveAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function approve($body)
    {
        return $this->restful("POST", "/merchant/approve", $body);
    }

    /**
     * 改变工业用户审核状态
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/changeMerchantStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeMerchantStatus($body)
    {
        return $this->restful("POST", "/merchant/changeMerchantStatus", $body);
    }

    /**
     * 改变工业用户使用状态
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/changeUseStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeMerchantUseStatus($body)
    {
        return $this->restful("POST", "/merchant/changeMerchantUseStatus", $body);
    }

    /**
     * 变更工业阶段
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/changeStageAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeStage($body)
    {
        return $this->restful("POST", "/merchant/changeStage", $body);
    }

    /**
     * 变更代理人状态
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/ProxyController/changeStatusAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function changeStatus($body)
    {
        return $this->restful("POST", "/proxy/changeStatus", $body);
    }

    /**
     * 工业用户资料编辑
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/EditInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editInfo($body)
    {
        return $this->restful("POST", "/merchant/editInfo", $body);
    }

    /**
     * 工业用户开票资料编辑
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/editMerchantInvoiceInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editMerchantInvoiceInfo($body)
    {
        return $this->restful("POST", "/merchant/editMerchantInvoiceInfo", $body);
    }

    /**
     * 编辑代理人
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/ProxyController/editInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editProxyInfo($body)
    {
        return $this->restful("POST", "/proxy/editProxyInfo", $body);
    }

    /**
     * 获取工业用户
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getInfo($body)
    {
        return $this->restful("POST", "/merchant/getInfo", $body);
    }

    /**
     * 获取工业开票信息
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getMerchantInvoiceInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantInvoiceInfo($body)
    {
        return $this->restful("POST", "/merchant/getMerchantInvoiceInfo", $body);
    }

    /**
     * 获取工业列表
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getMerchantListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantList($body)
    {
        return $this->restful("POST", "/merchant/getMerchantList", $body);
    }

    /**
     * 获取工业列表分页
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getMerchantPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantPaging($body)
    {
        return $this->restful("POST", "/merchant/getMerchantPaging", $body);
    }

    /**
     * 获取工业名称列表
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getNameListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getNameList($body)
    {
        return $this->restful("POST", "/merchant/getNameList", $body);
    }

    /**
     * 获取代理人信息
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/ProxyController/getProxyInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProxyInfo($body)
    {
        return $this->restful("POST", "/proxy/getProxyInfo", $body);
    }

    /**
     * 代理人列表
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/ProxyController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getProxyList($body)
    {
        return $this->restful("POST", "/proxy/getProxyList", $body);
    }

    /**
     * 获取允许推广的工业用户id
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/merchantAllowPromotionAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantAllowPromotion($body)
    {
        return $this->restful("POST", "/merchant/merchantAllowPromotion", $body);
    }
}
