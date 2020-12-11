<?php
/**
 * @author wuqiangqiang
 * @date   2020/12/10
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaImSdk extends SdkBase
{
    protected $serviceName = 'java.im.module';

    /**
     * 会话列表
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/docs-advisor/blob/master/IM-%E4%B8%AD%E5%8F%B0/%E5%88%97%E8%A1%A8%E6%9F%A5%E8%AF%A2.md
     * @param array $body
     * @return ResponseInterface
     */
    public function chartList($body)
    {
        return $this->restful(static::METHOD_POST, '/im/chat/currencyList', $body);
    }

    /**
     * 发送消息
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/docs-advisor/blob/master/IM-%E4%B8%AD%E5%8F%B0/%E5%88%97%E8%A1%A8%E6%9F%A5%E8%AF%A2.md
     * @param array $body
     * @return ResponseInterface
     */
    public function msgSend($body)
    {
        return $this->restful(static::METHOD_POST, '/im/msg/msgSend', $body);
    }
}