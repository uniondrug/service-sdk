<?php
/**
 * 重要说明
 * 1. 本文件由Postman命令脚本自动生成, 请不要修改, 若需修改
 *    请通过`php console postman`命令重新生成.
 * 2. 本脚本在生成时, 依赖所在项目的Controller有 `@Sdk method`定义,
 *    同时, 项目根目录下的`postman.json`需有`sdk`、`sdkLink`定义
 * 3. 发布SDK，请将本文件放到`uniondrug/service-sdk`项目
 *    的`src/Exports/Managements`目录下，并发重新发布release版本.
 * @author PostmanCommand
 * @date   2022-01-20
 * @time   Thu, 20 Jan 2022 10:17:13 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * Class GsDpspUsMemberSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsDpspUsMemberSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-dpsp-us-member';

    /**
     * 连锁开通会员服务
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardActivate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/activate", $body, $query, $extra);
    }

    /**
     * 连锁会员卡列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/list", $body, $query, $extra);
    }

    /**
     * 连锁会员卡详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/detail", $body, $query, $extra);
    }

    /**
     * 连锁会员卡更新
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/update", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/list", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/detail", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案更新
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/update", $body, $query, $extra);
    }

    /**
     * 会员新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/create", $body, $query, $extra);
    }

    /**
     * 会员详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/detail", $body, $query, $extra);
    }

    /**
     * 会员翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/paging", $body, $query, $extra);
    }

    /**
     * 会员统计
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCount($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/count", $body, $query, $extra);
    }

    /**
     * 会员卡列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCardList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/card/list", $body, $query, $extra);
    }

    /**
     * 会员卡购买翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCardOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/card/order/paging", $body, $query, $extra);
    }

    /**
     * 会员订单翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userOrderPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/order/paging", $body, $query, $extra);
    }

    /**
     * 会员礼包列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userPackageList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/package/list", $body, $query, $extra);
    }

    /**
     * 会员省钱翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userReducePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/reduce/paging", $body, $query, $extra);
    }

    /**
     * 会员省钱统计
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userReduceTotal($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/reduce/total", $body, $query, $extra);
    }

    /**
     * 会员权益列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userRightList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/right/list", $body, $query, $extra);
    }

    /**
     * 会员权益使用记录列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userRightUsedPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/right/used/paging", $body, $query, $extra);
    }

    /**
     * 会员权益到账记录列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userRightReceivePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/right/receive/paging", $body, $query, $extra);
    }

    /**
     * 连锁会员方案上架/下架
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/status", $body, $query, $extra);
    }

    /**
     * 会员方案购买统计
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCardOrderSchemeCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/card/order/scheme/count", $body, $query, $extra);
    }

    /**
     * 会员权益字典列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantUserRightDictList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchantUserRightDict/list", $body, $query, $extra);
    }

    /**
     * 添加 [小程序搜索页热词]
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function appConfigWordsAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appConfig/words/add", $body, $query, $extra);
    }

    /**
     * 列表 [小程序搜索页热词]
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function appConfigWordsList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/appConfig/words/list", $body, $query, $extra);
    }

    /**
     * 删除 [小程序搜索页热词]
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function appConfigWordsDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appConfig/words/delete", $body, $query, $extra);
    }
}
