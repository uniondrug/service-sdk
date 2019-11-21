<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-30
 */
namespace Uniondrug\ServiceSdk\Bases;

/**
 * WithTrait
 * @package Uniondrug\ServiceSdk\Bases
 */
trait WithTrait
{
    /**
     * @param int $seconds
     * @return $this
     */
    public function withCache(int $seconds = 138)
    {
        return $this;
    }

    /**
     * @param int $retry
     * @return $this
     */
    public function withRetry(int $retry = 3)
    {
        return $this;
    }
}
