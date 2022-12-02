<?php
/**
 * ImPushRequest
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
 * ImPushRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImPushRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImPushRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'condition' => '\TencentCloud\IM\Model\ImPushRequestCondition[]',
        'msgRandom' => 'int',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]',
        'msgLifeTime' => 'int',
        'fromAccount' => 'string',
        'offlinePushInfo' => '\TencentCloud\IM\Model\OfflinePushInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'condition' => null,
        'msgRandom' => 'int32',
        'msgBody' => null,
        'msgLifeTime' => 'int32',
        'fromAccount' => null,
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
        'condition' => 'Condition',
        'msgRandom' => 'MsgRandom',
        'msgBody' => 'MsgBody',
        'msgLifeTime' => 'MsgLifeTime',
        'fromAccount' => 'From_Account',
        'offlinePushInfo' => 'OfflinePushInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
        'msgRandom' => 'setMsgRandom',
        'msgBody' => 'setMsgBody',
        'msgLifeTime' => 'setMsgLifeTime',
        'fromAccount' => 'setFromAccount',
        'offlinePushInfo' => 'setOfflinePushInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
        'msgRandom' => 'getMsgRandom',
        'msgBody' => 'getMsgBody',
        'msgLifeTime' => 'getMsgLifeTime',
        'fromAccount' => 'getFromAccount',
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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['msgRandom'] = isset($data['msgRandom']) ? $data['msgRandom'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
        $this->container['msgLifeTime'] = isset($data['msgLifeTime']) ? $data['msgLifeTime'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
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

        if ($this->container['msgRandom'] === null) {
            $invalidProperties[] = "'msgRandom' can't be null";
        }
        if ($this->container['msgBody'] === null) {
            $invalidProperties[] = "'msgBody' can't be null";
        }
        if (!is_null($this->container['msgLifeTime']) && ($this->container['msgLifeTime'] > 604800)) {
            $invalidProperties[] = "invalid value for 'msgLifeTime', must be smaller than or equal to 604800.";
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
     * Gets condition
     *
     * @return \TencentCloud\IM\Model\ImPushRequestCondition[]|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \TencentCloud\IM\Model\ImPushRequestCondition[]|null $condition Condition 共有4种条件类型，分别是：属性的或条件 AttrsOr、属性的与条件 AttrsAnd、标签的或条件 TagsOr、标签的与条件 TagsAnd。AttrsOr 和 AttrsAnd 可以并存，TagsOr 和 TagsAnd 也可以并存。但是标签和属性条件不能并存。如果没有 Condition，则推送给全部用户
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

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
     * @param int|null $msgLifeTime 消息离线存储时间，单位秒，最多保存7天（604800秒）。默认为0，表示不离线存储，即只推在线用户
     *
     * @return $this
     */
    public function setMsgLifeTime($msgLifeTime)
    {

        if (!is_null($msgLifeTime) && ($msgLifeTime > 604800)) {
            throw new \InvalidArgumentException('invalid value for $msgLifeTime when calling ImPushRequest., must be smaller than or equal to 604800.');
        }

        $this->container['msgLifeTime'] = $msgLifeTime;

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
     * @param string|null $fromAccount 消息推送方帐号
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


