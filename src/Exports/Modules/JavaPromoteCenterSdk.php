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
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendCard($body)
    {
        return $this->restful(static::METHOD_POST, '/card/sendCard', $body);
    }

    /**
     * 卡列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryMyRecord($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryMyRecord', $body);
    }

    /**
     * 卡列表-分页
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function pageCardList($body)
    {
        return $this->restful(static::METHOD_POST, '/card/pageCardList', $body);
    }

    /**
     * 卡详情
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardDetail($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardDetail', $body);
    }

    /**
     * 卡消费记录
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCouponList($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/queryCouponList', $body);
    }

    /**
     * 卡订单号
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function queryCardOrder($body)
    {
        return $this->restful(static::METHOD_POST, '/card/queryCardOrder', $body);
    }

    /**
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function querySchemeInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/coupon/querySchemeInfo', $body);
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
}
