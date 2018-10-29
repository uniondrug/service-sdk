<?php
/**
 * @author liyang
 * @date   2018-10-29
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 财务结算日志管理模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class SettlementLogSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'settlementLog';
}
