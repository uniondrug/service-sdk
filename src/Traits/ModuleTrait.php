<?php
/**
 * do not edit this file
 * the file created when composer update executed
 * @author composer
 * @date   2019-10-30
 */
namespace Uniondrug\ServiceSdk\Traits;

use Uniondrug\ServiceSdk\Exports\Modules\JavaAdvfrontSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaEquityAnalysisSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaEquityReadingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaImSdk;

/**
 * Module
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ActivitySdk                $activity
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AiProfitDataSdk            $aiProfitData
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AiProfitStatisticsSdk      $aiProfitStatistics
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AiPushSdk                  $aiPush
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AssistantSdk               $assistant
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AuditSdk                   $audit
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AuthoritySdk               $authority
 * @property \Uniondrug\ServiceSdk\Exports\Modules\BillSdk                    $bill
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CarSdk                     $car
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CommonSdk                  $common
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CompensateSdk              $compensate
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CustomerSdk                $customer
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CustomerserviceSdk         $customerservice
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DataSdk                    $data
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DeliverSdk                 $deliver
 * @property \Uniondrug\ServiceSdk\Exports\Modules\NotifySdk                  $notify
 * @property \Uniondrug\ServiceSdk\Exports\Modules\EquitySdk                  $equity
 * @property \Uniondrug\ServiceSdk\Exports\Modules\InsureRankSdk              $insureRank
 * @property \Uniondrug\ServiceSdk\Exports\Modules\InsureSdk                  $insure
 * @property \Uniondrug\ServiceSdk\Exports\Modules\InvoiceSdk                 $invoice
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaCashierSdk             $javaCashier
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaAuditLogServiceSdk     $javaAuditLogServiceSdk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaCommonSdk              $javaCommon
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaDownloadSdk            $javaDownload
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaExchangeSdk            $javaExchange
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaFinSdk                 $javaFin
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterMngSdk      $javaGoodsCenterMng
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterSdk         $javaGoodsCenter
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterApiSdk      $javaGoodsCenterApi
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsReplaceServiceSdk $javaGoodsReplace
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaOrderCodeSdk           $javaOrderCode
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaOrderQuerySdk          $javaOrderQuery
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaOrderSdk               $javaOrder
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaMemberSdk              $javaMember
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaParserServiceSdk       $javaParserService
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteCenterSdk       $javaPromoteCenter
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPneumaticSdk           $javaPneumatic
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaMpacenterSdk           $javaMpacenter
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaIhcenterSdk            $javaIhcenter
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaCommissionSdk          $javaCommission
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaComsnSdk               $javaComsn
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaCoinSdk                $javaCoin
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaDistributionSdk        $javaDistribution
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteSdk             $javaPromote
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaErpPaySdk              $javaErpPay
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPushSdk                $javaPush
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaUserScoreSdk           $javaUserScore
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JsFinanceReplaceSdk        $jsFinanceReplace
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JmbsSdk                    $jmbs
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JwtSdk                     $jwt
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MapSdk                     $map
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MarketingSdk               $marketing
 * @property \Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk                    $mbs2
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MbsSdk                     $mbs
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MerchantApplySdk           $merchantApply
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MerchantSdk                $merchant
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MessageSdk                 $message
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MoreActivitySdk            $moreActivity
 * @property \Uniondrug\ServiceSdk\Exports\Modules\MsgSdk                     $msg
 * @property \Uniondrug\ServiceSdk\Exports\Modules\OrderSdk                   $order
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JmbslSdk                   $jmbsl
 * @property \Uniondrug\ServiceSdk\Exports\Modules\OssSdk                     $oss
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PackageSdk                 $package
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ProductSdk                 $product
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PartnersSdk                $partners
 * @property \Uniondrug\ServiceSdk\Exports\Modules\GoPartnersSdk              $goPartners
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ProjectSdk                 $project
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PromotionBiddingSdk        $promotionBidding
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PromotionFinanceSdk        $promotionFinance
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PromotionUserSdk           $promotionUser
 * @property \Uniondrug\ServiceSdk\Exports\Modules\RobotSdk                   $robot
 * @property \Uniondrug\ServiceSdk\Exports\Modules\HuoJuExpressSdk            $huoJuExpress
 * @property \Uniondrug\ServiceSdk\Exports\Modules\RuleSdk                    $rule
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaMerchantSdk            $javaMerchant
 * @property \Uniondrug\ServiceSdk\Exports\Modules\SettlementLogSdk           $settlementLog
 * @property \Uniondrug\ServiceSdk\Exports\Modules\SettlementSdk              $settlement
 * @property \Uniondrug\ServiceSdk\Exports\Modules\SettlementsheetSdk         $settlementsheet
 * @property \Uniondrug\ServiceSdk\Exports\Modules\StagnationSdk              $stagnation
 * @property \Uniondrug\ServiceSdk\Exports\Modules\TokenSdk                   $token
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PrivilegeSdk               $privilege
 * @property \Uniondrug\ServiceSdk\Exports\Modules\SchemeSdk                  $scheme
 * @property \Uniondrug\ServiceSdk\Exports\Modules\TakeSdk                    $take
 * @property \Uniondrug\ServiceSdk\Exports\Modules\UdappSdk                   $udapp
 * @property \Uniondrug\ServiceSdk\Exports\Modules\UserSdk                    $user
 * @property \Uniondrug\ServiceSdk\Exports\Modules\WeixinSdk                  $weixin
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DistsellSdk                $distsell
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ClerkSdk                   $clerk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\WxSdk                      $wx
 * @property \Uniondrug\ServiceSdk\Exports\Modules\CompanySdk                 $company
 * @property \Uniondrug\ServiceSdk\Exports\Modules\YdbResPmSdk                $ydbResPm
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaInvoiceSdk             $javaInvoice
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaHealthSdk              $javaHealth
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ScoreSdk                   $score
 * @property \Uniondrug\ServiceSdk\Exports\Modules\GuaranteeclaimSdk          $guaranteeclaimSdk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ExchangeSdk                $exchange
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DingtalkSdk                $dingtalk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaOrderErpSdk            $javaOrderErp
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ZhongShengSdk              $zhongSheng
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DrugstoreStatisticSdk      $drugstoreStatistic
 * @property \Uniondrug\ServiceSdk\Exports\Modules\DrugstoreActivitySdk       $drugstoreActivity
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AuthSdk                    $auth
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPmcCashierSdk          $javaPmcCashier
 * @property \Uniondrug\ServiceSdk\Exports\Modules\OutreachResourceApiSdk     $outreachResourceApiSdk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaEquityTrialSdk         $javaEquityTrial
 * @property \Uniondrug\ServiceSdk\Exports\Modules\VasSdk                     $vas
 * @property \Uniondrug\ServiceSdk\Exports\Modules\SmsSdk                     $sms
 * @property \Uniondrug\ServiceSdk\Exports\Modules\ApproMngSdk                $approval
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsDesktoptoolSdk           $psDesktoptool
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsFinanceDataSdk           $psFinanceData
 * @property \Uniondrug\ServiceSdk\Exports\Modules\AuditLogSdk                $auditLog
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaImpsSdk                $javaImps
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaCreditQuerySdk         $javaCreditQuery
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaImmidSdk               $javaImmid
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsDstoreCartSdk            $psDstoreCart
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsDstoreMemberSdk          $psDstoreMember
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsSdk                      $ps
 * @property \Uniondrug\ServiceSdk\Exports\Modules\OtcSdk                     $otc
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaPurchaseSdk            $javaPurchase
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JsArchivesSdk              $jsArchives
 * @property \Uniondrug\ServiceSdk\Exports\Modules\InspectionSdk              $inspection
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsFinBillSdk               $psFinBillSdk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JmInsureSdk                $jmInsure
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsFinStatementSdk          $psFinStatementSdk
 * @property \Uniondrug\ServiceSdk\Exports\Modules\PsDstoreCustomerSdk        $psDstoreCustomer
 * @property \Uniondrug\ServiceSdk\Exports\Modules\JavaImWsSdk                $javaImWs
 * @property JavaEquityReadingSdk                                             $javaEquityReadingSdk
 * @property JavaAdvfrontSdk                                                  $javaAdvfront
 * @property JavaImSdk                                                        $javaIm
 * @property JavaEquityAnalysisSdk                                            $javaEquityAnalysis
 * @property \Uniondrug\ServiceSdk\Exports\Modules\GsFinanceSdk               $gsFinanceSdk
 * @package Uniondrug\ServiceSdk\Traits
 */
trait ModuleTrait
{
}
