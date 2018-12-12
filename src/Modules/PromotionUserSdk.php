<?php
/**
 * @author zhaoyue
 * @date   2018-09-13
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 智推用户服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class PromotionUserSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'promotionUser';

    /**
     * 查询代理人
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/getProxy.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProxy($body)
    {
        return $this->restful(static::METHOD_POST, "/login/getProxy", $body);
    }

    /**
     * 工业用户注册
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/signIn.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function signIn($body)
    {
        return $this->restful(static::METHOD_POST, "/login/signIn", $body);
    }

    /**
     * 工业用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/getMerchant.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getMerchant($body)
    {
        return $this->restful(static::METHOD_POST, "/login/getMerchant", $body);
    }

    /**
     * 完善资料
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/complete.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function complete($body)
    {
        return $this->restful(static::METHOD_POST, "/login/complete", $body);
    }

    /**
     * 登陆
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/login/login.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function login($body)
    {
        return $this->restful(static::METHOD_POST, "/login/login", $body);
    }

    /**
     * 工业审核
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/merchant/approve.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function merchantApprove($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/approve", $body);
    }

    /**
     * 变更工业阶段
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/merchant/changeStage.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function changeStage($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/changeStage", $body);
    }

    /**
     * 获取工业用户
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/merchant/getInfo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/getInfo", $body);
    }

    /**
     * 获取工业名称列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/merchant/getNameList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getNameList($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/getNameList", $body);
    }

    /**
     * userToken
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/login/userToken.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function userToken($body)
    {
        return $this->restful(static::METHOD_POST, "/login/userToken", $body);
    }

    /**
     * tokenLogin
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/login/tokenLogin.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function tokenLogin($body)
    {
        return $this->restful(static::METHOD_POST, "/login/tokenLogin", $body);
    }

    /**
     * 工业用户资料编辑
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/merchant/editInfo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/merchant/editInfo", $body);
    }

    /**
     * 获取代理人列表
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/proxy/getProxyList.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProxyList($body)
    {
        return $this->restful(static::METHOD_POST, "/proxy/getProxyList", $body);
    }

    /**
     * 新增代理人
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/proxy/addProxy.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function addProxy($body)
    {
        return $this->restful(static::METHOD_POST, "/proxy/addProxy", $body);
    }

    /**
     * 获取代理人信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/proxy/getProxyInfo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getProxyInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/proxy/getProxyInfo", $body);
    }

    /**
     * 编辑代理人信息
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/proxy/editProxyInfo.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function editProxyInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/proxy/editProxyInfo", $body);
    }

    /**
     * 修改代理人状态
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/promotion/user/proxy/changeStatus.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function changeStatus($body)
    {
        return $this->restful(static::METHOD_POST, "/proxy/changeStatus", $body);
    }

    /**
     * 获取工业列表
     * @link https://uniondrug.coding.net/p/module.promotion.user/git/blob/development/docs/api/MerchantController/getMerchantPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMerchantPaging($body)
    {
        return $this->restful("POST", "/merchant/getMerchantPaging", $body);
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


}