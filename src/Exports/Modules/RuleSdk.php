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
 * @date   2019-04-25
 * @time   Thu, 25 Apr 2019 17:08:32 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * RuleSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class RuleSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'rule.module';

    /**
     * 黑名单添加接口
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/addMerchantBlackListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addMerchantBlackList($body)
    {
        return $this->restful("POST", "/filter/addmerchantblacklist", $body);
    }

    /**
     * 黑名单规则管理接口
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/addRuleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addRule($body)
    {
        return $this->restful("POST", "/filter/addrule", $body);
    }

    /**
     * 导出sql
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/derivedSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function derivedSql($body)
    {
        return $this->restful("POST", "/filter/derivedsql", $body);
    }

    /**
     * 权益消费过滤
     * 发起权益消费时, 通过该接口计算后, 返回各商品
     * 可使用权益支付的最大金额
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/equityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function filterEquity($body)
    {
        return $this->restful("POST", "/filter/equity", $body);
    }

    /**
     * 获取黑名单商品sql
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/BlackListSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getBlackListSql($body)
    {
        return $this->restful("POST", "/program/goods/black/sql", $body);
    }

    /**
     * 获取白名单商品sql
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/WhiteListSqlAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getWhiteListSql($body)
    {
        return $this->restful("POST", "/program/goods/white/sql", $body);
    }

    /**
     * 策略规则
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/infoRuleAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function infoRule($body)
    {
        return $this->restful("POST", "/filter/inforule", $body);
    }

    /**
     * 读取黑名单列表
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/listMerchantBlackListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listMerchantBlackList($body)
    {
        return $this->restful("POST", "/filter/listmerchantblacklist", $body);
    }

    /**
     * 新增黑名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/blackAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsBlackAdd($body)
    {
        return $this->restful("POST", "/program/goods/black/add", $body);
    }

    /**
     * 移除黑名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/blackDelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsBlackDel($body)
    {
        return $this->restful("POST", "/program/goods/black/del", $body);
    }

    /**
     * 黑名单列表
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/blackPagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsBlackPaging($body)
    {
        return $this->restful("POST", "/program/goods/black/paging", $body);
    }

    /**
     * 新增白名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/whiteAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsWhiteAdd($body)
    {
        return $this->restful("POST", "/program/goods/white/add", $body);
    }

    /**
     * 移除白名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/whiteDelAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsWhiteDel($body)
    {
        return $this->restful("POST", "/program/goods/white/del", $body);
    }

    /**
     * 列表白名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/ProgramGoodsController/whitePagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function programGoodsWhitePaging($body)
    {
        return $this->restful("POST", "/program/goods/white/paging", $body);
    }

    /**
     * 解锁黑名单
     * @link https://uniondrug.coding.net/p/module.rule/git/blob/development/docs/api/FilterController/updateStructAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function updateStruct($body)
    {
        return $this->restful("POST", "/filter/updatestruct", $body);
    }
}
