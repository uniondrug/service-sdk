<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-04-02
 * @time   Thu, 02 Apr 2020 01:00:11 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class JavaCoinSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class JavaCoinSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.coin';

    /**
     * 资金流水变更详情记录分页列表
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailPaging($body)
    {
        return $this->restful("POST", "/fundRecordDetail/list", $body);
    }

    /**
     * 资金流水明细统计
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailStatistics($body)
    {
        return $this->restful("POST", "/fundRecordDetail/statistics", $body);
    }

    /**
     * 资金流水变更详情记录导出SQL
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordDetailExportSql($body)
    {
        return $this->restful("POST", "/fundRecordDetail/exportSql", $body);
    }

    /**
     * 资金池账户
     * @param $body
     * @return ResponseInterface
     */
    public function fundAccount($body)
    {
        return $this->restful("POST", "/fundAccount/getByHolder", $body);
    }

    /**
     * 资金池充值
     * @param $body
     * @return ResponseInterface
     */
    public function updateBalance($body)
    {
        return $this->restful("POST", "/fundAccount/updateBalance", $body);
    }

    /**
     * 资金池变动流水分页列表
     * @param $body
     * @return ResponseInterface
     */
    public function fundRecordPaging($body)
    {
        return $this->restful("POST", "/fundRecord/listByAccountHolder", $body);
    }

    /**
     * 发起汇款
     * @param $body
     * @return ResponseInterface
     */
    public function bankTransferCreate($body)
    {
        return $this->restful("POST", "/bankTransfer/create", $body);
    }

    /**
     * 汇款记录查询
     * @param $body
     * @return ResponseInterface
     */
    public function bankTransferGetBySerialId($body)
    {
        return $this->restful("POST", "/bankTransfer/getBySerialId", $body);
    }

    /**
     * 分页查询银行交易流水
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountTransactionHistoryPaging($body)
    {
        return $this->restful("POST", "/bankRecord/list", $body);
    }

    /**
     * 分页查询指定银行账户的余额记录
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountBalancePaging($body)
    {
        return $this->restful("POST", "/bankBalance/listBalance", $body);
    }

    /**
     * 分页查询银行账户
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountPaging($body)
    {
        return $this->restful("POST", "/bankAccount/list", $body);
    }

    /**
     * 资金池注销余额清零
     * @param $body
     * @return ResponseInterface
     */
    public function clearBalance($body)
    {
        return $this->restful("POST", "/fundAccount/clearBalance", $body);
    }

    /**
     * 新增离线账户今日余额
     * @param $body
     * @return ResponseInterface
     */
    public function createOfflineBalance($body)
    {
        return $this->restful("POST", "/bankBalance/createOfflineTodayBalance", $body);
    }

    /**
     * 查询账户所属者列表
     * @param $body
     * @return ResponseInterface
     */
    public function bankAccountHolderList($body)
    {
        return $this->restful("POST", "/bankAccount/holderList", $body);
    }
}
