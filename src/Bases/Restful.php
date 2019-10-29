<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Bases;

use Uniondrug\ServiceSdk\Exceptions\NotRestException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Restful
 * @package Uniondrug\ServiceSdk\Bases
 */
class Restful
{
    /**
     * 调用Restful入口
     * @param string $name
     * @param array  $arguments
     * @throws NotRestException
     */
    public static function __callStatic($name, $arguments)
    {
        throw new NotRestException("not {$name} restful request of sdk");
    }

    /**
     * DELETE请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $body
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function delete(ServiceSdk $sdk, string $uri, $body = null, $extra = null)
    {
        return self::run($sdk, "DELETE", $uri, $body, $extra);
    }

    /**
     * GET请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function get(ServiceSdk $sdk, string $uri, $extra = null)
    {
        return self::run($sdk, "GET", $uri, null, $extra);
    }

    /**
     * HEAD请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function head(ServiceSdk $sdk, string $uri, $extra = null)
    {
        return self::run($sdk, "HEAD", $uri, null, $extra);
    }

    /**
     * OPTIONS请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function options(ServiceSdk $sdk, string $uri, $extra = null)
    {
        return self::run($sdk, "OPTIONS", $uri, null, $extra);
    }

    /**
     * PATCH请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $body
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function patch(ServiceSdk $sdk, string $uri, $body = null, $extra = null)
    {
        return self::run($sdk, "PATCH", $uri, $body, $extra);
    }

    /**
     * POST请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $body
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function post(ServiceSdk $sdk, string $uri, $body = null, $extra = null)
    {
        return self::run($sdk, "POST", $uri, $body, $extra);
    }

    /**
     * PUT请求
     * @param ServiceSdk $sdk
     * @param string     $uri
     * @param null       $body
     * @param null       $extra
     * @return ResponseInterface
     */
    public static function put(ServiceSdk $sdk, string $uri, $body = null, $extra = null)
    {
        return self::run($sdk, "PUT", $uri, $body, $extra);
    }

    /**
     * 调用Restful请求
     * @param ServiceSdk $sdk
     * @param string     $method
     * @param string     $url
     * @param null       $body
     * @param null       $extra
     * @return ResponseInterface
     */
    private static function run(ServiceSdk $sdk, string $method, string $url, $body = null, $extra = null)
    {
        $response = new Response($sdk);
        return $response->send($method, $url, $body, $extra);
    }
}
