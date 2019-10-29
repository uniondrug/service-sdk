<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/7/22
 * Time: 12:24 PM
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * JavaMerchantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaMerchantSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'javaMerchant';

    /**
     * 商户是否需要a类回推
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function merchantIsPush($body)
    {
        return $this->restful("POST", "/merchant/isPush", $body);
    }
}