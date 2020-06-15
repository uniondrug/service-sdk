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
 * @date   2020-06-16
 * @time   Tue, 16 Jun 2020 00:11:56 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

/**
 * InspectionSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class InspectionSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'inspection.module';

    /**
     * 增加检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function add($body)
    {
        return $this->restful("POST", "/inspection/van/add", $body);
    }

    /**
     * 基本资料
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/basicListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function basicList($body)
    {
        return $this->restful("GET", "/information-center/basic/list", $body);
    }

    /**
     * 获取订单检查项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getInspecionListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function geOrderInspectionList($body)
    {
        return $this->restful("POST", "/order/inspectionList", $body);
    }

    /**
     * 查询订单列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrderList($body)
    {
        return $this->restful("POST", "/order/list", $body);
    }

    /**
     * 获取订单状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getStatusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrderStatusList($body)
    {
        return $this->restful("POST", "/order/statusList", $body);
    }

    /**
     * 车牌列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function list($body)
    {
        return $this->restful("GET", "/inspection/van/list", $body);
    }

    /**
     * 恢复检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/recoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function recover($body)
    {
        return $this->restful("POST", "/inspection/van/recover", $body);
    }

    /**
     * 订单检查项退单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 修理检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/repairAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function repair($body)
    {
        return $this->restful("POST", "/inspection/van/repair", $body);
    }

    /**
     * 团队人员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/teamListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function teamList($body)
    {
        return $this->restful("GET", "/information-center/team/list", $body);
    }

    /**
     * 文件上传
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/uploadFileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadFile($body)
    {
        return $this->restful("POST", "/upload/file", $body);
    }

    /**
     * 获取可下载的连接 id 方式
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/signUrlIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadFileSignUrlById($body)
    {
        return $this->restful("POST", "/upload/url/id-sign", $body);
    }

    /**
     * 获取可下载的连接 str 方式
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/signUrlStrAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadFileSignUrlByStr($body)
    {
        return $this->restful("", "/upload", $body);
    }
}
