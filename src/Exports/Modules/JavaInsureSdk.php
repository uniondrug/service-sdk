<?php


namespace Uniondrug\ServiceSdk\Exports\Modules;


use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * java 平台的投保理赔系统
 * Class JavaInsureSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaInsureSdk extends SdkBase

{
    protected $serviceName = 'jm-insure';

    /**
     * 创建保障投保
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\ResponseInterface
     */
    public function guaranteeInsureSave($body)
    {
        return $this->restful("POST", "/guaranteeInsure/save", $body);
    }

    /**
     * 创建保障理赔
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\ResponseInterface
     */
    public function guaranteeClaimSave($body)
    {
        return $this->restful("POST", "/guaranteeClaim/save", $body);
    }

    /**
     * 创建保障理赔记录投保
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\ResponseInterface
     */
    public function guaranteeInsureClaimRecordSave($body)
    {
        return $this->restful("POST", "/guaranteeInsure/saveClaimRecord", $body);
    }

    /**
     * 根据保障理赔单号保存支付信息
     * @param $body
     * @return \Uniondrug\ServiceSdk\Bases\ResponseInterface
     */
    public function guaranteeClaimPaySaveByGuarantee($body)
    {
        return $this->restful("POST", "/guaranteeClaimPay/saveByGuarantee", $body);
    }




}