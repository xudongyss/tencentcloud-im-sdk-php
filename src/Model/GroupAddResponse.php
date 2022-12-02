<?php
/**
 * GroupAddResponse
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
 * GroupAddResponse Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class GroupAddResponse extends CommonResponse 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GroupAddResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'resultItem' => 'object[]',
        'failAccount' => 'string[]',
        'currentSequence' => 'int',
        'errorDisplay' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'resultItem' => null,
        'failAccount' => null,
        'currentSequence' => 'int32',
        'errorDisplay' => null
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
        'resultItem' => 'ResultItem',
        'failAccount' => 'Fail_Account',
        'currentSequence' => 'CurrentSequence',
        'errorDisplay' => 'ErrorDisplay'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'resultItem' => 'setResultItem',
        'failAccount' => 'setFailAccount',
        'currentSequence' => 'setCurrentSequence',
        'errorDisplay' => 'setErrorDisplay'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'resultItem' => 'getResultItem',
        'failAccount' => 'getFailAccount',
        'currentSequence' => 'getCurrentSequence',
        'errorDisplay' => 'getErrorDisplay'
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

        $this->container['resultItem'] = isset($data['resultItem']) ? $data['resultItem'] : null;
        $this->container['failAccount'] = isset($data['failAccount']) ? $data['failAccount'] : null;
        $this->container['currentSequence'] = isset($data['currentSequence']) ? $data['currentSequence'] : null;
        $this->container['errorDisplay'] = isset($data['errorDisplay']) ? $data['errorDisplay'] : null;
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
     * Gets resultItem
     *
     * @return object[]|null
     */
    public function getResultItem()
    {
        return $this->container['resultItem'];
    }

    /**
     * Sets resultItem
     *
     * @param object[]|null $resultItem 好友加入新增分组的结果对象数组
     *
     * @return $this
     */
    public function setResultItem($resultItem)
    {
        $this->container['resultItem'] = $resultItem;

        return $this;
    }

    /**
     * Gets failAccount
     *
     * @return string[]|null
     */
    public function getFailAccount()
    {
        return $this->container['failAccount'];
    }

    /**
     * Sets failAccount
     *
     * @param string[]|null $failAccount 返回处理失败的用户列表，仅当存在失败用户时才返回该字段
     *
     * @return $this
     */
    public function setFailAccount($failAccount)
    {
        $this->container['failAccount'] = $failAccount;

        return $this;
    }

    /**
     * Gets currentSequence
     *
     * @return int|null
     */
    public function getCurrentSequence()
    {
        return $this->container['currentSequence'];
    }

    /**
     * Sets currentSequence
     *
     * @param int|null $currentSequence 返回最新的分组 Sequence
     *
     * @return $this
     */
    public function setCurrentSequence($currentSequence)
    {
        $this->container['currentSequence'] = $currentSequence;

        return $this;
    }

    /**
     * Gets errorDisplay
     *
     * @return string|null
     */
    public function getErrorDisplay()
    {
        return $this->container['errorDisplay'];
    }

    /**
     * Sets errorDisplay
     *
     * @param string|null $errorDisplay 详细的客户端展示信息
     *
     * @return $this
     */
    public function setErrorDisplay($errorDisplay)
    {
        $this->container['errorDisplay'] = $errorDisplay;

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


