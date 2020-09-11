<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:25 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaMpacenterSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaIhcenterSdk extends SdkBase
{
    protected $serviceName = 'java.ihcenter';

    /**
     * 获取处方
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getElecrxInfo($body)
    {
        return $this->restful(static::METHOD_POST, '/elecrx/getElecrxInfo', $body);
    }

    /**
     * 修改处方状态
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function changeState($body)
    {
        return $this->restful(static::METHOD_POST, '/elecrx/changeState', $body);
    }

    /**
     * 用流水号获取处方信息
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function getElecrxApplyByWaterNo($body)
    {
        return $this->restful(static::METHOD_POST, '/elecrx/getElecrxApplyByWaterNo', $body);
    }
}
