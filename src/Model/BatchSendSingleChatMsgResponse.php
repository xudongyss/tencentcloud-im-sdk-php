<?php
/**
 * BatchSendSingleChatMsgResponse
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
 * BatchSendSingleChatMsgResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class BatchSendSingleChatMsgResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BatchSendSingleChatMsgResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'msgTime' => 'int',
        'msgKey' => 'string',
        'errorList' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'msgTime' => 'int32',
        'msgKey' => null,
        'errorList' => null
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
        'msgTime' => 'MsgTime',
        'msgKey' => 'MsgKey',
        'errorList' => 'ErrorList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'msgTime' => 'setMsgTime',
        'msgKey' => 'setMsgKey',
        'errorList' => 'setErrorList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'msgTime' => 'getMsgTime',
        'msgKey' => 'getMsgKey',
        'errorList' => 'getErrorList'
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

        $this->container['msgTime'] = isset($data['msgTime']) ? $data['msgTime'] : null;
        $this->container['msgKey'] = isset($data['msgKey']) ? $data['msgKey'] : null;
        $this->container['errorList'] = isset($data['errorList']) ? $data['errorList'] : null;
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
     * Gets msgTime
     *
     * @return int|null
     */
    public function getMsgTime()
    {
        return $this->container['msgTime'];
    }

    /**
     * Sets msgTime
     *
     * @param int|null $msgTime msgTime
     *
     * @return $this
     */
    public function setMsgTime($msgTime)
    {
        $this->container['msgTime'] = $msgTime;

        return $this;
    }

    /**
     * Gets msgKey
     *
     * @return string|null
     */
    public function getMsgKey()
    {
        return $this->container['msgKey'];
    }

    /**
     * Sets msgKey
     *
     * @param string|null $msgKey msgKey
     *
     * @return $this
     */
    public function setMsgKey($msgKey)
    {
        $this->container['msgKey'] = $msgKey;

        return $this;
    }

    /**
     * Gets errorList
     *
     * @return object[]|null
     */
    public function getErrorList()
    {
        return $this->container['errorList'];
    }

    /**
     * Sets errorList
     *
     * @param object[]|null $errorList errorList
     *
     * @return $this
     */
    public function setErrorList($errorList)
    {
        $this->container['errorList'] = $errorList;

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


