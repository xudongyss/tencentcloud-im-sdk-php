<?php
/**
 * GetJoinedGroupListRequest
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
 * GetJoinedGroupListRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetJoinedGroupListRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetJoinedGroupListRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'memberAccount' => 'string',
        'withHugeGroups' => 'int',
        'withNoActiveGroups' => 'int',
        'limit' => 'int',
        'offset' => 'int',
        'groupType' => 'string',
        'responseFilter' => '\TencentCloud\IM\Model\GetJoinedGroupListRequestResponseFilter'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'memberAccount' => null,
        'withHugeGroups' => 'int32',
        'withNoActiveGroups' => 'int32',
        'limit' => 'int32',
        'offset' => 'int32',
        'groupType' => null,
        'responseFilter' => null
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
        'withHugeGroups' => 'WithHugeGroups',
        'withNoActiveGroups' => 'WithNoActiveGroups',
        'limit' => 'Limit',
        'offset' => 'Offset',
        'groupType' => 'GroupType',
        'responseFilter' => 'ResponseFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'memberAccount' => 'setMemberAccount',
        'withHugeGroups' => 'setWithHugeGroups',
        'withNoActiveGroups' => 'setWithNoActiveGroups',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'groupType' => 'setGroupType',
        'responseFilter' => 'setResponseFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'memberAccount' => 'getMemberAccount',
        'withHugeGroups' => 'getWithHugeGroups',
        'withNoActiveGroups' => 'getWithNoActiveGroups',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'groupType' => 'getGroupType',
        'responseFilter' => 'getResponseFilter'
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

    const WITH_HUGE_GROUPS_0 = 0;
    const WITH_HUGE_GROUPS_1 = 1;
    const WITH_NO_ACTIVE_GROUPS_0 = 0;
    const WITH_NO_ACTIVE_GROUPS_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWithHugeGroupsAllowableValues()
    {
        return [
            self::WITH_HUGE_GROUPS_0,
            self::WITH_HUGE_GROUPS_1,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWithNoActiveGroupsAllowableValues()
    {
        return [
            self::WITH_NO_ACTIVE_GROUPS_0,
            self::WITH_NO_ACTIVE_GROUPS_1,
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
        $this->container['memberAccount'] = isset($data['memberAccount']) ? $data['memberAccount'] : null;
        $this->container['withHugeGroups'] = isset($data['withHugeGroups']) ? $data['withHugeGroups'] : null;
        $this->container['withNoActiveGroups'] = isset($data['withNoActiveGroups']) ? $data['withNoActiveGroups'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['responseFilter'] = isset($data['responseFilter']) ? $data['responseFilter'] : null;
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
        $allowedValues = $this->getWithHugeGroupsAllowableValues();
        if (!is_null($this->container['withHugeGroups']) && !in_array($this->container['withHugeGroups'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'withHugeGroups', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWithNoActiveGroupsAllowableValues();
        if (!is_null($this->container['withNoActiveGroups']) && !in_array($this->container['withNoActiveGroups'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'withNoActiveGroups', must be one of '%s'",
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
     * @param string $memberAccount 需要查询的用户帐号
     *
     * @return $this
     */
    public function setMemberAccount($memberAccount)
    {
        $this->container['memberAccount'] = $memberAccount;

        return $this;
    }

    /**
     * Gets withHugeGroups
     *
     * @return int|null
     */
    public function getWithHugeGroups()
    {
        return $this->container['withHugeGroups'];
    }

    /**
     * Sets withHugeGroups
     *
     * @param int|null $withHugeGroups 是否获取用户加入的 AVChatRoom(直播群)，0表示不获取，1表示获取。默认为0
     *
     * @return $this
     */
    public function setWithHugeGroups($withHugeGroups)
    {
        $allowedValues = $this->getWithHugeGroupsAllowableValues();
        if (!is_null($withHugeGroups) && !in_array($withHugeGroups, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'withHugeGroups', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['withHugeGroups'] = $withHugeGroups;

        return $this;
    }

    /**
     * Gets withNoActiveGroups
     *
     * @return int|null
     */
    public function getWithNoActiveGroups()
    {
        return $this->container['withNoActiveGroups'];
    }

    /**
     * Sets withNoActiveGroups
     *
     * @param int|null $withNoActiveGroups 是否获取用户已加入但未激活的 Private（即新版本中 Work，好友工作群) 群信息，0表示不获取，1表示获取。默认为0
     *
     * @return $this
     */
    public function setWithNoActiveGroups($withNoActiveGroups)
    {
        $allowedValues = $this->getWithNoActiveGroupsAllowableValues();
        if (!is_null($withNoActiveGroups) && !in_array($withNoActiveGroups, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'withNoActiveGroups', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['withNoActiveGroups'] = $withNoActiveGroups;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int|null
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int|null $limit 单次拉取的群组数量，如果不填代表所有群组
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets offset
     *
     * @return int|null
     */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
     * Sets offset
     *
     * @param int|null $offset 从第多少个群组开始拉取
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets groupType
     *
     * @return string|null
     */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
     * Sets groupType
     *
     * @param string|null $groupType 拉取哪种群组类型，例如 Public(陌生人社交群)，Private（即新版本Work，好友工作群)，ChatRoom （即新版本Meeting，会议群），AVChatRoom(直播群)，Community（社群），不填为拉取所有
     *
     * @return $this
     */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;

        return $this;
    }

    /**
     * Gets responseFilter
     *
     * @return \TencentCloud\IM\Model\GetJoinedGroupListRequestResponseFilter|null
     */
    public function getResponseFilter()
    {
        return $this->container['responseFilter'];
    }

    /**
     * Sets responseFilter
     *
     * @param \TencentCloud\IM\Model\GetJoinedGroupListRequestResponseFilter|null $responseFilter responseFilter
     *
     * @return $this
     */
    public function setResponseFilter($responseFilter)
    {
        $this->container['responseFilter'] = $responseFilter;

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


