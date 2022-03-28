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
 * Class GsDpspGsCatalogSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsDpspGsCatalogSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-dpsp-gs-catalog';

    /**
     * 疾病新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/disease/create", $body, $query, $extra);
    }

    /**
     * 疾病详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/disease/detail", $body, $query, $extra);
    }

    /**
     * 疾病修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/disease/update", $body, $query, $extra);
    }

    /**
     * 疾病删除
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseDelete($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/disease/delete", $body, $query, $extra);
    }

    /**
     * 疾病翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseasePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/disease/paging", $body, $query, $extra);
    }

    /**
     * 疾病药品关联
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseRelate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/disease/relate", $body, $query, $extra);
    }


    /**
     * 疾病下药品翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function diseaseDrugPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/disease/drug/paging", $body, $query, $extra);
    }

    /**
     * 药品新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drug/create", $body, $query, $extra);
    }

    /**
     * 药品详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/drug/detail", $body, $query, $extra);
    }

    /**
     * 药品修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/drug/update", $body, $query, $extra);
    }

    /**
     * 药品删除
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugDelete($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/drug/delete", $body, $query, $extra);
    }

    /**
     * 药品翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/drug/paging", $body, $query, $extra);
    }

    /**
     * 药品下疾病翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function drugDiseasePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/drug/disease/paging", $body, $query, $extra);
    }

    /**
     * 科室列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function departmentList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/department/list", $body, $query, $extra);
    }

    /**
     * 目录新增
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/catalog/create", $body, $query, $extra);
    }

    /**
     * 目录详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDetail($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/detail", $body, $query, $extra);
    }

    /**
     * 目录修改
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/catalog/update", $body, $query, $extra);
    }

    /**
     * 目录删除
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDelete($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/delete", $body, $query, $extra);
    }


    /**
     * 目录翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/paging", $body, $query, $extra);
    }

    /**
     * 目录关联疾病添加
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDiseaseAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/catalog/disease/add", $body, $query, $extra);
    }

    /**
     * 目录关联疾病翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDiseasePaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/disease/paging", $body, $query, $extra);
    }

    /**
     * 目录删除关联疾病
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDelDisease($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/del/disease", $body, $query, $extra);
    }

    /**
     * 目录关联药品添加
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDrugAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/catalog/drug/add", $body, $query, $extra);
    }

    /**
     * 目录关联药品翻页列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDrugPaging($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/drug/paging", $body, $query, $extra);
    }

    /**
     * 目录删除关联药品
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function catalogDelDrug($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/catalog/del/drug", $body, $query, $extra);
    }
}