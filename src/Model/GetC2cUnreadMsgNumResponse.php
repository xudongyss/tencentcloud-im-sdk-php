<?php
/**
 * GetC2cUnreadMsgNumResponse
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
 * GetC2cUnreadMsgNumResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GetC2cUnreadMsgNumResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetC2cUnreadMsgNumResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'allC2CUnreadMsgNum' => 'int',
        'c2CUnreadMsgNumList' => 'object[]',
        'errorList' => 'object[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'allC2CUnreadMsgNum' => 'int32',
        'c2CUnreadMsgNumList' => null,
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
        'allC2CUnreadMsgNum' => 'AllC2CUnreadMsgNum',
        'c2CUnreadMsgNumList' => 'C2CUnreadMsgNumList',
        'errorList' => 'ErrorList'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allC2CUnreadMsgNum' => 'setAllC2CUnreadMsgNum',
        'c2CUnreadMsgNumList' => 'setC2CUnreadMsgNumList',
        'errorList' => 'setErrorList'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allC2CUnreadMsgNum' => 'getAllC2CUnreadMsgNum',
        'c2CUnreadMsgNumList' => 'getC2CUnreadMsgNumList',
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

        $this->container['allC2CUnreadMsgNum'] = isset($data['allC2CUnreadMsgNum']) ? $data['allC2CUnreadMsgNum'] : null;
        $this->container['c2CUnreadMsgNumList'] = isset($data['c2CUnreadMsgNumList']) ? $data['c2CUnreadMsgNumList'] : null;
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
     * Gets allC2CUnreadMsgNum
     *
     * @return int|null
     */
    public function getAllC2CUnreadMsgNum()
    {
        return $this->container['allC2CUnreadMsgNum'];
    }

    /**
     * Sets allC2CUnreadMsgNum
     *
     * @param int|null $allC2CUnreadMsgNum 单聊消息总未读数
     *
     * @return $this
     */
    public function setAllC2CUnreadMsgNum($allC2CUnreadMsgNum)
    {
        $this->container['allC2CUnreadMsgNum'] = $allC2CUnreadMsgNum;

        return $this;
    }

    /**
     * Gets c2CUnreadMsgNumList
     *
     * @return object[]|null
     */
    public function getC2CUnreadMsgNumList()
    {
        return $this->container['c2CUnreadMsgNumList'];
    }

    /**
     * Sets c2CUnreadMsgNumList
     *
     * @param object[]|null $c2CUnreadMsgNumList 单聊会话List
     *
     * @return $this
     */
    public function setC2CUnreadMsgNumList($c2CUnreadMsgNumList)
    {
        $this->container['c2CUnreadMsgNumList'] = $c2CUnreadMsgNumList;

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


