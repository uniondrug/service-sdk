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

    /**
     * 创建群聊
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function createGroup($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/createGroup', $body);
    }

    /**
     * 修改群名
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function updateGroup($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/modifyGroup', $body);
    }

    /**
     * 获取群成员
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function queryGroupMember($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/queryGroupMember', $body);
    }

    /**
     * 群聊踢人
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function disMissGroup($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/disMissGroup', $body);
    }

    /**
     * 群聊加人
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function addGroupMember($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/addGroupMember', $body);
    }

    /**
     * 群聊踢人
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.imcenter/tree/development/uniondrug-im/doc/uniondrug-im-service
     * @param array $body
     * @return ResponseInterface
     */
    public function kickGroupMember($body)
    {
        return $this->restful(static::METHOD_POST, '/group/chat/kickGroupMember', $body);
    }
}