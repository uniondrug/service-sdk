<?php
/**
 * @author zhaoyue
 * @date   2018-09-18
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 药联更多服务模块
 * @package Uniondrug\ServiceSdk\Modules
 */
class MoreServiceSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'moreService';

    /**
     * 绑定虚拟号码接口
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarInfo/SearchByLicenseNoController/ByLicenseNoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function bind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/bind", $body);
    }
    /**
     * 解绑虚拟号码接口
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarInfo/SearchByLicenseNoController/ByLicenseNoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function removeBind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/removeBind", $body);
    }
    /**
     * 虚拟号码有效期延期接口
     * @link https://uniondrug.coding.net/p/module.car/git/blob/release/docs/api/CarInfo/SearchByLicenseNoController/ByLicenseNoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function extendBind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/extendBind", $body);
    }

}
