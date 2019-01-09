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
 * 身份证服务
 * @package Uniondrug\ServiceSdk\Modules
 */
class IdCardSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'idCard';

    /**
     * 身份证ocr识别
     * @link https://uniondrug.coding.net/p/module.idcard/git/blob/release/docs/api/IdCardOcr/SearchByOcrController/byOcrAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function byOcr($body)
    {
        return $this->restful(static::METHOD_POST, "/search/byOcr", $body);
    }

    /**
     * 身份证查询
     * @link https://uniondrug.coding.net/p/module.idcard/git/blob/release/docs/api/IdCardInfo/SearchByIdCardController/byIdCardAction.md
     * @param array $body
     * @return ClientResponseInterface
     */
    public function byIdCard($body)
    {
        return $this->restful(static::METHOD_POST, "/search/byIdCard", $body);
    }
}
