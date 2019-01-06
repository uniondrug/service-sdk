<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

use Phalcon\Logger\AdapterInterface;
use Uniondrug\ServiceSdk\Configs\Config;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
interface SdkInterface
{
    /**
     * @param AdapterInterface $logger
     * @param Config           $config
     * @return SdkInterface
     */
    public static function factory($logger, Config $config);
}
