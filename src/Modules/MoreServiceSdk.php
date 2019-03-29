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
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/VirtualMobileController/bindAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function bind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/bind", $body);
    }
    /**
     * 解绑虚拟号码接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/VirtualMobileController/removeBindAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function removeBind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/removeBind", $body);
    }
    /**
     * 虚拟号码有效期延期接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/VirtualMobileController/extendBindAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function extendBind($body)
    {
        return $this->restful(static::METHOD_POST, "/virtualMobile/extendBind", $body);
    }
    /**
     * 电子发票开具接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/issueInvoiceAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function issueInvoice($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/issueInvoice", $body);
    }
    /**
     * 电子发票明细信息接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/getInvoiceInfoAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function getInvoiceInfo($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/getInvoiceInfo", $body);
    }
    /**
     * 邮箱发票推送接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/invoicePushAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function invoicePush($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/invoicePush", $body);
    }
    /**
     * 获取企业可用发票数量接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/invoiceCountAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function invoiceCount($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/invoiceCount", $body);
    }
    /**
     * 发票模版信息配置接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/templateSaveAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function templateSave($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/templateSave", $body);
    }
    /**
     * 发票商品编码信息配置接口
     * @link https://uniondrug.coding.net/p/module.more.service/git/blob/develop/docs/api/ElectronicInvoiceController/goodCodeSaveAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function goodCodeSave($body)
    {
        return $this->restful(static::METHOD_POST, "/electronicInvoice/goodCodeSave", $body);
    }

}
