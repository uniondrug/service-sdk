<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-17
 */
namespace Uniondrug\ServiceSdk\Modules\Abstracts;

use Uniondrug\ServiceSdk\Bases\Service as BaseService;
use Uniondrug\ServiceSdk\ServiceSdk;

/**
 * V1版基类
 * @package Uniondrug\ServiceSdk\Modules\Abstracts
 */
abstract class Service extends BaseService
{

    const METHOD_DELETE = "DELETE";

    const METHOD_GET = "GET";

    const METHOD_HEAD = "HEAD";

    const METHOD_OPTIONS = "OPTIONS";

    const METHOD_PATCH = "PATCH";

    const METHOD_POST = "POST";

    const METHOD_PUT = "PUT";

    public function __construct(ServiceSdk $sdk)
    {
        parent::__construct($sdk, parent::VERSION_1);
    }
}
