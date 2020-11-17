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
 * @date   2020-11-16
 * @time   Mon, 16 Nov 2020 15:26:57 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsDstoreMemberSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsDstoreMemberSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-dstore-member';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/ApplyAuditLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/ApplyAuditLogController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function applyAuditLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/apply/audit/log/listing", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function carePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/page", $body, $query, $extra);
    }

    /**
     * setFail
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/setFailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careSetFail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/set/fail", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/deleteAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/pageAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplatePage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/page", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareTemplateUrlController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careTemplateUrlDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/template/url/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/CareController/updateAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function careUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/care/update", $body, $query, $extra);
    }

    /**
     * 信息完善
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/MerchantController/completeInfoAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function completeInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/completeInfo", $body, $query, $extra);
    }

    /**
     * 开通商保新会员
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/MerchantController/openAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantApplyOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/open", $body, $query, $extra);
    }

    /**
     * 资料审核
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/MerchantController/auditAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantAudit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/audit", $body, $query, $extra);
    }

    /**
     * 连锁详情
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/MerchantController/detailAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/detail", $body, $query, $extra);
    }

    /**
     * 连锁分页查询
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function merchantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/TransferLogController/createAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function transferLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/create", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/member.dstore.ps/git/blob/development/docs/api/TransferLogController/listingAction.md
     * @param array|object $body  入参类型
     * @param null         $query Query数据
     * @param null         $extra 请求头信息
     * @return ResponseInterface
     */
    public function transferLogListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/log/listing", $body, $query, $extra);
    }
}
