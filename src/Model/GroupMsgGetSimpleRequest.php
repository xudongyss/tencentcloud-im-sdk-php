<?php
/**
 * GroupMsgGetSimpleRequest
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
 * GroupMsgGetSimpleRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GroupMsgGetSimpleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupMsgGetSimpleRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'reqMsgNumber' => 'int',
        'reqMsgSeq' => 'int',
        'withRecalledMsg' => 'int',
        'topicId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'reqMsgNumber' => 'int32',
        'reqMsgSeq' => 'int32',
        'withRecalledMsg' => 'int32',
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
        'reqMsgNumber' => 'ReqMsgNumber',
        'reqMsgSeq' => 'ReqMsgSeq',
        'withRecalledMsg' => 'WithRecalledMsg',
        'topicId' => 'TopicId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'reqMsgNumber' => 'setReqMsgNumber',
        'reqMsgSeq' => 'setReqMsgSeq',
        'withRecalledMsg' => 'setWithRecalledMsg',
        'topicId' => 'setTopicId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'reqMsgNumber' => 'getReqMsgNumber',
        'reqMsgSeq' => 'getReqMsgSeq',
        'withRecalledMsg' => 'getWithRecalledMsg',
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
        $this->container['reqMsgNumber'] = isset($data['reqMsgNumber']) ? $data['reqMsgNumber'] : null;
        $this->container['reqMsgSeq'] = isset($data['reqMsgSeq']) ? $data['reqMsgSeq'] : null;
        $this->container['withRecalledMsg'] = isset($data['withRecalledMsg']) ? $data['withRecalledMsg'] : null;
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
        if ($this->container['reqMsgNumber'] === null) {
            $invalidProperties[] = "'reqMsgNumber' can't be null";
        }
        if (($this->container['reqMsgNumber'] > 20)) {
            $invalidProperties[] = "invalid value for 'reqMsgNumber', must be smaller than or equal to 20.";
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
     * @param string $groupId 要拉取历史消息的群组 ID
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets reqMsgNumber
     *
     * @return int
     */
    public function getReqMsgNumber()
    {
        return $this->container['reqMsgNumber'];
    }

    /**
     * Sets reqMsgNumber
     *
     * @param int $reqMsgNumber 拉取的历史消息的条数，目前一次请求最多返回20条历史消息，所以这里最好小于等于20
     *
     * @return $this
     */
    public function setReqMsgNumber($reqMsgNumber)
    {

        if (($reqMsgNumber > 20)) {
            throw new \InvalidArgumentException('invalid value for $reqMsgNumber when calling GroupMsgGetSimpleRequest., must be smaller than or equal to 20.');
        }

        $this->container['reqMsgNumber'] = $reqMsgNumber;

        return $this;
    }

    /**
     * Gets reqMsgSeq
     *
     * @return int|null
     */
    public function getReqMsgSeq()
    {
        return $this->container['reqMsgSeq'];
    }

    /**
     * Sets reqMsgSeq
     *
     * @param int|null $reqMsgSeq 拉取消息的最大 seq
     *
     * @return $this
     */
    public function setReqMsgSeq($reqMsgSeq)
    {
        $this->container['reqMsgSeq'] = $reqMsgSeq;

        return $this;
    }

    /**
     * Gets withRecalledMsg
     *
     * @return int|null
     */
    public function getWithRecalledMsg()
    {
        return $this->container['withRecalledMsg'];
    }

    /**
     * Sets withRecalledMsg
     *
     * @param int|null $withRecalledMsg 是否带撤回的消息，填1表明需要拉取撤回后的消息；默认不拉取撤回后的消息
     *
     * @return $this
     */
    public function setWithRecalledMsg($withRecalledMsg)
    {
        $this->container['withRecalledMsg'] = $withRecalledMsg;

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


