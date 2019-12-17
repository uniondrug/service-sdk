<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:34 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaCommissionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaCommissionSdk extends SdkBase
{
    protected $serviceName = 'java.commission';

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
}
