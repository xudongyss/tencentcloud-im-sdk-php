<?php
/**
 * GetGroupInfoRequestResponseFilter
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
 * GetGroupInfoRequestResponseFilter Class Doc Comment
 *
 * @category Class
 * @description 包含三个过滤器：GroupBaseInfoFilter，MemberInfoFilter，AppDefinedDataFilter_Group，分别是基础信息字段过滤器，成员信息字段过滤器，群组维度的自定义字段过滤器
 * @package  TencentCloud\IM

 */
class GetGroupInfoRequestResponseFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetGroupInfoRequest_ResponseFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupBaseInfoFilter' => 'string[]',
        'memberInfoFilter' => 'string[]',
        'appDefinedDataFilterGroup' => 'string[]',
        'appDefinedDataFilterGroupMember' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupBaseInfoFilter' => null,
        'memberInfoFilter' => null,
        'appDefinedDataFilterGroup' => null,
        'appDefinedDataFilterGroupMember' => null
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
        'groupBaseInfoFilter' => 'GroupBaseInfoFilter',
        'memberInfoFilter' => 'MemberInfoFilter',
        'appDefinedDataFilterGroup' => 'AppDefinedDataFilter_Group',
        'appDefinedDataFilterGroupMember' => 'AppDefinedDataFilter_GroupMember'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupBaseInfoFilter' => 'setGroupBaseInfoFilter',
        'memberInfoFilter' => 'setMemberInfoFilter',
        'appDefinedDataFilterGroup' => 'setAppDefinedDataFilterGroup',
        'appDefinedDataFilterGroupMember' => 'setAppDefinedDataFilterGroupMember'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupBaseInfoFilter' => 'getGroupBaseInfoFilter',
        'memberInfoFilter' => 'getMemberInfoFilter',
        'appDefinedDataFilterGroup' => 'getAppDefinedDataFilterGroup',
        'appDefinedDataFilterGroupMember' => 'getAppDefinedDataFilterGroupMember'
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
        $this->container['groupBaseInfoFilter'] = isset($data['groupBaseInfoFilter']) ? $data['groupBaseInfoFilter'] : null;
        $this->container['memberInfoFilter'] = isset($data['memberInfoFilter']) ? $data['memberInfoFilter'] : null;
        $this->container['appDefinedDataFilterGroup'] = isset($data['appDefinedDataFilterGroup']) ? $data['appDefinedDataFilterGroup'] : null;
        $this->container['appDefinedDataFilterGroupMember'] = isset($data['appDefinedDataFilterGroupMember']) ? $data['appDefinedDataFilterGroupMember'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets groupBaseInfoFilter
     *
     * @return string[]|null
     */
    public function getGroupBaseInfoFilter()
    {
        return $this->container['groupBaseInfoFilter'];
    }

    /**
     * Sets groupBaseInfoFilter
     *
     * @param string[]|null $groupBaseInfoFilter 基础信息字段过滤器，指定需要获取的基础信息字段，基础信息字段详情请参阅 群基础资料（https://cloud.tencent.com/document/product/269/1502#GroupBaseInfoFilter）
     *
     * @return $this
     */
    public function setGroupBaseInfoFilter($groupBaseInfoFilter)
    {
        $this->container['groupBaseInfoFilter'] = $groupBaseInfoFilter;

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
     * @param string[]|null $memberInfoFilter 成员信息字段过滤器，指定需要获取的成员信息字段，成员信息字段详情请参阅 群成员资料（https://cloud.tencent.com/document/product/269/1502#SelfInfoFilter）
     *
     * @return $this
     */
    public function setMemberInfoFilter($memberInfoFilter)
    {
        $this->container['memberInfoFilter'] = $memberInfoFilter;

        return $this;
    }

    /**
     * Gets appDefinedDataFilterGroup
     *
     * @return string[]|null
     */
    public function getAppDefinedDataFilterGroup()
    {
        return $this->container['appDefinedDataFilterGroup'];
    }

    /**
     * Sets appDefinedDataFilterGroup
     *
     * @param string[]|null $appDefinedDataFilterGroup 该字段用来群组维度的自定义字段过滤器，指定需要获取的群组维度的自定义字段，详情请参阅 自定义字段（https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setAppDefinedDataFilterGroup($appDefinedDataFilterGroup)
    {
        $this->container['appDefinedDataFilterGroup'] = $appDefinedDataFilterGroup;

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
     * @param string[]|null $appDefinedDataFilterGroupMember 该字段用来群成员维度的自定义字段过滤器，指定需要获取的群成员维度的自定义字段，详情请参阅 自定义字段（https://cloud.tencent.com/document/product/269/1502#.E8.87.AA.E5.AE.9A.E4.B9.89.E5.AD.97.E6.AE.B5）
     *
     * @return $this
     */
    public function setAppDefinedDataFilterGroupMember($appDefinedDataFilterGroupMember)
    {
        $this->container['appDefinedDataFilterGroupMember'] = $appDefinedDataFilterGroupMember;

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


