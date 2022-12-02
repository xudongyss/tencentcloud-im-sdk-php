<?php
/**
 * BlackListGetRequest
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
 * BlackListGetRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class BlackListGetRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BlackListGetRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromAccount' => 'string',
        'startIndex' => 'int',
        'maxLimited' => 'int',
        'lastSequence' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromAccount' => null,
        'startIndex' => 'int32',
        'maxLimited' => 'int32',
        'lastSequence' => 'int32'
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
        'startIndex' => 'StartIndex',
        'maxLimited' => 'MaxLimited',
        'lastSequence' => 'LastSequence'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromAccount' => 'setFromAccount',
        'startIndex' => 'setStartIndex',
        'maxLimited' => 'setMaxLimited',
        'lastSequence' => 'setLastSequence'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromAccount' => 'getFromAccount',
        'startIndex' => 'getStartIndex',
        'maxLimited' => 'getMaxLimited',
        'lastSequence' => 'getLastSequence'
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
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['startIndex'] = isset($data['startIndex']) ? $data['startIndex'] : null;
        $this->container['maxLimited'] = isset($data['maxLimited']) ? $data['maxLimited'] : null;
        $this->container['lastSequence'] = isset($data['lastSequence']) ? $data['lastSequence'] : null;
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
        if ($this->container['startIndex'] === null) {
            $invalidProperties[] = "'startIndex' can't be null";
        }
        if ($this->container['maxLimited'] === null) {
            $invalidProperties[] = "'maxLimited' can't be null";
        }
        if ($this->container['lastSequence'] === null) {
            $invalidProperties[] = "'lastSequence' can't be null";
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
     * @param string $fromAccount 需要拉取该 UserID 的黑名单
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets startIndex
     *
     * @return int
     */
    public function getStartIndex()
    {
        return $this->container['startIndex'];
    }

    /**
     * Sets startIndex
     *
     * @param int $startIndex 拉取的起始位置
     *
     * @return $this
     */
    public function setStartIndex($startIndex)
    {
        $this->container['startIndex'] = $startIndex;

        return $this;
    }

    /**
     * Gets maxLimited
     *
     * @return int
     */
    public function getMaxLimited()
    {
        return $this->container['maxLimited'];
    }

    /**
     * Sets maxLimited
     *
     * @param int $maxLimited 每页最多拉取的黑名单数
     *
     * @return $this
     */
    public function setMaxLimited($maxLimited)
    {
        $this->container['maxLimited'] = $maxLimited;

        return $this;
    }

    /**
     * Gets lastSequence
     *
     * @return int
     */
    public function getLastSequence()
    {
        return $this->container['lastSequence'];
    }

    /**
     * Sets lastSequence
     *
     * @param int $lastSequence 上一次拉黑名单时后台返回给客户端的 Seq，初次拉取时为0
     *
     * @return $this
     */
    public function setLastSequence($lastSequence)
    {
        $this->container['lastSequence'] = $lastSequence;

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


