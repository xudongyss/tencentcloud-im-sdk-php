<?php
/**
 * SetNoSpeakingRequest
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
 * SetNoSpeakingRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class SetNoSpeakingRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SetNoSpeakingRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'setAccount' => 'string',
        'c2CmsgNospeakingTime' => 'int',
        'groupmsgNospeakingTime' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'setAccount' => null,
        'c2CmsgNospeakingTime' => 'int32',
        'groupmsgNospeakingTime' => 'int32'
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
        'setAccount' => 'Set_Account',
        'c2CmsgNospeakingTime' => 'C2CmsgNospeakingTime',
        'groupmsgNospeakingTime' => 'GroupmsgNospeakingTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'setAccount' => 'setSetAccount',
        'c2CmsgNospeakingTime' => 'setC2CmsgNospeakingTime',
        'groupmsgNospeakingTime' => 'setGroupmsgNospeakingTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'setAccount' => 'getSetAccount',
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
        $this->container['setAccount'] = isset($data['setAccount']) ? $data['setAccount'] : null;
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
        $invalidProperties = [];

        if ($this->container['setAccount'] === null) {
            $invalidProperties[] = "'setAccount' can't be null";
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
     * Gets setAccount
     *
     * @return string
     */
    public function getSetAccount()
    {
        return $this->container['setAccount'];
    }

    /**
     * Sets setAccount
     *
     * @param string $setAccount 设置禁言配置的帐号
     *
     * @return $this
     */
    public function setSetAccount($setAccount)
    {
        $this->container['setAccount'] = $setAccount;

        return $this;
    }

    /**
     * Gets c2CmsgNospeakingTime
     *
     * @return int|null
     */
    public function getC2CmsgNospeakingTime()
    {
        return $this->container['c2CmsgNospeakingTime'];
    }

    /**
     * Sets c2CmsgNospeakingTime
     *
     * @param int|null $c2CmsgNospeakingTime 单聊消息禁言时间，单位为秒，非负整数，最大值为4294967295（十六进制 0xFFFFFFFF） 0表示取消该帐号的单聊消息禁言 4294967295表示该帐号被设置永久禁言 其它值表示该帐号具体的禁言时间
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
     * @return int|null
     */
    public function getGroupmsgNospeakingTime()
    {
        return $this->container['groupmsgNospeakingTime'];
    }

    /**
     * Sets groupmsgNospeakingTime
     *
     * @param int|null $groupmsgNospeakingTime 群组消息禁言时间，单位为秒，非负整数，最大值为4294967295（十六进制 0xFFFFFFFF） 0表示取消该帐号的群组消息禁言  4294967295表示该帐号被设置永久禁言 其它值表示该帐号的具体禁言时间
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


