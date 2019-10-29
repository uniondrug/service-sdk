<?php

namespace App\Controllers\Order;

use App\Controllers\Abstracts\Base;
use App\Logics\Order\CreateLogic;
use App\Logics\Order\CreateNewLogic;
use App\Logics\Order\orderStatusLogic;

/**
 * 订单服务
 * @package App\Controllers\Order
 * @RoutePrefix("/order")
 */
class OrderController extends Base
{
    /**
     * 订单创建
     * @Route("/create")
     * @input \App\Structs\Requests\Order\Create\CreateStruct
     * @output \App\Structs\Results\Order\Create\ResultCreateStruct
     * @sdk orderCreate
     */
    public function createAction()
    {
        $struct = CreateLogic::factory($this->request->getJsonRawBody());
        return $this->serviceServer->withStruct($struct);
    }

    /**
     * 新订单创建
     * @Route("/createNew")
     * @input \App\Structs\Requests\Order\Create\CreateNewStruct
     * @output \App\Structs\Results\Order\CreateNew\ResultCreateNewStruct
     * @sdk createNew
     */
    public function createNewAction()
    {
        $struct = CreateNewLogic::factory($this->request->getJsonRawBody());
        return $this->serviceServer->withStruct($struct);
    }

    /**
     * 查询订单状态
     * @Route("/orderStatus")
     * @input \App\Structs\Requests\Order\Create\CreateNewStruct
     * @output \App\Structs\Results\Order\CreateNew\ResultCreateNewStruct
     * @sdk orderStatus
     */
    public function orderStatusAction()
    {
        $struct = orderStatusLogic::factory($this->request->getJsonRawBody());
        return $this->serviceServer->withStruct($struct);
    }
}