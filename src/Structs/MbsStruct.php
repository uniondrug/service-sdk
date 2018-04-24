<?php
/**
 * 从消息队列获取的数据结构
 */
namespace Uniondrug\ServiceSdk\Structs;

use Uniondrug\Structs\Struct;

/**
 * @package App\Structs
 */
class MbsStruct extends Struct
{
    /**
     * @var string
     */
    public $messageId;

    /**
     * @var string
     */
    public $messageBody;

    /**
     * @var string
     */
    public $messageBodyMD5;

    /**
     * @var string
     */
    public $topicMessageId;

    /**
     * @var string
     */
    public $topicMessageBody;

    /**
     * @var string
     */
    public $topicMessageBodyMD5;

    /**
     * @var string
     */
    public $topicMessageTag;
}
