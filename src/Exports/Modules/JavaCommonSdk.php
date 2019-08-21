<?php
/**
 * @name   JavaOrderSdk
 * @date   2018-12-04
 * @time   Tue, 04 Dec 2018 18:29:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaCommonSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.common';

    /**
     * 获取兑换码卡号
     *
     * </>
     * @param array $body 入参类型
     *
     * @return ResponseInterface
     */
    public function equityPool($body)
    {
        return $this->restful("POST", "/equity/pool", $body);
    }

    /**
     * 获取字典数据
     *
     * </>
     * @param array $body 入参类型
     *
     * @return ResponseInterface
     */
    public function dictData($body)
    {
        return $this->restful("POST", "/dict/data", $body);
    }
}
