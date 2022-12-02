<?php
/**
 * TIMSoundElemMsgContent
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
 * TIMSoundElemMsgContent Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class TIMSoundElemMsgContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TIMSoundElem_MsgContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'uUID' => 'string',
        'size' => 'int',
        'second' => 'int',
        'downloadFlag' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'url' => null,
        'uUID' => null,
        'size' => 'int32',
        'second' => 'int32',
        'downloadFlag' => 'int32'
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
        'url' => 'Url',
        'uUID' => 'UUID',
        'size' => 'Size',
        'second' => 'Second',
        'downloadFlag' => 'Download_Flag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'uUID' => 'setUUID',
        'size' => 'setSize',
        'second' => 'setSecond',
        'downloadFlag' => 'setDownloadFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'uUID' => 'getUUID',
        'size' => 'getSize',
        'second' => 'getSecond',
        'downloadFlag' => 'getDownloadFlag'
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

    const DOWNLOAD_FLAG_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDownloadFlagAllowableValues()
    {
        return [
            self::DOWNLOAD_FLAG_2,
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
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['uUID'] = isset($data['uUID']) ? $data['uUID'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['second'] = isset($data['second']) ? $data['second'] : null;
        $this->container['downloadFlag'] = isset($data['downloadFlag']) ? $data['downloadFlag'] : DOWNLOAD_FLAG_2;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['uUID'] === null) {
            $invalidProperties[] = "'uUID' can't be null";
        }
        if ($this->container['downloadFlag'] === null) {
            $invalidProperties[] = "'downloadFlag' can't be null";
        }
        $allowedValues = $this->getDownloadFlagAllowableValues();
        if (!is_null($this->container['downloadFlag']) && !in_array($this->container['downloadFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'downloadFlag', must be one of '%s'",
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
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
     * Gets second
     *
     * @return int|null
     */
    public function getSecond()
    {
        return $this->container['second'];
    }

    /**
     * Sets second
     *
     * @param int|null $second second
     *
     * @return $this
     */
    public function setSecond($second)
    {
        $this->container['second'] = $second;

        return $this;
    }

    /**
     * Gets downloadFlag
     *
     * @return int
     */
    public function getDownloadFlag()
    {
        return $this->container['downloadFlag'];
    }

    /**
     * Sets downloadFlag
     *
     * @param int $downloadFlag downloadFlag
     *
     * @return $this
     */
    public function setDownloadFlag($downloadFlag)
    {
        $allowedValues = $this->getDownloadFlagAllowableValues();
        if (!in_array($downloadFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'downloadFlag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['downloadFlag'] = $downloadFlag;

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


