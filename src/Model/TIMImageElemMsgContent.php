<?php
/**
 * TIMImageElemMsgContent
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
 * TIMImageElemMsgContent Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class TIMImageElemMsgContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TIMImageElem_MsgContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'uUID' => 'string',
        'imageFormat' => 'int',
        'imageInfoArray' => '\TencentCloud\IM\Model\ImageInfo[]',
        'type' => 'int',
        'size' => 'int',
        'width' => 'int',
        'height' => 'int',
        'uRL' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'uUID' => null,
        'imageFormat' => 'int32',
        'imageInfoArray' => null,
        'type' => 'int32',
        'size' => 'int32',
        'width' => 'int32',
        'height' => 'int32',
        'uRL' => null
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
        'uUID' => 'UUID',
        'imageFormat' => 'ImageFormat',
        'imageInfoArray' => 'ImageInfoArray',
        'type' => 'Type',
        'size' => 'Size',
        'width' => 'Width',
        'height' => 'Height',
        'uRL' => 'URL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'uUID' => 'setUUID',
        'imageFormat' => 'setImageFormat',
        'imageInfoArray' => 'setImageInfoArray',
        'type' => 'setType',
        'size' => 'setSize',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'uRL' => 'setURL'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'uUID' => 'getUUID',
        'imageFormat' => 'getImageFormat',
        'imageInfoArray' => 'getImageInfoArray',
        'type' => 'getType',
        'size' => 'getSize',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'uRL' => 'getURL'
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

    const IMAGE_FORMAT_1 = 1;
    const IMAGE_FORMAT_2 = 2;
    const IMAGE_FORMAT_3 = 3;
    const IMAGE_FORMAT_4 = 4;
    const IMAGE_FORMAT_255 = 255;
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const TYPE_3 = 3;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getImageFormatAllowableValues()
    {
        return [
            self::IMAGE_FORMAT_1,
            self::IMAGE_FORMAT_2,
            self::IMAGE_FORMAT_3,
            self::IMAGE_FORMAT_4,
            self::IMAGE_FORMAT_255,
        ];
    }
    
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
            self::TYPE_3,
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
        $this->container['uUID'] = isset($data['uUID']) ? $data['uUID'] : null;
        $this->container['imageFormat'] = isset($data['imageFormat']) ? $data['imageFormat'] : null;
        $this->container['imageInfoArray'] = isset($data['imageInfoArray']) ? $data['imageInfoArray'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['uRL'] = isset($data['uRL']) ? $data['uRL'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['uUID'] === null) {
            $invalidProperties[] = "'uUID' can't be null";
        }
        if ($this->container['imageFormat'] === null) {
            $invalidProperties[] = "'imageFormat' can't be null";
        }
        $allowedValues = $this->getImageFormatAllowableValues();
        if (!is_null($this->container['imageFormat']) && !in_array($this->container['imageFormat'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'imageFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * Gets uUID
     *
     * @return string
     */
    public function getUUID()
    {
        return $this->container['uUID'];
    }

    /**
     * Sets uUID
     *
     * @param string $uUID uUID
     *
     * @return $this
     */
    public function setUUID($uUID)
    {
        $this->container['uUID'] = $uUID;

        return $this;
    }

    /**
     * Gets imageFormat
     *
     * @return int
     */
    public function getImageFormat()
    {
        return $this->container['imageFormat'];
    }

    /**
     * Sets imageFormat
     *
     * @param int $imageFormat imageFormat
     *
     * @return $this
     */
    public function setImageFormat($imageFormat)
    {
        $allowedValues = $this->getImageFormatAllowableValues();
        if (!in_array($imageFormat, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'imageFormat', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['imageFormat'] = $imageFormat;

        return $this;
    }

    /**
     * Gets imageInfoArray
     *
     * @return \TencentCloud\IM\Model\ImageInfo[]|null
     */
    public function getImageInfoArray()
    {
        return $this->container['imageInfoArray'];
    }

    /**
     * Sets imageInfoArray
     *
     * @param \TencentCloud\IM\Model\ImageInfo[]|null $imageInfoArray imageInfoArray
     *
     * @return $this
     */
    public function setImageInfoArray($imageInfoArray)
    {
        $this->container['imageInfoArray'] = $imageInfoArray;

        return $this;
    }

    /**
     * Gets type
     *
     * @return int|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param int|null $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
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
     * Gets size
     *
     * @return int|null
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int|null $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
    }

    /**
     * Gets width
     *
     * @return int|null
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width
     *
     * @param int|null $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height
     *
     * @return int|null
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height
     *
     * @param int|null $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets uRL
     *
     * @return string|null
     */
    public function getURL()
    {
        return $this->container['uRL'];
    }

    /**
     * Sets uRL
     *
     * @param string|null $uRL uRL
     *
     * @return $this
     */
    public function setURL($uRL)
    {
        $this->container['uRL'] = $uRL;

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


