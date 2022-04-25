<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:13 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java 风控
 * Class JavaPneumaticSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPneumaticSdk extends SdkBase
{
    protected $serviceName = 'java.pneumatic';

    /**
     * 用户风控
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function userLimit($body)
    {
        return $this->restful(static::METHOD_POST, '/pneumatic/customer/limit', $body, null, [
            'timeout' => 1
        ]);
    }

    /**
     * 连锁风控
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function merchantLimit($body)
    {
        return $this->restful(static::METHOD_POST, '/pneumatic/merchant/limit', $body, null, [
            'timeout' => 1
        ]);
    }

    /**
     * 连锁风控
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function riskManage($body)
    {
        return $this->restful(static::METHOD_POST, '/risk/assessment/trade', $body, null, [
            'timeout' => 1
        ]);
    }

    /**
     * 权益风控
     * @param $body
     */
    public function riskAssessmentEquity($body){
        return $this->restful(static::METHOD_POST, '/risk/assessment/equity', $body, null, [
            'timeout' => 1
        ]);
    }

    /**
     * 新权益风控
     * @param $body
     */
    public function riskControlVerify($body){
        return $this->restful(static::METHOD_POST, '/riskControl/verify', $body, null, [
            'timeout' => 1
        ]);
    }
}
