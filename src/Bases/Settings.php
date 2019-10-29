<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Bases;

use Phalcon\Config;
use Uniondrug\ServiceSdk\Exceptions\NotRegisterException;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * Settings
 * @package Uniondrug\ServiceSdk\Bases
 */
class Settings
{
    public $consulApi = '';
    public $consulTimeout = 3;
    public $timeout = 30;
    private $domain;
    /**
     * @var Config
     */
    private $hosts;
    private static $consulCaches = [];
    private static $consulCachesLimit = 300;
    private static $consulHosts = [];

    /**
     * Settings constructor.
     * @param Config|null $config
     */
    public function __construct(Config $config = null)
    {
        // 1. not config
        if (!($config instanceof Config)) {
            return;
        }
        // 2. config.domain
        if (isset($config->domain) && is_string($config->domain)) {
            $this->domain = $config->domain;
        }
        // 3. config.timeout
        if (isset($config->timeout) && $config->timeout > 0) {
            $this->timeout = (int) $config->timeout;
        }
        // 4. config.consul.api
        if (isset($config->consulApiAddress) && is_string($config->consulApiAddress)) {
            $this->consulApi = $config->consulApiAddress;
            if ($this->domain !== null) {
                $this->consulApi = preg_replace("/\{\{domain\}\}/", $this->domain, $this->consulApi);
            }
        }
        // 5. config.consul.timeout
        if (isset($config->consulApiTimeout) && $config->consulApiTimeout > 0) {
            $this->consulTimeout = (int) $config->consulApiTimeout;
        }
        // 6. config.hosts
        if (isset($config->hosts) && $config->hosts instanceof Config) {
            $this->hosts = $config->hosts;
        }
    }

    /**
     * @param string      $host
     * @param string|null $path
     * @param array|null  $query
     * @return string
     */
    public function genUrl(string $host, string $path = null, array $query = null)
    {
        $host = preg_replace("/[\/]+$/", '', $host);
        if ($path !== null) {
            $host .= '/'.preg_replace("/^[\/]+/", '', $path);
        }
        if (is_array($query)) {
            $host .= '?'.http_build_query($query);
        }
        if (preg_match("/^https*:\/\//", $host) === 0) {
            $host = "http://{$host}";
        }
        return $host;
    }

    /**
     * @return string|false
     * @example return "http://www.example.com"
     */
    public function getHostFromConfig(string $name)
    {
        // 1. not defined or invalid
        if (!($this->hosts instanceof Config) || !isset($this->hosts->{$name}) || !is_string($this->hosts->{$name})) {
            return false;
        }
        // 2. origin
        $host = $this->hosts->{$name};
        // 3. template replace
        if ($this->domain !== null) {
            $host = preg_replace("/\{\{domain\}\}/i", $this->domain, $host);
        }
        // 4. scheme fix
        if (preg_match("/^https*:\/\//i", $host) === 0) {
            $host = "http://{$host}";
        }
        // 5. formatter
        return preg_replace("/[\/]+$/", "", $host);
    }

    /**
     * @param ServiceSdk $sdk
     * @param string     $name
     * @return string
     * @throws \Throwable
     */
    public function getHostFromConsul($sdk, string $name)
    {
        // 1. from cached
        if (isset(self::$consulHosts[$name])) {
            $cached = self::$consulCaches[$name];
            if ($cached >= time()) {
                return self::$consulHosts[$name];
            }
        }
        // 2. from consul
        $url = $this->consulApi.'/'.$name;
        try {
            $response = $sdk->getHttpClient()->get($url);
            $text = $response->getBody()->getContents();
            $data = json_decode($text, true);
            if (is_array($data) && count($data) && isset($data[0], $data[0]['ServiceAddress'], $data[0]['ServicePort'])) {
                $host = "{$data[0]['ServiceAddress']}:{$data[0]['ServicePort']}";
                self::$consulHosts[$name] = $host;
                self::$consulCaches[$name] = time() + self::$consulCachesLimit;
                $sdk->getLogger()->info(sprintf("Consul使用{%s}读取到{%s}服务地址", $name, $host));
                return $host;
            }
            throw new NotRegisterException("服务器未注册");
        } catch(\Throwable $e) {
            $sdk->getLogger()->warning(sprintf("Consul使用{%s}读取服务地址失败 - %s", $name, $e->getMessage()));
        }
        return false;
    }

    /**
     * 是否为完整URL
     * @param string $url
     * @return bool
     */
    public function isFullUrl(string $url)
    {
        return preg_match("/^https*:\/\//", $url) > 0;
    }
}
