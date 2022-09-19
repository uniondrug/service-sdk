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
 * Class GsNrspUdchSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsNrspUdchSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-nrsp-udch';

    /**
     * 获取第三方应用授权链接
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tokenAuthUrl($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/auth/url", $body, $query, $extra);
    }

    /**
     * 连锁开通企微
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function merchantOpen($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/token/permanent/code/create", $body, $query, $extra);
    }

    /**
     * 部门列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function departmentList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/department/list", $body, $query, $extra);
    }

    /**
     * 部门下成员列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function departmentUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/user/list", $body, $query, $extra);
    }

    /**
     * 开通席位的成员列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function departmentUserSeatList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/organization/user/seat/list", $body, $query, $extra);
    }

    /**
     * 部门下成员详情
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function wxUserDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/oauth/user/detail", $body, $query, $extra);
    }

    /**
     * 客户列表
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function externalUserList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/external/user/list", $body, $query, $extra);
    }

    /**
     * 批量获取客户详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function externalBatchUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/external/batch/user/info", $body, $query, $extra);
    }

    /**
     * 获取客户详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function externalUserInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/external/user/info", $body, $query, $extra);
    }

    /**
     * 联系客户统计
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function externalUserStat($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/external/user/stat", $body, $query, $extra);
    }

    /**
     * 获取登录链接
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function oauthAuthUrl($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/oauth/auth/url", $body, $query, $extra);
    }

    /**
     * 获取登录信息
     * @param      $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function oauthLoginInfo($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/oauth/login/info", $body, $query, $extra);
    }

    /**
     * 标签同步
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagSync($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/sync", $body, $query, $extra);
    }

    /**
     * 标签创建
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagCreate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/create", $body, $query, $extra);
    }

    /**
     * 标签详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/detail", $body, $query, $extra);
    }

    /**
     * 标签更新
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/update", $body, $query, $extra);
    }

    /**
     * 标签组删除
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagGroupDel($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/group/del", $body, $query, $extra);
    }

    /**
     * 标签列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/list", $body, $query, $extra);
    }

    /**
     * 标签排序
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagSort($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/sort", $body, $query, $extra);
    }

    /**
     * 标签同步状态
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function tagSyncStatus($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/tag/sync/status", $body, $query, $extra);
    }

    /**
     * 图片上传
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function mediaImgUpload($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/media/img/upload", $body, $query, $extra);
    }
}
