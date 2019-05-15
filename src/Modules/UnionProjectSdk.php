<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/5/15
 * Time: 6:51 PM
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * 项目中台
 * @package Uniondrug\ServiceSdk\Modules
 */
class UnionProjectSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'unionProject';

    /**
     * 创建即买即用服务
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function createImmediately($body)
    {
        return $this->restful("POST", "/equity/create/immediately", $body);
    }
}