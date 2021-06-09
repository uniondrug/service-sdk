<?php


namespace Uniondrug\ServiceSdk\Exports\Modules;


use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaEquityAnalysisSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'js-equity-data-analysis';

    /**
     * 项目执行情况统计
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function projectExecutionPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/data/project/execution/page", $body, $query, $extra);
    }

    /**
     * 企业采购汇总
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function customerPurchasePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/data/customer/purchase/page", $body, $query, $extra);
    }

    /**
     * 用户权益查询
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userEquityPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/data/user/equity/page", $body, $query, $extra);
    }

    /**
     * 用户权益动帐查询
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function userEquityOperatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/equity/data/user/equity/operate/page", $body, $query, $extra);
    }
}