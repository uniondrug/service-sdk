<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2020-01-07
 */

namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Java MBS
 * @package Uniondrug\ServiceSdk\Modules
 */
class JmbsSdk extends Mbs2Sdk
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.mbs';

    /**
     * 批量发消息
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function batch($body)
    {
        $body = $this->buildBody($body);
        return $this->restful("POST", "/topic/batch", $body);
    }

    /**
     * 发布单条消息
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function publish($body)
    {
        $body = $this->buildBody($body);
        return $this->restful("POST", "/topic/publish", $body);
    }

    /**
     * @param array|object $body
     * @return array
     */
    private function buildBody($body)
    {
        // 1. 原始入参
        if (!is_array($body)) {
            if (is_object($body)) {
                if (method_exists($body, 'toArray')) {
                    $body = $body->toArray();
                } else {
                    $body = json_decode(json_encode($body, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE), true);
                }
            } else {
                $body = [];
            }
        }
        // 2. 转成Java入参
        $uuid = md5(uniqid() . json_encode($body, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE));
        $body['tag'] = isset($body['topicTag']) && is_string($body['topicTag']) && $body['topicTag'] !== '' ? $body['topicTag'] : '';
        $body['topic'] = isset($body['topicName']) && is_string($body['topicName']) && $body['topicName'] !== '' ? $body['topicName'] : '';
        $body['reqNo'] = $uuid;
        $body['msgKey'] = isset($body['msgKey']) && is_string($body['msgKey']) && $body['msgKey'] !== '' ? $body['msgKey'] : '';
        return $body;
    }
}
