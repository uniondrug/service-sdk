<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 药品中心服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class TokenSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'token';

    /**
     * 生成令牌
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/token/issueToken.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function issueToken($body)
    {
        return $this->restful(static::METHOD_POST, "/token/issue", $body);
    }

    /**
     * 消费令牌
     * @link https://uniondrug.coding.net/p/docs/git/blob/development/sdks/service/token/consumeToken.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function consumeToken($body)
    {
        return $this->restful(static::METHOD_POST, "/token/consume", $body);
    }
}
