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
 * @date   2019-07-31
 * @time   Wed, 31 Jul 2019 18:24:46 +0800
 */
namespace Uniondrug\ServiceSdk\Exports\Modules;

use Uniondrug\ServiceSdk\Exports\Abstracts\SdkBase;
use Uniondrug\ServiceSdk\Bases\ResponseInterface;

/**
 * RobotSdk
 * @package Uniondrug\ServiceSdk\Modules
 */
class RobotSdk extends SdkBase
{
    /**
     * 服务名称
     * 自来`postman.json`文件定义的`sdkService`值
     * @var string
     */
    protected $serviceName = 'robot.module';

    /**
     * 添加机器人
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/addRobotAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotAddRobot($body)
    {
        return $this->restful("POST", "/robot/addRobot", $body);
    }

    /**
     * 添加机器人发送消息的成员
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/addUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserAddUser($body)
    {
        return $this->restful("POST", "/robotDingUser/addUser", $body);
    }

    /**
     * 通过Id查询成员
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/getRobotByUserIdAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserGetRobotByUserId($body)
    {
        return $this->restful("POST", "/robotDingUser/getRobotByUserId", $body);
    }

    /**
     * 通过Key查询的成员信息(List)
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/getRobotByUserListAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserGetRobotByUserList($body)
    {
        return $this->restful("POST", "/robotDingUser/getRobotByUserList", $body);
    }

    /**
     * 通过Key查询的成员信息(Page)
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/getRobotByUserPageAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserGetRobotByUserPage($body)
    {
        return $this->restful("POST", "/robotDingUser/getRobotByUserPage", $body);
    }

    /**
     * 修改机器人关联的成员信息
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/updateUserAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserUpdateUser($body)
    {
        return $this->restful("POST", "/robotDingUser/updateUser", $body);
    }

    /**
     * 修改成员状态为开启
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/updateUserNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserUpdateUserNo($body)
    {
        return $this->restful("POST", "/robotDingUser/updateUserNo", $body);
    }

    /**
     * 修改成员状态为停用
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotDingUserController/updateUserOffAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotDingUserUpdateUserOff($body)
    {
        return $this->restful("POST", "/robotDingUser/updateUserOff", $body);
    }

    /**
     * 查询机器人
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/getRobotAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotGetRobot($body)
    {
        return $this->restful("POST", "/robot/getRobot", $body);
    }

    /**
     * 日志查询(List)
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotLogController/getLogListRobotAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotLogGetLogListRobot($body)
    {
        return $this->restful("POST", "/robotLog/getLogListRobot", $body);
    }

    /**
     * 分页查询机器人信息
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/pagingAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotPaging($body)
    {
        return $this->restful("POST", "/robot/paging", $body);
    }

    /**
     * 发送机器人消息
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/sendMessageAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotSendMessage($body)
    {
        return $this->restful("POST", "/robot/sendMessage", $body);
    }

    /**
     * 修改机器人信息
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/updateAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotUpdate($body)
    {
        return $this->restful("POST", "/robot/update", $body);
    }

    /**
     * 修改机器人状态启用方法
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/updateStatusNoAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotUpdateStatusNo($body)
    {
        return $this->restful("POST", "/robot/updateStatusNo", $body);
    }

    /**
     * 修改机器人状态停用方法
     * @link https://uniondrug.coding.net/p/module.robot/git/blob/development/docs/api/RobotController/updateStatusOffAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function robotUpdateStatusOff($body)
    {
        return $this->restful("POST", "/robot/updateStatusOff", $body);
    }

    /**
     * 发送钉钉工作通知给员工 [单个员工]
     * @link https://uniondrug.coding.net/p/module.robot/d/module.robot/git/blob/development/docs/api/CorpconversationController/singleSendByMobileAction.md
     * @param array $body 入参类型
     * @return ResponseInterface
     */
    public function singleSendByMobile($body)
    {
        return $this->restful("POST", "/corpconversation/singleSendByMobile", $body);
    }
}
