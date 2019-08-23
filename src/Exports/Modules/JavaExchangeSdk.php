<?php
/**
 * Created by PhpStorm.
 * User: zhupengfei
 * Date: 2019-08-23
 * Time: 18:06
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Responses\ResponseInterface;

class JavaExchangeSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'java.exchange.module';

    /**
     * 添加商户
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/merchant_add.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function addMerchant($body)
    {
        return $this->restful("POST", "/exchange/merchant/add", $body);
    }

    /**
     * 商户详情
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/merchant_detail.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function detailMerchant($body)
    {
        return $this->restful("POST", "/exchange/merchant/detail", $body);
    }

    /**
     * 修改商户
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/merchant_edit.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function editMerchant($body)
    {
        return $this->restful("POST", "/exchange/merchant/edit", $body);
    }

    /**
     * 商户列表
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/merchant_list.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function listMerchant($body)
    {
        return $this->restful("POST", "/exchange/merchant/list", $body);
    }

    /**
     * 用户查询
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/merchant_member_query.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function queryUser($body)
    {
        return $this->restful("POST", "/exchange/user/query", $body);
    }

    /**
     * 汇兑明细列表
     * @link https://uniondrug.coding.net/p/java.middlend.exchangecenter/git/blob/feature/feature_init/docs/exchangeList.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function list($body)
    {
        return $this->restful("POST", "/exchange/list", $body);
    }
}