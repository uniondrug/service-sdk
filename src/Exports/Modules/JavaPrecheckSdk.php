<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2021/4/1
 * Time: 5:39 PM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java 风控
 * Class JavaPrecheckSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPrecheckSdk extends SdkBase
{
    protected $serviceName = 'java.precheck';

    /**
     * 试算
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function trial($body)
    {
        return $this->restful(static::METHOD_POST, '/tcenter/drugstore/trial', $body, null, [
            'timeout' => 2
        ]);
    }
}