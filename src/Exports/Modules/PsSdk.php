<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Bsdatas`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2020-09-29
 * @time   Tue, 29 Sep 2020 10:30:08 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Bsdatas;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-bsdata';

    /**
     * 业务汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/BusinessStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/BusinessStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function businessStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/businessStatistic/paging", $body, $query, $extra);
    }

    /**
     * 数据总和
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/PharmacyStatisticController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pharmacyStatisticList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pharmacyStatistic/list", $body, $query, $extra);
    }

    /**
     * 审核统计
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/RenewalStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewalStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/RenewalStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function renewalStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/renewalStatistic/paging", $body, $query, $extra);
    }

    /**
     * 数据汇总
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStatisticCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/count", $body, $query, $extra);
    }

    /**
     * 详细数据
     * @link https://uniondrug.coding.net/p/bsdata.ps/git/blob/development/docs/api/WorKStatisticController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function workStatisticPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workStatistic/paging", $body, $query, $extra);
    }
}
