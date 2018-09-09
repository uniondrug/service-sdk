<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-09-07
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 向新版MBS发送消息
 * @package Uniondrug\ServiceSdk\Modules
 */
class Mbs2Sdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名
     * 生产: mbs2.module.uniondrug.cn
     * 验证: mbs2.module.turboradio.cn          - 预发布环境
     * 测试: mbs2.module.test.turboradio.cn
     * 开发: mbs2.module.dev.dovecot.cn
     * @var string
     */
    protected $serviceName = 'mbs2';

    /**
     * 发送批量消息
     * @param array $body
     * @param array $options
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function batch($body, array $options = [])
    {
        return $this->restful(static::METHOD_POST, '/topic/batch', $body, null, $options);
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
}
