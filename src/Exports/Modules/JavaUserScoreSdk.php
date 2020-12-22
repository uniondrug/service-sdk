<?php
/**
 * @author: zmh
 * @date  : 2019-04-12
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaUserScoreSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
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
     * @return ResponseInterface
     */
    public function preAccountRecordsPaging($body)
    {
        return $this->restful("POST", "/preAccountRecords/paging", $body);
    }

    /**
     * 积分详情
     * @param $body
     * @return ResponseInterface
     */
    public function preAccountRecordsInfo($body)
    {
        return $this->restful("POST", "/preAccountRecords/info", $body);
    }

    /**
     * 取消/发放积分
     * @param $body
     * @return ResponseInterface
     */
    public function preAccountRecordsEdit($body)
    {
        return $this->restful("POST", "/preAccountRecords/edit", $body);
    }

    /**
     * 批量取消/发放积分
     * @param $body
     * @return ResponseInterface
     */
    public function preAccountRecordsEditBatch($body)
    {
        return $this->restful("POST", "/preAccountRecords/edit/batch", $body);
    }

    /**
     * 积分统计
     * @param $body
     * @return ResponseInterface
     */
    public function preAccountRecordsCount($body)
    {
        return $this->restful("POST", "/preAccountRecords/count", $body);
    }

    /**
     * 导出
     * @param $body
     * @return ResponseInterface
     */
    public function preAccountRecordsExport($body)
    {
        return $this->restful("POST", "/preAccountRecords/export", $body);
    }

    /**
     * 发放积分
     * @param $body
     * @return ResponseInterface
     */
    public function accountRecordsAdd($body)
    {
        return $this->restful("POST", "/accountrecords/add", $body);
    }

    /**
     * 积分列表
     * @param $body
     * @return ResponseInterface
     */
    public function accountRecordsPaging($body)
    {
        return $this->restful("POST", "/accountrecords/paging", $body);
    }

    /**
     * 批量发放积分
     * @param $body
     * @return ResponseInterface
     */
    public function batchIntegralAdd($body)
    {
        return $this->restful("POST", "/accountrecords/batch/add", $body);
    }

    /**
     * 提现
     * @param $body
     * @return ResponseInterface
     */
    public function withdraw($body)
    {
        return $this->restful("POST", "/preAccountRecords/withdraw", $body);
    }

    /**
     * 积分统计详情详情
     * @param $body
     * @return ResponseInterface
     */
    public function accountPointInfo($body)
    {
        return $this->restful("POST", "/preAccountRecords/count/history", $body);
    }

    /**
     * 获取该订单和商品是否发过预积分
     * @param $body
     * @return ResponseInterface
     * @throws \Uniondrug\ServiceSdk\Exception
     */
    public function prePointCheck($body)
    {
        return $this->restful("POST", "/preAccountRecords/check", $body);
    }

    /**
     * 添加预发放积分
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addPrePoint($body)
    {
        return $this->restful("POST", "/preAccountRecords/add", $body);
    }

    /**
     * 积分商品转移
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function creditGoodsInfo($body)
    {
        return $this->restful("POST", "/creditGoods/info", $body);
    }

    /**
     * 获取退款列表
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWithdrawRecords($body)
    {
        return $this->restful("POST", "/creditIntegralQuery/getWithdrawRecords", $body);
    }

    /**
     * 导入积分excel并解析
     * @link
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function importExcel($body)
    {
        return $this->restful("POST", "/accountrecords/import/excel", $body);
    }
}