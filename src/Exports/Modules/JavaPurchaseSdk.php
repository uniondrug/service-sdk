<?php
/**
 * Created by PhpStorm.
 * User: lvchaohui
 * Date: 2019/12/17
 * Time: 11:40 AM
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * java
 * Class JavaDistributionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class JavaPurchaseSdk extends SdkBase
{
    protected $serviceName = 'java.purchase';

    /**
     * 添加采购项目
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/project_add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function createPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/add', $body);
    }

    /**
     * 采购项目详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/project_detail.md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/detail', $body);
    }

    /**
     * 更改项目激活限制策略
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/projectChange.md
     * @param array $body
     * @return ResponseInterface
     */
    public function strategyPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/projectChange', $body);
    }

    /**
     * 采购项目分页列表
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/projectList.md
     * @param array $body
     * @return ResponseInterface
     */
    public function listingPurchaseProject($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/list', $body);
    }

    /**
     * 创建新批次
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pile_add.md
     * @param array $body
     * @return ResponseInterface
     */
    public function createPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/add', $body);
    }

    /**
     * 批次分页列表
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileList.md
     * @param array $body
     * @return ResponseInterface
     */
    public function pagingPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/list', $body);
    }

    /**
     * 批次详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileDetail.md
     * @param array $body
     * @return ResponseInterface
     */
    public function detailPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/detail', $body);
    }

    /**
     * 批次详情
     * @link https://uniondrug.coding.net/p/java.middlend.equity.purchase/d/java.middlend.equity.purchase/git/tree/development/api-docs/pileCancel.md
     * @param array $body
     * @return ResponseInterface
     */
    public function cancelPile($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/cancel', $body);
    }

    /**
     * 项目导出sql
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function exportProjectSQL($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/exportList', $body);
    }

    /**
     * 规格邮件重试
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function sendSpecsMail($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/sendMail', $body);
    }

    /**
     * 解析导入模板行数和权益总额
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function parseExcelContent($body)
    {
        return $this->restful(static::METHOD_POST, '/purchasePile/checkExcel', $body);
    }

    /**
     * 规格列表
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function specsList($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/listing', $body);
    }

    /**
     * 导出规格
     * @link
     * @param array $body
     * @return ResponseInterface
     */
    public function specsExport($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseSpecs/export', $body);
    }

    /**
     * 项目提额
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseIncreaseQuota($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/increaseQuota', $body);

    }

    /**
     * 项目暂停
     * @param $body
     * @return ResponseInterface
     */
    public function purchaseProjectPause($body)
    {
        return $this->restful(static::METHOD_POST, '/purchaseProject/pause', $body);

    }
}
