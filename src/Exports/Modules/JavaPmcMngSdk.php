<?php
/**
 * Created by PhpStorm.
 * User: weng
 * Date: 9/6/21
 * Time: 4:39 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

/**
 * Class JavaPmcMngSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaPmcMngSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'uniondrug-pmc-mng';

    /**
     * 绑定接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function apply($body)
    {
        return $this->restful(static::METHOD_POST, '/mng-pmc/payment/pos/apply', $body);
    }

    /**
     * 列表接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function query($body)
    {
        return $this->restful(static::METHOD_POST, '/mng-pmc/payment/pos/paging', $body);
    }

    /**
     * 解绑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function unbind($body)
    {
        return $this->restful(static::METHOD_POST, '/mng-pmc/payment/pos/unbind', $body);
    }
}