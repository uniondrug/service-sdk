<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-15
 */
namespace Uniondrug\ServiceSdk\Exports\Abstracts;

/**
 * Version: 2.x
 * @package Uniondrug\ServiceSdk\Exports\Abstracts
 */
abstract class Sdk extends \Uniondrug\ServiceSdk\Bases\Sdk
{
    /**
     * Sdk constructor.
     */
    public function __construct()
    {
        parent::__construct(parent::VERSION_2X);
    }
}
