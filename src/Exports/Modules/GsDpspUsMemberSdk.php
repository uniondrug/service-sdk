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
     * 手机号/memberId + 商户Id批量查会员Id
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userBatchUsers($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/batch/users", $body, $query, $extra);
    }

    /**
     * 手机号+merchantId批量查会员数量
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCountMobiles($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/count/mobiles", $body, $query, $extra);
    }

    /**
     * 会员领券
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userReceiveCoupon($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/receive/coupon", $body, $query, $extra);
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
     * 会员卡订单修改退单状态
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userCardOrderRefund($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/card/order/refund", $body, $query, $extra);
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
     * @param      $body
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
     * @param      $body
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
     * @param      $body
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
     * @param      $body
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
     * @param      $body
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
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function appConfigWordsDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appConfig/words/delete", $body, $query, $extra);
    }

    /**
     * 排序 [小程序搜索页热词]
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function appConfigWordsSort($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appConfig/words/sort", $body, $query, $extra);
    }

    /**
     * 会员服务-开通
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantProtocolOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/protocol/open", $body, $query, $extra);
    }

    /**
     * 会员服务-开通列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantProtocolList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/protocol/list", $body, $query, $extra);
    }

    /**
     * 会员服务-切换连锁会员推荐位状态
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantRecommendUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/recommend/update", $body, $query, $extra);
    }

    /**
     * 会员服务-批量获取连锁会员推荐位
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantRecommendIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/recommend/ids", $body, $query, $extra);
    }

    /**
     * 会员服务-获取连锁会员推荐位详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantRecommendDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/recommend/detail", $body, $query, $extra);
    }

    /**
     * 人群包翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userGroupPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/group/paging", $body, $query, $extra);
    }

    /**
     * 人群包详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userGroupDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/group/detail", $body, $query, $extra);
    }

    /**
     * 人群包创建
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userGroupCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/group/create", $body, $query, $extra);
    }

    /**
     * 人群包修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userGroupUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/group/update", $body, $query, $extra);
    }

    /**
     * 人群包修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userGroupDelete($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/user/group/delete", $body, $query, $extra);
    }

    /**
     * 消息翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function messagePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/message/paging", $body, $query, $extra);
    }

    /**
     * 消息创建
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function messageCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/create", $body, $query, $extra);
    }

    /**
     * 消息详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function messageDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/message/detail", $body, $query, $extra);
    }

    /**
     * 消息修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function messageUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/message/update", $body, $query, $extra);
    }

    /**
     * 发券-任务新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponTaskCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/task/create", $body, $query, $extra);
    }

    /**
     * 发券-任务详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponTaskDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/task/detail", $body, $query, $extra);
    }

    /**
     * 发券-任务分页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponTaskPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/task/paging", $body, $query, $extra);
    }

    /**
     * 发券-任务状态更新
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponTaskUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/task/update", $body, $query, $extra);
    }

    /**
     * 发券-优惠券领取列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponReceivePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/receive/paging", $body, $query, $extra);
    }

    /**
     * 发券-会员优惠券发放列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponGivePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/give/paging", $body, $query, $extra);
    }

    /**
     * 发券-会员优惠券发放列表不分页
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponGiveList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/give/list", $body, $query, $extra);
    }

    /**
     * 发券-批量插入优惠券待发放会员
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function couponUserAddBatch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/coupon/user/add/batch", $body, $query, $extra);
    }

    /**
     * 获取连锁企微开通状态
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantWeComStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/weCom/status", $body, $query, $extra);
    }

    /**
     * 批量获取连锁企微服务
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantWeComBatchQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/weCom/batch/query", $body, $query, $extra);
    }

    /**
     * 连锁开通企微
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantWeComOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/weCom/open", $body, $query, $extra);
    }

    /**
     * 门店开通企微
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/open", $body, $query, $extra);
    }

    /**
     * 门店关闭企微
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComClose($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/close", $body, $query, $extra);
    }

    /**
     * 批量查询门店企微服务
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComBatchQuery($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/batch/query", $body, $query, $extra);
    }

    /**
     * 门店批量开启企微服务
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComBatchOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/batch/open", $body, $query, $extra);
    }

    /**
     * 门店批量关闭企微服务
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComBatchClose($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/batch/close", $body, $query, $extra);
    }

    /**
     * 批量查询连锁下开启企微的门店数量及席位分配数量
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function openCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/weCom/open/count", $body, $query, $extra);
    }

    /**
     * 门店企微列表筛选
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function storeWeComList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/list", $body, $query, $extra);
    }

    /**
     * 席位绑定
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function bindSeat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/bind/seat", $body, $query, $extra);
    }

    /**
     * 获取企微用户席位绑定详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function getSeat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/get/seat", $body, $query, $extra);
    }

    /**
     * 批量获取企微用户席位绑定详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function batchGetSeat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/store/weCom/batch/get/seat", $body, $query, $extra);
    }

    /**
     * 会员积分同步
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function userIntegralSync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/user/integral/sync", $body, $query, $extra);
    }
}
