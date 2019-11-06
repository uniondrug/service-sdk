<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Requests;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response as GuzzleResponse;
use GuzzleHttp\Psr7\Stream as GuzzleStream;
use Phalcon\Di;
use Uniondrug\ServiceSdk\SdkException;

/**
 * 以HTTP请求服务
 * @package Uniondrug\ServiceSdk\Requests
 */
class RequestHttp
{
    const RETRY_YES = false;
    const RETRY_NO = true;
    private $request;
    private static $client;
    private static $urlRegexp = "/^(http|https):\/\//i";

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param array  $options
     * @param string $url
     * @param int    $offset
     * @return bool true not retry, false for retry
     * @throws SdkException
     */
    public function send(array $options, string $url, int $offset = 1)
    {
        $this->request->response->setUrl($url);
        // 1. url allowed
        if (preg_match(self::$urlRegexp, $url) === 0) {
            $this->request->response->setInvalidUrlError("无效的SDK地址");
            $this->request->logger->error("SDK第{{$offset}}次请求为无效的SDK地址,退出请求");
            return self::RETRY_NO;
        }
        // 2. HTTP对象
        if (!self::$client) {
            $di = Di::getDefault();
            if ($di->has('httpClient')) {
                self::$client = $di->getShared('httpClient');
            } else {
                self::$client = new Client();
            }
        }
        // 3. 执行HTTP请求
        $this->request->logger->info("SDK第{{$offset}}次请求{{$url}}");
        try {
            // 4. 标准请求
            $resp = self::$client->request($this->request->requestMethod, $url, $options);
            // 5. 结果对象
            if (!($resp instanceof GuzzleResponse)) {
                throw new SdkException("无效的远程Response返回");
            }
            // 6. Stream;
            $stream = $resp->getBody();
            if (!($stream instanceof GuzzleStream)) {
                throw new SdkException("无效的远程Stream数据流");
            }
            // 7. 内容
            $contents = (string) $stream->getContents();
            $contents = preg_replace("/\r|\n/", "", $contents);
            $this->request->response->setContents($contents, false);
            $this->request->logger->debug("SDK第{{$offset}}次请求完成");
            return self::RETRY_NO;
        } catch(\Throwable $e) {
            $message = preg_replace("/\r|\n/", "", $e->getMessage());
            // 8. 失败
            $this->request->logger->error("SDK第{{$offset}}次请求失败 - {$message}");
            // 9. 状态位
            $code = $e->getCode();
            $codes = [
                400,
                401,
                403,
                404,
                405
            ];
            if (in_array($code, $codes)) {
                $this->request->response->setContents($message, false);
                $this->request->response->setStatusCodeError("第[{$code}]号状态码被忽略 - {$message}");
                return self::RETRY_NO;
            }
            // 10. 其它错误
            $this->request->response->setFailureError("服务请求失败 - {$message}");
        }
        return self::RETRY_YES;
    }
}
