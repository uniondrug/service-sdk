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
 * @date   2020-07-10
 * @time   Fri, 10 Jul 2020 11:36:33 +0800
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
     * 新增入库
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/addCommodityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addCommodity($body)
    {
        return $this->restful("POST", "/stock/in/add/commodity", $body);
    }

    /**
     * 新增异常单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/addStockAbnormalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStockAbnormal($body)
    {
        return $this->restful("POST", "/stock/abnormal/add", $body);
    }

    /**
     * 新增回仓单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/addStockBackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addStockBack($body)
    {
        return $this->restful("POST", "/stock/back/add", $body);
    }

    /**
     * 订单取消预约
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/cancelAppointmentAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cancelAppointmentOrder($body)
    {
        return $this->restful("POST", "/order/cancelAppointment", $body);
    }

    /**
     * 获取城市列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/CityController/cityListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function cityList($body)
    {
        return $this->restful("POST", "/city/list", $body);
    }

    /**
     * 获取货品列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/commodityTypeListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function commodityTypeList($body)
    {
        return $this->restful("GET", "/stock/commodity-type/list", $body);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/createAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function createOrder($body)
    {
        return $this->restful("POST", "/openapi/order/create", $body);
    }

    /**
     * 导出环境参数数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportLineEnvironmentAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportLineEnvironment($body)
    {
        return $this->restful("POST", "/information/export/line/environment", $body);
    }

    /**
     * 导出行驶轨迹数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportLineTrajectoryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportLineTrajectory($body)
    {
        return $this->restful("POST", "/information/export/line/trajectory", $body);
    }

    /**
     * 导出医废轨迹数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportWasteTrajectoryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function exportWasteTrajectory($body)
    {
        return $this->restful("POST", "/information/export/waste/trajectory", $body);
    }

    /**
     * 获取厂家列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/factoryListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function factoryList($body)
    {
        return $this->restful("GET", "/stock/factory/list", $body);
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
     * 获取医院列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/HospitalController/getListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getHospitalList($body)
    {
        return $this->restful("POST", "/hospital/getList", $body);
    }

    /**
     * 获取医院密钥
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/HospitalController/getSecretAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getHospitalSecret($body)
    {
        return $this->restful("POST", "/openapi/hospital/getsecret", $body);
    }

    /**
     * 查询订单信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/getOrderInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrderInfo($body)
    {
        return $this->restful("POST", "/openapi/order/info", $body);
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
     * 查询订单检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/getOrderReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getOrderReport($body)
    {
        return $this->restful("POST", "/openapi/order/report", $body);
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
     * 查询异常单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/getStockAbnormalAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStockAbnormalCommodity($body)
    {
        return $this->restful("POST", "/stock/abnormal/get/commodity", $body);
    }

    /**
     * 查询出库单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/getStockBackAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStockBackCommodity($body)
    {
        return $this->restful("POST", "/stock/back/get/commodity", $body);
    }

    /**
     * 查询出库单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/getStockOutAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getStockOutCommodity($body)
    {
        return $this->restful("POST", "/stock/out/get/commodity", $body);
    }

    /**
     * 获取支持的城市列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/CityController/supportListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSupportCitys($body)
    {
        return $this->restful("POST", "/openapi/city/supportlist", $body);
    }

    /**
     * 获取支持的检查项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/InspectionController/supportListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function getSupportInspection($body)
    {
        return $this->restful("POST", "/openapi/inspection/supportlist", $body);
    }

    /**
     * 操作出库单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/handleStockOutAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function handleStockOut($body)
    {
        return $this->restful("POST", "/stock/out/handle", $body);
    }

    /**
     * 基本资料
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/basicListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationBasicList($body)
    {
        return $this->restful("GET", "/information/basic", $body);
    }

    /**
     * 线路详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineDetail($body)
    {
        return $this->restful("POST", "/information/line/detail", $body);
    }

    /**
     * 环境参数列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineEnvironmentAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineEnv($body)
    {
        return $this->restful("POST", "/information/line/environment", $body);
    }

    /**
     * 线路列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineList($body)
    {
        return $this->restful("POST", "/information/line/list", $body);
    }

    /**
     * 室内质控
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineQualityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineQuality($body)
    {
        return $this->restful("POST", "/information/line/quality", $body);
    }

    /**
     * 行驶轨迹接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineTrajectoryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineTra($body)
    {
        return $this->restful("POST", "/information/line/trajectory", $body);
    }

    /**
     * 医废处理接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineWasteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationLineWaste($body)
    {
        return $this->restful("POST", "/information/line/waste", $body);
    }

    /**
     * 团队人员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/teamListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationTeamList($body)
    {
        return $this->restful("POST", "/information/team/list", $body);
    }

    /**
     * 医废轨迹
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/wasteTrajectoryAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function informationWasteTra($body)
    {
        return $this->restful("POST", "/information/line/waste/trajectory", $body);
    }

    /**
     * 关联质检项信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionInfoController/associQualityControlInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inspectionAssociQuality($body)
    {
        return $this->restful("POST", "/inspection/associ/quality", $body);
    }

    /**
     * 增加检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inspectionVanAdd($body)
    {
        return $this->restful("POST", "/inspection/van/add", $body);
    }

    /**
     * 车牌列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inspectionVanList($body)
    {
        return $this->restful("GET", "/inspection/van/list", $body);
    }

    /**
     * 恢复检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/recoverAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inspectionVanRecover($body)
    {
        return $this->restful("POST", "/inspection/van/recover", $body);
    }

    /**
     * 修理检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/repairAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function inspectionVanRepair($body)
    {
        return $this->restful("POST", "/inspection/van/repair", $body);
    }

    /**
     * 获取指定时间内线路号
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/LineController/getLineNoByDateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function lineGetBoByDate($body)
    {
        return $this->restful("POST", "/line/search/date", $body);
    }

    /**
     * Mock检查任务链路数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockInpectionLinkAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function mockInpectionLink($body)
    {
        return $this->restful("POST", "/mock/inspection/link", $body);
    }

    /**
     * Mock订单数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockOrderAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function mockOrder($body)
    {
        return $this->restful("POST", "/mock/mockOrder", $body);
    }

    /**
     * 查询订单患者信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/patientInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function orderPatientInfo($body)
    {
        return $this->restful("POST", "/order/patientinfo", $body);
    }

    /**
     * 增加质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function qualityControlItemAdd($body)
    {
        return $this->restful("POST", "/quality-control/item", $body);
    }

    /**
     * 隐藏质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/hideItemAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function qualityControlItemHide($body)
    {
        return $this->restful("POST", "/quality-control/item/hide", $body);
    }

    /**
     * 质检项信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function qualityControlItemInfo($body)
    {
        return $this->restful("POST", "/quality-control/item/info", $body);
    }

    /**
     * 质检项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function qualityControlItemList($body)
    {
        return $this->restful("POST", "/quality-control/item/list", $body);
    }

    /**
     * 显示质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/showItemAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function qualityControlItemShow($body)
    {
        return $this->restful("POST", "/quality-control/item/show", $body);
    }

    /**
     * 订单退单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/refundAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function refundOrder($body)
    {
        return $this->restful("POST", "/order/refund", $body);
    }

    /**
     * 审批报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportApprove($body)
    {
        return $this->restful("POST", "/report/approve", $body);
    }

    /**
     * 报告审批详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportApproveDetail($body)
    {
        return $this->restful("POST", "/report/approve/detail", $body);
    }

    /**
     * 报告审批列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportApproveList($body)
    {
        return $this->restful("POST", "/report/approve/list", $body);
    }

    /**
     * 审批状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveStatusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportApproveStatusList($body)
    {
        return $this->restful("POST", "/report/approve/status/list", $body);
    }

    /**
     * 检查报告详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/detailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportDetail($body)
    {
        return $this->restful("POST", "/report/detail", $body);
    }

    /**
     * 添加检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/addAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportDetectionAdd($body)
    {
        return $this->restful("POST", "/report/detection/add", $body);
    }

    /**
     * 检查报告列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/listAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportDetectionList($body)
    {
        return $this->restful("POST", "/report/detection/list", $body);
    }

    /**
     * 作废报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/invalidReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportInvalid($body)
    {
        return $this->restful("POST", "/report/invalid", $body);
    }

    /**
     * 报告操作记录
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/reportLogAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportOpLogList($body)
    {
        return $this->restful("POST", "/report/oplog/list", $body);
    }

    /**
     * 添加质控报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportQualityAdd($body)
    {
        return $this->restful("POST", "/report/quality/add", $body);
    }

    /**
     * 质控报告版本详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportQualityDetail($body)
    {
        return $this->restful("POST", "/report/quality/detail", $body);
    }

    /**
     * 质控报告列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportQualityList($body)
    {
        return $this->restful("POST", "/report/quality/list", $body);
    }

    /**
     * 驳回报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/rejectdReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportRejected($body)
    {
        return $this->restful("POST", "/report/rejected", $body);
    }

    /**
     * 增加检查项报告模板
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemAddAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportTemplateItemAdd($body)
    {
        return $this->restful("POST", "/report-template/item/add", $body);
    }

    /**
     * 删除检查报告明细模板
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemTemplateDeleteAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportTemplateItemDelete($body)
    {
        return $this->restful("DELETE", "/report-template/item", $body);
    }

    /**
     * 检查项报告模板列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportTemplateItemList($body)
    {
        return $this->restful("POST", "/report-template/item/list", $body);
    }

    /**
     * 报告版本详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/versionDetailAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportVersionDetail($body)
    {
        return $this->restful("POST", "/report/version/detail", $body);
    }

    /**
     * 报告版本列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/reportVersionListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function reportVersionList($body)
    {
        return $this->restful("POST", "/report/version/list", $body);
    }

    /**
     * 查询商品信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/searchCommodityAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function searchCommodity($body)
    {
        return $this->restful("POST", "/stock/in/search/commodity", $body);
    }

    /**
     * 异常单列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/stockAbnormalListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockAbnormalList($body)
    {
        return $this->restful("POST", "/stock/abnormal/list", $body);
    }

    /**
     * 回仓列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/stockBackListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockBackList($body)
    {
        return $this->restful("POST", "/stock/back/list", $body);
    }

    /**
     * 入库列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/stockInListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockInList($body)
    {
        return $this->restful("POST", "/stock/in/list", $body);
    }

    /**
     * 库存列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/stockListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockList($body)
    {
        return $this->restful("POST", "/stock/list", $body);
    }

    /**
     * 出库列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/stockOutListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockOutList($body)
    {
        return $this->restful("POST", "/stock/out/list", $body);
    }

    /**
     * 获取出库单状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/statusListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function stockOutStatusList($body)
    {
        return $this->restful("GET", "/stock/out/status/list", $body);
    }

    /**
     * 获取仓库列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/storageListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function storageList($body)
    {
        return $this->restful("POST", "/stock/storage/list", $body);
    }

    /**
     * 获取检查任务基础信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionInfo($body)
    {
        return $this->restful("POST", "/task/inspection/info", $body);
    }

    /**
     * 检测任务列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionList($body)
    {
        return $this->restful("POST", "/task/inspection/list", $body);
    }

    /**
     * 根据物料编号查询对应的检查任务
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/materialNoSearchInspectionTaskAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionMaterialSearch($body)
    {
        return $this->restful("POST", "/task/inspection/material/search", $body);
    }

    /**
     * 确认收样
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/receivedAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionReceived($body)
    {
        return $this->restful("POST", "/task/inspection/received", $body);
    }

    /**
     * 获取任务对应的检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/searchReportAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionReport($body)
    {
        return $this->restful("POST", "/task/inspection/report", $body);
    }

    /**
     * 检测任务统计
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskStatAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function taskInspectionStat($body)
    {
        return $this->restful("POST", "/task/inspection/stat", $body);
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
     * 获取可下载的连接(oss-url)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/urlSignAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadUrlSign($body)
    {
        return $this->restful("POST", "/upload/url/sign/oss", $body);
    }

    /**
     * 获取可下载的连接(attachment-id)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/urlSignInfoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function uploadUrlSignInfo($body)
    {
        return $this->restful("POST", "/upload/url/sign/id", $body);
    }

    /**
     * 获取用户列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/userListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function userList($body)
    {
        return $this->restful("POST", "/user/list", $body);
    }
}
