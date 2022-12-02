<?php
/**
 * TIMVideoFileElemMsgContent
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
 * TIMVideoFileElemMsgContent Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class TIMVideoFileElemMsgContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TIMVideoFileElem_MsgContent';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'videoUrl' => 'string',
        'videoUUID' => 'string',
        'videoSize' => 'int',
        'videoSecond' => 'int',
        'videoFormat' => 'string',
        'videoDownloadFlag' => 'int',
        'thumbUrl' => 'string',
        'thumbUUID' => 'string',
        'thumbSize' => 'int',
        'thumbWidth' => 'int',
        'thumbHeight' => 'int',
        'thumbFormat' => 'string',
        'thumbDownloadFlag' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'videoUrl' => null,
        'videoUUID' => null,
        'videoSize' => 'int32',
        'videoSecond' => 'int32',
        'videoFormat' => null,
        'videoDownloadFlag' => 'int32',
        'thumbUrl' => null,
        'thumbUUID' => null,
        'thumbSize' => 'int32',
        'thumbWidth' => 'int32',
        'thumbHeight' => 'int32',
        'thumbFormat' => null,
        'thumbDownloadFlag' => 'int32'
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
        'videoUrl' => 'VideoUrl',
        'videoUUID' => 'VideoUUID',
        'videoSize' => 'VideoSize',
        'videoSecond' => 'VideoSecond',
        'videoFormat' => 'VideoFormat',
        'videoDownloadFlag' => 'VideoDownloadFlag',
        'thumbUrl' => 'ThumbUrl',
        'thumbUUID' => 'ThumbUUID',
        'thumbSize' => 'ThumbSize',
        'thumbWidth' => 'ThumbWidth',
        'thumbHeight' => 'ThumbHeight',
        'thumbFormat' => 'ThumbFormat',
        'thumbDownloadFlag' => 'ThumbDownloadFlag'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'videoUrl' => 'setVideoUrl',
        'videoUUID' => 'setVideoUUID',
        'videoSize' => 'setVideoSize',
        'videoSecond' => 'setVideoSecond',
        'videoFormat' => 'setVideoFormat',
        'videoDownloadFlag' => 'setVideoDownloadFlag',
        'thumbUrl' => 'setThumbUrl',
        'thumbUUID' => 'setThumbUUID',
        'thumbSize' => 'setThumbSize',
        'thumbWidth' => 'setThumbWidth',
        'thumbHeight' => 'setThumbHeight',
        'thumbFormat' => 'setThumbFormat',
        'thumbDownloadFlag' => 'setThumbDownloadFlag'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'videoUrl' => 'getVideoUrl',
        'videoUUID' => 'getVideoUUID',
        'videoSize' => 'getVideoSize',
        'videoSecond' => 'getVideoSecond',
        'videoFormat' => 'getVideoFormat',
        'videoDownloadFlag' => 'getVideoDownloadFlag',
        'thumbUrl' => 'getThumbUrl',
        'thumbUUID' => 'getThumbUUID',
        'thumbSize' => 'getThumbSize',
        'thumbWidth' => 'getThumbWidth',
        'thumbHeight' => 'getThumbHeight',
        'thumbFormat' => 'getThumbFormat',
        'thumbDownloadFlag' => 'getThumbDownloadFlag'
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

    const VIDEO_DOWNLOAD_FLAG_2 = 2;
    const THUMB_DOWNLOAD_FLAG_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getVideoDownloadFlagAllowableValues()
    {
        return [
            self::VIDEO_DOWNLOAD_FLAG_2,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getThumbDownloadFlagAllowableValues()
    {
        return [
            self::THUMB_DOWNLOAD_FLAG_2,
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
        $this->container['videoUrl'] = isset($data['videoUrl']) ? $data['videoUrl'] : null;
        $this->container['videoUUID'] = isset($data['videoUUID']) ? $data['videoUUID'] : null;
        $this->container['videoSize'] = isset($data['videoSize']) ? $data['videoSize'] : null;
        $this->container['videoSecond'] = isset($data['videoSecond']) ? $data['videoSecond'] : null;
        $this->container['videoFormat'] = isset($data['videoFormat']) ? $data['videoFormat'] : null;
        $this->container['videoDownloadFlag'] = isset($data['videoDownloadFlag']) ? $data['videoDownloadFlag'] : null;
        $this->container['thumbUrl'] = isset($data['thumbUrl']) ? $data['thumbUrl'] : null;
        $this->container['thumbUUID'] = isset($data['thumbUUID']) ? $data['thumbUUID'] : null;
        $this->container['thumbSize'] = isset($data['thumbSize']) ? $data['thumbSize'] : null;
        $this->container['thumbWidth'] = isset($data['thumbWidth']) ? $data['thumbWidth'] : null;
        $this->container['thumbHeight'] = isset($data['thumbHeight']) ? $data['thumbHeight'] : null;
        $this->container['thumbFormat'] = isset($data['thumbFormat']) ? $data['thumbFormat'] : null;
        $this->container['thumbDownloadFlag'] = isset($data['thumbDownloadFlag']) ? $data['thumbDownloadFlag'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['videoUUID'] === null) {
            $invalidProperties[] = "'videoUUID' can't be null";
        }
        if ($this->container['videoSize'] === null) {
            $invalidProperties[] = "'videoSize' can't be null";
        }
        if ($this->container['videoSecond'] === null) {
            $invalidProperties[] = "'videoSecond' can't be null";
        }
        if ($this->container['videoFormat'] === null) {
            $invalidProperties[] = "'videoFormat' can't be null";
        }
        $allowedValues = $this->getVideoDownloadFlagAllowableValues();
        if (!is_null($this->container['videoDownloadFlag']) && !in_array($this->container['videoDownloadFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'videoDownloadFlag', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['thumbUUID'] === null) {
            $invalidProperties[] = "'thumbUUID' can't be null";
        }
        if ($this->container['thumbSize'] === null) {
            $invalidProperties[] = "'thumbSize' can't be null";
        }
        if ($this->container['thumbWidth'] === null) {
            $invalidProperties[] = "'thumbWidth' can't be null";
        }
        if ($this->container['thumbHeight'] === null) {
            $invalidProperties[] = "'thumbHeight' can't be null";
        }
        if ($this->container['thumbFormat'] === null) {
            $invalidProperties[] = "'thumbFormat' can't be null";
        }
        $allowedValues = $this->getThumbDownloadFlagAllowableValues();
        if (!is_null($this->container['thumbDownloadFlag']) && !in_array($this->container['thumbDownloadFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'thumbDownloadFlag', must be one of '%s'",
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
     * Gets videoUrl
     *
     * @return string|null
     */
    public function getVideoUrl()
    {
        return $this->container['videoUrl'];
    }

    /**
     * Sets videoUrl
     *
     * @param string|null $videoUrl videoUrl
     *
     * @return $this
     */
    public function setVideoUrl($videoUrl)
    {
        $this->container['videoUrl'] = $videoUrl;

        return $this;
    }

    /**
     * Gets videoUUID
     *
     * @return string
     */
    public function getVideoUUID()
    {
        return $this->container['videoUUID'];
    }

    /**
     * Sets videoUUID
     *
     * @param string $videoUUID videoUUID
     *
     * @return $this
     */
    public function setVideoUUID($videoUUID)
    {
        $this->container['videoUUID'] = $videoUUID;

        return $this;
    }

    /**
     * Gets videoSize
     *
     * @return int
     */
    public function getVideoSize()
    {
        return $this->container['videoSize'];
    }

    /**
     * Sets videoSize
     *
     * @param int $videoSize videoSize
     *
     * @return $this
     */
    public function setVideoSize($videoSize)
    {
        $this->container['videoSize'] = $videoSize;

        return $this;
    }

    /**
     * Gets videoSecond
     *
     * @return int
     */
    public function getVideoSecond()
    {
        return $this->container['videoSecond'];
    }

    /**
     * Sets videoSecond
     *
     * @param int $videoSecond videoSecond
     *
     * @return $this
     */
    public function setVideoSecond($videoSecond)
    {
        $this->container['videoSecond'] = $videoSecond;

        return $this;
    }

    /**
     * Gets videoFormat
     *
     * @return string
     */
    public function getVideoFormat()
    {
        return $this->container['videoFormat'];
    }

    /**
     * Sets videoFormat
     *
     * @param string $videoFormat videoFormat
     *
     * @return $this
     */
    public function setVideoFormat($videoFormat)
    {
        $this->container['videoFormat'] = $videoFormat;

        return $this;
    }

    /**
     * Gets videoDownloadFlag
     *
     * @return int|null
     */
    public function getVideoDownloadFlag()
    {
        return $this->container['videoDownloadFlag'];
    }

    /**
     * Sets videoDownloadFlag
     *
     * @param int|null $videoDownloadFlag videoDownloadFlag
     *
     * @return $this
     */
    public function setVideoDownloadFlag($videoDownloadFlag)
    {
        $allowedValues = $this->getVideoDownloadFlagAllowableValues();
        if (!is_null($videoDownloadFlag) && !in_array($videoDownloadFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'videoDownloadFlag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['videoDownloadFlag'] = $videoDownloadFlag;

        return $this;
    }

    /**
     * Gets thumbUrl
     *
     * @return string|null
     */
    public function getThumbUrl()
    {
        return $this->container['thumbUrl'];
    }

    /**
     * Sets thumbUrl
     *
     * @param string|null $thumbUrl thumbUrl
     *
     * @return $this
     */
    public function setThumbUrl($thumbUrl)
    {
        $this->container['thumbUrl'] = $thumbUrl;

        return $this;
    }

    /**
     * Gets thumbUUID
     *
     * @return string
     */
    public function getThumbUUID()
    {
        return $this->container['thumbUUID'];
    }

    /**
     * Sets thumbUUID
     *
     * @param string $thumbUUID thumbUUID
     *
     * @return $this
     */
    public function setThumbUUID($thumbUUID)
    {
        $this->container['thumbUUID'] = $thumbUUID;

        return $this;
    }

    /**
     * Gets thumbSize
     *
     * @return int
     */
    public function getThumbSize()
    {
        return $this->container['thumbSize'];
    }

    /**
     * Sets thumbSize
     *
     * @param int $thumbSize thumbSize
     *
     * @return $this
     */
    public function setThumbSize($thumbSize)
    {
        $this->container['thumbSize'] = $thumbSize;

        return $this;
    }

    /**
     * Gets thumbWidth
     *
     * @return int
     */
    public function getThumbWidth()
    {
        return $this->container['thumbWidth'];
    }

    /**
     * Sets thumbWidth
     *
     * @param int $thumbWidth thumbWidth
     *
     * @return $this
     */
    public function setThumbWidth($thumbWidth)
    {
        $this->container['thumbWidth'] = $thumbWidth;

        return $this;
    }

    /**
     * Gets thumbHeight
     *
     * @return int
     */
    public function getThumbHeight()
    {
        return $this->container['thumbHeight'];
    }

    /**
     * Sets thumbHeight
     *
     * @param int $thumbHeight thumbHeight
     *
     * @return $this
     */
    public function setThumbHeight($thumbHeight)
    {
        $this->container['thumbHeight'] = $thumbHeight;

        return $this;
    }

    /**
     * Gets thumbFormat
     *
     * @return string
     */
    public function getThumbFormat()
    {
        return $this->container['thumbFormat'];
    }

    /**
     * Sets thumbFormat
     *
     * @param string $thumbFormat thumbFormat
     *
     * @return $this
     */
    public function setThumbFormat($thumbFormat)
    {
        $this->container['thumbFormat'] = $thumbFormat;

        return $this;
    }

    /**
     * Gets thumbDownloadFlag
     *
     * @return int|null
     */
    public function getThumbDownloadFlag()
    {
        return $this->container['thumbDownloadFlag'];
    }

    /**
     * Sets thumbDownloadFlag
     *
     * @param int|null $thumbDownloadFlag thumbDownloadFlag
     *
     * @return $this
     */
    public function setThumbDownloadFlag($thumbDownloadFlag)
    {
        $allowedValues = $this->getThumbDownloadFlagAllowableValues();
        if (!is_null($thumbDownloadFlag) && !in_array($thumbDownloadFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'thumbDownloadFlag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['thumbDownloadFlag'] = $thumbDownloadFlag;

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


