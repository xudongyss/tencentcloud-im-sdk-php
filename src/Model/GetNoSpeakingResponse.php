<?php
/**
 * GetNoSpeakingResponse
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
use \TencentCloud\IM\ObjectSerializer;

/**
 * GetNoSpeakingResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetNoSpeakingResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetNoSpeakingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'c2CmsgNospeakingTime' => 'float',
        'groupmsgNospeakingTime' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'c2CmsgNospeakingTime' => null,
        'groupmsgNospeakingTime' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'c2CmsgNospeakingTime' => 'C2CmsgNospeakingTime',
        'groupmsgNospeakingTime' => 'GroupmsgNospeakingTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'c2CmsgNospeakingTime' => 'setC2CmsgNospeakingTime',
        'groupmsgNospeakingTime' => 'setGroupmsgNospeakingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'c2CmsgNospeakingTime' => 'getC2CmsgNospeakingTime',
        'groupmsgNospeakingTime' => 'getGroupmsgNospeakingTime'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['c2CmsgNospeakingTime'] = isset($data['c2CmsgNospeakingTime']) ? $data['c2CmsgNospeakingTime'] : null;
        $this->container['groupmsgNospeakingTime'] = isset($data['groupmsgNospeakingTime']) ? $data['groupmsgNospeakingTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets c2CmsgNospeakingTime
     *
     * @return float|null
     */
    public function getC2CmsgNospeakingTime()
    {
        return $this->container['c2CmsgNospeakingTime'];
    }

    /**
     * Sets c2CmsgNospeakingTime
     *
     * @param float|null $c2CmsgNospeakingTime 单聊消息禁言时长，单位为秒，非负整数。等于 0 代表没有被设置禁言；等于最大值4294967295（十六进制 0xFFFFFFFF）代表被设置永久禁言；其它代表该帐号禁言时长，如果等于3600表示该帐号被禁言一小时
     *
     * @return $this
     */
    public function setC2CmsgNospeakingTime($c2CmsgNospeakingTime)
    {
        $this->container['c2CmsgNospeakingTime'] = $c2CmsgNospeakingTime;

        return $this;
    }

    /**
     * Gets groupmsgNospeakingTime
     *
     * @return float|null
     */
    public function getGroupmsgNospeakingTime()
    {
        return $this->container['groupmsgNospeakingTime'];
    }

    /**
     * Sets groupmsgNospeakingTime
     *
     * @param float|null $groupmsgNospeakingTime 群组消息禁言时长，单位为秒，非负整数。等于0代表没有被设置禁言；等于最大值4294967295（十六进制 0xFFFFFFFF）代表被设置永久禁言；其它代表该帐号禁言时长，如果等于3600表示该帐号被禁言一小时
     *
     * @return $this
     */
    public function setGroupmsgNospeakingTime($groupmsgNospeakingTime)
    {
        $this->container['groupmsgNospeakingTime'] = $groupmsgNospeakingTime;

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


