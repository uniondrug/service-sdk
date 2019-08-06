<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-06-23
 * Time: 11:00
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

class JavaPromoteSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.promote.module';

    /**
     * 创建方案(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/add", $body);
    }

    /**
     * 方案详情展示(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/info", $body);
    }

    /**
     * 方案列表展示(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/paging", $body);
    }

    /**
     * 方案列表详情接口
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/list/info", $body);
    }

    /**
     * 方案停用(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stopScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/stop", $body);
    }

    /**
     * 合作渠道修改(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function modifyPartner($body)
    {
        return $this->restful("POST", "/promote/scheme/modifyPartner", $body);
    }

    /**
     * 新增超级会员日方案
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addMemberDay($body)
    {
        return $this->restful("POST", "/promote/memberDay/add", $body);
    }

    /**
     * 超级会员日方案详情展示
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailMemberDay($body)
    {
        return $this->restful("POST", "/promote/memberDay/info", $body);
    }

    /**
     * 超级会员日方案分页列表展示
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingMemberDay($body)
    {
        return $this->restful("POST", "/promote/memberDay/paging", $body);
    }

    /**
     * 超级会员日方案停用
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stopMemberDay($body)
    {
        return $this->restful("POST", "/promote/memberDay/stop", $body);
    }

    /**
     * 修改超级会员日方案
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editMemberDay($body)
    {
        return $this->restful("POST", "/promote/memberDay/edit", $body);
    }

    /**
     * 新增标签
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagAdd($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/add', $body);
    }

    /**
     * 修改标签
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagEdit($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/modify', $body);
    }

    /**
     * 标签删除
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagRemove($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/remove', $body);
    }

    /**
     * 标签列表展示
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryTagList($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/tag/list', $body);
    }

    /**
     * 创建方案(其它优惠)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v3.0_其他优惠类设置/doc/促销中心卡券方案接口v3.0其他优惠类型文档(方案相关).md
     * @param array $body
     * @return ResponseInterface
     */
    public function addCoupon($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/giftCoupon/add', $body);
    }

    /**
     * 方案详情(其它优惠)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v3.0_其他优惠类设置/doc/促销中心卡券方案接口v3.0其他优惠类型文档(方案相关).md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailCoupon($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/giftCoupon/info', $body);
    }

    /**
     * 方案列表(其它优惠)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v3.0_其他优惠类设置/doc/促销中心卡券方案接口v3.0其他优惠类型文档(方案相关).md
     * @param array $body
     * @return ResponseInterface
     */
    public function pagingCoupon($body)
    {
        return $this->restful(static::METHOD_POST, '/promote/giftCoupon/paging', $body);
    }

    /**
     * 方案停用(其它优惠)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stopCoupon($body)
    {
        return $this->restful("POST", "/promote/giftCoupon/stop", $body);
    }

    /**
     * 合作渠道修改(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/促销中心接口文档(方案相关).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function modifyPartnerCoupon($body)
    {
        return $this->restful("POST", "/promote/giftCoupon/modifyChannel", $body);
    }
}