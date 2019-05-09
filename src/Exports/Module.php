<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-11-12
 */
namespace Uniondrug\ServiceSdk\Exports;

use Uniondrug\ServiceSdk\Exports\Modules\AiProfitDataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\AiProfitStatisticsSdk;
use Uniondrug\ServiceSdk\Exports\Modules\BillSdk;
use Uniondrug\ServiceSdk\Exports\Modules\CustomerSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DataSdk;
use Uniondrug\ServiceSdk\Exports\Modules\DeliverSdk;
use Uniondrug\ServiceSdk\Exports\Modules\EquitySdk;
use Uniondrug\ServiceSdk\Exports\Modules\InsureSdk;
use Uniondrug\ServiceSdk\Exports\Modules\InvoiceSdk;
use Uniondrug\ServiceSdk\Exports\Modules\JavaUserScoreSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MarketingSdk;
use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;
use Uniondrug\ServiceSdk\Exports\Modules\MerchantSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MessageSdk;
use Uniondrug\ServiceSdk\Exports\Modules\MsgSdk;
use Uniondrug\ServiceSdk\Exports\Modules\OrderSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProductSdk;
use Uniondrug\ServiceSdk\Exports\Modules\ProjectSdk;
use Uniondrug\ServiceSdk\Exports\Modules\RuleSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementlogSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementSdk;
use Uniondrug\ServiceSdk\Exports\Modules\SettlementsheetSdk;
use Uniondrug\ServiceSdk\Exports\Modules\StagnationSdk;
use Uniondrug\ServiceSdk\Exports\Modules\TokenSdk;
use Uniondrug\ServiceSdk\Exports\Modules\UserSdk;
use Uniondrug\ServiceSdk\Exports\Modules\WxSdk;

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
 * @package Uniondrug\ServiceSdk\Exports
 */
class Module extends Abstracts\SdkEntrypoint
{
    protected $package = "Modules";
}
