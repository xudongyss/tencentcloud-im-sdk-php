<?php
/**
 * GetRoamMsgResponse
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
use \TencentCloud\IM\ObjectSerializer;

/**
 * GetRoamMsgResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetRoamMsgResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRoamMsgResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'complete' => 'int',
        'msgCnt' => 'int',
        'lastMsgTime' => 'int',
        'lastMsgKey' => 'string',
        'msgList' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'complete' => 'int32',
        'msgCnt' => 'int32',
        'lastMsgTime' => 'int32',
        'lastMsgKey' => null,
        'msgList' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'complete' => 'Complete',
        'msgCnt' => 'MsgCnt',
        'lastMsgTime' => 'LastMsgTime',
        'lastMsgKey' => 'LastMsgKey',
        'msgList' => 'MsgList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'complete' => 'setComplete',
        'msgCnt' => 'setMsgCnt',
        'lastMsgTime' => 'setLastMsgTime',
        'lastMsgKey' => 'setLastMsgKey',
        'msgList' => 'setMsgList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'complete' => 'getComplete',
        'msgCnt' => 'getMsgCnt',
        'lastMsgTime' => 'getLastMsgTime',
        'lastMsgKey' => 'getLastMsgKey',
        'msgList' => 'getMsgList'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    const COMPLETE_0 = 0;
    const COMPLETE_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCompleteAllowableValues()
    {
        return [
            self::COMPLETE_0,
            self::COMPLETE_1,
        ];
    }
    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['complete'] = isset($data['complete']) ? $data['complete'] : null;
        $this->container['msgCnt'] = isset($data['msgCnt']) ? $data['msgCnt'] : null;
        $this->container['lastMsgTime'] = isset($data['lastMsgTime']) ? $data['lastMsgTime'] : null;
        $this->container['lastMsgKey'] = isset($data['lastMsgKey']) ? $data['lastMsgKey'] : null;
        $this->container['msgList'] = isset($data['msgList']) ? $data['msgList'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getCompleteAllowableValues();
        if (!is_null($this->container['complete']) && !in_array($this->container['complete'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'complete', must be one of '%s'",
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
     * Gets complete
     *
     * @return int|null
     */
    public function getComplete()
    {
        return $this->container['complete'];
    }

    /**
     * Sets complete
     *
     * @param int|null $complete 是否全部拉取，0表示未全部拉取，需要续拉，1表示已全部拉取
     *
     * @return $this
     */
    public function setComplete($complete)
    {
        $allowedValues = $this->getCompleteAllowableValues();
        if (!is_null($complete) && !in_array($complete, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'complete', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['complete'] = $complete;

        return $this;
    }

    /**
     * Gets msgCnt
     *
     * @return int|null
     */
    public function getMsgCnt()
    {
        return $this->container['msgCnt'];
    }

    /**
     * Sets msgCnt
     *
     * @param int|null $msgCnt 本次拉取到的消息条数
     *
     * @return $this
     */
    public function setMsgCnt($msgCnt)
    {
        $this->container['msgCnt'] = $msgCnt;

        return $this;
    }

    /**
     * Gets lastMsgTime
     *
     * @return int|null
     */
    public function getLastMsgTime()
    {
        return $this->container['lastMsgTime'];
    }

    /**
     * Sets lastMsgTime
     *
     * @param int|null $lastMsgTime 本次拉取到的消息里的最后一条消息的时间
     *
     * @return $this
     */
    public function setLastMsgTime($lastMsgTime)
    {
        $this->container['lastMsgTime'] = $lastMsgTime;

        return $this;
    }

    /**
     * Gets lastMsgKey
     *
     * @return string|null
     */
    public function getLastMsgKey()
    {
        return $this->container['lastMsgKey'];
    }

    /**
     * Sets lastMsgKey
     *
     * @param string|null $lastMsgKey 本次拉取到的消息里的最后一条消息的标识
     *
     * @return $this
     */
    public function setLastMsgKey($lastMsgKey)
    {
        $this->container['lastMsgKey'] = $lastMsgKey;

        return $this;
    }

    /**
     * Gets msgList
     *
     * @return object[]|null
     */
    public function getMsgList()
    {
        return $this->container['msgList'];
    }

    /**
     * Sets msgList
     *
     * @param object[]|null $msgList 返回的消息列表
     *
     * @return $this
     */
    public function setMsgList($msgList)
    {
        $this->container['msgList'] = $msgList;

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


