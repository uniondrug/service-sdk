<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-17
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * EventsTrait
 * @package Uniondrug\ServiceSdk\Bases
 */
trait EventsTrait
{
    /**
     * 允许缓存
     * @param int $seconds
     * @return $this
     */
    final public function withCache(int $seconds = 300)
    {
        return $this;
    }

    /**
     * 允许重试
     * @param int $limit
     * @return $this
     */
    final public function withRetry(int $limit = 3)
    {
        return $this;
    }
}
