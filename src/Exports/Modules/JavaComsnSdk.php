<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2020/7/16
 * Time: 3:17 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaComsnSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaComsnSdk extends SdkBase
{
    protected $serviceName = 'java.comsn';

    /**
     * 获取积分发放状态
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getCommissionStatus($body)
    {
        return $this->restful(static::METHOD_POST, '/comOrder/query/queryComCreditFailedReasonDoByOrderNo', $body);
    }

    /**
     * 创建积分方案
     * @param $body
     * @return ResponseInterface
     */
    public function createCommission($body)
    {
        return $this->restful(static::METHOD_POST, '/commission/create/productCommission', $body);
    }
}
