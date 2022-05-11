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
 * @date   2022-05-10
 * @time   Tue, 10 May 2022 20:22:41 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * MerchantSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class MerchantSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'merchant.module';

    /**
     * 通过名称和手机号获取用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/AccountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function account($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/account", $body, $query, $extra);
    }

    /**
     * 添加账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/add", $body, $query, $extra);
    }

    /**
     * 添加用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/add", $body, $query, $extra);
    }

    /**
     * 添加费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/add", $body, $query, $extra);
    }

    /**
     * 推送门店变动内码
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/addConversionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addConversionOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/addconversion", $body, $query, $extra);
    }

    /**
     * 添加财务回推配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/FinanceSettlementController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addFinaceSettlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financesettlement/add", $body, $query, $extra);
    }

    /**
     * 添加商户组织（村医）
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/AddHealthServicesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addHealthServicesOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/addhealthservices", $body, $query, $extra);
    }

    /**
     * 推送核算单位
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/addIndependentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addIndependentOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/addindependent", $body, $query, $extra);
    }

    /**
     * 添加开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/add", $body, $query, $extra);
    }

    /**
     * 新增组织推送
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/addJoinAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addJoinOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/addjoin", $body, $query, $extra);
    }

    /**
     * 新增评分接口
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MapLevelController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addMapLevel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mapLevel/add", $body, $query, $extra);
    }

    /**
     * 添加商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/add", $body, $query, $extra);
    }

    /**
     * 添加商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/add", $body, $query, $extra);
    }

    /**
     * 添加组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addOrganization($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/add", $body, $query, $extra);
    }

    /**
     * 添加商户组织快照
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseSnapshotController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addOrganizeBaseSnapshot($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasesnapshot/add", $body, $query, $extra);
    }

    /**
     * 添加商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/add", $body, $query, $extra);
    }

    /**
     * 添加平台商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/addPlatformAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPlatformOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/addplatform", $body, $query, $extra);
    }

    /**
     * 修改门诊挂靠关系
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/addSourceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addSource($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/addsource", $body, $query, $extra);
    }

    /**
     * 添加图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/add", $body, $query, $extra);
    }

    /**
     * 添加连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/add", $body, $query, $extra);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/add", $body, $query, $extra);
    }

    /**
     * 添加员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/add", $body, $query, $extra);
    }

    /**
     * 非代理商列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/agentNotPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function AgentNotPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/agentnotpaging", $body, $query, $extra);
    }

    /**
     * 对应代理商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/agentPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function agentPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/agentpaging", $body, $query, $extra);
    }

    /**
     * 基于商户查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/listsStoreIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantsListsStoreId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/listsstoreid", $body, $query, $extra);
    }

    /**
     * 获取连锁集合的人员数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/sumMemberLogicAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function assistantsSumMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/summember", $body, $query, $extra);
    }

    /**
     * 修改小程序类型
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editAppletServiceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditAppletService($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editappletservice", $body, $query, $extra);
    }

    /**
     * 修改集团服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditIsGroup($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisgroup", $body, $query, $extra);
    }

    /**
     * 修改会员
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditIsMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editismember", $body, $query, $extra);
    }

    /**
     * 修改一体化平台
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editOnePlatformAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditOnePlatform($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editoneplatform", $body, $query, $extra);
    }

    /**
     * 修改纳税人资质
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/EditTaxpayerTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditTaxpayerType($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/edittaxpayerttype", $body, $query, $extra);
    }

    /**
     * 修改统一社会信用码
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editUnifiedSocialCreditCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function backEndEditUnifiedSocialCreditCode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editunifiedSocialCreditCode", $body, $query, $extra);
    }

    /**
     * ids查询费率集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function balanceIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/ids", $body, $query, $extra);
    }

    /**
     * 银行目录
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/bankListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function bankListAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/bankList", $body, $query, $extra);
    }

    /**
     * 查找连锁下的店员id
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainAssAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainAss($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/chainAss", $body, $query, $extra);
    }

    /**
     * 统计全网一共有多少连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/chainNum", $body, $query, $extra);
    }

    /**
     * 添加商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePcController/chainNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainNumPc($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasepc/chainnum", $body, $query, $extra);
    }

    /**
     * 读取连锁列表（有门店数量）
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/chainPaging", $body, $query, $extra);
    }

    /**
     * 查找连锁下有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/chainStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function chainStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/chainStore", $body, $query, $extra);
    }

    /**
     * 汇总省市
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/cityOrderByAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityorderby($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/cityorderby", $body, $query, $extra);
    }

    /**
     * 城市查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/cityPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/citypaging", $body, $query, $extra);
    }

    /**
     * 统计全网一共有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/clerkNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function clerkNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/clerkNum", $body, $query, $extra);
    }

    /**
     * 商户代理数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/countAgentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function CountAgent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/countagent", $body, $query, $extra);
    }

    /**
     * 冷链门店数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/countColdDistributionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function CountColdDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/countcolddistribution", $body, $query, $extra);
    }

    /**
     * 自配送数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/countMerchantDistributionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function CountCountMerchantDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/countmerchantdistribution", $body, $query, $extra);
    }

    /**
     * 汇总DTP数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/CountIsDTPAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countIsDTP($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/countisdtp", $body, $query, $extra);
    }

    /**
     * 服务收款数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/countIsServiceCollectionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countIsServiceCollection($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/countisservicecollection", $body, $query, $extra);
    }

    /**
     * O2O门店数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/countO2OAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function CountO2O($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/counto2o", $body, $query, $extra);
    }

    /**
     * 获取所有下级组织数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/countAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countOrganize($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/count", $body, $query, $extra);
    }

    /**
     * 获取某类型下的组织数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/countTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countTypeOrganize($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/counttype", $body, $query, $extra);
    }

    /**
     * 图片统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/CountTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function countTypeStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/counttype", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/create", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/create", $body, $query, $extra);
    }

    /**
     * 绑定
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleRelationsController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createOrganizeGroupTitleRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitleRelations/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/delete", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleRelationsController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deleteOrganizeGroupTitleRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitleRelations/delete", $body, $query, $extra);
    }

    /**
     * 删除商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/delAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function delMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/del", $body, $query, $extra);
    }

    /**
     * 删除商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/delAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function delOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/del", $body, $query, $extra);
    }

    /**
     * 删除组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/delAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function delOrganization($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/del", $body, $query, $extra);
    }

    /**
     * 删除图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/DelAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function delStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/del", $body, $query, $extra);
    }

    /**
     * id查询费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/detail", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/detail", $body, $query, $extra);
    }

    /**
     * 组织id查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleRelationsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function detailOrganizeGroupTitleRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitleRelations/detail", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function DetailParentOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/detail", $body, $query, $extra);
    }

    /**
     * 修改组织直付类型
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/DirectAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function directOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/direct", $body, $query, $extra);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/disable", $body, $query, $extra);
    }

    /**
     * 停用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/disableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function disableWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/disable", $body, $query, $extra);
    }

    /**
     * 简称查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/drugstoreListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function drugstoreList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/drugstoreList", $body, $query, $extra);
    }

    /**
     * 修改账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/edit", $body, $query, $extra);
    }

    /**
     * 修改顾问状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseAdviserController/editAdviserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editAdviser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebaseadviser/editadviser", $body, $query, $extra);
    }

    /**
     * 对应代理商户操作
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editAgentOrganIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editAgentOrganId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editagentorganid", $body, $query, $extra);
    }

    /**
     * 编辑用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/edit", $body, $query, $extra);
    }

    /**
     * 修改费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/edit", $body, $query, $extra);
    }

    /**
     * 变更组织类型
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editBusinessTypeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editBusinessTypeOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/editbusinesstype", $body, $query, $extra);
    }

    /**
     * 修改冷链配送状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editColdDistributionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editColdDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editcolddistribution", $body, $query, $extra);
    }

    /**
     * 转换操作
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editConversionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editConversionOrganizeBaseBackend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editconversion", $body, $query, $extra);
    }

    /**
     * 修改商保直赔状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editDirectCompensationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editDirectCompensation($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editdirectcompensation", $body, $query, $extra);
    }

    /**
     * 修改DTP状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editDtpAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editDtp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editdtp", $body, $query, $extra);
    }

    /**
     * 修改电子处方状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editElectronicAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editElectronic($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editelectronic", $body, $query, $extra);
    }

    /**
     * 关闭黑名单
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditEndIsBlackMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editEndIsBlackMap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/editendisblackmap", $body, $query, $extra);
    }

    /**
     * 批量关闭地图
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditEndIsMapOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editEndIsMapOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/editendismapopen", $body, $query, $extra);
    }

    /**
     * 修改财务回推配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/FinanceSettlementController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editFinaceSettlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financesettlement/edit", $body, $query, $extra);
    }

    /**
     * 修改商户组织（村医）
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/EditHealthServicesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editHealthServicesOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/edithealthservices", $body, $query, $extra);
    }

    /**
     * 修改核算单位名称
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editIndependentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIndependentOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/editconversion", $body, $query, $extra);
    }

    /**
     * 修改回推内码
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editInternalCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editInternalCodeOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/editinternalcode", $body, $query, $extra);
    }

    /**
     * 修改开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/edit", $body, $query, $extra);
    }

    /**
     * 对应代理属性开关
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsAgentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsAgent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisagent", $body, $query, $extra);
    }

    /**
     * 白名单
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsBlackMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsBlackMap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisblackmap", $body, $query, $extra);
    }

    /**
     * 修改直付
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsDirectPayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsDirectPayBackend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisdirectpay", $body, $query, $extra);
    }

    /**
     * 修改直付附加换新
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsDirectRenewalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsDirectRenewal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisDirectRenewal", $body, $query, $extra);
    }

    /**
     * 修改财税平台
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsFinanceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsfinance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisfinance", $body, $query, $extra);
    }

    /**
     * 修改商户集团属性
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editIsGroupAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsGroupOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editisgroup", $body, $query, $extra);
    }

    /**
     * 修改健康服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsHealthAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsHealth($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editishealth", $body, $query, $extra);
    }

    /**
     * 修改商户组织商保新会员服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseDrugStoreController/editIsInsuranceMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsInsurancemember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasedrugstore/editisinsurancemember", $body, $query, $extra);
    }

    /**
     * 修改商业公司开票状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsInvoiceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editinvoice", $body, $query, $extra);
    }

    /**
     * 修改采购开关
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsProcurementAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsProcurement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisprocurement", $body, $query, $extra);
    }

    /**
     * 服务收款操作
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsServiceCollectionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsServiceCollection($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisservicecollection", $body, $query, $extra);
    }

    /**
     * 修改独立补贴
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/editIsSubsidyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsSubsidyParentOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/editissubsidy", $body, $query, $extra);
    }

    /**
     * 修改测试
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsTestAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsTest($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editistest", $body, $query, $extra);
    }

    /**
     * 修改联合会员状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editIsUnionMemberAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editIsUnionMember($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editisunionmember", $body, $query, $extra);
    }

    /**
     * 修改组织推送
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editJoinAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editJoinOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/editjoin", $body, $query, $extra);
    }

    /**
     * 地图打点信息调整
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editmap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editmap", $body, $query, $extra);
    }

    /**
     * 修改地图展示规则
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MapRuleController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editMapRule($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/maprule/edit", $body, $query, $extra);
    }

    /**
     * 编辑商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editMerchant($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/edit", $body, $query, $extra);
    }

    /**
     * 修改商家自配送状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editMerchantDistributionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editMerchantDistribution($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editmerchantdistribution", $body, $query, $extra);
    }

    /**
     * 修改O2O状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editO2OAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editO2O($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/edito2o", $body, $query, $extra);
    }

    /**
     * 编辑商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/edit", $body, $query, $extra);
    }

    /**
     * 编辑组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganization($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/edit", $body, $query, $extra);
    }

    /**
     * 编辑商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/edit", $body, $query, $extra);
    }

    /**
     * 更新门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePlatformController/editOrganizeBaseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganizeBasePlatform($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editorganizebase", $body, $query, $extra);
    }

    /**
     * 更新资质信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePlatformController/editOrganizeQualificationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganizeBasePlatformQualification($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editorganizebaseplatformqualification", $body, $query, $extra);
    }

    /**
     * 更新顶级组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePlatformController/editOrganizeBaseRootAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editOrganizeBaseRootPlatform($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editorganizebaseroot", $body, $query, $extra);
    }

    /**
     * 修改上级组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editParentIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editParentId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editparentid", $body, $query, $extra);
    }

    /**
     * 修改核算单位关系
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/editParentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editParentOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/editparent", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/editParentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editParentOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/editparent", $body, $query, $extra);
    }

    /**
     * 编辑商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/edit", $body, $query, $extra);
    }

    /**
     * 处理rootId修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editRootIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editRootId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editrootid", $body, $query, $extra);
    }

    /**
     * 开启黑名单
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditStartIsBlackMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStartIsBlackMap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/editstartisblackmap", $body, $query, $extra);
    }

    /**
     * 批量开启地图
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/EditStartIsMapOpenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStartIsMapOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/editstartismapopen", $body, $query, $extra);
    }

    /**
     * 批量关闭状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusEndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEnd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editstatusend", $body, $query, $extra);
    }

    /**
     * 停用账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusEndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/editstatusend", $body, $query, $extra);
    }

    /**
     * 停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndAllAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/editstatusendall", $body, $query, $extra);
    }

    /**
     * 批量停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editStatusEndAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndAllWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/editstatusendall", $body, $query, $extra);
    }

    /**
     * 停用用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusEndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/editstatusend", $body, $query, $extra);
    }

    /**
     * 关闭商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusEndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/editstatusend", $body, $query, $extra);
    }

    /**
     * 关闭连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusEndAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusEndStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/editstatusend", $body, $query, $extra);
    }

    /**
     * 修改状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/editStatusAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/editStatus", $body, $query, $extra);
    }

    /**
     * 批量注销状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusOutAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusOut($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editstatusout", $body, $query, $extra);
    }

    /**
     * 批量开启状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/editStatusStartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStart($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/editstatusstart", $body, $query, $extra);
    }

    /**
     * 开启账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/editStatusStartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/editstatusstart", $body, $query, $extra);
    }

    /**
     * 开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartAllAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/editstatusstartall", $body, $query, $extra);
    }

    /**
     * 批量开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editStatusStartAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartAllWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/editstatusstartall", $body, $query, $extra);
    }

    /**
     * 开启用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/editStatusStartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/editstatusstart", $body, $query, $extra);
    }

    /**
     * 开启商户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/editStatusStartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/editstatusstart", $body, $query, $extra);
    }

    /**
     * 开启连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editStatusStartAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStatusStartStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/editstatusstart", $body, $query, $extra);
    }

    /**
     * 编辑图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/edit", $body, $query, $extra);
    }

    /**
     * 修改连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/edit", $body, $query, $extra);
    }

    /**
     * udcs修改地图服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editUdcsMapAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editUdcsMap($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editudcsmap", $body, $query, $extra);
    }

    /**
     * 修改批发状态
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/editWholesaleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editWholesale($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/editwholesale", $body, $query, $extra);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/edit", $body, $query, $extra);
    }

    /**
     * 编辑员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function editWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/edit", $body, $query, $extra);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/enable", $body, $query, $extra);
    }

    /**
     * 启用员工
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/enableAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function enableWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/enable", $body, $query, $extra);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/exportSqlAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportSql($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/exportSql", $body, $query, $extra);
    }

    /**
     * 读取保司列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/insureListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getInsureList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/insureList", $body, $query, $extra);
    }

    /**
     * 读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMerchantByIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/ids", $body, $query, $extra);
    }

    /**
     * 读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMerchantInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/info", $body, $query, $extra);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MerchantController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getMerchantList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/merchant/list", $body, $query, $extra);
    }

    /**
     * 用以前的连锁id获取现在的组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/getByPartnerAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrganByPartnerId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/getbypartner", $body, $query, $extra);
    }

    /**
     * 查看组织组织架构
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrganizationInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/info", $body, $query, $extra);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrganizationTree($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/tree", $body, $query, $extra);
    }

    /**
     * 连锁及门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnerSwitchController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPartnerSwitchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partner/switch/list", $body, $query, $extra);
    }

    /**
     * roleCountAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/roleCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getRoleCount($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/roleCount", $body, $query, $extra);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getWorkerInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/info", $body, $query, $extra);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getWorkerList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/list", $body, $query, $extra);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getWorkerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/paging", $body, $query, $extra);
    }

    /**
     * 获取用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/IdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function ids($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/ids", $body, $query, $extra);
    }

    /**
     * 评分集合接口
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MapLevelController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function idsMapLevel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mapLevel/ids", $body, $query, $extra);
    }

    /**
     * 通过ids读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function idsOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/ids", $body, $query, $extra);
    }

    /**
     * 简易ids读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/idsSmallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function idsSmallOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/idssmall", $body, $query, $extra);
    }

    /**
     * 获取所有此核算单位的门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/independentInPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function independentInPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/independentinpaging", $body, $query, $extra);
    }

    /**
     * 获取所有非此核算单位的门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/independentPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function independentPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/independentpaging", $body, $query, $extra);
    }

    /**
     * 查询账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/info", $body, $query, $extra);
    }

    /**
     * 读取商户代理关系
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AgentDetailController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoAgentDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/agentdetail/info", $body, $query, $extra);
    }

    /**
     * 查询用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/info", $body, $query, $extra);
    }

    /**
     * 查询费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/info", $body, $query, $extra);
    }

    /**
     * 查询上级费率
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/infoChainAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoChainBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/infochain", $body, $query, $extra);
    }

    /**
     * 查询财务回推配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/FinanceSettlementController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoFinaceSettlement($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/financesettlement/info", $body, $query, $extra);
    }

    /**
     * 最近上级独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/infoIndependentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoIndependent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/infoindependent", $body, $query, $extra);
    }

    /**
     * 查询internalName internalCode 组合接口
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/infoInternalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoInternalAll($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/infointernalall", $body, $query, $extra);
    }

    /**
     * 查询开票配置
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/InvoiceController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoInvoice($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/invoice/info", $body, $query, $extra);
    }

    /**
     * 查询独立补贴
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/infoIsSubsidyAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoIsSubsidyParentOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/infoissubsidy", $body, $query, $extra);
    }

    /**
     * 查询地图展示规则
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/MapRuleController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoMapRule($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/maprule/info", $body, $query, $extra);
    }

    /**
     * 查询商户名称
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePcController/infoNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function InfoNamePc($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasepc/infoname", $body, $query, $extra);
    }

    /**
     * 读取商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/info", $body, $query, $extra);
    }

    /**
     * 读取商户组织快照
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseSnapshotController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoOrganizeBaseSnapshot($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasesnapshot/info", $body, $query, $extra);
    }

    /**
     * 查询商户组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/info", $body, $query, $extra);
    }

    /**
     * 查询图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/InfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/info", $body, $query, $extra);
    }

    /**
     * 查询连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/info", $body, $query, $extra);
    }

    /**
     * 读取员工信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function infoWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/info", $body, $query, $extra);
    }

    /**
     * 通过internalCode获取连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/internalCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function internalcode($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/internalcode", $body, $query, $extra);
    }

    /**
     * 通过默认编码获取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/internalCodeInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function internalCodeInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/internalcodeinfo", $body, $query, $extra);
    }

    /**
     * 查询组织id
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePcController/internalCodeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function internalCodePc($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasepc/internalcode", $body, $query, $extra);
    }

    /**
     * 通过internalName获取连锁门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/internalNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function internalNameInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/internalnameinfo", $body, $query, $extra);
    }

    /**
     * 对应可否转换的开关
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/isConversionAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isConversion($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/isconversion", $body, $query, $extra);
    }

    /**
     * 查询门店是否存在
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/isExistAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isExistStore($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/isExist", $body, $query, $extra);
    }

    /**
     * 门诊引入关系列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/isWholesalePagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function isWholesalePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/iswholesalepaging", $body, $query, $extra);
    }

    /**
     * 获取某类型下的组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listAllOrganize($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listall", $body, $query, $extra);
    }

    /**
     * 通过partnerId读取下级商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllStoreAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listAllStoreOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listallstore", $body, $query, $extra);
    }

    /**
     * 通过partnerId读取简略下级商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAllStoreSmallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listAllStoreSmallOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listallstoresmall", $body, $query, $extra);
    }

    /**
     * 商户枚举列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listDictionariesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listDictionariesOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listdictionaries", $body, $query, $extra);
    }

    /**
     * 查询村医组织列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseJoinController/ListHealthServicesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listHealthServicesOrganizeBaseJoin($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasejoin/listhealthservices", $body, $query, $extra);
    }

    /**
     * 名称列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseAdviserController/listIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listIdsAdviser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebaseadviser/listids", $body, $query, $extra);
    }

    /**
     * 查询对应的图片信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listImageAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listImage($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listimage", $body, $query, $extra);
    }

    /**
     * 集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listingOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/listing", $body, $query, $extra);
    }

    /**
     * ROOT下独立结算组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listIsIndependentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listIsIndependent($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listisindependent", $body, $query, $extra);
    }

    /**
     * 简洁查询连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listname", $body, $query, $extra);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/list", $body, $query, $extra);
    }

    /**
     * 简洁查询连锁名称返回门店名称
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listParentNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listParentname($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listparentname", $body, $query, $extra);
    }

    /**
     * 通过名称获取连锁下的门店简易信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listRootIdNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listRootIdName($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listrootidname", $body, $query, $extra);
    }

    /**
     * 读取root商户集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listRootIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listRootidOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listrootid", $body, $query, $extra);
    }

    /**
     * 读取带顶级组织名称的商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listRootNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listRootNameOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listrootname", $body, $query, $extra);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listSmallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listSmallOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/listsmall", $body, $query, $extra);
    }

    /**
     * 图片集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/ListsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listsStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/lists", $body, $query, $extra);
    }

    /**
     * 获取连锁下的门店简易信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/listStoreSmallOrgAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listStoreSmallOrg($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/liststoresmall", $body, $query, $extra);
    }

    /**
     * 读取员工列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function listWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/list", $body, $query, $extra);
    }

    /**
     * 员工登录
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/loginAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function login($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/login", $body, $query, $extra);
    }

    /**
     * mbs钉钉注销账号
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/mbsDingMemberLeaveAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mbsDingdingMemberLeave($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/mbsdingmemberleave", $body, $query, $extra);
    }

    /**
     * 用户查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/memberIdInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function memberIdInfoAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/memberidinfo", $body, $query, $extra);
    }

    /**
     * 通过手机号查询用户
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/mobileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function moblieWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/moblie", $body, $query, $extra);
    }

    /**
     * 按名称查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/nameListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function nameListBackend($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/namelist", $body, $query, $extra);
    }

    /**
     * 基于绑定组织的标签详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleRelationsController/organizationIdDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizationidDetailOrganizeGroupTitleRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitleRelations/organizationiddetail", $body, $query, $extra);
    }

    /**
     * 绑定服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationTerminalController/bindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizationTerminalBindStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizationTerminal/bindStatus", $body, $query, $extra);
    }

    /**
     * 组织查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationTerminalController/organizationIdInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizationTerminalOrganizationIdInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizationTerminal/organizationidinfo", $body, $query, $extra);
    }

    /**
     * 列表服务
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizationTerminalController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizationTerminalPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizationTerminal/paging", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpBindCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpBindDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/detail", $body, $query, $extra);
    }

    /**
     * 单条记录结果集合
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/idsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpBindIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/ids", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpBindListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpBindPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/paging", $body, $query, $extra);
    }

    /**
     * 解除绑定
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeDtpBindController/UnBindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeDtpUnBind($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeDtpBind/unbind", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeHealthcareSecurityController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function OrganizeHealthcareSecurityCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeHealthcareSecurity/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeHealthcareSecurityController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function OrganizeHealthcareSecurityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeHealthcareSecurity/detail", $body, $query, $extra);
    }

    /**
     * 解绑
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeHealthcareSecurityController/unbindAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function OrganizeHealthcareSecurityUnbid($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeHealthcareSecurity/unbind", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeModuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeModuleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeModule/detail", $body, $query, $extra);
    }

    /**
     * 详情明细
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeModuleController/infoOverallAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeModuleInfoOverall($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeModule/infooverall", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeModuleController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeModulePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeModule/paging", $body, $query, $extra);
    }

    /**
     * 标签下组织列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleRelationsController/organizePagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizePagingOrganizeGroupTitleRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitleRelations/organizepaging", $body, $query, $extra);
    }

    /**
     * 标签查询列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePcController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizePcPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasepc/rootpaging", $body, $query, $extra);
    }

    /**
     * 商户资质新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/create", $body, $query, $extra);
    }

    /**
     * 商户资质删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/delete", $body, $query, $extra);
    }

    /**
     * 商户资质详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/detail", $body, $query, $extra);
    }

    /**
     * 商户资质无分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/listing", $body, $query, $extra);
    }

    /**
     * 商户资质分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/paging", $body, $query, $extra);
    }

    /**
     * 商户资质修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeQualificationController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeQualificationUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeQualification/update", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeRelationModuleController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeRelationModuleDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeRelationModule/detail", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeRelationModuleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function organizeRelationModuleUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeRelationModule/update", $body, $query, $extra);
    }

    /**
     * 查询账号列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AccountNumberController/PagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingAccountNumber($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/accountnumber/paging", $body, $query, $extra);
    }

    /**
     * 查询用户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/AssistantsController/PagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingAssistants($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/assistants/paging", $body, $query, $extra);
    }

    /**
     * 查询费率列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/BalanceController/PagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingBalance($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/balance/paging", $body, $query, $extra);
    }

    /**
     * 获取ids范围数据
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/pagingIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingIds($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/pagingIds", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/paging", $body, $query, $extra);
    }

    /**
     * 列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupRelationsController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function PagingParentOrganizeGroupRelations($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupRelations/editparent", $body, $query, $extra);
    }

    /**
     * 读取商户列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingPartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/paging", $body, $query, $extra);
    }

    /**
     * 图片列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/PagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingStoreImages($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/paging", $body, $query, $extra);
    }

    /**
     * 查询连锁门店列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoresController/PagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingStores($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stores/paging", $body, $query, $extra);
    }

    /**
     * 读取员工分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function pagingWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/paging", $body, $query, $extra);
    }

    /**
     * 连锁分组列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/partnerCityPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerCityPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/partnercitypaging", $body, $query, $extra);
    }

    /**
     * 通过partnerid读取组织
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/partnerIdInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerIdInfoOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/partneridinfo", $body, $query, $extra);
    }

    /**
     * 通过partnerIds读取商户信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/partnerIdsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnerIdsOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/partnerids", $body, $query, $extra);
    }

    /**
     * 获取连锁&门店id
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/cooperationInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnersCooperationInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/cooperationinfo", $body, $query, $extra);
    }

    /**
     * 获取连锁集合的资金池
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/fundPoolsAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function partnersFundPools($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/fundpools", $body, $query, $extra);
    }

    /**
     * 业务数据统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePlatformController/propertiesSumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function propertiesSumPlatform($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/propertiessum", $body, $query, $extra);
    }

    /**
     * relationAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/relationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/relation", $body, $query, $extra);
    }

    /**
     * 用户关联权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/relationAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relationWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/relation", $body, $query, $extra);
    }

    /**
     * removeAction()
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerController/removeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function removeWorker($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/worker/remove", $body, $query, $extra);
    }

    /**
     * 删除权限
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/removeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function removeWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/remove", $body, $query, $extra);
    }

    /**
     * 获取权限下用户数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/roleCountAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleCountWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/roleCount", $body, $query, $extra);
    }

    /**
     * 修改用户权限组
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/WorkerManController/roleIdEditAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function roleIdEditWorkerMan($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/workerman/roleidedit", $body, $query, $extra);
    }

    /**
     * 查询组织列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePcController/rootPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function rootPagingPc($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasepc/rootpagingpc", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/create", $body, $query, $extra);
    }

    /**
     * 分页多天列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/partnerPagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerDayPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/partnerdaypaging", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/paging", $body, $query, $extra);
    }

    /**
     * 获取评分区间数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/rank", $body, $query, $extra);
    }

    /**
     * 获取最近总分的
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/scoreDayAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerScoreDay($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/scoreDay", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScorePartnerController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scorePartnerUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scorePartner/update", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/detail", $body, $query, $extra);
    }

    /**
     * 门店单个查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/storeInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/scorestoreinfo", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStorePaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/paging", $body, $query, $extra);
    }

    /**
     * 获取评分区间数量
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/rankAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreRank($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/rank", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/create", $body, $query, $extra);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/deleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumDelete($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/delete", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/detail", $body, $query, $extra);
    }

    /**
     * 无分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/listingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumListing($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/listing", $body, $query, $extra);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreSumController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreSumUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStoreSum/update", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/ScoreStoreController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function scoreStoreUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scoreStore/update", $body, $query, $extra);
    }

    /**
     * 更具名称查找连锁
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/searchAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchOrganizeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/search", $body, $query, $extra);
    }

    /**
     * 关闭顶级组织操作
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseBackendController/statusEndRootAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statusEndRoot($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebasebackend/statusendroot", $body, $query, $extra);
    }

    /**
     * 状态数量统计
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBasePlatformController/statusSumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function statusSumPlatform($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/statussum", $body, $query, $extra);
    }

    /**
     * 查找门店下有多少店员
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/storeAssAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeAss($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/storeAss", $body, $query, $extra);
    }

    /**
     * 统计全网一共有多少门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/storeNumAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storeNum($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/storeNum", $body, $query, $extra);
    }

    /**
     * 同步门店信息
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/syncAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function sync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/sync", $body, $query, $extra);
    }

    /**
     * 商户中心双向同步添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/syncAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncadd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/syncadd", $body, $query, $extra);
    }

    /**
     * 商户中心双向添加
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/syncAddErpAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncAddErp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/syncadderp", $body, $query, $extra);
    }

    /**
     * 商户中心接受erp回推添加门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/syncAddStroeErpAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncAddStoreErp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/syncaddstoreerp", $body, $query, $extra);
    }

    /**
     * 商户中心接受erp回推修改门店
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/syncEditStoreErpAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function syncEditStoreErp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/synceditstoreerp", $body, $query, $extra);
    }

    /**
     * 商户中心同步internal
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/synEditInternalErpAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function synEditInternalErp($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/syneditinternalerp", $body, $query, $extra);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TenantInfoController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tenantCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tenantInfo/create", $body, $query, $extra);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TenantInfoController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tenantDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tenantInfo/detail", $body, $query, $extra);
    }

    /**
     * paging
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TenantInfoController/pagingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tenantPaging($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tenantInfo/paging", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TenantInfoController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function tenantUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tenantInfo/update", $body, $query, $extra);
    }

    /**
     * 添加转账
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TransferController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/add", $body, $query, $extra);
    }

    /**
     * 修改转账
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TransferController/editAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferEdit($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/edit", $body, $query, $extra);
    }

    /**
     * 单条查询
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/TransferController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function transferInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/transfer/info", $body, $query, $extra);
    }

    /**
     * 读取组织架构树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeBaseController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function treeOrgabuzeBase($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizebase/tree", $body, $query, $extra);
    }

    /**
     * 读取商户列表树
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/PartnersController/treeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function treePartners($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/partners/tree", $body, $query, $extra);
    }

    /**
     * 根据类型获取图片
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/StoreImagesController/typeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function typeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/storeimages/typelist", $body, $query, $extra);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.merchant/git/blob/development/docs/api/OrganizeGroupTitleController/updateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function updateOrganizeGroupTitle($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organizeGroupTitle/update", $body, $query, $extra);
    }
}
