<?php
namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

class CreateRoomRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'CreateRoomRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'roomInfo' => '\TencentCloud\IM\Model\CreateRoomRequestRoomInfo',
        'scheduleInviteeListAccount' => 'string[]'
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPIFormats = [
        'roomInfo' => null,
        'scheduleInviteeListAccount' => null
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
        'roomInfo' => 'RoomInfo',
        'scheduleInviteeListAccount' => 'ScheduleInviteeList_Account'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'roomInfo' => 'setRoomInfo',
        'scheduleInviteeListAccount' => 'setScheduleInviteeListAccount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'roomInfo' => 'getRoomInfo',
        'scheduleInviteeListAccount' => 'getScheduleInviteeListAccount',
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
        $this->container['roomInfo'] = isset($data['roomInfo']) ? $data['roomInfo'] : null;
        $this->container['scheduleInviteeListAccount'] = isset($data['scheduleInviteeListAccount']) ? $data['scheduleInviteeListAccount'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['roomInfo'] === null) {
            $invalidProperties[] = "'roomInfo' can't be null";
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
     * Gets roomInfo
     *
     * @return \TencentCloud\IM\Model\CreateRoomRequestRoomInfo
     */
    public function getRoomInfo()
    {
        return $this->container['roomInfo'];
    }

    /**
     * Sets roomInfo
     *
     * @param \TencentCloud\IM\Model\CreateRoomRequestRoomInfo $roomInfo
     *
     * @return $this
     */
    public function setRoomInfo($roomInfo)
    {
        $this->container['roomInfo'] = $roomInfo;

        return $this;
    }

    /**
     * Gets scheduleInviteeListAccount
     *
     * @return string[]
     */
    public function getScheduleInviteeListAccount()
    {
        return $this->container['scheduleInviteeListAccount'];
    }

    /**
     * Sets memberList
     *
     * @param string[] $scheduleInviteeListAccount 预约成员列表
     *
     * @return $this
     */
    public function setScheduleInviteeListAccount($scheduleInviteeListAccount)
    {
        $this->container['scheduleInviteeListAccount'] = $scheduleInviteeListAccount;

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