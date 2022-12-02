<?php
/**
 * ImportGroupMemberRequestMemberList
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
 * ImportGroupMemberRequestMemberList Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImportGroupMemberRequestMemberList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportGroupMemberRequest_MemberList';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'memberAccount' => 'string',
        'role' => 'string',
        'joinTime' => 'int',
        'unreadMsgNum' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'memberAccount' => null,
        'role' => null,
        'joinTime' => 'int32',
        'unreadMsgNum' => 'int32'
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
        'memberAccount' => 'Member_Account',
        'role' => 'Role',
        'joinTime' => 'JoinTime',
        'unreadMsgNum' => 'UnreadMsgNum'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memberAccount' => 'setMemberAccount',
        'role' => 'setRole',
        'joinTime' => 'setJoinTime',
        'unreadMsgNum' => 'setUnreadMsgNum'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memberAccount' => 'getMemberAccount',
        'role' => 'getRole',
        'joinTime' => 'getJoinTime',
        'unreadMsgNum' => 'getUnreadMsgNum'
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
        $this->container['memberAccount'] = isset($data['memberAccount']) ? $data['memberAccount'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['joinTime'] = isset($data['joinTime']) ? $data['joinTime'] : null;
        $this->container['unreadMsgNum'] = isset($data['unreadMsgNum']) ? $data['unreadMsgNum'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['memberAccount'] === null) {
            $invalidProperties[] = "'memberAccount' can't be null";
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
     * Gets memberAccount
     *
     * @return string
     */
    public function getMemberAccount()
    {
        return $this->container['memberAccount'];
    }

    /**
     * Sets memberAccount
     *
     * @param string $memberAccount 待导入的群成员帐号
     *
     * @return $this
     */
    public function setMemberAccount($memberAccount)
    {
        $this->container['memberAccount'] = $memberAccount;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string|null
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string|null $role 待导入群成员角色；目前只支持填 Admin，不填则为普通成员 Member
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets joinTime
     *
     * @return int|null
     */
    public function getJoinTime()
    {
        return $this->container['joinTime'];
    }

    /**
     * Sets joinTime
     *
     * @param int|null $joinTime 待导入群成员的入群时间
     *
     * @return $this
     */
    public function setJoinTime($joinTime)
    {
        $this->container['joinTime'] = $joinTime;

        return $this;
    }

    /**
     * Gets unreadMsgNum
     *
     * @return int|null
     */
    public function getUnreadMsgNum()
    {
        return $this->container['unreadMsgNum'];
    }

    /**
     * Sets unreadMsgNum
     *
     * @param int|null $unreadMsgNum 待导入群成员的未读消息计数
     *
     * @return $this
     */
    public function setUnreadMsgNum($unreadMsgNum)
    {
        $this->container['unreadMsgNum'] = $unreadMsgNum;

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


