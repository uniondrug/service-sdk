<?php
/**
 * @author mengqing<mengqing@uniondrug.com>
 * @date   2021-11-04
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

class JavaESOPAgreementSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'js-esop-agreement-mng';

    /**
     * 查询协议列表
     * @param array $body 入参类型
     * @return ResponseInterface
     * @link
     */
    public function agreementList($body)
    {
        return $this->restful("POST", "/mng/agreement/list", $body);
    }
}
