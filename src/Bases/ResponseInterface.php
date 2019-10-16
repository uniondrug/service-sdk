<?php
/**
 * @author wsfuyibing <websearch@163.com>
 * @date   2019-10-16
 */
namespace Uniondrug\ServiceSdk\Bases;

/**
 * ResponseInterface
 * @package Uniondrug\ServiceSdk\Bases
 */
interface ResponseInterface
{
    /**
     * @return string
     */
    public function __toString();

    /**
     * @return string
     */
    public function getContents();

    /**
     * @return \stdClass
     */
    public function getData();

    /**
     * @return double
     */
    public function getDuration();

    /**
     * @return int
     */
    public function getErrno();

    /**
     * @return string
     */
    public function getError();

    /**
     * @return string
     */
    public function getUrl();

    /**
     * @return bool
     */
    public function hasError();

    /**
     * @return array
     */
    public function toArray();
}