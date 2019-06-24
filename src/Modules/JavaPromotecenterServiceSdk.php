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
}