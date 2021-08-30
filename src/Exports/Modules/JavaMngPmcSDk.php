<?php
/**
 * Created by PhpStorm.
 * User: weng
 * Date: 8/30/21
 * Time: 5:05 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaMngPmcSDk  extends SdkBase
{
    protected $serviceName = 'mng-pmc';

    /**
     * 绑定接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function apply($body)
    {
        return $this->restful(static::METHOD_POST, '/payment/pos/apply', $body);
    }

    /**
     * 列表接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function query($body)
    {
        return $this->restful(static::METHOD_POST, '/payment/pos/paging', $body);
    }

    /**
     * 解绑接口
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function unbind($body)
    {
        return $this->restful(static::METHOD_POST, '/payment/pos/unbind', $body);
    }
}