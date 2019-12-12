<?php
/**
 * @Author QinGuoFeng
 * @Date   2019-12-09
 * @Time   15:04:31
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaHealthSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.health.module';

    /**
     * 健康券的列表查询
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterQueryList($body)
    {
        return $this->restful("POST", "/heaCenter/query/list", $body);
    }

    /**
     * 健康券的详情
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterQueryInfo($body)
    {
        return $this->restful("POST", "/heaCenter/query/info", $body);
    }

    /**
     * 健康券的作废
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterBackstageDelete($body)
    {
        return $this->restful("POST", "/heaCenter/delete", $body);
    }

    /**
     * 健康券的核销
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterAccomplish($body)
    {
        return $this->restful("POST", "/heaCenter/accomplish", $body);
    }

    /**
     * 健康券的批量核销接口
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterAccomplishes($body)
    {
        return $this->restful("POST", "/heaCenter/accomplishes", $body);
    }

    /**
     * 创建预约
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterAppointmentCreate($body)
    {
        return $this->restful("POST", "/heaCenter/appointment/create", $body);
    }

    /**
     * 取消预约
     * @param $body
     * @return ResponseInterface
     */
    public function heaCenterAppointmentDelete($body)
    {
        return $this->restful("POST", "/heaCenter/appointment/delete", $body);
    }

    /**
     * 发送手机验证码
     * @param $body
     * @return ResponseInterface
     */
    public function sendMessage($body)
    {
        return $this->restful("POST", "/heaCenter/sendMessage", $body);
    }

    /**
     * 校验手机验证码
     * @param $body
     * @return ResponseInterface
     */
    public function validateMessage($body)
    {
        return $this->restful("POST", "/heaCenter/validateMessage", $body);
    }
}