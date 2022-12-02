<?php
/**
 * FriendAddRequest
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
 * FriendAddRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class FriendAddRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'FriendAddRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromAccount' => 'string',
        'addFriendItem' => '\TencentCloud\IM\Model\FriendAddRequestAddFriendItem[]',
        'addType' => 'string',
        'forceAddFlags' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromAccount' => null,
        'addFriendItem' => null,
        'addType' => null,
        'forceAddFlags' => 'int32'
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
        'fromAccount' => 'From_Account',
        'addFriendItem' => 'AddFriendItem',
        'addType' => 'AddType',
        'forceAddFlags' => 'ForceAddFlags'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromAccount' => 'setFromAccount',
        'addFriendItem' => 'setAddFriendItem',
        'addType' => 'setAddType',
        'forceAddFlags' => 'setForceAddFlags'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromAccount' => 'getFromAccount',
        'addFriendItem' => 'getAddFriendItem',
        'addType' => 'getAddType',
        'forceAddFlags' => 'getForceAddFlags'
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

    const FORCE_ADD_FLAGS_0 = 0;
    const FORCE_ADD_FLAGS_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getForceAddFlagsAllowableValues()
    {
        return [
            self::FORCE_ADD_FLAGS_0,
            self::FORCE_ADD_FLAGS_1,
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
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['addFriendItem'] = isset($data['addFriendItem']) ? $data['addFriendItem'] : null;
        $this->container['addType'] = isset($data['addType']) ? $data['addType'] : null;
        $this->container['forceAddFlags'] = isset($data['forceAddFlags']) ? $data['forceAddFlags'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fromAccount'] === null) {
            $invalidProperties[] = "'fromAccount' can't be null";
        }
        if ($this->container['addFriendItem'] === null) {
            $invalidProperties[] = "'addFriendItem' can't be null";
        }
        $allowedValues = $this->getForceAddFlagsAllowableValues();
        if (!is_null($this->container['forceAddFlags']) && !in_array($this->container['forceAddFlags'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'forceAddFlags', must be one of '%s'",
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
     * Gets fromAccount
     *
     * @return string
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param string $fromAccount 需要为该 UserID 添加好友
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets addFriendItem
     *
     * @return \TencentCloud\IM\Model\FriendAddRequestAddFriendItem[]
     */
    public function getAddFriendItem()
    {
        return $this->container['addFriendItem'];
    }

    /**
     * Sets addFriendItem
     *
     * @param \TencentCloud\IM\Model\FriendAddRequestAddFriendItem[] $addFriendItem 好友结构体对象
     *
     * @return $this
     */
    public function setAddFriendItem($addFriendItem)
    {
        $this->container['addFriendItem'] = $addFriendItem;

        return $this;
    }

    /**
     * Gets addType
     *
     * @return string|null
     */
    public function getAddType()
    {
        return $this->container['addType'];
    }

    /**
     * Sets addType
     *
     * @param string|null $addType 加好友方式（默认双向加好友方式）：Add_Type_Single 表示单向加好友 Add_Type_Both 表示双向加好友
     *
     * @return $this
     */
    public function setAddType($addType)
    {
        $this->container['addType'] = $addType;

        return $this;
    }

    /**
     * Gets forceAddFlags
     *
     * @return int|null
     */
    public function getForceAddFlags()
    {
        return $this->container['forceAddFlags'];
    }

    /**
     * Sets forceAddFlags
     *
     * @param int|null $forceAddFlags 管理员强制加好友标记：1表示强制加好友，0表示常规加好友方式
     *
     * @return $this
     */
    public function setForceAddFlags($forceAddFlags)
    {
        $allowedValues = $this->getForceAddFlagsAllowableValues();
        if (!is_null($forceAddFlags) && !in_array($forceAddFlags, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'forceAddFlags', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['forceAddFlags'] = $forceAddFlags;

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


