<?php
/**
 * @name   JavaAdvfrontSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaAdvfrontSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaAdvfrontSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.advfront';

    /**
     * 关怀会员列表
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getCareMemberList($body)
    {
        return $this->restful("POST", "/commercial/members/getCareMemberList", $body);
    }

    /**
     * 用户关怀
     * @param $body
     * @return ResponseInterface
     */
    public function careMembers($body)
    {
        return $this->restful("POST", "/commercial/members/careMembers", $body);
    }

    /**
     * 获取顾问列表
     * @param $body
     * @return ResponseInterface
     */
    public function getAdvisers($body)
    {
        return $this->restful("POST", "/advAdvertisement/getMembersByStoreId", $body);
    }

    /**
     * 我的会员列表
     * @param $body
     * @return ResponseInterface
     */
    public function getMyMembers($body)
    {
        return $this->restful("POST", "/commercial/members/myMembers", $body);
    }
}
