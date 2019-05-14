<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/5/14
 * Time: 2:45 PM
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\Service\ClientResponseInterface;
use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;
use Uniondrug\Structs\StructInterface;

/**
 * Class JavaUserSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaUserSdk extends Sdk implements ServiceSdkInterface
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'javaUser';

    /**
     * 添加预发放积分
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function addPrePoint($body)
    {
        return $this->restful("POST", "/preAccountRecords/add", $body);
    }

    /**
     * 消费预发放
     * @link
     * @param array $body 入参类型
     * @return ClientResponseInterface
     */
    public function consumePrePoint($body)
    {
        return $this->restful("POST", "/preAccountRecords/edit", $body);
    }


    /**
     * 预发放列表
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function prePointPaging($body)
    {
        return $this->restful("POST", "/preAccountRecords/paging", $body);
    }

    /**
     * 积分记录列表
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function accountRecordPaging($body)
    {
        return $this->restful("POST", "/accountrecords/paging", $body);
    }

    /**
     * 添加积分
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function addPoint($body)
    {
        return $this->restful("POST", "/accountrecords/add", $body);
    }

    /**
     * 积分记录详情
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function accountRecordInfo($body)
    {
        return $this->restful("POST", "/accountrecords/info", $body);
    }

    /**
     * 预发放积分详情
     * @param $body
     * @return ClientResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function prePointDetail($body)
    {
        return $this->restful("POST", "/preAccountRecords/info", $body);
    }
}