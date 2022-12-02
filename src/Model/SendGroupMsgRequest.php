<?php
/**
 * SendGroupMsgRequest
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
 * SendGroupMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class SendGroupMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SendGroupMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'random' => 'int',
        'msgPriority' => 'string',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]',
        'fromAccount' => 'string',
        'offlinePushInfo' => '\TencentCloud\IM\Model\OfflinePushInfo',
        'forbidCallbackControl' => '\TencentCloud\IM\Model\ForbidCallbackControl[]',
        'onlineOnlyFlag' => 'int',
        'sendMsgControl' => '\TencentCloud\IM\Model\SendMsgControl[]',
        'cloudCustomData' => 'string',
        'toAccount' => 'string[]',
        'topicId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'random' => 'uint32',
        'msgPriority' => null,
        'msgBody' => null,
        'fromAccount' => null,
        'offlinePushInfo' => null,
        'forbidCallbackControl' => null,
        'onlineOnlyFlag' => 'int32',
        'sendMsgControl' => null,
        'cloudCustomData' => null,
        'toAccount' => null,
        'topicId' => null
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
        'groupId' => 'GroupId',
        'random' => 'Random',
        'msgPriority' => 'MsgPriority',
        'msgBody' => 'MsgBody',
        'fromAccount' => 'From_Account',
        'offlinePushInfo' => 'OfflinePushInfo',
        'forbidCallbackControl' => 'ForbidCallbackControl',
        'onlineOnlyFlag' => 'OnlineOnlyFlag',
        'sendMsgControl' => 'SendMsgControl',
        'cloudCustomData' => 'CloudCustomData',
        'toAccount' => 'To_Account',
        'topicId' => 'TopicId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'random' => 'setRandom',
        'msgPriority' => 'setMsgPriority',
        'msgBody' => 'setMsgBody',
        'fromAccount' => 'setFromAccount',
        'offlinePushInfo' => 'setOfflinePushInfo',
        'forbidCallbackControl' => 'setForbidCallbackControl',
        'onlineOnlyFlag' => 'setOnlineOnlyFlag',
        'sendMsgControl' => 'setSendMsgControl',
        'cloudCustomData' => 'setCloudCustomData',
        'toAccount' => 'setToAccount',
        'topicId' => 'setTopicId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'random' => 'getRandom',
        'msgPriority' => 'getMsgPriority',
        'msgBody' => 'getMsgBody',
        'fromAccount' => 'getFromAccount',
        'offlinePushInfo' => 'getOfflinePushInfo',
        'forbidCallbackControl' => 'getForbidCallbackControl',
        'onlineOnlyFlag' => 'getOnlineOnlyFlag',
        'sendMsgControl' => 'getSendMsgControl',
        'cloudCustomData' => 'getCloudCustomData',
        'toAccount' => 'getToAccount',
        'topicId' => 'getTopicId'
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

    const ONLINE_ONLY_FLAG_0 = 0;
    const ONLINE_ONLY_FLAG_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOnlineOnlyFlagAllowableValues()
    {
        return [
            self::ONLINE_ONLY_FLAG_0,
            self::ONLINE_ONLY_FLAG_1,
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['random'] = isset($data['random']) ? $data['random'] : null;
        $this->container['msgPriority'] = isset($data['msgPriority']) ? $data['msgPriority'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['offlinePushInfo'] = isset($data['offlinePushInfo']) ? $data['offlinePushInfo'] : null;
        $this->container['forbidCallbackControl'] = isset($data['forbidCallbackControl']) ? $data['forbidCallbackControl'] : null;
        $this->container['onlineOnlyFlag'] = isset($data['onlineOnlyFlag']) ? $data['onlineOnlyFlag'] : null;
        $this->container['sendMsgControl'] = isset($data['sendMsgControl']) ? $data['sendMsgControl'] : null;
        $this->container['cloudCustomData'] = isset($data['cloudCustomData']) ? $data['cloudCustomData'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['topicId'] = isset($data['topicId']) ? $data['topicId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['random'] === null) {
            $invalidProperties[] = "'random' can't be null";
        }
        if ($this->container['msgBody'] === null) {
            $invalidProperties[] = "'msgBody' can't be null";
        }
        $allowedValues = $this->getOnlineOnlyFlagAllowableValues();
        if (!is_null($this->container['onlineOnlyFlag']) && !in_array($this->container['onlineOnlyFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'onlineOnlyFlag', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId 向哪个群组发送消息
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets random
     *
     * @return int
     */
    public function getRandom()
    {
        return $this->container['random'];
    }

    /**
     * Sets random
     *
     * @param int $random 无符号32位整数。如果5分钟内两条消息的随机值相同，后一条消息将被当做重复消息而丢弃
     *
     * @return $this
     */
    public function setRandom($random)
    {
        $this->container['random'] = $random;

        return $this;
    }

    /**
     * Gets msgPriority
     *
     * @return string|null
     */
    public function getMsgPriority()
    {
        return $this->container['msgPriority'];
    }

    /**
     * Sets msgPriority
     *
     * @param string|null $msgPriority 消息的优先级
     *
     * @return $this
     */
    public function setMsgPriority($msgPriority)
    {
        $this->container['msgPriority'] = $msgPriority;

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
     * @param \TencentCloud\IM\Model\TIMMsgElement[] $msgBody 消息体，详细可参阅 消息格式描述(https://cloud.tencent.com/document/product/269/2720)
     *
     * @return $this
     */
    public function setMsgBody($msgBody)
    {
        $this->container['msgBody'] = $msgBody;

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
     * @param string|null $fromAccount 消息来源帐号，选填。如果不填写该字段，则默认消息的发送者为调用该接口时使用的 App 管理员帐号。除此之外，App 亦可通过该字段“伪造”消息的发送者，从而实现一些特殊的功能需求。需要注意的是，如果指定该字段，必须要确保字段中的帐号是存在的
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

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
     * Gets forbidCallbackControl
     *
     * @return \TencentCloud\IM\Model\ForbidCallbackControl[]|null
     */
    public function getForbidCallbackControl()
    {
        return $this->container['forbidCallbackControl'];
    }

    /**
     * Sets forbidCallbackControl
     *
     * @param \TencentCloud\IM\Model\ForbidCallbackControl[]|null $forbidCallbackControl 消息回调禁止开关，只对单条消息有效，ForbidBeforeSendMsgCallback 表示禁止发消息前回调，ForbidAfterSendMsgCallback 表示禁止发消息后回调
     *
     * @return $this
     */
    public function setForbidCallbackControl($forbidCallbackControl)
    {
        $this->container['forbidCallbackControl'] = $forbidCallbackControl;

        return $this;
    }

    /**
     * Gets onlineOnlyFlag
     *
     * @return int|null
     */
    public function getOnlineOnlyFlag()
    {
        return $this->container['onlineOnlyFlag'];
    }

    /**
     * Sets onlineOnlyFlag
     *
     * @param int|null $onlineOnlyFlag 1表示消息仅发送在线成员，默认0表示发送所有成员，AVChatRoom(直播群)不支持该参数
     *
     * @return $this
     */
    public function setOnlineOnlyFlag($onlineOnlyFlag)
    {
        $allowedValues = $this->getOnlineOnlyFlagAllowableValues();
        if (!is_null($onlineOnlyFlag) && !in_array($onlineOnlyFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'onlineOnlyFlag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['onlineOnlyFlag'] = $onlineOnlyFlag;

        return $this;
    }

    /**
     * Gets sendMsgControl
     *
     * @return \TencentCloud\IM\Model\SendMsgControl[]|null
     */
    public function getSendMsgControl()
    {
        return $this->container['sendMsgControl'];
    }

    /**
     * Sets sendMsgControl
     *
     * @param \TencentCloud\IM\Model\SendMsgControl[]|null $sendMsgControl 消息发送权限，NoLastMsg 只对单条消息有效，表示不更新最近联系人会话；NoUnread 不计未读，只对单条消息有效。（如果该消息 OnlineOnlyFlag 设置为1，则不允许使用该字段。）
     *
     * @return $this
     */
    public function setSendMsgControl($sendMsgControl)
    {
        $this->container['sendMsgControl'] = $sendMsgControl;

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
     * Gets toAccount
     *
     * @return string[]|null
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string[]|null $toAccount 指定消息接收者(接收者成员上限50个)，如果此字段被使用，消息则不计未读，仅旗舰版支持此功能，支持好友工作群（Work）、陌生人社交群（Public）、临时会议群（Meeting）
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets topicId
     *
     * @return string|null
     */
    public function getTopicId()
    {
        return $this->container['topicId'];
    }

    /**
     * Sets topicId
     *
     * @param string|null $topicId 话题的 ID, 仅支持话题的社群适用此选项
     *
     * @return $this
     */
    public function setTopicId($topicId)
    {
        $this->container['topicId'] = $topicId;

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


