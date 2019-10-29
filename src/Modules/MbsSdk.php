<?php
/**
 * MbsSdk.php
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class MbsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'mbs';

    /**
     * 发送批量消息
     * @param array $body
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function batch($body)
    {
        return $this->restful(static::METHOD_POST, '/topic/batch', $body);
    }

    /**
     * 发送消息
     * @param array $body
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function publish($body)
    {
        return $this->restful(static::METHOD_POST, '/topic/publish', $body);
    }

    /**
     * 订阅消息
     * @param array $body
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function subscribe($body)
    {
        return $this->restful(static::METHOD_POST, '/task/add', $body);
    }

    /**
     * 退订消息
     * @param array $body
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function unsubscribe($body)
    {
        return $this->restful(static::METHOD_POST, '/task/del', $body);
    }
}
