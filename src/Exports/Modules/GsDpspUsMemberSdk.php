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
 * Class GsDpspUsMemberSdk
 * @package Uniondrug\ServiceSdk\Exports\Modules
 */
class GsDpspUsMemberSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'gs-dpsp-us-member';

    /**
     * 连锁开通会员服务
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardActivate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/activate", $body, $query, $extra);
    }

    /**
     * 连锁会员卡列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/list", $body, $query, $extra);
    }

    /**
     * 连锁会员卡详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/detail", $body, $query, $extra);
    }

    /**
     * 连锁会员卡更新
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function cardUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/card/update", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案列表
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeList($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/list", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案详情
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeDetail($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/detail", $body, $query, $extra);
    }

    /**
     * 连锁会员卡方案更新
     * @param $body
     * @param null $query
     * @param null $extra
     * @return \Uniondrug\ServiceSdk\Bases\Response|ResponseInterface
     */
    public function schemeUpdate($body, $query = null, $extra = null)
    {
        return $this->restful("POST", "/scheme/update", $body, $query, $extra);
    }
}
