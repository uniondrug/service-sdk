<?php
/**
 * Created by PhpStorm.
 * User: tangly
 * Date: 2019-05-09
 * Time: 15:09
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * JavaGoodsCenterExternalSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaGoodsCenterExternalSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.goodscenter.external';

    /**
     * 查询药品信息健康度
     * @param array|object $body 入参类型
     * @return ResponseInterface
     */
    public function findHealth($body)
    {
        return $this->restful("POST", "/chain/findHealthToDstore", $body);
    }
}