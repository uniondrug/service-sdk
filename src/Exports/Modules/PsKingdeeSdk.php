<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Modules`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2021-01-12
 * @time   Tue, 12 Jan 2021 11:12:53 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsKingdeeSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsKingdeeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-kingdee';

    /**
     * 提交
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/commitAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherCommit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/commit", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/detail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryDetailController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryDetailCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/detail/create", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryDetailController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryDetailUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/detail/update", $body, $query, $extra);
    }

    /**
     * 重新生成
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryController/regenerateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryRegenerate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/regenerate", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherEntryController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherEntryUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/entry/update", $body, $query, $extra);
    }

    /**
     * 下一条
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/nextAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherNext($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/next", $body, $query, $extra);
    }

    /**
     * 分页
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/paging", $body, $query, $extra);
    }

    /**
     * 上一条
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/prevAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherPrev($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/prev", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/kingdee.ps/git/blob/development/docs/api/EntryController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function entryCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/entry/create", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/kingdee.ps/git/blob/development/docs/api/EntryController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function entryUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/entry/update", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/kingdee.ps/git/blob/development/docs/api/EntryController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function entryDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/entry/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/kingdee.ps/git/blob/development/docs/api/EntryController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function entryDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/entry/detail", $body, $query, $extra);
    }

    /**
     * paging
     * @link https://uniondrug.coding.net/p/kingdee.ps/git/blob/development/docs/api/EntryController/pagingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function entryPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/entry/paging", $body, $query, $extra);
    }

    /**
     * 生成金蝶凭证
     * @link https://uniondrug.coding.net/p/ps-kingdee/git/blob/development/docs/api/VoucherController/generateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function voucherGenerate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/voucher/generate", $body, $query, $extra);
    }
}
