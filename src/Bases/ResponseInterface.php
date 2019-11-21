<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-29
 */
namespace Uniondrug\ServiceSdk\Bases;

/**
 * SDK结果标准化
 * @package Uniondrug\ServiceSdk\Bases
 */
interface ResponseInterface
{
    /**
     * 原始内容
     * @return string
     */
    public function __toString();

    /**
     * 原始内容
     * @return string
     */
    public function getContents();

    /**
     * 返回数据
     * @return \stdClass|array
     */
    public function getData();

    /**
     * 执行时长
     * @return double
     */
    public function getDuration();

    /**
     * 错误编号
     * @return int
     */
    public function getErrno();

    /**
     * 错误原因
     * @return string
     */
    public function getError();

    /**
     * 请求URL
     * @return string
     */
    public function getUrl();

    /**
     * 是否有错误
     * @return bool
     */
    public function hasError();

    /**
     * 结果转数组
     * @return array
     */
    public function toArray();

    /**
     * 结果转JSON
     * @return string
     */
    public function toJson();
}
