<?php
/**
 * @author: xingshenqiang<xingshenqiang@uniondrug.cn>
 * @date  :   2019-05-13
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java push服务
 * Class JavaMerchantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaMerchantSdk extends SdkBase
{
    protected $serviceName = 'java.merchant';

    /**
     * 商户是否需要a类回推
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function merchantIsPush($body)
    {
        return $this->restful("POST", "/merchant/isPush", $body);
    }
}
