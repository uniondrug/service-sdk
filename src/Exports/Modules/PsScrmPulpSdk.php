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
 * @date   2021-08-30
 * @time   Mon, 30 Aug 2021 09:39:07 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * PsScrmPulpSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class PsScrmPulpSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'ps-scrm-pulp';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/AdminLogController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function adminLogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/adminLog/create", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/AdminLogController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function adminLogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/adminLog/paging", $body, $query, $extra);
    }

    /**
     * 获取一张未使用的兑换码
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/ReedomCodeController/notUsedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function codeNotUsed($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reedomCode/notUsed", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MemberController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MemberController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/detail", $body, $query, $extra);
    }

    /**
     * 手机号获取会员信息
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MemberController/getByMobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberGetByMobile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/getByMobile", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MemberController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/paging", $body, $query, $extra);
    }

    /**
     * 编辑
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MemberController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/member/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MerchantController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/list", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/MerchantController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function merchantPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/page", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/PraiseController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function praiseCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/praise/create", $body, $query, $extra);
    }

    /**
     * info
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/PraiseController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function praiseInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/praise/info", $body, $query, $extra);
    }

    /**
     * 浆站ID获取批次列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/PulpPileController/getListByPulpIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pulpPileGetListByPulpId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/pulpPile/getListByPulpId", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/ReedomCodeController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reedomCodeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/reedomCode/update", $body, $query, $extra);
    }

    /**
     * 发放记录激活
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/SendRecordController/activeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendRecordActive($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sendRecord/active", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/SendRecordController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendRecordAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sendRecord/add", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/SendRecordController/pageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sendRecordPage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/sendRecord/page", $body, $query, $extra);
    }

    /**
     * 添加组员
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/TeamController/addMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function teamAddMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/team/addMember", $body, $query, $extra);
    }

    /**
     * 查询战队
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/TeamController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function teamInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/team/info", $body, $query, $extra);
    }

    /**
     * 战队列表
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/TeamController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function teamPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/team/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/ps-scrm-pulp/git/blob/development/docs/api/VisitController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function visitCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/visit/create", $body, $query, $extra);
    }
}
