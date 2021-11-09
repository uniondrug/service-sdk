<?php
/**
 * @author mengqing<mengqing@uniondrug.com>
 * @date   2021-11-09
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaESBPEquityQRYSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'js-esbp-equity-qry';

    /**
     * 获取权益详情
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-qry/EquityQryController/detailApi.md
     */
    public function equityDetail($body)
    {
        return $this->restful("POST", "/qry/equity/detail", $body);
    }

    /**
     * 获取权益列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link https://git.uniondrug.com/docs/1/docs-bizcenter/php-docs/blob/master/js-esbp-equity-qry/EquityQryController/pagingApi.md
     */
    public function equityPaging($body)
    {
        return $this->restful("POST", "/qry/equity/paging", $body);
    }
}
