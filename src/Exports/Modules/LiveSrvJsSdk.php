<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2021-01-27
 * @time   Wed, 27 Jan 2021 16:41:44 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class LiveSrvJsSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class LiveSrvJsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'live.srv.js';

    /**
     * 创建直播
     * @link https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%88%9B%E5%BB%BA%E8%81%8A%E5%A4%A9%E5%AE%A4.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/create", $body, $query, $extra);
    }

    /**
     * 创建新场次(同一直播间地址)
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%88%9B%E5%BB%BA%E6%96%B0%E5%9C%BA%E6%AC%A1(%E5%90%8C%E4%B8%80%E7%9B%B4%E6%92%AD%E9%97%B4%E5%9C%B0%E5%9D%80).md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveCreateBatchNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/createBatchNo", $body, $query, $extra);
    }

    /**
     * 创建直播的聊天室
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%88%9B%E5%BB%BA%E8%81%8A%E5%A4%A9%E5%AE%A4.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function chatRoomCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chat/room/create", $body, $query, $extra);
    }

    /**
     * 创建音视频房间
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%88%9B%E5%BB%BA%E9%9F%B3%E8%A7%86%E9%A2%91%E6%88%BF%E9%97%B4.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function videoCreateVideo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/video/createVideo", $body, $query, $extra);
    }

    /**
     * 加入关闭聊天室状态
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%8A%A0%E5%85%A5%E5%85%B3%E9%97%AD%E8%81%8A%E5%A4%A9%E5%AE%A4%E7%8A%B6%E6%80%81.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function chatRoomToggleCloseStat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chat/room/toggleCloseStat", $body, $query, $extra);
    }

    /**
     * 开始或结束直播
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E5%BC%80%E5%A7%8B%E6%88%96%E7%BB%93%E6%9D%9F%E7%9B%B4%E6%92%AD.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveModifyLiveBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/modifyLiveBatch", $body, $query, $extra);
    }

    /**
     * 查询聊天室
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E6%9F%A5%E8%AF%A2%E8%81%8A%E5%A4%A9%E5%AE%A4.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function chatRoomQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chat/room/query", $body, $query, $extra);
    }

    /**
     * 根据场次号查询
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E6%A0%B9%E6%8D%AE%E5%9C%BA%E6%AC%A1%E5%8F%B7%E6%9F%A5%E8%AF%A2.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveQueryByBatchNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/queryByBatchNo", $body, $query, $extra);
    }

    /**
     * 根据场次号查询
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E6%A0%B9%E6%8D%AE%E5%9C%BA%E6%AC%A1%E5%8F%B7%E6%9F%A5%E8%AF%A2.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveDisableLive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/disableLive", $body, $query, $extra);
    }

    /**
     * 直播间解禁
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E7%9B%B4%E6%92%AD%E9%97%B4%E8%A7%A3%E7%A6%81.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function liveEnableLive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/live/enableLive", $body, $query, $extra);
    }

    /**
     * 查询用户在线时长
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E6%9F%A5%E8%AF%A2%E7%9B%B4%E6%92%AD%E7%94%A8%E6%88%B7%E5%9C%A8%E7%BA%BF%E6%97%B6%E9%95%BF.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function chatRoomQueryUserOnlineTime($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/chat/room/queryUserOnlineTime", $body, $query, $extra);
    }

    /**
     * 获取安全认证Token
     * @link  https://git.uniondrug.com/code/1/bizcenter/biz-basic/java.middleend.live/blob/development/docs-api/uniondrug-live-service/%E8%8E%B7%E5%8F%96%E5%AE%89%E5%85%A8%E8%AE%A4%E8%AF%81.md
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return ResponseInterface
     */
    public function userGetToken($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/getToken", $body, $query, $extra);
    }
}
