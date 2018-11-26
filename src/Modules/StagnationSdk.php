<?php
/**
 * @author liyang
 * @date   2018-11-24
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 驻店宝相关
 * @package Uniondrug\ServiceSdk\Modules
 */
class StagnationSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 驻店宝服务名称
     * @var string
     */
    protected $serviceName = 'stagnation';

    /**
     * 新增权益码
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/CodeController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeAdd($body)
    {
        return $this->restful("POST", "/code/add", $body);
    }

    /**
     * 权益码信息详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/CodeController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeDetail($body)
    {
        return $this->restful("POST", "/code/detail", $body);
    }

    /**
     * 更新权益码数据
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/CodeController/updateAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function codeUpdate($body)
    {
        return $this->restful("POST", "/code/update", $body);
    }

    /**
     * 新增行驶证
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/LicenseController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function licenseAdd($body)
    {
        return $this->restful("POST", "/license/add", $body);
    }

    /**
     * 行驶证详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/LicenseController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function licenseDetail($body)
    {
        return $this->restful("POST", "/license/detail", $body);
    }

    /**
     * 新增驻店员数据统计
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/RecordController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordAdd($body)
    {
        return $this->restful("POST", "/record/add", $body);
    }

    /**
     * 权益查询接口
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/RecordController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordDetail($body)
    {
        return $this->restful("POST", "/record/detail", $body);
    }

    /**
     * 驻店员数据统计
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/RecordController/statisticsAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function recordStatistics($body)
    {
        return $this->restful("POST", "/record/statistics", $body);
    }

    /**
     * 新增驻店员
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/UserController/addAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userAdd($body)
    {
        return $this->restful("POST", "/user/add", $body);
    }

    /**
     * 驻店员信息详情
     * @link https://uniondrug.coding.net/p/module.stagnation/git/tree/development/app/docs/api/UserController/detailAction.md
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function userDetail($body)
    {
        return $this->restful("POST", "/user/detail", $body);
    }
}
