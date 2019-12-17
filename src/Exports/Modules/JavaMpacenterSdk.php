<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:19 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java 连锁活动
 * Class JavaMpacenterSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaMpacenterSdk extends SdkBase
{
    protected $serviceName = 'java.mpacenter';

    /**
     * 会员活动
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function goodsTrial($body)
    {
        return $this->restful(static::METHOD_POST, '/drugDiscount/goodsTrial', $body);
    }
}
