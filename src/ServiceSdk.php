<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk;


/**
 * SDK分发调度
 * @property Modules\BackOrderSdk                $backOrder                                          订单sdk
 * @property Modules\TakeSdk                     $take                                               药联到家模块
 * @property Modules\WeixinSdk                   $weixin                                             微信模块
 * @property Modules\AbutmentSdk                 $abutment                                           对接模块
 * @property Modules\TokenSdk                    $token                                              token
 * @property Modules\CashierSdk                  $cashier                                            收银台服务
 * @property Modules\CommonSdk                   $common                                             公共服务
 * @property Modules\CustomerSdk                 $customer                                           客户服务
 * @property Modules\DataSdk                     $data                                               数据服务
 * @property Modules\EquitySdk                   $equity                                             权益服务
 * @property Modules\GoodCenterSdk               $goodCenter                                         商品中心
 * @property Modules\JavaUserSdk                 $javaUser                                           用户中心
 * @property Modules\JavaOrderSdk                $javaOrder                                          java订单中心
 * @property Modules\JavaCashierSdk              $javaCashier                                        java收银中心
 * @property Modules\MarketingSdk                $marketing                                          java订单中心
 * @property Modules\GoodsSdk                    $goods                                              商品服务
 * @property Modules\MbsSdk                      $mbs                                                消息总线服务
 * @property Modules\Mbs2Sdk                     $mbs2                                               新版MBS消息服务
 * @property Modules\UnionProjectSdk             $unionProject                                       中台创建权益
 * @property Modules\MerchantSdk                 $merchant                                           商户服务
 * @property Modules\ProductSdk                  $product                                            产品服务
 * @property Modules\ProjectSdk                  $project                                            项目服务
 * @property Modules\ReportSdk                   $report                                             报表服务
 * @property Modules\RuleSdk                     $rule                                               规则中心/规则引擎
 * @property Modules\UserSdk                     $user                                               用户服务
 * @property Modules\MessageSdk                  $message                                            消息中心
 * @property Modules\OrderSdk                    $order                                              订单中心
 * @property Modules\PaymentsSdk                 $payments                                           支付中心
 * @property Modules\PromotionUserSdk            $promotionUser                                      智推用户服务
 * @property Modules\PromotionBiddingSdk         $promotionBidding                                   智推竞价服务
 * @property Modules\PromotionFinanceSdk         $promotionFinance                                   智推财务服务
 * @property Modules\SmsSdk                      $sms                                                短信服务
 * @property Modules\DrugsSdk                    $drugs                                              药品中心
 * @property Modules\MapSdk                      $map                                                高德云图服务
 * @property Modules\FinanceSdk                  $finance                                            结算中心服务
 * @property Modules\SettlementSdk               $settlement                                         财务结算计算模块
 * @property Modules\SettlementSheetSdk          $settlementSheet                                    财务结算单管理模块
 * @property Modules\SettlementLogSdk            $settlementLog                                      财务结算日志管理模块
 * @property Modules\InsureSdk                   $insure                                             投保服务
 * @property Modules\GuaranteeSdk                $guarantee                                          保障服务
 * @property Modules\BillSdk                     $bill                                               开票服务
 * @property Modules\InvoiceSdk                  $invoice                                            发票服务
 * @property Modules\GoodsReplaceSdk             $goodsReplace                                       财务中心.结算单商品替换服务
 * @property Modules\StagnationSdk               $stagnation                                         驻店宝服务
 * @property Modules\PartnersSdk                 $partners                                           连锁服务
 * @property Modules\ExpressSdk                  $express                                            物流服务
 * @property Modules\SchemeSdk                   $scheme                                             增值服务方案服务
 * @property Modules\RefundSdk                   $refund                                             退单服务
 * @property Modules\DeliverSdk                  $deliver                                            药联到家配置服务
 * @property Modules\CarSdk                      $car                                                车辆服务
 * @property Modules\IdCardSdk                   $idCard                                             身份证服务
 * @property Modules\WxMessageSdk                $wxMessage                                          微信消息服务
 * @property Modules\MessageTaskSdk              $messageTask                                        消息任务服务
 * @property Modules\TradeinSdk                  $tradein                                            连锁换新日配置服务
 * @property Modules\MoreServiceSdk              $moreService                                        药联更多服务模块
 * @property Modules\ActivitySdk                 $activity                                           活动模块
 * @property Modules\JwtSdk                      $jwt                                                鉴权模块
 * @property Modules\PrivilegeSdk                $privilege                                          特权活动模块
 * @property Modules\MsgSdk                      $msg                                                新版消息中心
 * @property Modules\JavaPromotecenterSdk        $javaPromotecenter                                  营销方案
 * @property Modules\JavaPushSdk                 $javaPush                                           java push服务
 * @property Modules\AuditSdk                    $audit                                              审核服务
 * @property Modules\JavaPromotecenterServiceSdk $javaPromotecenterService                           java营销中心前台
 * @property Modules\WxapiSdk                    $wxapi                                              wxapi接口服务
 * @property Modules\CompensateSdk               $compensate                                         智赔接口服务
 * @property Modules\AssistantSdk                $assistant                                          助手SDK
 * @property Modules\NotifySdk                   $notify                                             消息推送SDK
 * @package Uniondrug\ServiceSdk
 */
class ServiceSdk
{
    /**
     * SDK模块列表
     * @var array
     */
    private static $_modules = [];
    /**
     * SDK命名规则
     * @var string
     */
    private static $_modulesExtensionName = 'Sdk';

    /**
     * @param string $name 服务名
     * @return ServiceSdkInterface
     * @throws Exception
     */
    public function __get($name)
    {
        $key = strtolower($name);
        // 1. 从上个实例中读取
        if (isset(self::$_modules[$key])) {
            return self::$_modules[$key];
        }
        // 2. 检查定义
        $class = __NAMESPACE__.'\\Modules\\'.ucfirst($name).self::$_modulesExtensionName;
        try {
            $instance = new $class();
            self::$_modules[$key] = $instance;
            return self::$_modules[$key];
        } catch (\Throwable $e) {
        }
        // 3. 未定义的SDK服务
        throw new Exception("SDK包中未找到'{$name}'定义");
    }
}
