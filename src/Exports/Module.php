<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-11-12
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Modules\AiProfitDataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiProfitStatisticsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiPushSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AssistantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuditSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuthoritySdk;
use Uniondrug\ServiceSdk\Exports\Modules\BillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ClaimSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CommonSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CompensateSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CustomerSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CustomerserviceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DeliverSdk;
use Uniondrug\ServiceSdk\Exports\Modules\EquitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\InsureRankSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InsureSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InvoiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCommonSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaExchangeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaFinSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterMngSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderCodeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderQuerySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteCenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCashierSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPushSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaUserScoreSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MarketingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;
use Uniondrug\ServiceSdk\Exports\Modules\MerchantApplySdk;
use Uniondrug\ServiceSdk\Exports\Modules\MerchantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MessageSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MsgSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OssSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PackageSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProductSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProjectSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionBiddingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionFinanceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionUserSdk;
use Uniondrug\ServiceSdk\Exports\Modules\RobotSdk;
use Uniondrug\ServiceSdk\Exports\Modules\RuleSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementlogSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementsheetSdk;
use Uniondrug\ServiceSdk\Exports\Modules\StagnationSdk;
use Uniondrug\ServiceSdk\Exports\Modules\TokenSdk;
use Uniondrug\ServiceSdk\Exports\Modules\UserSdk;
use Uniondrug\ServiceSdk\Exports\Modules\UdappSdk;
use Uniondrug\ServiceSdk\Exports\Modules\WxSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ActivitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\WeixinSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CarSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MapSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MoreActivitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JwtSdk;

/**
 * 基础模块SDK入口
 * @property Mbs2Sdk               $mbs2
 * @property BillSdk               $bill
 * @property TokenSdk              $token
 * @property SettlementlogSdk      $settlementLog
 * @property SettlementsheetSdk    $settlementSheet
 * @property SettlementSdk         $settlement
 * @property InvoiceSdk            $invoice
 * @property InsureSdk             $insure
 * @property ProjectSdk            $project
 * @property ProductSdk            $product
 * @property DeliverSdk            $deliver
 * @property MerchantSdk           $merchant
 * @property CustomerSdk           $customer
 * @property CommonSdk             $common
 * @property EquitySdk             $equity
 * @property MarketingSdk          $marketing
 * @property AiProfitStatisticsSdk $aiProfitStatistics
 * @property AiProfitDataSdk       $aiProfitData
 * @property UserSdk               $user
 * @property MessageSdk            $message
 * @property WxSdk                 $wx
 * @property StagnationSdk         $stagnation
 * @property JavaUserScoreSdk      $javaUserScore
 * @property OrderSdk              $order
 * @property DataSdk               $data
 * @property RuleSdk               $rule
 * @property MsgSdk                $msg
 * @property JavaGoodsCenterSdk    $javaGoodsCenter
 * @property CompensateSdk         $compensate
 * @property JavaOrderSdk          $javaOrder
 * @property JavaOrderCodeSdk      $javaOrderCode
 * @property JavaCashierSdk        $javaCashier
 * @property JavaPushSdk           $javaPush
 * @property JavaPromoteSdk        $javaPromote
 * @property AssistantSdk          $assistant
 * @property JavaPromoteCenterSdk  $javaPromoteCenter
 * @property MapSdk                $map
 * @property ActivitySdk           $activity
 * @property WeixinSdk             $weixin
 * @property CarSdk                $car
 * @property AuditSdk              $audit
 * @property OssSdk                $oss
 * @property JavaFinSdk            $javaFin
 * @property MoreActivitySdk       $moreActivity
 * @property CustomerserviceSdk    $customerservice
 * @property JavaOrderQuerySdk     $javaOrderQuery
 * @property JwtSdk                $jwt
 * @property JavaCommonSdk         $javaCommon
 * @property RobotSdk              $robot
 * @property PromotionUserSdk      $promotionUser
 * @property PromotionFinanceSdk   $promotionFinance
 * @property PromotionBiddingSdk   $promotionBiddingSdk
 * @property PackageSdk            $package
 * @property JavaExchangeSdk       $javaExchange
 * @property AuthoritySdk          $authority
 * @property JavaGoodsCenterMngSdk $javaGoodsCenterMng
 * @property AiPushSdk             $aiPush
 * @property InsureRankSdk         $insureRank
 * @property MerchantApplySdk      $merchantApply
 * @property UdappSdk              $udapp
 * @property ClaimSdk               $claim
 * @package Uniondrug\ServiceSdk\Exports
 */
class Module extends Abstracts\SdkEntrypoint
{
    protected $package = "Modules";
}
