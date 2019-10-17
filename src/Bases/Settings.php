<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Bases;

use Phalcon\Config;

/**
 * Settings
 * @package Uniondrug\ServiceSdk\Bases
 */
class Settings
{
    public $consulApi = '';
    public $consulTimeout = 3;
    public $timeout = 3;

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
        // 2. config.timeout
        if (isset($config->timeout) && $config->timeout > 0) {
            $this->timeout = (int) $config->timeout;
        }
        // 3. config.consul.api
        if (isset($config->consulApiAddress) && $config->consulApiAddress > 0) {
            $this->consulApi = (string) $config->consulApiAddress;
        }
        // 4. config.consul.timeout
        if (isset($config->consulApiTimeout) && $config->consulApiTimeout > 0) {
            $this->consulTimeout = (int) $config->consulApiTimeout;
        }
    }
}
