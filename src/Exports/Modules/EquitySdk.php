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
 * @date   2019-02-12
 * @time   Tue, 12 Feb 2019 16:52:41 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * EquitySdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class EquitySdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'equity.module';

    /**
     * 添加权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addEquity($body)
    {
        return $this->restful("POST", "/equity/add", $body);
    }

    /**
     * 冻结所有权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableAllAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableAllEquity($body)
    {
        return $this->restful("POST", "/equity/disableAll", $body);
    }

    /**
     * 禁用接口
     * 禁用指定的权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/disableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function disableEquity($body)
    {
        return $this->restful("POST", "/equity/disable", $body);
    }

    /**
     * 启用权益
     * 启用指定权益
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/enableAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function enableEquity($body)
    {
        return $this->restful("POST", "/equity/enable", $body);
    }

    /**
     * 根据外部订单号获取权益详情
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getDetailByOutOrderNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityByOutOrderNo($body)
    {
        return $this->restful("POST", "/equity/outorderno", $body);
    }

    /**
     * 通过id 获取多条权益信息
     * @link https://uniondrug.coding.net/p/module.equity/git/tree/development/docs/api/EquityController/getDetailByIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getEquityListByIds($body)
    {
        return $this->restful("POST", "/equity/ids/lists", $body);
    }
}
