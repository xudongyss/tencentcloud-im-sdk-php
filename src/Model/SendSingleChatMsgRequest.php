<?php
/**
 * SendSingleChatMsgRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM

 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

/**
 * SendSingleChatMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class SendSingleChatMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendSingleChatMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'syncOtherMachine' => 'int',
        'fromAccount' => 'string',
        'toAccount' => 'string',
        'msgLifeTime' => 'int',
        'msgSeq' => 'int',
        'msgRandom' => 'int',
        'msgTimeStamp' => 'int',
        'forbidCallbackControl' => 'string[]',
        'sendMsgControl' => 'string[]',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]',
        'cloudCustomData' => 'string',
        'offlinePushInfo' => '\TencentCloud\IM\Model\OfflinePushInfo',
        'isNeedReadReceipt' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'syncOtherMachine' => 'int32',
        'fromAccount' => null,
        'toAccount' => null,
        'msgLifeTime' => 'int32',
        'msgSeq' => 'int32',
        'msgRandom' => 'int32',
        'msgTimeStamp' => 'int32',
        'forbidCallbackControl' => null,
        'sendMsgControl' => null,
        'msgBody' => null,
        'cloudCustomData' => null,
        'offlinePushInfo' => null,
        'isNeedReadReceipt' => 'int32'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'syncOtherMachine' => 'SyncOtherMachine',
        'fromAccount' => 'From_Account',
        'toAccount' => 'To_Account',
        'msgLifeTime' => 'MsgLifeTime',
        'msgSeq' => 'MsgSeq',
        'msgRandom' => 'MsgRandom',
        'msgTimeStamp' => 'MsgTimeStamp',
        'forbidCallbackControl' => 'ForbidCallbackControl',
        'sendMsgControl' => 'SendMsgControl',
        'msgBody' => 'MsgBody',
        'cloudCustomData' => 'CloudCustomData',
        'offlinePushInfo' => 'OfflinePushInfo',
        'isNeedReadReceipt' => 'IsNeedReadReceipt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'syncOtherMachine' => 'setSyncOtherMachine',
        'fromAccount' => 'setFromAccount',
        'toAccount' => 'setToAccount',
        'msgLifeTime' => 'setMsgLifeTime',
        'msgSeq' => 'setMsgSeq',
        'msgRandom' => 'setMsgRandom',
        'msgTimeStamp' => 'setMsgTimeStamp',
        'forbidCallbackControl' => 'setForbidCallbackControl',
        'sendMsgControl' => 'setSendMsgControl',
        'msgBody' => 'setMsgBody',
        'cloudCustomData' => 'setCloudCustomData',
        'offlinePushInfo' => 'setOfflinePushInfo',
        'isNeedReadReceipt' => 'setIsNeedReadReceipt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'syncOtherMachine' => 'getSyncOtherMachine',
        'fromAccount' => 'getFromAccount',
        'toAccount' => 'getToAccount',
        'msgLifeTime' => 'getMsgLifeTime',
        'msgSeq' => 'getMsgSeq',
        'msgRandom' => 'getMsgRandom',
        'msgTimeStamp' => 'getMsgTimeStamp',
        'forbidCallbackControl' => 'getForbidCallbackControl',
        'sendMsgControl' => 'getSendMsgControl',
        'msgBody' => 'getMsgBody',
        'cloudCustomData' => 'getCloudCustomData',
        'offlinePushInfo' => 'getOfflinePushInfo',
        'isNeedReadReceipt' => 'getIsNeedReadReceipt'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const SYNC_OTHER_MACHINE_1 = 1;
    const SYNC_OTHER_MACHINE_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSyncOtherMachineAllowableValues()
    {
        return [
            self::SYNC_OTHER_MACHINE_1,
            self::SYNC_OTHER_MACHINE_2,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['syncOtherMachine'] = isset($data['syncOtherMachine']) ? $data['syncOtherMachine'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['msgLifeTime'] = isset($data['msgLifeTime']) ? $data['msgLifeTime'] : null;
        $this->container['msgSeq'] = isset($data['msgSeq']) ? $data['msgSeq'] : null;
        $this->container['msgRandom'] = isset($data['msgRandom']) ? $data['msgRandom'] : null;
        $this->container['msgTimeStamp'] = isset($data['msgTimeStamp']) ? $data['msgTimeStamp'] : null;
        $this->container['forbidCallbackControl'] = isset($data['forbidCallbackControl']) ? $data['forbidCallbackControl'] : null;
        $this->container['sendMsgControl'] = isset($data['sendMsgControl']) ? $data['sendMsgControl'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
        $this->container['cloudCustomData'] = isset($data['cloudCustomData']) ? $data['cloudCustomData'] : null;
        $this->container['offlinePushInfo'] = isset($data['offlinePushInfo']) ? $data['offlinePushInfo'] : null;
        $this->container['isNeedReadReceipt'] = isset($data['isNeedReadReceipt']) ? $data['isNeedReadReceipt'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getSyncOtherMachineAllowableValues();
        if (!is_null($this->container['syncOtherMachine']) && !in_array($this->container['syncOtherMachine'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'syncOtherMachine', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['toAccount'] === null) {
            $invalidProperties[] = "'toAccount' can't be null";
        }
        if ($this->container['msgRandom'] === null) {
            $invalidProperties[] = "'msgRandom' can't be null";
        }
        if ($this->container['msgBody'] === null) {
            $invalidProperties[] = "'msgBody' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets syncOtherMachine
     *
     * @return int|null
     */
    public function getSyncOtherMachine()
    {
        return $this->container['syncOtherMachine'];
    }

    /**
     * Sets syncOtherMachine
     *
     * @param int|null $syncOtherMachine 1：把消息同步到 From_Account 在线终端和漫游上；2：消息不同步至 From_Account；若不填写默认情况下会将消息存 From_Account 漫游
     *
     * @return $this
     */
    public function setSyncOtherMachine($syncOtherMachine)
    {
        $allowedValues = $this->getSyncOtherMachineAllowableValues();
        if (!is_null($syncOtherMachine) && !in_array($syncOtherMachine, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'syncOtherMachine', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['syncOtherMachine'] = $syncOtherMachine;

        return $this;
    }

    /**
     * Gets fromAccount
     *
     * @return string|null
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param string|null $fromAccount 消息发送方 UserID（用于指定发送消息方帐号）
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets toAccount
     *
     * @return string
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string $toAccount 消息接收方 UserID
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets msgLifeTime
     *
     * @return int|null
     */
    public function getMsgLifeTime()
    {
        return $this->container['msgLifeTime'];
    }

    /**
     * Sets msgLifeTime
     *
     * @param int|null $msgLifeTime 消息离线保存时长（单位：秒），最长为7天（604800秒） 若设置该字段为0，则消息只发在线用户，不保存离线 若设置该字段超过7天（604800秒），仍只保存7天 若不设置该字段，则默认保存7天
     *
     * @return $this
     */
    public function setMsgLifeTime($msgLifeTime)
    {
        $this->container['msgLifeTime'] = $msgLifeTime;

        return $this;
    }

    /**
     * Gets msgSeq
     *
     * @return int|null
     */
    public function getMsgSeq()
    {
        return $this->container['msgSeq'];
    }

    /**
     * Sets msgSeq
     *
     * @param int|null $msgSeq 消息序列号（32位无符号整数），后台会根据该字段去重及进行同秒内消息的排序，详细规则请看本接口的功能说明。若不填该字段，则由后台填入随机数
     *
     * @return $this
     */
    public function setMsgSeq($msgSeq)
    {
        $this->container['msgSeq'] = $msgSeq;

        return $this;
    }

    /**
     * Gets msgRandom
     *
     * @return int
     */
    public function getMsgRandom()
    {
        return $this->container['msgRandom'];
    }

    /**
     * Sets msgRandom
     *
     * @param int $msgRandom 消息随机数（32位无符号整数），后台用于同一秒内的消息去重。请确保该字段填的是随机
     *
     * @return $this
     */
    public function setMsgRandom($msgRandom)
    {
        $this->container['msgRandom'] = $msgRandom;

        return $this;
    }

    /**
     * Gets msgTimeStamp
     *
     * @return int|null
     */
    public function getMsgTimeStamp()
    {
        return $this->container['msgTimeStamp'];
    }

    /**
     * Sets msgTimeStamp
     *
     * @param int|null $msgTimeStamp 消息时间戳，UNIX 时间戳（单位：秒）
     *
     * @return $this
     */
    public function setMsgTimeStamp($msgTimeStamp)
    {
        $this->container['msgTimeStamp'] = $msgTimeStamp;

        return $this;
    }

    /**
     * Gets forbidCallbackControl
     *
     * @return string[]|null
     */
    public function getForbidCallbackControl()
    {
        return $this->container['forbidCallbackControl'];
    }

    /**
     * Sets forbidCallbackControl
     *
     * @param string[]|null $forbidCallbackControl 消息回调禁止开关，只对本条消息有效，ForbidBeforeSendMsgCallback 表示禁止发消息前回调，ForbidAfterSendMsgCallback 表示禁止发消息后回调
     *
     * @return $this
     */
    public function setForbidCallbackControl($forbidCallbackControl)
    {
        $this->container['forbidCallbackControl'] = $forbidCallbackControl;

        return $this;
    }

    /**
     * Gets sendMsgControl
     *
     * @return string[]|null
     */
    public function getSendMsgControl()
    {
        return $this->container['sendMsgControl'];
    }

    /**
     * Sets sendMsgControl
     *
     * @param string[]|null $sendMsgControl 消息发送控制选项，是一个 String 数组，只对本条消息有效。\"NoUnread\"表示该条消息不计入未读数。\"NoLastMsg\"表示该条消息不更新会话列表。\"WithMuteNotifications\"表示该条消息的接收方对发送方设置的免打扰选项生效（默认不生效）
     *
     * @return $this
     */
    public function setSendMsgControl($sendMsgControl)
    {
        $this->container['sendMsgControl'] = $sendMsgControl;

        return $this;
    }

    /**
     * Gets msgBody
     *
     * @return \TencentCloud\IM\Model\TIMMsgElement[]
     */
    public function getMsgBody()
    {
        return $this->container['msgBody'];
    }

    /**
     * Sets msgBody
     *
     * @param \TencentCloud\IM\Model\TIMMsgElement[] $msgBody msgBody
     *
     * @return $this
     */
    public function setMsgBody($msgBody)
    {
        $this->container['msgBody'] = $msgBody;

        return $this;
    }

    /**
     * Gets cloudCustomData
     *
     * @return string|null
     */
    public function getCloudCustomData()
    {
        return $this->container['cloudCustomData'];
    }

    /**
     * Sets cloudCustomData
     *
     * @param string|null $cloudCustomData cloudCustomData
     *
     * @return $this
     */
    public function setCloudCustomData($cloudCustomData)
    {
        $this->container['cloudCustomData'] = $cloudCustomData;

        return $this;
    }

    /**
     * Gets offlinePushInfo
     *
     * @return \TencentCloud\IM\Model\OfflinePushInfo|null
     */
    public function getOfflinePushInfo()
    {
        return $this->container['offlinePushInfo'];
    }

    /**
     * Sets offlinePushInfo
     *
     * @param \TencentCloud\IM\Model\OfflinePushInfo|null $offlinePushInfo offlinePushInfo
     *
     * @return $this
     */
    public function setOfflinePushInfo($offlinePushInfo)
    {
        $this->container['offlinePushInfo'] = $offlinePushInfo;

        return $this;
    }

    /**
     * Gets isNeedReadReceipt
     *
     * @return int|null
     */
    public function getIsNeedReadReceipt()
    {
        return $this->container['isNeedReadReceipt'];
    }

    /**
     * Sets isNeedReadReceipt
     *
     * @param int|null $isNeedReadReceipt 该条消息是否需要已读回执，0为不需要，1为需要，默认为0
     *
     * @return $this
     */
    public function setIsNeedReadReceipt($isNeedReadReceipt)
    {
        $this->container['isNeedReadReceipt'] = $isNeedReadReceipt;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


