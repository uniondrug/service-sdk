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

class JavaAgreementQrySdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'js.agreement.qry';


    /**
     * 顾客信息
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function infoCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/info", $body, $query, $extra);
    }

    /**
     * 通过制定参数查询顾客信息
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function detailCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/detail", $body, $query, $extra);
    }

    /**
     * 批量查询列表
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function listByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/ids", $body, $query, $extra);
    }

    /**
     * 顾客分页
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function pagingCustomer($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/paging", $body, $query, $extra);
    }

    /**
     * 通过商户查询客户数量
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function numberByMerchantId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/customer/number", $body, $query, $extra);
    }
}