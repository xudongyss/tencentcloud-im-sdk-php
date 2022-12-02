<?php
/**
 * BatchSendSingleChatMsgRequest
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
 * BatchSendSingleChatMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class BatchSendSingleChatMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchSendSingleChatMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'syncOtherMachine' => 'int',
        'fromAccount' => 'string',
        'toAccount' => 'string[]',
        'msgLifeTime' => 'int',
        'msgSeq' => 'int',
        'msgRandom' => 'int',
        'sendMsgControl' => 'string[]',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]',
        'cloudCustomData' => 'string',
        'offlinePushInfo' => '\TencentCloud\IM\Model\OfflinePushInfo'
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
        'sendMsgControl' => null,
        'msgBody' => null,
        'cloudCustomData' => null,
        'offlinePushInfo' => null
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
        'sendMsgControl' => 'SendMsgControl',
        'msgBody' => 'MsgBody',
        'cloudCustomData' => 'CloudCustomData',
        'offlinePushInfo' => 'OfflinePushInfo'
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
        'sendMsgControl' => 'setSendMsgControl',
        'msgBody' => 'setMsgBody',
        'cloudCustomData' => 'setCloudCustomData',
        'offlinePushInfo' => 'setOfflinePushInfo'
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
        'sendMsgControl' => 'getSendMsgControl',
        'msgBody' => 'getMsgBody',
        'cloudCustomData' => 'getCloudCustomData',
        'offlinePushInfo' => 'getOfflinePushInfo'
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
        $this->container['sendMsgControl'] = isset($data['sendMsgControl']) ? $data['sendMsgControl'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
        $this->container['cloudCustomData'] = isset($data['cloudCustomData']) ? $data['cloudCustomData'] : null;
        $this->container['offlinePushInfo'] = isset($data['offlinePushInfo']) ? $data['offlinePushInfo'] : null;
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
        if (!is_null($this->container['msgLifeTime']) && ($this->container['msgLifeTime'] > 604800)) {
            $invalidProperties[] = "invalid value for 'msgLifeTime', must be smaller than or equal to 604800.";
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
     * @param int|null $syncOtherMachine 1：把消息同步到 From_Account 在线终端和漫游上 2：消息不同步至 From_Account；若不填写默认情况下会将消息存 From_Account 漫游
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
     * @param string|null $fromAccount 管理员指定消息发送方帐号（若需设置 From_Account 信息，则该参数取值不能为空）
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
     * @return string[]
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string[] $toAccount 消息接收方用户 UserID
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
     * @param int|null $msgLifeTime 消息离线保存时长（单位：秒），最长为7天（604800秒）。若设置该字段为0，则消息只发在线用户，不保存离线及漫游
     *
     * @return $this
     */
    public function setMsgLifeTime($msgLifeTime)
    {

        if (!is_null($msgLifeTime) && ($msgLifeTime > 604800)) {
            throw new \InvalidArgumentException('invalid value for $msgLifeTime when calling BatchSendSingleChatMsgRequest., must be smaller than or equal to 604800.');
        }

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
     * @param string[]|null $sendMsgControl 消息发送控制选项，是一个 String 数组，只对本次请求有效。\"NoUnread\"表示该条消息不计入未读数。\"NoLastMsg\"表示该条消息不更新会话列表。
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
     * @param \TencentCloud\IM\Model\TIMMsgElement[] $msgBody TIM 消息
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
     * @param string|null $cloudCustomData 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到）
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


