<?php
/**
 * GetRecentContactListGroupDeleteRequest
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
 * GetRecentContactListGroupDeleteRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetRecentContactListGroupDeleteRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetRecentContactListGroupDeleteRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'fromAccount' => 'string',
        'type' => 'int',
        'toAccount' => 'string',
        'toGroupid' => 'string',
        'clearRamble' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'fromAccount' => null,
        'type' => 'int32',
        'toAccount' => null,
        'toGroupid' => null,
        'clearRamble' => 'int32'
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
        'type' => 'Type',
        'toAccount' => 'To_Account',
        'toGroupid' => 'ToGroupid',
        'clearRamble' => 'ClearRamble'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fromAccount' => 'setFromAccount',
        'type' => 'setType',
        'toAccount' => 'setToAccount',
        'toGroupid' => 'setToGroupid',
        'clearRamble' => 'setClearRamble'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fromAccount' => 'getFromAccount',
        'type' => 'getType',
        'toAccount' => 'getToAccount',
        'toGroupid' => 'getToGroupid',
        'clearRamble' => 'getClearRamble'
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

    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const CLEAR_RAMBLE_1 = 1;
    const CLEAR_RAMBLE_0 = 0;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_1,
            self::TYPE_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getClearRambleAllowableValues()
    {
        return [
            self::CLEAR_RAMBLE_1,
            self::CLEAR_RAMBLE_0,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['toGroupid'] = isset($data['toGroupid']) ? $data['toGroupid'] : null;
        $this->container['clearRamble'] = isset($data['clearRamble']) ? $data['clearRamble'] : null;
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
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getClearRambleAllowableValues();
        if (!is_null($this->container['clearRamble']) && !in_array($this->container['clearRamble'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'clearRamble', must be one of '%s'",
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
     * @param string $fromAccount 请求删除该 UserID 的会话
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int $type 会话类型：1 表示 C2C 会话；2 表示 G2C 会话
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets toAccount
     *
     * @return string|null
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string|null $toAccount C2C 会话才赋值，C2C 会话方的 UserID
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets toGroupid
     *
     * @return string|null
     */
    public function getToGroupid()
    {
        return $this->container['toGroupid'];
    }

    /**
     * Sets toGroupid
     *
     * @param string|null $toGroupid G2C 会话才赋值，G2C 会话的群 ID
     *
     * @return $this
     */
    public function setToGroupid($toGroupid)
    {
        $this->container['toGroupid'] = $toGroupid;

        return $this;
    }

    /**
     * Gets clearRamble
     *
     * @return int|null
     */
    public function getClearRamble()
    {
        return $this->container['clearRamble'];
    }

    /**
     * Sets clearRamble
     *
     * @param int|null $clearRamble 是否清理漫游消息：1 表示清理漫游消息；0 表示不清理漫游消息
     *
     * @return $this
     */
    public function setClearRamble($clearRamble)
    {
        $allowedValues = $this->getClearRambleAllowableValues();
        if (!is_null($clearRamble) && !in_array($clearRamble, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'clearRamble', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['clearRamble'] = $clearRamble;

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


