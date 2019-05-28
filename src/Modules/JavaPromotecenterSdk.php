<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-05-09
 * Time: 11:08
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

class JavaPromotecenterSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'javaMiddleendPromotecenter';

    /**
     * 创建方案(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/add", $body);
    }

    /**
     * 方案详情展示(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/info", $body);
    }

    /**
     * 方案列表展示(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pagingScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/paging", $body);
    }

    /**
     * 方案停用(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stopScheme($body)
    {
        return $this->restful("POST", "/promote/scheme/stop", $body);
    }

    /**
     * 合作渠道修改(活动方案)
     * @link https://uniondrug.coding.net/p/java.middleend.promotecenter/git/blob/development/doc/%E4%BF%83%E9%94%80%E4%B8%AD%E5%BF%83%E6%8E%A5%E5%8F%A3%E6%96%87%E6%A1%A3(%E6%96%B9%E6%A1%88%E7%9B%B8%E5%85%B3).md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function modifyPartner($body)
    {
        return $this->restful("POST", "/promote/scheme/modifyPartner", $body);
    }

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