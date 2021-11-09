<?php
/**
 * @author mengqing<mengqing@uniondrug.com>
 * @date   2021-11-09
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaESBPEquitySVRSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'js-esbp-equity-svr';

    /**
     * 单权益延期
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-svr/EquitySvrController/delayApi.md
     */
    public function equityDelay($body)
    {
        return $this->restful("POST", "/svr/equity/delay", $body);
    }

    /**
     * 权益取消锁定
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-svr/EquitySvrController/batchUnLockEquityApi.md
     */
    public function equityBatchUnLock($body)
    {
        return $this->restful("POST", "/perAgr/equity/batchUnLock", $body);
    }

    /**
     * 权益消费
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-svr/EquitySvrController/batchConsumeApi.md
     */
    public function equityBatchConsume($body)
    {
        return $this->restful("POST", "/svr/equity/batchConsume", $body);
    }

    /**
     * 退款
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-svr/EquitySvrController/batchRefundApi.md
     */
    public function equityBatchRefund($body)
    {
        return $this->restful("POST", "/svr/equity/batchRefund", $body);
    }
}
