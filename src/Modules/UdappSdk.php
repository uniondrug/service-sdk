<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Service\ClientResponseInterface;

/**
 * 客户管理
 * @package Uniondrug\ServiceSdk\Modules
 */
class UdappSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'udapp';

    /**
     * 开启
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function merchantPushOpen($body)
    {
        return $this->restful(static::METHOD_POST, "/merchantPush/open", $body);
    }

    /**
     * 关闭
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function merchantPushClose($body)
    {
        return $this->restful(static::METHOD_POST, "/merchantPush/close", $body);
    }

    /**
     * 推送开关列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function merchantPushList($body)
    {
        return $this->restful(static::METHOD_POST, "/merchantPush/list", $body);
    }
}
