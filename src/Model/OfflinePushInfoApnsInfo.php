<?php
/**
 * OfflinePushInfoApnsInfo
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
 * OfflinePushInfoApnsInfo Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class OfflinePushInfoApnsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfflinePushInfo_ApnsInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'badgeMode' => 'int',
        'title' => 'string',
        'subTitle' => 'string',
        'image' => 'string',
        'mutableContent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'badgeMode' => 'int32',
        'title' => null,
        'subTitle' => null,
        'image' => null,
        'mutableContent' => 'int32'
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
        'badgeMode' => 'BadgeMode',
        'title' => 'Title',
        'subTitle' => 'SubTitle',
        'image' => 'Image',
        'mutableContent' => 'MutableContent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'badgeMode' => 'setBadgeMode',
        'title' => 'setTitle',
        'subTitle' => 'setSubTitle',
        'image' => 'setImage',
        'mutableContent' => 'setMutableContent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'badgeMode' => 'getBadgeMode',
        'title' => 'getTitle',
        'subTitle' => 'getSubTitle',
        'image' => 'getImage',
        'mutableContent' => 'getMutableContent'
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
        $this->container['badgeMode'] = isset($data['badgeMode']) ? $data['badgeMode'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['subTitle'] = isset($data['subTitle']) ? $data['subTitle'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
        $this->container['mutableContent'] = isset($data['mutableContent']) ? $data['mutableContent'] : 0;
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
     * Gets badgeMode
     *
     * @return int|null
     */
    public function getBadgeMode()
    {
        return $this->container['badgeMode'];
    }

    /**
     * Sets badgeMode
     *
     * @param int|null $badgeMode 这个字段缺省或者为0表示需要计数，为1表示本条消息不需要计数，即右上角图标数字不增加。
     *
     * @return $this
     */
    public function setBadgeMode($badgeMode)
    {
        $this->container['badgeMode'] = $badgeMode;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title 该字段用于标识 APNs 推送的标题，若填写则会覆盖最上层 Title。
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets subTitle
     *
     * @return string|null
     */
    public function getSubTitle()
    {
        return $this->container['subTitle'];
    }

    /**
     * Sets subTitle
     *
     * @param string|null $subTitle 该字段用于标识 APNs 推送的子标题。
     *
     * @return $this
     */
    public function setSubTitle($subTitle)
    {
        $this->container['subTitle'] = $subTitle;

        return $this;
    }

    /**
     * Gets image
     *
     * @return string|null
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /**
     * Sets image
     *
     * @param string|null $image 该字段用于标识 APNs 携带的图片地址，当客户端拿到该字段时，可以通过下载图片资源的方式将图片展示在弹窗上。
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

        return $this;
    }

    /**
     * Gets mutableContent
     *
     * @return int|null
     */
    public function getMutableContent()
    {
        return $this->container['mutableContent'];
    }

    /**
     * Sets mutableContent
     *
     * @param int|null $mutableContent 为1表示开启 iOS 10 的推送扩展，默认为0。
     *
     * @return $this
     */
    public function setMutableContent($mutableContent)
    {
        $this->container['mutableContent'] = $mutableContent;

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


