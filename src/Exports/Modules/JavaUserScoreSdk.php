<?php
/**
 * @author: zmh
 * @date: 2019-04-12
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaUserScoreSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.user.credit';

    /**
     * 积分列表
     * @param $body
     *
     * @return \Uniondrug\ServiceSdk\Responses\ResponseInterface
     */
    public function preAccountRecordsPaging($body)
    {
        return $this->restful("POST", "/preAccountRecords/paging
", $body);
    }

    /**
     * 积分详情
     * @param $body
     *
     * @return \Uniondrug\ServiceSdk\Responses\ResponseInterface
     */
    public function preAccountRecordsInfo($body){
        return $this->restful("POST", "/preAccountRecords/info
", $body);
    }

    /**
     * 取消/发放积分
     * @param $body
     *
     * @return \Uniondrug\ServiceSdk\Responses\ResponseInterface
     */
    public function preAccountRecordsEdit($body){
        return $this->restful("POST", "/preAccountRecords/edit
", $body);
    }

    /**
     * 批量取消/发放积分
     * @param $body
     *
     * @return \Uniondrug\ServiceSdk\Responses\ResponseInterface
     */
    public function preAccountRecordsEditBatch($body){
        return $this->restful("POST", "/preAccountRecords/edit/batch
", $body);
    }

    /**
     * 积分统计列表
     * @param $body
     *
     * @return \Uniondrug\ServiceSdk\Responses\ResponseInterface
     */
    public function preAccountRecordsCount($body){
        return $this->restful("POST", "/preAccountRecords/edit/batch
", $body);
    }

}