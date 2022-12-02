<?php
/**
 * GetJoinedGroupListRequestResponseFilter
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
 * GetJoinedGroupListRequestResponseFilter Class Doc Comment
 *
 * @category Class
 * @description 分别包含 GroupBaseInfoFilter 和 SelfInfoFilter 两个过滤器； GroupBaseInfoFilter 表示需要拉取哪些基础信息字段，详情请参阅 群组系统；SelfInfoFilter 表示需要拉取用户在每个群组中的哪些个人资料，详情请参阅 群组系统 。
 * @package  TencentCloud\IM

 */
class GetJoinedGroupListRequestResponseFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetJoinedGroupListRequest_ResponseFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'groupBaseInfoFilter' => 'string[]',
        'selfInfoFilter' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'groupBaseInfoFilter' => null,
        'selfInfoFilter' => null
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
        'selfInfoFilter' => 'SelfInfoFilter'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'groupBaseInfoFilter' => 'setGroupBaseInfoFilter',
        'selfInfoFilter' => 'setSelfInfoFilter'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'groupBaseInfoFilter' => 'getGroupBaseInfoFilter',
        'selfInfoFilter' => 'getSelfInfoFilter'
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
        $this->container['selfInfoFilter'] = isset($data['selfInfoFilter']) ? $data['selfInfoFilter'] : null;
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
     * @param string[]|null $groupBaseInfoFilter 需要拉取哪些基础信息字段，详情请参阅 群组系统（https://cloud.tencent.com/document/product/269/1502#GroupBaseInfoFilter）
     *
     * @return $this
     */
    public function setGroupBaseInfoFilter($groupBaseInfoFilter)
    {
        $this->container['groupBaseInfoFilter'] = $groupBaseInfoFilter;

        return $this;
    }

    /**
     * Gets selfInfoFilter
     *
     * @return string[]|null
     */
    public function getSelfInfoFilter()
    {
        return $this->container['selfInfoFilter'];
    }

    /**
     * Sets selfInfoFilter
     *
     * @param string[]|null $selfInfoFilter 需要拉取用户在每个群组中的哪些个人资料，详情请参阅 群组系统 （https://cloud.tencent.com/document/product/269/1502#SelfInfoFilter）。
     *
     * @return $this
     */
    public function setSelfInfoFilter($selfInfoFilter)
    {
        $this->container['selfInfoFilter'] = $selfInfoFilter;

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


