<?php
/**
 * @author: zmh
 * @date: 2018-10-08
 */
namespace Uniondrug\ServiceSdk\Modules;

use Uniondrug\ServiceSdk\Sdk;
use Uniondrug\ServiceSdk\ServiceSdkInterface;

class TagSdk extends Sdk implements ServiceSdkInterface
{
    protected $serviceName = 'tag';

    /**
     * 根据传入的标签返回搜索到的商品id
     * @link https://uniondrug.coding.net/p/module.tag/git/blob/development/docs/api/TagController/searchAction.md
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getGoodsIdsByTag($body)
    {
        return $this->restful(static::METHOD_POST, "/tag/goods", $body);
    }

    /**
     * 热门搜索
     * @link https://uniondrug.coding.net/p/module.tag/git/blob/development/docs/api/TagController/hotAction.md
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getHotTag($body)
    {
        return $this->restful(static::METHOD_POST, "/tag/hot", $body);
    }

    /**
     * 分类列表
     * @link https://uniondrug.coding.net/p/module.tag/git/blob/development/docs/api/CategoryController/listsAction.md
     *
     * @param $body
     *
     * @return \Uniondrug\Service\ClientResponseInterface
     */
    public function getCategoryList($body)
    {
        return $this->restful(static::METHOD_POST, "/category/list", $body);
    }
}