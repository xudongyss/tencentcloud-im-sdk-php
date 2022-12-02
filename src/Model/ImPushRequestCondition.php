<?php
/**
 * ImPushRequestCondition
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
 * ImPushRequestCondition Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImPushRequestCondition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImPushRequest_Condition';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attrsOr' => 'object',
        'attrsAnd' => 'object',
        'tagsOr' => 'object',
        'tagsAnd' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'attrsOr' => null,
        'attrsAnd' => null,
        'tagsOr' => null,
        'tagsAnd' => null
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
        'attrsOr' => 'AttrsOr',
        'attrsAnd' => 'AttrsAnd',
        'tagsOr' => 'TagsOr',
        'tagsAnd' => 'TagsAnd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attrsOr' => 'setAttrsOr',
        'attrsAnd' => 'setAttrsAnd',
        'tagsOr' => 'setTagsOr',
        'tagsAnd' => 'setTagsAnd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attrsOr' => 'getAttrsOr',
        'attrsAnd' => 'getAttrsAnd',
        'tagsOr' => 'getTagsOr',
        'tagsAnd' => 'getTagsAnd'
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
        $this->container['attrsOr'] = isset($data['attrsOr']) ? $data['attrsOr'] : null;
        $this->container['attrsAnd'] = isset($data['attrsAnd']) ? $data['attrsAnd'] : null;
        $this->container['tagsOr'] = isset($data['tagsOr']) ? $data['tagsOr'] : null;
        $this->container['tagsAnd'] = isset($data['tagsAnd']) ? $data['tagsAnd'] : null;
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
     * Gets attrsOr
     *
     * @return object|null
     */
    public function getAttrsOr()
    {
        return $this->container['attrsOr'];
    }

    /**
     * Sets attrsOr
     *
     * @param object|null $attrsOr 属性的或条件
     *
     * @return $this
     */
    public function setAttrsOr($attrsOr)
    {
        $this->container['attrsOr'] = $attrsOr;

        return $this;
    }

    /**
     * Gets attrsAnd
     *
     * @return object|null
     */
    public function getAttrsAnd()
    {
        return $this->container['attrsAnd'];
    }

    /**
     * Sets attrsAnd
     *
     * @param object|null $attrsAnd 属性的与条件
     *
     * @return $this
     */
    public function setAttrsAnd($attrsAnd)
    {
        $this->container['attrsAnd'] = $attrsAnd;

        return $this;
    }

    /**
     * Gets tagsOr
     *
     * @return object|null
     */
    public function getTagsOr()
    {
        return $this->container['tagsOr'];
    }

    /**
     * Sets tagsOr
     *
     * @param object|null $tagsOr 标签的或条件
     *
     * @return $this
     */
    public function setTagsOr($tagsOr)
    {
        $this->container['tagsOr'] = $tagsOr;

        return $this;
    }

    /**
     * Gets tagsAnd
     *
     * @return object|null
     */
    public function getTagsAnd()
    {
        return $this->container['tagsAnd'];
    }

    /**
     * Sets tagsAnd
     *
     * @param object|null $tagsAnd 标签的与条件
     *
     * @return $this
     */
    public function setTagsAnd($tagsAnd)
    {
        $this->container['tagsAnd'] = $tagsAnd;

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


