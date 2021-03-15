<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:40 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaEquityReadingSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaEquityReadingSdk extends SdkBase
{
    protected $serviceName = 'java.equity.reading';

    /**
     * 查询分组金额与余额
     * @param $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function queryGroupForStagnation($body, $query = null, $extra = null) {
        return $this->restful(static::METHOD_POST, '/query/group/stagnation', $body, $query = null, $extra = null);
    }
}
