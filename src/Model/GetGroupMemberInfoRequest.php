<?php
/**
 * GetGroupMemberInfoRequest
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
 * GetGroupMemberInfoRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetGroupMemberInfoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetGroupMemberInfoRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupId' => 'string',
        'memberInfoFilter' => 'string[]',
        'memberRoleFilter' => 'string[]',
        'appDefinedDataFilterGroupMember' => 'string[]',
        'limit' => 'int',
        'offset' => 'int',
        'next' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupId' => null,
        'memberInfoFilter' => null,
        'memberRoleFilter' => null,
        'appDefinedDataFilterGroupMember' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'next' => null
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
        'groupId' => 'GroupId',
        'memberInfoFilter' => 'MemberInfoFilter',
        'memberRoleFilter' => 'MemberRoleFilter',
        'appDefinedDataFilterGroupMember' => 'AppDefinedDataFilter_GroupMember',
        'limit' => 'Limit',
        'offset' => 'Offset',
        'next' => 'Next'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupId' => 'setGroupId',
        'memberInfoFilter' => 'setMemberInfoFilter',
        'memberRoleFilter' => 'setMemberRoleFilter',
        'appDefinedDataFilterGroupMember' => 'setAppDefinedDataFilterGroupMember',
        'limit' => 'setLimit',
        'offset' => 'setOffset',
        'next' => 'setNext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupId' => 'getGroupId',
        'memberInfoFilter' => 'getMemberInfoFilter',
        'memberRoleFilter' => 'getMemberRoleFilter',
        'appDefinedDataFilterGroupMember' => 'getAppDefinedDataFilterGroupMember',
        'limit' => 'getLimit',
        'offset' => 'getOffset',
        'next' => 'getNext'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['memberInfoFilter'] = isset($data['memberInfoFilter']) ? $data['memberInfoFilter'] : null;
        $this->container['memberRoleFilter'] = isset($data['memberRoleFilter']) ? $data['memberRoleFilter'] : null;
        $this->container['appDefinedDataFilterGroupMember'] = isset($data['appDefinedDataFilterGroupMember']) ? $data['appDefinedDataFilterGroupMember'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['next'] = isset($data['next']) ? $data['next'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
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
     * Gets groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
     * Sets groupId
     *
     * @param string $groupId 需要拉取成员信息的群组的 ID
     *
     * @return $this
     */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;

        return $this;
    }

    /**
     * Gets memberInfoFilter
     *
     * @return string[]|null
     */
    public function getMemberInfoFilter()
    {
        return $this->container['memberInfoFilter'];
    }

    /**
     * Sets memberInfoFilter
     *
     * @param string[]|null $memberInfoFilter 需要获取哪些信息， 如果没有该字段则为群成员全部资料，成员信息字段详情请参阅 群成员资料（https://cloud.tencent.com/document/product/269/1502#SelfInfoFilter）
     *
     * @return $this
     */
    public function setMemberInfoFilter($memberInfoFilter)
    {
        $this->container['memberInfoFilter'] = $memberInfoFilter;

        return $this;
    }

    /**
     * Gets memberRoleFilter
     *
     * @return string[]|null
     */
    public function getMemberRoleFilter()
    {
        return $this->container['memberRoleFilter'];
    }

    /**
     * Sets memberRoleFilter
     *
     * @param string[]|null $memberRoleFilter 拉取指定身份的群成员资料。如没有填写该字段，默认为所有身份成员资料，成员身份可以为：“Owner”，“Admin”，“Member”
     *
     * @return $this
     */
    public function setMemberRoleFilter($memberRoleFilter)
    {
        $this->container['memberRoleFilter'] = $memberRoleFilter;

        return $this;
    }

    /**
     * Gets appDefinedDataFilterGroupMember
     *
     * @return string[]|null
     */
    public function getAppDefinedDataFilterGroupMember()
    {
        return $this->container['appDefinedDataFilterGroupMember'];
    }

    /**
     * Sets appDefinedDataFilterGroupMember
     *
     * @param string[]|null $appDefinedDataFilterGroupMember 默认情况是没有的。该字段用来群成员维度的自定义字段过滤器，指定需要获取的群成员维度的自定义字段，群成员维度的自定义字段详情请参阅 自定义字段（https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setAppDefinedDataFilterGroupMember($appDefinedDataFilterGroupMember)
    {
        $this->container['appDefinedDataFilterGroupMember'] = $appDefinedDataFilterGroupMember;

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
     * @param int|null $limit 一次最多获取多少个成员的资料，不得超过6000。如果不填，则获取群内全部成员的信息
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
     * @param int|null $offset 从第几个成员开始获取，如果不填则默认为0，表示从第一个成员开始获取
     *
     * @return $this
     */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;

        return $this;
    }

    /**
     * Gets next
     *
     * @return string|null
     */
    public function getNext()
    {
        return $this->container['next'];
    }

    /**
     * Sets next
     *
     * @param string|null $next 上一次拉取到的成员位置，社群必填，社群不支持 Offset 参数，使用 Next 参数，首次调用填写\"\"，续拉使用返回中的 Next 值
     *
     * @return $this
     */
    public function setNext($next)
    {
        $this->container['next'] = $next;

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


