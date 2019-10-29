<?php
/**
 * Created by PhpStorm.
 * User: qishengqiang
 * Date: 2018/11/3
 * Time: 10:19 AM
 */

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 收银台服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class GuaranteeSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'equity';

    /**
     * 创建保障
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/user/member/login.password.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function create($body)
    {
        return $this->restful(static::METHOD_POST, "/guarantee/add", $body);
    }
}