<?php

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java 营销券服务
 * Class JavaPushSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPromoteCenterSdk extends SdkBase
{
    protected $serviceName = 'java.promote.center';

    /**
     * 创建卡
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function sendCard($body)
    {
        return $this->restful(static::METHOD_POST, '/card/sendCard', $body);
    }

    /**
     * 卡列表
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function queryMyRecord($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryMyRecord', $body);
    }

    /**
     * 卡列表-分页
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function pageCardList($body)
    {
        return $this->restful(static::METHOD_POST, '/card/pageCardList', $body);
    }

    /**
     * 卡详情
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function queryCardDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardDetail', $body);
    }

    /**
     * 卡消费记录
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function queryCouponList($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/queryCouponList', $body);
    }

    /**
     * 优惠
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function marketCouponTrial($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/marketCouponTrial', $body);
    }

    /**
     * 卡订单号
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function queryCardOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardOrder', $body);
    }

    /**
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function querySchemeInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/querySchemeInfo', $body);
    }

    /**
     * @param array $body
     * @return ResponseInterface
     * @link
     */
    public function activityQueryMerchant($body)
    {
        return $this->restful(static::METHOD_POST, '/outActivity/queryMerchant', $body);
    }

    /**
     * 编辑营销卡券
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/dev_v3.2_%E5%AE%A2%E6%9C%8D%E4%B8%AD%E5%BF%83%E5%81%9C%E7%94%A8%E4%BC%98%E5%8C%96%EF%BC%8C4000%E4%B8%87%E9%A1%B9%E7%9B%AE/doc/%E8%90%A5%E9%94%80%E4%B8%AD%E5%BF%83v3.2%20%E5%AE%A2%E6%9C%8D%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3%EF%BC%88%E5%81%9C%E7%94%A8%E5%8D%A1%E6%9C%8D%E5%8A%A1).md
     * @param array $body
     * @return ResponseInterface
     */
    public function editCardInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/card/update', $body);
    }

    /**
     * 通过主订单号查询赠送权益--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryGiftDetail($body)
    {
        return $this->restful("POST", "/card/queryGiftDetail", $body);
    }

    /**
     * 抵扣券
     * @param $body
     * @return ResponseInterface
     */
    public function deductCouponTrial($body)
    {
        return $this->restful(static::METHOD_POST, '/deductCoupon/deductCouponTrial', $body);
    }

    /**
     * 运费券试算
     * @param $body
     * @return ResponseInterface
     */
    public function freightCouponTrial($body)
    {
        return $this->restful(static::METHOD_POST, '/deductCoupon/freightCouponTrial', $body);
    }

    /**
     * 抵扣券抵扣
     * @param $body
     * @return ResponseInterface
     */
    public function couponTrial($body)
    {
        return $this->restful(static::METHOD_POST, '/deductCoupon/couponTrial', $body);
    }

    /**
     * 抵扣券列表
     * @param $body
     * @return ResponseInterface
     */
    public function couponTrialForOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/deductCoupon/couponTrialForOrder', $body);
    }


    /**
     * 查询卡列表接口--微信
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryMyCard($body)
    {
        return $this->restful("POST", "/card/queryMyCard", $body);
    }

    /**
     * 超级会员日检查方案和时间--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v2.0_超级会员日/doc/营销中心v2.0超级会员日接口文档（消费服务).md
     * @return ResponseInterface
     */
    public function superDayCheckSchemeTime($body)
    {
        return $this->restful("POST", "/superDay/checkSchemeTime", $body);
    }

    /**
     * 超级会员日消费接口--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v2.0_超级会员日/doc/营销中心v2.0超级会员日接口文档（消费服务).md
     * @return ResponseInterface
     */
    public function superDaysuperConsume($body)
    {
        return $this->restful("POST", "/superDay/superConsume", $body);
    }

    /**
     * 消费券接口--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function consumeCoupon($body)
    {
        return $this->restful("POST", "/coupon/consumeCoupon", $body);
    }

    /**
     * 方案详情
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailInfo($body)
    {
        return $this->restful("POST", "/outScheme/detailInfo", $body);
    }

    /**
     * 查看是否能抵扣
     * @param $body
     * @return ResponseInterface
     */
    public function infoCheckGood($body)
    {
        return $this->restful("POST", "/info/checkGoods", $body);
    }

    /**
     * 查询project详情
     * @param $body
     * @return ResponseInterface
     */
    public function infoQueryProjectInfo($body)
    {
        return $this->restful("POST", "/info/queryProjectInfo", $body);
    }

    /**
     * @param $body
     * @return ResponseInterface
     */
    public function outActivity($body)
    {
        return $this->restful("POST", "/outActivity/outTrial", $body);
    }

    /**
     * @param $body
     * @return ResponseInterface
     */
    public function queryActivityByPartnerId($body)
    {
        return $this->restful("POST", "/outScheme/queryActivityByPartnerId", $body);
    }

    /**
     * @param $body
     * @return ResponseInterface
     */
    public function outActivityInfo($body)
    {
        return $this->restful("POST", "/outActivity/queryActivityInfo", $body);
    }

    /**
     * @param $body
     * @return ResponseInterface
     */
    public function queryMerchantScheme($body)
    {
        return $this->restful("POST", "/outScheme/queryMerchantScheme", $body);
    }

    /**
     * 获取连锁下生效中的优惠权益
     * @param $body
     * @return ResponseInterface
     */
    public function queryAllSchemeByMerchantIdList($body)
    {
        return $this->restful("POST", "/outScheme/queryAllSchemeByMerchantIdList", $body);
    }

    /**
     * 获取连锁下生效中的优惠券和运费券
     * @param $body
     * @return ResponseInterface
     */
    public function queryAllSchemeListByMerchantIdAndTypeList($body)
    {
        return $this->restful("POST", "/outScheme/queryAllSchemeListByMerchantIdAndTypeList", $body);
    }

    /**
     * 获取方案的成本方案
     * @param $body
     * @return ResponseInterface
     */
    public function queryCouponCostBySchemeId($body)
    {
        return $this->restful("POST", "/outScheme/queryCouponCostByschemeId", $body);
    }

    /**
     * 批量获取方案详情
     * @param $body
     * @return ResponseInterface
     */
    public function detailList($body)
    {
        return $this->restful("POST", "/outScheme/detailList", $body);
    }

    /**
     * 批量获取方案详情-新
     * @param $body
     * @return ResponseInterface
     */
    public function querySchemeList($body)
    {
        return $this->restful("POST", "/outScheme/querySchemeList", $body);
    }

    /**
     * 查询连锁状态
     * @param $body
     * @return ResponseInterface
     */
    public function queryMerchantStatus($body)
    {
        return $this->restful("POST", "/info/queryMerchantStatus", $body);
    }

    /**
     * 查询营销所有商家活动入口
     * @param $body
     * @return ResponseInterface
     */
    public function queryActivity($body)
    {
        return $this->restful("POST", "/trial/queryActivity", $body);
    }

    /**
     * 活动试算
     * @param $body
     * @return ResponseInterface
     */
    public function activityTrial($body)
    {
        return $this->restful("POST", "/trial/activityTrial", $body);
    }

    /**
     * 创建营销卡方案
     * @link  https://git.uniondrug.com/docs/1/docs-bizcenter/docs-promote/blob/master/营销服务接口文档/营销中心v4.10外部创建营销卡方案接口文档.md
     * @param array $body
     * @return ResponseInterface
     */
    public function createScheme($body)
    {
        return $this->restful(static::METHOD_POST, '/outScheme/createScheme', $body);
    }

    /**
     * 批量导入商品信息
     * @link  https://git.uniondrug.com/docs/1/docs-bizcenter/docs-promote/blob/master/营销服务接口文档/批量导入商品信息.md
     * @param array $body
     * @return ResponseInterface
     */
    public function batchAddGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/goods/batchAddGoods', $body);
    }

    /**
     * 根据卡号查询卡详情
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function queryCardDetailByCardId($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardDetailByCardId', $body);
    }

    /**
     * 多名单方案查询接口
     * @param $body
     * @return ResponseInterface
     */
    public function multiDiscountDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/multiDiscount/detail', $body);
    }

    /**
     * 方案内白名单商品查询接口
     * @param $body
     * @return ResponseInterface
     */
    public function schemeWhiteListGoods($body)
    {
        return $this->restful(static::METHOD_POST, '/goods/queryWhiteListGoodsPage', $body);
    }

    /**
     * 方案查询详情
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeInfo($body)
    {
        return $this->restful(static::METHOD_POST,'/outScheme/schemeInfo',$body);
    }

    /**
     * 获取可用列表
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function queryCardListByPartner($body)
    {
        return $this->restful(static::METHOD_POST,'/card/queryCardListByPartner',$body);
    }
}
