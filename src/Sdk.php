<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-03-27
 */
namespace Uniondrug\ServiceSdk;

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
     * @param string $method
     * @param string $route
     * @param        $post
     * @param array  $query
     * @return array
     * @since 1.0
     */
    final protected function restful(string $method, string $route, $post, $query = [])
    {
        return [];
    }
}
