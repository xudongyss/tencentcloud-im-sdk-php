<?php
/**
 * OfflinePushInfo
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
 * OfflinePushInfo Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class OfflinePushInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OfflinePushInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'pushFlag' => 'int',
        'title' => 'string',
        'desc' => 'string',
        'ext' => 'string',
        'androidInfo' => '\TencentCloud\IM\Model\OfflinePushInfoAndroidInfo',
        'apnsInfo' => '\TencentCloud\IM\Model\OfflinePushInfoApnsInfo'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'pushFlag' => 'int32',
        'title' => null,
        'desc' => null,
        'ext' => null,
        'androidInfo' => null,
        'apnsInfo' => null
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
        'pushFlag' => 'PushFlag',
        'title' => 'Title',
        'desc' => 'Desc',
        'ext' => 'Ext',
        'androidInfo' => 'AndroidInfo',
        'apnsInfo' => 'ApnsInfo'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pushFlag' => 'setPushFlag',
        'title' => 'setTitle',
        'desc' => 'setDesc',
        'ext' => 'setExt',
        'androidInfo' => 'setAndroidInfo',
        'apnsInfo' => 'setApnsInfo'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pushFlag' => 'getPushFlag',
        'title' => 'getTitle',
        'desc' => 'getDesc',
        'ext' => 'getExt',
        'androidInfo' => 'getAndroidInfo',
        'apnsInfo' => 'getApnsInfo'
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

    const PUSH_FLAG_0 = 0;
    const PUSH_FLAG_1 = 1;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPushFlagAllowableValues()
    {
        return [
            self::PUSH_FLAG_0,
            self::PUSH_FLAG_1,
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
        $this->container['pushFlag'] = isset($data['pushFlag']) ? $data['pushFlag'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['ext'] = isset($data['ext']) ? $data['ext'] : null;
        $this->container['androidInfo'] = isset($data['androidInfo']) ? $data['androidInfo'] : null;
        $this->container['apnsInfo'] = isset($data['apnsInfo']) ? $data['apnsInfo'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPushFlagAllowableValues();
        if (!is_null($this->container['pushFlag']) && !in_array($this->container['pushFlag'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pushFlag', must be one of '%s'",
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
     * Gets pushFlag
     *
     * @return int|null
     */
    public function getPushFlag()
    {
        return $this->container['pushFlag'];
    }

    /**
     * Sets pushFlag
     *
     * @param int|null $pushFlag 0表示推送，1表示不离线推送。
     *
     * @return $this
     */
    public function setPushFlag($pushFlag)
    {
        $allowedValues = $this->getPushFlagAllowableValues();
        if (!is_null($pushFlag) && !in_array($pushFlag, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pushFlag', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pushFlag'] = $pushFlag;

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
     * @param string|null $title 离线推送标题。该字段为 iOS 和 Android 共用。
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets desc
     *
     * @return string|null
     */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
     * Sets desc
     *
     * @param string|null $desc 离线推送内容。该字段会覆盖上面各种消息元素 TIMMsgElement 的离线推送展示文本。若发送的消息只有一个 TIMCustomElem 自定义消息元素，该 Desc 字段会覆盖 TIMCustomElem 中的 Desc 字段。如果两个 Desc 字段都不填，将收不到该自定义消息的离线推送。
     *
     * @return $this
     */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;

        return $this;
    }

    /**
     * Gets ext
     *
     * @return string|null
     */
    public function getExt()
    {
        return $this->container['ext'];
    }

    /**
     * Sets ext
     *
     * @param string|null $ext 离线推送透传内容。由于国内各 Android 手机厂商的推送平台要求各不一样，请保证此字段为 JSON 格式，否则可能会导致收不到某些厂商的离线推送。
     *
     * @return $this
     */
    public function setExt($ext)
    {
        $this->container['ext'] = $ext;

        return $this;
    }

    /**
     * Gets androidInfo
     *
     * @return \TencentCloud\IM\Model\OfflinePushInfoAndroidInfo|null
     */
    public function getAndroidInfo()
    {
        return $this->container['androidInfo'];
    }

    /**
     * Sets androidInfo
     *
     * @param \TencentCloud\IM\Model\OfflinePushInfoAndroidInfo|null $androidInfo androidInfo
     *
     * @return $this
     */
    public function setAndroidInfo($androidInfo)
    {
        $this->container['androidInfo'] = $androidInfo;

        return $this;
    }

    /**
     * Gets apnsInfo
     *
     * @return \TencentCloud\IM\Model\OfflinePushInfoApnsInfo|null
     */
    public function getApnsInfo()
    {
        return $this->container['apnsInfo'];
    }

    /**
     * Sets apnsInfo
     *
     * @param \TencentCloud\IM\Model\OfflinePushInfoApnsInfo|null $apnsInfo apnsInfo
     *
     * @return $this
     */
    public function setApnsInfo($apnsInfo)
    {
        $this->container['apnsInfo'] = $apnsInfo;

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


