<?php
/**
 * Created by PhpStorm.
 * User: liyang
 * Date: 2019-05-09
 * Time: 11:08
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

class JavaPromotecenterServiceSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * java营销中心前台域名
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'javaPromotecenterService';

    /**
     * 创建卡--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function sendCard($body)
    {
        return $this->restful("POST", "/card/sendCard", $body);
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
     * 核销券接口--订单
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function payBackNotice($body)
    {
        return $this->restful("POST", "/coupon/payBackNotice", $body);
    }

    /**
     * 查询卡详情接口--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryCardDetail($body)
    {
        return $this->restful("POST", "/card/queryCardDetail", $body);
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
     * 查询卡消费记录（券列表）--微信
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/卡券接口文档.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryCouponList($body)
    {
        return $this->restful("POST", "/card/queryCouponList", $body);
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
     * @return ClientResponseInterface
     */
    public function superDayCheckSchemeTime($body)
    {
        return $this->restful("POST", "/superDay/checkSchemeTime", $body);
    }

    /**
     * 超级会员日消费接口--药店宝
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development_v2.0_超级会员日/doc/营销中心v2.0超级会员日接口文档（消费服务).md
     * @return ClientResponseInterface
     */
    public function superDaysuperConsume($body)
    {
        return $this->restful("POST", "/superDay/superConsume", $body);
    }

    /**
     * 查询卡列表接口--微信
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/d/java.middleend.promotecenter/git/tree/feature%2Ffeature_v4.10_%E9%BB%91%E5%90%8D%E5%8D%95%E6%A0%87%E7%AD%BE%E5%92%8C%E8%90%A5%E9%94%80%E8%B5%84%E6%BA%90%E5%8F%91%E6%94%BE%E8%AE%B0%E5%BD%95/doc/%E8%90%A5%E9%94%80%E6%9C%8D%E5%8A%A1%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3/%E8%90%A5%E9%94%80%E4%B8%AD%E5%BF%83v1.0%E5%8D%A1%E5%88%B8%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3.md
     * @return ClientResponseInterface
     */
    public function queryMyRecord($body)
    {
        return $this->restful("POST", "/card/queryMyRecord", $body);
    }
}