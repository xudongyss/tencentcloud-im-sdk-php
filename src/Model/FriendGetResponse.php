<?php
/**
 * FriendGetResponse
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
 * FriendGetResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class FriendGetResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FriendGetResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'userDataItem' => 'object[]',
        'standardSequence' => 'int',
        'customSequence' => 'int',
        'friendNum' => 'int',
        'completeFlag' => 'int',
        'nextStartIndex' => 'int',
        'errorDisplay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'userDataItem' => null,
        'standardSequence' => 'int32',
        'customSequence' => 'int32',
        'friendNum' => 'int32',
        'completeFlag' => 'int32',
        'nextStartIndex' => 'int32',
        'errorDisplay' => null
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
        'userDataItem' => 'UserDataItem',
        'standardSequence' => 'StandardSequence',
        'customSequence' => 'CustomSequence',
        'friendNum' => 'FriendNum',
        'completeFlag' => 'CompleteFlag',
        'nextStartIndex' => 'NextStartIndex',
        'errorDisplay' => 'ErrorDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userDataItem' => 'setUserDataItem',
        'standardSequence' => 'setStandardSequence',
        'customSequence' => 'setCustomSequence',
        'friendNum' => 'setFriendNum',
        'completeFlag' => 'setCompleteFlag',
        'nextStartIndex' => 'setNextStartIndex',
        'errorDisplay' => 'setErrorDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userDataItem' => 'getUserDataItem',
        'standardSequence' => 'getStandardSequence',
        'customSequence' => 'getCustomSequence',
        'friendNum' => 'getFriendNum',
        'completeFlag' => 'getCompleteFlag',
        'nextStartIndex' => 'getNextStartIndex',
        'errorDisplay' => 'getErrorDisplay'
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

    

    


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['userDataItem'] = isset($data['userDataItem']) ? $data['userDataItem'] : null;
        $this->container['standardSequence'] = isset($data['standardSequence']) ? $data['standardSequence'] : null;
        $this->container['customSequence'] = isset($data['customSequence']) ? $data['customSequence'] : null;
        $this->container['friendNum'] = isset($data['friendNum']) ? $data['friendNum'] : null;
        $this->container['completeFlag'] = isset($data['completeFlag']) ? $data['completeFlag'] : null;
        $this->container['nextStartIndex'] = isset($data['nextStartIndex']) ? $data['nextStartIndex'] : null;
        $this->container['errorDisplay'] = isset($data['errorDisplay']) ? $data['errorDisplay'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets userDataItem
     *
     * @return object[]|null
     */
    public function getUserDataItem()
    {
        return $this->container['userDataItem'];
    }

    /**
     * Sets userDataItem
     *
     * @param object[]|null $userDataItem userDataItem
     *
     * @return $this
     */
    public function setUserDataItem($userDataItem)
    {
        $this->container['userDataItem'] = $userDataItem;

        return $this;
    }

    /**
     * Gets standardSequence
     *
     * @return int|null
     */
    public function getStandardSequence()
    {
        return $this->container['standardSequence'];
    }

    /**
     * Sets standardSequence
     *
     * @param int|null $standardSequence 标配好友数据的 Sequence，客户端可以保存该 Sequence，下次请求时通过请求的 StandardSequence 字段返回给后台
     *
     * @return $this
     */
    public function setStandardSequence($standardSequence)
    {
        $this->container['standardSequence'] = $standardSequence;

        return $this;
    }

    /**
     * Gets customSequence
     *
     * @return int|null
     */
    public function getCustomSequence()
    {
        return $this->container['customSequence'];
    }

    /**
     * Sets customSequence
     *
     * @param int|null $customSequence 自定义好友数据的 Sequence，客户端可以保存该 Sequence，下次请求时通过请求的 CustomSequence 字段返回给后台
     *
     * @return $this
     */
    public function setCustomSequence($customSequence)
    {
        $this->container['customSequence'] = $customSequence;

        return $this;
    }

    /**
     * Gets friendNum
     *
     * @return int|null
     */
    public function getFriendNum()
    {
        return $this->container['friendNum'];
    }

    /**
     * Sets friendNum
     *
     * @param int|null $friendNum 好友总数
     *
     * @return $this
     */
    public function setFriendNum($friendNum)
    {
        $this->container['friendNum'] = $friendNum;

        return $this;
    }

    /**
     * Gets completeFlag
     *
     * @return int|null
     */
    public function getCompleteFlag()
    {
        return $this->container['completeFlag'];
    }

    /**
     * Sets completeFlag
     *
     * @param int|null $completeFlag 分页的结束标识，非0值表示已完成全量拉取
     *
     * @return $this
     */
    public function setCompleteFlag($completeFlag)
    {
        $this->container['completeFlag'] = $completeFlag;

        return $this;
    }

    /**
     * Gets nextStartIndex
     *
     * @return int|null
     */
    public function getNextStartIndex()
    {
        return $this->container['nextStartIndex'];
    }

    /**
     * Sets nextStartIndex
     *
     * @param int|null $nextStartIndex 分页接口下一页的起始位置
     *
     * @return $this
     */
    public function setNextStartIndex($nextStartIndex)
    {
        $this->container['nextStartIndex'] = $nextStartIndex;

        return $this;
    }

    /**
     * Gets errorDisplay
     *
     * @return string|null
     */
    public function getErrorDisplay()
    {
        return $this->container['errorDisplay'];
    }

    /**
     * Sets errorDisplay
     *
     * @param string|null $errorDisplay 详细的客户端展示信息
     *
     * @return $this
     */
    public function setErrorDisplay($errorDisplay)
    {
        $this->container['errorDisplay'] = $errorDisplay;

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


