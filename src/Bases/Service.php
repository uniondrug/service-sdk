<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-17
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * SDK基类
 * @package Uniondrug\ServiceSdk\Bases
 */
abstract class Service
{
    use EventsTrait;
    /**
     * @var ServiceSdk
     */
    protected $sdk;
    protected $logger;

    public function __construct(ServiceSdk $sdk)
    {
        $this->sdk = $sdk;
        $this->logger = $sdk->getContainer()->getLogger();
    }


}
