<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-04-22
 * @Time   10:49:27
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaAgreementSvrSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.agreement.svr';

    /**
     * 新增顾客
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function addCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/svr/customer/add", $body, $query, $extra);
    }

    /**
     * 删除顾客
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function delCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/svr/customer/del", $body, $query, $extra);
    }

    /**
     * 编辑顾客
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function editCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/svr/customer/edit", $body, $query, $extra);
    }

}