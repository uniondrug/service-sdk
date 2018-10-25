<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2018-10-23
 */
namespace Uniondrug\ServiceSdk\Requests;

/**
 * 从Cache中读取
 * @package Uniondrug\ServiceSdk\Requests
 */
class RequestCache
{
    /**
     * @var \Redis
     */
    private static $cache;
    private $key;
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->initKey();
        $this->request->response->setUrl($this->key);
    }

    /**
     * 读取缓存
     * @return bool
     */
    public function get()
    {
        // 1. logger
        $this->request->logger->info("[{$this->request->requestId}]检查缓存 - {$this->key}");
        // 2. getter
        $data = $this->initCache()->hGetAll($this->key);
        // 3. not found
        if (!is_array($data) || !isset($data['created'], $data['contents'])) {
            $this->request->logger->debug("[{$this->request->requestId}]缓存不存在");
            return false;
        }
        // 4. expired
        $expired = (time() - $data['created']) > $this->request->cacheDeadline;
        if ($expired) {
            $this->request->logger->debug("[{$this->request->requestId}]缓存已过期");
            return false;
        }
        // 5. 读取成功
        $this->request->response->setContents($data['contents'], true);
        $this->request->logger->debug("[{$this->request->requestId}]提取缓存 - {$data['contents']}");
        return true;
    }

    /**
     * 更新缓存
     * @return bool
     */
    public function set()
    {
        if ($this->initCache()->hMset($this->key, [
            'created' => time(),
            'contents' => $this->request->response->getContents()
        ])
        ) {
            $this->initCache()->expire($this->key, $this->request->cacheDeadline);
            $this->request->logger->debug("[{$this->request->requestId}]写入缓存并维持[{$this->request->cacheDeadline}]秒 - {$this->request->response->getContents()}");
            return true;
        }
        $this->request->logger->error("[{$this->request->requestId}]写入缓存失败 - {$this->request->response->getContents()}");
        return false;
    }

    private function initCache()
    {
        if (self::$cache === null) {
            self::$cache = new \Redis();
            self::$cache->connect($this->request->config->redisHost, $this->request->config->redisPort, $this->request->config->timeout);
            $this->request->config->redisAuth && self::$cache->auth($this->request->config->redisAuth);
            $this->request->config->redisIndex && self::$cache->select($this->request->config->redisIndex);
        }
        return self::$cache;
    }

    private function initKey()
    {
        $key = "sdk:{$this->request->requestMethod}:";
        $key .= substr(md5($this->request->requestUri."\t".json_encode($this->request->requestOptions, JSON_UNESCAPED_UNICODE)), 8, 16);
        $this->key = strtolower($key);
    }
}
