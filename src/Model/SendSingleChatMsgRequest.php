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
     * @param int|null $syncOtherMachine 1????????????????????? From_Account ???????????????????????????2????????????????????? From_Account????????????????????????????????????????????? From_Account ??????
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
     * @param string|null $fromAccount ??????????????? UserID???????????????????????????????????????
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
     * @param string $toAccount ??????????????? UserID
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
     * @param int|null $msgLifeTime ??????????????????????????????????????????????????????7??????604800?????? ?????????????????????0???????????????????????????????????????????????? ????????????????????????7??????604800?????????????????????7??? ???????????????????????????????????????7???
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
     * @param int|null $msgSeq ??????????????????32???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
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
     * @param int $msgRandom ??????????????????32???????????????????????????????????????????????????????????????????????????????????????????????????
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
     * @param int|null $msgTimeStamp ??????????????????UNIX ???????????????????????????
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
     * @param string[]|null $forbidCallbackControl ??????????????????????????????????????????????????????ForbidBeforeSendMsgCallback ?????????????????????????????????ForbidAfterSendMsgCallback ??????????????????????????????
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
     * @param string[]|null $sendMsgControl ???????????????????????????????????? String ????????????????????????????????????\"NoUnread\"???????????????????????????????????????\"NoLastMsg\"??????????????????????????????????????????\"WithMuteNotifications\"?????????????????????????????????????????????????????????????????????????????????????????????
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
     * @param int|null $isNeedReadReceipt ???????????????????????????????????????0???????????????1?????????????????????0
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


