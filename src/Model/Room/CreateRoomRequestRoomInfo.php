<?php

namespace TencentCloud\IM\Model\Room;

use ArrayAccess;
use TencentCloud\IM\Model\ModelInterface;
use TencentCloud\IM\ObjectSerializer;

class CreateRoomRequestRoomInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateRoomRequest_RoomInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'roomId' => 'string',
        'roomName' => 'string',
        'roomType' => 'string',
        'ownerAccount' => 'string'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'roomId' => null,
        'roomName' => null,
        'roomType' => null,
        'ownerAccount' => null
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
        'roomId' => 'RoomId',
        'roomName' => 'RoomName',
        'roomType' => 'RoomType',
        'ownerAccount' => 'Owner_Account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roomId' => 'setRoomId',
        'roomName' => 'setRoomName',
        'roomType' => 'setRoomType',
        'ownerAccount' => 'setOwnerAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roomId' => 'getRoomId',
        'roomName' => 'getRoomName',
        'roomType' => 'getRoomType',
        'ownerAccount' => 'getOwnerAccount'
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
        $this->container['roomId'] = isset($data['roomId']) ? $data['roomId'] : null;
        $this->container['roomName'] = isset($data['roomName']) ? $data['roomName'] : null;
        $this->container['roomType'] = isset($data['roomType']) ? $data['roomType'] : null;
        $this->container['ownerAccount'] = isset($data['roomName']) ? $data['ownerAccount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['roomId'] === null) {
            $invalidProperties[] = "'roomId' can't be null";
        }

        if ($this->container['roomType'] === null) {
            $invalidProperties[] = "'roomType' can't be null";
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

    public function getRoomId()
    {
        return $this->container['roomId'];
    }

    public function setRoomId($roomId)
    {
        $this->container['roomId'] = $roomId;
        return $this;
    }

    public function getRoomName()
    {
        return $this->container['roomName'];
    }

    public function setRoomName($roomName)
    {
        $this->container['roomName'] = $roomName;
        return $this;
    }

    public function getRoomType()
    {
        return $this->container['roomType'];
    }

    public function setRoomType($roomType)
    {
        $this->container['roomType'] = $roomType;
        return $this;
    }

    public function getOwnerAccount()
    {
        return $this->container['ownerAccount'];
    }

    public function setOwnerAccount($ownerAccount)
    {
        $this->container['ownerAccount'] = $ownerAccount;
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
     * @param mixed $value Value to be set
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