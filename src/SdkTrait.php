<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-18
 */
namespace Uniondrug\ServiceSdk;

use Uniondrug\ServiceSdk\Exports\Modules\Mbs2Sdk;

/**
 * 兼容SDK1
 * @property Mbs2Sdk $mbs2
 * @package Uniondrug\ServiceSdk
 */
trait SdkTrait
{
    /**
     * @param string $name
     * @return bool
     */
    public function getCompatiable($name)
    {
        // 兼容模式
        if (in_array($name, $this->config->compatiables)) {
            $catalog = $this->config->compatiables[$name];
            return $this->{$catalog}->{$name};
        }
        return false;
    }
}
