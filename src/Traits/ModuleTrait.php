<?php
/**
 * do not edit this file
 * the file created when composer update executed
 * @author composer
 * @date   2019-10-30
 */
namespace Uniondrug\ServiceSdk\Traits;

use Uniondrug\ServiceSdk\Exports\Modules\CompensateTmpSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ErpsvrBmpisJsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GmRxGatewaySdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspConfigSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspGlSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspGsCatalogSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspMiniProgramSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspOpenApiSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsDpspUsMemberSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinCompensateSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinJobSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsNrspUdchSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsRxManagementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GwMpTradeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaDataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaSsopSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PmOtoAppointSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsClaimManagementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ActivitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiProfitDataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiProfitStatisticsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiPushSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ApproMngSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AssistantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuditLogSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuditSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuthoritySdk;
use Uniondrug\ServiceSdk\Exports\Modules\AuthSdk;
use Uniondrug\ServiceSdk\Exports\Modules\BillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CarSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ClaimSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ClerkSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CommonSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CompanySdk;
use Uniondrug\ServiceSdk\Exports\Modules\CompensateSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CustomerSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CustomerserviceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DeliverSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DingtalkSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DistsellSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DrugstoreActivitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\DrugstoreStatisticSdk;
use Uniondrug\ServiceSdk\Exports\Modules\EquitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\ExchangeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ExpressCallbackSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GoPartnersSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinanceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinExportSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaNewEquitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsFinBillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsF2cPaySdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinStatementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsFinPreviewSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsReportSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GsMossWeChatSdk;
use Uniondrug\ServiceSdk\Exports\Modules\GuaranteeclaimSdk;
use Uniondrug\ServiceSdk\Exports\Modules\HuoJuExpressSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InspectionSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InsureRankSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InsureSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InvoiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaAdvfrontSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaAgreementMngSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaAgreementQrySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaAgreementSvrSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaAuditLogServiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCashierSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCoinSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCommissionSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCommonSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaComsnSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaCreditQuerySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaDistributionSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaDownloadSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaEquityAnalysisSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaEquityReadingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaEquityTrialSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaErpPaySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaExchangeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaFinSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterApiSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterMngSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsCenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaGoodsReplaceServiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaHealthSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaIhcenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaImmidSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaImpsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaImSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaImWsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaInvoiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaMemberSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaMerchantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaMpacenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderCodeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderErpSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderQuerySdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaOrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaParserServiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPmcCashierSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPneumaticSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPrecheckSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteCenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPromoteSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPurchaseSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaPushSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaUserScoreSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaUserServiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JmbslSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JmbsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JmInsureSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JmWebMossSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsArchivesSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsCleanCenterSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsFinanceEsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsFinanceReplaceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JsFinElectInvoiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JwtSdk;
use Uniondrug\ServiceSdk\Exports\Modules\LiveSrvJsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MapSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MarketingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;
use Uniondrug\ServiceSdk\Exports\Modules\MbsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MerchantApplySdk;
use Uniondrug\ServiceSdk\Exports\Modules\MerchantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MessageSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MoreActivitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\MsgSdk;
use Uniondrug\ServiceSdk\Exports\Modules\NotifySdk;
use Uniondrug\ServiceSdk\Exports\Modules\OrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OssSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OtcSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OutreachResourceApiSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PackageSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PartnersSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PrivilegeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProductSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProjectSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionBiddingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionFinanceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PromotionUserSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDesktoptoolSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstoreCartSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstoreCustomerSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstoreEsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstoreMemberSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstorePharmacistSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDstoreReserveSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsFinanceDataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsFinBillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsFinStatementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsGdspOrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsGdspSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsGuaranteeClaimSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsGuaranteeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsIspSuperviseSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\RobotSdk;
use Uniondrug\ServiceSdk\Exports\Modules\RuleSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SchemeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ScoreSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementLogSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementsheetSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ShopSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SmsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\StagnationSdk;
use Uniondrug\ServiceSdk\Exports\Modules\TaxSdk;
use Uniondrug\ServiceSdk\Exports\Modules\TakeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\TokenSdk;
use Uniondrug\ServiceSdk\Exports\Modules\UdappSdk;
use Uniondrug\ServiceSdk\Exports\Modules\UserSdk;
use Uniondrug\ServiceSdk\Exports\Modules\VasSdk;
use Uniondrug\ServiceSdk\Exports\Modules\WeixinSdk;
use Uniondrug\ServiceSdk\Exports\Modules\WxSdk;
use Uniondrug\ServiceSdk\Exports\Modules\YdbResPmSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ZhongShengSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsAssistantOrgSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsKingdeeSdk;
use Uniondrug\ServiceSdk\Exports\Modules\PsDpspTcOrderSdk;

/**
 * Module
 * @property ActivitySdk                $activity
 * @property ApproMngSdk                $approval
 * @property AiProfitDataSdk            $aiProfitData
 * @property AiProfitStatisticsSdk      $aiProfitStatistics
 * @property AiPushSdk                  $aiPush
 * @property AssistantSdk               $assistant
 * @property AuditSdk                   $audit
 * @property AuthoritySdk               $authority
 * @property AuditLogSdk                $auditLog
 * @property AuthSdk                    $auth
 * @property BillSdk                    $bill
 * @property CarSdk                     $car
 * @property CommonSdk                  $common
 * @property CompensateSdk              $compensate
 * @property CompensateTmpSdk           $compensateTmp
 * @property CustomerSdk                $customer
 * @property CustomerserviceSdk         $customerservice
 * @property ClaimSdk                   $claim
 * @property ClerkSdk                   $clerk
 * @property CompanySdk                 $company
 * @property DataSdk                    $data
 * @property DingtalkSdk                $dingtalk
 * @property DistsellSdk                $distsell
 * @property DrugstoreStatisticSdk      $drugstoreStatistic
 * @property DrugstoreActivitySdk       $drugstoreActivity
 * @property EquitySdk                  $equity
 * @property ExchangeSdk                $exchange
 * @property ExpressCallbackSdk         $expressCallbackSdk
 * @property GuaranteeclaimSdk          $guaranteeclaimSdk
 * @property DeliverSdk                 $deliver
 * @property GsMossWeChatSdk            $gsMossWeChat
 * @property GsFinanceSdk               $gsFinanceSdk
 * @property GsFinExportSdk             $gsFinExport
 * @property GsFinJobSdk                $gsFinJob
 * @property GsFinStatementSdk          $gsFinStatement
 * @property GsFinPreviewSdk            $gsFinPreview
 * @property GsReportSdk                $gsReport
 * @property GoPartnersSdk              $goPartners
 * @property InsureRankSdk              $insureRank
 * @property InsureSdk                  $insure
 * @property InvoiceSdk                 $invoice
 * @property LiveSrvJsSdk               $liveSrvJs
 * @property JavaAdvfrontSdk            $javaAdvfront
 * @property JavaAgreementMngSdk        $javaAgreementMngService
 * @property JavaAgreementQrySdk        $javaAgreementQryService
 * @property JavaAgreementSvrSdk        $javaAgreementSvrService
 * @property JavaAuditLogServiceSdk     $javaAuditLogServiceSdk
 * @property JavaCashierSdk             $javaCashier
 * @property JavaCoinSdk                $javaCoin
 * @property JavaCommissionSdk          $javaCommission
 * @property JavaCommonSdk              $javaCommon
 * @property JavaComsnSdk               $javaComsn
 * @property JavaCreditQuerySdk         $javaCreditQuery
 * @property JavaDistributionSdk        $javaDistribution
 * @property JavaDownloadSdk            $javaDownload
 * @property JavaEquityAnalysisSdk      $javaEquityAnalysis
 * @property JavaEquityReadingSdk       $javaEquityReadingSdk
 * @property JavaEquityTrialSdk         $javaEquityTrial
 * @property JavaErpPaySdk              $javaErpPay
 * @property JavaExchangeSdk            $javaExchange
 * @property JavaFinSdk                 $javaFin
 * @property JavaHealthSdk              $javaHealth
 * @property JavaGoodsCenterMngSdk      $javaGoodsCenterMng
 * @property JavaGoodsCenterSdk         $javaGoodsCenter
 * @property JavaGoodsCenterApiSdk      $javaGoodsCenterApi
 * @property JavaGoodsReplaceServiceSdk $javaGoodsReplace
 * @property JavaIhcenterSdk            $javaIhcenter
 * @property JavaImSdk                  $javaIm
 * @property JavaImpsSdk                $javaImps
 * @property JavaImmidSdk               $javaImmid
 * @property JavaImWsSdk                $javaImWs
 * @property JavaInvoiceSdk             $javaInvoice
 * @property JavaMemberSdk              $javaMember
 * @property JavaMerchantSdk            $javaMerchant
 * @property JavaMpacenterSdk           $javaMpacenter
 * @property JavaNewEquitySdk           $javaNewEquity
 * @property JavaOrderSdk               $javaOrder
 * @property JavaOrderCodeSdk           $javaOrderCode
 * @property JavaOrderErpSdk            $javaOrderErp
 * @property JavaOrderQuerySdk          $javaOrderQuery
 * @property JavaUserScoreSdk           $javaUserScore
 * @property JavaParserServiceSdk       $javaParserService
 * @property JavaPmcCashierSdk          $javaPmcCashier
 * @property JavaPneumaticSdk           $javaPneumatic
 * @property JavaPrecheckSdk            $javaPrecheck
 * @property JavaPromoteCenterSdk       $javaPromoteCenter
 * @property JavaPromoteSdk             $javaPromote
 * @property JavaPushSdk                $javaPush
 * @property JavaPurchaseSdk            $javaPurchase
 * @property JavaUserServiceSdk         $javaUserService
 * @property JavaSsopSdk                $javaSsop
 * @property JsArchivesSdk              $jsArchives
 * @property JsCleanCenterSdk           $jsCleanCenter
 * @property JsFinBillSdk               $jsFinBill
 * @property JsF2cPaySdk                $jsF2cPay
 * @property JsFinElectInvoiceSdk       $jsFinElectInvoice
 * @property JsFinanceEsSdk             $jsFinanceEs
 * @property JsFinanceReplaceSdk        $jsFinanceReplace
 * @property JmbsSdk                    $jmbs
 * @property JmbslSdk                   $jmbsl
 * @property JmInsureSdk                $jmInsure
 * @property JmWebMossSdk               $jmWebMoss
 * @property JwtSdk                     $jwt
 * @property MapSdk                     $map
 * @property MarketingSdk               $marketing
 * @property Mbs2Sdk                    $mbs2
 * @property MbsSdk                     $mbs
 * @property MerchantApplySdk           $merchantApply
 * @property MerchantSdk                $merchant
 * @property MessageSdk                 $message
 * @property MoreActivitySdk            $moreActivity
 * @property MsgSdk                     $msg
 * @property OrderSdk                   $order
 * @property OssSdk                     $oss
 * @property PackageSdk                 $package
 * @property ProductSdk                 $product
 * @property PartnersSdk                $partners
 * @property ProjectSdk                 $project
 * @property PromotionBiddingSdk        $promotionBidding
 * @property PromotionFinanceSdk        $promotionFinance
 * @property PromotionUserSdk           $promotionUser
 * @property RobotSdk                   $robot
 * @property HuoJuExpressSdk            $huoJuExpress
 * @property RuleSdk                    $rule
 * @property SettlementLogSdk           $settlementLog
 * @property JavaDataSdk                $javaData
 * @property SettlementSdk              $settlement
 * @property SettlementsheetSdk         $settlementsheet
 * @property StagnationSdk              $stagnation
 * @property TokenSdk                   $token
 * @property PrivilegeSdk               $privilege
 * @property SchemeSdk                  $scheme
 * @property TaxSdk                     $tax
 * @property TakeSdk                    $take
 * @property UdappSdk                   $udapp
 * @property UserSdk                    $user
 * @property WeixinSdk                  $weixin
 * @property WxSdk                      $wx
 * @property YdbResPmSdk                $ydbResPm
 * @property ScoreSdk                   $score
 * @property ZhongShengSdk              $zhongSheng
 * @property OutreachResourceApiSdk     $outreachResourceApiSdk
 * @property VasSdk                     $vas
 * @property SmsSdk                     $sms
 * @property PsDesktoptoolSdk           $psDesktoptool
 * @property PsFinanceDataSdk           $psFinanceData
 * @property PsGuaranteeSdk             $psGuarantee
 * @property PsGuaranteeClaimSdk        $psGuaranteeClaim
 * @property PsDstoreCartSdk            $psDstoreCart
 * @property PsDstoreMemberSdk          $psDstoreMember
 * @property PsDstoreEsSdk              $psDstoreEs
 * @property PsDstoreReserveSdk         $psDstoreReserve
 * @property PsSdk                      $ps
 * @property OtcSdk                     $otc
 * @property InspectionSdk              $inspection
 * @property PsFinBillSdk               $psFinBillSdk
 * @property PsFinStatementSdk          $psFinStatementSdk
 * @property PsDstoreCustomerSdk        $psDstoreCustomer
 * @property NotifySdk                  $notify
 * @property PsAssistantOrgSdk          $psAssistantOrgSdk
 * @property PsKingdeeSdk               $psKingdeeSdk
 * @property PsDstorePharmacistSdk      $psDstorePharmacist
 * @property PsDpspTcOrderSdk           $psDpspTcOrder
 * @property PsClaimManagementSdk       $psClaimManagement
 * @property ShopSdk                    $shop
 * @property GsRxManagementSdk          $gsRxManagement
 * @property GsDpspGsCatalogSdk         $gsDpspGsCatalog
 * @property GwMpTradeSdk               $gwMpTrade
 * @property GmRxGatewaySdk             $gmRxGateway
 * @property GsDpspOpenApiSdk           $gsDpspOpenApi
 * @property ErpsvrBmpisJsSdk           $erpsvrBmpisJsSdk
 * @property GsDpspOpenApiSdk           $gsDpspOpenApiSdk
 * @property ErpsvrBmpisJsSdk           $erpsvrBmpisJs
 * @property PmOtoAppointSdk            $pmOtoAppoint
 * @property GsDpspUsMemberSdk          $gsDpspUsMember
 * @property GsDpspMiniProgramSdk       $gsDpspMiniProgram
 * @property GsDpspGlSdk                $gsDpspGl
 * @property PsIspSuperviseSdk          $psIspSupervise
 * @property GsNrspUdchSdk              $gsNrspUdch
 * @property GsDpspConfigSdk            $gsDpspConfig
 * @property GsFinCompensateSdk         $gsFinCompensateSdk
 * @package Uniondrug\ServiceSdk\Traits
 */
trait ModuleTrait
{
}
