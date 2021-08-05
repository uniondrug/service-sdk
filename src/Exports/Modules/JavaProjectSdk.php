<?php
/**
 * @Author QinGuoFeng
 * @Date   2020-04-22
 * @Time   10:49:27
 * @Email qinguofeng@uniondrug.cn
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Bases\ResponseInterface;
use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;

class JavaProjectSdk extends SdkBase
{
    /**
     * 服务名称
     * @var string
     */
    protected $serviceName = 'java.project';

    /**
     * 查询兑换码
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function search($body)
    {
        return $this->restful("POST", "/code/search", $body);
    }
    public function autoCheck($body)
    {
        return $this->restful("POST", "/code/autoCheck", $body);
    }

    /**
     * 创建激活设置
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingCreate($body)
    {
        return $this->restful("POST", "/activate/setting/create", $body);
    }
    /**
     * 创建激活设置
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingEdit($body)
    {
        return $this->restful("POST", "/activate/setting/edit", $body);
    }
    /**
     * 查看激活设置详情
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingDetail($body)
    {
        return $this->restful("POST", "/activate/setting/detail", $body);
    }

    /**
     * 激活设置列表（带分页）
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingPaging($body)
    {
        return $this->restful("POST", "/activate/setting/paging", $body);
    }

    /**
     * 启用配置
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingEnable($body)
    {
        return $this->restful("POST", "/activate/setting/enable", $body);
    }

    /**
     * 停用配置
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingDisable($body)
    {
        return $this->restful("POST", "/activate/setting/disable", $body);
    }

    /**
     * 根据项目或批次查询配置
     * @param $body
     * @return ResponseInterface
     */
    public function activateSettingGetByPurchaseProjectIdAndPurchasePileId($body)
    {
        return $this->restful("POST", "/activate/setting/getByPurchaseProjectIdAndPurchasePileId", $body);
    }
}