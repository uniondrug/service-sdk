<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Unions`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2019-11-25
 * @time   Mon, 25 Nov 2019 11:39:18 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Unions;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * DistributionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DistributionSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'distribution.union';

    /**
     * 接收用户id、渠道id、父级id，创建关系链
     * @link https://uniondrug.coding.net/p/union.distribution/git/blob/development/docs/api/ChainController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainCreate($body)
    {
        return $this->restful("POST", "/chain/create", $body);
    }

    /**
     * 通过用户id及渠道id获得关系链信息
     * @link https://uniondrug.coding.net/p/union.distribution/git/blob/development/docs/api/ChainController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainInfo($body)
    {
        return $this->restful("POST", "/chain/info", $body);
    }

    /**
     * 通过用户id获得关系链信息
     * @link https://uniondrug.coding.net/p/union.distribution/git/blob/development/docs/api/ChainController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function chainList($body)
    {
        return $this->restful("POST", "/chain/list", $body);
    }

    /**
     * 通过渠道id获得渠道信息
     * @link https://uniondrug.coding.net/p/union.distribution/git/blob/development/docs/api/ChannelController/infoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function channelInfo($body)
    {
        return $this->restful("POST", "/channel/info", $body);
    }
}
