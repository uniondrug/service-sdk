<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/9/24
 * Time: 10:41 AM
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

/**
 * 公共服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class ErpPaySdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'erpPay';

    /**
     *
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/countAssistantByStoreIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function erpScanOut($body)
    {
        return $this->restful("POST", "/tap/water/transform", $body);
    }

    /**
     *
     * @link https://uniondrug.coding.net/p/module.assistant/git/tree/development/docs/api/AssistantController/countAssistantByStoreIdsAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pushTo($body)
    {
        return $this->restful("POST", "/tap/water/getOrderNo", $body);
    }
}


