<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk;

use Phalcon\Di;
use Uniondrug\Service\ClientResponseInterface;

/**
 * @package Uniondrug\ServiceSdk
 */
abstract class Sdk
{
    const METHOD_DELETE = "DELETE";

    const METHOD_GET = "GET";

    const METHOD_HEAD = "HEAD";

    const METHOD_OPTIONS = "OPTIONS";

    const METHOD_PATCH = "PATCH";

    const METHOD_POST = "POST";

    const METHOD_PUT = "PUT";

    /**
     * 服务名/子类必须覆盖
     * @var string
     */
    protected $serviceName;

    /**
     * 发起Restful请求
     * @param string            $method 请求方式, 如: GET、POST等
     * @param string            $route  路由地址, 如: /site/index
     * @param null|array|object $post   POST数据
     * @param null|array|object $query  Query数据
     * @param null|array|object $extra  配置参数
     * @return ClientResponseInterface
     * @throws Exception
     */
    final protected function restful(string $method, string $route, $post = null, $query = null, $extra = null)
    {
        if ($this->serviceName === null || $this->serviceName === ''){
            $message = sprintf("请在类'%s'中未覆盖定义'protected \$%s'定义服务名称", get_class($this), 'serviceName');
            throw new Exception($message);
        }
        return Di::getDefault()->getShared('serviceClient')->$method($this->serviceName, $route, $query, $post, $extra);
    }
}
