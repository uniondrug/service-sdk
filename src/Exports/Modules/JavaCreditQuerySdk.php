<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/12/22
 * Time: 1:19 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaCreditQuerySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaCreditQuerySdk extends SdkBase
{
    protected $serviceName = 'java.credit.query';

    /**
     * 获取退款列表
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWithdrawRecords($body)
    {
        return $this->restful("POST", "/creditIntegralQuery/getWithdrawRecords", $body);
    }

    /**
     * 获取统计金额
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getMemberAccount($body)
    {
        return $this->restful("POST", "/creditAccountQuery/memberAccount/query", $body);
    }
}