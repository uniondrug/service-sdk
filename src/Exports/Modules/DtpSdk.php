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
 * @date   2020-04-15
 * @time   Wed, 15 Apr 2020 15:18:01 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * DtpSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class DtpSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'dtp.module';

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CategoryController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function categoryCreate($body)
    {
        return $this->restful("POST", "/category/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CategoryController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function categoryDelete($body)
    {
        return $this->restful("POST", "/category/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CategoryController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function categoryDetail($body)
    {
        return $this->restful("POST", "/category/detail", $body);
    }

    /**
     * 所有分类
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CategoryController/listingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function categoryListing($body)
    {
        return $this->restful("POST", "/category/list", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CategoryController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function categoryUpdate($body)
    {
        return $this->restful("POST", "/category/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CompanyTagController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyTagCreate($body)
    {
        return $this->restful("POST", "/companyTag/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CompanyTagController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyTagDelete($body)
    {
        return $this->restful("POST", "/companyTag/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CompanyTagController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyTagDetail($body)
    {
        return $this->restful("POST", "/companyTag/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CompanyTagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyTagPaging($body)
    {
        return $this->restful("POST", "/companyTag/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/CompanyTagController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function companyTagUpdate($body)
    {
        return $this->restful("POST", "/companyTag/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DosageController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dosageCreate($body)
    {
        return $this->restful("POST", "/dosage/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DosageController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dosageDelete($body)
    {
        return $this->restful("POST", "/dosage/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DosageController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dosageDetail($body)
    {
        return $this->restful("POST", "/dosage/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DosageController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dosagePaging($body)
    {
        return $this->restful("POST", "/dosage/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DosageController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function dosageUpdate($body)
    {
        return $this->restful("POST", "/dosage/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugCreate($body)
    {
        return $this->restful("POST", "/drug/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugDelete($body)
    {
        return $this->restful("POST", "/drug/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugDetail($body)
    {
        return $this->restful("POST", "/drug/detail", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugExport($body)
    {
        return $this->restful("POST", "/drug/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugPaging($body)
    {
        return $this->restful("POST", "/drug/paging", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugTagController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugTagCreate($body)
    {
        return $this->restful("POST", "/drugTag/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugTagController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugTagDelete($body)
    {
        return $this->restful("POST", "/drugTag/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugTagController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugTagDetail($body)
    {
        return $this->restful("POST", "/drugTag/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugTagController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugTagPaging($body)
    {
        return $this->restful("POST", "/drugTag/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugTagController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugTagUpdate($body)
    {
        return $this->restful("POST", "/drugTag/update", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/DrugController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function drugUpdate($body)
    {
        return $this->restful("POST", "/drug/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/IndicationsController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function indicationsCreate($body)
    {
        return $this->restful("POST", "/indications/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/IndicationsController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function indicationsDelete($body)
    {
        return $this->restful("POST", "/indications/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/IndicationsController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function indicationsDetail($body)
    {
        return $this->restful("POST", "/indications/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/IndicationsController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function indicationsPaging($body)
    {
        return $this->restful("POST", "/indications/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/IndicationsController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function indicationsUpdate($body)
    {
        return $this->restful("POST", "/indications/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ManufacturerController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function manufacturerCreate($body)
    {
        return $this->restful("POST", "/manufacturer/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ManufacturerController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function manufacturerDelete($body)
    {
        return $this->restful("POST", "/manufacturer/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ManufacturerController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function manufacturerDetail($body)
    {
        return $this->restful("POST", "/manufacturer/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ManufacturerController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function manufacturerPaging($body)
    {
        return $this->restful("POST", "/manufacturer/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ManufacturerController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function manufacturerUpdate($body)
    {
        return $this->restful("POST", "/manufacturer/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyCreate($body)
    {
        return $this->restful("POST", "/pharmacy/create", $body);
    }

    /**
     * 删除/批量删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDelete($body)
    {
        return $this->restful("POST", "/pharmacy/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDetail($body)
    {
        return $this->restful("POST", "/pharmacy/detail", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyDrugController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDrugCreate($body)
    {
        return $this->restful("POST", "/pharmacyDrug/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyDrugController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDrugDelete($body)
    {
        return $this->restful("POST", "/pharmacyDrug/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyDrugController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDrugDetail($body)
    {
        return $this->restful("POST", "/pharmacyDrug/detail", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyDrugController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDrugExport($body)
    {
        return $this->restful("POST", "/pharmacyDrug/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyDrugController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyDrugPaging($body)
    {
        return $this->restful("POST", "/pharmacyDrug/paging", $body);
    }

    /**
     * 导出
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/exportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyExport($body)
    {
        return $this->restful("POST", "/pharmacy/export", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyPaging($body)
    {
        return $this->restful("POST", "/pharmacy/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/PharmacyController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function pharmacyUpdate($body)
    {
        return $this->restful("POST", "/pharmacy/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ProjectController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectCreate($body)
    {
        return $this->restful("POST", "/project/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ProjectController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectDelete($body)
    {
        return $this->restful("POST", "/project/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ProjectController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectDetail($body)
    {
        return $this->restful("POST", "/project/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ProjectController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectPaging($body)
    {
        return $this->restful("POST", "/project/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/ProjectController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function projectUpdate($body)
    {
        return $this->restful("POST", "/project/update", $body);
    }

    /**
     * 新增
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/UnitController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unitCreate($body)
    {
        return $this->restful("POST", "/unit/create", $body);
    }

    /**
     * 删除
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/UnitController/deleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unitDelete($body)
    {
        return $this->restful("POST", "/unit/delete", $body);
    }

    /**
     * 详情
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/UnitController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unitDetail($body)
    {
        return $this->restful("POST", "/unit/detail", $body);
    }

    /**
     * 分页列表
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/UnitController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unitPaging($body)
    {
        return $this->restful("POST", "/unit/paging", $body);
    }

    /**
     * 修改
     * @link https://uniondrug.coding.net/p/module.dtp/git/blob/development/docs/api/UnitController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function unitUpdate($body)
    {
        return $this->restful("POST", "/unit/update", $body);
    }
}
