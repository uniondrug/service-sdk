<?php
/**
 * MbsSdk.php
 *
 */

namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class MbsSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'mbs';

    /**
     * 发送消息
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function publish($body)
    {
        return $this->restful(static::METHOD_POST, '/topic/publish', $body);
    }

    /**
     * 订阅消息
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function subscribe($body)
    {
        return $this->restful(static::METHOD_POST, '/task/add', $body);
    }

    /**
     * 退订消息
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function unsubscribe($body)
    {
        return $this->restful(static::METHOD_POST, '/task/del', $body);
    }
}
