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
 * @date   2020-08-17
 * @time   Mon, 17 Aug 2020 10:08:01 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

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
     * 保存预约单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/AppointmentNoteController/addAppointmentNoteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addAppointmentNote($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appointment/add", $body, $query, $extra);
    }

    /**
     * 新增入库
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/addCommodityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/in/add/commodity", $body, $query, $extra);
    }

    /**
     * 保存履约线路
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/PerformanceController/addPerformanceNoteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addPerformanceNote($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/performance/add", $body, $query, $extra);
    }

    /**
     * 保存推荐线路
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/RecommendedNoteController/addRecommendedListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addRecommendedList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recommended/add", $body, $query, $extra);
    }

    /**
     * 新增异常单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/addStockAbnormalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addStockAbnormal($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/abnormal/add", $body, $query, $extra);
    }

    /**
     * 新增回仓单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/addStockBackAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function addStockBack($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/back/add", $body, $query, $extra);
    }

    /**
     * 权限关联角色
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/PrivilegesController/associatedRoleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function associatedRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/associated/role", $body, $query, $extra);
    }

    /**
     * 订单取消预约
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/cancelAppointmentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cancelAppointmentOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/cancelAppointment", $body, $query, $extra);
    }

    /**
     * 获取所有城市列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/CityController/cityAllListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityAllList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/city/all", $body, $query, $extra);
    }

    /**
     * 获取城市信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/CityController/cityInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/city/info", $body, $query, $extra);
    }

    /**
     * 获取城市列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/CityController/cityListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function cityList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/city/list", $body, $query, $extra);
    }

    /**
     * 获取货品列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/commodityTypeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function commodityTypeList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/stock/commodity-type/list", $body, $query, $extra);
    }

    /**
     * 创建订单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/createAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function createOrderOpenapi($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/order/create", $body, $query, $extra);
    }

    /**
     * 绑定仁科环境设备
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/DeviceController/bindRenkeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deviceBindRenke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/device/renke/bind", $body, $query, $extra);
    }

    /**
     * 禁用仁科环境设备
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/DeviceController/disableRenkeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deviceDisableRenke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/device/renke/disable", $body, $query, $extra);
    }

    /**
     * 启用仁科环境设备
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/DeviceController/enableRenkeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deviceEnableRenke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/device/renke/enable", $body, $query, $extra);
    }

    /**
     * 解绑仁科环境设备
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/DeviceController/unbindRenkeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function deviceUnbindRenke($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/device/renke/unbind", $body, $query, $extra);
    }

    /**
     * 获取一天的待处理行程列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getOneDayListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dispatchOneList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/oneDay", $body, $query, $extra);
    }

    /**
     * 获取待处理行程列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getPendingtAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function dispatchPendingList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/pendingList", $body, $query, $extra);
    }

    /**
     * 导出环境参数数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportLineEnvironmentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportLineEnvironment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/export/line/environment", $body, $query, $extra);
    }

    /**
     * 导出行驶轨迹数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportLineTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportLineTrajectory($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/export/line/trajectory", $body, $query, $extra);
    }

    /**
     * 导出医废轨迹数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/exportWasteTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function exportWasteTrajectory($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/export/waste/trajectory", $body, $query, $extra);
    }

    /**
     * 获取厂家列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/factoryListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function factoryList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/stock/factory/list", $body, $query, $extra);
    }

    /**
     * 生成线路
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/LineController/generateLineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function generateLine($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/generate", $body, $query, $extra);
    }

    /**
     * 获取订单检查项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getInspecionListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function geOrderInspectionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/inspectionList", $body, $query, $extra);
    }

    /**
     * 出库时根据线路号和城市id查询接货人列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/getAcceptUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getAcceptUser($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/out/accept/list", $body, $query, $extra);
    }

    /**
     * 根据互联网医院 APPID 获取医院信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/HospitalController/getInfoByAppIdAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getHospitalInfoByAppId($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/hospital/getInfo", $body, $query, $extra);
    }

    /**
     * 根据订单号获取互联网医院信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/HospitalController/getInfoByOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getHospitalInfoByOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/hospital/getInfoByOrderNo", $body, $query, $extra);
    }

    /**
     * 获取医院列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/HospitalController/getListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getHospitalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/hospital/getList", $body, $query, $extra);
    }

    /**
     * 获取医院回调通知地址
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/HospitalController/getNotifyUrlByOrderNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getHospitalNotifyUrlByOrderNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/hospital/getnotifyurlbyorderno", $body, $query, $extra);
    }

    /**
     * 获取医院密钥
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/HospitalController/getSecretAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getHospitalSecret($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/hospital/getsecret", $body, $query, $extra);
    }

    /**
     * 查询订单信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/getOrderInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrderInfoOpenapi($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/order/info", $body, $query, $extra);
    }

    /**
     * 查询订单列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrderList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/list", $body, $query, $extra);
    }

    /**
     * 获取订单检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/ReportController/getOrderReportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrderReportOpenapi($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/report/info", $body, $query, $extra);
    }

    /**
     * 获取订单状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/getStatusListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getOrderStatusList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/statusList", $body, $query, $extra);
    }

    /**
     * 获取履约单信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/PerformanceController/infoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getPerformanceInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/performance/info", $body, $query, $extra);
    }

    /**
     * 查询异常单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/getStockAbnormalAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getStockAbnormalCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/abnormal/get/commodity", $body, $query, $extra);
    }

    /**
     * 查询出库单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/getStockBackAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getStockBackCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/back/get/commodity", $body, $query, $extra);
    }

    /**
     * 查询出库单货品详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/getStockOutAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getStockOutCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/out/get/commodity", $body, $query, $extra);
    }

    /**
     * 获取支持的城市列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/CityController/supportListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSupportCitys($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/city/supportlist", $body, $query, $extra);
    }

    /**
     * 获取支持的检查项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/InspectionController/supportListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function getSupportInspection($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/inspection/supportlist", $body, $query, $extra);
    }

    /**
     * 操作出库单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/handleStockOutAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function handleStockOut($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/out/handle", $body, $query, $extra);
    }

    /**
     * 基本资料
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/basicListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationBasicList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/information/basic", $body, $query, $extra);
    }

    /**
     * 画行驶轨迹接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/drawTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationDrawTrajectory($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/draw/trajectory", $body, $query, $extra);
    }

    /**
     * 团队人员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/inspectorListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationInspectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/inspector/list", $body, $query, $extra);
    }

    /**
     * 线路详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/detail", $body, $query, $extra);
    }

    /**
     * 环境参数列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineEnvironmentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineEnv($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/environment", $body, $query, $extra);
    }

    /**
     * 线路列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/list", $body, $query, $extra);
    }

    /**
     * 室内质控
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineQualityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineQuality($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/quality", $body, $query, $extra);
    }

    /**
     * 行驶轨迹接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineTra($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/trajectory", $body, $query, $extra);
    }

    /**
     * 医废处理接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/lineWasteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationLineWaste($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/waste", $body, $query, $extra);
    }

    /**
     * 护士人员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/nurseListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationNurseList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/nurse/list", $body, $query, $extra);
    }

    /**
     * 医废轨迹
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Information/InformationController/wasteTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function informationWasteTra($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/information/line/waste/trajectory", $body, $query, $extra);
    }

    /**
     * 关联质检项信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionInfoController/associQualityControlInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inspectionAssociQuality($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/inspection/associ/quality", $body, $query, $extra);
    }

    /**
     * 增加检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inspectionVanAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/inspection/van/add", $body, $query, $extra);
    }

    /**
     * 车牌列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inspectionVanList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/inspection/van/list", $body, $query, $extra);
    }

    /**
     * 恢复检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/recoverAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inspectionVanRecover($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/inspection/van/recover", $body, $query, $extra);
    }

    /**
     * 修理检测车
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/InspectionVanController/repairAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function inspectionVanRepair($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/inspection/van/repair", $body, $query, $extra);
    }

    /**
     * 车辆调度
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/dispatchCarAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchCar($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/car", $body, $query, $extra);
    }

    /**
     * 调度详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/dispatchDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/detail", $body, $query, $extra);
    }

    /**
     * 线路详情-检测项目列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/inspectItemListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchInspectItem($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/inspect/item", $body, $query, $extra);
    }

    /**
     * 护士调度
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/dispatchInspectorAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchInspector($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/inspector", $body, $query, $extra);
    }

    /**
     * 线路调度列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/lineDispatchListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/list", $body, $query, $extra);
    }

    /**
     * 护士调度
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/LineDispatchController/dispatchNurseAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineDispatchNurse($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/dispatch/nurse", $body, $query, $extra);
    }

    /**
     * 获取指定时间内线路号
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/LineController/getLineNoByDateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function lineGetBoByDate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/line/search/date", $body, $query, $extra);
    }

    /**
     * 登录接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/LoginController/loginAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function login($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/login", $body, $query, $extra);
    }

    /**
     * 待处理行程地图接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getMapPenddingAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mapPendingDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/mapPending", $body, $query, $extra);
    }

    /**
     * 确认行程地图接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getMapPerformanceAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mapPerformanceDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/mapPerformance", $body, $query, $extra);
    }

    /**
     * 推荐行程地图接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getMapRecommendedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mapRecommendedDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/mapRecommended", $body, $query, $extra);
    }

    /**
     * Mock环境参数数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockEnvironmentAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mockEnvironment($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mock/environment", $body, $query, $extra);
    }

    /**
     * Mock检查任务链路数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockInpectionLinkAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mockInpectionLink($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mock/inspection/link", $body, $query, $extra);
    }

    /**
     * Mock订单数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockOrderAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mockOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mock/mockOrder", $body, $query, $extra);
    }

    /**
     * Mock出库单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockStockOutAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mockStockOut($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mock/stock/out", $body, $query, $extra);
    }

    /**
     * Mock轨迹数据
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/MockController/mockTrajectoryAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function mockTrajectory($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/mock/trajectory", $body, $query, $extra);
    }

    /**
     * 修改预约单状态
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/AppointmentNoteController/modifyAppointmentNoteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyAppointmentNote($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/appointment/modify", $body, $query, $extra);
    }

    /**
     * 修改履约单状态
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/PerformanceController/modifyPerformanceNoteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyPerformanceNote($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/performance/modify", $body, $query, $extra);
    }

    /**
     * 修改推荐状态
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/RecommendedNoteController/modifyRecommendeListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function modifyRecommendedLineList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/recommended/modify", $body, $query, $extra);
    }

    /**
     * 查询订单患者信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/patientInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function orderPatientInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/patientinfo", $body, $query, $extra);
    }

    /**
     * 获取已确认行程列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getPerformanceListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function performanceDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/performance", $body, $query, $extra);
    }

    /**
     * 判断履约冲突
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/PerformanceController/conflictPerformanceNoteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function performanceNoteConflict($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/performance/conflict", $body, $query, $extra);
    }

    /**
     * 增加质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qualityControlItemAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/quality-control/item", $body, $query, $extra);
    }

    /**
     * 隐藏质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/hideItemAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qualityControlItemHide($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/quality-control/item/hide", $body, $query, $extra);
    }

    /**
     * 质检项信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qualityControlItemInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/quality-control/item/info", $body, $query, $extra);
    }

    /**
     * 质检项列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/itemListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qualityControlItemList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/quality-control/item/list", $body, $query, $extra);
    }

    /**
     * 显示质检项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/QualityControlController/showItemAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function qualityControlItemShow($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/quality-control/item/show", $body, $query, $extra);
    }

    /**
     * 用户推荐行程列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getUserRecommendedListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recommendDispatchList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/user/recommended", $body, $query, $extra);
    }

    /**
     * 推荐线路
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Dispatch/DispatchController/getRecommendedLineAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function recommendedLineList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/dispatch/recommendedLine", $body, $query, $extra);
    }

    /**
     * 刷新用户信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/LoginController/refreshTokenAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refreshToken($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/refresh/token", $body, $query, $extra);
    }

    /**
     * 订单退单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/OrderController/refundAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refundOrder($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/order/refund", $body, $query, $extra);
    }

    /**
     * 退单
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Openapi/OrderController/refundAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function refundOrderOpenapi($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/openapi/order/refund", $body, $query, $extra);
    }

    /**
     * 解除关联角色
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/PrivilegesController/relieveRoleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function relieveRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/relieve/role", $body, $query, $extra);
    }

    /**
     * 审批报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveReportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportApprove($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/approve", $body, $query, $extra);
    }

    /**
     * 报告审批详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportApproveDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/approve/detail", $body, $query, $extra);
    }

    /**
     * 报告审批列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportApproveList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/approve/list", $body, $query, $extra);
    }

    /**
     * 审批状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/approveStatusListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportApproveStatusList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/approve/status/list", $body, $query, $extra);
    }

    /**
     * 检查报告详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/detailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/detail", $body, $query, $extra);
    }

    /**
     * 添加检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/addAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportDetectionAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/detection/add", $body, $query, $extra);
    }

    /**
     * 检查报告列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/listAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportDetectionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/detection/list", $body, $query, $extra);
    }

    /**
     * 作废报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/invalidReportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportInvalid($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/invalid", $body, $query, $extra);
    }

    /**
     * 报告操作记录
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/reportLogAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportOpLogList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/oplog/list", $body, $query, $extra);
    }

    /**
     * 添加质控报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportQualityAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/quality/add", $body, $query, $extra);
    }

    /**
     * 质控报告版本详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportQualityDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/quality/detail", $body, $query, $extra);
    }

    /**
     * 质控报告列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/qualityListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportQualityList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/quality/list", $body, $query, $extra);
    }

    /**
     * 驳回报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/rejectdReportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportRejected($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/rejected", $body, $query, $extra);
    }

    /**
     * 增加检查项报告模板
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemAddAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportTemplateItemAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report-template/item/add", $body, $query, $extra);
    }

    /**
     * 删除检查报告明细模板
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemTemplateDeleteAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportTemplateItemDelete($body, $query = null, $extra = null)
    {
        return $this->restful("DELETE", "/report-template/item", $body, $query, $extra);
    }

    /**
     * 检查项报告模板列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportTemplateController/itemListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportTemplateItemList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report-template/item/list", $body, $query, $extra);
    }

    /**
     * 报告版本详情
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/versionDetailAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportVersionDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/version/detail", $body, $query, $extra);
    }

    /**
     * 报告版本列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Detection/ReportController/reportVersionListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function reportVersionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/report/version/list", $body, $query, $extra);
    }

    /**
     * 保存城市通讯地址
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/CityController/savePostalAddressAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function savePostalAddress($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/city/postaladdress/save", $body, $query, $extra);
    }

    /**
     * 添加权限基础信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/PrivilegesController/savePrivilegeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function savePrivilege($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/save", $body, $query, $extra);
    }

    /**
     * 添加权限菜单基础信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/PrivilegesController/savePrivilegeMenuAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function savePrivilegeMenu($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/save/menu", $body, $query, $extra);
    }

    /**
     * 保存角色信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/PrivilegesController/saveRoleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function saveRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/privilege/save/role", $body, $query, $extra);
    }

    /**
     * 查询商品信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/searchCommodityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function searchCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/in/search/commodity", $body, $query, $extra);
    }

    /**
     * 根据sku查询商品信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/skuSearchCommodityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function skuSearchCommodity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/in/sku/search/commodity", $body, $query, $extra);
    }

    /**
     * 异常单列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockAbnormalController/stockAbnormalListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockAbnormalList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/abnormal/list", $body, $query, $extra);
    }

    /**
     * 回仓列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockBackController/stockBackListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockBackList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/back/list", $body, $query, $extra);
    }

    /**
     * 入库列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockInController/stockInListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockInList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/in/list", $body, $query, $extra);
    }

    /**
     * 库存列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/stockListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/list", $body, $query, $extra);
    }

    /**
     * 出库列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/stockOutListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockOutList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/out/list", $body, $query, $extra);
    }

    /**
     * 获取出库单状态列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockOutController/statusListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function stockOutStatusList($body, $query = null, $extra = null)
    {
        return $this->restful("GET", "/stock/out/status/list", $body, $query, $extra);
    }

    /**
     * 获取仓库列表接口
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/Stock/StockController/storageListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function storageList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/stock/storage/list", $body, $query, $extra);
    }

    /**
     * 保存ID生成器业务项
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/System/IdGeneratorController/saveBusinesAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemIdGeneratorSave($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/id/save", $body, $query, $extra);
    }

    /**
     * 修复reportNo
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/System/AsycRaskController/fixReportNoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemSyncFixReportNo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/sync/fix-report-no", $body, $query, $extra);
    }

    /**
     * 增加用户
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/addUserAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAdd($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/add", $body, $query, $extra);
    }

    /**
     * 新增用户资格证书
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/addUserCertificateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAddCertificate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/add/certificate", $body, $query, $extra);
    }

    /**
     * 新增用户成绩
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/addUserGradeAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAddGrade($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/add/grade", $body, $query, $extra);
    }

    /**
     * 新增用户电子签名
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/addUserSignAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAddSign($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/add/sign", $body, $query, $extra);
    }

    /**
     * 关联用户城市
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/associateCityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAssociateCity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/associate/city", $body, $query, $extra);
    }

    /**
     * 关联用户角色
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/associateRoleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserAssociateRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/associate/role", $body, $query, $extra);
    }

    /**
     * 删除用户资料
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/delUserCertificateAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserDelCertificate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/del/certificate", $body, $query, $extra);
    }

    /**
     * 获取驾驶员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/driverListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserDriverList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/driver/list", $body, $query, $extra);
    }

    /**
     * 获取检测员列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/inspectorListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserInspectorList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/inspector/list", $body, $query, $extra);
    }

    /**
     * 获取用户列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/userListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/list", $body, $query, $extra);
    }

    /**
     * 获取护士列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/nurseListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserNurseList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/nurse/list", $body, $query, $extra);
    }

    /**
     * 解除用户城市
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/relieveCityAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserRelieveCity($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/relieve/city", $body, $query, $extra);
    }

    /**
     * 解除用户角色
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/SystemUsersController/relieveRoleAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function systemUserRelieveRole($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/system/user/relieve/role", $body, $query, $extra);
    }

    /**
     * 任务人员指派列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/taskAssignListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskAssignList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/assign/list", $body, $query, $extra);
    }

    /**
     * 获取检查任务基础信息
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/info", $body, $query, $extra);
    }

    /**
     * 检测任务列表
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskListAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/list", $body, $query, $extra);
    }

    /**
     * 根据物料编号查询对应的检查任务
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/materialNoSearchInspectionTaskAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionMaterialSearch($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/material/search", $body, $query, $extra);
    }

    /**
     * 确认收样
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/receivedAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionReceived($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/received", $body, $query, $extra);
    }

    /**
     * 获取任务对应的检查报告
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/searchReportAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionReport($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/report", $body, $query, $extra);
    }

    /**
     * 检测任务统计
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/TaskController/inspectionTaskStatAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function taskInspectionStat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/task/inspection/stat", $body, $query, $extra);
    }

    /**
     * 文件上传
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/uploadFileAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadFile($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/upload/file", $body, $query, $extra);
    }

    /**
     * 获取指定文件名的可下载链接(attachemnt_id)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/signUrlByIdAssignFileNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadIdDownloadInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/upload/id/download/filename", $body, $query, $extra);
    }

    /**
     * 获取指定文件名的可下载链接(url)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/signUrlByStrAssignFileNameAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadUrlDownload($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/upload/url/download/filename", $body, $query, $extra);
    }

    /**
     * 获取可下载的连接(oss-url)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/urlSignAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadUrlSign($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/upload/url/sign/oss", $body, $query, $extra);
    }

    /**
     * 获取可下载的连接(attachment-id)
     * @link https://uniondrug.coding.net/p/module.inspection/git/blob/development/docs/api/UploadController/urlSignInfoAction.md
     * @param array|object $body 入参类型
     * @param null $query  Query数据
     * @param null $extra  请求头信息
     * @return ResponseInterface
     */
    public function uploadUrlSignInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/upload/url/sign/id", $body, $query, $extra);
    }
}
