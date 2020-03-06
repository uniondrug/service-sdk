<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-06-23
 * Time: 11:00
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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

    /**
     * 卡券类编辑接口
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v3.1_%E5%90%8E%E5%8F%B0%E7%BC%96%E8%BE%91%EF%BC%8C%E4%BF%9D%E9%9A%9C%E8%B5%A0%E9%80%81/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E5%8D%A1%E5%88%B8%E6%96%B9%E6%A1%88%E6%8E%A5%E5%8F%A3v3.1%20%E7%BC%96%E8%BE%91%E5%8A%9F%E8%83%BD%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updatePromoteScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/edit", $body);
    }

    /**
     * 非卡券类方案编辑功能
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v3.1_%E5%90%8E%E5%8F%B0%E7%BC%96%E8%BE%91%EF%BC%8C%E4%BF%9D%E9%9A%9C%E8%B5%A0%E9%80%81/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E5%8D%A1%E5%88%B8%E6%96%B9%E6%A1%88%E6%8E%A5%E5%8F%A3v3.1%20%E7%BC%96%E8%BE%91%E5%8A%9F%E8%83%BD%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updatePromoteGiftCoupon($body)
    {
        return $this->restful("POST", "/promote/giftCoupon/edit", $body);
    }

    /**
     * 创建抵用券方案
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function addVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/add", $body);
    }

    /**
     * 抵扣券方案停用
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function stopVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/stop", $body);
    }

    /**
     * 抵扣券方案编辑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function editVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/edit", $body);
    }

    /**
     * 抵扣券方案列表查询
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function listVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/list/info", $body);
    }

    /**
     * 抵扣券详情查询
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function infoVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/voucherInfo", $body);
    }

    /**
     * 抵扣券成本方案创建
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function addBear($body)
    {
        return $this->restful("POST", "/promote/voucher/bear/add", $body);
    }

    /**
     * 抵扣券成本方案编辑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function editBear($body)
    {
        return $this->restful("POST", "/promote/voucher/bear/edit", $body);
    }

    /**
     * 抵扣券成本方案停用接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function stopBear($body)
    {
        return $this->restful("POST", "/promote/voucher/bear/stop", $body);
    }

    /**
     * 抵扣券成本方案查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function infoBear($body)
    {
        return $this->restful("POST", "/promote/voucher/bear/info", $body);
    }

    /**
     * 抵扣券成本方案列表查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function listBear($body)
    {
        return $this->restful("POST", "/promote/voucher/bear/list/info", $body);
    }

    /**
     * 抵扣券商品创建
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function addGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/add", $body);
    }

    /**
     * 抵扣券商品编辑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function editGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/edit", $body);
    }

    /**
     * 抵扣券商品停用接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function stopGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/stop", $body);
    }

    /**
     * 抵扣券商品查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function infoGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/info", $body);
    }

    /**
     * 抵扣券商品列表分页查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function listGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/list/info", $body);
    }

    /**
     * 抵扣券商品分配优惠金额接口
     * @link
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\ResponseInterface
     */
    public function assignDiscountGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/assign/discount", $body);
    }

    /**
     * 抵扣券商品列表查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function allListGoods($body)
    {
        return $this->restful("POST", "/promote/voucher/goods/allByScheme/info", $body);
    }

    /**
     * 抵扣券渠道连锁修改接口
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v4.0_抵用券兑换券/doc/促销中心卡券方案接口v4.0抵用券.md
     * @param array $body
     * @return ResponseInterface
     */
    public function modifyChannelVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/modifyChannel", $body);
    }

    /**
     * 抵扣券渠道连锁修改接口
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v4.0_抵用券兑换券/doc/促销中心卡券方案接口v4.0抵用券.md
     * @param array $body
     * @return ResponseInterface
     */
    public function modifyPartnerVoucher($body)
    {
        return $this->restful("POST", "/promote/voucher/modifyPartner", $body);
    }


    /*运费券接口*/
    /**
     * 创建运费券券方案
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function addFreight($body)
    {
        return $this->restful("POST", "/promote/freight/add", $body);
    }

    /**
     * 运费券券方案停用
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function stopFreight($body)
    {
        return $this->restful("POST", "/promote/freight/stop", $body);
    }

    /**
     * 运费券券方案编辑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function editFreight($body)
    {
        return $this->restful("POST", "/promote/freight/edit", $body);
    }

    /**
     * 运费券券方案列表查询
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function pagingFreight($body)
    {
        return $this->restful("POST", "/promote/freight/paging", $body);
    }

    /**
     * 运费券券详情查询
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function simpleInfoFreight($body)
    {
        return $this->restful("POST", "/promote/freight/simpleInfo", $body);
    }

    /**
     * 渠道连锁店修改
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function modifyChannelFreight($body)
    {
        return $this->restful("POST", "/promote/freight/modifyChannel", $body);
    }

    /**
     * 运费券成本方案创建
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function addFreightBear($body)
    {
        return $this->restful("POST", "/promote/freight/bear/add", $body);
    }

    /**
     * 运费券成本方案编辑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function editFreightBear($body)
    {
        return $this->restful("POST", "/promote/freight/bear/edit", $body);
    }

    /**
     * 运费券成本方案停用接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function stopFreightBear($body)
    {
        return $this->restful("POST", "/promote/freight/bear/stop", $body);
    }

    /**
     * 运费券成本方案查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function infoFreightBear($body)
    {
        return $this->restful("POST", "/promote/freight/bear/info", $body);
    }

    /**
     * 运费券成本方案列表查询接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function listFreightBear($body)
    {
        return $this->restful("POST", "/promote/freight/bear/list/info", $body);
    }

    /**
     * 项目方案创建
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/blob/v4.8_项目管理/doc/营销后台接口文档/营销中心卡券方案接口v4.8%20增加项目分组概念.md
     * @param array $body
     * @return ResponseInterface
     */
    public function addProject($body)
    {
        return $this->restful("POST", "/promote/scheme/project/add", $body);
    }

    /**
     * 项目方案详情
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/blob/v4.8_项目管理/doc/营销后台接口文档/营销中心卡券方案接口v4.8%20增加项目分组概念.md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailProject($body)
    {
        return $this->restful("POST", "/promote/scheme/project/info", $body);
    }

    /**
     * 项目方案列表
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/blob/v4.8_项目管理/doc/营销后台接口文档/营销中心卡券方案接口v4.8%20增加项目分组概念.md
     * @param array $body
     * @return ResponseInterface
     */
    public function pagingProject($body)
    {
        return $this->restful("POST", "/promote/scheme/project/paging", $body);
    }

    /**
     * 项目方案停用
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/blob/v4.8_项目管理/doc/营销后台接口文档/营销中心卡券方案接口v4.8%20增加项目分组概念.md
     * @param array $body
     * @return ResponseInterface
     */
    public function stopProject($body)
    {
        return $this->restful("POST", "/promote/scheme/project/stop", $body);
    }

    /**
     * 项目方案编辑
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/blob/v4.8_项目管理/doc/营销后台接口文档/营销中心卡券方案接口v4.8%20增加项目分组概念.md
     * @param array $body
     * @return ResponseInterface
     */
    public function editProject($body)
    {
        return $this->restful("POST", "/promote/scheme/project/edit", $body);
    }
}